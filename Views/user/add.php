<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add User</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Add New User</h3>
    <hr>
        <form action="" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Id</label>
                <input type="text" class="form-control" placeholder="Nhập ID" name="id">
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" placeholder="Nhập Name" name="name">
            </div>

             <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" placeholder="Nhập Email" name="email">
            </div>

             <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" placeholder="Nhập Password" name="password">
            </div>

             <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" class="form-control" placeholder="Thêm Avatar" name="avatar">
            </div>
            <button type="submit" name ="add" class="btn btn-primary">Add User</button>
        </form>
    </div>
</body>
</html>
