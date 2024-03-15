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

			
			<!-- Page Content -->
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
		
			