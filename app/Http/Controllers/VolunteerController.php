<?php

namespace App\Http\Controllers;

use App\Volunteer;
use App\Event;
use App\Event_User;
use App\Item_User;
use App\Item;
use App\Bank;
use App\Account;
use Auth;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account = new Account();
        $bank = new Bank();

        $card= Account::where('user_id', Auth::user()->id)->first();
        $balance= Bank::where('id', $card->bank_id)->first();

        $events= Event::all();
        $items= Item::all();
        
        $eventusers= Event_User::where('user_id', Auth::user()->id)->get();
        $itemusers= Item_User::where('user_id', Auth::user()->id)->get();     

        // for($i=0; $i<count($itemusers); $i++) {  
        //     $data[$i] = [Item::where('id', $itemusers[$i]->item_id)->get()];
        //     $purchaseditems=[$i=>$data[$i][0][0]];
        // }       
        

        // dd($purchaseditems,$itemusers);

        return view("volunteers.index",[
            "items" => $items,
            "events" => $events,
            "balance" => $balance,
            "itemusers" => $itemusers,
            "eventusers" => $eventusers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function show(Volunteer $volunteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function edit(Volunteer $volunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volunteer $volunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volunteer $volunteer)
    {
        //
    }
}
