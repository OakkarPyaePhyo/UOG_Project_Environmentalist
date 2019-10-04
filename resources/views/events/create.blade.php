<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .sidenav {
            height: 100%;
            width: 300px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #5D8AA8;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .sidenav a {
            padding: 6px 8px 6px 16px;
            text-decoration: none;
            font-size: 25px;
            color: black;
            display: block;
        }

        .sidenav a:hover {
            color: white;
        }

        .main {
            margin-left: 300px; /* Same as the width of the sidenav */        
            padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>
</head>
<body>

    <div class="sidenav">    
        <h2 style="padding:10px;"> Event Create Form: </h2>
        <a href="{{ route('admins.index') }}"> <font size="3"> Back To Admin Panel </font> </a>
    </div>
   
    <div class="main">
        <form style="margin-top:50px;" method="POST" action="{{ route('events.store')}}" enctype="multipart/form-data" id="commentForm">
        @csrf  
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3> Title: </h3>
                    <input id="title" name="title" type="text" class="form-control" value="{{ old('title') }}" style="width:300px; height:30px;">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 col-sm-12">            
                    <h3> Place: </h3>
                    <select name="location" id="location" class="form-control" style="width:300px; height:30px;">                                
                        <option disabled selected> Select A Location </option>
                        @foreach($maps as $map)
                            <option value="{{$map->id}}"> {{$map->name}} </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 com-sm-12">
                    <h3> Description: </h3>
                    <input id="description" name="description" type="text" class="form-control" value="{{ old('description') }}" style="width:600px; height:200px;">            
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 com-sm-12">
                    <h3> Date: </h3>
                    <input type="date" id="date" name="date">
                </div>
                <div class="col-md-2 com-sm-12">        
                    <h3> Time: </h3>
                    <input type="time" id="time" name="time">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3> Current Total People: </h3>
                    <input id="people" name="people" type="text" value="0" class="form-control" value="{{ old('title') }}" style="width:300px; height:30px;">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <button type="submit" style="color:#ffffff; background-color:#5D8AA8; font-weight: bold; margin-top:10px; width:600px; height:50px; padding: 7px 105px 7px 105px;">
                        {{ __('Post') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html> 
