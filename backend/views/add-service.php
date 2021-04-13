<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
              DỊCH VỤ<small>JACK&NAT - SERVICE</small>
            </h1>

            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Thêm mới dịch vụ
                </li>
            </ol>
        </div>

    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
            <form action="" method="POST" enctype="multipart/form-data">
            
                <div class="form-group">
                    <label for="">Tên dịch vụ</label>
                    <input type="text"  class="form-control" name="name" value="<?php if(isset($name)){ echo $name; } ?>" required="" placeholder="Nhập tên sản phẩm...">
                    
                </div>
                <div class="form-group">
                    <label for="">Đơn giá</label>
                    <input type="number" class="form-control" name="price" value="<?php if(isset($name)){ echo $price; } ?>" required="" placeholder="Nhập đơn giá sản phẩm...">

                </div>

                <div class="form-group">
                    <label for="">Ảnh dịch vụ</label>
                    <input type="file" required="" class="form-control" name="anhdv"  required="">
                </div>

                <div class="form-group">
                    <label for="">Chi tiết bài viết</label>
                    <textarea required="" class="form-control ckeditor" name="mota" id="ckeditor" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <input type="text" required="" class="form-control" name="danhmuc"  required="">
                </div>
                

                
            
                <button type="submit" name="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
    <!-- /.row -->

</div>

<?php  
    if (isset($_POST['submit'])) {
        $name = $_POST['ten_dich_vu'];
        $price = $_POST['don_gia_dv'];
        
        $anh= $_FILES['anh_dv'];
        $nameFile = time().$anh['name'];
        $tmp_name = $anh['tmp_name'];
        move_uploaded_file($tmp_name, "../images/san-pham/".$nameFile);

        $motadv = $_POST['mo_ta_dv'];
        $iddanhmuc = $_POST['id_danh_muc'];
       
        $sql = "INSERT INTO tbl_dich_vu(ten_dich_vu ,don_gia_dv ,anh_dv ,mo_ta_dv ,id_danh_muc ,ngay_them_dv) 
        VALUES('$name','$price' , '$nameFile', '$motadv','$iddanhmuc', curtime())";
    
        $query = mysqli_query($conn, $sql);
        if ($query) {
           $_SESSION['check'] = 1;
           header("Location: index.php?page=service");
        }

    }

?>
