<?php
	require('../config.php');

	$usrflag = $_POST['flag'];
    $query = "SELECT * FROM `war_problems` WHERE `flag` = '$usrflag'";
	$res = mysql_query($query, $conn);
    if(mysql_num_rows($res) == 0) {
        echo ("<script>alert(\"잘못된 FLAG 입니다!\");history.back();</script>");
        exit();
    }
    $res = mysql_fetch_array($res);
    $probcode = (string)$res['code'];
    $usrid = $_SESSION['warid'];
	$point = (string)$res['point'];

	//중복확인
	$query = "SELECT * FROM `war_solvers` WHERE `usrid`='$usrid' and `probcode`=$probcode";
	$res = mysql_query($query, $conn);
	if(mysql_num_rows($res) > 0) {
		echo ("<script>alert(\"이미 인증을 한 문제입니다!\");history.back();</script>");
        exit();
	}

    //user 정보 갱신
	$query = "UPDATE `war_users` SET `point`=`point` + $point WHERE `id`='$usrid'";
	if(!mysql_query($query, $conn)) {
        echo ("<script>alert(\"DB에 문제가 있어서 FLAG 인증을 실패하였습니다.\n다시 한 번 시도해주세요.\");history.back();</script>");
        exit();
	}

    //solver에 추가
    $query = "INSERT INTO `war_solvers`(`probcode`, `usrid`) VALUES ($probcode, '$usrid')";
    if(!mysql_query($query, $conn)) {
        echo ("<script>alert(\"DB에 문제가 있어서 FLAG 인증을 실패하였습니다.\n다시 한 번 시도해주세요.\");history.back();</script>");
        exit();
    }
	echo ("<script>alert(\"FLAG가 인증되었습니다!\");location.href=\"/wargame/user/$usrid\";</script>");
?>