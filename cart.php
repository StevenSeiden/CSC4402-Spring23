
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
      <div style="background-color:#0F172B; height:100px; width:100vw;">
  
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
            <?php echo '<a href="index.php#home" class="nav-item nav-link">Home</a>';?>
            <?php echo '<a href="index.php#about" class="nav-item nav-link">About Us</a>';?>
            <?php echo '<a href="menu.php" class="nav-item nav-link">Menu</a>';?>
            <a href="#cart" class="nav-item nav-link">Cart</a>
              <?php echo '<a href="index.php#team" class="nav-item nav-link">Our Team</a>';?>
            </div>
          </div>
        </nav>
      </div>

<div class="container-xxl py-5 menuBg" id="cart">
<br>

        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5
              class="section-title ff-secondary text-center text-primary fw-normal"
            >
              Cart
            </h5>
            <h1 class="mb-5">All Items</h1>
          </div>

        <?php
          // Create a PDO object
         // echo( document.querySelector('#cuisineType'));
          $cuisine = '';
          $pdo = new PDO("mysql:host=bitesabroad.mysql.database.azure.com;dbname=bitesabroad;charset=utf8mb4", "bitesabroad", "Databased1!");
          if (isset($_GET["cuisineType"])) {
            $cuisine = $_GET["cuisineType"];
          }
          
          // If no cuisine is selected, show all meals
          $query = "SELECT * FROM cart_view where user_ID=501";
          // Run a query against the database
          $result = $pdo->query($query);
          echo "<div class=\"tab-content\">
          <div id=\"tab-1\" class=\"tab-pane fade show p-0 active\">
            <div class=\"row g-4\">";
        if ($result->rowCount() == 0) {
            
            echo "<br><h4 class='text-center wow fadeInUp'>No results found</h4>";
            } else {
          echo "<table class=\"table wow fadeInUp\" style\"max-width:70%\">
          
          <tr>
          <thead style=\"background-color:#0F172B\">
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Remove</th>
            </thead>
          </tr>";
          while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
           
            echo "
            <tr>
             <td>{$row['title']}</td>
              <td>{$row['description']}</td>
              <td>\${$row['price']}</td>
              <td>{$row['quantity']}</td>
              <td>\${$row['total_price']}</td>
              <td><form method=\"post\"><button name=\"removeCart\" value=\"{$row['title']}\" type=\"submit\"  class=\"btn btn-square btn-primary mx-1\"><i class=\"bi bi-trash\"></button></form></td>
            </tr>  
              ";
          
            
            }
           
            echo "
            </table>
            <form method=\"post\"><button name=\"purchaseButton\" type=\"submit\" class=\"btn btn-primary btn-sm wow fadeup\" style=\"width:150px; top:4px; margin-left:100px\" href='menu.php'>Purchase</button></form>
            </div>
          </div>";

          }
        
          if(isset($_POST['removeCart'])) {  
           
            $valueRemove = $_POST['removeCart'];
            $removeCartTable = $pdo->query("delete from cart where (select distinct meal_ID from items where title like \"$valueRemove\") = meal_ID;");
            
            // If no cuisine is selected, show all meals
            $query = "SELECT * FROM cart_view where user_ID=501";
          
            // Run a query against the database
            $result = $pdo->query($query);
            //$_POST = array();
            
            //echo("<script>document.getElementById('delForm').reset();</script>");
            echo("<script>window.location.replace(\"https://bytesabroad.azurewebsites.net/cart.php\");</script>");
            //echo("<script>location.reload</script>");
            
          }
          if(isset($_POST['purchaseButton'])) {  
            //for this to work we have to iterate through table to add items
            $query2 = "SELECT * FROM cart_view where user_ID=501";
            $result2 = $pdo->query($query2);
            while ($row = $result2->fetch(PDO::FETCH_ASSOC)) {
              $stockUp = $pdo->query("update inventory set stock = stock-{$row['quantity']} where (select distinct meal_ID from items where title like \"{$row['title']}\") = meal_ID;");
              $removeCartTable = $pdo->query("delete from cart where (select distinct meal_ID from items where title like \"{$row['title']}\") = meal_ID;");              
            }
            // If no cuisine is selected, show all meals
            $query = "SELECT * FROM cart_view where user_ID=501";
            
            // Run a query against the database
            $result = $pdo->query($query);

            echo("<script>window.location.replace(\"https://bytesabroad.azurewebsites.net/cart.php\");</script>");
            
          }
         
          $pdo = null;
          // Close the PDO connection  
          ?>
        </div>

      </div>
      
      <br>
      <br>
      <br>
 <!-- Footer Start -->

 <br>
 <div
        class="container-fluid bg-dark text-light footer wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div class="container bg-dark  py-5">
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
