<?php 
	session_start();
	include_once 'database.php';
	$error ='';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php 	
	if(isset($_POST['submit'])){
		$admin_name = $_POST['admin_name'];
		$admin_email = $_POST['admin_email'];
		$admin_phone = $_POST['admin_phone'];
		$sql_check = "SELECT admin_email FROM tbl_admin WHERE admin_email='$admin_email'";
		$check = mysqli_query($conn,$sql_check);		
		if($check->num_rows >= 1){
			echo "<script> alert('Email đã tồn tại');</script>";
		}
		else{
			$sql_insert = "INSERT INTO tbl_admin(admin_name,admin_email,admin_phone) VALUES ('$admin_name','$admin_email','$admin_phone')";
			$insert = mysqli_query($conn,$sql_insert);
			if($insert){
				$_SESSION['success'] = 'Thêm mới thành công';
				header('Location: index.php');
				exit();
			}else{
				$error ='Thêm thất bại';
		}
		}
		

	}
	?>
	<div class="container">
		<div class="main">
			<h1 class="title">Đăng ký thành viên</h1>
			<h3 style="color: red"><?php echo $error; ?></h3>
			<form action="" method="post"> 
		  <div class="form-group">
		    <label for="formGroupExampleInput">Name</label>
		    <input type="text" class="form-control" required="" name="admin_name" placeholder="Name...">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Email</label>
		    <input type="email" class="form-control" required="" name="admin_email" placeholder="Email...">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Telephone</label>
		    <input type="tel" class="form-control" required="" name="admin_phone" placeholder="Telephone...">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Password</label>
		    <input type="tel" class="form-control" required="" name="admin_pass" placeholder="Telephone...">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput">Repassword</label>
		    <input type="tel" class="form-control" required="" name="admin_repass" placeholder="Telephone...">
		  </div>

		  <input type="submit" name="submit" value="Lưu" class="btn btn-primary"><input type="reset" class="btn btn-secondary"  name="">
		</form>
		</div>
	</div>
</body>
</html>