<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>USER</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- USER ---</h3>
        <a href="index.php?mod=user&act=add" class="btn btn-primary">Add New User</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Avatar</th>
                <th>Created_at</th>
                <th>Action</th>
            </thead>
            <?php 
            	foreach ($users as $user) {?>
            	<tr>
            		<td><?php echo $user['id']; ?></td>
            		<td><?php echo $user['name']; ?></td>
            		<td><?php echo $user['email']; ?></td>
            		<td><?php echo $user['password'] ?></td>
            		<td><?php echo $user['avatar'] ?></td>
            		<td><?php echo $user['created_at'] ?></td>
                	<td>
	                    <a href="index.php?mod=user&act=detail&id=<?=$user['id']?>" class="btn btn-primary">Detail</a>
	                    <a href="index.php?mod=user&act=editl&id=<?=$user['id']?>" class="btn btn-success">Edit</a>
	                    <a href="index.php?mod=user&act=delete&id=<?=$user['id']?>" class="btn btn-danger">Delete</a>
               		 </td>
                </tr>
       <?php } ?>
   </table>
            
    </div>
</body>
</html>