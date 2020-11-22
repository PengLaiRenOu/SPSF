<?php
  session_start();
  if(!isset($_POST['account']) && isset($_SESSION['id'])){
    if($_SESSION['id'] == "student"){
        if($_SESSION[$_SESSION['id']] == "OK"){
            header("Location:applyStatus.php");
        }else{
            header("Location:todoAddForm.php");
        }
    }else if($_SESSION['id'] == "teacher"){
        header("Location:teacher.php");
    }else if($_SESSION['id'] == "secretary"){
        header("Location:secretary.php");
    }else if($_SESSION['id'] == "principal"){
        header("Location:principal.php");
    }else{
        echo "error";
    }
    return;
  }
  require("model/user.php");
  $user = User_login($_POST['account'], $_POST['password']);
  if($user){
      if($user["authority"] == 1){
        $_SESSION['sid'] = $_POST['account'];
        $_SESSION['id'] = "student";
        if($_SESSION[$_SESSION['id']] == "OK"){
            header("Location:applyStatus.php");
        }else{
            header("Location:todoAddForm.php");
        }
      }else if($user["authority"] == 2){
            $_SESSION['id'] = "teacher";
            header("Location:teacher.php");
      }else if($user["authority"] == 3){
            $_SESSION['id'] = "secretary";
            header("Location:secretary.php");
      }else if($user["authority"] == 4){
            $_SESSION['id'] = "principal";
            header("Location:principal.php");
      }
  }else{
      echo "error";
  }
?>