<?php
    $sever = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'udn';
    $conn = mysqli_connect($sever, $user, $pass, $db);
    mysqli_query($conn, "set names 'utf8'");