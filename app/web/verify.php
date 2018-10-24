<?php
if(isset($_POST['login']) && isset($_POST['password'])){
	include_once "users.php";
      if($users[1] == $_POST['login'] && $pwds[1] == $_POST['password']){
        include_once "hash.php";
        $VarToCookie = $_SERVER['REMOTE_ADDR'] . date("Y-m-d") . "<dmx>" . $ids[1];
        $CryptVarToCookie = my_hash_crypt($VarToCookie,'e');
        setcookie("UserCookie", $CryptVarToCookie, strtotime("today 23:59"));
		header("Location: ok.php");
      }else{
        header("Location: index.php?wrongdata");
	  }
    }else{
    header("Location: index.php?wrongdata");
  }
?>
