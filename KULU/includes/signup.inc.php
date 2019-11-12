<?php

if (isset($_POST['signup-submit'])) {

  



  $username = $_POST['uid'];
  $email = $_POST['mail'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-repeat'];

  

  
  if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
    header("Location: ../m_signup.php?error=emptyfields&uid=".$username."&mail=".$email);
    exit();
  }
 
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../m_signup.php?error=invaliduidmail");
    exit();
  }
 
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../m_signup.php?error=invaliduid&mail=".$email);
    exit();
  }

  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../m_signup.php?error=invalidmail&uid=".$username);
    exit();
  }
 
  else if ($password !== $passwordRepeat) {
    header("Location: ../m_signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
    exit();
  }
  else {

   

    // create the statement that searches database table to check for any identical usernames.
    $sql = "SELECT uidUsers FROM users WHERE uidUsers=?;";
 
    $stmt = mysql_stmt_init($conn);

    if (!mysql_stmt_prepare($stmt, $sql)) {
      // If there is an error, send the user back to the signup page.
      header("Location: ../m_signup.php?error=sqlerror");
      exit();
    }
    else {
      // binds the type of parameters expected to pass into the statement, and bind the data from the user.
      
      mysql_stmt_bind_param($stmt, "s", $username);
      // execute the prepared statement and send it to the database!
      mysql_stmt_execute($stmt);
      // store the result from the statement.
      mysql_stmt_store_result($stmt);
      // Then we get the number of result we received from our statement. This tells us whether the username already exists or not!
      $resultCount = mysqli_stmt_num_rows($stmt);
      // Then we close the prepared statement!
      mysql_stmt_close($stmt);
      // Here we check if the username exists.
      if ($resultCount > 0) {
        header("Location: ../m_signup.php?error=usertaken&mail=".$email);
        exit();
      }
      else {
        
        // Prepared statements works by us sending SQL to the database first, and then later we fill in the placeholders (this is a placeholder -> ?) by sending the users data.
        $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?);";
        //  initialize a new statement using the connection from the dbh.inc.php file.
        $stmt = mysql_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysql_stmt_prepare($stmt, $sql)) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../m_signup.php?error=sqlerror");
          exit();
        }
        else {


          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

         //bind the type of parameters we expect to pass into the statement, and bind the data from the user.
          mysql_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
          // execute the prepared statement and send it to the database.
          // This means the user is now registered! :)
          mysql_stmt_execute($stmt);
          // send the user back to the signup page with a success message.  
          header("Location: ../m_signup.php?signup=success");
          exit();

        }
      }
    }
  }
  // close the prepared statement and the database connection!
  mysql_stmt_close($stmt);
  mysql_close($conn);
}
else {
  // If the user tries to access this page an inproper way, send back to the signup page.
  header("Location: ../m_signup.php");
  exit();
}

