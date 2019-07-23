<?php
    //defining database,username, password and the database name
   define('DB_SERVER', 'sql103.epizy.com');
   define('DB_USERNAME', 'epiz_24083890');
   define('DB_PASSWORD', '123@123');
   define('DB_DATABASE', 'epiz_24083890_rpa2');
   $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   session_start();
?>