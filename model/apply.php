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
?>