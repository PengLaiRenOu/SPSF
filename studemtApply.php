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
<?php
  $a = Student_Apply($_POST['student'], $_POST['sID'], $_POST['father'], $_POST['mother'], $_POST['applyType']);
  if($a){
    $_SESSION[$_SESSION['sid']] = "OK";
    header("Location:applyStatus.php");
  }else{
      echo "no";
  }
?>

</body>
</html>
