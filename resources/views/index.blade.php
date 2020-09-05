@extends('layout')
@section('content')
    <div class="container">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> {{session('success')}}
        </div>                 
        @endif
        <form action="filter" method="post">
        @csrf
            <div class="row">
                @foreach ($list as $data)                
                    <div class="col-sm-3">
                        <div class="panel panel-primary" onclick="">
                            <div class="panel-heading">
                                <strong>{{$data->category_name}}</strong>                                                
                            </div>
                            <div class="panel-body">
                                <img src="https://placehold.it/150x80?text=IMAGE" alt="Book Image" class="img-responsive" style="width:100%">
                            </div>
                            <div class="panel-footer">
                                <input type="hidden" name="categoryId" value="{{$data->category_id}}">
                                <button type="submit" class="btn btn-info btn-block">See List</button>
                            </div>                    
                        </div>
                    </div>
                @endforeach            
            </div>
        </form>               
    </div>    
@endsection
