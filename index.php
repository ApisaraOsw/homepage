<?php 
require_once('config.php'); //this assumes your php file is in a subdirectory of your moodle
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">

    <title>ABC OVER</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/custom.css">

  </head>

  <body>

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>ABC OVER</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">หน้าแรก
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" target="_blank">ข้อมูลโครงการ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" target="_blank">หลักสูตร</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" target="_blank">ติดต่อสอบถาม</a>
              </li>
            </ul>
          </div>
          <div class="functional-buttons">
            <ul>
              <li>
              <?php 
              	if ($USER->id){
              ?>
                    <a href="login/logout.php">ออกจากระบบ</a>
              <?php
                }else{
              ?>
                    <a href="login/index.php">เข้าสู่ระบบ</a>
              <?php    
                }
              ?>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-9">
            <div class="header-text caption">
              <h2>โครงการการพัฒนารูปแบบความร่วมมือในการดูแลสุขภาพจิตแบบสื่อสารทางไกล</h2>
              <h6>THE DEVELOPMENT OF THE COLLABORATIVE TELEMENTAL HEALTH CARE MODEL</h6>
              <a class="btn" href="my/index.php">เข้าเรียน</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Services Starts Here -->
    <div class="services-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
              <h4>หลักสูตร  1 สำหรับครูปฐมวัย และผู้ดูแลเด็ก</h4>
              <img class="w-100 img-block" src="assets/images/block1.jpg"/>
              <p class="pt-3 text-right"><a href="#" target="_blank">รายละเอียดเพิ่มเติม...</a></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="service-item">
              <h4>หลักสูตร 2 สำหรับพ่อแม่ผู้ปกครองเด็กปฐมวัย</h4>
              <img class="w-100 img-block" src="assets/images/block2.jpg"/>
              <p class="pt-3 text-right"><a href="#" target="_blank">รายละเอียดเพิ่มเติม...</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Services Ends Here -->

    <!-- Partners Starts Here -->
     <div class="partners-section">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-12">
            <h4>ABC Partners</h4>
            <p class="mb-3">หน่วยงานที่ร่วมพัฒนาโครงการการพัฒนารูปแบบความร่วมมือในการดูแลสุขภาพจิตแบบสื่อสารทางไกล</p>
          </div>
          <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="partners-item">
              <img class="w-100" src="assets/images/logo-k10.jpg"/>
            </div>
          </div>
          <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="partners-item">
              <img class="w-100" src="assets/images/logo-md.jpg"/>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Partners Ends Here -->

    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="sub-footer">
              <p><span class="font-weight-bold">ABC Campus</span></br>Copyright &copy; 2023</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Ends Here -->

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/accordions.js"></script>


    

  </body>
</html>