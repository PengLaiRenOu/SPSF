<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>無標題文件</title>
</head>

<body>
  <h1>身份:秘書</h1>
  <?php
    session_start();
    require("model/apply.php");
    if(!isset($_SESSION['id'])){
      header("Location:login.php");
    }
    if(isset($_POST['option']) && isset($_GET['sid'])){
      $res = Give_Option(3, $_POST['option'], $_GET['sid']);
      if($res){
        echo "意見已新增";
      }else{
        echo "error";
      }
    }
    if ($_SESSION['id'] != "secretary") {
      header("Location:path.php");
      return;
    }
    $data = Student_Apply_List();
    if ($data) {
      echo "<table width='350' border='1'><tr><td>申請人</td><td>學號</td><td>確認資料</td></tr>";
      $i = count($data);
      for ($j = 0; $j < $i; $j++) {
        if(!isset($data[$j]['teacher_opinion']))
            continue;
        echo "<tr><td>" . $data[$j]['sid'] . "</td>";
        echo "<td>{$data[$j]['student']}</td>";
        echo "<td><a href='secretary.php?sid={$data[$j]['sid']}'>查看資料</a>" . "</td></tr>";
      }
      echo "</table>";
    } else {
      echo "error";
    }
    if(isset($_GET['sid'])){
      $data = Student_Apply_One($_GET['sid']);
      if($data){
        echo "申請人:{$data['student']}學號:{$data['sid']}<br>";
        echo "父親{$data['father_name']}母親:{$data['mother_name']}<br>";
        echo "導師意見：{$data['teacher_opinion']}<br>";
        if($data['applyType'] === "0"){
          echo "申請補助種類:低收入戶<br>";
        }else if($data['applyType'] === "1"){
          echo "申請補助種類:中低收入戶<br>";
        }else if($data['applyType'] === "2"){
          echo "申請補助種類:家庭突發因素<br>";
        }else{
          echo "申請補助種類:error<br>";
        }
      }
      echo "<form method='post'>";
      echo "意見: <textarea cols='50' rows='5' name='option'></textarea><br>";
      echo "<input type='submit' name='submit' value='送出' />";
      echo "</form>";
    }
  ?>
</body>

</html>