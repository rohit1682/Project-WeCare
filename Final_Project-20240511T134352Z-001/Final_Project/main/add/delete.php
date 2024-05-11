<?php

include('dbconnect.php');

    $delId = $_GET['id'];
    
    $query ="DELETE FROM data WHERE (id = '$delId')";

    $sql =mysqli_query($conn,$query);

    if($sql){
        header("location: Admin.php");
    }
?> 