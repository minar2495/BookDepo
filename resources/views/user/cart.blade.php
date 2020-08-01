@extends('layout')
@section('content')
    <h1>Your Cart</h1>    
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" alt="Book Image" class="img-responsive" style="width:100%">
            </div>
            <div class="col-sm-10">
                <button class="btn btn-danger col-sm-offset-11 col-sm-1">Remove</button>
                <strong>Book Name : <small>JAVA</small></strong>
                 <br><br>
                <strong>Author : <small>Helbert</small></strong><br><br>
                <strong>Price : Rs . <small id="priceLabel">150 </small></strong>
                <input type="hidden" class="form-control" value ="150" style="width:100px" id="price" disabled>
                <input type="hidden" class="form-control" value ="150" style="width:100px" id="originalPrice" disabled>   
                <br><br>
                <div class="btn-group btn-group-sm">
                    <button class="btn btn-default" onclick="qty(this)" id="plus"><span class="glyphicon glyphicon-plus"></span></button>
                    <button class="btn btn-default" id="qty">1</button>
                    <button class="btn btn-default" onclick="qty(this)" id="minus"><span class="glyphicon glyphicon-minus"></span></button>
                </div><br><br>
                <a href="#" class="btn btn-primary">View</a>
                <button class="btn btn-success">Order</button>                
            </div>
        </div>
    </div>
    <script>
        function qty(btn)
        {
            var buttonId = $(btn).attr("id");
            var qty = 0; 
            var perUnitPrice = 0;                      
            if(buttonId == "plus")
            {                
                qty = parseInt($("#qty").text());
                if(qty >= 1 )
                {
                    qty += 1;
                    $("#qty").text(qty);
                    perUnitPrice = $("#originalPrice").val(); 
                    $("#price").val(qty * perUnitPrice);
                    $("#priceLabel").text(qty * perUnitPrice);
                }                                
            }
            else
            {   
                qty = parseInt($("#qty").text());
                if(qty > 1 )
                {
                    qty -= 1;
                    $("#qty").text(qty);
                    var presentVal = $("#price").val();
                    perUnitPrice = $("#originalPrice").val();
                    $("#price").val(presentVal - perUnitPrice);
                    $("#priceLabel").text(presentVal - perUnitPrice);
                }                                
            }
        }
    </script>
@endsection