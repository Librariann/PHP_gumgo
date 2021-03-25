<?

    /**
     * 
     * 점수메인 페이지
     * 
     * @name : index.php
     * @author : ParkSeongHyun
     * @since : 2020-08-02
     */

    session_start();
    <? include "./dbconn.php" ?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 로그인</title>
</head>
<body>

    
    <form action="/PHP_gumgo/login/login_check.php" method="POST">
        <!-- 관리자 로그인 -->
            <?php 
              if($_SESSION["admin_id"] && $_SESSION["admin_pw"]){
                echo "어서오세요".$_SESSION["admin_id"]."님";
                echo "<br/>";
                echo "<a href='./logout.php'>로그아웃</a>";
                echo "<br/>";
                echo "<a href='./point_list.php'>점수표 보러가기</a>";
            }else{
            ?>
            <h1>로그인이 필요합니다!! 관리자 로그인부터 해주세요</h1>
            ID : <input type="text" name="admin_id" style="margin-left:46px"/>
            <br />
            password : <input type="password" name="admin_pw"/>
            <br />
            <input type="submit" value="로그인"/>

           <?php } ?>
    </form>

</body>
</html>