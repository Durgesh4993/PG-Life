<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<div class="header sticky-top">
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo.png" style="height: 40px;"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
            <ul class="navbar-nav">
                <?php
                //Check if user is loging or not
                if (!isset($_SESSION["user_id"])) {
                ?>

                    <li class="nav-item" data-toggle="modal" data-target="#signup-modal">
                        <a class="nav-link" href="../PG-Life/index.php">
                            <i class="bi bi-house-add"></i>Home
                        </a>
                    </li>

                    <li class="nav-item" data-toggle="modal" data-target="#signup-modal">
                        <a class="nav-link" href="../PG-Life/team.php">
                            <i class="bi bi-microsoft-teams"></i>Our Team
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../PG-Life/about.php" data-toggle="modal" data-target="#signup-modal">
                            <i class="bi bi-person-lines-fill"></i>About Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
                            <i class="bi bi-bookmark-plus-fill"></i>Add Property
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
                            <i class="bi bi-sign-intersection-fill"></i>Signup
                        </a>
                    </li>
                    
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
                            <i class="bi bi-box-arrow-right"></i>Login
                        </a>
                    </li>
                <?php
                } else {
                ?>
                    <div class='nav-name'>
                        Hi, <?php echo $_SESSION["full_name"] ?>
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

<div id="loading">
</div>
