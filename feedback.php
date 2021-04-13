<?php
ob_start(); 
session_start();
?>

<body>
<h1 id="title" style="text-align: center;">Feedback</h1>
<p id="description" style="text-align: center;"><em>Cảm ơn bạn đã dành thời gian phản hồi</em> </p>
<form name="form1" id="myForm" enctype="multipart/form-data" method="POST" action="xlfeedback.php">
    <div class="div-group">
        <label id="name-label"  for="name">Họ và tên</label><br>
        <input id="name" required class="form-control" type="text" placeholder="Nhập tên của bạn"  required name="ten_khach_hang"></div><br>
        <label id="email-label" for="email">Email</label><br>
        <input id="email" required class="form-control" type="text" placeholder="Nhập email của bạn" placeholder="Nhập địa chỉ email" name="email">
        <label id="img-label" for="img">Ảnh</label><br>
        <input type="file" required  class="form-control" name="fileUpload" id="fileUpload">
    </div>
    <div class="div-group">
        <p id="label">Hãy nhập lời nhắn của bạn</p>
        <input type="text" id="comment-box" name="comment" placeholder="Nhập lời nhắn của bạn ở đây..."> </input>
    </div>
    <div style="display: flex; flex-direction: row;">
    <input id="submit" type="submit" value="Gửi">
    <a style="width: 240px;" href="index.php"><input id="submit" style="background-color: cyan; text-align: center" value="Quay lại trang chủ"></a>
    </div>
</form>
<?php
    if (isset($flag) && $flag == true) {
        ?>
        
        <?php
    }
    ?>

<?php	
if(isset($_SESSION["kiemtra"]) && $_SESSION["kiemtra"]==1)
	require("layout/message9.php");
?>
<?php	
if(isset($_SESSION["kiemtra"]) && $_SESSION["kiemtra"]==2)
	require("layout/message10.php");
?>
<?php	
if(isset($_SESSION["kiemtra"]) && $_SESSION["kiemtra"]==3)
	require("layout/message11.php");
?>
<?php	
if(isset($_SESSION["kiemtra"]) && $_SESSION["kiemtra"]==4)
	require("layout/message12.php");
?>


<script>
    function dongform(id)
{
	document.getElementById(id).style.display="none";
}
</script>

<style>
body{
    font-family: 'Poppins', sans-serif;
  font-weight: 400;
  line-height: 1.4;
  color: white;
  margin: 0;
}
body::before{
     content: '';
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: -1;
    background: var(--color-darkblue);
    background-image:
      url(https://kienthucbonphuong.com/images/202006/pet-la-gi/pet-la-gi.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
  }
#myForm{
    width: 720px;
    margin: 0 auto;
    background: rgba(27, 27, 50, 0.8);
    border-radius: 5px;
   text-align: left;
   padding: 15px;
}

.form-control{
    font-size: 20px;
    padding-left: 10px;
    width: 600px;
    border-radius: 5px;
    margin: 10px 60px 15px 60px ;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    height: 35px;
}
label{
    margin-left: 60px;
    font-size: 20px;
}
#label{
    margin-top: 0;
    margin-left: 60px;
    font-size: 20px;
}
#comment-box{
    width: 600px;
    height: 150px;
    padding-left: 10px;
    margin: 0 60px 15px 60px ;
    font-size: 20px;
    resize: vertical;
    overflow: hidden;
}
#submit{
    width: 240px;
    height: 40px;
    font-size: 20px;
    margin: 0 60px 15px 60px;
    background: #37af65;
    color: white;
    cursor: pointer;
    border-radius: 5px;
}
#che-man-hinh{
	position: fixed;
	z-index: 998;
	width: 100%;
	height: 100%;top: 0; left: 0;
	background-color: rgba(0,0,0,0.7);
}
#mess-sua{
	width: 30%;
	position: fixed;z-index: 999;
	top: 0;
    color: black;
	left: 35%;
	background-color: #fff;
	height: auto;
	border-radius: 0 0 5px 5px;
	box-shadow: 1px 1px 5px #000;
	padding: 1% 2% 1% 2%;
	animation-name: tren-xuong;
	animation-duration: 0.3s;
	animation-iteration-count: 1;
}

.linkXanh{
	width: auto;
	padding: 10px 20px;
	background-color: #d0a772;
	transition: 1s;
}
.linkXanh:hover{
	background-color: black;
}
@keyframes tren-xuong{
	0%{
		margin-top: -100px;
		opacity: 0;
	}
	100%{
		opacity: 1;
	}
}
@keyframes an{
	0%{
		opacity: 0;
	}
	100%{opacity: 0;}
}
    </style>
    <script>
        function fileUploaded(status) {
            document.getElementById('survey-form').style.display = 'none';
            document.getElementById('output').innerHTML = status;
        }
    </script>
</body>