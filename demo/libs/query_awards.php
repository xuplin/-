<?php





function queryYear() {


    require 'conn.php';


    $sql = "SELECT MAX(Year) AS Max FROM winners";

    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $max = $row['Max'];

    }
    else {
        $max = "";
    }



    $sql = "SELECT MIN(Year) AS Min FROM winners";

    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $min = $row['Min'];

    }
    else {
        $min = "";
    }


    $conn->close();

    $value = array('Max' => $max , 'Min' => $min);


    return $value;


}



function getAwardResult($year) {

    require 'conn.php';

    $sql = "SELECT Group_Name, Project, Professor, Students, Prize FROM winners WHERE Year = '$year' ORDER BY OrderIndex ASC";

    $result = $conn->query($sql);

    $awards = array();

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($awards, array(
                'name' => $row['Group_Name'],
                'project' => $row['Project'], 
                'professor' => nl2br($row['Professor']), 
                'student' => nl2br($row['Students']), 
                'prize' => $row['Prize']
                ));
        }
    }

    $conn->close();

    return $awards;

}



?> 