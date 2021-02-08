
<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'autoload.php';
$mail = new PHPMailer(true);
error_reporting(0); // Turn off all error reporting

if ($_POST['sub']):
    //   print_r($_POST);
    $a1 = filter_var($_POST['a1'], FILTER_SANITIZE_STRING);
    $a2 = filter_var($_POST['a2'], FILTER_SANITIZE_STRING);
    $a3 = filter_var($_POST['a3'], FILTER_SANITIZE_STRING);
    $a4 = filter_var($_POST['a4'], FILTER_SANITIZE_NUMBER_INT);
    $a5 = filter_var($_POST['a5'], FILTER_SANITIZE_STRING);
    $a6 = filter_var($_POST['a6'], FILTER_SANITIZE_STRING);
    $a6 = filter_var($_POST['a7'], FILTER_SANITIZE_STRING);

    if (empty($a1) || empty($a2) || empty($a3) || empty($a4)) {
        $msg_suc = "  <div class='alert alert-success alert-dismissible'><strong>!</strong> من فضلك راجع بيانات النموذج.</div>";
    } else {
        try {
            $body = "
													<h1 style=' font-size: 50px; font-family: tahoma; color: #2cd9ee; text-align: left; text-transform: uppercase;  '>
				استمارة حجز مجانية

													</h1>
													<table style='background: #fafafa;font-family: tahoma;font-size: 12px;line-height: 51px;border: 1px ridge;padding: 0.5%;width: 100%;direction: rtl;text-align: center;/* box-shadow: -1px 4px #626262; */'>
													             <tr>
													<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '> اسم العميل</td>
													<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$a1 </td>
													    </tr>             <tr>
													<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '> رقم العضوية
						                            </td>
													<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$a2 </td>
													    </tr>             <tr>
													<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '>رقم الوحدة
						                            </td>
													<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$a3 </td>
													    </tr>

	                                                    <tr>
													<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '> المساحة</td>
													<td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$a4</td>
													    </tr>
	                                                    <tr>
	                                                    <td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '> طريقة الدفع</td>
	                                                    <td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$a5</td>
	                                                        </tr>
	                                                        <tr>
	                                                        <td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '> التقسيط</td>
	                                                        <td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$a6</td>
	                                                            </tr>
	                                                            <tr>
	                                                            <td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; font-family: tahoma; '> الميعاد المطلوب لاتمام التعاقد</td>
	                                                            <td style=' border: 1px solid #ffffff;  font-family: tahoma;'>$a7</td>
	                                                                </tr>
													    </table>";
            $to = "mr.bean.mg22@gmail.com";
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'eag.boxsecured.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'form@booking.alrayadaonline.com';
            $mail->Password = '441988';
            $mail->Port = 465;
            $mail->SMTPSecure = 'ssl';
            $mail->CharSet = 'UTF-8';
            $mail->setFrom('form@booking.alrayadaonline.com', 'form@booking.alrayadaonline.com');
            $mail->addAddress($to);
            $mail->isHTML(true);
            $mail->Subject = "استمارة حجز مجانية";
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
    <title>alrayadaonline</title>
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
        <div class="text-center" >
            <h4>استمارة حجز مجانية </h4>
        </div>
        <form action="index.php" method="POST">
    <div class="form-group">
        <div class="input-group">
    <input   class="form-control" name="a1" type="text"
    placeholder="اسم العميل">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
    <input   class="form-control" name="a2" type="text"
    placeholder="رقم العضوية">
        </div>
    </div>

    <div class="form-group">
        <div class="input-group">
    <input   class="form-control" name="a3" type="email"
    placeholder="رقم الوحدة  ">
        </div>
    </div>


    <div class="form-group">
        <div class="input-group">
    <input   class="form-control" name="a4" type="number"
    placeholder=" المساحة">
        </div>
    </div>




    <div class="form-group password-field">
        <div class="input-group">
        <label>طريقة الدفع</label>
        <select class="form-control" id="sel1" name="a5">
        <option>كاش </option>
        <option>تقسيط </option>
      </select>
        </div>
    </div>

    <div class="form-group password-field">
        <div class="input-group">
        <label>التقسيط</label>
        <select class="form-control" id="sel1" name="a6">
        <option>المقدم المتاح </option>
        <option>عدد سنوات التقسيط  </option>
      </select>
        </div>
    </div>



    <div class="form-group password-field">
        <div class="input-group">
    <input required  class="form-control" name="a7" type="text"
    placeholder="الميعاد المطلوب لاتمام التعاقد">
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