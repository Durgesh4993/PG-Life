<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PG Life | Home</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" />
    <link href="css/index.css" rel="stylesheet" />
</head>

<body>
  <!-- Header Section -->
  <?php require "./includes/header.php";
   require "./includes/slider.php";
  ?>

  <div id="loading">
  </div>

  <div class="banner-container">
        <h2 class="white pb-3">Happiness per Square Foot</h2>
        
    <!-- Search Bar -->
    <form class="" action="property_list.php" method="GET">
      <div class="row justify-content-center">
        <div class="col-md-6 col-sm-8">
          <div class="input-group md-form form-sm form-2 pl-0">
            <input name="city" class="form-control my-0 py-1 red-border" type="text" placeholder="Enter your city to search for PGs" aria-label="Search">
            <div class="input-group-append">
              <button type="submit" class="btn btn-dark">
                <!-- <span class="input-group-text red lighten-3" id="basic-text1"> -->
                  <i class="fas fa-search text-grey" aria-hidden="true"></i>
                <!-- </span> -->
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  <div class="city-container">
    <div class="city-caption">
      <h2>Major Cities</h2>
    </div>
    <div class="city-box">

      <div class="city-img">
        <a href="property_list.php?city=Delhi">
          <img src="./img/delhi.png" alt="Delhi">
        </a>
      </div>
      <div class="city-img">
        <a href="property_list.php?city=Mumbai">
          <img src="./img/mumbai.png" alt="Mumbai">
        </a>
      </div>
      <div class="city-img">
        <a href="property_list.php?city=Hyderabad">
          <img src="./img/hyderabad.png" alt="Hyderabad">
        </a>
      </div>
      <div class="city-img">
        <a href="property_list.php?city=Bengaluru">
          <img src="./img/bangalore.png" alt="Bengaluru">
        </a>
      </div>

    </div>
  </div>

  <section class="about-us">
    <div class="about">
      <img style="border-radius: 16px 21px 200px 200px;" src="https://www.thehousedesigners.com/images/plans/01/URD/bulk/6583/the-destination-front-rendering_m.webp" class="pic">
      <div class="text">
        <h2>Buy & Rent House</h2>
        <h5>We Help You to Buy & <span>Rent Houses</span></h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita natus ad sed harum itaque ullam enim quas, veniam accusantium, quia animi id eos adipisci iusto molestias asperiores explicabo cum vero atque amet corporis! Soluta illum facere consequuntur magni. Ullam dolorem repudiandae cumque voluptate consequatur consectetur, eos provident necessitatibus reiciendis corrupti!</p>
      </div>
    </div>
  </section>

  <!-- Modal Pages -->
  <?php require "./includes/signup_modal.php"; ?>
  <?php require "./includes/login_modal.php" ?>


  <!-- Footer -->
  <?php require "./includes/footer.php" ?>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/common.js"></script>
</body>

</html>
