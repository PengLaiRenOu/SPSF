<?php
/*session_start();
require("dbconnect.php");
$sql = "select * from todo where status=0 order by important DESC;";
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
  session_start();
  if($_SESSION['id']=="teacher"){//如果是導師
    echo "<h1>身份:導師</h1>";
  }elseif($_SESSION['id']=="secretary"){//是秘書
    echo "<h1>身份:秘書</h1>";
  }
  //這段需要資料
  echo "申請人:... 學號:...<br>";
  echo "父親:....  母親:...<br>";
  echo "申請補助種類:....<br>";
  //-----
?>
<form method="post"> <!--這邊導去-->
  意見: <textarea cols="50" rows="5"> </textarea><br>
<input type="submit" name="submit" value="送出" />
</form>
</body>
</html>