<?php

function Student_Apply($student, $sid, $father, $mother, $applytype) {
    require("dbconnect.php");
    $sql = "INSERT INTO `apply` (student, sid, father_name, mother_name, applytype) 
            values ('$student', '$sid','$father', '$mother', $applytype); ";
    //執行SQL
    $result = mysqli_query($conn, $sql);
    if ($result){
        return true;
    }
    return false;
}
function Student_Apply_List(){
    require("dbconnect.php");
    $sql = "select * from apply";
    //執行SQL
    $result = mysqli_query($conn, $sql);
    if ($result){
        $data = array();
        while ($rs = mysqli_fetch_assoc($result)) {
            $data[] = $rs;
        }
        return $data;
    }
    return false;
}
function Student_Apply_One($sid){
    require("dbconnect.php");
    $sql = "select * from apply where sid=$sid";
    //執行SQL
    $result = mysqli_query($conn, $sql);
    if ($result){
        return mysqli_fetch_assoc($result);
    }
    return false;
}
function Give_Option($progress, $option, $sid){
    require("dbconnect.php");
    if($progress ===  2){
        $sql = "UPDATE `apply` SET `teacher_opinion`='$option', `progress`=2
                WHERE `sid` = '$sid'";
        $result = mysqli_query($conn, $sql);
        if ($result){
            return true;
        }
        return false;
    }else if($progress === 3){
        $sql = "UPDATE `apply` SET `secretary_opinion`='$option', `progress`=3
                WHERE `sid` = '$sid'";
        $result = mysqli_query($conn, $sql);
        if ($result){
            return true;
        }
        return false;
    }else{
        return false;
    }
}
function Give_Result($res, $sid){
    require("dbconnect.php");
    $sql = "UPDATE `apply` SET `results`=$res WHERE `sid`='$sid'";
    $result = mysqli_query($conn, $sql);
    if ($result){
        return true;
    }
    return false;
}
function Principal＿Sign($res, $sid){
    require("dbconnect.php");
    if($res)
        $sql = "UPDATE `apply` SET `principal＿sign`=1 WHERE `sid`='$sid'";
    else
        $sql = "UPDATE `apply` SET `principal＿sign`=0 WHERE `sid`='$sid'";
    $result = mysqli_query($conn, $sql);
    if ($result){
        return true;
    }
    return false;
}
// $a = Student_Apply("a", "107213004", "f", "m", 0);
// if($a){
//     echo "yes";
// }else{
//     echo "no";
// }

// $data = Student_Apply_List();
// if($data){
//     $i=count($data);
//     for($j=0 ; $j<$i ; $j++){
//         print_r($data[$j]);
//     }
// }else{
//     echo "error";
// }

// echo Give_Result(1000, "107213004");
// echo Principal＿Sign(true, "107213004");
?>