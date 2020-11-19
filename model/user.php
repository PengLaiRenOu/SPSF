<?php

function User_login($username, $passwd) {
    require("dbconnect.php");
    $sql = "select username, authority from user where username='$username' and passwd=PASSWORD('$passwd')";
    //執行SQL
    $result = mysqli_query($conn, $sql);
    if ($result){
        $rs = mysqli_fetch_array($result);
        return $rs;
    }
    return false;
}

// $user = User_login("student", "student123");
// if($user){
//     echo $user["username"];
//     echo $user["authority"];
// }else{
//     echo "error";
// }
?>