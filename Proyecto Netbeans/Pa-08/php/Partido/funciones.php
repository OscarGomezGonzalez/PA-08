<?php

function conexionDB() {
    //Connect to database
    $con = mysqli_connect("localhost", "root", "");

//check connection
    if (!$con) {
        die("ERROR: Can't connect to host");
    }
    $db = mysqli_select_db($con, "pa_08");

    if (!$db) {
        die("ERROR: Can't connect to DB ");
    }
    mysqli_set_charset($con, "utf-8");
    return $con;
}
