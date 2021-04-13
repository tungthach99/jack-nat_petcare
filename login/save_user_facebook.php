<?php
session_start();
include_once 'database.php';
echo "aaa";
$data = $_POST;
// code phần lưu user
$fuid = $data['id'];
$ffname = $data['name'];
$_SESSION['username'] = $fuid;
$_SESSION['mail'] = $ffname;
header('Location: index.php');
exit();
$sql_check = "SELECT * FROM tbl_khach_hang WHERE ten_khach_hang like '$fuid' ";
$check = mysqli_query($conn,$sql_check);
if(empty($check->fetch_assoc())) {
	$sql_update = "INSERT INTO tbl_ten_khach_hang  (`id_khach_hang, `ten_khach_hang`, `email`, `ten_dang_nhap`) VALUES (NULL, '$fuid', '$ffname', '$ffname')";
	$update = mysqli_query($conn,$sql_update);
	$_SESSION['success'] ='Đăng nhập thành công';
	// $_SESSION['username'] = $check->fetch_assoc()['Ffname'];
	$_SESSION['username'] = $fuid;
	$_SESSION['mail'] = $ffname;
	header('Location: index.php');
	exit();
} else {
	$_SESSION['success'] ='Đăng nhập thành công';
	// $_SESSION['username'] = $check->fetch_assoc()['Ffname'];
	$_SESSION['username'] = $fuid;
	$_SESSION['mail'] = $ffname;

}
echo json_encode(['success' => true, 'data' => $data]);