<?php

  require "K_header.php";
?>
<style>
    
    body {
        background-image:url("images/Leaf_preset_web.jpg") ;
    }
    
    h1 {
        color: #fff;
    }
    
    .form-signup {
  margin: 0 auto;
  padding: 25px 10px 30px    ;
  width: 250px;
  background-color:#7B877D;
  opacity: 0.85;
  border-radius: 12px;
}

.form-signup:hover {
    opacity: 0.95;
}

.form-signup input {
  width: calc(100% - 30px);
  height: 30px;
  padding: 0 15px;
  margin-bottom: 6px;
  border: 1px solid #CCC;
  border-radius: 4px;
  background-color: #F6F6F6;
  float: left;
  font-family: arial;
}

.form-signup button {
  display: block;
  height: 40px;
  padding: 0 10px;
  margin: 0 auto;
  border: none;
  border-radius: 4px;
  background-color: #5D5D5D;
  font-family: arial;
  font-size: 13px;
  color: #FFF;
  text-transform: uppercase;
  text-align: center;
}
.signuperror {
  padding-top: 14px;
  font-family: arial;
  font-size: 16px;
  color: #A33739;
  text-align: center;
}

.signupsuccess {
  padding-top: 14px;
  font-family: arial;
  font-size: 16px;
  color: #88AE70;
  text-align: center;
}
    
</style>
<body>
    <main>
      <div class="wrapper-main">
        <section class="section-default">
          <h1>Signup</h1>
          <?php
    
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields") {
              echo '<p class="signuperror">Fill in all fields!</p>';
            }
            else if ($_GET["error"] == "invaliduidmail") {
              echo '<p class="signuperror">Invalid username and e-mail!</p>';
            }
            else if ($_GET["error"] == "invaliduid") {
              echo '<p class="signuperror">Invalid username!</p>';
            }
            else if ($_GET["error"] == "invalidmail") {
              echo '<p class="signuperror">Invalid e-mail!</p>';
            }
            else if ($_GET["error"] == "passwordcheck") {
              echo '<p class="signuperror">Your passwords do not match!</p>';
            }
            else if ($_GET["error"] == "usertaken") {
              echo '<p class="signuperror">Username is already taken!</p>';
            }
          }

          else if (isset($_GET["signup"])) {
            if ($_GET["signup"] == "success") {
              echo '<p class="signupsuccess">Signup successful!</p>';
            }
          }
          ?>
          <form class="form-signup" action="signup_success.php" method="post">
            <?php


        
            if (!empty($_GET["uid"])) {
              echo '<input type="text" name="uid" placeholder="Username" value="'.$_GET["uid"].'">';
            }
            else {
              echo '<input type="text" name="uid" placeholder="Username">';
            }

       
            if (!empty($_GET["mail"])) {
              echo '<input type="text" name="mail" placeholder="E-mail" value="'.$_GET["mail"].'">';
            }
            else {
              echo '<input type="text" name="mail" placeholder="E-mail">';
            }
            ?>
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat password">
            <button type="submit" name="signup-submit">Signup</button>
          </form>
         
        </section>
      </div>
    </main>
    
</body>    


