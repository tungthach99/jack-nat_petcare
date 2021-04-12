
<?php  
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM tbl_khach_hang WHERE id_khach_hang = $id";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);

       if (isset($_POST['submit'])) {
        $tenkhachhang = $_POST['ten_khach_hang'];
        $diachi = $_POST['dia_chi'];
        $sodt = $_POST['so_dien_thoai'];
        $email = $_POST['email'];
        $matkhau = $_POST['mat_khau'];
         $sql = "UPDATE tbl_khach_hang
         SET ten_khach_hang = '$tenkhachhang', dia_chi = '$diachi',so_dien_thoai ='$sodt',email='$email',mat_khau='$matkhau'
         WHERE id_khach_hang = $id";
            $query = mysqli_query($conn, $sql);
            if ($query) {       
               $_SESSION['check'] = 2;
               header("Location: index.php?page=customer");
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
                    <i class="fa fa-dashboard"></i> Sửa khách hàng
                </li>
            </ol>
        </div>

    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
            <form action="" method="POST" enctype="multipart/form-data">
            
                <div class="form-group">
                    <label for="name">Tên khách hàng</label>
                    <input type="text" value="<?php echo $row['ten_khach_hang']; ?>" required="" class="form-control" name="name" id="title" required="">
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" value="<?php echo $row['dia_chi']; ?>" required="" class="form-control" name="diachi"  required="">
                </div>
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" value="<?php echo $row['so_dien_thoai']; ?>" required="" class="form-control" name="phone"  required="">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" value="<?php echo $row['email']; ?>" required="" class="form-control" name="email"  required="">
                </div>

                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="text" value="<?php echo $row['mat_khau']; ?>" required="" class="form-control" name="passw"  required="">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Câp nhật</button>
            </form>
        </div>
    </div>
    <!-- /.row -->

</div>
