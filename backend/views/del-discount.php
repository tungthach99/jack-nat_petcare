<?php  
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "DELETE FROM tbl_ma_giam_gia WHERE ma_giam_gia = $id";
		$query = mysqli_query($conn, $sql);
		if ($query) {
			$_SESSION['check'] = 3;
           header("Location: index.php?page=discount");
		}
	}

?>