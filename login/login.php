<?php
ob_start(); 
session_start();
?>
<?php

require_once( 'Facebook/autoload.php' );
$fb = new Facebook\Facebook([
'app_id' => '415708562813552',
'app_secret' => 'e856b55f333d67994e08e1dccc064629',
'default_graph_version' => 'v10.0',
]);
$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // Optional permissions
///=============
// $loginUrl = $helper->getLoginUrl('https://vzn.vn/demo/fb-callback.php', $permissions);
$loginUrl = $helper->getLoginUrl('http://localhost/jacknatPetcare-main/login/fb-callback.php', $permissions);
//==============
echo '<a href="' . $loginUrl . '" style="">Log in Facebook!</a>';
?>
<?php 
	include_once 'database.php';
	$error = '';
    if(isset($_POST['submit'])){
    	$email = $_POST['email'];
    	$password = $_POST['password'];
    	$query = "SELECT ten_khach_hang,email,mat_khau FROM tbl_khach_hang WHERE email = '$email' AND mat_khau = '$password' LIMIT 1 ";
    	$check = mysqli_query($conn,$query);		
		if($check->num_rows >= 1){
			$_SESSION['success']='Đăng nhập thành công';
			$result = mysqli_fetch_all($check,MYSQLI_ASSOC);
			$username = $result['ten_khach_hang'];
			
			$_SESSION['username'] = $username;
	    	$_SESSION['mail'] = $email;
	    	header('Location: index.php');
	    	exit();
		}else{
			echo "<script> alert('Bạn nhập sai email hoặc password');</script>";
		}    	
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="ht	tps://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
	<div class="container">
		<div class="main">
			<h1 class="title">Welcome Admin!</h1>
			<h3 style="color: red"><?php echo $error; ?></h3>
			<form action="" method="post">
				
		  <div class="form-group">
		    <label for="exampleInputEmail1">User </label>
		    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
		  </div>
		  <input type="submit" class="btn btn-primary" value="Đăng nhập" name="submit">
		  <a href="admin.php" class="btn btn-warning">Đăng ký</a>
		</form>
		</div>

	</div>
</body>
</html>