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
        ])
        ->where(function ($q) {
            $q->orWhere(function ($q) {
                $q->where('publish_flag', PublishStatus::UNPUBLISH);
                $q->whereDate('reservation_date', '>=', Carbon::now());
            });
            $q->orWhere(function ($q) {
                $q->where('publish_flag', PublishStatus::PUBLISH);
                $q->where('publish_end_datetime', '>=', PublishStatus::PUBLISH);
            });
        })->orderBy('publish_end_datetime', 'DESC')->get();
        // TODO: Implement get() method.
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
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
            if (! $request->publish_flag) {
                $eventNew->reservation_date = Carbon::now()->addWeek(1);
            }
            $eventNew->events_area = [
                'area_id' => $request->area_id ?? [],
                'pref_id' => $request->pref_id ?? [],
            ];
            $eventNew->detail_location = $request->detail_location;
            $eventNew->entry_type = $request->entry_type;
            if ($request->entry_type) {
                $eventNew->entry_fee = $request->entry_fee;
            }
            $total = 0;
            $totalPerson = 0;
            foreach ($request->event_rewards as $key => $value) {
                $total += $value['reward_amount'] * $value['quantity'];
                $totalPerson += $value['quantity'];
            }
            $eventNew->reward_amount = $total;
            $eventNew->reward_person = $totalPerson;
            $eventNew->publish_start_datetime = $request->publish_start_datetime;
            $eventNew->publish_end_datetime = $request->publish_end_datetime;
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

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
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
}
