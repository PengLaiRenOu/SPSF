<?php
session_start();
require("model/dbconnect.php");
$result=mysqli_query($conn,$sql) or die("DB Error: Cannot retrieve message.");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>學生申請清單</title>
</head>

<body>

<p>學生申請清單</p>
<hr />
<table width="350" border="1">
  <tr>
    <td>學號</td>
    <td>學生</td>
    <td></td>
  </tr>
<?php
while (	$rs=mysqli_fetch_assoc($result)) {
	echo "<tr><td>" . $rs['sID'] . "</td>";
	echo "<td>{$rs['student']}</td>";
    echo "<a href='.php?id={$rs['id']}'>查看資料</a>"."</td></tr>";   
}
?>
</table>

</body>
</html>
