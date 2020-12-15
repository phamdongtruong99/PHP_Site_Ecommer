<!doctype html>
<html lang="en">

<?php
require '../connected.php';



if (isset($_POST['request'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $price = $_POST['price'];
  $service = $_POST['service'];
  $current_date = date("Y/m/d");

  $sql = "INSERT INTO `request`(`id_request`, `name`, `date`, `service`, `status`, `price`, `phone`) 
  VALUES (null,'$name','$current_date','$service','1','$price','$phone')";

  $isDone = $db->execute($sql);

  if ($isDone) {
    // echo "<script>window.location.href = '../list/index.php' </script>";
  }
}


?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= $ROOT_URL ?>/assets/css/bootstrap.min.css">
  <link href="<?= $ROOT_URL ?>/assets/css/all.css" rel="stylesheet">
  <!-- Owl Carousel CSS -->
  <link href="<?= $ROOT_URL ?>/assets/css/owl.carousel.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
  <link href="<?= $ROOT_URL ?>/assets/css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= $ROOT_URL ?>/assets/css/nice-select.css">
  <link href="<?= $ROOT_URL ?>/assets/css/style.css" rel="stylesheet">
  <title>Real Estate</title>
</head>

<body>
  <!--Topbar Start-->
  <div class="topbar-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-4">
          <ul class="social_media style_none">
            <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-8">
          <div class="top_right">
            <div class="topbar_phone"><a href="#"><i class="fas fa-phone-alt" aria-hidden="true"></i> 0901.9898.47 </a></div>
            <div class="topbar_login"><a href="submit_property.html"> Gửi yêu cầu</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Topbar End-->

  <!--Header Start-->
  <div class="header-wrap wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 navbar navbar-expand-lg navbar-light">
          <div class="header_logo"><a href="#"><img alt="" src="<?= $ROOT_URL ?>/assets/images/logo.png"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        </div>
        <div class="col-lg-9">
          <nav class="navbar navbar-expand-lg navbar-light"> <a class="navbar-brand" href="#">Navbar</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle" aria-hidden="true"></i></span> </button>
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="./home/index.php"> Trang Chủ </a> </li>
                <li class="nav-item"><a class="nav-link" href="#"> Danh sách <span class="caret"><i class="fas fa-caret-down"></i></span></a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="./property_grid.php">Hiển thị dạng lưới</a></li>
                    <li><a href="property_list.html">Hiển thị dạng danh sách </a></li>
                    <li><a href="property_map.html">Hiển thị Map</a></li>
                    <li><a href="property_single.html">Hiển thị cơ bản</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#."> Đối tác <span class="caret"><i class="fas fa-caret-down"></i></span></a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="./agents.php">Đại lý</a></li>
                    <li><a href="./contact.php">Gửi thông tin</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="./about.php"> Về chúng tôi </a>
                  <ul class="submenu">
                    <!-- <li><a href="about.html">Giới thiệu</a></li> -->
                    <!-- <li><a href="about.html"></a></li>
                    <li><a href="team.html">Our Team</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="faqs.html">Faqs</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                    <li><a href="pricing.html">Pricing Table</a></li>
                    <li><a href="404.html">Page 404 </a></li>
                    <li><a href="typography.html">Typography</a></li> -->
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="./blog.php"> Tin tức </a> </li>
                <li class="nav-item"><a class="nav-link" href="./contact.php"> Liên hệ</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!--Header End-->

  <!--Inner Heading Start-->
  <div class="innerHeading">
    <div class="container">
      <h1>Liên Hệ Với Chúng Tôi</h1>
    </div>
  </div>
  <!--Inner Heading End-->

  <!--Inner Content Start-->
  <div class="innercontent wow fadeInUp">
    <div class="container">
      <div class="getTouch">Liên Lạc</div>
      <div class="row formcol">
        <div class="col-lg-8">
          <form class="form mb-md50" id="contact-form" method="post" enctype="multipart/form-data">

            <div class="messages"></div>
            <div class="controls">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group has-error has-danger">
                    <input id="form_name" class="form-control" type="text" name="name" placeholder="Tên Bạn" required="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input id="form_email" class="form-control" type="text" name="phone" placeholder="Số điện thoại" required="">
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <input id="form_email" class="form-control" type="text" name="price" placeholder="Giá tiền" required="">
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea id="form_message" class="form-control" name="service" placeholder="Yêu cầu" rows="4" required=""></textarea>
                  </div>
                </div>
                <div class="col-lg-12 contact-wrap">
                  <div class="contact-btn">
                    <button type="submit" name="request" class="sub">Gửi yêu cầu <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.802446510124!2d108.16775494969447!3d16.075738143480645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218e6e72e66f5%3A0x46619a0e2d55370a!2zMTM3IE5ndXnhu4VuIFRo4buLIFRo4bqtcCwgVGhhbmggS2jDqiBUw6J5LCBMacOqbiBDaGnhu4N1LCDEkMOgIE7hurVuZywgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1608000513877!5m2!1sen!2s" width="100%" height="330" frameborder="0" style="border:0" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Inner Content End-->

  <!--Footer Start-->
  <footer class="footer bg-style wow fadeInUp">
    <div class="container">
      <div class="footer-upper">
        <div class="row">
          <div class="col-lg-3 col-md-12">
            <div class="footer-widget about-widget"> <a href="#"> <img alt="" src="<?= $ROOT_URL ?>/assets/images/logo.png"> </a>
              <p>
                Chúng tôi cung cấp nhà ở và bất động sản khu vực
              </p>
              <div class="readmore"><a href="#">Read More </a></div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3">
            <div class="footer-widget quick-links">
              <h3 class="title">Link rút gọn</h3>
              <ul>
                <li><a href="#."> Trang Chủ</a> </li>
                <li><a href="#."> Bất động sản</a> </li>
                <li><a href="#."> Đại lý ủy quyền</a> </li>
                <li><a href="#."> Liên hệ</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-5">
            <div class="footer-widget contact">
              <h3 class="title">Dự án gần đây</h3>
              <ul class="property_sec">
                <li>
                  <div class="rec_proprty">
                    <div class="propertyImg"><img alt="" src="images/property_small01.jpg"></div>
                    <div class="property_info">
                      <h4><a href="#">1324 Nguyễn thị thập</a></h4>
                      <p>Minneapolis, MN 55402</p>
                      <div class="GiáWrp">Từ 2 - 5 tỷ</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="rec_proprty">
                    <div class="propertyImg"><img alt="" src="images/property_small02.jpg"></div>
                    <div class="property_info">
                      <h4><a href="#">1324 Nguyễn Tất Thành</a></h4>
                      <p>Minneapolis, MN 42402</p>
                      <div class="GiáWrp">Từ 5 - 7 tỷ</div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="footer-widget contact">
              <h3 class="title">Liên Hệ</h3>
              <ul class="footer-adress">
                <li class="footer_address"> <i class="fas fa-map-signs"></i> <span>137 Nguyễn thị thập</span> </li>
                <li class="footer_email"> <i class="fas fa-envelope" aria-hidden="true"></i> <span><a href="mailto:info@realestate.com"> info@realestate.com </a></span> </li>
                <li class="footer_phone"> <i class="fas fa-phone-alt"></i> <span><a href="tel:0901989847"> 0901-9898-47</a></span> </li>
              </ul>
              <div class="social-icons footer_icon">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--Footer End-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?= $ROOT_URL ?>/assets/js/jquery.min.js"></script>
  <script src="<?= $ROOT_URL ?>/assets/js/popper.min.js"></script>
  <script src="<?= $ROOT_URL ?>/assets/js/bootstrap.min.js"></script>
  <!-- Owl Carousel -->
  <script src="<?= $ROOT_URL ?>/assets/js/owl.carousel.js"></script>
  <!-- wow js -->
  <script src="<?= $ROOT_URL ?>/assets/js/animate.js"></script>
  <script src="<?= $ROOT_URL ?>/assets/js/jquery.nice-select.js"></script>
  <script>
    new WOW().init();
  </script>
  <!-- general script file -->
  <script src="<?= $ROOT_URL ?>/assets/js/wow.js"></script>
  <script src="<?= $ROOT_URL ?>/assets/js/script.js"></script>
</body>

<!-- Mirrored from malikhassan.com/html/evernest/./home/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 04:12:48 GMT -->

</html>