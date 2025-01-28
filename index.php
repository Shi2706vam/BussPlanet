<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bus Planet</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./CSS/style.css" />
  </head>
  <body>
    <main>
      <header id="header">
        <div class="overlay overlay-lg">
          <img src="./img/shapes/square.png" class="shape square" alt="" />
          <img src="./img/shapes/circle.png" class="shape circle" alt="" />
          <img src="./img/shapes/half-circle.png" class="shape half-circle1" alt=""/>
          <img src="./img/shapes/half-circle.png" class="shape half-circle2" alt=""/>
          <img src="./img/shapes/x.png" class="shape xshape" alt="" />
          <img src="./img/shapes/wave.png" class="shape wave wave1" alt="" />
          <img src="./img/shapes/wave.png" class="shape wave wave2" alt="" />
          <img src="./img/shapes/triangle.png" class="shape triangle" alt="" />
          <img src="./img/shapes/letters.png" class="letters" alt="" />
          <img src="./img/shapes/points1.png" class="points points1" alt="" />
        </div>

        <nav>
          <div class="container">
            <div class="logo">
              <img src="img/logo1.png" alt="" />
            </div>

            <div class="links">
              <ul>
                <li>
                  <a href="contact_us.php">Contact Us</a>
                </li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </div>


        </nav>

        <div class="header-content">
          <div class="container grid-2">

          <?php
              if(isset($_SESSION['login']))
              {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
              }

              if(isset($_SESSION['user']))
              {
                 $_SESSION['user'];
              }
              ?>

            <div class="column-1">
              <h1 class="header-title">Bus Pass</h1>
              <p class="text">
                Bus Planet is online bus ticketing platform that has transformed bus travel 
                by bringing ease and convenience to people who travel using buses. 
                Bus Planet is focuses on online tickets and pass management to save your valuable time. By providing 
                widest choice, superior customer service, lowest prices and unmatched benefits, Bus Planet is ready to serve 
                their customers.
              </p>
              <a href="#" class="btn">Explore</a>
            </div>

            <div class="column-2 image">
              <img
                src="./img/shapes/points2.png"
                class="points points2"
                alt=""
              />
              <img src="./img/person.png" class="img-element z-index" alt="" />
            </div>
          </div>
        </div>
      </header>

      <section id = "ABOUT">
        <div class = "about">
            <h1 class = "text-center">About Us</h1>
                <h3 class = "text-center">Devlopers & Founders</h3>
                <div class ="found">
                    <div class ="sec">
                    <img src="img/vector1.jpg" class="img2" >
                    <p class = "para1">Bus Planet is online bus ticketing platform that has transformed bus travel 
                        by bringing ease and convenience to people who travel using buses. 
                        Bus Planet is focuses on online tickets and pass management to save your valuable time.</p>
                    </div>
                    <div class ="sec">
                        <p class = "para2">Bus Planet is online bus ticketing platform that has transformed bus travel 
                            by bringing ease and convenience to people who travel using buses. 
                            Bus Planet is focuses on online tickets and pass management to save your valuable time.</p>
                    <img src="img/vector2.jpg" class="img3" >
                    </div>
                    <div class ="sec">
                    <img src="img/vector3.jpg" class="img2" >
                    <p class = "para1">Bus Planet is online bus ticketing platform that has transformed bus travel 
                        by bringing ease and convenience to people who travel using buses. 
                        Bus Planet is focuses on online tickets and pass management to save your valuable time.</p>
                    </div>
                    <div class ="sec">
                        <p class = "para2">Bus Planet is online bus ticketing platform that has transformed bus travel 
                            by bringing ease and convenience to people who travel using buses. 
                            Bus Planet is focuses on online tickets and pass management to save your valuable time.</p>
                    <img src="img/vector4.jpg" class="img3" >
                    </div>
                </div>
        </div>
        </section>

        <div class="footer">
            <p class="text-center">2022 All rights are reserved. Developed By <a href="#"><strong>BUS PLANET</strong></a></p>
        </div>

      </main>
    </body>
</html>