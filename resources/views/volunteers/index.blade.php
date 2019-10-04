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
    Welcome {{ Auth::user()->name }}, <br> This Is Your Admin Panel
    <br> <br>
    Your Balance: {{$balance->balance}}
    </div>
   
    <div class="main">
        <h3> Purchased Item Lists: </h3>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr style="background-color:#5D8AA8; color:white;">
                <th> Purchased Item Id: </th>
                <th> View Item: </th>            
            </tr>
            @foreach($itemusers as $itemuser)
            <tr>
                <td> {{$itemuser->item_id}} </td>                              
                <td> <a href="{{ route('items.show', $itemuser->item_id) }}"> <button style="background-color:#5D8AA8; color:white;"> View </button> </a> </td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="main">
        <h3> Going Event Lists: </h3>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr style="background-color:#5D8AA8; color:white;">
                <th> Going Item Id: </th>
                <th> View Event: </th> 
            </tr>
            @foreach($eventusers as $eventuser)
            <tr>
                <td> {{$eventuser->event_id}} </td>                            
                <td> <a href="{{ route('events.show', $eventuser->event_id) }}"> <button style="background-color:#5D8AA8; color:white;"> View </button> </a> </td>                
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html> 
