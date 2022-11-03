<?php 
if($_POST){
//   setcookie('mode',$_POST['mode'], time()+24*60*60,'/','',true);
  setcookie('mode',$_POST['mode'], time()+24*60*60,'/');
  header('location:home.php');
}

?>