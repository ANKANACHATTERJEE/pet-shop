<?php
require_once "config.php";
  session_start();
  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hello, world!</title>
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Pet shop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="store.php">Store</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blogs.php">Blogs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Adoption</a>
              </li>
              <li class="nav-item">
                <a href="quiz.html" class="nav-link">Quiz</a>
              </li>
            </ul>
            <a class="nav-link">
              <i class="fa fa-phone-square" style="font-size:25px"></i>
              Call us at 866-556-2570
            </a>
          </div>
        </div>
      </nav>
      <div class="bar">
        <span class="login">
         <?php
          if(isset($_SESSION['username']))
          {
            echo "<a href='logout.php'>Logout</a>";
          }
          else{
            echo "<a href='login.php'>Login / Register</a>";
          }
         ?>
        </span>
        <i class="fa my-cart" style="color: white; font-size:24px"><a href="mycart.php">My cart </a>&#xf07a;</i>
      <form class="d-flex">
          <a class="btn dropdown-toggle" href="#" id="Dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            All
          </a>
          <ul class="dropdown-menu" aria-labelledby="Dropdown">
            <div>
              <div class="nav-column">
                  <h3>Pet food</h3>
                  <ul>
                      <li><a href="#">Dog Food</a></li>
                      <li><a href="#">Cat Food</a></li>
                      <li><a href="#">Guinea Pig Food</a></li>
                      <li><a href="#">Rabbit Food</a></li>
                      <li><a href="#">Hamster Food</a></li>
                      <li><a href="#">Fish Food</a></li>
                      <li><a href="#">Bird Food</a></li>
                  </ul>
              </div>
   
              <div class="nav-column">
                  <h3>Pet toys</h3>
                  <ul>
                      <li><a href="#">Driving shoes</a></li>
                      <li><a href="#">Espadrilles</a></li>
                      <li><a href="#">Loafers</a></li>
                  </ul>
   
                  <h3>Pet accessories</h3>
                  <ul>
                      <li><a href="#">Driving shoes</a></li>
                      <li><a href="#">Espadrilles</a></li>
                      <li><a href="#">Loafers</a></li>
                  </ul>
              </div>
   
              
              <div class="nav-column">
                  <h3 class="orange">Services</h3>
                  <ul>
                      <li><a href="#">Pampers Diapers</a></li>
                      <li><a href="#">Huggies Diapers</a></li>
                      <li><a href="#">Diapers</a></li>
                  </ul>
   
                  <h3 class="orange">Brands</h3>
                  <ul>
                      <li><a href="#">Driving shoes</a></li>
                      <li><a href="#">Espadrilles</a></li>
                  </ul>
              </div>
          </div>
     
          </ul>
        
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </div>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="group1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="group2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="group3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="content">
        <div class="items">
          <div id="item-1">
            <a href="#">
                   <img src="gallery2.jpg">
            </a>
          </div>
          <div id="item-2">
            <a href="#">
                <img src="dogfood.jpg">
              </a>
          </div>
          <div id="item-3">
            <a href="#">
              <img src="pet-accessories.png">
            </a>
          </div>
          <div id="item-4">
            <a href="#">
                <img src="pet-toys.jpeg">
            </a>
          </div>
      </div>
      <div class="item-names">
        <div id="item-1-name">
          Pets
        </div>
        <div id="item-2-name">
          Pet Food
        </div>
        <div id="item-3-name">
          Pet Accessories
        </div>
        <div id="item-4-name">
          Pet Toys
        </div>
      </div>
      <div class="items">
        <div id="item-5">
          <a href="#">
            <img src="pet-grooming.jpg">
          </a>
        </div>
        <div id="item-6">
          <a href="#">
            <img src="pet-training.jpg">
          </a>
        </div>
      </div>
      <div class="item-names">
        <div id="item-5-name">
          Pet Grooming
        </div>
        <div id="item-6-name">
          Pet Training
        </div>
      </div>
      </div>
    </div>
    </body>
    
    <footer class="text-center text-lg-start bg-dark text-muted">
      <!-- Section: Social media -->
      
      <!-- Section: Social media -->
    
      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>Company name
              </h6>
              <p>
                Here you can use rows and columns to organize your footer content. Lorem ipsum
                dolor sit amet, consectetur adipisicing elit.
              </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Products
              </h6>
              <p>
                <a href="#!" class="text-reset">Angular</a>
              </p>
              <p>
                <a href="#!" class="text-reset">React</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Vue</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Laravel</a>
              </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Useful links
              </h6>
              <p>
                <a href="#!" class="text-reset">Pricing</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Settings</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Orders</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Help</a>
              </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Contact
              </h6>
              <p><i class="fa fa-home me-3"></i> New York, NY 10012, US</p>
              <p>
                <i class="fa fa-envelope me-3"></i>
                info@example.com
              </p>
              <p><i class="fa fa-phone me-3"></i> + 01 234 567 88</p>
              <p><i class="fa fa-print me-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->
    
      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>