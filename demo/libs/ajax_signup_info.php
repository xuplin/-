<?php



if(isset($_POST['queryAnswer_QID'])) {

    require 'conn.php';

    $ID = str_replace("'", "", $_POST['queryAnswer_QID']); // Prevent SQL Injection

    $sql = "SELECT Answer FROM question WHERE ID = '$ID'";


    $result = $conn->query($sql);
    
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $answer = $row['Answer'];

        $month = date("n",strtotime($answer));
        $day = date("j",strtotime($answer));

    }

    $conn->close();


    echo json_encode(array('month' => $month , 'day' => $day));

}











?> 