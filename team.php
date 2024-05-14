<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PG Life | Team</title>
</head>
<body>
    <?php
    include "includes/head_links.php";
    include "includes/header.php";
    ?>

<style>
    .container {
  width: 100%;
  max-width: 1440px;
  margin: 0 auto;
}

aside {
  display: flex;
  width: 69%;
  margin: 4rem auto;
}
aside .box-left {
  width: 60%;
}
aside .box-left h1 {
  font-family: "PT Serif", serif;
  font-weight: 700;
  font-size: 36px;
  color: #000000;
}
aside .box-right {
  width: 40%;
}
aside .box-right h3 {
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  font-size: 18px;
  text-transform: uppercase;
  color: #000000;
}
aside .box-right p {
  font-family: "Poppins", sans-serif;
  font-size: 18px;
  font-weight: 400;
  font-size: 18px;
}

section {
  width: 72.5%;
  margin: 0 10rem 10rem;
  height: 68rem;
}
section .photos {
  display: flex;
  justify-content: space-between;
}
section .photos .column {
  width: 264px;
  height: 383px;
}
section .photos .column .photo {
  display: flex;
  width: 264px;
  height: 383px;
  margin: 50px;
  margin-bottom: 8rem;
}
section .photos .column .photo .left img {
  height: 341px;
  width: 238px;
}
section .photos .column .photo .left .name {
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  font-size: 18px;
  color: black;
}
section .photos .column .photo .right .profession {
  font-family: "PT Serif", serif;
  font-weight: 400;
  font-size: 12px;
  text-transform: uppercase;
  position: absolute;
  margin-left: 25px;
  margin-top: 1px;
  transform: rotate(90deg);
  transform-origin: 0 0;
}
section .photos .new_column {
  display: none;
}
section .photos .column_down {
  margin-top: 6rem;
}

footer {
  text-align: center;
  font-family: "Montserrat", sans-serif;
  font-weight: 600;
  font-size: 14px;
  margin-bottom: 3rem;
  color: #A9A9A9;
}
footer p a {
  color: #EE402C;
  text-decoration: none;
}

@media screen and (max-width: 1366px) {
  aside {
    width: 70%;
  }
  aside .box-left {
    width: 55%;
  }

  section {
    margin: 0 9rem 10rem;
  }
}
@media screen and (max-width: 1068px) {
  aside {
    width: 75%;
  }
  aside .box-right {
    width: 60%;
  }

  section {
    width: 80%;
    margin: 0 4.1rem 8rem;
  }
}
@media screen and (max-width: 375px) {
  aside {
    width: 100%;
    flex-direction: column;
    padding: 0.5rem;
    margin: 0 auto;
  }
  aside .box-left {
    width: 100%;
  }
  aside .box-right {
    width: 90%;
  }
  aside .box-right p {
    font-size: 14px;
  }

  section {
    margin: 2rem 0.8rem 1rem;
    width: 100%;
    height: 60rem;
  }
  section .photos .column {
    display: none;
  }
  section .photos .new_column {
    display: block;
  }
  section .photos .new_column .photo {
    margin: 0 0 -5rem 0;
    width: 154px;
  }
  section .photos .new_column .photo .left img {
    width: 138.72px;
    height: 209px;
  }
  section .photos .new_column .photo .right .profession {
    margin-left: 15px;
    font-size: 10px;
    width: 100px;
  }
  section .photos .column_down {
    margin-top: 3rem;
  }
}
</style>
<div class="container">
        <aside>
            <div class="box-left">
                <h1>The creative crew</h1>
            </div>
            <div class="box-right">
                <h3>Who we are</h3>
                <p>We are team of creatively diverse. driven. innovative individuals working in various locations from
                    the world.</p>
            </div>
        </aside>
        <!-- ?Section -->
        <section>
            <div class="photos">
                <div class="column">
                    <div class="photo">
                        <div class="left">
                            <img src="https://images.pexels.com/photos/938639/pexels-photo-938639.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Image">
                            <p class="name">Bill Mahoney</p>
                        </div>
                        <div class="right">
                            <p class="profession">Product Owner</p>
                        </div>
                    </div>
                    <div class="photo">
                        <div class="left">
                            <img src="https://cdn.goodgallery.com/cf0ef39c-1c83-45f8-b905-c091160e555c/r/0480/2fpgxh16/female-professional-portrait-gray-backdrop.jpg" alt="Image">
                            <p class="name">Skylah Lu</p>
                        </div>
                        <div class="right">
                            <p class="profession">Ux Designer</p>
                        </div>
                    </div>
                </div>
                <div class="column column_down">
                    <div class="photo">
                        <div class="left">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVZKbOI3g3IRTSSAaoRY5ozt7_r2sO6vYVeKLtKCfEkvFttj9-Pl7xN4vulcAQ3Fg8PDk&usqp=CAU" alt="Image">
                            <p class="name">Saba Cabrera</p>
                        </div>
                        <div class="right">
                            <p class="profession">Art Director</p>
                        </div>
                    </div>
                    <div class="photo">
                        <div class="left">
                            <img src="https://images.squarespace-cdn.com/content/v1/5ec689480cc22c2d441e152f/860c688d-2c34-4d3f-b58c-23eed26a839b/corporate-headshots-professional-photography-connecticut-ct-photo-studio-dress.jpg" alt="Image">
                            <p class="name">Griff Richars</p>
                        </div>
                        <div class="right">
                            <p class="profession">Developer</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="photo">
                        <div class="left">
                            <img src="https://images.squarespace-cdn.com/content/v1/5cfb0f8783523500013c5639/b29b7df0-d313-46aa-a7eb-16704edb2492/Professional-Headshot-Vancouver" alt="Image">
                            <p class="name">Shae Le</p>
                        </div>
                        <div class="right">
                            <p class="profession">Tech Lead</p>
                        </div>
                    </div>
                    <div class="photo">
                        <div class="left">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoBlvFt2MD79rNEBkf_Y90j6v4NVXRSgntRibXzTj6aEpoOvc3BZBQ8_HyeYLu30CKr9Y&usqp=CAU" alt="Image">
                            <p class="name">Stan Jhon</p>
                        </div>
                        <div class="right">
                            <p class="profession">Developer</p>
                        </div>
                    </div>
                </div>

                <!-- ?New Columns -->
                <div class=" column new_column">
                    <div class="photo">
                        <div class="left">
                            <img src="assets/photos/photo1.png" alt="Image">
                            <p class="name">Bill Mahoney</p>
                        </div>
                        <div class="right">
                            <p class="profession">Product Owner</p>
                        </div>
                    </div>
                    <div class="photo">
                        <div class="left">
                            <img src="assets/photos/photo3.png" alt="Image">
                            <p class="name">Shae Le</p>
                        </div>
                        <div class="right">
                            <p class="profession">Tech Lead</p>
                        </div>
                    </div>
                    <div class="photo">
                        <div class="left">
                            <img src="assets/photos/photo5.png" alt="Image">
                            <p class="name">Griff Richars</p>
                        </div>
                        <div class="right">
                            <p class="profession">Developer</p>
                        </div>
                    </div>
                </div>

                <div class="column new_column column_down">
                    <div class="photo">
                        <div class="left">
                            <img src="assets/photos/photo2.png" alt="Image">
                            <p class="name">Saba Cabrera</p>
                        </div>
                        <div class="right">
                            <p class="profession">Art Director</p>
                        </div>
                    </div>
                    <div class="photo">
                        <div class="left">
                            <img src="assets/photos/photo4.png" alt="Image">
                            <p class="name">Skyah Lu</p>
                        </div>
                        <div class="right">
                            <p class="profession">Ux Designer</p>
                        </div>
                    </div>
                    <div class="photo">
                        <div class="left">
                            <img src="assets/photos/photo6.png" alt="Image">
                            <p class="name">Stan Jhon</p>
                        </div>
                        <div class="right">
                            <p class="profession">Developer</p>
                        </div>
                    </div>
                </div>

                <!-- ?New Columns -->
            </div>
        </section>
        <!-- ?Section -->


</body>
</html>