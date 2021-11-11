<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="login_style.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP login system!</title>
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
              <a class="nav-link" href="blogs.html">Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Adoption</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Quiz</a>
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
      <i class="fa my-cart" style="color: white; font-size:24px"><a href="#">My cart </a>&#xf07a;</i>
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
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
      
        </body>
      </html>