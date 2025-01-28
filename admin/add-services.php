<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Services</h1>
        <br><br>

        <?php 
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>
        <br>

        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td>
                        <input type="text" name="title" placeholder="Service Title">
                    </td>
                </tr>
                <tr>
                    <td>Select Image: </td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>
                <tr>
                    <td>Featrured: </td>
                    <td>
                        <input type="radio" name="featured" value="Yes">Yes
                        <input type="radio" name="featured" value="No">No
                    </td>
                </tr>
                <tr>
                    <td>Active: </td>
                    <td>
                        <input type="radio" name="active" value="Yes">Yes
                        <input type="radio" name="active" value="No">No
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Service" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>

        <?php
        
        if(isset($_POST['submit']))
        {
            //button clicked
            //echo"Button Clicked";
    
            //get data fron form
            $title = $_POST['title'];

            if(isset($_POST['featured']))
            {
                $featured=$_POST['featured'];
            }
            else
            {
                $featured = "No";
            }

            if(isset($_POST['active']))
            {
                $active=$_POST['active'];
            }
            else
            {
                $active = "No";
            }

            
            
            //SQL query  to save the data into database
    
            $sql = "INSERT INTO tbl_services SET
                title='$title',
                featured='$featured',
                active='$active'

            ";

            $res = mysqli_query($conn, $sql);
                
            if($res==TRUE)
            {
                //Data Inserted
                //echo "Data Inserted";
                $_SESSION['add']= "<div class='sucess'>Service Added Sucessfully</div>";

                header("location:".SITEURL.'admin/manage-services.php');
            }
            else
            {
                //Failed to insert data
                //echo "failed to insert data";
                $_SESSION['add']= "<div class='error'>Failed to Add Service</div>";

                header("location:".SITEURL.'admin/add-services.php');
            }
        }
        
        ?>

    </div>
</div>

<?php include('partials/footer.php');?>