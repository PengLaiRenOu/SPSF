<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="keywords" content=" " />
  <meta name="description" content=" " />
  <title>校長核准</title>
  <style type="text/css">
    table {
      margin-left: auto;
      margin-right: auto;
      border-collapse: collapse;
    }

    input {
      width: 60px;
      height: 40px;
    }

    th {
      width: 90px;
    }
  </style>
</head>

<body style="text-align: center;">
  <h1>身份:校長</h1>
  <h2>貧困學生補助經費申請表</h2>
  <?php
  session_start();
  require("model/apply.php");
  if (!isset($_SESSION['id'])) {
    header("Location:login.php");
  }
  if ($_SESSION['id'] != "principal") {
    header("Location:path.php");
    return;
  }
  if (isset($_POST['decide']) && isset($_GET['sid'])) {
    $data = Student_Apply_One($_GET['sid']);
    if ($data['progress'] != 3) {
      header("Location:path.php");
      echo "error";
    } else {
      $res = Principal＿Sign($_POST['decide'], $_GET['sid']);
      if ($res) {
        echo "意見已新增";
      } else {
        echo "error";
      }
    }
  }
  $data = Student_Apply_List();
  if ($data) {
    echo "<table width='350' border='1'><tr><td>申請人</td><td>學號</td><td>確認資料</td></tr>";
    $i = count($data);
    for ($j = 0; $j < $i; $j++) {
      if ($data[$j]['progress'] != 3)
        continue;
      echo "<tr><td>".$data[$j]['sid'] . "</td>";
      echo "<td>{$data[$j]['student']}</td>";
      echo "<td><a href='principal.php?sid={$data[$j]['sid']}'>查看資料</a>" . "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "error";
  }
  if (isset($_GET['sid'])) {
    $data = Student_Apply_One($_GET['sid']);
    if ($data) {
      echo "<table width='400' border='1'>";
      echo "<tr><th>申請人</th><td>{$data['student']}</td>";
      echo "<th>學號</th><td>{$data['sid']}</td></tr>";
      echo "<tr><th>父親</th><td>{$data['father_name']}</td>";
      echo "<th>母親</th><td>{$data['mother_name']}</td></tr>";
      if ($data['applyType'] === "0") {
        echo "<tr><th>申請補助種類</th><td colspan='3'>低收入戶</td></tr>";
      } else if ($data['applyType'] === "1") {
        echo "<tr><th>申請補助種類</th><td colspan='3'>中低收入戶</td></tr>";
      } else if ($data['applyType'] === "2") {
        echo "<tr><th>申請補助種類</th><td colspan='3'>家庭突發因素</td></tr>";
      } else {
        echo "<tr><th>申請補助種類</th><td colspan='3'>error</td></tr>";
      }
      echo "<tr><th>導師訪視說明</th><td colspan='3'>{$data['teacher_opinion']}</td></tr>";
      echo "<tr><th rowspan='2'>秘書審核";
      echo "</th><th>審核結果</th><td colspan='2'>{$data['results']}</td></tr>";
      echo "<tr><th>審查意見</th><td colspan='2'>{$data['secretary_opinion']}</td></tr>";
      echo "</table><br>";
      echo "<form method='post'>";
      echo "<select name='decide'>";
      echo "<option value='1'>核准</option><option value='0'>否決</option>";
      echo "</select><br>";
      echo "<input type='submit' name='submit' value='送出' />";
      echo "</form>";
    } else {
      echo "error";
    }
  }
  ?>
</body>

</html>