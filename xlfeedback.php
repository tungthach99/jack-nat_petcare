<?php
ob_start(); 
session_start();
$_SESSION["kiemtra"]=0;
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //Bước 1: Tạo thư mục lưu file
    $error = array();
    $target_dir = "images/uploads/";
    $target_file = $target_dir . basename($_FILES['fileUpload']['name']);
    // Kiểm tra kiểu file hợp lệ
    $type_file = pathinfo($_FILES['fileUpload']['name'], PATHINFO_EXTENSION);
    $type_fileAllow = array('png', 'jpg', 'jpeg', 'gif');
    if (!in_array(strtolower($type_file), $type_fileAllow)) {
        $error['fileUpload'] = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
        $_SESSION["kiemtra"]=2;

    }
    //Kiểm tra kích thước file
    $size_file = $_FILES['fileUpload']['size'];
    if ($size_file > 5242880) {
        $error['fileUpload'] = "File bạn chọn không được quá 5MB";
        $_SESSION["kiemtra"]=3;
    }
// Kiểm tra file đã tồn tại trê hệ thống
    if (file_exists($target_file)) {
        $error['fileUpload'] = "File bạn chọn đã tồn tại trên hệ thống";
        $_SESSION["kiemtra"]=4;

    }
//
    if (empty($error)) {
        if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
            echo "Bạn đã upload file thành công";
            $flag = true;
        } else {
            echo "File bạn vừa upload gặp sự cố";
        }
    }
}
?>

<?php
	require("public/ketnoi.php");
	$noidung=$_POST['comment'];
	$tenkhachhang=$_POST['ten_khach_hang'];
    $email=$_POST['email'];
	$img = basename($_FILES['fileUpload']['name']);
	$tranghientai="location:feedback.php";
	if ($noidung != "" && empty($error))
	{
		$sql_insert="INSERT INTO tbl_feedback( ten_khach_hang, email, img,noi_dung) 
                                values('".$tenkhachhang."', '".$email."',  '".$img."',  '".$noidung."')";
		if($con->query($sql_insert)===TRUE)
		{	
            $_SESSION["kiemtra"]=1;
			header($tranghientai);
		}
		else
		{
			header($tranghientai);
		}   
    }
    else
    {
        header($tranghientai);

    }
?>