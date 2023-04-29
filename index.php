<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Bytes Abroad</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div class="container-xxl p-0">
      <!-- Spinner Start -->
      <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-border text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Navbar & Hero Start -->
      <div class="container-xxl position-relative p-0">
        <nav
          class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0"
        >
        <?php echo '<a href="index.php" class="navbar-brand p-0">
            <h1 class="text-primary m-0">
              <img src="img/BytesAbroad.png" alt="Logo" />BytesAbroad
            </h1>
          </a>';?>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
              <a href="#home" class="nav-item nav-link">Home</a>
              <a href="#about" class="nav-item nav-link">About</a>
              <?php echo '<a href="menu.php" class="nav-item nav-link">Menu</a>';?>
              <!-- <a href="#menu" >Menu</a> -->
              <?php echo '<a href="cart.php" class="nav-item nav-link">Cart</a>';?>
            
              <a href="#team" class="nav-item nav-link">Our Team</a>
            </div>  
          </div>
        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5" id="home">
          <div class="container my-5 py-5" style="background-color:rgba(0,0,0,0);">
            <div class="row align-items-center g-5">
              <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">
                  Welcome! <br />
                </h1>
                <p
                  style="font-size: 23px"
                  class="text-white animated slideInLeft mb-4 pb-2"
                >
                  Join us on our culinary journey and discover the flavors of
                  the world right here in our cozy restaurant. From classic
                  dishes to contemporary creations, each item on our menu is a
                  testament to our dedication to providing our customers with
                  the best culinary experience possible.
                </p>
              </div>
              <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img class="img-fluid" src="img/BytesAbroad.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Navbar & Hero End -->

      <!-- Service Start -->
      <div id="service">
        <div class="container-xxl py-5">
          <div class="container">
            <div style="font-size: 19px" class="row g-4">
              <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                  <div class="p-4">
                    <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                    <h5>Master Chefs</h5>
                    <p>
                      Our chefs bring unique flair and expertise to the kitchen,
                      crafting delicious and unforgettable dishes that keep
                      customers coming back
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                  <div class="p-4">
                    <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                    <h5>Quality Food</h5>
                    <p>
                      Using only the freshest and finest ingredients, sourced
                      from local and premium suppliers, to ensure that every
                      dish is of the highest quality
                    </p>
                  </div>
                </div>
              </div>
               <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="service-item rounded pt-3">
                      <div class="p-4">
                        <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                        <h5>Online Order</h5>
                        <p>
                          Enjoy your favorite international dishes from the
                          comfort of your home or office with our simple online
                          ordering system
                        </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                  <div class="p-4">
                    <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                    <h5>24/7 Service</h5>
                    <p>
                      Our customer support team is available 24/7 to answer any
                      of your questions or concerns about our products and
                      orders
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Service End -->

      <!-- About Start -->
      <div class="container-xxl py-5" id="about">
        <div class="container">
          <div class="row g-5 align-items-center">
            <div class="col-lg-6">
              <div class="row g-3">
                <div class="col-6 text-start">
                  <img
                    class="img-fluid rounded w-100 wow zoomIn"
                    data-wow-delay="0.1s"
                    src="img/mealsFromDB/Mediterranean-Salad.jpeg"
                  />
                </div>
                <div class="col-6 text-start">
                  <img
                    class="img-fluid rounded w-75 wow zoomIn"
                    data-wow-delay="0.3s"
                    src="img/mealsFromDB/hamburger.jpg"
                    style="margin-top: 25%"
                  />
                </div>
                <div class="col-6 text-end">
                  <img
                    class="img-fluid rounded w-75 wow zoomIn"
                    data-wow-delay="0.5s"
                    src="img/mealsFromDB/Pad-Thai_-1.jpg"
                  />
                </div>
                <div class="col-6 text-end">
                  <img
                    class="img-fluid rounded w-100 wow zoomIn"
                    data-wow-delay="0.7s"
                    src="img/mealsFromDB/Spaghetti-and-Meatballs.jpg"
                  />
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <h5
                class="section-title ff-secondary text-start text-primary fw-normal"
              >
                About Us
              </h5>
              <h1 class="mb-4">Welcome to Bytes Abroad</h1>
              <p class="mb-4">
                We are a team of passionate chefs and culinary experts,
                dedicated to providing our customers with a unique and
                unforgettable dining experience. Our menu offers a diverse range
                of international flavors and dishes, carefully crafted with the
                freshest and highest quality ingredients.
              </p>
              <p class="mb-4">
                We pride ourselves on our commitment to quality and consistency,
                ensuring that every dish is prepared to perfection and meets the
                expectations of our diners. Whatever your cravings are, our team
                of chefs will create a culinary masterpiece that will satisfy
                your taste buds.
              </p>
              <p class="mb-4">
                Thank you for choosing Bytes Abroad. We look forward to serving
                you and providing you with an unforgettable culinary experience.
              </p>

              <div class="row g-4 mb-4">
                <div class="col-sm-6">
                  <div
                    class="d-flex align-items-center border-start border-5 border-primary px-3"
                  >
                    <h1
                      class="flex-shrink-0 display-5 text-primary mb-0"
                      data-toggle="counter-up"
                    >
                      4
                    </h1>
                    <div class="ps-4">
                      <p class="mb-0">Years of</p>
                      <h6 class="text-uppercase mb-0">Experience</h6>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div
                    class="d-flex align-items-center border-start border-5 border-primary px-3"
                  >
                    <h1
                      class="flex-shrink-0 display-5 text-primary mb-0"
                      data-toggle="counter-up"
                    >
                      10
                    </h1>
                    <div class="ps-4">
                      <p class="mb-0">Popular</p>
                      <h6 class="text-uppercase mb-0">Master Chefs</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- About End -->
      <!-- Menu -->
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="background:lightgray; height:250px; ">
      <?php echo '<a href="menu.php">
            <br>
            <br>
            <h5
              class="section-title ff-secondary text-center text-primary fw-normal"
            >
              Food Menu
            </h5>
            <h1 class="mb-4">All Menu Items</h1>
            <button type="button" class="btn btn-primary  btn-lg">Go to Menu</button>
         </a>';?>
         <br>
         <br>
            <!-- <h5
              class="section-title ff-secondary text-center text-primary fw-normal"
            >
              Food Menu
            </h5>
            <h1 class="mb-5">All Menu Items</h1> -->
<!--          
          <button>View Menu</button> -->
        
          </div>
      <!-- Team Start -->
      <div class="container-xxl pt-5 pb-3" id="team" >
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5
              class="section-title ff-secondary text-center text-primary fw-normal"
            >
              Team Members
            </h5>
            <h1 class="mb-5">Our Master Chefs</h1>
          </div>
          <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/lilly.png" alt="" />
                </div>
                <h5 class="mb-0">Lilly Moreau</h5>
                <small>Integration Lead</small>
                <div class="d-flex justify-content-center mt-3">
                  <a class="btn btn-square btn-primary mx-1" href="https://www.linkedin.com/in/lillian-moreau-697a34224/"
                    ><i class="fab fa-linkedin"></i
                  ></a>
                  <a class="btn btn-square btn-primary mx-1" href="https://github.com/lmoreau21"
                    ><i class="fab fa-github"></i
                  ></a>
                  <a class="btn btn-square btn-primary mx-1" href="mailto:lmoreau2021@gmail.com"
                    ><i class="fab fa-mail"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/steven.png" alt="" />
                </div>
                <h5 class="mb-0">Steven Seiden</h5>
                <small>Frontend Web Developer</small>
                <div class="d-flex justify-content-center mt-3">
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-primary mx-1" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/maggie.png" alt="" />
                </div>
                <h5 class="mb-0">Maggie Stewart</h5>
                <small> Team Lead & Frontend Web Developer </small>
                <div class="d-flex justify-content-center mt-3">
                  <a
                    class="btn btn-square btn-primary mx-1"
                    href="https://www.linkedin.com/in/maggiestewart225"
                    ><i class="fab fa-linkedin"></i
                  ></a>
                  <a
                    class="btn btn-square btn-primary mx-1"
                    href="https://github.com/maggiestewart"
                    ><i class="fab fa-github"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/CameronC.png" alt="" />
                </div>
                <h5 class="mb-0">Cameron Courtois</h5>
                <small>Mockups & Frontend Web Developer</small>
                <div class="d-flex justify-content-center mt-3">
                  <a
                    class="btn btn-square btn-primary mx-1"
                    href="https://www.linkedin.com/in/
                    cameron-courtois-1976a41a4"
                    ><i class="fab fa-linkedin"></i
                  ></a>
                  <a
                    class="btn btn-square btn-primary mx-1"
                    href="https://github.com/camcourtois"
                    ><i class="fab fa-github"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/jack.jpg" alt="" />
                </div>
                <h5 class="mb-0">Jack Maumus</h5>
                <small>UI/UX Design</small>
                <div class="d-flex justify-content-center mt-3">
                  <a
                    class="btn btn-square btn-primary mx-1"
                    href="https://www.linkedin.com/in/jackmaumus"
                    ><i class="fab fa-linkedin"></i
                  ></a>
                  <a
                    class="btn btn-square btn-primary mx-1"
                    href="https://github.com/Jack-Maumus"
                    ><i class="fab fa-github"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/KyleM.jpg" alt="" />
                </div>
                <h5 class="mb-0">Kyle McCraine</h5>
                <small>Backend & Database Developer</small>
                <div class="d-flex justify-content-center mt-3">
                  <a
                    class="btn btn-square btn-primary mx-1"
                    href="https://www.linkedin.com/in/kyle-mccraine-723890215"
                    ><i class="fab fa-linkedin"></i
                  ></a>
                  <a
                    class="btn btn-square btn-primary mx-1"
                    href="https://github.com/Kcmac012"
                    ><i class="fab fa-github"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/Michael_Carroll.jpg" alt="" />
                </div>
                <h5 class="mb-0">Michael Carroll</h5>
                <small>Backend & Database Developer</small>
                <div class="d-flex justify-content-center mt-3">
                  <a
                    class="btn btn-square btn-primary mx-1"
                    href="https://www.linkedin.com/in/michael-carroll-0a4a14254/"
                    ><i class="fab fa-linkedin"></i
                  ></a>
                  <a
                    class="btn btn-square btn-primary mx-1"
                    href="https://github.com/mikechi702"
                    ><i class="fab fa-github"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/josh.jpg" alt="" />
                </div>
                <h5 class="mb-0">Joshua McCain</h5>
                <small>Backend & Database Developer</small>
                <div class="d-flex justify-content-center mt-3">
                  <a
                    class="btn btn-square btn-primary mx-1"
                    href="https://www.linkedin.com/in/joshua-mccain-665862264/"
                    ><i class="fab fa-linkedin"></i
                  ></a>
                  <a
                    class="btn btn-square btn-primary mx-1"
                    href="https://github.com/Joshua-McCain"
                    ><i class="fab fa-github"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/Olivia.jpg" alt="" />
                </div>
                <h5 class="mb-0">Olivia Cheung</h5>
                <small>UI/UX Design</small>
                <div class="d-flex justify-content-center mt-3">
                  <a
                    class="btn btn-square btn-primary mx-1"
                    href="https://www.linkedin.com/in/o-cheung/"
                    ><i class="fab fa-linkedin"></i
                  ></a>
                  <a
                    class="btn btn-square btn-primary mx-1"
                    href="https://github.com/Olivia-Cheung"
                    ><i class="fab fa-github"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/Dustin.jpg" alt="" />
                </div>
                <h5 class="mb-0">Dustin Wleczyk</h5>
                <small>Backend & Database Developer</small>
                <div class="d-flex justify-content-center mt-3">
                  <a
                    class="btn btn-square btn-primary mx-1"
                    href="https://www.linkedin.com/in/dustinwleczyk/"
                    ><i class="fab fa-linkedin"></i
                  ></a>
                  <a
                    class="btn btn-square btn-primary mx-1"
                    href="https://github.com/Dustin-Wleczyk"
                    ><i class="fab fa-github"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Team End -->

      <!-- Footer Start -->
      <div
        class="container-fluid bg-dark text-light footer wow fadeIn "
        data-wow-delay="0.1s"
      >
        <div class="container py-5" style="background-color:rgba(0,0,0,0);">
          <div class="row g-5">
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Company
              </h4>
              <a class="btn btn-link" href="#about">About Us</a>
              <a class="btn btn-link" href="">Privacy Policy</a>
              <a class="btn btn-link" href="">Terms & Condition</a>
              <?php echo ("<a href=\"restock.php\" class=\"btn btn-link\">Restock</a>");?>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Contact
              </h4>
              <p class="mb-2">
                <i class="fa fa-map-marker-alt me-3"></i>LSU, Baton Rouge, USA
              </p>
              <p class="mb-2">
                <i class="fa fa-envelope me-3"></i>bytesabroad@gmail.com
              </p>
              <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-youtube"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Opening
              </h4>
              <h5 class="text-light fw-normal">Monday - Sunday</h5>
              <p>24 hours</p>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Merch
              </h4>
              <p>Coming Soon!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
