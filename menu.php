
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
    <div class="container-xxl bg-white p-0">
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
      <div style="background-color:#0F172B; height:90px; width:100vw;position:fixed">
      
  <nav
   class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0" style="background-color:#0F172B; height:90px; width:100vw;position:fixed">
  
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
            <?php echo '<a href="index.php#home" class="nav-item nav-link">Home</a>';?>
            <?php echo '<a href="index.php#about" class="nav-item nav-link">About Us</a>';?>
              <a href="#menu" class="nav-item nav-link">Menu</a>
              <?php echo '<a href="cart.php" class="nav-item nav-link">Cart</a>';?>
            
              <?php echo '<a href="index.php#team" class="nav-item nav-link">Our Team</a>';?>
            </div>
          </div>
        </nav>
      </div>
<<<<<<< Updated upstream
<br>

<div class="container-xxl py-5 ol-md-8 offset-md-2" id="menu">
        <div class="container" style="margin: auto">
=======


<br>
<div class="container-xxl py-5" id="menu">
        <div class="container">
>>>>>>> Stashed changes
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5
              class="section-title ff-secondary text-center text-primary fw-normal"
            >
              Food Menu
            </h5>
            <h1 class="mb-5">All Menu Items</h1>
          </div>
        
          <form method="get" style="margin: 0 auto !important; text-align: center;">
          <label for="cuisineType">Cuisine: </label>
          <select id="cuisineType" name="cuisineType" style="width: 150px">
            <option value="All">All</option>
            <option value="American">American</option>
            <option value="Asian">Asian</option>
            <option value="Caribbean">Caribbean</option>
            <option value="Chinese">Chinese</option>
            <option value="French">French</option>
            <option value="Greek">Greek</option>
            <option value="Indian">Indian</option>
            <option value="Italian">Italian</option>
            <option value="Japanese">Japanese</option>
            <option value="Korean">Korean</option>
            <option value="Mexican">Mexican</option>
            <option value="Middle Eastern">Middle Eastern</option>
            <option value="Spanish">Spanish</option>
            <option value="Thai">Thai</option>
            <option value="Vietnamese">Vietnamese</option>
            <option value="Mediterranean">Mediterranean</option>
            <option value="African">African</option>
            <option value="German">German</option>
            <option value="Brazilian">Brazilian</option>
            <option value="Peruvian">Peruvian</option>
            <option value="Argentinian">Argentinian</option>
            <option value="Turkish">Turkish</option>
            <option value="Russian">Russian</option>
            <option value="Indonesian">Indonesian</option>
            <option value="Filipino">Filipino</option>
            <option value="Polish">Polish</option>
            <option value="Moroccan">Moroccan</option>
            <option value="Israeli">Israeli</option>
            <option value="Portuguese">Portuguese</option>
            <option value="Swedish">Swedish</option>
            <option value="Danish">Danish</option>
            <option value="Norwegian">Norwegian</option>
            <option value="Finnish">Finnish</option>
            <option value="Irish">Irish</option>
            <option value="Scottish">Scottish</option>
            <option value="English">English</option>
            </select>
            <button class="btn btn-primary btn-sm" type="submit" href="#menu">Filter</button>
          </form>

          <form method="get" style="margin: 0 auto !important; margin-top: 10px  !important; text-align: center;" >
          <label for="dietaryType">Diet:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
          <select id="dietaryType" name="dietaryType" style="width: 150px">
            <option value="All">All</option>
            <option value="Pescetarian">Pescetarian</option>
            <option value="Dairy Free">Dairy Free</option>
            <option value="Keto">Keto</option>
            <option value="Paleo">Paleo</option>
            <option value="Gluten free">Gluten free</option>
            <option value="Vegetarian">Vegetarian</option>
            <option value="Vegan">Vegan</option>
            <option value="Kosher">Kosher</option>
            <option value="Diabetes">Diabetes</option>
            <option value="Hala">Hala</option>
            
            </select>
            <button class="btn btn-primary btn-sm" type="submit" href="#menu">Filter</button>
          </form>
          <br>
          <h5 class="d-flex justify-content-between border-bottom pb-2\"></h5>
        
        <br>

        <?php
          // Create a PDO object
         // echo( document.querySelector('#cuisineType'));
          $cuisine = '';
          $diet = '';
          $pdo = new PDO("mysql:host=bitesabroad.mysql.database.azure.com;dbname=bitesabroad;charset=utf8mb4", "bitesabroad", "Databased1!");
          if (isset($_GET["cuisineType"])) { //getting dropdown input for cuisine type
            $cuisine = $_GET["cuisineType"];
          }
          else if (isset($_GET["dietaryType"])) { //getting diet type input for cuisine type
            $diet = $_GET["dietaryType"];
          }
          
          // If no cuisine is selected, show all meals, or show only other dropdown queries.
          
            // if ($cuisine == 'All'||$cuisine == '') {
            //   $query = "SELECT * FROM main";
            // } else {
            //   // Otherwise, show only meals of the selected cuisine
            //   $query = "SELECT * FROM main WHERE cuisine like \"$cuisine\"";
            // }

            // if ($diet == 'All'||$diet == '') {
            //   $query = "SELECT * FROM main";
            // } else {
            //   // Otherwise, show only meals of the selected cuisine
            //   $query = "SELECT * FROM main WHERE dietary like \"$diet\"";
            // }

            if($cuisine == 'All' || $cuisine == '') //spaghetti ahh and unreadable if else chain will optimize later -- Mike
            {
              if($diet == 'All' || $diet == '') //if both diet and cuisine are null or 'All'
                $query = "SELECT * FROM main";
              else //if diet is anything other than null or all
              {
                $query = "SELECT * FROM main WHERE dietary like \"$diet\"";
              }
            }
            else //cuisine filter not empty
            {
              if($diet == 'All' || $diet == '') //if diet is null or 'All'
                $query = "SELECT * FROM main WHERE cuisine like \"$cuisine\"";
              else //both diet and cuisine are not null in dropdown
              {
                $query = "SELECT * FROM main WHERE dietary like \"$diet\" AND cuisine like \"$cuisine\"";
              }
            }

          // Run a query against the database
          $result = $pdo->query($query);
          echo "<div class=\"tab-content\">
          <div id=\"tab-1\" class=\"tab-pane fade show p-0 active\">
            <div class=\"row g-4\">";
        if ($result->rowCount() == 0) {
            
            echo "<br><h1>No results found</h1>";
            } else {
          while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

            echo "
            <div class=\"col-lg-6\">
            <div class=\"d-flex align-items-center\">
              <img
                class=\"flex-shrink-0 img-fluid rounded\"
                src=\"img/mealsFromDB/{$row['title']}.jpg\"
                alt=\"\"
                style=\"width: 80px\"
              />
              <div class=\"w-100 d-flex flex-column text-start ps-4\">
                <h5
                  class=\"d-flex justify-content-between border-bottom pb-2\"
                >
                  <span>{$row['title']}</span>
                  <span class=\"text-primary\">\${$row['price']}</span>
                </h5>
                <small class=\"fst-italic\">{$row['description']}</small>
                <br>
                <small><strong>Cuisine:</strong> {$row['cuisine']}</small>
                <small><strong>Diet:</strong> {$row['dietary']}\t </small>
                <small><strong>Available:</strong> {$row['stock']} meals</small>
                <br>
                ";
            if($row['stock']>0){
              echo "<form method=\"post\"><button value=\"{$row['title']}\" name=\"stockButton\" type=\"submit\" class=\"btn btn-primary btn-sm\" style=\"width:150px; top:4px;\" href=''>Add to cart</button></form>";
            }else{
              echo "<div class=\"alert alert-warning\">
              <strong>Out of Stock</strong>
            </div>";
            }
            echo "
              </div>
            </div>
          </div>";

          }}
          if(isset($_POST['stockButton'])) {  
            
            $value = $_POST['stockButton'];
            $stockUp = $pdo->query("update inventory set stock = stock-1 where (select distinct meal_ID from items where title like \"$value\") = meal_ID;");
            //$stockUp;
          }
           $pdo = null;
          // Close the PDO connection  
          ?>
        </div>
      </div>
 <!-- Footer Start -->
 <div
        class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div class="container py-5">
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
