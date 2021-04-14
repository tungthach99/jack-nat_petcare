<?php  
    if (isset($_POST['submit_search'])) {
        $key = $_POST['keyw'];
        $sql = "SELECT *FROM tbl_feedback WHERE noi_dung LIKE '%$key%' ORDER BY id_feedback";
    }else{
        $sql = "SELECT *FROM tbl_feedback ORDER BY id_feedback";
    }
    
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);
?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Feedback <small>JACK & NAT Pet Care</small>
            </h1>

            <form action="" method="POST">
                <div class="input-group">

                  <input type="text" required="" placeholder="Nhập số điện thoại cần tìm..." name="keyw" class="form-control" value="<?php if(isset($key)) { echo $key; } ?>"/>

                  <span class="input-group-addon">
                      <button style="line-height: 0px; padding: 0px;" type="submit" class="" name="submit_search">Tìm kiếm</button>
                  </span>

                </div>
            </form>

            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Danh sách feedback
                </li>
            </ol>
        </div>

    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <?php if ($count > 0) { ?>
                    <thead>
                        <tr>
                            <th class="text-center">STT</th>
                            <th class="text-center">Tên khách hàng</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Ảnh </th>
                            <th class="text-center">Nội dung</th>
                            <th class="text-center">Tình trạng</th>                     
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $stt = 0;
                            while ($row = mysqli_fetch_array($query)) {
                                 $stt += 1;
                        ?>
                            <tr>
                                <td><?php echo $stt; ?></td>
                                <td><?php echo $row['ten_khach_hang']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><img src="../images/uploads/<?php echo $row['img']; ?>" width="200" alt=""></td>
                               	<td><?php echo $row['noi_dung']; ?></td>
                                <td>
                                    <form action="index.php?page=feedback&id=<?php echo $row['id_feedback']; ?>" method="POST">
                                        <div class="input-group">
                                            <select class="form-control" name="trangThai" id="">
                                            <option value="1" <?php if(isset($row['trang_thai']) && $row['trang_thai'] == 1) { ?> selected="selected"  <?php } ?> >Đã duyệt</option>
                                                <option value="2" <?php if(isset($row['trang_thai']) && $row['trang_thai'] == 2) { ?> selected="selected"  <?php } ?> >Không duyệt</option>
                                            </select>
                                            <span class="input-group-addon">
                                                <button onclick="return confirm('Bạn có thực sự muốn cập nhật trạng thái đặt này không?');" style="line-height: 0px; padding: 0px;" type="submit" name="submit">Cập nhật</button>
                                            </span>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        <?php
                                }
                            }else{
                        ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Dữ liệu</strong> hiện không có!
                            </div>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div>

<?php  
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $status_order = $_POST['trangThai'];
        
        $sql_status = "UPDATE tbl_feedback SET trang_thai = '$status_order' WHERE id_feedback = $id";
        $query = mysqli_query($conn, $sql_status);
        header("Location: index.php?page=ordered;");

    }
?>