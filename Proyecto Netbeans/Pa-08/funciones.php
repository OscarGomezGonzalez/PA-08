<!-- Custom styles for this template -->
<link rel="stylesheet" href="assets/css/style.css">
<link href="assets/bootstrap/css/blog-home.css" rel="stylesheet">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
<link rel="stylesheet" href="assets/fonts/ionicons.min.css">
<link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
<link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">


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

function deleteDirectory($dir) {
    if(!$dh = @opendir($dir)) return;
    while (false !== ($current = readdir($dh))) {
        if($current != '.' && $current != '..') {
            echo 'Se ha borrado el archivo '.$dir.'/'.$current.'<br/>';
            if (!@unlink($dir.'/'.$current)) 
                deleteDirectory($dir.'/'.$current);
        }       
    }
    closedir($dh);
    echo 'Se ha borrado el directorio '.$dir.'<br/>';
    @rmdir($dir);
}


function setDateFormat($fecha) {

    //$newDate = date("d-m-Y", strtotime($fecha)); 
    setlocale(LC_TIME, "es_ES");
    $newDate=strftime("%A, %d de %B de %Y", strtotime($fecha));
    //$newDate = date("%A, %d de %B de %Y", strtotime($fecha));
    return $newDate;
}


