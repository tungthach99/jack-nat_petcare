<script>
function dongform(id)
{
	document.getElementById(id).style.display="none";
	<?php 	$_SESSION["kiemtrasua"]=0; ?>
}
</script>
<div id="che-man-hinh">
<div class="mess" id="mess-sua">
	<h1>Cảnh báo!</h1>
	<p>Mã giảm giá không hợp lệ!</p>
	<a style="color: #fff; border-radius: 5px; float: right;" onClick="dongform('che-man-hinh');" class="linkXanh">Đã hiểu</a>
</div>
</div>