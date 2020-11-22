<?php
  require("model/user.php");
  $user = User_login($_POST['account'], $_POST['password']);
  session_start();
  if($user){
      if($user["authority"] == 1){
          $_SESSION['sid'] = $_POST['account'];
          $_SESSION['id'] = "student";
          if($_SESSION[$_POST['account']] == "OK"){
                header("Location:applyStatus.php");
            }else{
                header("Location:todoAddForm.php");
          }
          
      }else if($user["authority"] == 2){
            $_SESSION['id'] = "teacher";
            header("Location:teacher.php");
      }else if($user["authority"] == 3){
            $_SESSION['id'] = "secretary";
            header("Location:teacher.php");
      }else if($user["authority"] == 4){
            echo "not finish";
      }
  }else{
      echo "error";
  }
?>