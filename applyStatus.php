<?php
session_start();
require("model/apply.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>查詢申請狀態</title>
<style type="text/css">
table {
    margin-left:auto; 
    margin-right:auto;
    border-collapse:collapse;
}
input{
      width: 80px;
      height: 25px;
      border-style: none;
}
td{
      text-align: left;

}
th{
    width: 90px;
}
</style>
</head>

<body style="text-align: center;">
    <h2>貧困學生補助經費申請表</h2>
    <table id="rs" width="400" border="1">
    <?php
    $data = Student_Apply_One($_SESSION['sid']);
    if($data){
      $i=count($data);
        echo "<tr><th>申請人</th><td>".$data['student']."</td> <th>學號</th><td>".$data['sid']."</td></tr>";
        echo "<tr><th>父親</th> <td>".$data['father_name']."</td><th>母親</th> <td>".$data['mother_name']."</td></tr>";
        if($data['applyType'] == 0){
            echo "<tr><th>申請補助種類</th><td colspan='3'>低收入戶</td></tr>";
        }else if($data['applyType'] == 1){
            echo "<tr><th>申請補助種類</th><td colspan='3'>中低收入戶</td></tr>";
        }else{
            echo "<tr><th>申請補助種類</th><td colspan='3'>家庭突發因素</td></tr>";
        }
  }else{
      echo "error";
  }
    ?>

    </table> <br><br> <hr/>
    <h2>審核狀態</h2>
    <table width="300" border="1">
    <?php
    $data = Student_Apply_One($_SESSION['sid']);
    echo "<tr><th>導師訪視說明</th><td colspan='3'>".$data['teacher_opinion']."</td></tr>";
    echo "<tr><th rowspan='2'>秘書審核</th><th>審核結果</th><td colspan='2'>".$data['results']."</td></tr>";
    echo "<tr><th>審查意見</th><td colspan='2'>".$data['secretary_opinion']."</td></tr>";
    if($data['principal＿sign'])
        echo "<tr><th>校長審核結果</th><td colspan='3'>核准</td></tr>";
    else if($data['progress'] != 4)
        echo "<tr><th>校長審核結果</th><td colspan='3'></td></tr>";
    else
        echo "<tr><th>校長審核結果</th><td colspan='3'>否決</td></tr>";
    ?>
         
    </table>
</body>
</html>
