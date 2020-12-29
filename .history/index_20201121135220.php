
<?php
    if ($_POST['sub']):
        echo 1;
        $Bill = filter_var($_POST['Bill'], FILTER_SANITIZE_STRING);
        $Office = filter_var($_POST['Office'], FILTER_SANITIZE_STRING);
        $Registry = filter_var($_POST['Registry'], FILTER_SANITIZE_STRING);
        $Administrator = filter_var($_POST['Administrator'], FILTER_SANITIZE_STRING);
        $mobile = filter_var($_POST['mobile'], FILTER_SANITIZE_STRING);
        $Date = filter_var($_POST['Date'], FILTER_SANITIZE_STRING);
        $Company = filter_var($_POST['Company'], FILTER_SANITIZE_STRING);
        $price = filter_var($_POST['price'], FILTER_SANITIZE_STRING);
        $Includes = filter_var($_POST['Includes'], FILTER_SANITIZE_STRING);
        $checkbox = $_POST['Includes'];
        if (empty($Bill) || empty($Office) || empty($Registry) || empty($Administrator) || empty($mobile) || empty($Company) || empty($price) || empty($checkbox)) {
            $msg_suc = "  <div class='alert alert-success alert-dismissible'><strong>!</strong> من فضلك راجع بيانات النموذج.</div>";
        } else {

            $body = "
		<h1 style=' font-size: 50px; font-family: tahoma; color: #2cd9ee; text-align: left; text-transform: uppercase;  '>
		Contact Us
		</h1>
		<table style='background: #fafafa;font-family: tahoma;font-size: 12px;line-height: 51px;border: 1px ridge;padding: 0.5%;width: 100%;direction: rtl;text-align: center;/* box-shadow: -1px 4px #626262; */'>
		             <tr>
		<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>الاسم</td>
		<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$Bill </td>
		    </tr>             <tr>
		<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>الموبيل</td>
		<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$Office </td>
		    </tr>             <tr>
		<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>البريد الالكتروني</td>
		<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$Registry </td>
		    </tr>             <tr>
		<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>الخدمة</td>
		<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$Administrator</td>
		    </tr>
		    <tr>
		<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>التاريخ</td>
		<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$mobile </td>
		    </tr>
		        <tr>
		<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>الوقت</td>
		<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$Date </td>
		    </tr>
		        <tr>
		<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>الرسالة</td>
		<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$Company </td>
		    </tr>

		    <tr>
		    <td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>الرسالة</td>
		    <td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$price </td>
		        </tr>
		        <tr>
		        <td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>الرسالة</td>
		        <td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$Includes </td>
		            </tr>



		    </table>";
            $to = "mr.bean.mg22@gmail.com";
            $from = $name;
            $headers .= "Content-type: text/html\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
            $headers .= "From: successive.testing@gmail.com" . "\r\n" .
            "Reply-To: successive.testing@gmail.com" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();
            mail($to, "التواصل", $body, $headers);
            $msg_suc = "  <div class='alert alert-success alert-dismissible'><strong></strong>تم ارسال البريد الالتكروني</div>";
        }
    endif;
endif;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Authentication forms">
    <meta name="author" content="Arasari Studio">
    <title>villtydesign</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">
<link href="css/theme-02.css" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">
      <style>
@import    url('https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap');
@import    url('https://fonts.googleapis.com/css2?family=Tajawal:wght@300;500&display=swap');
body,h1,h2,h3,h4,h5,h6,p,a,input,span,label{   font-family: 'Tajawal', sans-serif !important;
}
</style>
</head>
<body>
    <div class="forny-container">
<div class="forny-inner">
    <div class="mb-6 text-center forny-logo">
        <img src="img/logo.png" style="width:120px;">
    </div>
    <div class="forny-form">
        <div class="text-center">
            <h4>عرض سعر</h4>
        </div>
        <form action="index.php" method="POST">
    <div class="form-group">
        <div class="input-group">
    <input required  class="form-control" name="Bill" type="text"
    placeholder="رقم الفاتورة">
        </div>
    </div>
    <div class="form-group password-field">
        <div class="input-group">
    <input required  class="form-control" name="Office" type="text"
    placeholder=" اسم المكتب/الشركة">
        </div>
    </div>
<div class="form-group password-field">
        <div class="input-group">
    <input required  class="form-control" name="Registry" type="text"
    placeholder=" رقم السجل التجاري">
        </div>
    </div>
<div class="form-group password-field">
        <div class="input-group">
    <input required  class="form-control" name="Administrator" type="text"
    placeholder=" اسم المسؤول">
        </div>
    </div>
<div class="form-group password-field">
        <div class="input-group">
    <input required  class="form-control" name="mobile" type="number"
    placeholder=" الجوال">
        </div>
    </div>
<div class="form-group password-field">
        <div class="input-group">
    <input required  class="form-control" name="Date" type="date"
    placeholder=" التاريخ">
        </div>
    </div>
	<div class="form-group password-field">
        <div class="input-group">
    <input required  class="form-control" name="Company" type="text"
    placeholder=" مدينة مقر المكتب/الشركة">
        </div>
    </div>
	<div class="form-group password-field">
        <div class="input-group">
    <input required  class="form-control" name="price" type="number"
    placeholder=" عرض السعر">
        </div>
    </div>
	         <label style="text-align:right;float:right;">السعر يشتمل على الأعمال التالية</label>
    </br>
    </br>
 <textarea style="width:100%;background:#fafafa;height:100px;" name="Includes"></textarea>
            <div class="row mt-6 mb-6">
                <div class="col-12 d-flex align-items-center">
    <div class="custom-control custom-checkbox">
        <input type="checkbox" name="checkbox" value="checkbox" class="custom-control-input" id="cb1">
        <label class="custom-control-label" for="cb1">أقر بأن جميع البيانات صحيحة
        </label>
    </div>
                </div>
            </div>
            <div>
                <button type="submit" name="sub" class="btn btn-primary btn-block">أرسال</button>
            </div>
            <?php
             if(isset($msg_suc)){
                 echo $msg_suc;
             }
            ?>
            <div class="text-center">
			</br>
<img src="img/ImageNoCr.png" />
            </div>
            <div class="text-center mt-10">
                <a href="https://maroof.sa/165110">صفحة منصة فيلتي للتصميم في موقع معروف التابع لوزارة التجارة
</a>
            </div>
        </form>
    </div>
</div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/demo.js"></script>
</body>
</html>