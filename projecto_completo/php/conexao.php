<?php
    $con = new mysqli('localhost','root','chrisgomez','nesinfo');

    if($con->connect_error){
        echo 'erro', $con->connect_error;
    }
?>