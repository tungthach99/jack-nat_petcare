<?php 
	session_start();
	include_once 'database.php';
	$error ='';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
	<link rel="stylesheet" href="ht	tps://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php 
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sql = "SELECT * FROM tbl_admin WHERE admin_id='$id'";
		$obj_result = mysqli_query($conn,$sql);
		$results = mysqli_fetch_all($obj_result,MYSQLI_ASSOC);
	}
	if(isset($_POST['submit'])){
		$admin_name = $_POST['admin_name'];
		$admin_email = $_POST['admin_email'];
		$admin_phone = $_POST['admin_phone'];
		$sql_update = "UPDATE tbl_admin SET admin_name='$admin_name',admin_email='$admin_email',admin_phone='$admin_phone' WHERE admin_id='$id'";
		$update = mysqli_query($conn,$sql_update);
		if($update){
			$_SESSION['success'] = 'Update thành công';
			header('Location: index.php');
			exit();
		}else{
			$error ='Thêm thất bại';
		}

	}
	?>
	<div class="container">
		<div class="main">
			<h1 class="title">Edit User Table</h1>
			<h3 style="color: red"><?php echo $error; ?></h3>
			<form action="" method="post"> 
				<?php foreach ($results as $result): ?>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Name</label>
		    <input type="text" value="<?php echo $result['admin_name']?>" class="form-control" required="" name="admin_name" placeholder="Name...">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Email</label>
		    <input type="email" class="form-control" value="<?php echo $result['admin_email']?>" required="" name="admin_email" placeholder="Email...">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Telephone</label>
		    <input type="tel" class="form-control" required="" value="<?php echo $result['admin_phone']?>" name="admin_phone" placeholder="Telephone...">
		  </div>
		  <input type="submit" name="submit" value="Lưu" class="btn btn-primary"><input type="reset" class="btn btn-secondary" >
		  		<?php endforeach;?>
		</form>
		</div>
	</div>
</body>
</html>