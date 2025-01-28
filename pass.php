<?php include('menu.php');?>

        <div class="main-content">
          <div class="wrapper">

            <h1><strong>Existing Tickets</strong></h1>
            <br/>

            <?php 
              if(isset($_SESSION['add']))
              {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
              }


              if(isset($_SESSION['user-not-found']))
              {
                echo $_SESSION['user-not-found'];
                unset($_SESSION['user-not-found']);
              }

            ?>

            <br/><br/>

            <!-- button -->
            <a href="add-admin.php" class="btn-primary">Add Admin</a>
            <br/>
            <br/>

            <table class="tbl-full">
              <tr>
                <th>S.No.</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Mobile No.</th>
              </tr>

              <?php 
              //query to get all admin
                $sql = "SELECT * FROM tbl_tickets";

                $res = mysqli_query($conn, $sql);

                if($res==TRUE)
                {
                  $count = mysqli_num_rows($res);

                  $sn=1;

                  if($count>0)
                  {
                      while($rows=mysqli_fetch_assoc($res))
                      {
                          $id=$rows['id'];
                          $name=$rows['name'];
                          $active=$rows['active'];
                          $email=$rows['email'];
                          $mobile=$rows['mobile'];

                          ?>

                            <tr>
                              <td><?php echo $sn++; ?></td>
                              <td><?php echo $name; ?></td>
                              <td><?php echo $active; ?></td>
                              <td><?php echo $email; ?></td>
                              <td><?php echo $mobile; ?></td>
                            </tr> 

                          <?php
                      }
                  }
                  else
                  {

                  }
                }
              ?>

            </table>

          </div>
        </div>

<?php include('admin/partials/footer.php');?>