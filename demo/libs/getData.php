<?php


$weeklist = array('日', '一', '二', '三', '四', '五', '六');



function getExhibitionDateAndPlace () {

    require 'conn.php';


    $sql = "SELECT Day, Place, isExhibitionDay FROM dateinfo WHERE isExhibitionDay = 1";
    $result = $conn->query($sql);
    $conn->close();

    if ($result->num_rows > 0) {        
        $row = $result->fetch_assoc();
        $dateAndPlace = array('date' => $row["Day"], 'place' => $row["Place"]);        
    }     
    
    $result = null;

    return $dateAndPlace;

}



function getSignupInfo() {

    require 'conn.php';


    $sql = "SELECT Content FROM news WHERE isSignupInfo = 1";
    $result = $conn->query($sql);
    $conn->close();

    $content = "";

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $content = $row['Content'];
    }

    return $content;

}




function getNewsAndInfo() {


    require 'conn.php';

    $year = date("Y");

    $sql = "SELECT * FROM news WHERE Type = '最新消息' AND isTopMost = 1 AND Year = $year";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $arrayNews = array('title' => $row['Title'], 'content' => getSubstring($row['Content'],200));
    }
    else {
        $arrayNews = array('title' => "", 'content' => "暫無置頂貼文。");
    }


    $sql = "SELECT * FROM news WHERE Type = '報名須知' AND isTopMost = 1 AND Year = $year";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $arrayInfo = array('title' => $row['Title'], 'content' => getSubstring($row['Content'],200));
    }
    else {
        $arrayInfo = array('title' => "", 'content' => "暫無置頂貼文。");
    }




    $conn->close();
    
    $result = null;

    $arrReturn = array('news' => $arrayNews, 'info' => $arrayInfo);

    return $arrReturn;
}



function getNews() {

    $arrayNews = array();

    require 'conn.php';
    $year = date("Y");

    $sql = "SELECT * FROM news WHERE Type = '最新消息' AND Year = $year ORDER BY TimeUpload DESC";
    $result = $conn->query($sql);
    $conn->close();

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {         

            array_push($arrayNews,array('title' => $row['Title'], 'content' => nl2br($row['Content'],false), 'time' => date("Y/m/d", strtotime($row['TimeUpload']))));                
            
        }
    }     
    
    $result = null;



    return $arrayNews;
}



function getInfo() {

    $arrayInfo = array();

    require 'conn.php';
    $year = date("Y");

    $sql = "SELECT * FROM news WHERE Type = '報名須知' AND Year = $year ORDER BY TimeUpload DESC";
    $result = $conn->query($sql);
    $conn->close();

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {         

            array_push($arrayInfo,array('title' => $row['Title'], 'content' => nl2br($row['Content'],false), 'time' => date("Y/m/d", strtotime($row['TimeUpload']))));                
            
        }
    }     
    
    $result = null;



    return $arrayInfo;
}




function getFeatures() {

    $arrayFeatures = array();

    require 'conn.php';


    $sql = "SELECT * FROM features ORDER BY ItemIndex ASC";
    $result = $conn->query($sql);
    $conn->close();

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) { 
            
            array_push($arrayFeatures, array('title' => $row["Title"], 'content' => $row["Content"], 'icon' => $row["Icon"]));
            
        }
    }     
    
    $result = null;


    return $arrayFeatures;
}



function getImportantDates() {

    $arrayDatesInfo = array();

    $weeklist = array('日', '一', '二', '三', '四', '五', '六');

    require 'conn.php';


    $sql = "SELECT Day, Matter, Content, Link FROM dateinfo ORDER BY Day DESC";
    $result = $conn->query($sql);
    $conn->close();

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) { 
            
            $strDate = date("Y/m/d",strtotime($row["Day"])) . "（" . $weeklist[date('w', strtotime( $row["Day"]))] . "）";

            array_push($arrayDatesInfo, array('date' => $strDate, 'matter' => $row["Matter"], 'content' => $row["Content"], 'link' => $row["Link"]));

            
        }
    }     
    
    $result = null;


    return $arrayDatesInfo;
}








function getDay($toGet) {
    require 'libs/conn.php';

    $sql = "SELECT Day FROM dateinfo WHERE $toGet = 1";
    $result = $conn->query($sql);
    $conn->close();

    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $day = $row['Day'];
        return $day;
    }
    else {
        return null;
    }

}




function getSubstring($string, $length) {

    // 計算是否超過$length字，如果超過自動增加「......」。
    if(mb_strlen($string) > $length) {
        $content = mb_substr(nl2br($string), 0, $length);
        $content = $content . "</br>......";
    }
    else {
        $content = nl2br($string, false);
    }

    return $content;

}




function getDepartGroup() {

    $departGroup = array();

    require 'libs/conn.php';

    $sql = "SELECT * FROM departgroup";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($departGroup, array('id' => $row['id'], 'name' => $row['name']));

        }
    }

    $conn->close();


    return $departGroup;
}


function getDepartGroupWithCount($year) {

    $departGroup = array();

    require 'libs/conn.php';

    $sql = "SELECT departgroup.id,departgroup.name,
    (SELECT COUNT(*) FROM groupinfo,uploads WHERE groupinfo.Project_Institute = departgroup.id AND uploads.isUploaded_Poster = 1 AND uploads.Group_Name = groupinfo.Name AND uploads.Year = $year) AS num 
    FROM departgroup";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

            array_push($departGroup, array('id' => $row['id'], 'name' => $row['name'], 'count' => $row['num']));

        }
    }

    $conn->close();


    return $departGroup;
}



?> 