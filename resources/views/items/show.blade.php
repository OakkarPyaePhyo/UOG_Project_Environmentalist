@extends('layouts.app')

@section('content')
    <div class="container">        
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img src="{{Storage::url($item->photo)}}" width="350px" height="350px">
            </div>
            <div class="col-md-6 col-sm-12" style="text-align:left;">
                <h2> {{$item->name}} </h2>
                <br>
                <font size="4">
                    <b> Description: </b>
                    <br> {{$item->description}}
                    <hr>

                    <b> Price: </b> {{$item->price}}
                    <br> 
                    @guest
                        <b> <font color="red"> You Must Log-in To Make Purchasing ! ! !</font> <br> </b>
                        <a href="{{ route('login')}}"> <font color="blue"> Log-in </font> </a> or <a href="{{ route('register')}}"> <font color="blue"> Create An Account </font> </a> 
                    @else
                        @if($item->quantity!=0)
                            <b> Left : </b> {{$item->quantity}} <br>
                            <form style="margin-top:50px;" method="post" action="{{ route('items.update', $item->id)}}" enctype="multipart/form-data" id="commentForm">
                                @csrf    
                                @method('put')                                    
                                <button type="submit" style="color:#ffffff; background-color:#7CB9E8; width:300px; height:30px;"> Buy </button>
                            </form>                           
                        @else
                            <b> Left : </b> <font color="red"> Out of stock ! </font> <br>
                        @endif
                    @endguest
                    
                </font>
                
            </div>
        </div>
    </div>
@endsection

