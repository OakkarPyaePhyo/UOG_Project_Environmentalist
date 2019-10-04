@extends('layouts.app')

@section('mystyle')
<style>
</style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12" style="float:left;">
                <font size="5">                 
                    Join with <b> <font size="5" color="#7CB9E8"> <br> "The Environmentalist" </font> </b> to improve your volunteer skills...
                </font>
            </div>

            @if (Route::has('login'))
                @auth
            @else
                    <div class="col-md-3 col-sm-12" style="float:left;">
                        <a href="{{ route('login') }}"> 
                            <button style="background-color:#7CB9E8; width:200px; height:50px;"> I'm Volunteer </button>
                        </a>
                    </div>
                @if (Route::has('register'))
                    <div class="col-md-3 col-sm-12" style="float:left;">
                        <a href="{{ route('register') }}">
                            <button style="background-color:#BAE8AE; width:200px; height:50px;"> I'm New Member </button>
                        </a>
                    </div>
                @endif
                @endauth
            @endif
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                    <b> <font color="#7CB9E8" size="6"> Our Mission: </font> </b>
                <font size="4">
                    Environmentalist want to create a media between events and volunteers. Also, we sell the environmental staffs with cheaper price to protect our beautiful earth. 
                </font>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 col-sm-12" style="float:left;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/dSzAWQIIdO4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-3 col-sm-12" style="float:left;">
                <a href="{{ route('events.index') }}">
                    <button style="margin-top:100px; background-color:lightgreen; width:400px; height:100px;"> Show Active Events </button>
                </a>
            </div>
            <div class="col-md-3 col-sm-12" style="float:left;">
            
            </div>
        </div>
    </div>    
@endsection

