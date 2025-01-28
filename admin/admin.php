<?php include('partials/menu.php');?>

        <div class="main-content">
          <div class="wrapper">
            <h1><strong>DASHBOARD</strong></h1>

            <br>

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

              <br>
            <div class="col-3 text-center">
              <h1>5</h1>
              <br/>
              Services
            </div>

            <div class="col-3 text-center">
              <h1>5</h1>
              <br/>
              Tickets
            </div>

            <div class="col-3 text-center">
              <h1>5</h1>
              <br/>
              Passes
            </div>

            <div class="clearfix"></div>
          </div>
        </div>

        <?php include('partials/footer.php');?>
