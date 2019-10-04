@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
            <div class="col-md-8 col-sm-12" style="float:left;">
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
        
        <div class="card">
            <div class="card-header"> You are now logged in! </div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <a href="{{ route('items.index') }}"> 
                    <button style="color:#ffffff; background-color:#5D8AA8; width:100px; height:30px;"> Go To Store </button>
                </a>

                <a href="{{ route('volunteers.index') }}"> 
                    <button style="color:#ffffff; background-color:#5D8AA8; width:200px; height:30px;"> Go To Your Dashboard </button>
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 col-sm-12" style="float:left;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/dSzAWQIIdO4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-1 col-sm-12" style="float:left;"></div>
            <div class="col-md-5 col-sm-12" style="float:left;">
                <a href="{{ route('events.index') }}">
                    <button style="margin-top:100px; background-color:lightgreen; width:400px; height:100px;"> Show Active Events </button>
                </a>
            </div>
        </div>
    </div>    
@endsection

            