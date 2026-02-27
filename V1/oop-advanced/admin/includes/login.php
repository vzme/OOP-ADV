<?php

  $error = ['result'=>''];

if(isset($_POST['login'])){

  $username = $obj->secure($_POST['username']);
  $password = $obj->secure($_POST['password']);


  if(!empty($username) AND !empty($password)){
    
      // for checking login conditional
    $checking_user_pass = User::verify($username, $password);
    if ($checking_user_pass) {
      $session->login($checking_user_pass);
      header("Location: index.php");
    } else {
       $error['result'] = "Username and Password Valid";
    }
  }else{

  $error["result"] = "Please Enter Your Username and password";

  }

}


?>