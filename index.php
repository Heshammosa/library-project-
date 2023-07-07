<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../online_library/css/index.css">
    <link rel="stylesheet" href="../online_library/css/all.min.css">
    <link rel="stylesheet" href="../online_library/css/bootstrap.min.css">
    <link rel="stylesheet" href="../online_library/css/normalize.css">
    <link rel="stylesheet" href="../online_library/css/swiper-bundle.css">
    <title>مكتبة كلية علوم المنوفية</title>

</head>
<body>
<?php
  include ('connect.php');
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
            <div class="icon">
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
    <header class="sticky-top">
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
        <p class="dropbtn"><?php echo $username   ?><i class="fa fa-caret-down"></i></p>
          <div class="dropdown-content">
            <?php if ($username == 'زائر') { ?>
              <a href="admin/add_user.php?re=0">مستخدم جديد</a>
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
              <a href="admin/admin.php">الاعدادات</a>
            <?php } ?>

          </div>
      </div>
    </div>
        </div>
    </header>
    <!-- end -->
    <!-- start -->
    <div style="background: #B0E0E6;">
    <marquee width=auto direction="right" font-size: 15px; >
      <label> اعلان : -
        <?php
        $sql_decisions = "SELECT * FROM decisions  ";
        $result_decisions = $conn->query($sql_decisions);
        while ($row_decisions = $result_decisions->fetch_assoc()) {
          echo ' -- ' . $row_decisions['the_decision'];
        }
        ?>
      </label>
    </marquee>
  </div>
  <!--  -->
 <!-- Swiper -->
 <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/library_ar.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/lib2.jpg" alt=""></div>
            
            <div class="swiper-slide"><img src="img/libb.jpg" alt=""></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- end -->
    <!-- start -->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-8 text">
                    <h2>عن المكتبة</h2>
                    <p>بناء علي قرار رئيس الجمهورية رقم 89 لسنة 1975 م باللائحة التنفيذية لقانون تنظيم الجامعات والقرارات المعدلة له وموافقة المجلس الاعلي للجامعات بجلسته بتاريخ 1977/11/16 م أنشأت كلية العلوم –جامعة المنوفية –بشبين الكوم –بالمبنى الملحق
                        بالمدرسة الثانوية الصناعية .بدأت الدراسة بالكلية عام 77/1978 م وكان بها أقسام : الكيمياء –الطبيعة– البيولوجيا الرياضيات -وتم نقل الكلية الي المبنى الجديد بمجمع الكليات 1988 - 1989 وقد بدأت الكلية في تطبيق نظام الساعات المعتمدة
                        وهو النظام المتبع في كلية العلوم جامعة المنوفية اعتباراً من – العام الجامعي 1989 / 1990
                    </p>
                </div>
                <div class="col-sm-12 col-lg-4 img">
                    <img src="img/download-6.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- end -->
    <!-- start -->
    <section class="goals" id="goals">
        <h2>نبذة عن القطاع</h2>
        <div class="container">
            <div class="box scroll-animation ">
                <img src="img/vis.png" alt="">
                <h3>رؤية المكتبة</h3>
                <p>تقديم أعلى مستوى من الخدمة المعرفية والرقمية لدعم العملية التعليمية والبحث العلمي.</p>
            </div>
            <div class="box  scroll-animation">
                <img src="img/mision.png" alt="">
                <h3>رسالة المكتبة</h3>
                <p>تسعى المكتبة إلى تحقيق متطلبات العملية التعليمية بالكلية واحتياجات المجتمع الخارجي بتوفير مجموعات متنوعة في جميع مجالات الدراسة الطلابية والبحثية من أوعية المعلومات وتشجيع استخدام تكنولوجيا المعلومات المتوائمة مع البيئة الرقمية للجامعة.</p>
            </div>
            <div class="box  scroll-animation">
                <img src="img/target.png" alt="">
                <h3>أهــــداف المكتبة</h3>
                <p>توفير وإتاحة كافة أشكال المقتنيات من الكتب والمراجع التي تنمي مهارات ومتطلبات البحث العلمي من خلال احدث الخدمات والتقنيات التكنولوجية</p>
            </div>
        </div>
    </section>
    <!-- end -->
    <section class="statistics">
        <div class="text">
            <h1>المكتبة فى أرقام</h1>
            <p>مقتنيات المكتبة محور أساسي لتحقق المكتبة أهدافها حيث تقتني المكتبة العديد من أوعية المعلومات المختافة وذات قيمة وفائدة للبحث العلمي .</p>
        </div>
        <div class="container">
            <div class="box nums">
                <div class="scroll-animation">
                    <h3>إجمالى عدد الكتب</h3>
                    <h1 class="num">16482</h1>
                </div>
                <p>عدد الكتب الاجنبية 11917 وعدد الكتب العربية 4565.</p>
            </div>
            <div class="box nums">
                <div class="scroll-animation">
                    <h3>الرسائل العلمية</h3>
                    <h1 class="num">2050</h1>
                </div>
                <p>عدد رسائل الدكتوراه 550 وعدد رسائل الماجستير 1500.</p>
            </div>
            <div class="box nums">
                <div class="scroll-animation">
                    <h3>قاموس</h3>
                    <h1 class="num">60</h1>
                </div>
                <p>يوجد عدد 60 قاموس لخدمة جميع اقسام المكتبة.</p>
            </div>
            <div class="box nums">
                <div class="scroll-animation">
                    <h3>الكتب الالكترونية</h3>
                    <h1 class="num">8163</h1>
                </div>
                <p>يوجد 8163 كتاب الكترونى لجميع الاقسام.</p>
            </div>
        </div>
    </section>
    <!-- end -->
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
    <span class="up">Top</i></span>
  <!--  -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        const sections = document.querySelectorAll('.scroll-animation');
const windowHeight = window.innerHeight;

function animateSections() {
    sections.forEach(section => {
        const sectionOffsetTop = section.offsetTop;
        const scrollPosition = window.scrollY + windowHeight;
        if (scrollPosition > sectionOffsetTop) {
            section.classList.add('animate');
        }
    });
}
window.addEventListener('scroll', animateSections);

// =====
let span = document.querySelector(".up");

window.onscroll = function() {
    this.scrollY >= 100 ? span.classList.add("show") : span.classList.remove("show");
};

span.onclick = function() {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
};
    </script>
<script src="../online_library/js/bootstrap.bundle.js"></script>
<script src="../online_library/js/swiper-bundle.min.js"></script>

</body>
</html>
