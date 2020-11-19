<?php

function Student_Apply($student, $sid, $father, $mother, $applytype) {
    require("dbconnect.php");
    $sql = "insert into apply (student, sid, father_name, mother_name, applytype) values ('$student', '$sid','$father', '$mother', $applytype); ";
    //執行SQL
    $result = mysqli_query($conn, $sql);
    if ($result){
        return true;
    }
    return false;
}

$a = Student_Apply("a", "107213004", "f", "m", 0);
if($a){
    echo "yes";
}else{
    echo "no";
}

?>