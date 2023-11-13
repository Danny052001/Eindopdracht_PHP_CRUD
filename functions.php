<?php

require_once 'database.php';

function display_data(){
    global $con;
    $query = "SELECT * FROM `project1`";
    $result = mysqli_query($con, $query);
    return $result;
}

?>