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
    <hr>
    <a href="{{ route('events.create') }}"> Create Events </a>
    <a href="{{ route('items.create') }}"> Create Items </a>
    </div>
   
    <div class="main">
        <h3> Item Lists: </h3>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr style="background-color:#5D8AA8; color:white;">
                <th> No. </th>
                <th> Name. </th>
                <th> Description. </th>
                <th> Price. </th>
                <th> Quantity. </th>
                <th> View Item. </th>
            </tr>
            @foreach($items as $item)
            <tr>
                <td> {{$item->id}} </td>
                <td> {{$item->name}} </td>
                <td> {{$item->description}} </td>
                <td> {{$item->price}} </td>
                <td> {{$item->quantity}} </td>        
                <td> <a href="{{ route('items.show', $item->id) }}"> <button style="background-color:#5D8AA8; color:white;"> Show </button> </a> </td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="main">
        <h3> Event Lists: </h3>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr style="background-color:#5D8AA8; color:white;">
                <th> No. </th>
                <th> Name. </th>
                <th> Description. </th>
                <th> Date. </th>
                <th> Time. </th>
                <th> Active. </th>
                <th> View Event. </th>
            </tr>
            @foreach($events as $event)
            <tr>
                <td> {{$event->id}} </td>
                <td> {{$event->title}} </td>
                <td> {{$event->description}} </td>
                <td> {{$event->date}} </td>
                <td> {{$event->time}} </td>
                <td> {{$event->people}} </td>                                
                <td> <a href="{{ route('events.show', $event->id) }}"> <button style="background-color:#5D8AA8; color:white;"> Show </button> </a> </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html> 
