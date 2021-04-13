
<?php  
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT *FROM tbl_danh_muc WHERE id_danh_muc = $id";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);

       if (isset($_POST['submit'])) {
         $title = $_POST['title'];
        
         $sql = "UPDATE tbl_danh_Muc
         SET ten_danh_muc = '$title'
         WHERE id_danh_muc = $id";
            $query = mysqli_query($conn, $sql);
            if ($query) {       
               $_SESSION['check'] = 2;
               header("Location: index.php?page=dsdanhmuc");
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
                    <i class="fa fa-dashboard"></i> Sửa danh mục
                </li>
            </ol>
        </div>

    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
            <form action="" method="POST" enctype="multipart/form-data">
            
                <div class="form-group">
                    <label for="title">Tên danh mục</label>
                    <input type="text" value="<?php echo $row['ten_danh_muc']; ?>" required="" class="form-control" name="title" id="title" required="">
                </div>
                
                
            
                <button type="submit" name="submit" class="btn btn-primary">Câp nhật</button>
            </form>
        </div>
    </div>
    <!-- /.row -->

</div>
