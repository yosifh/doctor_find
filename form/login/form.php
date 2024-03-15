<?php
session_start();

// Check if user is logged in, if not, redirect them back to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
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
			<!-- /Header -->
			

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="appointment-form">
            <label for="name">الاسم الكامل</label>
            <input type="text" id="name" name="name">

            <label for="phone">رقم هاتف الحجز</label>
            <input type="text" id="phone" name="phone">

            <label for="location">موقع العيادة</label>
            <input type="text" id="location" name="location">

            <label for="discription">وصف الدكتور</label>
            <input type="text" id="discription" name="discription">

            <label for="nots">الملاحظات</label>
            <input type="text" id="nots" name="nots">

            <label for="city">المدينة</label>
            <select id="city" name="city">
                <option value="16">كربلاء</option>
                <option value="1"> بغداد</option>
                <option value=" 2"> البصرة</option>
                <option value="3"> نينوى</option>
                <option value="4">اربيل </option>
                <option value="5">النجف </option>
                <option value="6"> ذي قار</option>
                <option value="7">كركوك </option>
                <option value="8"> الانبار </option>
                <option value="9"> صلاح الدين</option>
                <option value="10"> السليمانية</option>
                <option value="11 "> ديالى </option>
                <option value="12"> واسط</option>
                <option value="13">ميسان </option>
                <option value="14">المثنى </option>
                <option value="15"> بابل</option>
                <option value="17"> دهوك</option>
                <option value="18">القادسية </option>
            </select>

            <label for="spec">التخصص</label>
            <select id="spec" name="spec">
                <option value="1">جملة عصبية</option>
                <option value="2">اشعة وسونار </option>
                <option value="3"> عيون</option>
                <option value="4"> نسائية وتوليد</option>
                <option value="5">جلدية وتجميل </option>
                <option value="6"> اسنان</option>
                <option value="7">اورام </option>
                <option value="8">الطب الرياضي </option>
                <option value="9">المفاصل والروماتيزم </option>
                <option value="10">جراحة العضام والمفاصل والكسور </option>
                <option value="11">بولية وكلية </option>
                <option value="12">انف واذن وحنجرة </option>
                <option value="13"> جراحة القلب</option>
                <option value="14"> تخدير وعناية مركزة</option>
                <option value="15">امراض الدم </option>
                <option value="16">نفسية </option>
                <option value="17"> جراحة اطفال</option>
                <option value="18">اطباء اطفال </option>
                <option value="19"> جراحة العمود الفقري</option>
                <option value="20">باطنية </option>
                <option value="21">دماغ واعصاب </option>
                <option value="22">العقم واطفال الانابيب </option>
                <option value="23">التجميل والجراحة التجميلية </option>
                <option value="24">جراحة عامة وناضورية وجهاز هضمي </option>
                <option value="25"> صدرية وتنفسية</option>
                <option value="26">قلبية </option>
                <option value="27">وجه وفكين </option>
                <option value="28">علاج طبيعي وتأهيل طبي </option>
            </select>

            <input type="submit" value="حفظ">
        </form>
        <style>
            .appointment-form {
                max-width: 400px;
                margin: 0 auto;
                font-family: Arial, sans-serif;

                label {
                    display: block;
                    margin-bottom: 5px;
                }

                input[type="text"],
                select {
                    width: 100%;
                    padding: 8px;
                    margin-bottom: 10px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    box-sizing: border-box;
                }

                select {
                    appearance: none;
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="12" height="6"><polygon points="0,0 12,0 6,6"/></svg>');
                    background-repeat: no-repeat;
                    background-position: right 10px center;
                    background-size: 8px 5px;
                    cursor: pointer;
                }

                input[type="submit"] {
                    background-color: #4CAF50;
                    color: white;
                    padding: 10px 20px;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    font-size: 16px;
                }

                input[type="submit"]:hover {
                    background-color: #45a049;
                }
            }
        </style>
         
			</div>		
			<!-- /Page Content -->
   
			<!-- Footer -->
		
			

			
			<!-- Page Content -->
		
			<!-- Footer -->
		
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