<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../online_library/css/outline.css">
    <link rel="stylesheet" href="../online_library/css/all.min.css">
    <link rel="stylesheet" href="../online_library/css/bootstrap.min.css">
    <link rel="stylesheet" href="../online_library/css/normalize.css">
    <link rel="stylesheet" href="../online_library/css/swiper-bundle.css">
    <title>اقسام المكتبة</title>

</head>
<body>

<?php
 include ('connect.php');
 //   include ('index.php');
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
                <h3><i class="fa fa-thumb-tack"></i> اقسام المكتبة
                </h3>
            </div>
            <div>
                  <img src="../online_library/img/lib2.jpg" alt="">
                  <img src="../online_library/img/libb.jpg" alt="">
            </div>
            <div>
                  <h4>قسم الجيولوجيا</h4>
                  <ul>
                        <li>عدد الكتب الاجنبية(1180)</li>
                        <li>عدد الكتب العربية(61)</li>
                        <li>اجمالى عدد الكتب(1241)</li>
                  </ul>
            </div>
            <div>
                  <h4>قسم الرياضيات</h4>
                  <ul>
                        <li>عدد الكتب الاجنبية(2212)</li>
                        <li>عدد الكتب العربية(370)</li>
                        <li>اجمالى عدد الكتب(2583)</li>
                  </ul>
            </div>
            <div>
                  <h4>قسم النبات</h4>
                  <ul>
                        <li>عدد الكتب الاجنبية(801)</li>
                        <li>عدد الكتب العربية(162)</li>
                        <li>اجمالى عدد الكتب(963)</li>
                  </ul>
            </div>
            <div>
                  <h4>قسم علم الحيوان</h4>
                  <ul>
                        <li>عدد الكتب الاجنبية(1803)</li>
                        <li>عدد الكتب العربية(302)</li>
                        <li>اجمالى عدد الكتب(2105)</li>
                  </ul>
            </div>
            <div>
                  <h4>قسم الكيمياء</h4>
                  <ul>
                        <li>عدد الكتب الاجنبية(2102)</li>
                        <li>عدد الكتب العربية(171)</li>
                        <li>اجمالى عدد الكتب(2273)</li>
                  </ul>
            </div>
            <div>
                  <h4>قسم الفيزياء</h4>
                  <ul>
                        <li>عدد الكتب الاجنبية(2761)</li>
                        <li>عدد الكتب العربية(243)</li>
                        <li>اجمالى عدد الكتب(3004)</li>
                  </ul>
            </div>
            <div>
                  <h4>القسم الثقافى</h4>
                  <ul>
                        <li>اجمالى عدد الكتب(2075)</li>
                  </ul>
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
