@extends('layouts.app')

@section('mystyle')
<style>
</style>
@endsection

@section('content')
    <div class="container">        
        <div class="row">
            @foreach($items as $item)
                    <div class="col-md-4 col-sm-12" style="background:#7CB9E8; padding-top:50px; padding-bottom:10px;">
                        <img src="{{Storage::url($item->photo)}}" width="150px" height="150px"> <br> <br>
                        <b> Title : </b> {{$item->name}} <br>
                        <b> Description : </b> {{$item->description}} <br>
                        <b> Price : </b> {{$item->price}} <br>
                        
                        @if($item->quantity!=0)
                            <b> Left : </b> {{$item->quantity}} <br>
                            <form style="margin-top:50px;" method="post" action="{{ route('items.update', $item->id)}}" enctype="multipart/form-data" id="commentForm">
                                @csrf    
                                @method('put')        
                                @guest   
                                @else                        
                                <button type="submit" style="color:#ffffff; background-color:#7CB9E8; width:300px; height:30px;"> Buy </button>                                
                                @endguest
                            </form>                           

                            <a href="{{ route('items.show', $item->id)}}">
                                <button type="submit" style="color:#ffffff; background-color:#7CB9E8; width:300px; height:30px;"> View </button>
                            </a>
                        @else
                            <b> Left : </b> <font color="red"> Out of stock ! </font> <br>
                        @endif
                    </div>
                
            @endforeach
        </div>
    </div>
@endsection
