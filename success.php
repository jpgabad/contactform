<?php include 'settings.php';?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="Are you looking for business IT support? Jumpstart Solutions offer network security, IT consulting, infrastructure support, and software solutions. Learn more. ">
    <meta name="keywords" content="Network security, IT consulting, infrastructure support, software solutions">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Animate CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap"
      rel="stylesheet"
    />
    <title>Home | Jumpstart Solutions</title>
  </head>
  <body>
    <!-- NAVBAR 1-->
    <nav
      class="z-navbar1 navbar navbar-expand-lg py-3 navbar-dark  shadow-  fixed-top onscroll-show"
      animate="nav1"
      id="navbar1"
    >
      <div class="container z-navbar-container">
        <a href="#" class="navbar-brand">
          <!-- Logo Image -->
          <img
            src="img/logo.png"
            width="70"
            alt=""
            class="d-inline-block align-middle mr-2"
          />
          <!-- Logo Text --><!-- 
      <span class="text-uppercase font-weight-bold">Company</span> -->
        </a>

        <button
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
          class="navbar-toggler mr-3"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav z-navbar-nav ml-auto text-uppercase">
            <li class="nav-item z-nav-item active">
              <a href="index.html" class="nav-link"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item z-nav-item">
              <a href="about.html" class="nav-link scroll-link">About</a>
            </li>
            <li class="nav-item z-nav-item">
              <a href="services.html" class="nav-link scroll-link">Services</a>
            </li>
            <!-- <li class="nav-item z-nav-item">
              <a href="" class="nav-link scroll-link">Testimonials</a>
            </li> -->
            <li class="nav-item">
              <button
                type="button"
                class="btn js__btn-violet rounded-0"
                data-toggle="modal"
                data-target="#exampleModalCenter"
              >
                Contact Us
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- NAVBAR 2 ONSCROLL -->
    <nav
      class="navbar navbar-expand-lg py-3 navbar-dark z-navbar-bg-onscroll z-navbar2 shadow- fixed-top"
      animate="nav2"
      id="navbar2"
    >
      <div class="container-fluid z-navbar-container-onscroll">
        <a href="#" class="navbar-brand">
          <!-- Logo Image -->
          <img
            src="img/logo.png"
            width="70"
            alt=""
            class="d-inline-block align-middle mr-2"
          />
          <!-- Logo Text --><!-- 
      <span class="text-uppercase font-weight-bold">Company</span> -->
        </a>

        <button
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent2"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
          class="navbar-toggler mr-3"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarSupportedContent2" class="collapse navbar-collapse">
          <ul class="navbar-nav z-navbar-nav ml-auto text-uppercase">
            <li class="nav-item z-nav-item active">
              <a href="index.html" class="nav-link"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item z-nav-item">
              <a href="about.html" class="nav-link scroll-link">About</a>
            </li>
            <li class="nav-item z-nav-item">
              <a href="services.html" class="nav-link scroll-link">Services</a>
            </li>
            <!-- <li class="nav-item z-nav-item">
              <a href="" class="nav-link scroll-link">Testimonials</a>
            </li> -->
            <li class="nav-item">
              <button
                type="button"
                class="btn js__btn-violet rounded-0"
                data-toggle="modal"
                data-target="#exampleModalCenter"
              >
                Contact Us
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>



<!-- CONTACT FORM -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Jumpstart Solutions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form class="shake" role="form" action="https://formsubmit.co/<?php echo $id; ?>" method="post" id="contactForm" name="contact-form" data-toggle="validator">
          <!--     HONEYPOT           -->
          <input type="text" name="_honey" style="display:none">
          
          <!--     DISABLE RECAPTCHA           -->
          <input type="hidden" name="_captcha" value="false">
          
          <input  type="hidden" name="_next" value="https://jpgabad.github.io/contactform/success.html">
          
          <!-- Company Name -->
          <div class="form-group label-floating">
            <label class="control-label" for="name">Company Name</label>
            <input class="form-control" id="company_name" type="text" name="company_name" required data-error="Please enter your Company name">
            <div class="help-block with-errors"></div>
          </div>
          <!-- Name -->
          <div class="form-group label-floating">
            <label class="control-label" for="name">Name</label>
            <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
            <div class="help-block with-errors"></div>
          </div>
          <!-- email -->
          <div class="form-group label-floating">
            <label class="control-label" for="email">Email</label>
            <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
            <div class="help-block with-errors"></div>
          </div>
          <!-- Subject -->
          <div class="form-group label-floating">
            <label class="control-label">Phone Number</label>
            <input class="form-control" id="phone_number" type="number" name="subject" required data-error="Please enter your phone number">
            <div class="help-block with-errors"></div>
          </div>
          <!-- Message -->
          <div class="form-group label-floating">
              <label for="message" class="control-label">Message</label>
              <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
              <div class="help-block with-errors"></div>
          </div>
         
          
           <div class="modal-footer border-0">
        <!-- Submit button -->
          <button type="submit" class="btn js__btn-navyblue border rounded-0 mb-4 pl-5 pr-5">Send</button>
      </div>
      </form>
     
      </div>
     
    </div>
  </div>
</div>
    

    <!-- *************************************************************************
HERO HEADER
********************************************************************************-->
    <div class="js__header-contact-success">
      <div class="container">
        <div class="row">
          <div class="col-12 "><p class="text-white mx-auto text-40"> Thank you for Trusting Jumpstart Solution <br>We'll get back to you as soon as possible</p></div>
        </div>
      </div>
    </div>




<!-- *************************************************************************
FOOTER
********************************************************************************-->
<div class="section-container js__bg-navyblue">
  <div class="container">
    <div class="row p-5 footer-align-center">
      <div class="col-12 col-lg-4"><img src="img/logo.png" width="45"
        alt=""
        class="d-inline-block align-middle mr-2">
      </div>

      <div class="col-12 col-lg-8">

        <div  class="z-footer-link mt-5 footer-link">
          <ul class="navbar-nav z-navbar-nav d-flex flex-row justify-content-center text-uppercase">
            <li class="nav-item z-nav-item "><a href="#" class="nav-link text-light">Home <span class="sr-only">(current)</span></a></li>
            <li class="nav-item z-nav-item "><a href="#" class="nav-link text-light scroll-link">About</a></li>
            <li class="nav-item z-nav-item "><a href="#" class="nav-link text-light scroll-link" >Services</a></li>
            <li class="nav-item z-nav-item "><a href="#" class="nav-link text-light scroll-link" >Testimonials</a></li>
            <li class="nav-item z-nav-item "><a  class="nav-link text-light scroll-link" data-toggle="modal" data-target="#exampleModalCenter">Contact Us</a></li>
          </ul>
        </div>
       
        
      </div>
        <div class="footer-arr">
          <p class="text-white">2022 ?? Jumpstart Solutions Services All Rights Reserved.</p>
        </div>
        
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/smooth-scroll.polyfills.min.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/util.js"></script>
    <!-- WOW JS -->
    <script src="js/wow.js"></script>

    <script src="js/custom.js"></script>
  </body>
</html>
