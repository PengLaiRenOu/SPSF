<?php
  require("model/user.php");
  $user = User_login($_POST['account'], $_POST['password']);
  if($user){
      if($user["authority"] == 1){
          header("Location:todoAddForm.php");
      }else if($user["authority"] == 2){
            echo "not finish";
      }else if($user["authority"] == 3){
            echo "not finish";
      }else if($user["authority"] == 4){
            echo "not finish";
      }
  }else{
      echo "error";
  }
?>