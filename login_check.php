<?php

    session_start();

    include_once "./dbconn.php";

    // if($mysqli){
    //     echo "DB연결 성공!";
    //     echo "<br />";
    // }else{
    //     echo "DB연결 실패..";
    //     echo "<br />";
    // }

    $admin_id = $_POST['admin_id'];
   

    $admin_pw = $_POST['admin_pw'];
  

    $admin_sql = "SELECT * FROM admin WHERE admin_id='$admin_id' AND admin_pwd='$admin_pw'";

    $admin_query = mysqli_query($db_conn, $admin_sql);
    $admin_row = mysqli_fetch_array($admin_query);

    if($admin_row['admin_id']){
        $_SESSION["admin_id"] = $admin_id; 
        $_SESSION["admin_pw"] = $admin_pw;
        header("Location: ./point_list.php"); 
    }else{
        echo "fail";
    }

?>
