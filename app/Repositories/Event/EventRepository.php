<?php

namespace App\Repositories\Event;

use App\Components\CommonComponent;
use App\Enums\PublishStatus;
use App\Http\Controllers\BaseController;
use App\Models\Event;
use App\Models\EventCondition;
use App\Models\EventCredit;
use App\Models\EventFile;
use App\Models\EventReward;
use App\Models\EventTag;
use App\Models\Tag;
use App\Models\UserCredit;
use App\Repositories\Event\EventInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EventRepository extends BaseController implements EventInterface
{
    private Event $event;

    private EventCondition $eventCondition;

    private EventCredit $eventCredit;

    private EventFile $eventFile;

    private EventReward $eventReward;

    private Tag $tag;

    private EventTag $eventTag;

    public function __construct(Event $event, EventCondition $eventCondition, EventCredit $eventCredit, EventFile $eventFile,
        EventReward $eventReward, Tag $tag, EventTag $eventTag)
    {
        $this->event = $event;
        $this->eventCondition = $eventCondition;
        $this->eventCredit = $eventCredit;
        $this->eventFile = $eventFile;
        $this->eventReward = $eventReward;
        $this->tag = $tag;
        $this->eventTag = $eventTag;
    }

    public function get()
    {
        return $this->event
        ->with([
            'category',
            'eventTags',
            'eventTags.tag',
            'user',
            'eventCondition',
        ])
        ->where('created_user_id', Auth::guard('user')->user()->id)
        ->where(function ($q) {
            $q->orWhere(function ($q) {
                $q->where('publish_flag', PublishStatus::UNPUBLISH);
                $q->whereDate('reservation_date', '>=', Carbon::now());
            });
            $q->orWhere(function ($q) {
                $q->where('publish_flag', PublishStatus::PUBLISH);
                $q->where('publish_end_datetime', '>=', Carbon::now());
            });
        })->orderBy('publish_end_datetime', 'DESC')->get();
    }

    public function close()
    {
        return $this->event
        ->with([
            'category',
            'eventTags',
            'eventTags.tag',
            'user',
            'eventCondition',
        ])
        ->where('created_user_id', Auth::guard('user')->user()->id)
        ->where(function ($q) {
            $q->where('publish_flag', PublishStatus::PUBLISH);
            $q->where('publish_end_datetime', '<', Carbon::now());
        })->orderBy('publish_end_datetime', 'DESC')->get();
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }

    public function eventOfUser($id)
    {
        return $this->event
            ->with([
                'eventRewards',
                'eventCondition',
                'eventFiles',
                'eventTags',
                'eventTags.tag',
            ])->where([
                ['created_user_id', Auth::guard('user')->user()->id],
                ['id', $id],
            ])->first();
    }

    public function store($request, $userCardId)
    {
        try {
            DB::beginTransaction();
            $eventNew = new $this->event();
            $eventNew->name = $request->name;
            $eventNew->detail = $request->detail;
            $eventNew->image_url = $request->image_path;
            $eventNew->category_id = $request->category_id;
            $eventNew->publish_flag = $request->publish_flag;
            $eventNew->created_user_id = Auth::guard('user')->user()->id;
            if (! $request->publish_flag) {
                $eventNew->reservation_date = Carbon::now()->addWeek(1);
            }
            $eventNew->events_area = [
                'area_id' => $request->area_id ?? [],
                'pref_id' => $request->pref_id ?? [],
                'check_all' => $request->check_all ?? '',
            ];
            $eventNew->detail_location = $request->detail_location;
            $eventNew->entry_type = $request->entry_type;
            if ($request->entry_type) {
                $eventNew->entry_fee = $request->entry_fee;
            }
            $total = 0;
            foreach ($request->event_rewards as $key => $value) {
                $total += $value['reward_amount'] * $value['quantity'];
            }
            $eventNew->reward_amount = $total;
            $eventNew->publish_start_datetime = $request->publish_start_datetime;
            $eventNew->day_end = $request->day_end;
            $eventNew->publish_end_datetime = Carbon::parse($request->publish_start_datetime)->addDays($request->day_end);
            $eventNew->address = $request->address;
            if (! $eventNew->save()) {
                DB::rollBack();

                return false;
            }
            $extension = pathinfo($request->image_path, PATHINFO_EXTENSION);
            $fileName = CommonComponent::uploadFileName($extension);
            if (! CommonComponent::copyFile('events/'.$eventNew->id.'/'.$fileName, $request->image_path)) {
                DB::rollBack();

                return false;
            }
            $eventNew->image_url = $fileName;
            if (! $eventNew->save()) {
                DB::rollBack();

                return false;
            }
            $eventCondition = new $this->eventCondition();
            $eventCondition->event_id = $eventNew->id;
            $eventCondition->target_gender = $request->target_gender;
            $eventCondition->target_age_type = $request->target_age_type;
            if ($request->target_age_type) {
                $eventCondition->target_age_from = $request->target_age_from;
                $eventCondition->target_age_to = $request->target_age_to;
            }
            $eventCondition->limit_number_of_participants_flag = $request->limit_number_of_participants_flag;
            if ($request->limit_number_of_participants_flag) {
                $eventCondition->limit_number_of_participants = $request->limit_number_of_participants;
            }
            $eventCondition->other_conditions = $request->other_conditions;
            $eventCondition->participation_terms_type = $request->participation_terms_type;
            $eventCondition->special_notes = $request->special_notes;
            $eventCondition->company_name = $request->company_name;
            $eventCondition->meet_condition = $request->meet_condition;
            if (! $eventCondition->save()) {
                DB::rollBack();

                return false;
            }
            $cardInfo = UserCredit::where([
                ['user_id', Auth::guard('user')->user()->id],
                ['id', $userCardId],
            ])->first();
            if (! $cardInfo) {
                DB::rollBack();

                return false;
            }
            $eventCredit = new $this->eventCredit();
            $eventCredit->event_id = $eventNew->id;
            $eventCredit->user_credit_id = $userCardId;
            $eventCredit->subcription_id = 'aaa';
            $eventCredit->subcription_expried_datetime = Carbon::now();
            if (! $eventCredit->save()) {
                DB::rollBack();

                return false;
            }
            foreach ($request->event_files as $key => $value) {
                $extension = pathinfo($value['path'], PATHINFO_EXTENSION);
                $fileName = CommonComponent::uploadFileName($extension);
                if (! CommonComponent::copyFile('events/'.$eventNew->id.'/'.$fileName, $value['path'])) {
                    DB::rollBack();

                    return false;
                }
                $eventFile = new $this->eventFile();
                $eventFile->event_id = $eventNew->id;
                $eventFile->file_name = $value['file_name'];
                $eventFile->type = $value['type'];
                $eventFile->file_url = $fileName;
                if (! $eventFile->save()) {
                    DB::rollBack();

                    return false;
                }
            }
            foreach ($request->event_rewards as $key => $value) {
                $eventReward = new $this->eventReward();
                $eventReward->event_id = $eventNew->id;
                $eventReward->name = $value['name'];
                $eventReward->reward_amount = $value['reward_amount'];
                $eventReward->quantity = $value['quantity'];
                if (! $eventReward->save()) {
                    DB::rollBack();

                    return false;
                }
            }
            if ($request->tags) {
                foreach ($request->tags as $key => $value) {
                    $tag = $this->tag->where('name', $value)->first();
                    if (! $tag) {
                        $tag = new $this->tag();
                        $tag->name = $value;
                        if (! $tag->save()) {
                            DB::rollBack();

                            return false;
                        }
                    }
                    $eventTag = new $this->eventTag();
                    $eventTag->event_id = $eventNew->id;
                    $eventTag->tag_id = $tag->id;
                    if (! $eventTag->save()) {
                        DB::rollBack();

                        return false;
                    }
                }
            }
            DB::commit();

            return true;
        } catch (\Throwable $th) {
            dd($th->getMessage());
            DB::rollBack();
        }

        return false;
    }

    public function update($request, $id, $userCardId)
    {
        try {
            DB::beginTransaction();
            $cardInfo = UserCredit::where([
                ['user_id', Auth::guard('user')->user()->id],
                ['id', $userCardId],
            ])->first();
            if (! $cardInfo) {
                DB::rollBack();

                return false;
            }

            $eventNew = $this->event->where([
                ['created_user_id', Auth::guard('user')->user()->id],
                ['id', $id],
            ])->first();
            $eventNew->name = $request->name;
            $eventNew->detail = $request->detail;
            $eventNew->image_url = $request->image_path;
            $eventNew->category_id = $request->category_id;
            $eventNew->publish_flag = $request->publish_flag;
            $eventNew->created_user_id = Auth::guard('user')->user()->id;
            if (! $request->publish_flag) {
                $eventNew->reservation_date = Carbon::now()->addWeek(1);
            }
            $eventNew->events_area = [
                'area_id' => $request->area_id ?? [],
                'pref_id' => $request->pref_id ?? [],
                'check_all' => $request->check_all ?? '',
            ];
            $eventNew->detail_location = $request->detail_location;
            $eventNew->entry_type = $request->entry_type;
            if ($request->entry_type) {
                $eventNew->entry_fee = $request->entry_fee;
            }
            $total = 0;
            foreach ($request->event_rewards as $key => $value) {
                $total += $value['reward_amount'] * $value['quantity'];
            }
            $eventNew->reward_amount = $total;
            $eventNew->publish_start_datetime = $request->publish_start_datetime;
            $eventNew->day_end = $request->day_end;
            $eventNew->publish_end_datetime = Carbon::parse($request->publish_start_datetime)->addDays($request->day_end);
            $eventNew->address = $request->address;
            if (! $eventNew->save()) {
                DB::rollBack();

                return false;
            }
            $extension = pathinfo($request->image_path, PATHINFO_EXTENSION);
            $fileName = CommonComponent::uploadFileName($extension);
            if (! CommonComponent::copyFile('events/'.$eventNew->id.'/'.$fileName, $request->image_path)) {
                DB::rollBack();

                return false;
            }
            $eventNew->image_url = $fileName;
            if (! $eventNew->save()) {
                DB::rollBack();

                return false;
            }
            $eventCondition = $this->eventCondition->where('event_id', $id)->first();
            $eventCondition->event_id = $eventNew->id;
            $eventCondition->target_gender = $request->target_gender;
            $eventCondition->target_age_type = $request->target_age_type;
            if ($request->target_age_type) {
                $eventCondition->target_age_from = $request->target_age_from;
                $eventCondition->target_age_to = $request->target_age_to;
            }
            $eventCondition->limit_number_of_participants_flag = $request->limit_number_of_participants_flag;
            if ($request->limit_number_of_participants_flag) {
                $eventCondition->limit_number_of_participants = $request->limit_number_of_participants;
            }
            $eventCondition->other_conditions = $request->other_conditions;
            $eventCondition->participation_terms_type = $request->participation_terms_type;
            $eventCondition->special_notes = $request->special_notes;
            $eventCondition->company_name = $request->company_name;
            $eventCondition->meet_condition = $request->meet_condition;
            if (! $eventCondition->save()) {
                DB::rollBack();

                return false;
            }
            $eventCredit = $this->eventCredit->where('event_id', $id)->first();
            $eventCredit->event_id = $eventNew->id;
            $eventCredit->user_credit_id = $userCardId;
            $eventCredit->subcription_id = 'aaa';
            $eventCredit->subcription_expried_datetime = Carbon::now();
            if (! $eventCredit->save()) {
                DB::rollBack();

                return false;
            }
            $this->eventFile->where('event_id', $id)->whereNotIn('id', collect($request->event_files)->whereNotNull('id')->pluck('id'))->delete();
            foreach ($request->event_files as $key => $value) {
                if (isset($value['id'])) {
                    continue;
                }
                $extension = pathinfo($value['path'], PATHINFO_EXTENSION);
                $fileName = CommonComponent::uploadFileName($extension);
                if (! CommonComponent::copyFile('events/'.$eventNew->id.'/'.$fileName, $value['path'])) {
                    DB::rollBack();

                    return false;
                }
                $eventFile = new $this->eventFile();
                $eventFile->event_id = $eventNew->id;
                $eventFile->file_name = $value['file_name'];
                $eventFile->type = $value['type'];
                $eventFile->file_url = $fileName;
                if (! $eventFile->save()) {
                    DB::rollBack();

                    return false;
                }
            }

            $this->eventReward->where('event_id', $id)->delete();
            foreach ($request->event_rewards as $key => $value) {
                $eventReward = new $this->eventReward();
                $eventReward->event_id = $eventNew->id;
                $eventReward->name = $value['name'];
                $eventReward->reward_amount = $value['reward_amount'];
                $eventReward->quantity = $value['quantity'];
                if (! $eventReward->save()) {
                    DB::rollBack();

                    return false;
                }
            }
            $this->eventTag->where('event_id', $id)->delete();
            if ($request->tags) {
                foreach ($request->tags as $key => $value) {
                    $tag = $this->tag->where('name', $value)->first();
                    if (! $tag) {
                        $tag = new $this->tag();
                        $tag->name = $value;
                        if (! $tag->save()) {
                            DB::rollBack();

                            return false;
                        }
                    }
                    $eventTag = new $this->eventTag();
                    $eventTag->event_id = $eventNew->id;
                    $eventTag->tag_id = $tag->id;
                    if (! $eventTag->save()) {
                        DB::rollBack();

                        return false;
                    }
                }
            }
            DB::commit();

            return true;
        } catch (\Throwable $th) {
            dd($th->getMessage());
            DB::rollBack();
        }

        return false;
    }

    public function destroy($id)
    {
        return $this->event->where([
            ['created_user_id', Auth::guard('user')->user()->id],
            ['id', $id],
        ])->delete();
    }

    public function tmp($id)
    {
        $event = $this->event->where([
            ['created_user_id', Auth::guard('user')->user()->id],
            ['id', $id],
        ])->first();
        if (! $event) {
            return false;
        }
        $event->publish_flag = PublishStatus::UNPUBLISH;
        $event->reservation_date = Carbon::now()->addWeek(1);

        return $event->save();
    }

    public function search($request)
    {
        $builder = $this->event
            ->with([
                'category',
                'eventTags',
                'eventTags.tag',
                'user',
                'eventCondition',
            ])
            ->where([
                ['publish_flag', PublishStatus::PUBLISH],
                ['publish_start_datetime', '<=', Carbon::now()],
            ]);
        if ($request->free_input) {
            $builder->where(function ($q) {
                $q->orWhere($this->escapeLikeSentence('name', $request->free_input));
                $q->orWhere($this->escapeLikeSentence('detail', $request->free_input));
            });
        }
        // dd($builder->get()->toArray());
        // if ($request->category_id) {
        //     $builder->where('category_id', $request->category_id);
        // }
        // if ($request->publish_start_datetime) {
        //     $builder->where('publish_start_datetime', $request->publish_start_datetime);
        // }
        // if ($request->day_end) {
        //     $builder->where('day_end', $request->day_end);
        // }
        // if (isset($request->entry_type)) {
        //     $builder->where('entry_type', $request->entry_type);
        // }
        // if ($request->entry_fee) {
        //     $builder->where('entry_fee', $request->entry_fee);
        // }
        // $builder->join('event_conditions as con', 'events.id', '=', 'con.event_id');
        // if (isset($request->reward_type) || isset($request->target_age_type)) {
        //     $builder->where('con.limit_number_of_participants_flag', $request->reward_type);
        //     $builder->where('con.target_age_type', $request->target_age_type);
        //     if ($request->target_age_from) {
        //         $builder->where('con.target_age_from', '>=', $request->target_age_from);
        //     }
        //     if ($request->target_age_to) {
        //         $builder->where('con.target_age_to', '<=', $request->target_age_to);
        //     }
        // }
        // if ($request->reward_price_start) {
        //     $builder->where('reward_amount', '>=', $request->reward_price_start);
        // }
        // if ($request->reward_price_end) {
        //     $builder->where('reward_amount', '<=', $request->reward_price_end);
        // }
        // if ($request->area_id) {
        //     $builder->where('events_area', ['area_id' => $request->area_id]);
        // }
        // if ($request->prefecture_id) {
        //     $builder->where('events_area', ['pref_id' => $request->prefecture_id]);
        // }
        // if ($request->target_gender) {
        //     $builder->whereJsonContains('con.target_gender', $request->target_gender);
        // }
        if ($request->tags) {
            $builder->join('event_tags as et', 'events.id', '=', 'et.event_id');
            $builder->where(function ($q) use ($request) {
                foreach ($request->tags as $key => $value) {
                    $q->orWhere('tag_id', $value['value']);
                }
            });
        }

        return $builder->select(['events.*'])->groupBy('events.id')->get();

        return [];
    }
}
