<!DOCTYPE html>
<html lang="en">

<!-- doccure/  30 Nov 2019 04:11:34 GMT -->

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Doccure</title>

	<!-- Favicons -->
	<link type="image/x-icon" href="assets/img/favicon.png" rel="icon">

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

	<!-- Main Wrapper -->
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
								<li><a href="#">معرفة مرضي </a></li>
							</ul>
						</li>
						<li>
							<a href="admin/form/add-docors.php" target="_blank">المسؤول</a>
						</li>

					</ul>
				</div>

			</nav>
		</header>
		<!-- /Header -->

		<!-- Home Banner -->
		<section class="section section-search">
			<div class="container-fluid">
				<div class="banner-wrapper">
					<div class="banner-header text-center">
						<h1>أبحث عن طبيبك بواسطة أسمهٌ فقط</h1>
						<p>اكتشف أفضل الأطباء حسب الأختصاص و في المدينة الأقرب إليك.</p>
					</div>

					<!-- Search -->
					<div style="padding-left:110px;" class="search-box">
						<form action="with_slect_name.php" method="post">
							<div  class="form-group search-info">
							

								<input  name="name" type="text" class="form-control" placeholder="أبحث عن أسم طبيبك بكٌل سهولة و سلاسة">

							</div>
							<button type="submit" value="حفض" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>أبحث</span></button>
						</form>
					</div>
					<!-- /Search -->

				</div>
			</div>
		</section>

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

									<li><a href="#"><i class="fas fa-angle-double-right"></i> تواصل مع المطور </a></li>
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
										<p> مركز دوامة التكنولوجيا<br> العراق, كربلاء </p>
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

<!-- doccure/  30 Nov 2019 04:11:53 GMT -->

</html>


<?php


$host = "localhost";
$database = "app";
$username = "root";
$password = "";


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT full_name,location,discription,nots,cityes.city_name,spec.name ,phone FROM doctors
JOIN cityes on(doctors.city_id=cityes.id) 
JOIN spec on (doctors.spec_id=spec.id)";


$result = $conn->query($sql);


if ($result->num_rows > 0) {

	while ($row = $result->fetch_assoc()) {


		$full_name = $row['full_name'];
		$location = $row['location'];
		$discription = $row['discription'];
		$nots = $row['nots'];
		$city_id = $row['city_name'];
		$spec_id = $row['name'];
		$phone = $row['phone'];
	}
} else {
	echo "لايوجد أطباء بهذا الاختصاص";}
?>
































<!-- Footer -->