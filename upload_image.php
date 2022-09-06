<?php
$db = mysqli_connect("localhost", "root", "", "image_upload");

$msg = "";

if (isset($_POST['upload'])) {
  $image = $_FILES['image']['name'];
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  $target = "upload/" . basename($image);

  $sql = "INSERT INTO images (image,title,image_text) VALUES ('$image','$title','$image_text')";

  mysqli_query($db, $sql);

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
  } else {
    $msg = "Failed to upload image";
  }
}
$result = mysqli_query($db, "SELECT * FROM images");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Upload Image</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
  <style type="text/css">
    #content {
      width: 50%;
      margin: 20px auto;
      border: 1px solid #cbcbcb;
    }

    form {
      width: 50%;
      margin: 20px auto;
    }

    form div {
      margin-top: 5px;
    }

    #img_div {
      width: 50%;
      padding: 5px;
      margin: 15px auto;
      border: 1px solid #cbcbcb;
    }

    #img_div:after {
      content: "";
      display: block;
      clear: both;
    }

    img {
      float: left;
      margin: 5px;
      width: 300px;
      height: 140px;
    }
  </style>
</head>

<body>

  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html">Special Gifts Children Initiative<span>.</span></a></h1>
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->


  </header>

  <main id="main">

    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>upload image</li>
        </ol>
        <h2>upload image</h2>

      </div>
    </section>

    <section class="inner-page">
      <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div>
          <input type="file" name="image">
        </div>
        <div><textarea cols="20" rows="1" name="title" placeholder="Give it a title..."></textarea></div>
        <div>
          <textarea id="text" cols="40" rows="4" name="image_text" placeholder="Say something about this image..."></textarea>
        </div>
        <div>
          <button type="submit" name="upload">POST</button>
        </div>
      </form>
      </div>
    </section>
 </main>
 
  <?php include('footer.php') ?>