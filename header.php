<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Shop</title>

    <!-- Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- OwlCarousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- font-awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
      // require function.php
      // require ("./database/function.php");

    ?>
</head>
<body>

    <!-- Start Header section -->
    <header id="header">
        <!-- Start strip -->
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="text-black-50 font-size-14 font-rale m-0">New Atwarpur (Ram janki path) 8804575320</p>
            <div class="font-size-14 font-rale">
                <a href="#" class="px-3 border-right border-left text-black-50">Login</a>
                <a href="#" class="px-3 border-right text-black-50">Whishlist(0)</a>
            </div>
        </div>

        <!-- End strip -->

        <!-- Start Primary navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Grocery Items</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                  <a class="nav-link" href="#">On Sale</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Comming soon</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
              </ul>

              <form action="#" class="font-size-14 font-rale">
                  <a href="#" class="py-2 rounded-pill bg-dark">
                      <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                      <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                  </a>
              </form>
            </div>
          </nav>

        <!-- End Primary navigation -->


    </header>

    <!-- End Header section -->

    <!-- Start main section -->
    <main id="main-site">