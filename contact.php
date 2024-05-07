<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    

    <title>Lugx Gaming Template - Contact Page</title>

    <!-- Bootstrap core CSS -->
    <link href="fe/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="fe/assets/css/fontawesome.css">
    <link rel="stylesheet" href="fe/assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="fe/assets/css/owl.css">
    <link rel="stylesheet" href="fe/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <?php include_once 'be/common/nav.php'?>

  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Contact Us</h3>
          <span class="breadcrumb"><a href="#">About Us</a>  >  Contact Us</span>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-text">
            <div class="section-heading">
              <h6>Contact Us</h6>
              <h2>Get in Touch</h2>
            </div>
            <p>Have a question, comment, or just want to say hello? We'd love to hear from you! Feel free to reach out to us using the contact form below, and one of our friendly team members will get back to you as soon as possible. Whether you need assistance with an order, have a suggestion for a new book, or simply want to chat about your favorite reads, we're here to help!.</p>
            <ul>
              <li><span>Address</span> Lebanese American University, Beirut, Lebanon</li>
              <li><span>Phone</span> +123 456 7890</li>
              <li><span>Email</span> Lau@contact.com</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-content">
            <div class="row">
              <div class="col-lg-12">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.869494682379!2d35.475266575509295!3d33.89301477321726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f10cdf86989f9%3A0x920ea62c8299d366!2sLebanese%20American%20University!5e0!3m2!1sen!2slb!4v1715072422116!5m2!1sen!2slb" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
              <div class="col-lg-12">
                <form id="contact-form" action="be/ct.php" method="post">
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="contactphone" id="name" placeholder="Phone" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="surname" name="contactemail" id="surname" pattern="[^ @]*@[^ @]*" placeholder="Email" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="contactsubject" id="email" placeholder="Subject" required="">
                      </fieldset>
                    </div>
                    
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="contactmessage" id="message" placeholder="Your Message"></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2048 LUGX Gaming Company. All rights reserved. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="fe/vendor/jquery/jquery.min.js"></script>
  <script src="fe/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="fe/assets/js/isotope.min.js"></script>
  <script src="fe/assets/js/owl-carousel.js"></script>
  <script src="fe/assets/js/counter.js"></script>
  <script src="fe/assets/js/custom.js"></script>

  </body>
</html>