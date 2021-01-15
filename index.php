
<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'autoload.php';
$mail = new PHPMailer(true);
error_reporting(0); // Turn off all error reporting

if ($_POST['sub']):
    //   print_r($_POST);
    $a1 = filter_var($_POST['a1'], FILTER_SANITIZE_STRING);
    $a2 = filter_var($_POST['a2'], FILTER_SANITIZE_NUMBER_INT);
    $a3 = filter_var($_POST['a3'], FILTER_SANITIZE_EMAIL);
    $a4 = filter_var($_POST['a4'], FILTER_SANITIZE_STRING);
    if (empty($a1) || empty($a2) || empty($a3) || empty($a4)) {
        $msg_suc = "  <div class='alert alert-success alert-dismissible'><strong>!</strong> من فضلك راجع بيانات النموذج.</div>";
    } else {
        try {
            $body = "
											<h1 style=' font-size: 50px; font-family: tahoma; color: #2cd9ee; text-align: left; text-transform: uppercase;  '>
			السيرة الذاتية
											</h1>
											<table style='background: #fafafa;font-family: tahoma;font-size: 12px;line-height: 51px;border: 1px ridge;padding: 0.5%;width: 100%;direction: rtl;text-align: center;/* box-shadow: -1px 4px #626262; */'>
											             <tr>
											<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '> الاسم</td>
											<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$a1 </td>
											    </tr>             <tr>
											<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '> رقم الجوال
				                            </td>
											<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$a2 </td>
											    </tr>             <tr>
											<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>البريد الالكتروني
				                            </td>
											<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$a3 </td>
											    </tr>             <tr>
											<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '> المجال</td>
											<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$a4</td>
											    </tr>
											    </table>";
            $to = "mr.bean.mg22@gmail.com";
            $mail->SMTPDebug = 1;
            $mail->isSMTP();
            $mail->Host = 'mail.smarttechksa.net';
            $mail->SMTPAuth = true;
            $mail->Username = 'applyjob@smarttechksa.net';
            $mail->Password = '441988';
            $mail->Port = 465;
            $mail->SMTPSecure = 'ssl';
            $mail->CharSet = 'UTF-8';
            $mail->setFrom('applyjob@smarttechksa.net', 'applyjob@smarttechksa.net');
            $mail->addAddress($to);
            $mail->isHTML(true);
            $mail->Subject = "السيرة الذاتية";
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
        <a href="https://alriyadah-tr.com/">
        <img src="https://alriyadah-tr.com/uploads/0000/1/2021/01/08/untitled-1.png" style="width:120px;">
        </a>
    </div>
    <div class="forny-form">
        <div class="text-center" style="
    display: none;
">
            <h4>تقديم طلب</h4>
        </div>
        <form action="index.php" method="POST">
    <div class="form-group">
        <div class="input-group">
    <input   class="form-control" name="a1" type="text"
    placeholder="اسم الشركه">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
    <input   class="form-control" name="a1" type="text"
    placeholder="اسم العميل">
        </div>
    </div>

    <div class="form-group">
        <div class="input-group">
    <input   class="form-control" name="a1" type="email"
    placeholder="الايميل ">
        </div>
    </div>


    <div class="form-group">
        <div class="input-group">
    <input   class="form-control" name="a1" type="number"
    placeholder=" رقم التليفون">
        </div>
    </div>

    <div class="form-group password-field">
        <div class="input-group">
    <input required  class="form-control" name="a2" type="text"
    placeholder="البلد">
        </div>
    </div>

    <div class="form-group password-field">
        <div class="input-group">
<textarea name="" class="form-control" required placeholder="المطلوب">
</textarea>
        </div>
    </div>
    </div>
    </br>
    </br>

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
            <div class="text-center mt-10" style="
    display: none;
">
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