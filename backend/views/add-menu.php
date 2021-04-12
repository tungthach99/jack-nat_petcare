<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
               SẢN PHẨM<small>JACK & NAT- SẢN PHẨM</small>
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
            <form action="" method="POST" enctype="multipart/form-data">
            
                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-username">Tên sản phẩm</label>
                                            <input name="tensanpham" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Tên sản phẩm">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-username">Đơn giá</label>
                                            <input name="dongia" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Đơn giá">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-username">Mô tả</label>
                                            <input name="mota" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Mô tả">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-username">Số lượng</label>
                                            <input name="soluong" type="number" id="input-username" class="form-control form-control-alternative" placeholder="Số lượng">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-username">Chọn ảnh</label>
                                            <input name="anh" type='file' id="imgInp" /><br>
                                            <img style="height: 200px" id="blah" src="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                           <div class="form-group focused">
                                               <label class="form-control-label" for="input-username">Danh mục</label>
                                               <select class="form-control form-control-alternative" name="danhmuc" id="">
                                                 <option value="">---Chọn danh mục---</option>
                                                 <?php
                                                    $sql_dm = "SELECT * FROM tbl_danh_muc";
                                                    $query_dm = $connection->query($sql_dm);
                                                    while ($row_dm=$query_dm->fetch_assoc()) {
                                                    
                                                  ?>
                                                  <option value="<?php echo $row_dm['id_danh_muc'] ?>">
                                                    <?php echo $row_dm['ten_danh_muc'] ?></option>
                                                  <?php } ?>
                                               </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                <div>
                        <input class="btn btn-outline-default" type="reset" value="Nhập lại">
                        <input class="btn btn-outline-default" name="them" type="submit" value="Thêm mới">
                     <a class="btn btn-secondary btn-lg active" href="?ql=sanpham/ds">Danh sách</a>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
    <!-- /.row -->
    <!-- Đoạn script load ảnh sau khi chọn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script type="text/javascript">
            function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
          $('#blah').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }

    $("#imgInp").change(function() {
      readURL(this);
    });
    </script>
</div>

<?php  
    if (isset($_POST['submit'])) {
        $name = $_POST['ten_san_pham'];
		$dongia = $_POST['dongia'];
		$danhmuc= $_POST['danhmuc'];
		$mota = $_POST['mota'];
		$anh = $_FILES['anh']['name'];
		$soluong = $_POST['soluong'];


        $sql_check = "SELECT *FROM tbl_san_pham WHERE ten_san_pham = '$name'";
        $query_check = mysqli_query($conn, $sql_check);
        $check = mysqli_num_rows($query_check);

        if ($check != 1) {
            $sql = "INSERT INTO tbl_san_pham 
            SET ten_san_pham = '$tensanpham', don_gia = '$dongia',so_luong = '$soluong', id_danh_muc='$danhmuc' , mo_ta = '$mota', anh = '$anh'
            WHERE id_san_pham = $id";
            $query = mysqli_query($conn, $sql);
            if ($query) {
               $_SESSION['check'] = 1;
               header("Location: index.php?page=menu");
            }
        }else{
            $errors = "<p style='color: red; font-weight: bold;'>Tài khoản đã tồn tại!</p>";
        }
    }

?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                SẢN pHẨM <small>JACK&NAT</small>
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
                <legend>
                    <i class="fa fa-user-plus"></i>

                </legend>
                

                <div class="form-group">
                    <label for="">
                        <i class="fa fa-male"></i>
                        Tên sản phẩm
                    <span style="color: red;">*</span>
                </label>
                    <input type="text" class="form-control" name="name" value="<?php if(isset($name)){ echo $name; } ?>" required="" placeholder="Nhập đầy đủ tên sản phẩm...">
                </div>

                <div class="form-group">
                    <label for="">
                        <i class="fa fa-phone"></i>
                       Đơn giá
                    <span style="color: red;">*</span>
                </label>
                    <input type="number" class="form-control" name="value" value="<?php if(isset($name)){ echo $dongia; } ?>" required="" placeholder="Nhập đơn giá ...">
                </div>

                <div class="form-group">
                    <label for="">
                        <i class="fa fa-envelope-o"></i>
                        Số lượng
                    <span id="errorEmail" style="color: red;">* <?php if(isset($errors)){ echo $errors; } ?></span>
                </label>
                    <input type="email" class="form-control" name="number" value="<?php if(isset($name)){ echo $soluong; } ?>" required="" placeholder="Nhập soluong...">
                </div>

                <div class="form-group">
                    <label for="">
                        <i class="fa fa-male"></i>
                        Mô tả
                    <span style="color: red;">*</span>
                    </label>
                     <input type="mota" class="form-control" name="mota" value="<?php if(isset($name)){ echo $mota; } ?>" required="" placeholder="Nhập soluong...">
                </div>
                <div class="form-group">
                    <label for="">
                        <i class="fa fa-key"></i>
                        Danh mục
                    <span style="color: red;">*</span>
                    </label>
                     <input type="mota" class="form-control" name="mota" value="<?php echo $row_dm['id_danh_muc'] ?>">
								                    <?php echo $row_dm['ten_danh_muc'] ?>
								                  <?php } ?>  required="" placeholder="Nhập soluong...">
                </div>

                

                <button type="submit" name="submit" class="btn btn-primary">Thêm sản phẩm</button>
            </form>       
        </div>
    </div>
    <!-- /.row -->

</div>