<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <link href="css/main.css" rel="stylesheet" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Jack & Nat pet care</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/icon-logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
	<script type="text/javascript" src="js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">

	<script type="text/javascript" src="js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/css3.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<?php
	include("public/ketnoi.php");
	include("layout/header.php");
	include("layout/taikhoan.php");
	?>
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Liên Hệ</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1316.848422848072!2d105.82835289255182!3d21.008272930291216!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac7ffa6e6679%3A0x1ff55bbdd942b323!2zSOG7jWMgVmnhu4duIE5nw6JuIEjDoG5n!5e0!3m2!1svi!2s!4v1615127389469!5m2!1svi!2s" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Liên Hệ</h2>
						<p>Đặt lịch hẹn tư vấn</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form id="contactForm">
						<div class="row">
							<div class="col-md-6">
								<img src="images/contact-1536x1206.jpg"  class="img-fluid" alt="Image">
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="name" placeholder="Họ tên(Bắt buộc)" required data-error="Hãy nhập họ tên của bạn">
									<div class="help-block with-errors"></div>
								</div>                                 
							
							
								<div class="form-group">
									<input type="text" placeholder="Email của bạn" id="email" class="form-control" name="name" required data-error="Hãy nhập địa chỉ email của bạn">
									<div class="help-block with-errors"></div>
								</div> 
							
							
								<div class="form-group">
									<input type="text" placeholder="Số điện thoại" id="sdt" class="form-control" name="name" required data-error="Hãy nhập số điện thoại của bạn">
									<div class="help-block with-errors"></div>
								</div> 
							
							
								<div class="form-group">
									<select class="custom-select d-block form-control" id="guest" required data-error="Please Select Person">
									  <option disabled selected>Hãy chọn yêu cầu</option>
									  <option value="1">Thú Y</option>
									  <option value="2">Spa</option>
									  <option value="3">Hotel</option>
									  <option value="4">Hậu sự</option>
									</select>
									<div class="help-block with-errors"></div>
								</div> 
							
							
								<div class="form-group"> 
									<textarea class="form-control" id="message" placeholder="Yêu cầu chi tiết" rows="4" data-error="Write your message" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="submit-button text-center">
									<button class="btn btn-common" name="submit_contact" type="submit">Gửi Đi</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div> 
								</div>
							</div>
						</div>            
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact -->
	

	<!-- Start Footer -->
	<?php include_once 'layout/footer.php'; ?>
	<!-- End Footer -->
	
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/jquery.mapify.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
	
</body>
</html>

<?php  
  if (isset($_POST['submit_contact'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    // Tiến hành gửi email cho khách
    include_once 'PHPMailer/class.phpmailer.php';
    include_once 'PHPMailer/class.smtp.php';

    $data = "Họ tên: ".$name."<br>";
    $data .= "Email: ".$email."<br>";
    $data .= "Tiêu đề: ".$subject."<br>";
    $data .= "Nội dung: ".$message."<br>";

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->CharSet = "UTF-8";
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;  
        $email_send = 'jacknatpetcare@gmail.com';    // Enable SMTP 

        $mail->Username   = 'jacknatpetcare@gmail.com';                     // SMTP username
        $mail->Password   = 'JNpetcare';  // SMTP password
        $mail->SMTPSecure = 'tls';         // Enable TLS encryption; 
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('jacknatpetcare@gmail.com', 'Jack & Nat pet care');
        $mail->addAddress($email_send, $name);     // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Thông tin liên hệ';
        $mail->Body    = $data;

        $mail->send();
        echo 'Message has been sent';
    }catch(Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    echo "<script>alert('Yêu cầu của QK đã được chúng tôi ghi nhận. Xin cảm ơn!!');";
    echo "location.href = 'index.php';</script>";
    }
?>