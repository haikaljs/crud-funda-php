<?php 

    $con = mysqli_connect("localhost", "root", "", "crud-php-funda" );

    if(!$con){
        die('Connection to db failed! ' .  mysqli_connect_error());
    }


?>