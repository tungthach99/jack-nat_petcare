<?php  
    if (isset($_POST['submit'])) {
        $magiamgia = $_POST['ma_giam_gia'];
		$chietkhau = $_POST['chiet_khau'];
		$ngayapdung = $_POST['ngay_ap_dung'];
		$ngayketthuc = $_POST['ngay_ket_thuc'];

        $sql = "INSERT INTO tbl_ma_giam_gia (ma_giam_gia,chiet_khau,ngay_ap_dung,ngay_ket_thuc)
        VALUES ('$magiamgia','$chietkhau',date('yyyy/mm/dd hh:mi:ss',$ngayapdung),date('yyyy/mm/dd hh:mi:ss',$ngayketthuc))";
        $query = mysqli_query($conn, $sql);
        if ($query) {
           $_SESSION['check'] = 1;
           header("Location: index.php?page=discount");
        }
    }

?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                MÃ GIẢM GIÁ <small>JACK&NAT - DISCOUNT</small>
            </h1>

            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Thêm mới mã giảm giá
                </li>
            </ol>
        </div>

    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
            <form action="" method="POST" enctype="multipart/form-data">
            
                <div class="form-group">
                    <label for="">Mã giảm giá</label>
                    <input type="text" class="form-control form-control-alternative" name="name" id="" required="">
                </div>

                <div class="form-group">
                    <label for="">Chiết khấu</label>
                    <input type="number"  class="form-control form-control-alternative" name="ck" id="ck" required="" placeholder="Số tiền">
                </div>

                <div class="form-group">
                    <label for="">Ngày áp dụng  </label>
                    <input type="datetime-local" class="form-control form-control-alternative" name="ngaybd" id="" required="">
                </div>
                <div class="form-group">
                    <label for="">Ngày kết thúc</label>
                    <input type="datetime-local"class="form-control form-control-alternative" name="ngaykt" id="" required="">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>

</div>

