<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $username = mysqli_real_escape_string($conS, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $password = mysqli_real_escape_string($conS, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $resultS = mysqli_query($conS, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        $rowsS = mysqli_num_rows($resultS);
        if ($rows && $rowsS == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: ../dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>  
<!DOCTYPE html>
<html>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Registration</a></p>
  </form>
<?php
    }
?>

<head>
    <meta charset="utf-8"/>
    <title>Variant'C - Your Covid Solutions</title>
    <link rel="icon" href="../images/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css"/>
</head>

</html>