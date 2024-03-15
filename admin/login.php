

<?php
$username = $_POST['username']?? '';
$password = $_POST['password']?? '';
$connection = mysqli_connect("localhost", "root", "", "app");
if ($connection->connect_error) {
  die("فشل الاتصال: " . $connection->connect_error);
}
$query = "SELECT * FROM user WHERE username = '$username' AND pas = '$password'";
$result = mysqli_query($connection, $query);
if ($result->num_rows > 0) {
  session_start();
  $_SESSION['loggedin'] = true;
  header("Location:form/add-docors.php");
  exit;
} else {
  echo "";
}
mysqli_close($connection);
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Doccure - تسجيل الدخول</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="assets/img/logo-white.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Login</h1>
								<p class="account-subtitle">الوصول الى لوحة التحكم</p>
								
								<!-- Form -->
							
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
									<div class="form-group">
                  <input class="form-control" type="text" name="username" placeholder="اسم المستخدم">
									</div>
									<div class="form-group">
                  <input class="form-control" type="password" name="password" placeholder="كلمة المرور">
										
									</div>
									<div class="form-group">
                  <input  class="btn btn-primary btn-block" type="submit" value="تسجيل الدخول">
                </div>
								</form>
								<!-- /Form -->
								
								<div class="text-center forgotpass"><a href="#">نسيت كلمة السر</a></div>
								<!-- Social Login -->
								
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
</html>