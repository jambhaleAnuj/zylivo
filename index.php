<!DOCTYPE html>
<html>

<head>
  <title>Bookly - Bookstore eCommerce Website Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="./css/plugins.min.css" />
  <link rel="stylesheet" href="./css/vendor.css" />
  <link rel="stylesheet" href="./css/style.css" />



  <script src="assets/js/main.js"></script>
  <script src="./swiper/swiper-element-bundle.min.js"></script>
  <script src="./swiper/swiper-bundle.min.js"></script>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Maven+Pro&family=Nunito&display=swap");

    .stats-section {
      background-color: #f8f9fa;
      padding: 20px 0;
    }

    .rating {
      color: #f5c518;
    }

    .subtext {
      color: #6c757d;
    }

    .clutch-review {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 0.6rem;
    }

    .clutch-title {
      font-size: 0.6rem;
      color: #6c757d;
      font-weight: 500;
      margin-bottom: 0px;
      padding-bottom: 0px;
    }

    .clutch-logo {
      font-size: 1.6rem;
      font-weight: bold;
      color: #0d1b38;
      margin-top: 0px !important;
      padding-top: 0px !important;
    }

    .clutch-logo span {
      color: #e74c3c;
      /* Orange-red dot in the logo */
    }

    .star-rating {
      color: #ffc107;
      font-size: 1rem;
    }

    .reviews {
      color: #6c757d;
    }
  </style>

</head>

<body>
  <div id="page" class="section">
    <!-- Header Section Start -->
    <div class="header-section sticky-header section border-bottom-0">
      <div class="header-inner">
        <div class="container position-relative">
          <div class="row justify-content-between align-items-center">
            <!-- Header Logo Start -->
            <div class="col-xl-2 col-auto order-0">
              <div class="header-logo">
                <a href="index.php">
                  <img
                    class="dark-logo"
                    src="./images/logo/8848digital-logo-black.png"
                    alt="8848 Digital LLP"
                    style="max-height: 50px; width: auto" />
                </a>
              </div>
            </div>
            <!-- Header Logo End -->

            <!-- Header Main Menu Start -->
            <div
              class="col-auto col-xl d-flex align-items-center justify-content-xl-end justify-content-end order-2 order-xl-1">
              <div class="menu-column-area d-none d-xl-block position-static">
                <nav class="site-main-menu">
                  <ul>
                    <li>
                      <a href="about-us"><span class="menu-text">Who are we</span></a>
                    </li>
                    <li>
                      <a href="erp-solutions"><span class="menu-text">What we do</span></a>
                    </li>
                    <li class="has-children">
                      <a href="/#products"><span class="menu-text">Products</span></a>
                      <!-- <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                  <ul class="sub-menu">
                      <li><a href="https://cardsplus.in/" target="_blank"><span class="menu-text">CardsPlus</span></a></li>
                      <li><a href="digitalcatalog/index.php" target="_blank"><span class="menu-text">Digital Catalog</span></a></li>
                  </ul> -->
                    </li>
                    <li>
                      <a
                        href="https://careers.1OEeK9c1JAVB.com/"
                        target="_blank"><span class="menu-text">Careers</span></a>
                    </li>
                    <!-- <li>
                  <a href="our-work"><span class="menu-text">Our Work</span></a>
                </li> -->
                    <li>
                      <a href="contact-us"><span class="menu-text">Contact us</span></a>
                    </li>
                  </ul>
                </nav>
              </div>

              <!-- Header Mobile Menu Toggle Start -->
              <div class="header-mobile-menu-toggle d-xl-none ml-sm-2">
                <button class="toggle">
                  <i class="icon-top"></i>
                  <i class="icon-middle"></i>
                  <i class="icon-bottom"></i>
                </button>
              </div>
              <!-- Header Mobile Menu Toggle End -->
            </div>
            <!-- Header Main Menu End -->
          </div>
        </div>
      </div>
    </div>


    </header>


    <!-- #### -->

    <div class="bg-dark py-5" style="padding-top: 30px">
      <swiper-container
        class="mySwiper"
        pagination="true"
        pagination-clickable="true"
        slides-per-view="auto"
        centered-slides="true"
        space-between="40"
        loop="true"
        loopedslides="1"
        createelements="true"
        keyboard="true"
        scrollbar="true"
        style="margin-top: 80px">
        <swiper-slide class="zoom-background">
          <div
            class="intro-section section overlay slider_imgs"
            data-bg-color="#000"
            data-bg-image="assets/images/hero-image/building-future-ready-businesses-with-8848-digital.jpg">
            <div class="container">
              <div class="row row-cols-lg-1 row-cols-1">
                <div class="col align-self-center">
                  <a
                    href="about-us"
                    class="text-white ps-2"
                    style="margin-top: 0px">
                    <div
                      class="intro-content mt-xl-3 mt-lg-3 mt-md-3 mt-sm-3 mt-xs-3">
                      <h2 class="sections_heading">
                        Building future ready businesses
                      </h2>
                      <div
                        class="sections_heading_desc mb-1 d-lg-block d-md-block d-none">
                        <p>
                          Empowering organizations to thrive in tomorrow's
                          landscape through strategic innovation and
                          adaptability.
                        </p>
                      </div>
                      <span
                        class="learn_more_link d-lg-block d-md-block d-none">
                        Learn More
                      </span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide class="zoom-background">
          <div
            class="intro-section section overlay slider_imgs"
            data-bg-color="#000"
            data-bg-image="assets/images/hero-image/compliance-lifecycle-transformed.jpg">
            <div class="container">
              <div class="row row-cols-lg-1 row-cols-1">
                <!-- Intro One Content Start -->
                <div class="col align-self-center max-mb-30">
                  <a
                    href="https://1OEeK9c1JAVB.com/cleartax/"
                    target="_blank"
                    class="text-white"
                    style="margin-top: 0px">
                    <div
                      class="intro-content mt-xl-3 mt-lg-3 mt-md-3 mt-sm-3 mt-xs-3">
                      <h2 class="sections_heading">
                        Compliance lifecycle transformed for enterprises
                      </h2>
                      <div
                        class="sections_heading_desc mb-1 d-lg-block d-md-block d-none">
                        <p>
                          Revolutionize your approach to compliance. Discover
                          a lifecycle that works for your business.
                          #ComplianceTransformed #ERPNext
                        </p>
                      </div>
                      <span
                        class="learn_more_link d-lg-block d-md-block d-none">
                        Learn More
                      </span>
                    </div>
                  </a>
                </div>
                <!-- Intro One Content End -->
              </div>
            </div>
          </div>
        </swiper-slide>

        <swiper-slide class="zoom-background">
          <div
            class="intro-section section overlay slider_imgs"
            data-bg-color="#000"
            data-bg-image="assets/images/hero-image/new-era-erp-1.jpg">
            <div class="container">
              <div class="row row-cols-lg-1 row-cols-1">
                <!-- Intro One Content Start -->
                <div class="col align-self-center">
                  <a
                    href="services"
                    class="text-white"
                    style="margin-top: 0px">
                    <div
                      class="intro-content mt-xl-3 mt-lg-3 mt-md-3 mt-sm-3 mt-xs-3">
                      <h2 class="sections_heading">
                        A new ERA of ERP for everyone
                      </h2>
                      <div
                        class="sections_heading_desc mb-1 d-lg-block d-md-block d-none">
                        <p>
                          In a volatile world, 8848 Digital establishes itself
                          as the trusted partner for enterprises aiming for
                          agility, resilience, and streamlined operations.
                        </p>
                      </div>
                      <span
                        class="learn_more_link d-lg-block d-md-block d-none">
                        Learn More
                      </span>
                    </div>
                  </a>
                </div>
                <!-- Intro One Content End -->
              </div>
            </div>
          </div>
        </swiper-slide>

        <swiper-slide class="zoom-background">
          <div
            class="intro-section section overlay slider_imgs"
            data-bg-color="#000"
            data-bg-image="assets/images/hero-image/banking-beyond-boundaries.jpg">
            <div class="container">
              <div class="row row-cols-lg-1 row-cols-1">
                <div class="col align-self-center">
                  <a
                    href="https://1OEeK9c1JAVB.com/summit"
                    target="_blank"
                    class="text-white"
                    style="margin-top: 0px">
                    <div
                      class="intro-content mt-xl-3 mt-lg-3 mt-md-3 mt-sm-3 mt-xs-3">
                      <h2 class="sections_heading">
                        Business beyond <br />
                        Boundaries
                      </h2>
                      <div
                        class="sections_heading_desc mb-1 d-lg-block d-md-block d-none">
                        <p>
                          Navigating Global Markets, Embracing Technological
                          Disruption, and Cultivating a Culture of Limitless
                          Innovation for Sustainable Growth
                        </p>
                      </div>
                      <span
                        class="learn_more_link d-lg-block d-md-block d-none">
                        Learn More
                      </span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </swiper-slide>

        <swiper-slide class="zoom-background">
          <div
            class="intro-section section overlay slider_imgs"
            data-bg-color="#000"
            data-bg-image="assets/images/hero-image/grow.jpg">
            <div class="container">
              <div class="row row-cols-lg-1 row-cols-1">
                <div class="col align-self-center">
                  <a
                    href="contact-us"
                    class="text-white"
                    style="margin-top: 0px">
                    <div
                      class="intro-content mt-xl-3 mt-lg-3 mt-md-3 mt-sm-3 mt-xs-3">
                      <h2 class="sections_heading">
                        On your mark, <br />get set GROW
                      </h2>
                      <div
                        class="sections_heading_desc mb-1 d-lg-block d-md-block d-none">
                        <p>
                          We know large or small, every business is unique.
                          Whether you need a lot or little, we have a solution
                          tailored to your needs &amp; goals.
                        </p>
                      </div>
                      <span
                        class="learn_more_link d-lg-block d-md-block d-none">
                        Learn More
                      </span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </swiper-slide>
      </swiper-container>
    </div>




    <div class="container stats-section mw-100" style="padding-left: 8rem; padding-right:8rem ;">
      <div class="row text-start">
        <div class="col text-start">
          <div class="container">
            <div class="clutch-review">
              <div>
                <div class="clutch-title">REVIEWED ON</div>
                <div class=""><img src="./images/icons/clutch-co-vector-logo.png" width="70" alt=""></div>
              </div>
              <div>
                <div class="star-rating text-center">
                  ★★★★★
                </div>
                <div class="reviews text-center">
                  31 REVIEWS
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col text-start">
          <h4 class="mb-1 text-start">20 Years</h4>
          <small class="text-muted text-start">Proven Track Record</small>
        </div>
        <div class="col text-start">
          <h4 class="mb-1 text-start">98%</h4>
          <small class="text-muted text-start">Customer Satisfaction</small>
        </div>
        <div class="col text-start">
          <h4 class="mb-1">1,500</h4>
          <small class="text-muted">Projects We Have Completed</small>
        </div>
        <div class="col text-start">
          <h4 class="mb-1">3 Mins</h4>
          <small class="text-muted">Average Answer Time</small>
        </div>
      </div>
    </div>

    <!-- ##### -->

    <!-- Mission | Vision Section start-->
    <!-- <div class="container bg-dark "> -->
    <swiper-container
      class="mySwiper navigation_swiper_cont container mt-5"
      pagination="true"
      loop="true">
      <swiper-slide id="visionid" class="bg-dark">
        <ul
          class="swiper_ul_li pb-5 bg-dark px-0 text-white"
          style="padding-left: 0px">
          <!-- <li class="d-flex justify-content-between w-100">
                    
                    <h2 class="text-white section-title mb-2 w-75">Vision</h2>
                    <h2 class="text-gray section-title mb-2  text-end swiper-button-next">Mission</h2>
                    <hr />
                </li> -->
          <li>
            <h2 class="text-white section-title mb-2 w-75">Our Vision</h2>
            <hr />
          </li>
          <li
            style="font-family: Maven Pro; font-size: 28px; line-height: 38px"
            class="mb-6 fs-lg-0 fs-5">
            "To be a trusted global leader in digital transformations,
            recognized for our exceptional expertise, collaborative
            partnerships, and commitment to driving sustainable growth for
            businesses."
          </li>
        </ul>
      </swiper-slide>

      <swiper-slide class="bg-dark" id="missionid2">
        <ul class="swiper_ul_li pb-5 px-0 bg-dark text-white">
          <!-- <li class="d-flex justify-content-between w-100">
                    <h2 class="text-white section-title mb-2 w-75">Mission</h2>
                    <h2 class="text-gray section-title mb-2  text-end">Vision</h2>
                    <hr />
                </li> -->
          <li>
            <h2 class="text-white section-title mb-2 w-75">Our Mission</h2>
            <hr />
          </li>
          <li
            style="font-family: Maven Pro; font-size: 28px; line-height: 38px">
            "To empower businesses with innovative digital solutions, enabling
            them to achieve their full potential through seamless technology
            integrations and transformative experiences."
          </li>
        </ul>
      </swiper-slide>
    </swiper-container>
    <!-- </div> -->

    <!-- Who are we Section Start -->
    <div
      class="section section-padding-t90 section-padding-bottom-200 bg-white who_r_we_section">
      <div class="container pb-lg-0 pb-5">
        <!-- Section Title Start -->
        <div class="section-title text-center" data-aos="fade-up">
          <h2 class="title">Who are we</h2>
          <p class="sub-title">
            Your one-stop solution for all things digital
          </p>
        </div>
        <!-- Section Title End -->
        <!-- About Wrapper Start -->
        <div class="row">
          <!-- About Image Area Start -->
          <!-- About Image Area Start -->
          <!-- About Start -->
          <div class="col-xl-5 col-lg-6 col-12" data-aos="fade-up">
            <!-- About Content Area Start -->
            <div class="about-content-area mt-lg-0 mt-0">
              <!-- Section Title Two Start -->
              <div class="section-title-two">
                <span class="sub-title">Your Digital Transformation Partner</span>
                <h3 class="title">
                  Named after the height of Mount Everest, we aim to set the
                  pinnacle of digital excellence
                </h3>
              </div>
              <!-- Section Title Two End -->

              <p class="section_para">
                We are a team of professionals committed to transforming the
                digital landscape for businesses and individuals alike. We
                believe in the power of innovation and technology, and their
                potential to make life easier, more meaningful, and efficient.
              </p>

              <a
                class="btn btn-primary btn-hover-secondary mt-xl-8 mt-lg-8 mt-md-6 mt-4 mb-lg-0 mb-5"
                href="/about-us">Get to know us</a>
            </div>
            <!-- About Content Area Start -->
          </div>
          <!-- About Start -->
          <div class="col-xl-7 col-lg-6 col-12" data-aos="fade-up">
            <div class="about-image-area">
              <div class="about-image js-tilt">
                <img
                  src="./images/about/home-one-about/home_agency_about_1.jpg"
                  alt="" />
              </div>
              <div class="about-image js-tilt">
                <img
                  src="./images/about/home-one-about/home_agency_about_2.jpg"
                  alt="" />
              </div>
              <!-- Animation Shape Start -->
              <div class="shape shape-1 scene">
                <span data-depth="1"><img
                    src="./images/shape-animation/about-shape-1.png"
                    alt="" /></span>
              </div>
              <!-- Animation Shape End -->
            </div>
          </div>
        </div>
        <!-- About Wrapper End -->
      </div>
    </div>

    <!-- Who are we Section End -->
    <!-- Mission | Vission Section end-->
    <div class="container bg-dark mt-5">
      <div class="section-title mb-2" data-aos="fade-up">
        <h2
          class="title text-white">
          Services
        </h2>
        <hr class=" text-white mb-0" />
      </div>
      <swiper-container
        class="mySwiper solutions_tailored_slider"
        navigation="true"
        loop="true"
        space-between="30"
        slides-per-view="3">
        <swiper-slide class="bg-dark">
          <div
            class="swiper_slide_bg_1 mt-3 w-100 d-flex align-items-start flex-column py-5 pt-1">
            <div class="mb-auto p-2 ps-1 w-100">
              <div class="mx-auto text-start px-1">
                <span
                  class="badge badge-white bg-dark text-white p-2 px-4 text-uppercase"
                  style="font-size: 13px; border-radius: 9px">Financial Services</span>
              </div>
            </div>
            <div class="p-2">
              <h4 class="text-white">
                Simplifying modern <br />
                insurance
              </h4>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide class="bg-dark">
          <div
            class="swiper_slide_bg_2 mt-3 w-100 d-flex align-items-start flex-column py-5 pt-1">
            <div class="mb-auto p-2 w-100">
              <div class="mx-auto text-start px-1">
                <span
                  class="badge badge-white bg-dark text-white p-2 px-3 rounded-5 text-uppercase"
                  style="font-size: 13px; border-radius: 9px">Management Consulting</span>
              </div>
            </div>
            <div class="p-2">
              <h4 class="text-white">
                Streamlined solutions for strategic success
              </h4>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide class="bg-dark">
          <div
            class="swiper_slide_bg_3 mt-3 w-100 d-flex align-items-start flex-column py-5 pt-1">
            <div class="mb-auto p-2 w-100">
              <div class="mx-auto text-start px-1">
                <span
                  class="badge badge-white bg-dark text-white px-4 p-2 rounded-5 text-uppercase"
                  style="font-size: 13px; border-radius: 9px">Supply Chain
                </span>
              </div>
            </div>
            <div class="p-2">
              <h4 class="text-white">
                Optimizing the chain to maximize value
              </h4>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide class="bg-dark">
          <div
            class="swiper_slide_bg_4 mt-3 w-100 d-flex align-items-start flex-column py-5 pt-1">
            <div class="mb-auto p-2 w-100">
              <div class="mx-auto text-start px-1">
                <span
                  class="badge badge-white bg-dark text-white px-4 p-2 rounded-5 text-uppercase"
                  style="font-size: 13px; border-radius: 9px">
                  IT Services
                </span>
              </div>
            </div>
            <div class="p-2">
              <h4 class="text-white">
                Empowering innovation to ensure impact
              </h4>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide class="bg-dark">
          <div
            class="swiper_slide_bg_5 mt-3 w-100 d-flex align-items-start flex-column py-5 pt-1">
            <div class="mb-auto p-2 w-100">
              <div class="mx-auto text-start px-1">
                <span
                  class="badge badge-white bg-dark text-white px-4 p-2 rounded-5 text-uppercase"
                  style="font-size: 13px; border-radius: 9px">Warehouse Management
                </span>
              </div>
            </div>
            <div class="p-2">
              <h4 class="text-white">
                Connecting businesses to create opportunities
              </h4>
            </div>
          </div>
        </swiper-slide>
      </swiper-container>
    </div>

    <!-- thumb gallary section start -->
    <div class="container mx-auto swiper_thum_p_container mb-5 mt-5">
      <div class="section-title mb-0" data-aos="fade-up">
        <h2 class="title text-white">Discover ERPNext the 8848 Way</h2>
        <!-- <p class="sub-title mt-2">From ideation and design to development and deployment.</p> -->
        <hr class="text-white" />
      </div>
      <div>
        <div
          class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
          <div class="col-lg-3 col-md-6 mb-6" data-aos="fade-up">
            <div
              class="contact-info icon-box discover_section_card justify-content-center h-100"
              data-vivus-hover="">
              <div class="info">
                <div class="icon text-center mb-3 m-0">
                  <img
                    class="svgInject"
                    src="./images/icons/customization.png"
                    alt=""
                    height="60" />
                </div>
                <h3 class="title text-center text-dark erp_card_heading py-1">
                  ERPNext Implementation
                </h3>
                <span class="info-text text-center text-dark">
                  Transforming Business, One Process at a Time.
                </span>
                <br />
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-6" data-aos="fade-up">
            <div
              class="contact-info icon-box discover_section_card justify-content-center h-100"
              data-vivus-hover="">
              <div class="info">
                <div class="icon text-center mb-3 m-0">
                  <img
                    class="svgInject"
                    src="./images/icons/devops.png"
                    alt=""
                    height="60" />
                </div>
                <h3 class="title text-center text-dark erp_card_heading py-1">
                  Frappe Customization
                </h3>
                <span class="info-text text-center text-dark">
                  Elevate Your Business with solutions tailored to your
                  needs.</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-6" data-aos="fade-up">
            <div
              class="contact-info icon-box discover_section_card justify-content-center h-100"
              data-vivus-hover="">
              <div class="info">
                <div class="icon text-center mb-3 m-0">
                  <img
                    class="svgInject"
                    src="./images/icons/implementation.png"
                    alt=""
                    height="60" />
                </div>
                <h3 class="title text-center text-dark erp_card_heading py-1">
                  ERPNext <br />
                  Support
                </h3>
                <span class="info-text text-center text-dark">
                  Always On, Always Reliable: Your Trusted Source.
                </span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-6" data-aos="fade-up">
            <div
              class="contact-info icon-box discover_section_card justify-content-center h-100"
              data-vivus-hover="">
              <div class="info">
                <div class="icon text-center mb-3 m-0">
                  <img
                    class="svgInject"
                    src="./images/icons/support.png"
                    alt=""
                    height="60" />
                </div>
                <h3 class="title text-center text-dark erp_card_heading py-1">
                  Infrastructure &amp; Devops
                </h3>
                <span class="info-text text-center text-dark">
                  Building Foundations, Automating Success: Hand in Hand.
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <section id="company-services" class="padding-large pb-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
          <div class="icon-box d-flex">
            <div class="icon-box-icon pe-3 pb-3">
              <svg class="cart-outline">
                <use xlink:href="#cart-outline" />
              </svg>
            </div>
            <div class="icon-box-content">
              <h4 class="card-title mb-1 text-capitalize text-dark">Free delivery</h4>
              <p>Consectetur adipi elit lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
          <div class="icon-box d-flex">
            <div class="icon-box-icon pe-3 pb-3">
              <svg class="quality">
                <use xlink:href="#quality" />
              </svg>
            </div>
            <div class="icon-box-content">
              <h4 class="card-title mb-1 text-capitalize text-dark">Quality guarantee</h4>
              <p>Dolor sit amet orem ipsu mcons ectetur adipi elit.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
          <div class="icon-box d-flex">
            <div class="icon-box-icon pe-3 pb-3">
              <svg class="price-tag">
                <use xlink:href="#price-tag" />
              </svg>
            </div>
            <div class="icon-box-content">
              <h4 class="card-title mb-1 text-capitalize text-dark">Daily offers</h4>
              <p>Amet consectetur adipi elit loreme ipsum dolor sit.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 pb-3 pb-lg-0">
          <div class="icon-box d-flex">
            <div class="icon-box-icon pe-3 pb-3">
              <svg class="shield-plus">
                <use xlink:href="#shield-plus" />
              </svg>
            </div>
            <div class="icon-box-content">
              <h4 class="card-title mb-1 text-capitalize text-dark">100% secure payment</h4>
              <p>Rem Lopsum dolor sit amet, consectetur adipi elit.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="best-selling-items" class="position-relative padding-large ">
    <div class="container">
      <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
        <h3 class="d-flex align-items-center">Best selling items</h3>
        <a href="index.html" class="btn">View All</a>
      </div>
      <div class="position-absolute top-50 end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next product-slider-button-next">
        <svg class="chevron-forward-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
          <use xlink:href="#alt-arrow-right-outline"></use>
        </svg>
      </div>
      <div class="position-absolute top-50 start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev product-slider-button-prev">
        <svg class="chevron-back-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
          <use xlink:href="#alt-arrow-left-outline"></use>
        </svg>
      </div>
      <div class="swiper product-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <div class="position-absolute">
                <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">10% off</p>
              </div>
              <img src="images/product-item1.png" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">House of Sky Breath</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>
              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-dark">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <img src="images/product-item2.png" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">Heartland Stars</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-dark">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <img src="images/product-item3.png" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">Heavenly Bodies</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-dark">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <div class="position-absolute">
                <p class="bg-primary py-1 px-3 fs-6 text-white rounded-2">10% off</p>
              </div>
              <img src="images/product-item4.png" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">His Saving Grace</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-dark">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <img src="images/product-item5.png" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">My Dearest Darkest</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                <div class="rating text-warning d-flex align-items-center d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-dark">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative p-4 border rounded-3">
              <img src="images/product-item6.png" class="img-fluid shadow-sm" alt="product item">
              <h6 class="mt-4 mb-0 fw-bold"><a href="index.html">The Story of Success</a></h6>
              <div class="review-content d-flex">
                <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                <div class="rating text-warning d-flex align-items-center">
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                  <svg class="star star-fill">
                    <use xlink:href="#star-fill"></use>
                  </svg>
                </div>
              </div>

              <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
              <div class="card-concern position-absolute start-0 end-0 d-flex gap-2">
                <button type="button" href="#" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top"
                  data-bs-title="Tooltip on top">
                  <svg class="cart">
                    <use xlink:href="#cart"></use>
                  </svg>
                </button>
                <a href="#" class="btn btn-dark">
                  <span>
                    <svg class="wishlist">
                      <use xlink:href="#heart"></use>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section id="limited-offer" class="padding-large"
    style="background-image: url(images/banner-image-bg-1.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 800px;">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-6 text-center">
          <div class="image-holder">
            <img src="images/banner-image3.png" class="img-fluid" alt="banner">
          </div>
        </div>
        <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
          <h2>30% Discount on all items. Hurry Up !!!</h2>
          <div id="countdown-clock" class="text-dark d-flex align-items-center my-3">
            <div class="time d-grid pe-3">
              <span class="days fs-1 fw-normal"></span>
              <small>Days</small>
            </div>
            <span class="fs-1 text-primary">:</span>
            <div class="time d-grid pe-3 ps-3">
              <span class="hours fs-1 fw-normal"></span>
              <small>Hrs</small>
            </div>
            <span class="fs-1 text-primary">:</span>
            <div class="time d-grid pe-3 ps-3">
              <span class="minutes fs-1 fw-normal"></span>
              <small>Min</small>
            </div>
            <span class="fs-1 text-primary">:</span>
            <div class="time d-grid ps-3">
              <span class="seconds fs-1 fw-normal"></span>
              <small>Sec</small>
            </div>
          </div>
          <a href="index.html" class="btn mt-3">Shop Collection</a>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section id="items-listing" class="padding-large">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
          <div class="featured border rounded-3 p-4">
            <div class="section-title overflow-hidden mb-5 mt-2">
              <h3 class="d-flex flex-column mb-0">Featured</h3>
            </div>
            <div class="items-lists">
              <div class="item d-flex">
                <img src="images/product-item2.png" class="img-fluid shadow-sm" alt="product item">
                <div class="item-content ms-3">
                  <h6 class="mb-0 fw-bold"><a href="index.html">Echoes of the Ancients</a></h6>
                  <div class="review-content d-flex">
                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                    <div class="rating text-warning d-flex align-items-center">
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                  </div>
                  <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                </div>
              </div>
              <hr class="gray-400">
              <div class="item d-flex">
                <img src="images/product-item1.png" class="img-fluid shadow-sm" alt="product item">
                <div class="item-content ms-3">
                  <h6 class="mb-0 fw-bold"><a href="index.html">The Midnight Garden</a></h6>
                  <div class="review-content d-flex">
                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                    <div class="rating text-warning d-flex align-items-center">
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                  </div>
                  <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                </div>
              </div>
              <hr>
              <div class="item d-flex">
                <img src="images/product-item3.png" class="img-fluid shadow-sm" alt="product item">
                <div class="item-content ms-3">
                  <h6 class="mb-0 fw-bold"><a href="index.html">Shadow of the Serpent</a></h6>
                  <div class="review-content d-flex">
                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>

                    <div class="rating text-warning d-flex align-items-center">
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                  </div>
                  <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
          <div class="latest-items border rounded-3 p-4">
            <div class="section-title overflow-hidden mb-5 mt-2">
              <h3 class="d-flex flex-column mb-0">Latest items</h3>
            </div>
            <div class="items-lists">
              <div class="item d-flex">
                <img src="images/product-item4.png" class="img-fluid shadow-sm" alt="product item">
                <div class="item-content ms-3">
                  <h6 class="mb-0 fw-bold"><a href="index.html">Whispering Winds</a></h6>
                  <div class="review-content d-flex">
                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                    <div class="rating text-warning d-flex align-items-center">
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                  </div>
                  <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                </div>
              </div>
              <hr class="gray-400">
              <div class="item d-flex">
                <img src="images/product-item5.png" class="img-fluid shadow-sm" alt="product item">
                <div class="item-content ms-3">
                  <h6 class="mb-0 fw-bold"><a href="index.html">The Forgotten Realm</a></h6>
                  <div class="review-content d-flex">
                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                    <div class="rating text-warning d-flex align-items-center">
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                  </div>
                  <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                </div>
              </div>
              <hr>
              <div class="item d-flex">
                <img src="images/product-item6.png" class="img-fluid shadow-sm" alt="product item">
                <div class="item-content ms-3">
                  <h6 class="mb-0 fw-bold"><a href="index.html">Moonlit Secrets</a></h6>
                  <div class="review-content d-flex">
                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                    <div class="rating text-warning d-flex align-items-center">
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                  </div>
                  <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
          <div class="best-reviewed border rounded-3 p-4">
            <div class="section-title overflow-hidden mb-5 mt-2">
              <h3 class="d-flex flex-column mb-0">Best reviewed</h3>
            </div>
            <div class="items-lists">
              <div class="item d-flex">
                <img src="images/product-item7.png" class="img-fluid shadow-sm" alt="product item">
                <div class="item-content ms-3">
                  <h6 class="mb-0 fw-bold"><a href="index.html">The Crystal Key</a></h6>
                  <div class="review-content d-flex">
                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                    <div class="rating text-warning d-flex align-items-center">
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                  </div>
                  <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                </div>
              </div>
              <hr class="gray-400">
              <div class="item d-flex">
                <img src="images/product-item8.png" class="img-fluid shadow-sm" alt="product item">
                <div class="item-content ms-3">
                  <h6 class="mb-0 fw-bold"><a href="index.html">Starlight Sonata</a></h6>
                  <div class="review-content d-flex">
                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                    <div class="rating text-warning d-flex align-items-center">
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                  </div>
                  <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                </div>
              </div>
              <hr>
              <div class="item d-flex">
                <img src="images/product-item9.png" class="img-fluid shadow-sm" alt="product item">
                <div class="item-content ms-3">
                  <h6 class="mb-0 fw-bold"><a href="index.html">Tales of the Enchanted Forest</a></h6>
                  <div class="review-content d-flex">
                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                    <div class="rating text-warning d-flex align-items-center">
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                  </div>
                  <span class="price text-primary fw-bold mb-2 fs-5">$870</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-3">
          <div class="on-sale border rounded-3 p-4">
            <div class="section-title overflow-hidden mb-5 mt-2">
              <h3 class="d-flex flex-column mb-0">On sale</h3>
            </div>
            <div class="items-lists">
              <div class="item d-flex">
                <img src="images/product-item10.png" class="img-fluid shadow-sm" alt="product item">
                <div class="item-content ms-3">
                  <h6 class="mb-0 fw-bold"><a href="index.html">The Phoenix Chronicles</a></h6>
                  <div class="review-content d-flex">
                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                    <div class="rating text-warning d-flex align-items-center">
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                  </div>
                  <span class="price text-primary fw-bold mb-2 fs-5"><s class="text-black-50">$1666</s>
                    $999</span>
                </div>
              </div>
              <hr class="gray-400">
              <div class="item d-flex">
                <img src="images/product-item11.png" class="img-fluid shadow-sm" alt="product item">
                <div class="item-content ms-3">
                  <h6 class="mb-0 fw-bold"><a href="index.html">Dreams of Avalon</a></h6>
                  <div class="review-content d-flex">
                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                    <div class="rating text-warning d-flex align-items-center">
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                  </div>
                  <span class="price text-primary fw-bold mb-2 fs-5"><s class="text-black-50">$500</s>
                    $410</span>
                </div>
              </div>
              <hr>
              <div class="item d-flex">
                <img src="images/product-item12.png" class="img-fluid shadow-sm" alt="product item">
                <div class="item-content ms-3">
                  <h6 class="mb-0 fw-bold"><a href="index.html">Legends of the Dragon Isles</a></h6>
                  <div class="review-content d-flex">
                    <p class="my-2 me-2 fs-6 text-black-50">Lauren Asher</p>
                    <div class="rating text-warning d-flex align-items-center">
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                      <svg class="star star-fill">
                        <use xlink:href="#star-fill"></use>
                      </svg>
                    </div>
                  </div>
                  <span class="price text-primary fw-bold mb-2 fs-5"><s class="text-black-50">$600</s>
                    $500</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="categories" class="padding-large pt-0">
    <div class="container">
      <div class="section-title overflow-hidden mb-4">
        <h3 class="d-flex align-items-center">Categories</h3>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 border-0 rounded-3 position-relative">
            <a href="index.html">
              <img src="images/category1.jpg" class="img-fluid rounded-3" alt="cart item">
              <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a href="index.html"
                  class="text-white">Romance</a></h6>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center mb-4 border-0 rounded-3">
            <a href="index.html">
              <img src="images/category2.jpg" class="img-fluid rounded-3" alt="cart item">
              <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a href="index.html"
                  class="text-white">Lifestyle</a></h6>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center mb-4 border-0 rounded-3">
            <a href="index.html">
              <img src="images/category3.jpg" class="img-fluid rounded-3" alt="cart item">
              <h6 class=" position-absolute bottom-0 bg-primary m-4 py-2 px-3 rounded-3"><a href="index.html"
                  class="text-white">Recipe</a></h6>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="customers-reviews" class="position-relative padding-large"
    style="background-image: url(images/banner-image-bg.jpg); background-size: cover; background-repeat: no-repeat; background-position: center; height: 600px;">
    <div class="container offset-md-3 col-md-6 ">
      <div class="position-absolute top-50 end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next testimonial-button-next">
        <svg class="chevron-forward-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
          <use xlink:href="#alt-arrow-right-outline"></use>
        </svg>
      </div>
      <div class="position-absolute top-50 start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev testimonial-button-prev">
        <svg class="chevron-back-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
          <use xlink:href="#alt-arrow-left-outline"></use>
        </svg>
      </div>
      <div class="section-title mb-4 text-center">
        <h3 class="mb-4">Customers reviews</h3>
      </div>
      <div class="swiper testimonial-swiper ">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="card position-relative text-left p-5 border rounded-3">
              <blockquote>"I stumbled upon this bookstore while visiting the city, and it instantly became my favorite spot. The cozy atmosphere, friendly staff, and wide selection of books make every visit a delight!"</blockquote>
              <div class="rating text-warning d-flex align-items-center">
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
              </div>
              <h5 class="mt-1 fw-normal">Emma Chamberlin</h5>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative text-left p-5 border rounded-3">
              <blockquote>"As an avid reader, I'm always on the lookout for new releases, and this bookstore never disappoints. They always have the latest titles, and their recommendations have introduced me to some incredible reads!"</blockquote>
              <div class="rating text-warning d-flex align-items-center">
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
              </div>
              <h5 class="mt-1 fw-normal">Thomas John</h5>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative text-left p-5 border rounded-3">
              <blockquote>"I ordered a few books online from this store, and I was impressed by the quick delivery and careful packaging. It's clear that they prioritize customer satisfaction, and I'll definitely be shopping here again!"</blockquote>
              <div class="rating text-warning d-flex align-items-center">
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
              </div>
              <h5 class="mt-1 fw-normal">Kevin Bryan</h5>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative text-left p-5 border rounded-3">
              <blockquote>“I stumbled upon this tech store while searching for a new laptop, and I couldn't be happier
                with my experience! The staff was incredibly knowledgeable and guided me through the process of choosing
                the perfect device for my needs. Highly recommended!”</blockquote>
              <div class="rating text-warning d-flex align-items-center">
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
              </div>
              <h5 class="mt-1 fw-normal">Stevin</h5>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card position-relative text-left p-5 border rounded-3">
              <blockquote>“I stumbled upon this tech store while searching for a new laptop, and I couldn't be happier
                with my experience! The staff was incredibly knowledgeable and guided me through the process of choosing
                the perfect device for my needs. Highly recommended!”</blockquote>
              <div class="rating text-warning d-flex align-items-center">
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
                <svg class="star star-fill">
                  <use xlink:href="#star-fill"></use>
                </svg>
              </div>
              <h5 class="mt-1 fw-normal">Roman</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="latest-posts" class="padding-large">
    <div class="container">
      <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
        <h3 class="d-flex align-items-center">Latest posts</h3>
        <a href="index.html" class="btn">View All</a>
      </div>
      <div class="row">
        <div class="col-md-3 posts mb-4">
          <img src="images/post-item1.jpg" alt="post image" class="img-fluid rounded-3">
          <a href="blog.html" class="fs-6 text-primary">Books</a>
          <h4 class="card-title mb-2 text-capitalize text-dark"><a href="index.html">10 Must-Read Books of the Year: Our Top Picks!</a></h4>
          <p class="mb-2">Dive into the world of cutting-edge technology with our latest blog post, where we highlight
            five essential gadge. <span><a class="text-decoration-underline text-black-50" href="index.html">Read More</a></span>
          </p>
        </div>
        <div class="col-md-3 posts mb-4">
          <img src="images/post-item2.jpg" alt="post image" class="img-fluid rounded-3">
          <a href="blog.html" class="fs-6 text-primary">Books</a>
          <h4 class="card-title mb-2 text-capitalize text-dark"><a href="index.html">The Fascinating Realm of Science Fiction</a></h4>
          <p class="mb-2">Explore the intersection of technology and sustainability in our latest blog post. Learn about
            the innovative <span><a class="text-decoration-underline text-black-50" href="index.html">Read More</a></span> </p>
        </div>
        <div class="col-md-3 posts mb-4">
          <img src="images/post-item3.jpg" alt="post image" class="img-fluid rounded-3">
          <a href="blog.html" class="fs-6 text-primary">Books</a>
          <h4 class="card-title mb-2 text-capitalize text-dark"><a href="index.html">Finding Love in the Pages of a Book</a></h4>
          <p class="mb-2">Stay ahead of the curve with our insightful look into the rapidly evolving landscape of
            wearable technology. <span><a class="text-decoration-underline text-black-50" href="index.html">Read More</a></span>
          </p>
        </div>
        <div class="col-md-3 posts mb-4">
          <img src="images/post-item4.jpg" alt="post image" class="img-fluid rounded-3">
          <a href="blog.html" class="fs-6 text-primary">Books</a>
          <h4 class="card-title mb-2 text-capitalize text-dark"><a href="index.html">Reading for Mental Health: How Books Can Heal and Inspire</a></h4>
          <p class="mb-2">In today's remote work environment, productivity is key. Discover the top apps and tools that
            can help you stay <span><a class="text-decoration-underline text-black-50" href="index.html">Read More</a></span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="instagram">
    <div class="container">
      <div class="text-center mb-4">
        <h3>Instagram</h3>
      </div>
      <div class="row">
        <div class="col-md-2">
          <figure class="instagram-item position-relative rounded-3">
            <a href="https://templatesjungle.com/" class="image-link position-relative">
              <div class="icon-overlay position-absolute d-flex justify-content-center">
                <svg class="instagram">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
              <img src="images/insta-item1.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
            </a>
          </figure>
        </div>
        <div class="col-md-2">
          <figure class="instagram-item position-relative rounded-3">
            <a href="https://templatesjungle.com/" class="image-link position-relative">
              <div class="icon-overlay position-absolute d-flex justify-content-center">
                <svg class="instagram">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
              <img src="images/insta-item2.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
            </a>
          </figure>
        </div>
        <div class="col-md-2">
          <figure class="instagram-item position-relative rounded-3">
            <a href="https://templatesjungle.com/" class="image-link position-relative">
              <div class="icon-overlay position-absolute d-flex justify-content-center">
                <svg class="instagram">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
              <img src="images/insta-item3.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
            </a>
          </figure>
        </div>
        <div class="col-md-2">
          <figure class="instagram-item position-relative rounded-3">
            <a href="https://templatesjungle.com/" class="image-link position-relative">
              <div class="icon-overlay position-absolute d-flex justify-content-center">
                <svg class="instagram">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
              <img src="images/insta-item4.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
            </a>
          </figure>
        </div>
        <div class="col-md-2">
          <figure class="instagram-item position-relative rounded-3">
            <a href="https://templatesjungle.com/" class="image-link position-relative">
              <div class="icon-overlay position-absolute d-flex justify-content-center">
                <svg class="instagram">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
              <img src="images/insta-item5.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
            </a>
          </figure>
        </div>
        <div class="col-md-2">
          <figure class="instagram-item position-relative rounded-3">
            <a href="https://templatesjungle.com/" class="image-link position-relative">
              <div class="icon-overlay position-absolute d-flex justify-content-center">
                <svg class="instagram">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
              <img src="images/insta-item6.jpg" alt="instagram" class="img-fluid rounded-3 insta-image">
            </a>
          </figure>
        </div>
      </div>
    </div>
  </section>

  <footer id="footer" class="padding-large">
    <div class="container">
      <div class="row">
        <div class="footer-top-area">
          <div class="row d-flex flex-wrap justify-content-between">
            <div class="col-lg-3 col-sm-6 pb-3">
              <div class="footer-menu">
                <img src="images/main-logo.png" alt="logo" class="img-fluid mb-2">
                <p>Nisi, purus vitae, ultrices nunc. Sit ac sit suscipit hendrerit. Gravida massa volutpat aenean odio
                  erat nullam fringilla.</p>
                <div class="social-links">
                  <ul class="d-flex list-unstyled">
                    <li>
                      <a href="#">
                        <svg class="facebook">
                          <use xlink:href="#facebook" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg class="instagram">
                          <use xlink:href="#instagram" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg class="twitter">
                          <use xlink:href="#twitter" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg class="linkedin">
                          <use xlink:href="#linkedin" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg class="youtube">
                          <use xlink:href="#youtube" />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6 pb-3">
              <div class="footer-menu text-capitalize">
                <h5 class="widget-title pb-2">Quick Links</h5>
                <ul class="menu-list list-unstyled text-capitalize">
                  <li class="menu-item mb-1">
                    <a href="#">Home</a>
                  </li>
                  <li class="menu-item mb-1">
                    <a href="#">About</a>
                  </li>
                  <li class="menu-item mb-1">
                    <a href="#">Shop</a>
                  </li>
                  <li class="menu-item mb-1">
                    <a href="#">Blogs</a>
                  </li>
                  <li class="menu-item mb-1">
                    <a href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 pb-3">
              <div class="footer-menu text-capitalize">
                <h5 class="widget-title pb-2">Help & Info Help</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item mb-1">
                    <a href="#">Track Your Order</a>
                  </li>
                  <li class="menu-item mb-1">
                    <a href="#">Returns Policies</a>
                  </li>
                  <li class="menu-item mb-1">
                    <a href="#">Shipping + Delivery</a>
                  </li>
                  <li class="menu-item mb-1">
                    <a href="#">Contact Us</a>
                  </li>
                  <li class="menu-item mb-1">
                    <a href="#">Faqs</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 pb-3">
              <div class="footer-menu contact-item">
                <h5 class="widget-title text-capitalize pb-2">Contact Us</h5>
                <p>Do you have any queries or suggestions? <a href="mailto:"
                    class="text-decoration-underline">yourinfo@gmail.com</a></p>
                <p>If you need support? Just give us a call. <a href="#" class="text-decoration-underline">+55 111 222
                    333 44</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <hr>
  <div id="footer-bottom" class="mb-2">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between">
        <div class="ship-and-payment d-flex gap-md-5 flex-wrap">
          <div class="shipping d-flex">
            <p>We ship with:</p>
            <div class="card-wrap ps-2">
              <img src="images/dhl.png" alt="visa">
              <img src="images/shippingcard.png" alt="mastercard">
            </div>
          </div>
          <div class="payment-method d-flex">
            <p>Payment options:</p>
            <div class="card-wrap ps-2">
              <img src="images/visa.jpg" alt="visa">
              <img src="images/mastercard.jpg" alt="mastercard">
              <img src="images/paypal.jpg" alt="paypal">
            </div>
          </div>
        </div>
        <div class="copyright">
          <p>© Copyright 2024 Bookly. HTML Template by <a href="https://templatesjungle.com/"
              target="_blank">TemplatesJungle</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>