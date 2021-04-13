
<?php  
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT *FROM tbl_dich_vu WHERE id_dich_vu = $id";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);

       if (isset($_POST['submit'])) {
            $tendichvu = $_POST['ten_dich_vu'];
            $dongia = $_POST['don_gia_dv'];

            $anh = $_FILES['anh_dv']['name'];
            // if (!empty($_FILES['anh_dv']['name'])) {
            //     $nameFile = time().$_FILES['anh_dv']['name'];
            //     $tmp_name = $file['tmp_name'];
            //     move_uploaded_file($tmp_name, "images/".$nameFile);
            // }else{
            //     $nameFile = $row['anh_dv'];
            // }

            $description = $_POST['mo_ta_dv'];
            $danhmuc = $_POST['id_danh_muc'];

            $sql = "UPDATE tbl_dich_vu
                    SET ten_dich_vu = '$tendichvu', don_gia_dv = '$dongia',anh_dv = '$anh',  mo_ta_dv = '$description',
                    id_danh_muc = '$danhmuc'
                    WHERE id_danh_muc = $id";
            $query = mysqli_query($conn, $sql);
            if ($query) {       
               $_SESSION['check'] = 2;
               header("Location: index.php?page=service");
            }
       }
    }

?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">

            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Sửa bài viết
                </li>
            </ol>
        </div>

    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
            <form action="" method="POST" enctype="multipart/form-data">
            
                <div class="form-group">
                    <label for="title">Tên dịch vụ </label>
                    <input type="text" value="<?php echo $row['ten_dich_vu']; ?>" required="" class="form-control" name="title" id="title" required="">
                </div>
                <div class="form-group">
                    <label for="dongiadv">Đơn giá</label>
                    <input type="text" value="<?php echo $row['don_gia_dv']; ?>" required="" class="form-control" name="dongiadv" id="dongiadv" required="">
                </div>


                <div class="form-group">
                     <img src="../images/san-pham/<?php echo $row['anh_dv']; ?>" width="100px"/>
                     <br> <br>
                     <label for="">Thay đổi Avatar (nếu có)</label>
                     <input class="form-control" type="file" name="img">
                </div>

                <div class="form-group">
                    <label for="mo_ta_dv">Chi tiết bài viết</label>
                    <textarea required="" class="form-control ckeditor" name="description" id="ckeditor" id="" cols="30" rows="10"><?php echo $row['mo_ta_dv']; ?></textarea>
                </div>

               
            
                <button type="submit" name="submit" class="btn btn-primary">Câp nhật</button>
            </form>
        </div>
    </div>
    <!-- /.row -->

</div>
