<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Login</h1>                    
        <form action="login" method="POST">
            @csrf
            <div class="form-group">
                <label for="">User Name : </label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Password : </label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">            
                <button class="btn btn-primary">Login</button>
            </div>
    </form>
    </div>    
</body>
</html>