
<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'autoload.php';
$mail = new PHPMailer(true);
error_reporting(0); // Turn off all error reporting

if ($_POST['sub']):
    print_r($_POST);
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
            echo $mail->ErrorInfo;

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
         <div class="container">
            <div class="row">
               <div class="col-sm-12 mb-25">
                  <h2 class="title">
                     المعلومات الشخصيه
                  </h2>
               </div>
            </div>
            <form action="/ar/applyastrainer" class="form-horizontal" enctype="multipart/form-data" method="post" role="form" novalidate="novalidate">
               <input name="__RequestVerificationToken" type="hidden" value="PfxBs8jyHbAxRg-ZPGYSHEl5dvl2N373UbXmY5G9d3a4dfzmvfRx2EJhmnSsi2yOtBbG0bp93geKGxbFreU-pQ54QG50pqV6bnVlNYtpiqY1">
               <div class="validation-summary-valid alert alert-danger col-sm-offset-3 col-sm-6" data-valmsg-summary="true">
                  <ul>
                     <li style="display:none"></li>
                  </ul>
               </div>
               <div class="col-sm-12 mb-25">
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="col-sm-3 control-label"> اللقب <span class="text-danger">*</span> </label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="glyphicon glyphicon-user"></i>
                              </span>
                              <select class="form-control valid" id="Prefix" name="Prefix" aria-invalid="false">
                                 <option value="السيد">السيد</option>
                                 <option value="الدكتور">الدكتور</option>
                                 <option value="السيدة">السيدة</option>
                                 <option value="الأنسة">الأنسة</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="col-sm-3 control-label">اسمك <span class="text-danger">*</span></label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="glyphicon glyphicon-user"></i>
                              </span>
                              <input class="form-control" data-val="true" data-val-required="تعبئة 'الاسم' مطلوب" id="Name" name="Name" placeholder="أكتب اسمك" type="text" value="">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="control-label col-sm-3">بريد الكتروني#1 <span class="text-danger">*</span></label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="glyphicon glyphicon-envelope"></i>
                              </span>
                              <input class="form-control" data-val="true" data-val-email="الرجاء إدخال بريد إلكتروني صحيح." data-val-required="تعبئة 'بريد الكتروني#1' مطلوب" id="Email" name="Email" type="text" value="">
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="col-sm-3 control-label" for="Email2">بريد الكتروني#2</label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="glyphicon glyphicon-envelope"></i>
                              </span>
                              <input class="form-control" data-val="true" data-val-email="الرجاء إدخال بريد إلكتروني صحيح." id="Email2" name="Email2" type="text" value="">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="control-label col-sm-3">جوال#1 <span class="text-danger">*</span></label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="glyphicon glyphicon-phone"></i>
                              </span>
                              <input class="form-control" data-val="true" data-val-regex="يرجى إدخال رقم الجوال صحيح." data-val-regex-pattern="([0-9]*)" data-val-required="تعبئة 'جوال#1' مطلوب" id="Mobile" name="Mobile" type="text" value="">
                           </div>
                           <div class="col-sm-offset-3 col-sm-9 mt-5">
                              <input class="check-box" data-val="true" data-val-required="The HasWhatsApp field is required." id="HasWhatsApp" name="HasWhatsApp" type="checkbox" value="true"><input name="HasWhatsApp" type="hidden" value="false"> الرقم أعلاه متصلة ال WhatsApp
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="col-sm-3 control-label" for="Mobile2">جوال#2</label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="glyphicon glyphicon-phone"></i>
                              </span>
                              <input class="form-control" data-val="true" data-val-regex="يرجى إدخال رقم الجوال صحيح." data-val-regex-pattern="([0-9]*)" id="Mobile2" name="Mobile2" type="text" value="">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="control-label col-sm-3">رقم الهاتف</label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="glyphicon glyphicon-earphone"></i>
                              </span>
                              <input class="form-control" data-val="true" data-val-regex="يرجى إدخال هاتف صحيح." data-val-regex-pattern="([0-9]*)" id="Phone" name="Phone" type="text" value="">
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="col-sm-3 control-label" for="SecondaryPhone">رقم الهاتف الثاني</label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="glyphicon glyphicon-earphone"></i>
                              </span>
                              <input class="form-control" data-val="true" data-val-regex="يرجى إدخال هاتف صحيح." data-val-regex-pattern="([0-9]*)" id="SecondaryPhone" name="SecondaryPhone" type="text" value="">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="control-label col-sm-3">دولة الاقامة <span class="red">*</span></label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="glyphicon glyphicon-globe"></i>
                              </span>
                              <select class="form-control" id="TrainerCountry" name="TrainerCountry">
                                 <option value="">اختر الدولة</option>
                                 <option value="1">السعودية</option>
                                 <option value="2">البحرين</option>
                                 <option value="7">الأردن</option>
                                 <option value="8">فلسطين</option>
                                 <option value="4">مصر</option>
                                 <option value="10">السودان</option>
                                 <option value="6">سوريا</option>
                                 <option value="5">تركيا</option>
                                 <option value="11">الامارات</option>
                                 <option value="12">عُمان</option>
                                 <option value="13">الكويت</option>
                                 <option value="14">قطر</option>
                                 <option value="16">المملكة المتحدة</option>
                                 <option value="15">الاتحاد الاوروبي</option>
                                 <option value="17">أفغانستان</option>
                                 <option value="18">ألبانيا</option>
                                 <option value="19">الجزائر</option>
                                 <option value="20">أندورا</option>
                                 <option value="21">أنغولا</option>
                                 <option value="22">أنتيغوا وبربودا</option>
                                 <option value="23">الأرجنتين</option>
                                 <option value="24">أرمينيا</option>
                                 <option value="25">أستراليا</option>
                                 <option value="26">النمسا</option>
                                 <option value="27">أذربيجان</option>
                                 <option value="28">الباهاما</option>
                                 <option value="29">بنغلاديش</option>
                                 <option value="30">بربادوس</option>
                                 <option value="31">روسيا البيضاء</option>
                                 <option value="32">بلجيكا</option>
                                 <option value="33">بليز</option>
                                 <option value="34">بنين</option>
                                 <option value="35">بوتان</option>
                                 <option value="36">بوليفيا</option>
                                 <option value="37">البوسنة والهرسك</option>
                                 <option value="38">بوتسوانا</option>
                                 <option value="39">البرازيل</option>
                                 <option value="40">بروناي دار السلام</option>
                                 <option value="41">بلغاريا</option>
                                 <option value="42">بوركينا فاسو</option>
                                 <option value="43">بوروندي</option>
                                 <option value="44">كابو فيردي</option>
                                 <option value="45">كمبوديا</option>
                                 <option value="46">الكاميرون</option>
                                 <option value="47">كندا</option>
                                 <option value="48">جمهورية افريقيا الوسطى</option>
                                 <option value="49">تشاد</option>
                                 <option value="50">تشيلي</option>
                                 <option value="51">الصين</option>
                                 <option value="52">كولومبيا</option>
                                 <option value="53">جزر القمر</option>
                                 <option value="54">الكونغو</option>
                                 <option value="55">كوستا ريكا</option>
                                 <option value="56">كوت ديفوار</option>
                                 <option value="57">كرواتيا</option>
                                 <option value="58">كوبا</option>
                                 <option value="59">قبرص</option>
                                 <option value="60">جمهورية التشيك</option>
                                 <option value="61">جمهورية كوريا الديمقراطية الشعبية (كوريا الشمالية)</option>
                                 <option value="62">الجمهورية الديمقراطية للكونغ</option>
                                 <option value="63">الدنمارك</option>
                                 <option value="64">جيبوتي</option>
                                 <option value="3">آخر</option>
                                 <option value="65">دومينيكا</option>
                                 <option value="66">جمهورية الدومنيكان</option>
                                 <option value="67">الإكوادور</option>
                                 <option value="68">السلفادور</option>
                                 <option value="69">غينيا الإستوائية</option>
                                 <option value="70">إريتريا</option>
                                 <option value="71">استونيا</option>
                                 <option value="72">أثيوبيا</option>
                                 <option value="73">فيجي</option>
                                 <option value="74">فنلندا</option>
                                 <option value="75">فرنسا</option>
                                 <option value="76">الغابون</option>
                                 <option value="77">غامبيا</option>
                                 <option value="78">جورجيا</option>
                                 <option value="79">ألمانيا</option>
                                 <option value="80">غانا</option>
                                 <option value="81">اليونان</option>
                                 <option value="82">غرينادا</option>
                                 <option value="83">غواتيمالا</option>
                                 <option value="84">غينيا</option>
                                 <option value="85">غينيا بيساو</option>
                                 <option value="86">غيانا</option>
                                 <option value="87">هايتي</option>
                                 <option value="88">هندوراس</option>
                                 <option value="89">هنغاريا</option>
                                 <option value="90">أيسلندا</option>
                                 <option value="91">الهند</option>
                                 <option value="92">أندونيسيا</option>
                                 <option value="93">إيران</option>
                                 <option value="94">العراق</option>
                                 <option value="95">أيرلندا</option>
                                 <option value="96">إيطاليا</option>
                                 <option value="97">جامايكا</option>
                                 <option value="98">اليابان</option>
                                 <option value="99">كازاخستان</option>
                                 <option value="100">كينيا</option>
                                 <option value="101">كيريباس</option>
                                 <option value="102">قرغيزستان</option>
                                 <option value="103">جمهورية لاو الديمقراطية الشعبية (لاوس)</option>
                                 <option value="104">لاتفيا</option>
                                 <option value="105">لبنان</option>
                                 <option value="106">ليسوتو</option>
                                 <option value="107">ليبيريا</option>
                                 <option value="108">ليبيا</option>
                                 <option value="109">ليختنشتاين</option>
                                 <option value="110">ليتوانيا</option>
                                 <option value="111">لوكسمبورغ</option>
                                 <option value="112">مقدونيا</option>
                                 <option value="113">مدغشقر</option>
                                 <option value="114">ملاوي</option>
                                 <option value="115">ماليزيا</option>
                                 <option value="116">جزر المالديف</option>
                                 <option value="117">مالي</option>
                                 <option value="118">مالطا</option>
                                 <option value="119">جزر مارشال</option>
                                 <option value="120">موريتانيا</option>
                                 <option value="121">موريشيوس</option>
                                 <option value="122">المكسيك</option>
                                 <option value="123">ميكرونيزيا (ولايات)</option>
                                 <option value="124">موناكو</option>
                                 <option value="125">منغوليا</option>
                                 <option value="126">الجبل الأسود</option>
                                 <option value="127">المغرب</option>
                                 <option value="128">موزمبيق</option>
                                 <option value="129">ميانمار</option>
                                 <option value="130">ناميبيا</option>
                                 <option value="131">ناورو</option>
                                 <option value="132">نيبال</option>
                                 <option value="133">هولندا</option>
                                 <option value="134">نيوزيلاندا</option>
                                 <option value="135">نيكاراغوا</option>
                                 <option value="136">النيجر</option>
                                 <option value="137">نيجيريا</option>
                                 <option value="138">النرويج</option>
                                 <option value="139">باكستان</option>
                                 <option value="140">بالاو</option>
                                 <option value="142">بناما</option>
                                 <option value="143">بابوا غينيا الجديدة</option>
                                 <option value="144">باراغواي</option>
                                 <option value="145">بيرو</option>
                                 <option value="146">الفلبين</option>
                                 <option value="147">بولندا</option>
                                 <option value="148">البرتغال</option>
                                 <option value="141">فلسطين</option>
                                 <option value="149">جمهورية كوريا (كوريا الجنوبية)</option>
                                 <option value="150">جمهورية مولدوفا</option>
                                 <option value="151">رومانيا</option>
                                 <option value="152">الفيدرالية الروسية</option>
                                 <option value="153">رواندا</option>
                                 <option value="154">سانت كيتس ونيفيس</option>
                                 <option value="155">سانت لوسيا</option>
                                 <option value="156">سانت فنسنت وجزر غرينادين</option>
                                 <option value="157">ساموا</option>
                                 <option value="158">سان مارينو</option>
                                 <option value="159">ساو تومي وبرينسيبي</option>
                                 <option value="160">السنغال</option>
                                 <option value="161">صربيا</option>
                                 <option value="162">سيشيل</option>
                                 <option value="163">سيرا ليون</option>
                                 <option value="164">سنغافورة</option>
                                 <option value="165">سلوفاكيا</option>
                                 <option value="166">سلوفينيا</option>
                                 <option value="167">جزر سليمان</option>
                                 <option value="168">الصومال</option>
                                 <option value="169">جنوب أفريقيا</option>
                                 <option value="170">جنوب السودان</option>
                                 <option value="171">إسبانيا</option>
                                 <option value="172">سيريلانكا</option>
                                 <option value="173">سورينام</option>
                                 <option value="174">سوازيلاند</option>
                                 <option value="175">السويد</option>
                                 <option value="176">سويسرا</option>
                                 <option value="177">طاجيكستان</option>
                                 <option value="178">تايلاند</option>
                                 <option value="179">تيمور ليشتي</option>
                                 <option value="180">توغو</option>
                                 <option value="181">تونغا</option>
                                 <option value="182">ترينداد وتوباغو</option>
                                 <option value="183">تونس</option>
                                 <option value="184">تركمانستان</option>
                                 <option value="185">توفالو</option>
                                 <option value="186">أوغندا</option>
                                 <option value="187">أوكرانيا</option>
                                 <option value="188">جمهورية تنزانيا المتحدة</option>
                                 <option value="189">الولايات المتحدة</option>
                                 <option value="190">أوروغواي</option>
                                 <option value="191">أوزبكستان</option>
                                 <option value="192">فانواتو</option>
                                 <option value="193">فنزويلا</option>
                                 <option value="194">فيتنام</option>
                                 <option value="195">اليمن</option>
                                 <option value="196">زامبيا</option>
                                 <option value="197">زيمبابوي</option>
                              </select>
                           </div>
                        </div>
                        <div class="row">
                           <div class="ifrequired col-sm-9 col-sm-offset-3" style="margin-top: 2px;">
                              <div class="row">
                                 <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-globe"></i>
                                    </span>
                                    <input class="form-control" id="Country" name="Country" placeholder="أدخل اسم دولتك" type="text" value="">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <span class="help-block col-sm-offset-3">اختر البلد الذي تقيم فيه</span>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="control-label col-sm-3">مدينة الاقامة <span class="red">*</span></label>
                           <div class="input-group col-sm-9 ifrequiredcountry">
                              <span class="input-group-addon">
                              <i class="fa fa-building"></i>
                              </span>
                              <select class="form-control" id="TrainerCity" name="TrainerCity">
                                 <option value="">اختر المدينة</option>
                              </select>
                           </div>
                           <div class="ifrequired ifrequired2 col-sm-9" style="margin-top: 2px;">
                              <div class="row">
                                 <div class="input-group">
                                    <span class="input-group-addon">
                                    <i class="fa fa-building"></i>
                                    </span>
                                    <input class="form-control" id="City" name="City" placeholder="مدينة الاقامة" type="text" value="">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <span class="help-block col-sm-offset-3">اختر المدينة التي تسكن بها</span>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="control-label col-sm-3">الجنسية <span class="text-danger">*</span></label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="fa fa-flag"></i>
                              </span>
                              <select class="form-control" id="TrainerNationality" name="TrainerNationality">
                                 <option value=""></option>
                                 <option value="1">سعودي</option>
                                 <option value="2">بحريني</option>
                                 <option value="7">أردني</option>
                                 <option value="8">فلسطيني</option>
                                 <option value="4">مصري</option>
                                 <option value="10">سوداني</option>
                                 <option value="6">سوري</option>
                                 <option value="5">تركي</option>
                                 <option value="11">اماراتي</option>
                                 <option value="12">عًماني</option>
                                 <option value="13">كويتي</option>
                                 <option value="14">قطري</option>
                                 <option value="16">بريطاني</option>
                                 <option value="15">اروبي</option>
                                 <option value="17">أفغانستان</option>
                                 <option value="18">ألبانيا</option>
                                 <option value="19">الجزائر</option>
                                 <option value="20">أندورا</option>
                                 <option value="21">أنغولا</option>
                                 <option value="22">أنتيغوا وبربودا</option>
                                 <option value="23">الأرجنتين</option>
                                 <option value="24">أرمينيا</option>
                                 <option value="25">أستراليا</option>
                                 <option value="26">النمسا</option>
                                 <option value="27">أذربيجان</option>
                                 <option value="28">الباهاما</option>
                                 <option value="29">بنغلاديش</option>
                                 <option value="30">بربادوس</option>
                                 <option value="31">روسيا البيضاء</option>
                                 <option value="32">بلجيكا</option>
                                 <option value="33">بليز</option>
                                 <option value="34">بنين</option>
                                 <option value="35">بوتان</option>
                                 <option value="36">بوليفيا</option>
                                 <option value="37">البوسنة والهرسك</option>
                                 <option value="38">بوتسوانا</option>
                                 <option value="39">البرازيل</option>
                                 <option value="40">بروناي دار السلام</option>
                                 <option value="41">بلغاريا</option>
                                 <option value="42">بوركينا فاسو</option>
                                 <option value="43">بوروندي</option>
                                 <option value="44">كابو فيردي</option>
                                 <option value="45">كمبوديا</option>
                                 <option value="46">الكاميرون</option>
                                 <option value="47">كندا</option>
                                 <option value="48">جمهورية افريقيا الوسطى</option>
                                 <option value="49">تشاد</option>
                                 <option value="50">تشيلي</option>
                                 <option value="51">الصين</option>
                                 <option value="52">كولومبيا</option>
                                 <option value="53">جزر القمر</option>
                                 <option value="54">الكونغو</option>
                                 <option value="55">كوستا ريكا</option>
                                 <option value="56">كوت ديفوار</option>
                                 <option value="57">كرواتيا</option>
                                 <option value="58">كوبا</option>
                                 <option value="59">قبرص</option>
                                 <option value="60">جمهورية التشيك</option>
                                 <option value="61">جمهورية كوريا الديمقراطية الشعبية (كوريا الشمالية)</option>
                                 <option value="62">الجمهورية الديمقراطية للكونغ</option>
                                 <option value="63">الدنمارك</option>
                                 <option value="64">جيبوتي</option>
                                 <option value="3">آخر</option>
                                 <option value="65">دومينيكا</option>
                                 <option value="66">جمهورية الدومنيكان</option>
                                 <option value="67">الإكوادور</option>
                                 <option value="68">السلفادور</option>
                                 <option value="69">غينيا الإستوائية</option>
                                 <option value="70">إريتريا</option>
                                 <option value="71">استونيا</option>
                                 <option value="72">أثيوبيا</option>
                                 <option value="73">فيجي</option>
                                 <option value="74">فنلندا</option>
                                 <option value="75">فرنسا</option>
                                 <option value="76">الغابون</option>
                                 <option value="77">غامبيا</option>
                                 <option value="78">جورجيا</option>
                                 <option value="79">ألمانيا</option>
                                 <option value="80">غانا</option>
                                 <option value="81">اليونان</option>
                                 <option value="82">غرينادا</option>
                                 <option value="83">غواتيمالا</option>
                                 <option value="84">غينيا</option>
                                 <option value="85">غينيا بيساو</option>
                                 <option value="86">غيانا</option>
                                 <option value="87">هايتي</option>
                                 <option value="88">هندوراس</option>
                                 <option value="89">هنغاريا</option>
                                 <option value="90">أيسلندا</option>
                                 <option value="91">الهند</option>
                                 <option value="92">أندونيسيا</option>
                                 <option value="93">إيران</option>
                                 <option value="94">العراق</option>
                                 <option value="95">أيرلندا</option>
                                 <option value="96">إيطاليا</option>
                                 <option value="97">جامايكا</option>
                                 <option value="98">اليابان</option>
                                 <option value="99">كازاخستان</option>
                                 <option value="100">كينيا</option>
                                 <option value="101">كيريباس</option>
                                 <option value="102">قرغيزستان</option>
                                 <option value="103">جمهورية لاو الديمقراطية الشعبية (لاوس)</option>
                                 <option value="104">لاتفيا</option>
                                 <option value="105">لبنان</option>
                                 <option value="106">ليسوتو</option>
                                 <option value="107">ليبيريا</option>
                                 <option value="108">ليبيا</option>
                                 <option value="109">ليختنشتاين</option>
                                 <option value="110">ليتوانيا</option>
                                 <option value="111">لوكسمبورغ</option>
                                 <option value="112">مقدونيا</option>
                                 <option value="113">مدغشقر</option>
                                 <option value="114">ملاوي</option>
                                 <option value="115">ماليزيا</option>
                                 <option value="116">جزر المالديف</option>
                                 <option value="117">مالي</option>
                                 <option value="118">مالطا</option>
                                 <option value="119">جزر مارشال</option>
                                 <option value="120">موريتانيا</option>
                                 <option value="121">موريشيوس</option>
                                 <option value="122">المكسيك</option>
                                 <option value="123">ميكرونيزيا (ولايات)</option>
                                 <option value="124">موناكو</option>
                                 <option value="125">منغوليا</option>
                                 <option value="126">الجبل الأسود</option>
                                 <option value="127">المغرب</option>
                                 <option value="128">موزمبيق</option>
                                 <option value="129">ميانمار</option>
                                 <option value="130">ناميبيا</option>
                                 <option value="131">ناورو</option>
                                 <option value="132">نيبال</option>
                                 <option value="133">هولندا</option>
                                 <option value="134">نيوزيلاندا</option>
                                 <option value="135">نيكاراغوا</option>
                                 <option value="136">النيجر</option>
                                 <option value="137">نيجيريا</option>
                                 <option value="138">النرويج</option>
                                 <option value="139">باكستان</option>
                                 <option value="140">بالاو</option>
                                 <option value="142">بناما</option>
                                 <option value="143">بابوا غينيا الجديدة</option>
                                 <option value="144">باراغواي</option>
                                 <option value="145">بيرو</option>
                                 <option value="146">الفلبين</option>
                                 <option value="147">بولندا</option>
                                 <option value="148">البرتغال</option>
                                 <option value="141">فلسطين</option>
                                 <option value="149">جمهورية كوريا (كوريا الجنوبية)</option>
                                 <option value="150">جمهورية مولدوفا</option>
                                 <option value="151">رومانيا</option>
                                 <option value="152">الفيدرالية الروسية</option>
                                 <option value="153">رواندا</option>
                                 <option value="154">سانت كيتس ونيفيس</option>
                                 <option value="155">سانت لوسيا</option>
                                 <option value="156">سانت فنسنت وجزر غرينادين</option>
                                 <option value="157">ساموا</option>
                                 <option value="158">سان مارينو</option>
                                 <option value="159">ساو تومي وبرينسيبي</option>
                                 <option value="160">السنغال</option>
                                 <option value="161">صربيا</option>
                                 <option value="162">سيشيل</option>
                                 <option value="163">سيرا ليون</option>
                                 <option value="164">سنغافورة</option>
                                 <option value="165">سلوفاكيا</option>
                                 <option value="166">سلوفينيا</option>
                                 <option value="167">جزر سليمان</option>
                                 <option value="168">الصومال</option>
                                 <option value="169">جنوب أفريقيا</option>
                                 <option value="170">جنوب السودان</option>
                                 <option value="171">إسبانيا</option>
                                 <option value="172">سيريلانكا</option>
                                 <option value="173">سورينام</option>
                                 <option value="174">سوازيلاند</option>
                                 <option value="175">السويد</option>
                                 <option value="176">سويسرا</option>
                                 <option value="177">طاجيكستان</option>
                                 <option value="178">تايلاند</option>
                                 <option value="179">تيمور ليشتي</option>
                                 <option value="180">توغو</option>
                                 <option value="181">تونغا</option>
                                 <option value="182">ترينداد وتوباغو</option>
                                 <option value="183">تونس</option>
                                 <option value="184">تركمانستان</option>
                                 <option value="185">توفالو</option>
                                 <option value="186">أوغندا</option>
                                 <option value="187">أوكرانيا</option>
                                 <option value="188">جمهورية تنزانيا المتحدة</option>
                                 <option value="189">الولايات المتحدة</option>
                                 <option value="190">أوروغواي</option>
                                 <option value="191">أوزبكستان</option>
                                 <option value="192">فانواتو</option>
                                 <option value="193">فنزويلا</option>
                                 <option value="194">فيتنام</option>
                                 <option value="195">اليمن</option>
                                 <option value="196">زامبيا</option>
                                 <option value="197">زيمبابوي</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group clearfix ifrequired3">
                           <label class="control-label col-sm-3">الجنسية <span class="text-danger">*</span></label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="fa fa-flag"></i>
                              </span>
                              <input class="form-control" id="Nationality" name="Nationality" placeholder="إدخال الجنسية" type="text" value="">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="control-label col-sm-3">تاريخ الولادة <span class="text-danger">*</span></label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="glyphicon glyphicon-calendar"></i>
                              </span>
                              <input placeholder="mm/dd/yyyy" class="form-control" data-val="true" data-val-date="The field تاريخ الولادة must be a date." data-val-required="تعبئة 'تاريخ الولادة' مطلوب" id="DOB" name="DOB" type="text" value="">
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6"></div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="control-label col-sm-3">نوع الهوية <span class="text-danger">*</span></label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="fa fa-id-badge"></i>
                              </span>
                              <select class="form-control" id="IdType" name="IdType">
                                 <option value=""></option>
                                 <option value="1">بطاقة هوية السعودية</option>
                                 <option value="2">بطاقة هوية خليجية</option>
                                 <option value="3">إقامة سعودية</option>
                                 <option value="4">جواز سفر</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="control-label col-sm-3">رقم الهوية # <span class="text-danger">*</span></label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="fa fa-id-card-o"></i>
                              </span>
                              <input class="form-control" data-val="true" data-val-required="تعبئة 'رقم جواز' مطلوب" id="Passport" name="Passport" placeholder="أدخل رقم الهوية" type="text" value="">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="control-label col-sm-3">اثبات الهوية او جواز السفر <span class="text-danger">*</span></label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="glyphicon glyphicon-phone"></i>
                              </span>
                              <input class="form-control" id="CVs" name="CVs" type="file" value="">
                           </div>
                           <div class="col-sm-offset-3 help-block">
                              <small>jpg , gif,pdf الحد الأقصى لحجم 2MB</small>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="control-label col-sm-3">الصورة الشخصية <span class="text-danger">*</span></label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="glyphicon glyphicon-phone"></i>
                              </span>
                              <input class="form-control" id="Picture" name="Picture" type="file" value="">
                           </div>
                           <div class="text-danger help-block col-sm-offset-3">
                              <small>jpg , gif الحد الأقصى لحجم 200KB</small><br>
                              <a class="popupload" href="#" data-title="" data-body="" data-img="/Public/images/photo-sample.jpg"><small>اضغط لاستعراض عينة للصورة</small></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="control-label col-sm-3">عدد سنوات الخبرة العملية <span class="text-danger">*</span></label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="fa fa-briefcase"></i>
                              </span>
                              <input class="form-control text-box single-line" data-val="true" data-val-number="The field عدد سنوات الخبرة العملية must be a number." data-val-required="تعبئة 'عدد سنوات الخبرة العملية' مطلوب" id="WorkExperience" name="WorkExperience" type="number" value="">
                           </div>
                           <div class="col-sm-offset-3 help-block">
                              <small>عدد السنوات مثال 5</small>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="control-label col-sm-3">عدد سنين ممارسة التدريب بشكل عام <span class="text-danger">*</span></label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="fa fa-comments-o"></i>
                              </span>
                              <input class="form-control text-box single-line" data-val="true" data-val-number="The field عدد سنين ممارسة التدريب بشكل عام must be a number." data-val-required="تعبئة 'عدد سنين ممارسة التدريب بشكل عام' مطلوب" id="DeliveryOfTraining" name="DeliveryOfTraining" type="number" value="">
                           </div>
                           <div class="col-sm-offset-3 help-block">
                              <small>عدد سنين ممارسة التدريب بشكل عام</small>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="control-label col-sm-3">الإنجليزية كتابة <span class="text-danger">*</span></label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="fa fa-pencil"></i>
                              </span>
                              <select class="form-control" data-val="true" data-val-required="تعبئة 'الإنجليزية كتابة' مطلوب" id="EnglishWritten" name="EnglishWritten">
                                 <option value=""></option>
                                 <option value="NativeLanguage">اللغة الأم</option>
                                 <option value="Excellent">ممتازة</option>
                                 <option value="VeryGood">جيدة جدا</option>
                                 <option value="Good">جيدة</option>
                                 <option value="Basic">بدائية</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="control-label col-sm-3">الإنجليزية محادثة <span class="text-danger">*</span></label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="fa fa-language"></i>
                              </span>
                              <select class="form-control" data-val="true" data-val-required="تعبئة 'الإنجليزية محادثة' مطلوب" id="EnglishSpoken" name="EnglishSpoken">
                                 <option value=""></option>
                                 <option value="NativeLanguage">اللغة الأم</option>
                                 <option value="Excellent">ممتازة</option>
                                 <option value="VeryGood">جيدة جدا</option>
                                 <option value="Good">جيدة</option>
                                 <option value="Basic">بدائية</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="control-label col-sm-3">العربية كتابة <span class="text-danger">*</span></label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="fa fa-pencil"></i>
                              </span>
                              <select class="form-control" data-val="true" data-val-required="تعبئة 'العربية كتابة' مطلوب" id="ArabicWritten" name="ArabicWritten">
                                 <option value=""></option>
                                 <option value="NativeLanguage">اللغة الأم</option>
                                 <option value="Excellent">ممتازة</option>
                                 <option value="VeryGood">جيدة جدا</option>
                                 <option value="Good">جيدة</option>
                                 <option value="Basic">بدائية</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="control-label col-sm-3">العربية محادثة <span class="text-danger">*</span></label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="fa fa-language"></i>
                              </span>
                              <select class="form-control" data-val="true" data-val-required="تعبئة 'العربية محادثة' مطلوب" id="ArabicSpoken" name="ArabicSpoken">
                                 <option value=""></option>
                                 <option value="NativeLanguage">اللغة الأم</option>
                                 <option value="Excellent">ممتازة</option>
                                 <option value="VeryGood">جيدة جدا</option>
                                 <option value="Good">جيدة</option>
                                 <option value="Basic">بدائية</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="control-label col-sm-3">فيس بوك</label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="fa fa-facebook"></i>
                              </span>
                              <input class="form-control" id="Facebook" name="Facebook" type="text" value="">
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="col-sm-3 control-label" for="DeliveryOfTraining">تويتر</label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="fa fa-twitter"></i>
                              </span>
                              <input class="form-control" id="Twitter" name="Twitter" type="text" value="">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group clearfix">
                           <label class="control-label col-sm-3">لينكد إن</label>
                           <div class="input-group col-sm-9">
                              <span class="input-group-addon">
                              <i class="fa fa-linkedin"></i>
                              </span>
                              <input class="form-control" id="LinkedIn" name="LinkedIn" type="text" value="">
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6"></div>
                  </div>
             
               </div>
               <div class="form-group hidden">
                  <div class="col-sm-6">
                     <textarea class="form-control" cols="20" id="Description" name="Description" placeholder="اضغط لاستعراض عينة للمحة المختصرة" rows="2"></textarea>
                  </div>
                  <div class="col-sm-3 text-danger">
                     <a class="showbio popupload" data-title="" data-body="انتونب روبنز، هو واحد من أكثر رجال التنمية البشرية نجاحا” في أمريكا، بل هو رجل التحفيز الأول ،حيث يتمتع بروح مرحة وأسلوب خطابي مقنع، ولعل سبب نجاحاته يعود إلى قصة كفاحه التي يرويها دائماً قبل أن يقرر أن يتغير، وعندها بدأ يستمع للأشرطة ويحضر المحاضرات حتى أصبح ما هو عليه"><small>اضغط لاستعراض عينة للمحة المختصرة</small></a>
                  </div>
               </div>
               <div id="captcha-wraper" class="form-group">
                  <div class="col-sm-3 col-sm-offset-3">
                     <input type="submit" class="btn btn-primary btn-block" value="استمر">
                  </div>
               </div>
            </form>
         </div>
      </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/demo.js"></script>
    <script>
        $(document).ready(function(){
            $("#TrainerCountry").change(function() {
                var obj = $(this);
                $.getJSON("https://www.actksa.com/ar/applyastrainer/Admin/TrainerCities/GetCities/" + obj.val(), function(result) {
                    var options = $("#TrainerCity");
                    options.attr("disabled", "disabled");
                    options.empty();
                    options.append($("<option />").text("اختر المدينة"));
                    $.each(result, function(i, item) {
                        options.append($("<option />").val(item.Id).text(item.CityAr));
                    });
                    options.append($("<option />").val(0).text("آخر"));
                    options.removeAttr("disabled");
                    //     $("#TrainerCity").trigger("change");
                });

            });
              });
    </script>
</body>
</html>