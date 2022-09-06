<?php
$db = mysqli_connect("localhost", "root", "", "image_upload");
$image = $_GET['image'];
$sq = $db->query("SELECT * FROM images WHERE id = '$image'");
$res = mysqli_num_rows($sq);
if (!isset($_GET['image']) || $res == 0) {
  header('location:index.php');
}
if (isset($_GET['image'])) {
  $image = $_GET['image'];
}
$sql = $db->query("SELECT * FROM images WHERE id='$image'");
$row = mysqli_fetch_object($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Special Gifts Children Initiative</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
    <h1 class="logo me-auto"><a href="index.html">Special Gifts Children Initiative<span>.</span></a></h1>
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

    </div>
  </header>

  <main id="main">

   
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Portfolio Details</li>
        </ol>
        <h2>Portfolio Details</h2>

      </div>
    </section>

    
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="upload/<?= $row->image ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="upload/<?= $row->image ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="upload/<?= $row->image ?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Title</h3>
              <?= $row->title ?>
            </div>
            <?= $row->image_text ?>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <?php include('footer.php') ?>