
<?php    
    
$usernameToCreate = $_POST["uid"];    
$passwordToCreate = $_POST["pwd"];   
$mailToCreate = $_POST["mail"];

  

$dBServername = "localhost";
$dBUsername = "rkishida";
$dBPassword = "qwerASDF12#$";
$dBName = "m_loginsystem";
    
try     
{    
    $conn = new PDO("mysql:host=$dBServername;dbname=$dBName", $dBUsername, $dBPassword);    
    // set the PDO error mode to exception    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
        
    $stmt = $conn->prepare("INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES (NULL, '$usernameToCreate', '$mailToCreate', '$passwordToCreate');");   
    $stmt->execute();    
      
} catch (PDOException $e)     
{    
    echo "Error: " . $e->getMessage();    
}     
    
echo "<h2>User Created Successfully</h2>";    

echo "<br><br>"; 

//Let the user go back to a page within the site      
echo "<h2><a href='./index.php'>Login Page</a></h2>";  
    
?>  

<style>
    h2 {
        font-family: arial;
        text-align: center;
    }    
    
    
</style>
