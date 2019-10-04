@extends('layouts.app')

@section('content')
    <div class="container">        
        <div class="row">
            @foreach($events as $event)
                <div class="col-md-6 col-sm-12" style="padding-left:100px; width:100%; background:white; padding-top:50px; padding-bottom:10px;">
                    <b> Title : </b> {{$event->title}} <br>                    
                    <b> Current People :  <font color="green" size="3"> {{$event->people}} </font> <br> </b>                   
                </div>
                <div class="col-md-3 col-sm-12" style="padding-left:100px; width:100%; background:white; padding-top:50px; padding-bottom:10px; float:left;">
                    <b> Date : </b> {{$event->date}} <br>
                    <b> Time : </b> {{$event->time}} <br>
                </div>
                <div class="col-md-3 col-sm-12" style="padding-left:100px; width:100%; background:white; padding-top:50px; padding-bottom:10px; float:left;">
                    <a href="{{ route('events.show',$event->id) }}"> <button style="color:#ffffff; background-color:#5D8AA8;"> View Event </button> </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

