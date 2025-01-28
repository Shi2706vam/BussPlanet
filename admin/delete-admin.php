<?php

//include constant.php
include('../config/constants.php');

//get the id of admin to be deleted
$id = $_GET['id'];

//create sql query to delete admin
$sql = "DELETE FROM tbl_admin WHERE id=$id";

//execute query
$res = mysqli_query($conn,$sql);

//check wether query executed sucessfully or not
if($res==TRUE)
{
    //query executed sucessfully
    //echo "Admin deleted";
    //create session variable to display message
    $_SESSION['delete'] = "<div class='sucess'>Admin Deleted Sucessfully.</div>";

    header('location:'.SITEURL.'admin/manage-admin.php');
}
else
{
    //failed to delete admin
    //echo "Failed to delete Admin";
    $_SESSION['delete'] = "<div class='error'>Failed to Delete Admin. Try Again Later.</div>";
    header('location:'.SITEURL.'admin/manage-admin.php');
}

//redirect to manage admin page  with message

?>