<?php


// Update group information
if(isset($_POST['group_name']) && isset($_POST['command'])) {

    require 'conn.php';

    $cmd = $_POST['command']; 
    $group_name = $_POST['group_name'];
    $year = date("y");


    if($cmd == "verify") {
        $sql = "UPDATE groupinfo SET isVerified = 1 WHERE Name = '$group_name' AND Year = $year";
    }
    else if($cmd == "delete") {
        $sql = "DELETE FROM groupinfo WHERE Name = '$group_name' AND Year = $year";
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






?> 