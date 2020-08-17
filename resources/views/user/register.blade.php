@extends('layout')
@section('content')
<style>
    
</style>
<div class="container">
    <h1>Registration Form</h1>
    <form action="register" method="post">
        @csrf
        <div class="form-group">
            <label for="">
                Enter Your/Shop name : 
            </label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
            <label for="">
                Enter Your/shop address : 
            </label>
            <textarea name="address" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">
                Contact : 
            </label>
            <input type="text" class="form-control" name="contact_number">
        </div>
        <div class="form-group">
            <label for="">
                Email : 
            </label>
            <input type="email" name="email_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="">
                Enter the password : 
            </label>
            <input type="text" name="password" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>
</div>
@endsection
