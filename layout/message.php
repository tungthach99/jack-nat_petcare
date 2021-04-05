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
	<p>Hãy đăng nhập để bình luận</p>
	<a style="color: #fff; border-radius: 5px; float: right;" onClick="dongform('che-man-hinh');" class="linkXanh">Đã hiểu</a>
</div>
</div>