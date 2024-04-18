<?php



header('Content-type: application/json');

require_once 'ReCaptcha/autoload.php';

// 註冊或查詢你的 API Keys: https://www.google.com/recaptcha/admin
$secret = '6LfifaooAAAAADBOQxrKj3UyauKk_djoAkww-qAi';

if (isset($_POST['g-recaptcha-response'])) {
    $recaptcha = new \ReCaptcha\ReCaptcha($secret);
    // 確認驗證碼與 IP
    $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

    $var = var_export($_POST, true);

    // 確認正確
    if ($resp->isSuccess()) {
        echo json_encode(array('success' => true));
    }


}



?>