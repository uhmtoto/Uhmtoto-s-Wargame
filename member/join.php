<?php
    include_once('../config.php');
    //값 받아오기
    $usrid = $_POST['id'];
    $usrpw = $_POST['pw'];
    $usrmail = $_POST['email'];
    $usrpage = $_POST['homepage'];
    
    //입력값 검증
    if(!preg_match('/[a-z0-9]{5,11}/', $usrid) || !preg_match('/[a-zA-Z0-9!@_*]{5,16}/', $usrpw)) {
        echo ("<script>alert(\"입력 값이 올바르지 않습니다!\");history.back();</script>");
        exit();
    }
    if(!preg_match('/[0-9a-zA-Z][0-9a-zA-Z\_\-\.\+]+[0-9a-zA-Z]@[0-9a-zA-Z][0-9a-zA-Z\_\-]*[0-9a-zA-Z](\.[a-zA-Z]{2,6}){1,2}/', $usrmail)) {
        echo ("<script>alert(\"입력 값이 올바르지 않습니다!\");history.back();</script>");
        exit();
    }
    if(!preg_match('/[a-z\/:-]+/', $usrpage)) {
        echo ("<script>alert(\"입력 값이 올바르지 않습니다!\");history.back();</script>");
        exit();
    }

    //아이디 중복 확인
    $query = "SELECT * FROM `war_users` WHERE `id` = '$usrid'";
    $res = mysql_query($query, $conn);
    if(mysql_num_rows($res) > 0) {
        echo("<script>alert(\"이미 해당 아이디가 있습니다!\");history.back();</script>");
        exit();
    }

    //솔트값 생성
    $alpha = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $len = strlen($alpha);
    $salt = '';
    for ($i = 0; $i < 10; $i++) {
        $salt = $salt.$alpha[rand(0, $len - 1)];
    }

    //해싱 or 인코딩
    $usrpw = hash('sha256', $usrpw.$salt);
    
    //쿼리
    $query = "INSERT INTO `war_users`(`id`, `pw`, `salt`, `email`, `homepage`, `point`) 
    VALUES ('$usrid', '$usrpw', '$salt', '$usrmail', '$usrpage', 0)";
    if(mysql_query($query, $conn)) {
        echo("<script>alert(\"회원가입을 성공했습니다!\");location.href=\"/wargame\"</script>");
        exit();
    }
    else {
        echo("<script>alert(\"DB에 문제가 있어 회원가입을 실패했습니다.\n다시 한 번 시도해주세요.\");history.back();</script>");
        exit();
    }
?>