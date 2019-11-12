<!DOCTYPE html>
   
    <?php

  require "K_header.php";
?>

<html>
<head>
<meta charset="UTF-8">
<title>E Komo Mai</title>
<style>
    
    body {
        font-family: Arial, Helvetica Neue, Sans-serif;
        background: url(images/Leaf_preset_web.jpg);
        background-repeat: no-repeat;
	background-size: cover;
	width: auto;
	Height: 100%;
    }
    
    .text {
        width: 320px;
        height: 330px;
        background: #7B877D;
        border: transparent;
        border-radius: 3px;
        opacity: 0.7;
        top: 40%;
        left: 50%;
        position: absolute;
        transform: translate(-50%, -50%);
        box-sizing: border-box;
    }
    
    .text:hover {
        opacity:0.9;
    }
    
    .logo {
        width: 100px;
        height: auto;
        background-color: 5d5d5d;
        border-radius: 50%;
        position: absolute;
        top: 10px;
        left: calc(50% - 50px);
        z-index:1
    }
    
    .text p {
        text-align: center;
        margin: 120px 15px 40px;
        padding: 10px;
        font-size: 16px;
    }
    
</style>   
<body>
    <main>
      <div class="wrapper-main">
         
    
        <section class="section-default">
           
          <?php
          if (!isset($_SESSION['id'])) {
            echo '<p class="login-status">You are logged out!</p>';
          }
          else if (isset($_SESSION['id'])) {
            echo '<p class="login-status">You are logged in!</p>';
          }
          ?>
        </section>
      </div>
        <div class="text">
            <img src="images/Kulu_Logo_white-01.png" class="logo">
            <p>This is the portal for GEM$ loan applicants to submit and track their
                green-loan application.
            </p>
            
        </div>
    </main>
</body>
</html>


<!--TEST SITE CONNECTION HERE

<html>
    <body>
        <h1 style="color: red;">HELLLOOOOOO</h1>
    </body>
</html>
-->