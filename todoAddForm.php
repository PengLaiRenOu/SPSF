<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<style type="text/css">
input{
      width: 80px;
}
</style>
</head>
<body>
<h1>貧困學生補助經費申請表</h1>
<form method="post">

      申請人: <input name="student" type="text" id="sname" /> <br>

      學號: <input name="sID" type="text" id="sID" /> <br>

      父親: <input name="father" type="text" id="father" /> 
      母親: <input name="mother" type="text" id="mother" /> <br>

      申請補助種類:<select name="applyType"> 
                      <option value=0>低收入戶</option> 
                      <option value=1>中低收入戶</option> 
                      <option value=2>家庭突發因素</option>
                  </select> <br>
      <input type="submit" name="Submit" value="送出" />
</form>
</body>
</html>
