<?php include('partials/menu.php');?>

<div class="main-content">
          <div class="wrapper">

            <h1><strong>Manage Services</strong></h1>
            <br/>

            <?php 
              if(isset($_SESSION['add']))
              {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
              }
              ?>

              <br>

            <!-- button -->
            <a href="<?php echo SITEURL; ?>admin/add-services.php" class="btn-primary">Add Services</a>
            <br/>
            <br/>
            <br/>

            <table class="tbl-full">
              <tr>
                <th>S.No.</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Actions</th>
              </tr>

              <tr>
                <td>1.</td>
                <td>Raj Aryan</td>
                <td>rajaryan</td>
                <td>
                  <a href="#" class="btn-secondary">Update Admin</a>
                  <a href="#" class="btn-danger">Delete Admin</a>
                </td>
              </tr>

              <tr>
                <td>2.</td>
                <td>Raj Aryan</td>
                <td>rajaryan</td>
                <td>
                  <a href="#" class="btn-secondary">Update Admin</a>
                  <a href="#" class="btn-danger">Delete Admin</a>
                </td>
              </tr>

              <tr>
                <td>3.</td>
                <td>Raj Aryan</td>
                <td>rajaryan</td>
                <td>
                  <a href="#" class="btn-secondary">Update Admin</a>
                  <a href="#" class="btn-danger">Delete Admin</a>
                </td>
              </tr>

            </table>

          </div>
        </div>

<?php include('partials/footer.php');?>