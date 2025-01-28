<?php
        //start session
        session_start();


        //create constants to store non repeating values
        define('SITEURL','http://localhost/Buss Planet/');
        define('LOCALHOST','localhost');
        define('DB_USERNAME','root');
        define('DB_PASSWORD','');
        define('DB_NAME','buss-pass');

        
        $conn = mysqli_connect(LOCALHOST,DB_USERNAME) or die(mysqli_error($conn));
        $db_select = mysqli_select_db($conn ,'buss-pass') or die(mysqli_error($conn));

?> 