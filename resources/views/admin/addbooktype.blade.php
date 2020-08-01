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
        <h1>Add book type</h1>
        <form action="addtype" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="bookType" placeholder="Enter book type">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">ADD</button>
            </div>
        </form>
        <h2>All Types</h2>
        <div class="container-fluid">
            <table class="table table-striped">
                <thead>
                    <tr>    
                        <th>Sr.No</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>                    
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>commic</td>
                        <td><a href="#" class="btn btn-info">Edit</a> <a href="#" class="btn btn-danger">Delete</a></td>
                    </tr>                    
                </tbody>
            </table>
        </div>
    </div>    
</body>
</html>