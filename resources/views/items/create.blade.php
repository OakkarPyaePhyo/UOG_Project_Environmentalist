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
        <h2 style="padding:10px;"> Item Create Form: </h2>
        <a href="{{ route('admins.index') }}"> <font size="3"> Back To Admin Panel </font> </a>
    </div>
   
    <div class="main">
        <form style="margin-top:50px;" method="POST" action="{{ route('items.store')}}" enctype="multipart/form-data" id="commentForm">
        @csrf  
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3> Name: </h3>
                    <input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}" style="width:300px; height:30px;">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h3> Photo: </h3>
                    <input id="photo" name="photo" type='file' onchange="readURL(this);">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12 com-sm-12">
                    <h3> Description: </h3>
                    <input id="description" name="description" type="text" class="form-control" value="{{ old('description') }}" style="width:600px; height:200px;">            
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 com-sm-12">
                    <h3> Price: </h3>
                    <input id="price" name="price" type="text" class="form-control" value="{{ old('price') }}" style="width:300px; height:30px;">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 com-sm-12">
                    <h3> Quantity: </h3>
                    <input id="quantity" name="quantity" type="text" class="form-control" value="{{ old('quantity') }}" style="width:300px; height:30px;">
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
@push("script")
<script>
//Javascript For Image Preview
function readURL(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
            $('#imgholder')
                .attr('src', e.target.result)
                .width(150)
                .height(150);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

$('#imgholder').click(function(){
    $('#imgholderInput').click();
});
    
</script>
@endpush