<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1><strong>Add Admin</strong></h1>
        <br/><br/>

        <?php 
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>

        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full Name</td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter Your Name">
                    </td>
                </tr>

                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" placeholder="Your Username">
                    </td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" placeholder="Your Password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>

        </form>
    </div>
</div>

<?php include('partials/footer.php');?>

<?php
    //process the value from form and save it in database
    //check wether button is clicked or not
    
    if(isset($_POST['submit']))
    {
        //button clicked
        //echo"Button Clicked";

        //get data fron form
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);//password encryption with md5

        //SQL query  to save the data into database

        $sql = "INSERT INTO tbl_admin SET
            full_name='$full_name',
            username='$username',
            password='$password'
        ";

        //execute query and save data in database
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn,$sql));
    
        //check wether query is inserted or not
        if($res==TRUE)
        {
            //Data Inserted
            //echo "Data Inserted";
            $_SESSION['add']= "<div class='sucess'>Admin Added Sucessfully</div>";

            header("location:".SITEURL.'admin/manage-admin.php');
        }
        else
        {
            //Failed to insert data
            //echo "failed to insert data";
            $_SESSION['add']= "<div class='error'>Failed to Add Admin</div>";

            header("location:".SITEURL.'admin/add-admin.php');
        }
    }

?>