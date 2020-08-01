<?php
    session_start();
    $host = 'localhost';
    $user = 'root';
    $password = 'tjdgus123';
    $DBname = 'mahjong';
    $mysqli = new mysqli($host, $user, $password, $DBname);

    if($mysqli){
        echo "DB연결 성공!";
        echo "<br />";
    }else{
        echo "DB연결 실패..";
        echo "<br />";
    }

    if($_SESSION['admin_id'] && $_SESSION['admin_pw']){
        echo $_SESSION['admin_id'];
        echo "<br />";
        echo $_SESSION['admin_pw'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 로그인</title>
</head>
<body>

    <form action="login_check.php" method="POST">
        <!-- 관리자 로그인 -->
        ID : <input type="text" name="admin_id" style="margin-left:46px"/>
        <br />
        password : <input type="password" name="admin_pw"/>
        <br />
        <input type="submit" value="로그인"/>
    </form>

</body>
</html>