<?php

  session_start();

  require "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="includes/kulu_index.css">
    <style>
      .topnav img {
	width: 48px;
	height: auto;
  padding: 10px 15px;  
        
        
    </style>
  </head>
  <body>


    <header>
      <nav class="nav-header-main">

        <a class="header-logo" href="index.php">
            
        
        </a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="resources.php">About</a></li>
         
        </ul>
      </nav>
      <div class="header-login">
        
        <?php
        if (!isset($_SESSION['id'])) {
          echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
          </form>
          <a href="K_signup.php" class="header-signup">Signup</a>';
        }
        else if (isset($_SESSION['id'])) {
          echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="login-submit">Logout</button>
          </form>';
        }
        ?>
      </div>
    </header>
