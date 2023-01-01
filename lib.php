<?php

    error_reporting(1);
    ini_set("display_errors", 1);

    $connect = mysqli_connect("localhost", "share","aktwlq","share");

    if(mysqli_connect_error()){
        echo "mysqul 접속중 오류가 발생했습니다. ";
        echo mysqli_connect_error();
        }
