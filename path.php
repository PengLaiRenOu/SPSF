<?php
  require("model/user.php")
  $user = User_login($_POST['account'], $_POST['password']);
  if($user){
    header("Location:todoAddForm.php");
  }else{
    echo "error";
  }
?>