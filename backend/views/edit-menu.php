
<?php  
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT *FROM tbl_san_pham WHERE id_san_pham = $id";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);

       if (isset($_POST['submit'])) {
            $tensanpham=$_POST['ten_san_pham'];
            $dongia = $_POST['don_gia'];
            $soluong = $_POST['so_luong'];
            $danhmuc= $_POST['id_danh_muc'];
            $mota = $_POST['mo_ta'];
            $anh = $_FILES['anh']['name'];
            // $nameFile = time().$_FILES['anh']['name'];
            // $tmp_name = $file['tmp_name'];
            // move_uploaded_file($tmp_name, "../images/san-pham/".$nameFile);
           
           $sql = "UPDATE tbl_san_pham 
                    SET ten_san_pham = '$tensanpham', 
                    don_gia = '$dongia',so_luong = '$soluong', id_danh_muc='$danhmuc' , mo_ta = '$mota', anh = '$anh'
                    WHERE id_san_pham = $id";
            $query = mysqli_query($conn, $sql);
            if ($query) {       
               $_SESSION['check'] = 2;
               header("Location: index.php?page=menu");
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
                    <i class="fa fa-dashboard"></i> Sửa sản phẩm
                </li>
            </ol>
        </div>

    </div>
    <!-- /.row -->

     <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
            <form action="" method="POST" enctype="multipart/form-data">
            
               <div class="">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label class="form-control-label" for="input-username">Tên sản phẩm</label>
                                 <input name="tensanpham" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Tên sản phẩm" value="<?php echo $row['ten_san_pham'] ?>">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label class="form-control-label" for="input-username">Đơn giá</label>
                                 <input name="dongia" type="number" id="input-username" class="form-control form-control-alternative" placeholder="Đơn giá" value="<?php echo $row['don_gia'] ?>">
                              </div>
                           </div>
                            <div class="col-lg-12">
                              <div class="form-group">
                                 <label class="form-control-label" for="input-username">Số lượng</label>
                                 <input name="soluong" type="number" id="input-username" class="form-control form-control-alternative" placeholder="Số lượng" value="<?php echo $row['so_luong'] ?>">
                              </div>
                           </div>
                           <div class="col-lg-12">
                           <div class="form-group">
                                 <img src="../images/san-pham/<?php echo $row['anh']; ?>" width="100px"/>
                                 <br> <br>
                                 <label for="">Thay đổi Ảnh (nếu có)</label>
                                 <input class="form-control" type="file" name="anh">
                           </div>

                           </div>
                           <div class="col-lg-12">
                               <div class="form-group focused">
                                   <label class="form-control-label" for="input-username">Danh mục</label>
                                   <select class="form-control form-control-alternative" name="danhmuc" id="">
                                   </select>
                                </div>
                             </div>
                             <div class="col-lg-12">
                             <div class="form-group">
                                 <label for="mota">Chi tiết bài viết</label>
                                 <textarea required="" class="form-control ckeditor" name="mota" id="ckeditor" id="" cols="30" rows="10"><?php echo $row['mo_ta']; ?></textarea>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                    
            
                <button type="submit" name="submit" class="btn btn-primary">Câp nhật</button>
            </form>
        </div>
    </div>
    <!-- /.row -->

</div>
