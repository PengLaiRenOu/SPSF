<?php
session_start();
require("model/dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>學生申請表</title>
<style type="text/css">
table {
    margin-left:auto; 
    margin-right:auto;
    border-collapse:collapse;
}
input{
      width: 80px;
      height: 20px;
}
tr{
      height: 35px;
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
<form method="post" action="studentApply.php">
      <table width="400" border="1">
      <tr><th>申請人</th> <td><input name="student" type="text" id="sname" /></td>

      <th>學號</th> <td><input name="sID" type="text" id="sID" /></td></tr>

      <tr><th>父親</th> <td><input name="father" type="text" id="father" /></td>
      <th>母親</th> <td><input name="mother" type="text" id="mother" /></td></tr>

      <tr><th>申請補助種類</th><td colspan="3"><select name="applyType"> 
                      <option value=0>低收入戶</option> 
                      <option value=1>中低收入戶</option> 
                      <option value=2>家庭突發因素</option>
                  </select> </td></tr>
</table><br>
<input type="submit" name="Submit" value="送出" />
</form>
</body>
</html>
