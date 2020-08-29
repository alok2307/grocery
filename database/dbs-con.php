<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "groceryshop";

    $conn = mysqli_connect($host, $user, $pass);

    if(!$conn){
        die("Sorry we faild to connection : ".mysqli_connect_error());
    }
  


?>