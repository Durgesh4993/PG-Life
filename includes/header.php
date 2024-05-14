
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- NAVBAR -->
<div class="header sticky-top">
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="../index.php">
            <img src="https://github.com/Durgesh4993/PG-Life/assets/98798977/65043d3f-e9a8-4bac-9ba6-e34a71346086" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
            <ul class="navbar-nav">

              <?php
               //Check if user is logged-in or not
               //If not logged-in
               if ( !isset($_SESSION["user_id"]) )
                {
              ?>
               <li class="nav-item">
                        <a class="nav-link" href="../PGLife/index.php">
                            <i class="bi bi-house-add"></i>Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../PGLife/team.php">
                            <i class="bi bi-microsoft-teams"></i>Our Team
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../PGLife/about.php">
                            <i class="bi bi-person-lines-fill"></i>About Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-bookmark-plus-fill"></i>Add Property
                        </a>
                    </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
                        <i class="fas fa-user"></i>Signup
                    </a>
                </li>
                <div class="nav-vl"></div>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
                        <i class="fas fa-sign-in-alt"></i>Login
                    </a>
                </li>
              <?php
                }
                else //If user is logged in
                {
              ?>
                  <div class='nav-name'>
                      Hi, <?php
                      $first_name = explode(" ",$_SESSION["full_name"])[0];
                      echo $first_name;
                      ?>
                  </div>
                  <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">
                      <i class="fas fa-user"></i>Dashboard
                    </a>
                  </li>
                  <div class="nav-vl"></div>
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">
                      <i class="fas fa-sign-out-alt"></i>Logout
                    </a>
                  </li>
              <?php
                }
              ?>

            </ul>
        </div>
    </nav>
</div>
