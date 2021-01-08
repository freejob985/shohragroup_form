
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'autoload.php';
$mail = new PHPMailer(true);
error_reporting(0); // Turn off all error reporting



if ($_POST['sub']):
    //   print_r($_POST);
    $Bill = filter_var($_POST['Bill'], FILTER_SANITIZE_STRING);
    $Office = filter_var($_POST['Office'], FILTER_SANITIZE_STRING);
    $Registry = filter_var($_POST['Registry'], FILTER_SANITIZE_STRING);
    $Administrator = filter_var($_POST['Administrator'], FILTER_SANITIZE_STRING);
    $mobile = filter_var($_POST['mobile'], FILTER_SANITIZE_STRING);
    $Date = filter_var($_POST['Date'], FILTER_SANITIZE_STRING);
    $Company = filter_var($_POST['Company'], FILTER_SANITIZE_STRING);
    $price = filter_var($_POST['price'], FILTER_SANITIZE_STRING);
    $Includes = filter_var($_POST['Includes'], FILTER_SANITIZE_STRING);
    $checkbox = $_POST['checkbox'];
    if ( empty($Office) || empty($Registry) || empty($Administrator) || empty($mobile) || empty($Company) || empty($price) || empty($checkbox)) {
        $msg_suc = "  <div class='alert alert-success alert-dismissible'><strong>!</strong> من فضلك راجع بيانات النموذج.</div>";
    } else {
try {
        $body = "
			<h1 style=' font-size: 50px; font-family: tahoma; color: #2cd9ee; text-align: left; text-transform: uppercase;  '>
			عرض سعر 
			</h1>
			<table style='background: #fafafa;font-family: tahoma;font-size: 12px;line-height: 51px;border: 1px ridge;padding: 0.5%;width: 100%;direction: rtl;text-align: center;/* box-shadow: -1px 4px #626262; */'>
			             <tr>
			<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>رقم الفاتورة</td>
			<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$Bill </td>
			    </tr>             <tr>
			<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>اسم المكتب/الشركة</td>
			<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$Office </td>
			    </tr>             <tr>
			<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>رقم السجل التجاري</td>
			<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$Registry </td>
			    </tr>             <tr>
			<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>اسم المسؤول</td>
			<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$Administrator</td>
			    </tr>
			    <tr>
			<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>الجوال</td>
			<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$mobile </td>
			    </tr>
			        <tr>
			<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>التاريخ</td>
			<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$Date </td>
			    </tr>
			        <tr>
			<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '> مدينة مقر المكتب/الشركة</td>
			<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$Company </td>
			    </tr>

			    <tr>
			    <td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>عرض السعر</td>
			    <td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$price </td>
			        </tr>
			        <tr>
			        <td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>السعر يشتمل على الأعمال التالية</td>
			        <td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$Includes </td>
			            </tr>



			    </table>";
       $to = "villtydesign@villtydesign.com";
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'eag.boxsecured.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'pricerequest@villtydesign.com';
    $mail->Password = 'pricerequest';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';

    $mail->CharSet = 'UTF-8';
    $mail->setFrom('pricerequest@villtydesign.com', 'pricerequest@villtydesign.com');
    $mail->addAddress($to);
    $mail->isHTML(true);
    $mail->Subject = "عرض سعر";
    $mail->Body = $body;
    $mail->send();
       
        $msg_suc = "  <div class='alert alert-success alert-dismissible'><strong></strong>تم ارسال البريد الالتكروني</div>";
    
    } catch (Exception $exc) {
    echo $exc->getMessage();
}
    }
    
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


.alert-success {
    color: #ffffff;
    background-color: #0f521f;
    border-color: #c3e6cb;
    font-size: 17px;
    font-family: 'Tajawal';
    text-align: center;
}
</style>
</head>
<body>
    <div class="forny-container">
<div class="forny-inner">
    <div class="mb-6 text-center forny-logo">
        <a href="https://smarttechksa.net/">
        <img src="https://smarttechksa.net/assets/front/img/5ff3680f67c52.png" style="width:120px;">
        </a>
    </div>
    <div class="forny-form">
        <div class="text-center">
            <h4>عرض سعر</h4>
        </div>
        <form action="index.php" method="POST">
    <div class="form-group">
        <div class="input-group">
    <input   class="form-control" name="Bill" type="text"
    placeholder="الاسم">
        </div>
    </div>
    <div class="form-group password-field">
        <div class="input-group">
    <input required  class="form-control" name="Office" type="number"
    placeholder="رقم الجوال">
        </div>
    </div>



<div class="form-group password-field">
        <div class="input-group">
    <input required  class="form-control" name="e" type="email"
    placeholder=" البريد الالكتروني">
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
                <button type="submit" name="sub" class="btn btn-primary btn-block" value="submit">أرسال</button>
            </div>
            <?php
if (isset($msg_suc)) {
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