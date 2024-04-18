<?php




function insertStudent($dataStudent) {

    require 'conn.php';

    $ID = $dataStudent['id'];
    $name = $dataStudent['name'];
    $email = $dataStudent['email'];
    $phone = $dataStudent['phone'];
    $depart = $dataStudent['depart'];
    $group_name = $dataStudent['group-name'];
    $year = date("Y");

    $sql = "INSERT INTO student (Stu_ID, Name, Email, Phone, Depart, Group_Name, Year) VALUES (
        '$ID','$name','$email','$phone','$depart','$group_name','$year')";
        

    $conn->query($sql);    

    $conn->close();


}



function insertGroupInfo($dataGroup) {


    require 'conn.php';

    $sql = "SELECT Name FROM managers";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

            if($dataGroup['name'] == $row['Name']) {
                return "Error:不能使用此名稱";
            }
        }
    }


    $name = $dataGroup['name'];
    $pswd = $dataGroup['password'];
    $leader = $dataGroup['leaderName'];
    $project = $dataGroup['project'];
    $institute = $dataGroup['project-institute'];
    $professor = $dataGroup['professor'];
    $isVerified = $dataGroup['isVerified'];
    $competition = $dataGroup['participateCompetition'];
    $year = $dataGroup['year'];


    $sql = "INSERT INTO groupinfo (Name, Password, Leader_Name, Project_Name, Project_Institute, Professor, isVerified, ParticipateCompetition, Year) VALUES (
        '$name',AES_ENCRYPT('$pswd','ailab120'),'$leader','$project','$institute','$professor','$isVerified','$competition','$year')";
    
    if(!$conn->query($sql)) {
        return $conn->error;
    }

    $sql = "INSERT INTO votings (Group_Name, Count, Year) VALUES (
        '$name','0','$year')";
    
    if(!$conn->query($sql)) {
        return $conn->error;
    }

    if ( $competition == 1 ) {
        $sql = "INSERT INTO participatecompetition_grade (`Name`, `Leader_Name`, `Project_Name`, `Professor`, `ParticipateCompetition`, `Year`, `Grade_Reviewer1`, `Comment_Reviewer1`, `Grade_Reviewer2`, `Comment_Reviewer2`, `Grade_Reviewer3`, `Comment_Reviewer3`, `total`,`Remark`) VALUES (
            '$name','$leader','$project','$professor','$competition','$year', 0,'', 0,'', 0,'', 0,'')";

        if(!$conn->query($sql)) {
            return "Error:競賽組寫入資料錯誤";
        }
    }

    $conn->close();


    return "";

}



function insertRequirement($requirement) {
    require 'conn.php';

    $group_name = $requirement['group-name'];
    $need_table = $requirement['need-table'];
    $need_powersupply = $requirement['need-powersupply'];


    $sql = "INSERT INTO requirement (Group_Name, Need_Table, Need_PowerSupply) VALUES 
            ('$group_name','$need_table','$need_powersupply')";



    $conn->query($sql);

    $conn->close();

}



?> 