<?php
session_start();
require("model/apply.php");

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
$data = Student_Apply_List();
if($data){
    $i=count($data);
    for($j=0 ; $j<$i ; $j++){
        echo "<tr><td>" . $data[$j]['sid'] . "</td>";
	    echo "<td>{$data[$j]['student']}</td>";
        echo "<td><a href='.php?id={$data[$j]['id']}'>查看資料</a>"."</td></tr>"; 
    }
}else{
    echo "error";
}
?>
</table>

</body>
</html>
