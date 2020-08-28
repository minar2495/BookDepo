@extends('layout')
@section('content')
    <div class="container">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> {{session('success')}}
        </div>                 
        @endif
       
        <div class="row">
            <div class="col-sm-3">
                <div class="panel panel-primary" onclick="">
                    <div class="panel-heading">
                        <strong>Action and Adventure</strong>                                                
                    </div>
                    <div class="panel-body">
                        <img src="https://placehold.it/150x80?text=IMAGE" alt="Book Image" class="img-responsive" style="width:100%">
                    </div>                    
                </div>
            </div>
            <div class="col-sm-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Classics                        
                    </div>
                    <div class="panel-body">
                        <img src="https://placehold.it/150x80?text=IMAGE" alt="Image" class="img-responsive" style="width:100%">
                    </div>                    
                </div>
            </div>
            <div class="col-sm-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Comic Book or Graphic Novel                       
                    </div>
                    <div class="panel-body">
                        <img src="https://placehold.it/150x80?text=IMAGE" alt="Image" class="img-responsive" style="width:100%">
                    </div>                
                </div>
            </div>
            <div class="col-sm-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Detective and Mystery                        
                    </div>
                    <div class="panel-body">
                        <img src="https://placehold.it/150x80?text=IMAGE" alt="Image" class="img-responsive" style="width:100%">
                    </div>                
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Fantasy                        
                    </div>
                    <div class="panel-body">
                        <img src="https://placehold.it/150x80?text=IMAGE" alt="Image" class="img-responsive" style="width:100%">
                    </div>                
                </div>
            </div>
            <div class="col-sm-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        BLACK FRIDAY DEAL                        
                    </div>
                    <div class="panel-body">
                        <img src="https://placehold.it/150x80?text=IMAGE" alt="Image" class="img-responsive" style="width:100%">
                    </div>                
                </div>
            </div>
            <div class="col-sm-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        BLACK FRIDAY DEAL                        
                    </div>
                    <div class="panel-body">
                        <img src="https://placehold.it/150x80?text=IMAGE" alt="Image" class="img-responsive" style="width:100%">
                    </div>                
                </div>
            </div>
            <div class="col-sm-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        BLACK FRIDAY DEAL                        
                    </div>
                    <div class="panel-body">
                        <img src="https://placehold.it/150x80?text=IMAGE" alt="Image" class="img-responsive" style="width:100%">
                    </div>                
                </div>
            </div>
        </div>
    </div>
@endsection