@extends('layouts.app')

@section('mystyle')
<style>
</style>
@endsection

@section('content')
    <div class="container">
        <div class="row" style="background-color:white;">
            <div class="col-md-12 col-sm-12">
                <b> <font color="#7CB9E8" size="6"> About Us: </font> </b>
                <font size="4">
                    Text
                </font>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img src="/images/about1.jpg" width="100%" height="300px">
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="/images/about2.jpg" width="100%" height="300px">
            </div>
        </div>
        <hr>
        <div class="row" style="background-color:white;">
            <div class="col-md-12 col-sm-12">
                    <b> <font color="#7CB9E8" size="6"> Our Mission: </font> </b>
                <font size="4">
                    Environmentalist want to create a media between events and volunteers. Also, we sell the environmental staffs with cheaper price to protect our beautiful earth. 
                </font>
            </div>
        </div>
        <hr>
    </div>    
@endsection

