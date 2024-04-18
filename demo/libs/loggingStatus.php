<?php



function defaultMenu() {

    $arrayMenu = array(
        array('url' => 'main.php', 'content' => '首頁'),
        array('url' => 'news.php', 'content' => '最新消息'),
        array('url' => 'info.php', 'content' => '報名須知'),
        array('url' => 'poster.php', 'content' => '成果展示'),
        array('url' => 'awards.php', 'content' => '歷年優秀成果')
    );

    return $arrayMenu;
}



// Need SESSION
function loggingStatus ($smarty, $isMainPage) {

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }


    $arrayMenu = defaultMenu();

    require_once 'getData.php';

    $competitionDay = getDay('isExhibitionDay');
    $today = date("Y-m-d");
    //$today = "2017-11-22";
    


    if(isset($_SESSION['loggedIn_exhibition']) && $_SESSION['loggedIn_exhibition'] == true) {
        // Login
        
        if(isset($_SESSION['isAdmin'])) {
            if($_SESSION['isAdmin']) {

                $smarty->assign("btnBannerURL", "manageUsers.php");
                $smarty->assign("btnBannerContent", "報名管理");

                array_push($arrayMenu, array('url' => 'manageUsers.php', 'content' => '報名管理'));
                //array_push($arrayMenu, array('url' => 'manageSystem.php', 'content' => '系統管理'));

                $username = "管理員";


            }
        }
        else if(isset($_SESSION['isReviewer'])) {
            if($_SESSION['isReviewer']) {


                $smarty->assign("btnBannerURL", "manageReviewer.php");
                $smarty->assign("btnBannerContent", "評審管理");



                array_push($arrayMenu, array('url' => 'manageReviewer.php', 'content' => '評審管理'));


                $username = "評審委員";

            }
        }
        else {
            $smarty->assign("btnBannerURL", "upload.php");
            $smarty->assign("btnBannerContent", "上傳檔案");

                
            array_push($arrayMenu, array('url' => 'upload.php', 'content' => '上傳檔案'));
            

            $username = $_SESSION['username'];
        }


        if($today >= $competitionDay) {
            array_push($arrayMenu, array('url' => 'voting.php', 'content' => '開票結果'));
        }

        array_push($arrayMenu, array('url' => 'logout.php', 'content' => '登出'));


        if($isMainPage == true) {
            $smarty->assign('user',"歡迎，" . $username);
        }
        else {
            $smarty->assign('user',$username);
        }

    }
    else {
        // Not login
        
        $smarty->assign("btnBannerURL", "signup_info.php");
        $smarty->assign("btnBannerContent", "立即報名");
        


        array_push($arrayMenu, array('url' => 'signup_info.php', 'content' => '立即報名'));

        if($today >= $competitionDay) {
            array_push($arrayMenu, array('url' => 'voting.php', 'content' => '開票結果'));
        }

        array_push($arrayMenu, array('url' => 'login.php', 'content' => '登入'));

        $username = "";

        $smarty->assign('user',$username);

    }
    

    if($today == $competitionDay)
    {
        $smarty->assign("btnBannerURL", "voting.php");
        $smarty->assign("btnBannerContent", "即時開票結果");
    }


    

    $smarty->assign("arrMenu", $arrayMenu);
    unset($arrayMenu);

    return $username;

}



function getUsername() {

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }



    if(isset($_SESSION['loggedIn_exhibition']) && $_SESSION['loggedIn_exhibition'] == true) {
        // Login
        
        if(isset($_SESSION['isAdmin'])) {
            if($_SESSION['isAdmin']) {

                $username = "管理員";
            }
        }
        else if(isset($_SESSION['isReviewer'])) {
            if($_SESSION['isReviewer']) {

                $username = "評審委員";
                
            }
        }
        else {

            $username = $_SESSION['username'];
        }




    }
    else {
        // Not login
        
        
        $username = "未登入";

    }

    return $username;
    

}






?> 