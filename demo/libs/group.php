<?php

function getGroupParticipateCompetition($isParticipateCompetition) {
    
    $arrayGroupNotInfo = array();
    
        require 'conn.php';
    
    
        /*
        // 判斷這學期應該撈groupinfo.year為幾年度的組別
        $thisYear = date("Y") - 1;  // -1測試用
        $thisMonth = date("n") - 9;
        if($thisMonth < 0) {
            $thisYear--;
        }
        // 現在用不到了，因為每一年會清空一次Groupinfo
        */
    
    
        $year = date("Y");
        $sql = "SELECT Name, Leader_Name, Professor, ParticipateCompetition , TimeSignUp  FROM groupinfo WHERE ParticipateCompetition = $isParticipateCompetition AND Year = $year ORDER BY TimeSignUp ASC";
        $result = $conn->query($sql);

        $sql_average = "SELECT Grade_Reviewer1, Grade_Reviewer2, Grade_Reviewer3 FROM participatecompetition_grade WHERE ParticipateCompetition = $isParticipateCompetition AND Year = $year";
        $result_average = $conn->query($sql_average);
    
        if ($result->num_rows > 0 && $result_average->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { 
                if ( $row_average = $result_average->fetch_assoc() ) {
                    if($row['ParticipateCompetition'] == 1) {
                        $group = "競賽組";
                    }
                    else {
                        $group = "一般組";
                    }
        
                    $groupname = $row['Name'];
                    $leader = $row['Leader_Name'];
        
                    $sql_stu = "SELECT Name, Depart FROM student WHERE Group_Name = '$groupname' AND Name != '$leader'";
                    $result_stu = $conn->query($sql_stu);
                    $stu = "";
                    $count = 0;
        
                    if($result_stu->num_rows > 0) {
                        while($row_stu = $result_stu->fetch_assoc()) { 
                            $count++;
                            if($count == $result_stu->num_rows) {
                                $stu = $stu . $row_stu['Name'];
                                $stu = $stu . " (" . $row_stu['Depart'] . ")";
                            }
                            else {
                                $stu = $stu . $row_stu['Name'];
                                $stu = $stu . " (" . $row_stu['Depart'] . ")</br>";
                            }
                        }
                    }
        
        
                    $sql_ld = "SELECT Depart FROM student WHERE Group_Name = '$groupname' AND Name = '$leader'";
                    $result_ld = $conn->query($sql_ld);
                    if($result_ld->num_rows > 0) {
                        $row_ld = $result_ld->fetch_assoc();
                        $leader = $leader . " (" . $row_ld["Depart"] . ")";
                    }
        
        
                    $sql_need = "SELECT Need_Table, Need_PowerSupply FROM requirement WHERE Group_Name = '$groupname'";
                    $result_need = $conn->query($sql_need);
                    $needs = "";
        
                    if($result_need->num_rows > 0) {
                        $row_need = $result_need->fetch_assoc();
                        
                        if($row_need['Need_Table']) {
                            if($needs == "") {
                                $needs = "桌子";
                            }
                        }
        
                        if($row_need['Need_PowerSupply']) {
                            if($needs == "") {
                                $needs = "電源";
                            }
                            else {
                                $needs = $needs . "</br>電源";
                            }
                        }
        
                        if($needs == "") {
                            $needs = "僅海報";
                        }
                        
                    }

                    $grade = round(($row_average['Grade_Reviewer1'] + $row_average['Grade_Reviewer2'] + $row_average['Grade_Reviewer3']) / 3,2);

                    array_push($arrayGroupNotInfo, array(
                        'group' => $group, 
                        'group_name' => $row['Name'], 
                        'leader' => $leader, 
                        'members' => $stu, 
                        'professor' => nl2br($row['Professor']) ,
                        'needs' => $needs, 
                        'timeSignup' => $row['TimeSignUp'],
                        'grade_average' => $grade
                        ));
                }
            }
        } 
        
        $conn->close();    
        
        $result = null;
    
    
        return $arrayGroupNotInfo;
}


function getGroupInfo ($isVerified) {

    $arrayGroupNotInfo = array();

    require 'conn.php';


    /*
    // 判斷這學期應該撈groupinfo.year為幾年度的組別
    $thisYear = date("Y") - 1;  // -1測試用
    $thisMonth = date("n") - 9;
    if($thisMonth < 0) {
        $thisYear--;
    }
    // 現在用不到了，因為每一年會清空一次Groupinfo
    */


    $year = date("Y");
    $sql = "SELECT Name, Leader_Name, Professor, ParticipateCompetition , TimeSignUp FROM groupinfo WHERE isVerified = $isVerified AND Year = $year ORDER BY TimeSignUp ASC";

    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) { 

            if($row['ParticipateCompetition'] == 1) {
                $group = "競賽組";
            }
            else {
                $group = "一般組";
            }

            $groupname = $row['Name'];
            $leader = $row['Leader_Name'];

            $sql_stu = "SELECT Name, Depart FROM student WHERE Group_Name = '$groupname' AND Name != '$leader'";
            $result_stu = $conn->query($sql_stu);
            $stu = "";
            $count = 0;

            if($result_stu->num_rows > 0) {
                while($row_stu = $result_stu->fetch_assoc()) { 
                    $count++;
                    if($count == $result_stu->num_rows) {
                        $stu = $stu . $row_stu['Name'];
                        $stu = $stu . " (" . $row_stu['Depart'] . ")";
                    }
                    else {
                        $stu = $stu . $row_stu['Name'];
                        $stu = $stu . " (" . $row_stu['Depart'] . ")</br>";
                    }
                }
            }


            $sql_ld = "SELECT Depart FROM student WHERE Group_Name = '$groupname' AND Name = '$leader'";
            $result_ld = $conn->query($sql_ld);
            if($result_ld->num_rows > 0) {
                $row_ld = $result_ld->fetch_assoc();
                $leader = $leader . " (" . $row_ld["Depart"] . ")";
            }


            $sql_need = "SELECT Need_Table, Need_PowerSupply FROM requirement WHERE Group_Name = '$groupname'";
            $result_need = $conn->query($sql_need);
            $needs = "";

            if($result_need->num_rows > 0) {
                $row_need = $result_need->fetch_assoc();
                
                if($row_need['Need_Table']) {
                    if($needs == "") {
                        $needs = "桌子";
                    }
                }

                if($row_need['Need_PowerSupply']) {
                    if($needs == "") {
                        $needs = "電源";
                    }
                    else {
                        $needs = $needs . "</br>電源";
                    }
                }

                if($needs == "") {
                    $needs = "僅海報";
                }
                
            }
            
            array_push($arrayGroupNotInfo, array(
                'group' => $group, 
                'group_name' => $row['Name'], 
                'leader' => $leader, 
                'members' => $stu, 
                'professor' => nl2br($row['Professor']) ,
                'needs' => $needs, 
                'timeSignup' => $row['TimeSignUp']
                ));

        }
    } 
    
    $conn->close();    
    
    $result = null;


    return $arrayGroupNotInfo;


}



function getGroupIsCompetionOrNot($groupname) {
    require 'libs/conn.php';

    $sql = "SELECT ParticipateCompetition  FROM groupinfo WHERE Name = '$groupname'";
    $result = $conn->query($sql);
    $conn->close();


    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $isCompetition = $row['ParticipateCompetition'];

        if($isCompetition == 1) {
            return true;
        }
        else {
            return false;
        }
    }
    else {
        return false;
    }

}

function getGroupProject($groupname) {
    require 'libs/conn.php';

    $sql = "SELECT Project_Name FROM groupinfo WHERE Name = '$groupname'";
    $result = $conn->query($sql);
    $conn->close();


    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $project = $row['Project_Name'];

        return $project;
    }
    else {
        return null;
    }

}



function getGroupWithUploadPosterByDepartgroupID($departgroup_id, $year) {

    $group = array();

    require 'libs/conn.php';

    $sql = "SELECT Name,Project_Name,Leader_Name,Professor 
    FROM groupinfo,uploads 
    WHERE uploads.Group_Name = groupinfo.Name 
    AND uploads.isUploaded_Poster = 1 
    AND groupinfo.Project_Institute = $departgroup_id
    AND uploads.Year = $year
    AND groupinfo.Year = $year";

    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {


            $groupname = $row['Name'];
            $leader = $row['Leader_Name'];

            $sql_stu = "SELECT Name FROM student WHERE Group_Name = '$groupname' AND Name != '$leader'";
            $result_stu = $conn->query($sql_stu);
            $stu = "";
            $count = 0;

            if($result_stu->num_rows > 0) {
                while($row_stu = $result_stu->fetch_assoc()) { 
                    $count++;
                    if($count == $result_stu->num_rows) {
                        $stu = $stu . $row_stu['Name'];
                    }
                    else {
                        $stu = $stu . $row_stu['Name'] . "、";
                    }
                }
            }



            array_push($group, array('name' => $row['Name'], 'project' => $row['Project_Name'], 'professor' => str_replace("\n","、",$row['Professor']), 'leader' => $row['Leader_Name'], 'students' => $stu));

        }
    }

    $conn->close();


    return $group;
}






?> 