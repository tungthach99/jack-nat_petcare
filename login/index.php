<?php
	session_start();
	include_once 'database.php';
	if(!isset($_SESSION['mail'])) {	  
	  header('Location: login.php');
	  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="ht	tps://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
	$i = 1;
	if(isset($_SESSION['success'])){
		echo $_SESSION['success'];
		unset($_SESSION['success']);
	}
	if(isset($_SESSION['error'])){
		echo $_SESSION['error'];
		unset($_SESSION['error']);
	}	
	$sql= "SELECT * FROM tbl_admin ORDER BY admin_id";
	$obj_result = mysqli_query($conn,$sql);
	$result = mysqli_fetch_all($obj_result,MYSQLI_ASSOC);

	?>
	<div class="container">
		<h2>Xin chào <span style="color: orange"><?php echo $_SESSION['mail']?></span>||<a href="logout.php">Logout</a></h2>
	<a href="admin.php"><button class="btn btn-primary">Add User</button></a>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">STT</th>
	      <th scope="col">Name</th>
	      <th scope="col">Email</th>
	      <th scope="col">Telephone</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php foreach ($result as $admin): ?>

	    <tr>
	      <th scope="row"><?php echo $i; $i++?></th>
	      <td><?php echo $admin['admin_name']?></td>	      
	      <td><?php echo $admin['admin_email']?></td>
	      <td><?php echo $admin['admin_phone']?></td>
	      <td><a href="edit_admin.php?id=<?php echo $admin['admin_id']?>"><button class="btn btn-success">Edit</button></a><a href="delete.php?id=<?php echo $admin['admin_id']?>"><button class="btn btn-danger">Delete</button></a></td>
	    </tr>  
	    <?php endforeach;?>  
	  </tbody>
	</table>
	</div>
</body>
</html>