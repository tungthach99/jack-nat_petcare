<?php
if(isset($_POST['them']))
{
	//kiểm tra thông tin
    $anhkm=$_POST['anhkm'];
    $idkhuyenmai = $_POST['id_khuyen_mai'];
	$hople=true;
	$message = "";
	if($idkhuyenmai=="")
	{
		$hople=false;
		$message .= "<div>Bạn chưa nhập mã chương trình khuyến mại</div>";
    }

	$idsanpham=$_POST['id_san_pham'];
	if($idsanpham=="")
	{
		$hople = false;
		$message .= "<div>Bạn chưa nhập mã sản phẩm</div>";
		
	}

	$tenkhuyenmai=$_POST['ten_khuyen_mai'];
	if($tenkhuyenmai=="")
	{		
		$hople = false;
		$message .= "<div>Bạn chưa nhập tên chương trình khuyến mại</div>";
		
	}


	$muckhuyenmai=$_POST['muc_khuyen_mai'];
	if($muckhuyenmai=="")
	{
		$hople = false;
		$message .= "<div>Bạn chưa nhập mức khuyến mại</div>";
		
	}
	else {
        $sqlcheck="Select * from tbl_khuyen_mai WHERE id_san_pham='".$idsanpham."'";
        $result=$connection ->query($sqlcheck);
        if($result->num_rows<=0)
        {
		$sql="INSERT INTO tbl_khuyen_mai (id_khuyen_mai, id_san_pham, ten_khuyen_mai, muc_khuyen_mai, anhkm) 
        VALUES ('$idkhuyenmai','$idsanpham','$tenkhuyenmai','$muckhuyenmai','$anhkm') ";
		if($connection->query($sql))
        {
     	    echo "<div class='alert alert-success' role='alert'>
            <strong>Thêm thành công</strong>
            </div>";
        }

         else
         {
         	echo "<div class='alert alert-danger' role='alert'>
            <strong>Thêm thất bại</strong>
        </div>";
         }
        }
        else
        {
            $hople = false;
		    echo "<div class='alert alert-danger' role='alert'>
            <strong>Sản phẩm đã có chương trình khuyến mại</strong>
        </div>";
        } 

            }
}
   ?>

<div>
<h1> Thêm khuyến mại </h1>
<div class="card bg-secondary shadow">
<div class="card-body">
   <form method="POST">
   <h6 class="heading-small text-muted mb-4">Thông tin khuyến mại</h6>
   <div class="pl-lg-4">
      <div class="row">
         <div class="col-lg-12">
            <div class="form-group focused">
               <label class="form-control-label" for="input-first-name">Mã khuyến mại</label>
               <input name="id_khuyen_mai" type="text" id="input-first-name" class="form-control form-control-alternative" >
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="form-group focused">
               <label class="form-control-label" for="input-first-name">Mã sản phẩm</label>
               <input name="id_san_pham" type="text" id="input-first-name" class="form-control form-control-alternative" >
            </div>
         </div>
         <div class="col-lg-12">
            <div class="form-group focused">
               <label class="form-control-label" for="input-first-name">Tên chương trình khuyến mại</label>
               <input name="ten_khuyen_mai" type="text" id="input-first-name" class="form-control form-control-alternative" >
            </div>
         </div>
         <div class="col-lg-12">
            <div class="form-group focused">
               <label class="form-control-label" for="input-first-name">Mức khuyến mại (%)</label>
               <input name="muc_khuyen_mai" type="text" id="input-first-name" class="form-control form-control-alternative" >
            </div>
         </div>
         <div class="col-lg-12">
            <div class="form-group focused">
            <label class="form-control-label" for="input-username">Chọn ảnh</label>
			<input name="anhkm" type='file' id="imgInp" /><br>
  			<img style="height: 200px" id="blah" src="" />
            </div>
         </div>
      </div>
      <div>
         <input class="btn btn-outline-default" type="reset" value ="Nhập lại">
         <input class="btn btn-outline-default" name="them" type="submit" value ="Thêm mới">
         <a class="btn btn-secondary btn-lg active" href="?ql=khuyenmai/ds">Danh sách khuyến mại</a>
      </div>
   </div>
</div>