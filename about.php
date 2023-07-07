<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../online_library/css/about.css">
    <link rel="stylesheet" href="../online_library/css/all.min.css">
    <link rel="stylesheet" href="../online_library/css/bootstrap.min.css">
    <link rel="stylesheet" href="../online_library/css/normalize.css">
    <link rel="stylesheet" href="../online_library/css/swiper-bundle.css">
    <title>عن المكتبة</title>

</head>
<body>
<?php
  include ('connect.php');
  // include ('index.php');
  session_start();
if (!isset($_SESSION['online_library'])) {
$username='زائر';
$situs='طالب';
}
if (isset($_SESSION['online_library'])) {
$username= $_SESSION['online_library'];
$sql="SELECT * FROM users where  username= '$username'  ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
  $situs=$row['situs'];
}
}
?>

<!-- end -->
    <!-- start -->
    <div id="nav1">
        <div class="container">
            <div>
                <a href="https://twitter.com/ar_uni"><i class="fa-brands
                            fa-twitter"></i></a>
                <a href="https://www.youtube.com/channel/UCcoPxoor5XEnac34BwEI_9w">
                    <i class="fa-brands fa-youtube"></i></a>
                <a href="https://www.facebook.com/mnf.science.official"><i
                            class="fa-brands fa-facebook"></i></a>
                <a href="https://mnfsci.wordpress.com/"><i class="fa-brands
                            fa-wordpress"></i></a>
            </div>
           
        </div>
    </div>
    <!-- end -->
    <!-- start -->
    <div class="nav2">
        <div class="container">
            <img src="img/sci_lib_ar (1).png" alt="">
        </div>
    </div>
    <!-- end -->
    <!-- start -->
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light
                    bg-light">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <nav class="navigation collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="active nav-item">
                            <a class="nav-link active" href="index.php">
                                <i class="fa
                                        fa-house-chimney-window"></i>الرئيسية</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="about.php">عن المكتبة</a></li>
                
                        <li class="nav-item"><a class="nav-link" href="wook_group.php">الهيكل
                                    الادارى</a></li>
                        <li class="nav-item"><a class="nav-link" href="outline.php">اقسام
                                    المكتبة</a></li>
                        <li class="nav-item"><a class="nav-link" href="book.php">الكتب</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">اتصل بنا</a></li>
                    </ul>
                </nav>
            </nav>
            <div class="loginusers">
      <img src="img/user.png" />
      <div class="dropdown">
        <p class="dropbtn">المزيد<i class="fa fa-caret-down"></i></p>
          <div class="dropdown-content">
            <?php if ($username == 'زائر') { ?>
              <a href="admin/add_user.php">مستخدم جديد</a>
              <a href="admin/login.php">تسجيل الدخول</a>
            <?php } ?>
            <a href="#">
              <?php
              if ($username == 'زائر') {
                echo "زائر";
              }
              if ($username !== 'زائر') {
                echo "مرحبا بك  - " . $username;
              }
              ?>
            </a>
            <?php if ($username !== 'زائر') { ?>
              <a href="admin/login.php">تسجيل خروج</a>
            <?php } ?>
            <?php if ($situs == 'الادارة') { ?>
              <a href="admin/admin.php">التقارير</a>
            <?php } ?>

          </div>
      </div>
    </div>
        </div>
    </header>
    <!-- end -->
    <!-- start -->
    <div class="about_lib">
        <div class="container">
            <div class="title">
                <h3><i class="fa fa-thumb-tack"></i> عن المكتبة
                </h3>
            </div>
            <div class="contect_lib">
              <div>
                <h4>نبذه عن المكتبة</h4>
                <p>بناء علي قرار رئيس الجمهورية رقم 89 لسنة 1975 م باللائحة التنفيذية لقانون تنظيم الجامعات والقرارات المعدلة له وموافقة المجلس الاعلي للجامعات بجلسته بتاريخ 1977/11/16 م أنشأت كلية العلوم –جامعة المنوفية –بشبين الكوم –بالمبنى الملحق
                        بالمدرسة الثانوية الصناعية .بدأت الدراسة بالكلية عام 77/1978 م وكان بها أقسام : الكيمياء –الطبيعة– البيولوجيا الرياضيات -وتم نقل الكلية الي المبنى الجديد بمجمع الكليات 1988 - 1989 وقد بدأت الكلية في تطبيق نظام الساعات المعتمدة
                        وهو النظام المتبع في كلية العلوم جامعة المنوفية اعتباراً من – العام الجامعي 1989 / 1990
                    </p>
              </div>
              <div>
                <h4>موقع المكتبة</h4>
                <p>تقع المكتبة بالدور الخامس من الكلية</p>
              </div>
              <div>
                <h4>اقسام المكتبة</h4>
                <ul>
                  <li>قسم الجيولوجيا</li>
                  <li>قسم الكيمياء</li>
                  <li>قسم الرياضيات 
والحاسب الالي </li>
                  <li>قسم النبات والميكروبيولوجى</li>
                  <li>قسم علم الحيوان</li>
                  <li>قسم الفيزياء</li>
                  <li>القسم الثقافي</li>
                </ul>
              </div>
              <div>
                <h4>المساحة الكلية لقاعات المكتبة</h4>
                <p>المساحة الكلية للقاعة الكبرى 341متر تربيع
، المساحة المستغلة لجميع القاعات 638متر</p>
              </div>
              <div>
                <h4>أثاث المكتبة</h4>
                <ul>
                  <li>عدد 124 دولاب</li>
                  <li>عدد 744 رف</li>
                  <li>عدد58 مقعد</li>
                  <li>عدد 72 منضده للاطلاع</li>
                  <li>عدد 2 ترابيزة كمبيوتر</li>
                  <li>عدد 7 مكاتب</li>
                  
                </ul>
              </div>
              <div>
                <h4>مقتنيات المكتبة</h4>
                <p>تحتوى مكتبة كلية علوم على:-</p>
                <ul>
                  <li>عدد الكتب الاجنبية(11917)</li>
                  <li>عدد الكتب العربية(4565)</li>
                  <li>اجمالى عدد الكتب(16482)</li>
                </ul>
              </div>
              <div>
                <h4>قاعة بوك كافيهBook Cafe</h4>
                <div class="image">
                  <img src="../online_library/img/bookcafe.jpg" alt="">
                </div>
                <p>قاعه مضافه حديثا يوجد بها:-</p>
                <ul>
                  <li>عدد 9 منضدة بعدد 21 كرسي</li>
                  <li>عدد 1 داتا شو</li>
                  <li>عدد 1 جهاز تكييف</li>
                  <li>عدد 3 طفاية حريق</li>
                </ul>
                <div>
                  <p>قاعة مقهى الكتاب تختلف فى الشكل والمضمون عن القاعة الرئيسية للمكتبة 
تحتوى على العديد من الكتب الثقافية والروايات والقصص , كما انها تحتوى 
على مكتبة سمعية وبصرية ويقام بها العديد من ورش العمل والندوات 
والعروض التقديمية للطلبة والتى تخدم الدراسة بالكلية
</p>
                </div>

              </div>
              <div>
                <h4>الخدمات التي تقدمها المكتبة</h4>
                <ul>
                  <li>الاطلاع الداخلى</li>
                  <li>الاستعارة الخارجية</li>
                  <li>خدمة التوجيه والارشاد</li>
                  <li>الخدمة المرجعية والرد على الاستفسارات</li>
                  <li>الاحاطة الجارية والبث الانتقائى للمعلومات</li>
                  <li>خدمة التصوير</li>
                  <li>البحث الالكترونى فى فهارس مكتبات الجامعات المصرية FLS</li>
                  <li>التسجيل والبحث الالكترونى على بنك بنك المعرفة المصرى www.ekb.eg</li>
                  <li>البحث الالكترونى فى قواعد البيانات العالمية</li>
                  <li>خدمة تنظيم ورش عمل للطلاب لشرح كيفية الاستفادة من خدمات المكتبة وكيفية التعامل معها</li>
                  <li>خدمة التسجيل الالكترونى لطلاب الدراسات العليا</li>
                  <li>-قياس مدى رضا المستفيدين وربطها بعملية التزويد</li>
                  <li>خدمة تجميع امتحانات السنوات السابقة واتاحتها للطلبة</li>
                  <li>خدمة تنظيم ورش عمل للطالب</li>
                </ul>
              </div>
              <div>
                <h4>دليل مكتبه كلية العلوم</h4>
                <a href="../online_library/img/الدليل 2023[1].pdf">اضغط هنا</a>
              </div>


            </div>
        </div>
    </div>
    <!-- end -->
    <!-- start -->
    <div class="footer">
        <div class="container">
            <div>
                <h4>مواقع ذات صلة</h4>
                <div>
                    <ul>
                        <li><a href="https://www.menofia.edu.eg/Home/ar">جامعة المنوفية</a></li>
                        <li><a href="https://www.menofia.edu.eg/sci/Home/ar">كلية علوم جامعة المنوفية</a></li>
                        <li><a href="https://scu.eg/">المجلس الاعلى للجامعات</a></li>
                        <li><a href="https://mohesr.gov.eg/ar-eg/Pages/Home.aspx">وزارة التعليم العالى</a></li>
                        <li><a href="https://naqaae.eg/ar/">الهيئة القومية لضمان جوده التعليم</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <h4>خريطة الوصول</h4>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3435.084426892431!2d31.011344225470232!3d30.57516199323268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7d6bf3bfef67d%3A0x240a3bffb88e4661!2z2YPZhNmK2Kkg2KfZhNi52YTZiNmFINis2KfZhdi52Kkg2KfZhNmF2YbZiNmB2YrYqQ!5e0!3m2!1sar!2seg!4v1682732536122!5m2!1sar!2seg"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div>
                <h4>بيانات الاتصال</h4>
                <ul>
                    <li><i class="fa fa-location-dot text-light"></i> جامعه المنوفية كليه العلوم - شارع جمال عبدالناصر - المنوفية - مصر
                    </li>
                    </li>
                    <li>
                        <i class="fas fa-phone-volume
                                text-light"></i> 048/2222753 - 2222758
                    </li>
                    <li>
                        <i class="fas fa-phone-volume
                                text-light"></i> 2235689</li>
                    <li>
                        <i class="fa fa-envelope text-light"></i> itunit.support@science.menofia.edu.eg
                    </li>
                    <div class="numbers">
                        <h5>عدد الزيارات</h5>
                        <p>1256</p>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <footer>
        <p>جميع الحقوق محفوظة © 2023 مركز تقنية الاتصالات والمعلومات - جامعة المنوفية</p>
    </footer>
    <!-- end -->
    <!-- start -->
    <script src="../online_library/js/bootstrap.bundle.js"></script>
<script src="../online_library/js/swiper-bundle.min.js"></script>
</body>
</html>
