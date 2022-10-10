<?php

namespace App\Http\Controllers\User;

use App\Components\StripeComponent;
use App\Enums\StatusCode;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Repositories\Area\AreaInterface;
use App\Repositories\Category\CategoryInterface;
use App\Repositories\Event\EventInterface;
use App\Repositories\Prefecture\PrefectureInterface;
use App\Repositories\Tag\TagInterface;
use App\Repositories\User\UserInterface;
use App\Repositories\UserCredit\UserCreditInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends BaseController
{
    private $category;

    private $prefecture;

    private $area;

    private $tag;

    private $userCredit;

    private $user;

    private $event;

    public function __construct(CategoryInterface $category, PrefectureInterface $prefecture, AreaInterface $area,
        TagInterface $tag, UserCreditInterface $userCredit, UserInterface $user, EventInterface $event)
    {
        $this->category = $category;
        $this->prefecture = $prefecture;
        $this->area = $area;
        $this->tag = $tag;
        $this->userCredit = $userCredit;
        $this->user = $user;
        $this->event = $event;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = $this->event->get();
        // dd($events->toArray());
        return view('user.event.index', [
            'title'=>'イベント企画',
            'events' => $events,
            'showName' => Auth::guard('user')->user()->show_name,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.event.create', [
            'title'=>'イベント新規作成',
            'categories' => $this->category->getOption(),
            'areas' => $this->area->get(),
            'prefectures' => $this->prefecture->get(),
            'suggestTags' => $this->tag->get(),
            'userCredit' => $this->userCredit->getLastUsing(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        $customerId = Auth::guard('user')->user()->customer_id;
        if (! $customerId) {
            $customer = StripeComponent::createCustomer(Auth::guard('user')->user()->email, Auth::guard('user')->user()->show_name);
            if (! $customer) {
                $this->setFlash(__('エラーが発生しました。'), 'error');

                return redirect()->route('event.create');
            }
            $customerId = $customer->id;
            if (! $this->user->updateCustomerId($customerId)) {
                $this->setFlash(__('エラーが発生しました。'), 'error');

                return redirect()->route('event.create');
            }
        }
        $userCardId = $request->event_credit['user_credit_id'];
        if ($request->card_id) {
            $cardInfo = StripeComponent::addCustomerCard($customerId, $request->card_id);
            if (! $cardInfo) {
                $this->setFlash(__('エラーが発生しました。'), 'error');

                return redirect()->route('event.create');
            }
            $userCreditCard = $this->userCredit->store($cardInfo);
            if (! $userCreditCard) {
                $this->setFlash(__('エラーが発生しました。'), 'error');

                return redirect()->route('event.create');
            }
            $userCardId = $userCreditCard->id;
        }
        if (! $this->event->store($request, $userCardId)) {
            $this->setFlash(__('エラーが発生しました。'), 'error');

            return redirect()->route('event.create');
        }
        $this->setFlash(__('success'), 'success');

        return redirect()->route('event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function tag(Request $request)
    {
        return response()->json([
            'data' => $this->tag->searchTag($request),
        ], StatusCode::OK);
    }

    public function tmp($id)
    {
        if (! $this->event->tmp($id)) {
            $this->setFlash(__('エラーが発生しました。'), 'error');

            return redirect()->route('event.create');
        }
    }
}
