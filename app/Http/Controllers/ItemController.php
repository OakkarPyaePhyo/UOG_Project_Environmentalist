<?php

namespace App\Http\Controllers;

use App\Item;
use App\Account;
use App\Bank;
use App\Item_User;
use Auth;
use DB;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view("items.index",[
            "items" => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("items.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Item();
        $items = Item::all();

        $item->name = $request->name;
        if($request->hasFile('photo')){
            $item->photo = $request->photo->store("post_images","public");
        }else{
            $item->photo = "images/logo.png";
        }
        $item->description = $request->description;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item->save();

        return view("items.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        $showitem = Item::where('id', $item->id)->first();

        return view("items.show",[
            "item" => $item,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $account = new Account();
        $bank = new Bank();

        $card= Account::where('user_id', Auth::user()->id)->first();
        
        $balance= Bank::where('id', $card->bank_id)->first();
        $adminbalance= Bank::where('id', 5)->first();

        DB::table('banks')->where('id', $card->bank_id)->update(['balance' => (($balance->balance)-$item->price)]);
        DB::table('banks')->where('id', 5)->update(['balance' => (($adminbalance->balance)+$item->price)]);

        $item->name = $item->name;
        $item->description = $item->description;
        $item->price = $item->price;
        $item->quantity = ($item->quantity)- 1;
        $item->save();

        $item_user = new Item_User();
        $item_user->item_id = $item->id;
        $item_user->user_id = Auth::user()->id;
        $item_user->save();

        return redirect()->route("volunteers.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
