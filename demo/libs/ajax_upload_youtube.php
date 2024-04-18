<?php


// Upload youtube video id
if(isset($_POST['youtube']) && isset($_POST['user'])) {

    require 'conn.php';

    $url = $_POST['youtube']; 
    $user = $_POST['user'];
    $year = date("Y");

    $sql = "SELECT * FROM uploads WHERE Group_Name = '$user' AND Year = $year";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        // 有資料，UPDATE
        $sql = "UPDATE uploads SET Link_Youtube = '$url' WHERE Group_Name = '$user' AND Year = $year";
    }
    else {
        // 沒資料，INSERT
        $sql = "INSERT INTO uploads (Group_Name, Link_Youtube, Year) VALUES ('$user', '$url', $year)";
    }

    if($conn->query($sql)) {
        $conn->close();
        echo json_encode(array('status' => 'successful'));
    }
    else {
        $conn->close();
        echo json_encode(array('status' => 'unsuccessful', 'error' => $conn->error));
    }

}



// Query youtube video id
if(isset($_POST['query_user'])) {

    $user = $_POST['query_user'];
    $year = date("y");

    require 'conn.php';


    $sql = "SELECT Link_Youtube FROM uploads WHERE Group_Name = '$user' AND Year = $year";
    $result = $conn->query($sql);

    if($result->num_rows > 0) { 
        $row = $result->fetch_assoc();
        $url = $row['Link_Youtube'];
        $conn->close();   
        if($url != null) {
            echo json_encode(array('status' => 'successful', 'url' => $url));  
        } 
        else {
            echo json_encode(array('status' => 'unsuccessful', 'error' => "尚未有資料"));   
        }
    }
    else {
        $conn->close();    
        echo json_encode(array('status' => 'unsuccessful', 'error' => "尚未有資料"));   
    }


}




?> 