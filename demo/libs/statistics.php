<?php


function recordViews() {

    require 'conn.php';

    //date_default_timezone_set("Asia/Taipei");   // 設定時區為台灣
    // 修改php.ini 的timezone
    
    $page = basename($_SERVER['PHP_SELF']);
    $today = date("Y-m-d");

    $sql = "SELECT * FROM statistics WHERE Page = '$page' AND Day = '$today'";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        // Update the record

        $sql = "UPDATE statistics SET Count = Count + 1 WHERE Page = '$page' AND Day = '$today'";
        $conn->query($sql);

        $conn->close();

        return "1";
    }
    else {
        // Insert a new record
        $sql = "INSERT INTO statistics (Page,Count,Day) VALUES ('$page' , 1 , '$today')";
        $conn->query($sql);

        $conn->close();

        return "0";
    }




}










?> 