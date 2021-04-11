<?php  
	if (isset($_GET['id'])) {
		$id = $_GET['id_san_pham'];
		$sql = "DELETE FROM tbl_san_pham WHERE id_san_pham = $id";
		$query = mysqli_query($conn, $sql);
		if ($query) {
			$_SESSION['check'] = 3;
           header("Location: index.php?page=menu");
		}
	}

?>