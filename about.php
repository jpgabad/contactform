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
    <meta name="description" content="Jumpstart Solution is a leading UK-based tech firm.  Click here to learn about us and how we can help your business with our excellent IT consulting, infrastructure support, network security, and software solutions!">
    <meta name="keywords" content="IT consulting, network security, infrastructure support, software solutions, strategic consulting, infrastructure implementation">
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
    <title>About Us | Jumpstart Solutions | IT Consulting | Infrastructure Support | Software Solutions</title>
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
            <li class="nav-item z-nav-item ">
              <a href="index.html" class="nav-link"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item z-nav-item active">
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
            <li class="nav-item z-nav-item ">
              <a href="index.html" class="nav-link"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item z-nav-item active">
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
    <div class="js__header about_bg">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6 ">
            <p class="text-light text-40 wow animate__animated animate__fadeInDown " data-wow-delay="500ms">About Us</p>
          </div>
          <div class="col-12 col-lg-6">
            <p class="text-white text-40 wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Jumpstart Solutions</p>
            <p class="text-white text-20 wow animate__animated animate__fadeInDown " data-wow-delay="500ms">
              Uncomplicating Business IT Solutions For You
            </p>
          </div>
        </div>
      </div>
    </div>


    <!-- *************************************************************************
SECTION 1
********************************************************************************-->
<div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4 "><h3 class="font-weight-bold  text--blue wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Who We Are</h3></div>
        <div class="col-12 col-md-8">
            <p>Jumpstart Solutions is a tech company that provides IT-related business solutions to companies worldwide.  We offer services including IT consulting, network security, software solutions, and IT infrastructure support.  </p>
            <p>Jumpstart Solutions helps its clients with IT advisory services, enhancing and expanding their businesses' technological capabilities.  We help them take advantage of efficiencies and benefits offered by technological advancements, ensuring integrity of IT infrastructure, program, and system so they can help you achieve your business's goals and objectives.  We are also known for delivering innovative and proactive solutions and specialise in system modernisation, strategic consulting, data management, and infrastructure implementation.</p>
        </div>
      </div>
    </div>
</div>
  

<!-- ARROW DIVISION 2-->
<div class="section-arrow-2"><div class="container"><img src="img/section-div-2.png" alt=""></div></div>




    <!-- *************************************************************************
SECTION 2
********************************************************************************-->
<div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center"><h3 class="font-weight-bold  text--blue wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Our Mission</h3></div>
        <div class="col-12 text-center"><p>Our mission is to bring innovation, creativity, agility, excellence, and performance excellence, to help grow our clients' businesses.</p></div>
      </div>
    </div>
</div>

    <!-- *************************************************************************
SECTION 3
********************************************************************************-->
<div class="section-container">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center"><h3 class="font-weight-bold  text--blue wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Our Vision</h3></div>
      <div class="col-12 text-center"><p>Our vision is to positively impact the community and be a model of technological innovation with the most satisfied customers, the happiest employees, and a society that benefits from our presence.</p></div>
    </div>
  </div>
</div>


    <!-- *************************************************************************
SECTION 4
********************************************************************************-->
<div class="section-container">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center"><h3 class="font-weight-bold  text--blue wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Our Core Values</h3></div>
      <div class="col-12 text-center"><p>At Jumpstart Solutions, we integrate the following core values into your services to ensure our clients remain satisfied.</p></div>
    </div>
  </div>
</div>


<!-- ARROW DIVISION 2-->
<div class="section-arrow-2"><div class="container"><img src="img/section-div-2.png" alt=""></div></div>




    <!-- *************************************************************************
SECTION 5
********************************************************************************-->
<div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4 "><h3 class="font-weight-bold  text--blue wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Keep Things Simple</h3></div>
        <div class="col-12 col-md-8">
          <p>Simplicity is of the utmost importance when talking about agility.  At JumpStart Solutions, we believe in focusing on simplicity rather than complexity to make things easier for you to understand and make better decisions.</p>  
        </div>
      </div>
    </div>
</div>

<!-- *************************************************************************
SECTION 6
********************************************************************************-->
<div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4 "><h3 class="font-weight-bold  text--blue wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Be Ethical</h3></div>
        <div class="col-12 col-md-8">
          <p>Jumpstart Solutions' code of ethics is second to none.  We don't believe in upselling, pressuring, or persuading our clients to invest in technology that isn't beneficial for their business.</p>
        </div>
      </div>
    </div>
    </div>
</div>


<!-- *************************************************************************
SECTION 7
********************************************************************************-->
<div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4 "><h3 class="font-weight-bold  text--blue wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Be Transparent</h3></div>
        <div class="col-12 col-md-8">
          <p>At Jumpstart Solutions, we believe in collaborating with businesses to help them stick within their budgets.  We despise hidden fees and unexpected costs just as much as you do.  Therefore, our pricing and service options are completely upfront and transparent!</p>
        </div>
      </div>
    </div>
</div>

<!-- *************************************************************************
SECTION 8
********************************************************************************-->
<div class="section-container">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4 "><h3 class="font-weight-bold  text--blue wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Exude Integrity</h3></div>
      <div class="col-12 col-md-8">
        <p>At Jumpstart??Solutions, we manage hundreds of clients daily.  We're in charge of the IT infrastructure of various small and medium-sized organisations and believe in incorporating integrity across all our operations.  You can always count on us to work in your best interests. 
        </p>
      </div>
    </div>
  </div>
</div>



<!-- *************************************************************************
SECTION 9
********************************************************************************-->

<div class="section-container-blue js__bg-navyblue d-flex flex-column justify-content-center  text-center text-light">
  <div class="container ">
    <div class="row ">
      <div class="col-12 col-lg-4">
        <h3 class="text-40 text-left d-none d-sm-none d-md-none d-lg-block wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Give Us A Try <br>Today</h3>
        <h3 class="text-40 text-left d-block d-md-block d-lg-none text-center text-2rem">Give Us A Try Today</h3>
      </div>
      <div class="col-12 col-lg-8">
          <p class="text-20 text-white pb-5">Jumpstart Solutions offers personalised IT consulting, network security, infrastructure support, and software solutions that will surely take your business to the next level.          </p>
          <!-- <button class="btn js__btn-blue border rounded-0">GET A FREE QUOTE!</button> -->
      </div>


    </div>
  </div>
</div>

  
<!-- *************************************************************************
CONTACT FORM
********************************************************************************-->
<div class="section-container">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-6 contact">
        <p class="contact-big-heading d-block d-md-none wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Get In Touch
        <br>With Us
        <br>Today</p>

        <p class="contact-big-heading d-none d-md-block wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Get In Touch With Us Today</p>

        <p class="pt-5 wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Leave us a message or email us at [insert email], and one of our customer support representatives will get in touch with you to answer any questions you may have.</p>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-6">
        <!-- contact form -->
        <div class="wow animated fadeInRight pt-5 pt-md-0" data-wow-delay=".2s">
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
              <!-- Form Submit -->
              <div class="form-submit mt-5">
                  <button class="btn js__btn-navyblue border rounded-0" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i> Send Message</button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div>
                  <div class="clearfix"></div>
              </div>
              
          </form>
      </div>


      </div>
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
