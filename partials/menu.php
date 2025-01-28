<?php 

include('../config/constants.php');
include('login-check.php');

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bus Planet - Admin</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="CSS/admin.css" />
  </head>
  <body>
        <div class="menu text-center">

          <div class="wrapper">
            <ul>
              <li><a href="admin.php">Home</a></li>
              <li><a href="manage-admin.php">Admin</a></li>
              <li><a href="manage-services.php">Services</a></li>
              <li><a href="manage-tickets.php">Tickets</a></li>
              <li><a href="manage-passes.php">Passes</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </div>
        </div>