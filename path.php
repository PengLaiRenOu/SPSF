<?php
  require("model/user.php");
  echo $_POST['account'];
  echo $_POST['password'];
  $user = User_login($_POST['account'], $_POST['password']);
  if($user){
    header("Location:todoAddForm.php");
  }else{
    echo "error";
  }
?>