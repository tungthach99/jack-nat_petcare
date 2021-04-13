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
                    <label for="title">Tên dịch vụ</label>
                    <input type="text" required="" class="form-control" name="title" id="title" required="">
                </div>
                <div class="form-group">
                    <label for="dongia">Đơn giá</label>
                    <input type="number" required="" class="form-control" name="dongiar" id="dongia" required="">
                </div>

                <div class="form-group">
                    <label for="anh_dv">Ảnh dịch vụ</label>
                    <input type="file" required="" class="form-control" name="anhdv" id="anhdv" required="">
                </div>

                <div class="form-group">
                    <label for="motadv">Chi tiết bài viết</label>
                    <textarea required="" class="form-control ckeditor" name="mota" id="ckeditor" id="" cols="30" rows="10"></textarea>
                </div>
                

                <div class="form-group">
                    <label for="danhmuc">Danh mục</label>
                    <label class="radio-inline"><input type="radio" name="danhmuc" checked="" class="radio-inline" id="ty" value="1"> Thú Y</label>
                    <label class="radio-inline"><input type="radio" name="danhmuc" class="radio-inline" id="tC" value="2"> Trông coi</label>
                    <label class="radio-inline"><input type="radio" name="danhmuc" class="radio-inline" id="tm" value="3"> Thẩm mỹ</label>
                </div>
            
                <button type="submit" name="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
    <!-- /.row -->

</div>

<?php  
    if (isset($_POST['submit'])) {
        $title = $_POST['ten_dich_vu'];
        $dongia = $_POST['don_gia_dv']
        
        $anh= $_FILES['anh_dv']['name'];
        move_uploaded_file($_FILES["anh_dv"]["tmp_name"], "images/san-pham/".basename($_FILES['fileUpload']['name'])

        $motadv = $_POST['mo_ta_dv'];
        $iddanhmuc = $_POST['id_danh_muc']
       
        $sql = "INSERT INTO tbl_dich_vu(ten_dich_vu, don_gia_dv, anh_dv,mo_ta_dv,id_danh_muc,ngay_them_dv) 
        VALUES('$title','$dongia' , '$anh', '$motadv','$iddanhmuc', curtime())";
    
        $query = mysqli_query($conn, $sql);
        if ($query) {
           $_SESSION['check'] = 1;
           header("Location: index.php?page=service");
        }

    }

?>