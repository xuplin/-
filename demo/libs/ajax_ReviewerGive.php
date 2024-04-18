<?php

    require 'conn.php';
    
    if ( isset($_POST['groupname']) && isset($_POST['whoviewer']) && isset($_POST['grade']) ) {
        $grade = $_POST['grade'];
        $name = $_POST['groupname'];
        $viewer = 'Grade_Reviewer'.$_POST['whoviewer'];
        
        
        $sql = "UPDATE participatecompetition_grade SET $viewer = '$grade' WHERE Name = '$name'";

        if ($conn->query($sql)) {
            $conn->close();
            echo json_encode(1);
        } else {
            $conn->close();
            echo json_encode(0);
        }

    }

    if ( isset($_POST['groupname']) && isset($_POST['whoviewer']) && isset($_POST['comment']) ) {
        $comment = $_POST['comment'];
        $name = $_POST['groupname'];
        $viewer = 'Comment_Reviewer'.$_POST['whoviewer'];
        
        
        $sql = "UPDATE participatecompetition_grade SET $viewer = '$comment' WHERE Name = '$name'";

        if ($conn->query($sql)) {
            $conn->close();
            echo json_encode(1);
        } else {
            $conn->close();
            echo json_encode(0);
        }

    }

?>