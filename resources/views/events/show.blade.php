@extends('layouts.app')

@section('content')
    <div class="container">        
        <div class="row">
            <div class="col-md-6 col-sm-12">
                @php
                    $location = ($map->location1).($map->location2).($map->location3).($map->location4).($map->location5).($map->location6).($map->location7).($map->location8).($map->location9).($map->location10).($map->location11).($map->location12).($map->location13).($map->location14).($map->location15).($map->location16).($map->location17).($map->location18).($map->location19).($map->location20);
                @endphp
                <h3> Location: </h3>
                <iframe src="https://www.google.com/maps/embed?pb={{$location}}" width="450" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>                
            </div>
            <div class="col-md-6 col-sm-12" style="text-align:left;">
                <h2> {{$event->title}} </h2>
                <br>
                <font size="4">
                    <b> Description: </b>
                    <br> {{$event->description}}
                    <hr>

                    <b> Date: </b> {{$event->date}}
                    <br> 
                    <b> Time: </b> {{$event->time}}
                    <br>
                    <b> Current Active People: </b>
                </font>
                <font color="green" size="4"> <b> {{$event->people}} </b> </font> <br> <br>
                
                @php
                    $exist = "Default";
                @endphp   

                @foreach($event_users as $event_user)
                    @if(($event_user->user_id)==(Auth::user()->id) && ($event_user->event_id)==($event->id))
                        @php
                            $exist = "Yes";
                        @endphp 
                    @endif
                @endforeach

                @guest
                @else
                    @if($exist=="Yes")
                        <form style="margin-top:50px;" method="post" action="{{ route('events.update', $event->id)}}" enctype="multipart/form-data" id="commentForm">
                            @csrf    
                            @method('put')        
                            <input type="text" id="requested" name="requested" hidden value="reject">
                            <button type="submit" style="color:#ffffff; background-color:red; width:300px; height:30px;"> Reject Going </button>
                        </form>
                    @else
                        <form style="margin-top:50px;" method="post" action="{{ route('events.update', $event->id)}}" enctype="multipart/form-data" id="commentForm">
                            @csrf    
                            @method('put')        
                            <input type="text" id="requested" name="requested" hidden value="come">
                            <button type="submit" style="color:#ffffff; background-color:green; width:300px; height:30px;"> I'm going this event </button>
                        </form>
                    @endif
                @endguest    

                        
            </div>
        </div>
    </div>
@endsection

