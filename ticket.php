<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bus Planet-Contact Us</title>
    <link rel="stylesheet" href="CSS/contact_us.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's book ticket</h3>
          <p class="text">
            We are here for you 24/7, if you need any advice or having any 
            difficulties in booking tickets, we will resolve your query!!
          </p>

          <div class="info">
          <?php 
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
          ?>
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>Chandigarh University, 140413</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>bus_planet_world@gmail.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>6254-456-789</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="" method="POST" autocomplete="off">
            <h3 class="title">Book Ticket</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Name</label>
              
            </div>
            <div class="input-container">
            <h5 class="title">Gender</h5>
                <input type="radio" name="active" value="Male">Male
                <input type="radio" name="active" value="Female">Female
                <!-- <label for="">Gender</label> -->
                
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="mobile" class="input" />
              <label for="">Mobile</label>
              <span>Mobile</span>
            </div>
            <div class="dropdown">
                <select>
                    <option value="city">Select Location</option>
                    <option value="kharar">Kharar</option>
                    <option value="sector-17">Sector 17</option>
                    <option value="sector-22">Sector 22</option>
                    <option value="sector-45">Sector 45</option>
                </select>
                <select>
                    <option value="city">Destination</option>
                    <option value="kharar">Kharar</option>
                    <option value="sector-17">Sector 17</option>
                    <option value="sector-22">Sector 22</option>
                    <option value="sector-45">Sector 45</option>
                </select>
            </div>
            <br>
            <input type="submit" name="submit" value="Book" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="JS/contact_us.js"></script>
  </body>
</html>

<?php
    //process the value from form and save it in database
    //check wether button is clicked or not
    
    if(isset($_POST['submit']))
    {
        
        $name = $_POST['name'];

        if(isset($_POST['active']))
        {
            $active=$_POST['active'];
        }
        else
        {
            $active = "Female";
        }

        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        //SQL query  to save the data into database

        $sql = "INSERT INTO tbl_ticket SET
            name = '$name',
            email = '$email',
            mobile = '$mobile'
        ";

        //execute query and save data in database
        $res = mysqli_query($conn, $sql);
    
        //check wether query is inserted or not
        if($res==TRUE)
        {
            //Data Inserted
            //echo "Data Inserted";
            $_SESSION['add']= "<div class='sucess'>Ticket Booked Sucessfully</div>";

            header("location:".SITEURL.'index.php');
        }
        else
        {
            //Failed to insert data
            //echo "failed to insert data";
            $_SESSION['add']= "<div class='error'>Failed to Book Ticket</div>";

            header("location:".SITEURL.'ticket.php');
        }
    }

?>
