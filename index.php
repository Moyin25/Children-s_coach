<?php
$db = mysqli_connect("localhost", "root", "", "image_upload");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Special Gifts Children Initiative - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/better.png" rel="icon">
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
  <style>
    .contact .contact-form {
      box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
      padding: 30px;
      border-radius: 4px;
    }

    .contact .contact-form .error-message {
      display: none;
      color: #fff;
      background: #ed3c0d;
      text-align: left;
      padding: 15px;
      font-weight: 600;
    }

    .contact .contact-form .error-message br+br {
      margin-top: 25px;
    }

    .contact .contact-form .sent-message {
      display: none;
      color: #fff;
      background: #18d26e;
      text-align: center;
      padding: 15px;
      font-weight: 600;
    }

    .contact .contact-form .loading {
      display: none;
      background: #fff;
      text-align: center;
      padding: 15px;
    }

    .contact .contact-form .loading:before {
      content: "";
      display: inline-block;
      border-radius: 50%;
      width: 24px;
      height: 24px;
      margin: 0 10px -6px 0;
      border: 3px solid #18d26e;
      border-top-color: #eee;
      -webkit-animation: animate-loading 1s linear infinite;
      animation: animate-loading 1s linear infinite;
    }

    .contact .contact-form .form-group {
      margin-bottom: 25px;
    }

    .contact .contact-form input,
    .contact .contact-form textarea {
      box-shadow: none;
      font-size: 14px;
      border-radius: 4px;
    }

    .contact .contact-form input:focus,
    .contact .contact-form textarea:focus {
      border-color: #111111;
    }

    .contact .contact-form input {
      padding: 10px 15px;
    }

    .contact .contact-form textarea {
      padding: 12px 15px;
    }

    .contact .contact-form button[type=submit] {
      background: #e03a3c;
      border: 0;
      padding: 10px 32px;
      color: #fff;
      transition: 0.4s;
      border-radius: 4px;
    }

    .contact .contact-form button[type=submit]:hover {
      background: #e35052;
    }
  </style>

</head>

<body>

  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html">Special Gifts Children Initiative<span>.</span></a></h1>
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>


    </div>
  </header>

  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>Train up a child in the way he should go;</h1>
          <h2>and when he is old, he will not depart from it. </h2>
        </div>
      </div>
    </div>

  </section>

  <main id="main">

    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>

    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3>Special Gifts Children Initiative</h3>
              <p>
                Children are special gifts from God, training this special gifts is our ministry - Ayotola E. Taiwo
              </p>
              <a class="about-btn"><span>About us</span> </a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Our Mission</h4>
                  <p>To send daily nuggets including to Etiquettes for Children , Child's Training Tips, Health Tips for Children, Safety Precautions in School, Bible Quotations for Children and so on. </p>
                  <p>To Organise children programmes, seminars and talks, virtually (on youtube, facebook, etc) and physically (in schools, churches and any social gathering for children).</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Our Vision</h4>
                  <p>To raise Godly and morally upright children in a world of moral decadence.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Our Core Values</h4>
                  <table>
                    <tr>
                      <td>
                        <ul>
                          <li>
                            <p>Godliness</p>
                          </li>
                          <li>
                            <p>Morality</p>
                          </li>
                          <li>
                            <p>Respect</p>
                          </li>
                        </ul>
                      </td>
                      <td>
                        <ul>
                          <li>
                            <p>Love</p>
                          </li>
                          <li>
                            <p>Care</p>
                          </li>
                        </ul>
                      </td>

                    </tr>
                  </table>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </section>


    <?php
    $sql = $db->query("SELECT * FROM images ORDER BY id DESC LIMIT 6");


    ?>
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p></p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <a href="portfolio.php" class="get-started-btn scrollto">View all</a>

          </div>
        </div>
        <br>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php
          while ($row = mysqli_fetch_object($sql)) { ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="upload/<?= $row->image ?>" style="float: left; width:  10000px; height: 300px; object-fit: cover;" class="img-fluid" width="100%" alt="">
                <div class="portfolio-info">

                  <div class="portfolio-links">
                    <a href="portfolio-details.php?image=<?= $row->id ?>" style="float: left; width:  10000px; height: 300px; object-fit: cover;" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>


        </div>

      </div>
    </section>

    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Testimonials</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>

<style>
  .sec{
    display: flex;
    align-items: center;
    justify-content: center;
  }
</style>

    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
        </div>

        <div class="row sec">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/AYT.jpeg" style="height: 400px;" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ayotola Taiwo E.</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/AYS.jpg"  style="height: 400px;" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ayosile Taiwo M.</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>



        </div>

      </div>
    </section>

    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Epe, Lagos state, <br>Nigeria.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>taiwoayotola2018@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+234 810 164 8375</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="process.php" method="post" role="form" class="contact-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>

  </main>

  <?php include('footer.php') ?>
  <script>
    (function() {
      "use strict";

      let forms = document.querySelectorAll('.contact-form');

      forms.forEach(function(e) {
        e.addEventListener('submit', function(event) {
          event.preventDefault();

          let thisForm = this;

          let action = thisForm.getAttribute('action');
          // let recaptcha = thisForm.getAttribute('data-recaptcha-site-key');

          if (!action) {
            displayError(thisForm, 'The form action property is not set!')
            return;
          }
          thisForm.querySelector('.loading').classList.add('d-block');
          thisForm.querySelector('.error-message').classList.remove('d-block');
          thisForm.querySelector('.sent-message').classList.remove('d-block');

          let formData = new FormData(thisForm);
          formData.append('sendMail', "something")

          for (const pair of formData.entries()) {
            console.log(`${pair[0]}, ${pair[1]}`);
          }

          php_email_form_submit(thisForm, action, formData);
        });

      });

      function php_email_form_submit(thisForm, action, formData) {
        fetch(action, {
            method: 'POST',
            body: formData,
            // headers: {'X-Requested-With': 'XMLHttpRequest'}
          })
          .then(response => {
            console.log(response);
            if (response.ok) {
              return response.text()
            } else {
              throw new Error(`${response.status} ${response.statusText} ${response.url}`);
            }
          })
          .then(data => {
            console.log(data)
            thisForm.querySelector('.loading').classList.remove('d-block');
            if (data == 1) {
              thisForm.querySelector('.sent-message').classList.add('d-block');
              setTimeout(() => {
                thisForm.querySelector('.sent-message').classList.remove('d-block');
              }, 3000)
              thisForm.reset();
            } else {
              throw new Error(data ? data : 'Form submission failed and no error message returned from: ' + action);
            }
          })
          .catch((error) => {
            displayError(thisForm, error);
          });
      }

      function displayError(thisForm, error) {
        thisForm.querySelector('.loading').classList.remove('d-block');
        thisForm.querySelector('.error-message').innerHTML = error;
        thisForm.querySelector('.error-message').classList.add('d-block');
        setTimeout(() => {
          thisForm.querySelector('.error-message').classList.remove('d-block');

        }, 3000)
      }
    })();
  </script>