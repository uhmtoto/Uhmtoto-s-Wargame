<?php
    include('../config.php');
    if($_SESSION['id']) {
        echo ("<script>alert(\"이미 로그인 되어있습니다!\");history.back();</script>");
        exit();
    }
    $usrid = $_POST['id'];
    $usrpw = $_POST['pw'];
    if(!preg_match('/[a-z0-9]{5,11}/', $usrid) || !preg_match('/[a-zA-Z0-9!@_*]{5,16}/', $usrpw)) {
        echo ("<script>alert(\"입력 값이 올바르지 않습니다!\");history.back();</script>");
        exit();
    }
    
    $query = "SELECT * FROM `users` WHERE `id` = '$usrid'";
    $res = mysql_query($query, $conn);
    if(mysql_num_rows($res) == 0) {
        echo ("<script>alert(\"일치하는 계정이 없습니다!\");history.back();</script>");
        exit();
    }
    $res = mysql_fetch_array($res);
    $salt = $res['salt'];
    $usrpw = hash('sha256', $usrpw.$salt);

    $query = "SELECT * FROM `users` WHERE `id` = '$usrid' and `pw` = '$usrpw'";
    $res = mysql_query($query, $conn);
    if(mysql_num_rows($res) > 0) {
        $_SESSION['id'] = $usrid;
        echo ("<script>location.href=\"/wargame\";</script>");
        exit();
    }
    else {
        echo ("<script>alert(\"일치하는 계정이 없습니다!\");history.back();</script>");
        exit();
    }
?>