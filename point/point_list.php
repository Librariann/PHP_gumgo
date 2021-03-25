<?php
session_start();
    if($_SESSION["admin_id"] && $_SESSION["admin_pw"]){

    }else{
        echo "관리자로그인이 필요합니다.";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>point_list</title>
</head>
<body>
    
    <!--순위 및 점수 확인 리스트-->
    <div class="contents">
        <ul>
            <li>
            </li>
        </ul>
    </div>
    <div class="point_input">
        <a href="./point_input.php"><input type="button" value="점수 입력하러가기"></a>
    </div>


</body>
</html>