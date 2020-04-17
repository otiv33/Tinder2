<?php
   include_once "session.php";
?>

<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Hipstyle</title>
   <link rel="icon" href="img/favicon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- animate CSS -->
   <link rel="stylesheet" href="css/animate.css">
   <!-- owl carousel CSS -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- themify CSS -->
   <link rel="stylesheet" href="css/themify-icons.css">
   <!-- flaticon CSS -->
   <link rel="stylesheet" href="css/flaticon.css">
   <!-- font awesome CSS -->
   <link rel="stylesheet" href="css/magnific-popup.css">
   <!-- swiper CSS -->
   <link rel="stylesheet" href="css/slick.css">
   <link rel="stylesheet" href="css/gijgo.min.css">
   <link rel="stylesheet" href="css/nice-select.css">
   <link rel="stylesheet" href="css/all.css">
   <!-- style CSS -->
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <!--::header part start::-->
   <header class="main_menu single_page_menu">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-lg-12">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <a class="navbar-brand" href="index.php"> <img src="img/logo.png" alt="logo"> </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse"
                     data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                     aria-label="Toggle navigation">
                     <span class="menu_icon"></span>
                  </button>

                  <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                     <?php
                        // Dinamično prikazovanje menija glede na to, če je prijavljen
                        if(isset($_SESSION['user_id'])){
                     ?>
                        <li class="nav-item">
                           <a class="nav-link" href="index.php">Domov</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="cities.php">Kraji</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="locations.php">Lokacije</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="logout.php">Odjava</a>
                        </li>
                     <?php
                        }
                        else{
                     ?>
                        <li class="nav-item">
                           <a class="nav-link" href="login.php">Prijava</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="registration.php">Registracija</a>
                        </li>
                     <?php
                        }
                     ?>
                        <!--<li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Blog
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                              <a class="dropdown-item" href="blog.html"> blog</a>
                              <a class="dropdown-item" href="single-blog.html">Single blog</a>

                           </div>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              pages
                           </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="team.html">team</a>
                              <a class="dropdown-item" href="price.html">price</a>
                              <a class="dropdown-item" href="elements.html">Elements</a>
                           </div>
                        </li>-->
                        <li class="nav-item">
                           <a class="nav-link" href="contact.php">Kontakt</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </header>
   <!-- Header part end-->

   <!-- breadcrumb start-->
   <section class="breadcrumb breadcrumb_bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb_iner text-center">
                  <div class="breadcrumb_iner_item">
                     <h2>blog single</h2>
                     <p>home <span class="ti-angle-double-right"></span>blog single</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb start-->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section_padding">
      <div class="container">
         