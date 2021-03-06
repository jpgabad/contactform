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
    <div class="js__header">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-6	col-xl-6 js__header-content-box">
            <h1 class="text-white wow animate__animated animate__fadeInDown " data-wow-delay="100ms">Jumpstart Solutions</h1>
            <h5 class="text-white text-nowrap wow animate__animated animate__fadeInDown " data-wow-delay="300ms">
              Uncomplicating Business IT Solutions For You
            </h5>
            <p class="text-white wow animate__animated animate__fadeInDown " data-wow-delay="700ms">
              Are you looking for cost-efficient IT solutions that can bolster
              your business??? IT infrastructure and help you leverage the latest
              technological advancements?
            </p>
            <button class="btn btn-outline-light border rounded-0 wow animate__animated animate__fadeInDown " data-wow-delay="900ms" onClick="parent.location='services.html'">
              FIND OUT MORE
            </button>
          </div>
          <div class="col-6 col-md-12  col-lg-6	col-xl-6  d-none d-sm-none d-md-none d-lg-block" >
            <img class="wow animate__animated animate__fadeIn " data-wow-delay="600ms"
              src="img/header-bg.png"
              alt="Designed by pikisuperstar / Freepik"
              class="img-fluid responsive"
              height="100%"
            />
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
      <div class="col-8 col-sm-8 col-md-8 "><p class="wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Jumpstart Solutions offers comprehensive IT consulting, software solutions, network security, and infrastructure support services that can transform how you work. Everything we do is motivated by determination, dedication, and passion. </p></div>
      <div class="col-4  col order-first order-md-last"><img class="img-fluid wow animate__animated animate__fadeIn " data-wow-delay="500ms" src="img/it.png" alt=""></div>
    </div>
  </div>
</div>

<!-- ARROW DIVISION -->
<div class="section-arrow"><div class="container"><img src="img/section-div-rl.png" alt=""></div></div>


    <!-- *************************************************************************
SECTION 2
********************************************************************************-->
<div class="section-container">
  <div class="container">
    <div class="row">
      <div class="col-4"><img class="wow animate__animated animate__fadeIn " data-wow-delay="500ms" src="img/team.png" alt=""></div>
      <div class="col-8"><p class="wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Our highly-skilled, devoted team will treat your business as our own. We can also identify your organization???s goals, needs, and challenges and assist you in developing business technology that supports your business objectives. </p></div>
      
    </div>
  </div>
</div>

<!-- ARROW DIVISION -->
<div class="section-arrow"><div class="container"><img src="img/section-div-lr.png" alt=""></div></div>


    <!-- *************************************************************************
SECTION 3
********************************************************************************-->

<div class="section-container">
  <div class="container">
    <div class="row">
      <div class="col-8 col-sm-8 col-md-8"><p class="wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Most importantly, we can simplify IT for you, which means we'll ensure all the complicated and difficult-to-understand??components of a solution are well-explained, so you know what technologies you need, why you need them, and how they work.</p></div>
      <div class="col-4 col order-first order-md-last"><img class="wow animate__animated animate__fadeIn " data-wow-delay="500ms" src="img/simplify.png" alt=""></div>
    </div>
  </div>
</div>


<!-- *************************************************************************
SECTION 4
********************************************************************************-->


<div class="section-container-navyblue js__bg-navyblue d-flex flex-column justify-content-center  text-center text-light">
  <div class="container ">
    <div class="row ">
      <div class="col-12"><h2 class="wow animate__animated animate__fadeInDown " data-wow-delay="500ms" >With Jumpstart solutions, you can rest assured that you will get the most out of your investment.</h2></div>
    </div>
  </div>
</div>



<!-- *************************************************************************
SECTION 5
********************************************************************************-->

<div class="hexa-container">
  <div class="hexa--bg"><img src="img/hexa.png" alt=""></div>
  </div>
<div class="section-container ">
  
  <div class="container">
    <div class="row">
      <h2 class="font-weight-bold text--blue wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Our Services</h2>
      <p class="wow animate__animated animate__fadeInDown " data-wow-delay="700ms">Allow Jumpstart Solutions to take care of your business's??IT demands while maintaining a high level of dependability. Our business IT solutions include <span class="text--blue font-weight-bold">software solutions</span>, <span class="text--blue font-weight-bold">infrastructure support</span>, <span class="text--blue font-weight-bold">IT consulting</span>, and <span class="text--blue font-weight-bold">network security</span>.
      </div>
    </p>
  </div>

</div>




<!-- *************************************************************************
SECTION 6
********************************************************************************-->
<div class="section-container">
  <div class="container">
    <div class="row inline">
      <div class="horizontal">
        <div class="col-4 col-sm-12 col-md-4 col-lg-4 wow animate__animated animate__fadeInDown " data-wow-delay="500ms"><h3 class="font-weight-bold text--blue d-flex flex-nowrap">Infrastructure Support</h3></div>
        <div class="col-8 d-none d-md-block col-md-8 col-lg-8"><div class="horizontal-line"></div></div>
        
        
      </div>
      
      <div class="row">
        <div class="col-2 "><img class="mx-auto wow animate__animated animate__fadeInDown " data-wow-delay="500ms" src="img/is.png" alt=""></div>
        <div class="col-10"><p class="wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Getting your core infrastructure right is crucial to your success. With our infrastructure support services,??we will set the standard for your IT infrastructure by modernizing your network and allowing it to reach its full potential.</p></div>
      </div>
      </div>
    </p>
  </div>
</div>


<!-- *************************************************************************
SECTION 7
********************************************************************************-->
<div class="section-container">
  <div class="container">
    <div class="row inline">
      <div class="horizontal">
        <div class="col-4 col-sm-12 col-md-4 col-lg-4 col order-first order-md-last "><h3 class="font-weight-bold text--blue  text-left  text-md-right wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Software Solutions</h3></div>
        <div class="col-8 d-none d-md-block col-md-8 col-lg-8 col order-last order-md-first"><div class="horizontal-line"></div></div>
        
        
      </div>
      <div class="row">
        <div class="col-2 col order-first order-md-last "><img class="wow animate__animated animate__fadeInDown " data-wow-delay="500ms" class="mx-auto"  src="img/ss.png" alt=""></div>
        <div class="col-10  col order-last order-md-first"><p class=" text-left text-md-right wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Jumpstart Solution's qualified specialists will get to know your business inside out so we can advise you on how you can better achieve your goals. We design software??solutions??that will help you overcome??obstacles and streamline operations. Our goal is to provide you with business-critical software solutions to ensure that your IT infrastructure is solid and secure.</p></div>
      </div>
      </div>
    </p>
  </div>
</div>


<!-- *************************************************************************
SECTION 8
********************************************************************************-->
<div class="section-container">
  <div class="container">
    <div class="row inline">
      <div class="horizontal">
        <div class="col-4 col-sm-12 col-md-4 col-lg-4"><h3 class="font-weight-bold text--blue d-flex flex-nowrap wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Network Security</h3></div>
        <div class="col-8 d-none d-md-block col-md-8 col-lg-8"><div class="horizontal-line"></div></div>
        
        
      </div>
      
      <div class="row">
        <div class="col-2 "><img class="mx-auto wow animate__animated animate__fadeInDown " data-wow-delay="500ms" src="img/ns.png" alt=""></div>
        <div class="col-10"><p class="wow animate__animated animate__fadeInDown " data-wow-delay="500ms">At Jumpstart Solutions, we understand that as your company grows, so does the number of vulnerabilities it faces in terms of additional devices to manage, distributed data to safeguard, or users to placate. However, we will ensure your business remains safe and secure and that you have a plan in place in case network security issues arise.</p></div>
      </div>
      </div>
    </p>
  </div>
</div>


<!-- *************************************************************************
SECTION 9
********************************************************************************-->
<div class="section-container">
  <div class="container">
    <div class="row inline">
      <div class="horizontal">
        <div class="col-4 col-sm-12 col-md-4 col-lg-4 col order-first order-md-last "><h3 class="font-weight-bold text--blue  text-left  text-md-right wow animate__animated animate__fadeInDown " data-wow-delay="500ms">IT Consulting</h3></div>
        <div class="col-8 d-none d-md-block col-md-8 col-lg-8 col order-last order-md-first"><div class="horizontal-line"></div></div>
        
        
      </div>
      <div class="row">
        <div class="col-2 col order-first order-md-last "><img  class="mx-auto animate__backInDown animate__animated animate__fadeInDown " data-wow-delay="500ms"  src="img/ic.png" alt=""></div>
        <div class="col-10  col order-last order-md-first"><p class=" text-left text-md-right wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Jumpstart Solutions??provides  IT consulting services and helps you??plan your??software and business development goals. Whether it's planning for future versions of your product or developing new ones, Jumpstart is up to the task.</p></div>
      </div>
      </div>
    </p>
  </div>
</div>

<!-- ARROW DIVISION -->
<div class="section-arrow"><div class="container"><img src="img/section-div-2.png" alt=""></div></div>

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
