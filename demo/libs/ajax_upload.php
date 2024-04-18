<?php





require_once 'loggingStatus.php';

$user = getUsername();







if(isset($_FILES['upload_poster'])) {
    $maxSizeMB = 30;

    $fileToUpload = 'upload_poster';

    $filename = "poster.pdf";
}
else if(isset($_FILES['upload_other'])) {
    $maxSizeMB = 100;

    $fileToUpload = 'upload_other';

    $filename = "other.pdf";
}
else {

    echo json_encode(array('status' => 'unsuccessful', 'error' => '尚未選取檔案。'));
    die();
}












if($_FILES[$fileToUpload]['error'] > 0) {


    echo json_encode(array('status' => 'unsuccessful', 'error' => $_FILES[$fileToUpload]['error']));

}
else {

    if(false && $_FILES[$fileToUpload]['type'] != "application/pdf") {
        // 檔案格式必須為*.pdf
        echo json_encode(array('status' => 'unsuccessful', 'error' => "檔案格式必須為pdf檔。"));
    }
    else {

        // 如果檔案大小超過
        $fileSize = $_FILES[$fileToUpload]['size'];
        $fileSizeMB = round($fileSize / 1024000 ,2);

        if($fileSizeMB > $maxSizeMB) {
            // 容量超過
            echo json_encode(array('status' => 'unsuccessful', 'error' => "容量超過" . $maxSizeMB . "MB。"));
        }
        else {


            // Create year folder
            $year = date("o");

            $path = "../upload/$year";

            createFolder($path);


            if($user != "") {

                $path = "../upload/$year/$user/";

            }
            else {
                // 不會有此情況發生，因為一定要登入。 
                
                echo json_encode(array('status' => 'unsuccessful', 'error' => "使用者名稱為空值。"));


                die();           
                //$path = "upload/temp/";
            }

            error_log($path);
            error_log($filename);
            $path = mb_convert_encoding($path, 'big5', 'UTF-8');    // 將資料夾名稱編碼為big5，windows下中文只能用big5
            //$path = iconv("UTF-8", "big5", $path); 


            // Create group folder
            createFolder($path);


            // $filename = mb_convert_encoding($_FILES[$fileToUpload]['name'], 'big5', 'UTF-8');
            //$filename = "poster.pdf";

            // Upload file
            if(move_uploaded_file($_FILES[$fileToUpload]['tmp_name'], $path . $filename)) {
                // Upload sucessfully

                require 'conn.php';

                if($filename == "poster.pdf") {
                    // 自己寫的外部程式，讓PDF可以轉檔第一頁，當作預覽的封面頁。
                    exec('C:\wamp64\exec\Exhibition\pdf2jpg\ConvertPDFtoJPG.exe ' . 'C:\wamp64\www' . str_replace("..","",$path) . $filename);


                    $sql = "SELECT * FROM uploads WHERE Group_Name = '$user' AND Year = $year";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0) {
                        $sql = "UPDATE uploads SET isUploaded_Poster = 1 WHERE Group_Name = '$user' AND Year = $year";
                    }
                    else {
                        $sql = "INSERT INTO uploads (Group_Name, isUploaded_Poster, Year) VALUES ('$user',1,$year)";
                    }
                    

                }
                else if($filename == "other.pdf") {

                    $sql = "SELECT * FROM uploads WHERE Group_Name = '$user'";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0) {
                        $sql = "UPDATE uploads SET isUploaded_Other = 1 WHERE Group_Name = '$user' AND Year = $year";
                    }
                    else {
                        $sql = "INSERT INTO uploads (Group_Name, isUploaded_Other, Year) VALUES ('$user',1,$year)";
                    }

                }


                if($conn->query($sql)) {

                    echo json_encode(array('status' => 'successful'));

                }
                else {

                    echo json_encode(array('status' => 'unsuccessful', 'error' => $conn->error));

                }


            }
            else {
                echo json_encode(array('status' => 'unsuccessful', 'error' => "上傳失敗。"));
            }
        



        }



    }


}








function createFolder($path) {
    if(!is_dir($path)) {
        mkdir($path);
    }

    // TODO : Create Folder可以一次Create多層，用字串分割的方式做
}








?> 