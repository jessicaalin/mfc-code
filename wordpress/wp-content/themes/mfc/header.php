<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- following is not optimal for SEO -->
  <title><?php bloginfo('name') ?></title>
  <!-- bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script> -->
  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>

  <!-- wordpress gets to have the final word to add any extra code -->
  <?php wp_head(); ?>
</head>
<body <?php body_class() ?>
  <div class="container">
    <!-- site header --> 
    <header class="site-header">

      <!-- site navigation -->
      <!-- <nav class="site-nav row">
        <ul>
          <li class="col-sm-12">
            <?php
              $args = array(
                'theme_location' => 'header'
              );
            ?>
            <?php wp_nav_menu( $args ); ?>
          </li>
        </ul>
      </nav> -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a href="<?php echo home_url(); ?>" class="header-logo">
        <img src="http://localhost:8888/wordpress/wp-content/uploads/2020/05/Parent-full-color-horizontal-e1590159561635.png" alt="Logo of Embrace Families">
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown" >
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">About</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Board & Leadership</a>
                <a class="dropdown-item" href="#">Finances</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Make a Difference
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Make a Difference</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Mentor</a>
                <a class="dropdown-item" href="#">Foster</a>
                <a class="dropdown-item" href="#">Adopt</a>
                <a class="dropdown-item" href="#">Donate</a>
                <a class="dropdown-item" href="#">Prospective Providers</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Find Support
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Find Suport</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Youth</a>
                <a class="dropdown-item" href="#">Foster Parents</a>
                <a class="dropdown-item" href="#">Relative & Community Care</a>
                <a class="dropdown-item" href="#">Service Providers</a>
                <a class="dropdown-item" href="#">I'm looking for support</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8888/wordpress/news" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                News
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Donate
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- /site header -->
  