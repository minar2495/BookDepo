<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    /* Remove the jumbotron's default bottom margin */ 
    .jumbotron {
      margin-bottom: 0;
    }
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    </style>
</head>
<body>    
    @section('header')
    <div class="jumbotron">
        <div class="container text-center">
            <h1>Book Depot</h1>
            <p>Online book store</p>
        </div>
    </div>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigationBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="../images/books.png" alt="logo" height="100%" width="100%"></a>
            </div>
            <div class="collapse navbar-collapse" id="navigatoionBar">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/list">Books</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">FeedBack</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/login"><span class="glyphicon glyphicon-user"></span>Login</a></li>
                    <li><a href="/register"><span class="glyphicon glyphicon-user"></span>Register</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span>Your Account</a></li>
                    <li><a href="/cart"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                </ul>
            </div>                
        </div>
    </nav>            
    @show    
    @section('content')
        
    @show
    <footer class="container-fluid text-center">
        <p>Book depot copyright</p>
    </footer>
</body>
</html>