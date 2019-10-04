<?php

namespace App\Http\Controllers;

use App\Event;
use App\Admin;
use App\Map;
use App\Event_User;
use Auth;
use DB;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events= Event::all();
        return view("events.index",[
            "events" => $events,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $maps= Map::all();
        return view("events.create",[
            "maps" => $maps,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event();
        $maps= Map::all();

        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->people = $request->people;
        $event->map_id = $request->location;
        $event->save();

        return view("events.create",[
            "maps" => $maps,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $event_users = Event_User::all();

        $map= Map::where('id', $event->map_id)->first();

        return view("events.show",[
            "event" => $event,
            "map" => $map,
            "event_users" => $event_users,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {           
        $event->title = $event->title;
        $event->description = $event->description;
        $event->date = $event->date;
        $event->time = $event->time;
        if($request->requested=="reject"){
            $event->people = ($event->people)-1;
        }else{
            $event->people = ($event->people)+1;
        }
        $event->map_id = $event->map_id;
        $event->save();

        if($request->requested=="reject"){
            $event_users = Event_User::all();
            DB::table('event__users')->where('event_id', $event->id)->where('user_id', Auth::user()->id)->delete();
        }else{            
            $event_user = new Event_User();
            $event_user->event_id = $event->id;
            $event_user->user_id = Auth::user()->id;
            $event_user->save();
        }

        return redirect()->route("events.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
