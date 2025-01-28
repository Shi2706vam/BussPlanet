<?php include('config/constants.php');?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="CSS/style1.css" />
    <title>Buss Planet -Sign in & Sign up</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" method="POST" class="sign-in-form">
            <h2 class="title">Sign in</h2>

              <?php
                          
                          if(isset($_SESSION['add']))
                          {
                              echo $_SESSION['add'];
                              unset($_SESSION['add']);
                          }
                          

              if(isset($_SESSION['login']))
               {
                  echo $_SESSION['login'];
                  unset($_SESSION['login']);
                }

              if(isset($_SESSION['no-login-message']))
                {
                  echo $_SESSION['no-login-message'];
                  unset($_SESSION['no-login-message']);
                }
              ?> 

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" name="submit1" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          

           <?php
                //process the value from form and save it in database
                //check wether button is clicked or not
                
                if(isset($_POST['submit1']))
                {
                    //get data from form
                    $username = $_POST['username'];
                    $password = md5($_POST['password']);//password encryption with md5

                    //SQL query  to check the data into database

                    $sql = "SELECT * FROM tbl_user WHERE
                        username='$username' AND
                        password='$password'
                    ";

                    $res1 = mysqli_query($conn, $sql);

                    $count1 = mysqli_num_rows($res1);

                    if($count1==1)
                    {
                        $_SESSION['login'] = "<div class='sucess'>Login Sucessfull</div>";
                        $_SESSION['user'] = $username;
                        header('location:'.SITEURL.'index.php');
                    }
                    else
                    {
                      $_SESSION['login'] = "<div class='error'>Username or Password did not match.</div>";
                      header('location:'.SITEURL.'sign.php');
                    }
                
                }

            ?>

          </form>

          <form action="" method="POST" class="sign-up-form">
            <h2 class="title">Sign up</h2>



            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" name="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <?php
              //process the value from form and save it in database
              //check wether button is clicked or not
              
              if(isset($_POST['submit']))
              {
                  //button clicked
                  //echo"Button Clicked";

                  //get data fron form
                  
                  $username = $_POST['username'];
                  $email = $_POST['email'];
                  $password = md5($_POST['password']);//password encryption with md5

                  //SQL query  to save the data into database

                  $sql = "INSERT INTO tbl_user SET
                      username='$username',
                      email='$email',
                      password='$password'
                  ";

                  //execute query and save data in database
                  $res = mysqli_query($conn, $sql) or die(mysqli_error($conn,$sql));
              
                  //check wether query is inserted or not
                  if($res==TRUE)
                  {
                      //Data Inserted
                      //echo "Data Inserted";
                      $_SESSION['add']= "<div class='sucess'>Sign Up sucessful</div>";

                      header("location:".SITEURL.'sign.php');
                  }
                  else
                  {
                      //Failed to insert data
                      //echo "failed to insert data";
                      $_SESSION['add']= "<div class='error'>Failed to Add User</div>";

                      header("location:".SITEURL.'sign.php');
                  }
              }

          ?>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="JS/app.js"></script>
  </body>
</html>