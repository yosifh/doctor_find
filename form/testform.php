<?php
session_start();

// Check if user is logged in, if not, redirect them back to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: admin\login.php");
    exit;
}

// If form is submitted, handle the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your form handling logic here
    $name = $_POST["name"] ?? '';
    $phone = $_POST["phone"] ?? '';
    $city = $_POST["city"] ?? '';
    $location = $_POST["location"] ?? '';
    $discription = $_POST["discription"] ?? '';
    $nots = $_POST["nots"] ?? '';
    $spec = $_POST["spec"] ?? '';

    // Your database insertion logic here
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "app";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
    }

    $sql = "INSERT INTO  doctors (full_name, phone, city_id, location, discription, nots, spec_id) VALUES ('$name','$phone','$city','$location', '$discription','$nots', '$spec')";

    if ($conn->query($sql) === TRUE) {
        echo "تمت إضافة البيانات بنجاح";
    } else {
        echo "خطأ: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Doccure</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body>

  <div class="main-wrapper">

    <!-- Header -->
    <header class="header">
      <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
          <a id="mobile_btn" href="javascript:void(0);">
            <span class="bar-icon">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </a>
          <a href="index.php" class="navbar-brand logo">
            <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
          </a>
        </div>
        <div class="main-menu-wrapper">
          <div class="menu-header">
            <a href="index.php" class="menu-logo">
              <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
            </a>
            <a id="menu_close" class="menu-close" href="javascript:void(0);">
              <i class="fas fa-times"></i>
            </a>
          </div>
          <ul class="main-nav">
            <li>
              <a href="index.php">الصفحة الرئيسية</a>
            </li>
            <li class="has-submenu">
              <a href="#">الأطباء <i class="fas fa-chevron-down"></i></a>
              <ul class="submenu">

                <li><a href="#"> تواصل مع المطور </a></li>


                <li><a href="#"> أضافة طبيب</a></li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">المريض <i class="fas fa-chevron-down"></i></a>
              <ul class="submenu">
                <li><a href="slectname.php"> البحث عن طريق الأسم</a></li>
                <li><a href="index.php"> البحث عن طريق المدينة و الأختصاص</a></li>
                <li><a href="slect.html">البحث عن طريق الاختصاص</a></li>

              </ul>
            </li>
            <li class="has-submenu active">
              <a href="#">أخرى <i class="fas fa-chevron-down"></i></a>
              <ul class="submenu">
              <li><a href="#">معرفة مرضي   </a></li>
              </ul>
            </li>
            <li>
              <a href="admin/form_in.php" target="_blank">المسؤول</a>
            </li>

          </ul>
        </div>

      </nav>
    </header>
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8 offset-md-2">
						
							<!-- Account Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Login Banner">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Doctor Register <a href="register.html">Not a Doctor?</a></h3>
										</div>
										
										<!-- Register Form -->
										<form action="https://dreamguys.co.in/demo/doccure/doctor-dashboard.html">
											<div class="form-group form-focus">
												<input type="text" class="form-control floating">
												<label class="focus-label">Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="text" class="form-control floating">
												<label class="focus-label">Mobile Number</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating">
												<label class="focus-label">Create Password</label>
											</div>
											<div class="text-right">
												<a class="forgot-link" href="login.html">Already have an account?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
											<div class="login-or">
												<span class="or-line"></span>
												<span class="span-or">or</span>
											</div>
											<div class="row form-row social-login">
												<div class="col-6">
													<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
												</div>
												<div class="col-6">
													<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
												</div>
											</div>
										</form>
										<!-- /Register Form -->
										
									</div>
								</div>
							</div>
							<!-- /Account Content -->
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   

            <footer class="footer">
				
				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-about">
									<div class="footer-logo">
										<img src="assets/img/footer-logo.png" alt="logo">
									</div>
									<div class="footer-about-content">
										<p>منصة شاملة للبحث عن الأطباء في جميع أنحاءالعراق . يوفر الموقع واجهة سهلة الاستخدام لتمكينك من العثور على الطبيب المناسب لاحتياجاتك بسهولة وسرعة. </p>
										<div class="social-icon">
											<ul>
												<li>
													<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">المريض </h2>
									<ul>
				
										<li><a href="slectname.php"><i class="fas fa-angle-double-right"></i> البحث عن طريق الأسم</a></li>
										<li><a href="index.php"><i class="fas fa-angle-double-right"></i> البحث عن طريق المدينة و الأختصاص</a></li>
										<li><a href="slect.html"><i class="fas fa-angle-double-right"></i> >البحث عن طريق الاختصاص</a></li>

									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">الطبيب </h2>
									<ul>
							
										<li><a href="#"><i class="fas fa-angle-double-right"></i>  تواصل مع المطور </a></li>
										<li><a href="#"><i class="fas fa-angle-double-right"></i> أضافة طبيب</a></li>

									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title"> التواصل معنا</h2>
									<div class="footer-contact-info">
										<div class="footer-address">
											<span><i class="fas fa-map-marker-alt"></i></span>
											<p> مركز دوامة التكنولوجيا<br> العراق,  كربلاء </p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
											+964 7735600797
										</p>
										<p class="mb-0">
											<i class="fas fa-envelope"></i>
											vot@gmail.com
										</p>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
						</div>
					</div>
				</div>
				<!-- /Footer Top -->
				
				<!-- Footer Bottom -->
                <div class="footer-bottom">
					<div class="container-fluid">
					
						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="copyright-text">
										<p class="mb-0"><a href="templateshub.net"> vortex-of-tech</a></p>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">
								
									<!-- Copyright Menu -->
									<div class="copyright-menu">
										<ul class="policy-menu">
											<li><a href="term-condition.html">الأحكام و الشروط</a></li>
											<li><a href="privacy-policy.html">السياسة</a></li>
										</ul>
									</div>
									<!-- /Copyright Menu -->
									
								</div>
							</div>
						</div>
						<!-- /Copyright -->
						
					</div>
				</div>
				<!-- /Footer Bottom -->
				
			</footer>
    <!-- /Footer -->

  </div>
  <!-- /Main Wrapper -->

  <!-- jQuery -->
  <script src="assets/js/jquery.min.js"></script>

  <!-- Bootstrap Core JS -->
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Slick JS -->
  <script src="assets/js/slick.js"></script>

  <!-- Custom JS -->
  <script src="assets/js/script.js"></script>
</body>

</html>