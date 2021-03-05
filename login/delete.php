<?php 
	session_start();
	include_once 'database.php';
	
?>
<?php 
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sql_delete = "DELETE FROM tbl_admin WHERE admin_id = '$id'";
		$delete = mysqli_query($conn,$sql_delete);
		if($delete) {
		  $_SESSION['success'] = 'Xóa thành công';
		} else {
		  $_SESSION['error'] = 'Xóa thất bại';
		}	
		header('Location: index.php');
		exit();
	}
?>