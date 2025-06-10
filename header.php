
  <!--=====HEADER START=======-->
<header>
  <div class="header-area-home1 header-area-home3 d-none d-lg-block">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="header-elements">

            <!-- Site Logo -->
            <div class="site-logo">
              <a href="index.php">
                <img src="assets/img/logo/logo.png" alt="Logo">
              </a>
            </div>

            <!-- Main Menu -->
            <div class="main-menu-ex home2-menu">
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>

                <!-- Dropdown Menu -->
                <li class="dropdown">
                  <a href="service.php">
                    Service 
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="income-tax.php">Income Tax Return</a></li>
                    <li><a href="gst-service.php">GST Compliance (Registration & Filings)</a></li>
                    <li><a href="company.php">Company Registration</a></li>
                    <li><a href="dsc-service.php">Digital Signature Certificate</a></li>
                    <li><a href="msme.php">MSME Registration</a></li>
                    <li><a href="others.php">Others</a></li>
                  </ul>
                </li>

                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact Us</a></li>

                <!-- Mobile Phone CTA -->
                <li class="d-lg-none d-block">
                  <a href="#"><img src="assets/img/icons/phone.svg" alt="">935-561-3693</a>
                </li>
              </ul>
            </div>

            <!-- Desktop Phone CTA -->
            <div class="cta-btn d-none d-lg-block btn-after button action-btn home1-header-btn">
              <a href="tel:935-561-3693">
                <img src="assets/img/icons/phone.svg" alt="">935-561-3693
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</header>



  <!--=====HEADER END=======-->

  <!--=====Mobile header start=======-->
  <div class="mobile-header mobile-header-4 d-block d-lg-none ">
    <div class="container-fluid">
      <div class="col-12">
        <div class="mobile-header-elements">
          <div class="mobile-logo">
            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
          </div>
          <div class="mobile-nav-icon">
            <i class="fa-solid fa-bars"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mobile-sidebar">
  <div class="menu-close">
    <i class="fa-solid fa-xmark"></i>
  </div>

  <div class="mobile-nav">
    <ul class="mobile-nav-list">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Us</a></li>

      <!-- Service Dropdown -->
      <li class="mobile-dropdown">
        <a href="service.php">
          Service 
        </a>
        <ul class="mobile-dropdown-menu">
          <li><a href="income-tax.php">Income Tax Return</a></li>
          <li><a href="gst-service.php">GST Compliance (Registration & Filings)</a></li>
          <li><a href="company.php">Company Registration</a></li>
          <li><a href="dsc-service.php">Digital Signature Certificate</a></li>
          <li><a href="msme.php">MSME Registration</a></li>
          <li><a href="others.php">Others</a></li>
        </ul>
      </li>

      <li><a href="blog.php">Blog</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li>
        <a href="tel:935-561-3693">
          <img src="assets/img/icons/phone.svg" alt=""> 935-561-3693
        </a>
      </li>
    </ul>
  </div>
</div>

  </div>
  <!--=====Mobile header end=======-->
  <style>
    .main-menu-ex ul li {
  position: relative;
} 

.main-menu-ex ul li .dropdown-menu {
  display: none;
  position: absolute;
  background: #fff;
  z-index: 999;
  top: 100%;
  left: 0;
  min-width: 300px;
  padding: 5px 0;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.main-menu-ex ul li:hover .dropdown-menu {
  display: block;
}

.main-menu-ex ul li .dropdown-menu li {
  display: block;
  padding: 0px 10px;
}

.main-menu-ex ul li .dropdown-menu li a {
  color: #333;
  text-decoration: none;
}

.main-menu-ex ul li .dropdown-menu li a:hover {
  color: #ffffff; /* or your theme color */
}
</style>