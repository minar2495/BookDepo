<style>    
  
</style>
@extends('layout')
@section('content')
<div class="container-fulid">    
    <div class="container">        
        <form action="filter" method="POST">
            @csrf            
            <nav class="navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li>
                            <h2>All Books</h2>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right pl-2">
                        <li>
                            <div class="form-group">
                                <input type="text" name="search" placeholder="Enter book/author name" class="form-control">                                
                            </div>
                        </li>
                        <li style="padding-left: 5px"><button type="submit" id="search" class="btn btn-primary">Search</button></li>
                    </ul>
                </div>
            </nav>
        </form>                
    </div>    
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <h3>List</h3>
        </div>
        <div class="col-sm-2">
            <a href="addbook" class="btn btn-primary">Add Book</a>
        </div>
    </div>
</div>
<div class="container">           
    @foreach ($list as $data)    
    <div class="row">
        <div class="col-sm-2">
            <img src="https://placehold.it/150x80?text=IMAGE" alt="Book Image" class="img-responsive" style="width:100%">
        </div>
        <div class="col-sm-10">
            <strong>Book Name : <small>{{$data->book_name}}</small></strong><br>
            <strong>Author : <small>{{$data->author}}</small></strong><br>
            <a href="#" class="btn btn-primary">View</a>
            <button class="btn btn-success">Add to cart</button>
        </div>
    </div>           
    @endforeach        
    {{$list->links()}}
</div>
@endsection
