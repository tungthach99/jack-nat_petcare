<?php  
  // Số lượng tin tức
    $sql_news = "SELECT COUNT(id) as id FROM tbl_news";
    $query_news = mysqli_query($conn, $sql_news);
    $rs_news = mysqli_fetch_array($query_news);

    // Số lượng thành viên
    $sql_users = "SELECT COUNT(id) as id FROM tbl_users";
    $query_users = mysqli_query($conn, $sql_users);
    $rs_users = mysqli_fetch_array($query_users);

    // Số lượng đơn hàng
    $sql_order = "SELECT COUNT(id_don_hang) as id FROM tbl_don_hang";
    $query_order = mysqli_query($conn, $sql_order);
    $rs_order = mysqli_fetch_array($query_order);

    // Số lượng sản phẩm
    $sql_menus = "SELECT COUNT(id_san_pham) as id FROM tbl_san_pham";
    $query_menus = mysqli_query($conn, $sql_menus);
    $rs_menus = mysqli_fetch_array($query_menus);

    // Số lượng danh mục
    $sql_menus2 = "SELECT COUNT(id_danh_muc) as id FROM tbl_danh_muc";
    $query_menus2 = mysqli_query($conn, $sql_menus2);
    $rs_menus2 = mysqli_fetch_array($query_menus2);

     // Số lượng khách hàng
     $sql_customer = "SELECT COUNT(id_khach_hang) as id FROM tbl_khach_hang";
     $query_customer = mysqli_query($conn, $sql_customer);
     $rs_customer = mysqli_fetch_array($query_customer);

       // Số lượng bình luận
       $sql_comment = "SELECT COUNT(id_binh_luan) as id FROM tbl_binh_luan_san_pham";
       $query_comment = mysqli_query($conn, $sql_comment);
       $rs_comment = mysqli_fetch_array($query_comment);
        // Số lượng dịch vụ
        $sql_service = "SELECT COUNT(id_dich_vu) as id FROM tbl_dich_vu";
        $query_service = mysqli_query($conn, $sql_service);
        $rs_service = mysqli_fetch_array($query_service);


?>


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Tổng quan <small>hệ thống</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php if($rs_menus['id']  > 0) { echo $rs_menus['id']; } ?></div>
                            <div>sản phẩm</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?page=menu">
                    <div class="panel-footer">
                        <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php if($rs_order['id']  > 0) { echo $rs_order['id']; } ?></div>
                            <div>Danh sách đơn hàng</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?page=ordered">
                    <div class="panel-footer">
                        <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-newspaper-o fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php if($rs_news['id']  > 0) { echo $rs_news['id']; } ?></div>
                            <div>Tin JACK&NAT</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?page=news">
                    <div class="panel-footer">
                        <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php if($rs_users['id']  > 0) { echo $rs_users['id']; } ?></div>
                            <div>Thành viên!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?page=users">
                    <div class="panel-footer">
                        <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php if($rs_menus2['id']  > 0) { echo $rs_menus2['id']; } ?></div>
                            <div>Danh mục</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?page=dsdanhmuc">
                    <div class="panel-footer">
                        <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php if($rs_customer['id']  > 0) { echo $rs_customer['id']; } ?></div>
                            <div>Khách Hàng</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?page=customer">
                    <div class="panel-footer">
                        <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-newspaper-o fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php if($rs_news['id']  > 0) { echo $rs_news['id']; } ?></div>
                            <div>Báo Cáo JACK&NAT</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?page=baocao">
                    <div class="panel-footer">
                        <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php if($rs_comment['id']  > 0) { echo $rs_comment['id']; } ?></div>
                            <div>Bình Luận!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?page=comment">
                    <div class="panel-footer">
                        <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div>