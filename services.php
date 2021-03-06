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
    <meta name="description" content="Are you looking for top-of-the-line IT consulting, network security, infrastructure support, and software solutions?  If yes, look no further than Jumpstart Solutions!">
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
    <title>Services | Jumpstart Solutions | Network Security | IT Consulting | Software Solutions</title>
  </head>
  <body>
    <!-- NAVBAR 1-->
    <nav
      class="z-navbar1 navbar navbar-expand-lg py-3 navbar-dark shadow- fixed-top onscroll-show"
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
            <li class="nav-item z-nav-item">
              <a href="index.html" class="nav-link"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item z-nav-item">
              <a href="about.html" class="nav-link scroll-link">About</a>
            </li>
            <li class="nav-item z-nav-item active">
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
            <li class="nav-item z-nav-item">
              <a href="index.html" class="nav-link"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item z-nav-item">
              <a href="about.html" class="nav-link scroll-link">About</a>
            </li>
            <li class="nav-item z-nav-item active">
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
          <div class="col-12 col-lg-6">
            <p class="text-light text-40 wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Services</p>
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
          <div class="col-12 col-md-4">
            <h3 class="font-weight-bold text--blue wow animate__animated animate__fadeInDown " data-wow-delay="500ms">Our Services</h3>
          </div>
          <div class="col-12 col-md-8">
            <p>
              Your company requires guidance and??practical solutions??to manage
              today's complex??IT??environment that is highly susceptible to
              recurring issues. With our multi-disciplined and experienced staff
              and tailored solutions, Jumpstart Solutions is the best IT firm to
              provide your business with excellent, personalised IT services
              such as network security, software solutions, infrastructure
              support, and IT consulting. Our expertise and knowledge in IT have
              helped businesses of all sizes navigate IT challenges, reduce
              operational costs, and prepare for what's to come next.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- ARROW DIVISION 2-->
    <div class="section-arrow-2">
      <div class="container"><img src="img/section-div-2.png" alt="" /></div>
    </div>

    <!-- *************************************************************************
TITLE
********************************************************************************-->
    <div class="section-container">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h3 class="font-weight-bold text--blue wow animate__animated animate__fadeInDown " data-wow-delay="500ms">What We Offer</h3>
          </div>
          <div class="vertical-line-container">
            <div class="vertical-line"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- *************************************************************************
SECTION 3
********************************************************************************-->
    <div class="section-container">
      <div class="js__bg-navyblue">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-4 pt-3 pb-0 pt-md-5 text-white">
              <h3>IT Consulting</h3>
            </div>
            <div class="col-12 col-md-8 pt-0 pb-3 pt-md-5">
              <p class="text-white">
                Are You Looking For Expert Advice On Upgrading, Implementing, or
                Getting the Most of Your Business's IT Infrastructure?
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col-12">
            <p>
              Having access to a large pool of talented employees is essential
              to any growth strategy. Count on Jumpstart Solutions to supply you
              with an extensive knowledge base to draw from when you require
              proven expertise to help advance your technological operations.
            </p>
            <p>
              We provide IT consulting services to ensure your IT infrastructure
              is aligned with your business's objectives and goals. Use our
              expertise to??manage the ever-changing landscape of technology.
              Furthermore, our IT management and executive consultants will
              guide you through significant organizational changes such as due
              diligence on new IT software, core systems, mergers, and much
              more. We will take care of your IT separation planning,
              assessments, and strategy.
            </p>
          </div>

          <div class="col-12 mt-5">
            <h3 class="font-weight-bold text--blue">We can help you:</h3>
          </div>
          <div class="col-12">
            <ul>
              <li>
                <p>
                  Analyse the current state of your security practices, disaster
                  recovery, and overall IT infrastructure
                </p>
              </li>
              <li>
                <p>Improve business practices vai top-notch IT consulting</p>
              </li>
              <li>
                <p>Get critical hardware, software, and vendor advice</p>
              </li>
              <li>
                <p>
                  Optimize your IT strategy and budgeting, organizational
                  structure, software, hardware, and IT infrastructure
                </p>
              </li>
            </ul>
          </div>
        </div>
        <!-- <div class="col-12">
          <div class="d-flex flex-row-reverse">
            <button class="btn js__btn-navyblue border rounded-0">
              IT CONSULTING
            </button>
          </div>
        </div> -->
      </div>
    </div>

    <!-- *************************************************************************
SECTION 4
********************************************************************************-->
    <div class="section-container">
      <div class="js__bg-navyblue">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-4 pt-3 pb-0 pt-md-5 text-white">
              <h3>Network Security</h3>
            </div>
            <div class="col-12 col-md-8 pt-0 pb-3 pt-md-5">
              <p class="text-white">
                Are You Looking For Fast, Secure, and Reliable Connectivity
                Around the Office??For Excellent Control, Visibility, Security,
                and Performance
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col-12">
            <p>
              Secure digital data and systems are at the top of most companies'
              IT to-do lists. New vulnerabilities and dangers arise every day
              that put these systems and their data at risk. In light of these
              facts, a thorough IT security strategy is essential.
            </p>
            <p>
              We make it possible to respond quickly and reliably if a network
              security issue arises. At Jumpstart Solutions, we offer holistic
              network security services that allow you to protect your IT
              infrastructure against threats and attacks and respond proactively
              in case of breakdowns or security breaches. As a trusted name in
              network security, our team will work with your business to develop
              strategies that cover your business's network security needs. Our
              methods consists of planning for disasters and ensuring business
              continuity during these events.
            </p>
          </div>

          <div class="col-12 mt-5">
            <h3 class="font-weight-bold text--blue">
              With Jumpstart Solutions' network security services, you will get:
            </h3>
          </div>
          <div class="col-12">
            <ul>
              <li>
                <p>Expert advice from a top-notch network security team</p>
              </li>
              <li>
                <p>
                  Top-of-the-line network security applications and software
                </p>
              </li>
              <li>
                <p>
                  Consolidated and centralised network management across various
                  network access points
                </p>
              </li>
              <li>
                <p>
                  Quick response in case of cybersecurity or in-house network
                  breaches and breakdowns
                </p>
              </li>
              <li>
                <p>
                  An understanding of the what, who, why, and where of network
                  security
                </p>
              </li>
              <li>
                <p>
                  Threat detection through curated threat intelligence, advanced
                  analytics, open-source data collection, and behavioural
                  analysis
                </p>
              </li>
            </ul>
          </div>
        </div>
        <!-- <div class="col-12">
          <div class="d-flex flex-row-reverse">
            <button class="btn js__btn-navyblue border rounded-0">
              Network Security
            </button>
          </div>
        </div> -->
      </div>
    </div>

    <!-- *************************************************************************
SECTION 5
********************************************************************************-->
    <div class="section-container">
      <div class="js__bg-navyblue">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-4 pt-3 pb-0 pt-md-5 text-white">
              <h3>Infrastructure Support</h3>
            </div>
            <div class="col-12 col-md-8 pt-0 pb-3 pt-md-5">
              <p class="text-white">
                Are You Searching For Excellent IT Infrastructure Support To
                Fill Your Business's IT infrastructure Gaps?
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col-12">
            <p>
              It is of the utmost importance for an organisation's computer
              systems and networks to perform correctly and effectively to
              support its day-to-day activities. It is necessary for a
              technological investment strategy that will either yield a return
              on investment or generates positive earned value supporting the
              organisation's objectives. After all, your business's
              IT??Infrastructure solutions must also be able to adapt to changing
              conditions.
            </p>
            <p>
              Enterprise-wide IT infrastructure support and communications are
              Jumpstart Solutions' strengths. We ensure that your business's IT
              infrastructure needs and requirements are met by designing,
              building, and maintaining a certified and compliant
              infrastructure. We will take care of your IT infrastructure by
              modernising technologies and platforms for enhanced scalability
              and agility with the help of our top infrastructure support
              services.
            </p>
          </div>

          <div class="col-12 mt-5">
            <h3 class="font-weight-bold text--blue">
              With Jumpstart solutions, you will get IT infrastructure support
              services, including:
            </h3>
          </div>
          <div class="col-12">
            <ul>
              <li>
                <p>Network documentation for better identification of issues</p>
              </li>
              <li>
                <p>Interoperability with other business software</p>
              </li>
              <li>
                <p>Implementation of infrastructure processes and policies</p>
              </li>
              <li>
                <p>Outsourcing, IT support, audits, and help desk operation</p>
              </li>
              <li>
                <p>Server administration and management service</p>
              </li>
              <li>
                <p>remote and onsite help desk management and development.</p>
              </li>
              <li>
                <p>Technology transformation, acquisition, and research</p>
              </li>
              <li>
                <p>Systems management and desktop support</p>
              </li>
              <li>
                <p>Network security planning and auditing</p>
              </li>
              <li>
                <p>
                  Various network services to fulfil your IT infrastructure
                  needs
                </p>
              </li>
              <li>
                <p>
                  Network capacity planning, performance monitoring and
                  assessment.
                </p>
              </li>
              <li>
                <p>
                  Ongoing infrastructure support to address all IT inquiries and
                  technical support requests
                </p>
              </li>
            </ul>
          </div>
        </div>
        <!-- <div class="col-12">
          <div class="d-flex flex-row-reverse">
            <button class="btn js__btn-navyblue border rounded-0">
              Infrastructure Support
            </button>
          </div>
        </div> -->
      </div>
    </div>

    <!-- *************************************************************************
SECTION 6
********************************************************************************-->
    <div class="section-container">
      <div class="js__bg-navyblue">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-4 pt-3 pb-0 pt-md-5 text-white">
              <h3>Software Solutions</h3>
            </div>
            <div class="col-12 col-md-8 pt-0 pb-3 pt-md-5">
              <p class="text-white">
                Are You Searching For All-In-One Software Solutions That Make
                Business Tasks and Activities A lot Easier?
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col-12">
            <p>
              At Jumpstart Solutions, we empower our customers by guiding them
              towards the right, market-ready software solutions that allow them
              to fulfil their software needs and requirements. Our primary focus
              is on application licensing and advice, ensuring that our clients
              get scalable software solutions that fit seamlessly into their
              business's existing IT infrastructure setups, providing long-term
              value. We pride ourselves on providing customised software
              implementation to meet your business's requirements. As your
              business expands, we will guide and help you get the most out of
              your IT investment today and in the foreseeable future. Our
              dedicated staff members will help ensure a smooth transition to
              your new software solutions.
            </p>
            <p>
              Our implementation process includes user training, preparation,
              support, system review and testing, software setup, data
              migration, onsite software consultancy, and virtual support. In
              addition, our team of dedicated employees will continue to work
              with you after your new software goes live to ensure that you and
              your staff are comfortable with the new systems in place.
            </p>
          </div>

          <div class="col-12 mt-5">
            <h3 class="font-weight-bold text--blue">
              With Jumpstart Solutions' software solutions, you will get:
            </h3>
          </div>
          <div class="col-12">
            <ul>
              <li>
                <p>Onsite and remote software troubleshooting</p>
              </li>
              <li>
                <p>Quick support for bugs and other issues</p>
              </li>
              <li>
                <p>Ongoing maintenance to ensure that your system runs efficiently</p>
              </li>
              <li>
                <p>Consultation to ensure that you're using the most up-to-date software</p>
              </li>
              <li>
                <p>Software licensing and advice on what software will work best for your business's needs</p>
              </li>
              <li>
                <p>Innovative software training for your employees</p>
              </li>
            </ul>
          </div>
        </div>
        <!-- <div class="col-12">
          <div class="d-flex flex-row-reverse">
            <button class="btn js__btn-navyblue border rounded-0">Software Solutions</button>
          </div>
        </div> -->
      </div>
    </div>

<!-- ARROW DIVISION 2-->
<div class="section-arrow-2"><div class="container"><img src="img/section-div-2.png" alt=""></div></div>





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
          <div class="col-12 col-lg-4">
            <img
              src="img/logo.png"
              width="45"
              alt=""
              class="d-inline-block align-middle mr-2"
            />
          </div>

          <div class="col-12 col-lg-8">
            <div class="z-footer-link mt-5 footer-link">
              <ul
                class="navbar-nav z-navbar-nav d-flex flex-row justify-content-center text-uppercase"
              >
                <li class="nav-item z-nav-item">
                  <a href="#" class="nav-link text-light"
                    >Home <span class="sr-only">(current)</span></a
                  >
                </li>
                <li class="nav-item z-nav-item">
                  <a href="#" class="nav-link text-light scroll-link">About</a>
                </li>
                <li class="nav-item z-nav-item">
                  <a href="#" class="nav-link text-light scroll-link"
                    >Services</a
                  >
                </li>
                <li class="nav-item z-nav-item">
                  <a href="#" class="nav-link text-light scroll-link"
                    >Testimonials</a
                  >
                </li>
                <li class="nav-item z-nav-item">
                  <a
                    class="nav-link text-light scroll-link"
                    data-toggle="modal"
                    data-target="#exampleModalCenter"
                    >Contact Us</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="footer-arr">
            <p class="text-white">
              2022 ?? Jumpstart Solutions Services All Rights Reserved.
            </p>
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
