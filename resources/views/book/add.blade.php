@extends('layout')
@section('content')
<div class="container">
    <h1>Add Books</h1>    
    <form action="add" method="POST" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="control-label col-sm-2">Enter book name :</label>
            <div class="col-sm-10">
                <input type="text" name="book_name" placeholder="Enter book/books name" class="form-control">
            </div>                
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Enter Author name :</label>
            <div class="col-sm-10">
                <input type="text" name="author" placeholder="Enter author name" class="form-control">
            </div>            
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Upload Book Image :</label>
            <div class="col-sm-10">
                <input type="file" name="book_image[]" title="upload book photo" multiple="multiple" class="form-control">
            </div>
        </div>                        
        {{-- <input type="text" name="standard" placeholder="Enter acadamic standard"><br><br> --}}
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>        
    </form>        
</div>
@endsection
