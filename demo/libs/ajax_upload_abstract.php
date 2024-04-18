<?php


// Upload abstract
if(isset($_POST['abstract']) && isset($_POST['user'])) {

    require 'conn.php';

    $abstract = str_replace("'","\'", $_POST['abstract']);  // 過濾特殊字元
    
    
    
    
    $user = $_POST['user'];
    $year = date("y");

    $sql = "SELECT * FROM uploads WHERE Group_Name = '$user' AND Year = $year";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        // 有資料，UPDATE
        $sql = "UPDATE uploads SET Abstract = '$abstract' WHERE Group_Name = '$user' AND Year = $year";
    }
    else {
        // 沒資料，INSERT
        $sql = "INSERT INTO uploads (Group_Name, Abstract, Year) VALUES ('$user', '$abstract', $year)";
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



// Query abstract
if(isset($_POST['query_user'])) {

    $user = $_POST['query_user'];
    $year = date("y");

    require 'conn.php';


    $sql = "SELECT Abstract FROM uploads WHERE Group_Name = '$user' AND Year = $year";
    $result = $conn->query($sql);

    if($result->num_rows > 0) { 
        $row = $result->fetch_assoc();
        $abstract = $row['Abstract'];
        $conn->close();   
        if($abstract != null) {
            echo json_encode(array('status' => 'successful', 'abstract' => $abstract));   
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