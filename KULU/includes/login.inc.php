<?php



$dBServername = "localhost";
$dBUsername = "rkishida";
$dBPassword = "qwerASDF12#$";
$dBName = "m_loginsystem";


$mailuid = $_POST['mailuid'];
$password = $_POST['pwd'];

    
  if (empty($mailuid) || empty($password)) {
    header("Location: /index.php?error=emptyfields&mailuid=".$mailuid);
    exit();
  }
  else {

      
      

 
mysql_connect($dBServername,$dBUsername,$dBPassword);
mysql_select_db($dBName);
 
if (isset($_POST['login-submit'])) {   
    
    
    $sql="SELECT * from users where emailUsers='".$mailuid."'AND pwdUsers='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        header ('Location: ../K_home.php');
        
    }
    else{
        header("Location: /index.php?error=INCORRECT_PASSWORD=".$mailuid);
    }
        
}
     
  }