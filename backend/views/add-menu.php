
<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            SẢN PHẢM <small>JACK&NAT</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Thêm mới sản phẩm
            </li>
        </ol>
    </div>

</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
        <form action="" method="POST" role="form">
            <div class="form-group">
                    <label for="input-username">Tên sản phẩm</label>
                    <input type="text" required="" class="form-control" name="title" id="input-username" required="">
                </div>
                <div class="form-group">
                    <label for="input-username">Đơn giá</label>
                    <input type="text" required="" class="form-control" name="dongia" id="input-username" required="">
                </div>
                
                <div class="form-group">
                <label class="form-control-label" for="input-username">Chọn ảnh</label>
				<input name="anh" type='file' id="imgInp" /><br>
  				<img style="height: 200px" id="blah" src="" />
                </div>
                <div class="form-group">
                    <label for="input-username">Mô tả</label>
                    <textarea required="" class="form-control ckeditor" name="description" id="ckeditor" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="input-username">Số lượng</label>
                    <input type="text" required="" class="form-control" name="soluong" id="input-username" required="">
                </div>
              
                <div class="form-group">
                    <label for="input-username">Danh mục</label>
                    <input type="text" required="" class="form-control" name="danhmuc" id="input-username" required="">
                </div>

            <button type="submit" name="submit" class="btn btn-primary">Thêm sản phẩm</button>
        </form>       
    </div>
</div>
<!-- /.row -->

<?php  
    if (isset($_POST['submit'])) {
        $tensanpham = $_POST['ten_san_pham'];
        $dongia = $_POST['don_gia'];
        $danhmuc = $_POST['id_danh_muc'];

        $anh= $_FILES['anh'];
        $nameFile = time().$anh['name'];
        $tmp_name = $anh['tmp_name'];
        move_uploaded_file($tmp_name, "../images/san-pham/".$nameFile);

        $mota = $_POST['mo_ta'];
        $soluong = $_POST['so_luong'];
        

        $sql = "INSERT INTO tbl_san_pham(ten_san_pham , don_gia, id_danh_muc, anh , mo_ta, so_luong, ngay_them) 
        VALUES('$tensanpham', '$dongia', '$danhmuc', '$nameFile', '$mota','$soluong',curtime())";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            $_SESSION['check'] = 1;
            header("Location: index.php?page=menu");
         }
        
    }

?>