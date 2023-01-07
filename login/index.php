<?php
//include auth_session.php file on all user panel pages
require("db.php");
include("auth_session.php");
?>
<html>
    <head>
        <title>Variant'C - Your Covid Solutions</title>
        <link rel="icon" href="../images/logo.ico" type="image/x-icon">
        <meta charset="utf-8">
        <link rel="stylesheet" href="../quiz/style.css">
    </head>
    <body>
      <main id="quiz-app">
        <h1 id="quiz-title">DIAGNOSIS</h1>
        <div class="quiz-container" id="quiz">
        <p>Selamat datang, <?php echo $_SESSION['username']; ?>!</p>
        <p>Sekarang Anda sudah bisa melakukan diagnosis.</p>
        <p><a href="logout.php">Logout</a></p>
        <br>
        <hr>
          <h2 id="question"></h2>
          <li>
            <input type="checkbox" id="a" name="answer" class="answer" value="a" />
            <label for="a" id="a+"></label>
          </li>
          <li>
            <input type="checkbox" id="b" name="answer" class="answer" value="b" />
            <label for="b" id="b+"></label>
          </li>
          <li>
            <input type="checkbox" id="c" name="answer" class="answer" value="c" />
            <label for="c" id="c+"></label>
          </li>
          <li>
            <input type="checkbox" id="d" name="answer" class="answer" value="d" />
            <label for="d" id="d+"></label>
          </li>
          <li>
            <input type="checkbox" id="e" name="answer" class="answer" value="e" />
            <label for="e" id="e+"></label>
          </li>
          <li>
            <input type="checkbox" id="f" name="answer" class="answer" value="f" />
            <label for="f" id="f+"></label>
          </li>
          <li>
            <input type="checkbox" id="g" name="answer" class="answer" value="g" />
            <label for="g" id="g+"></label>
          </li>
          <li>
            <input type="checkbox" id="h" name="answer" class="answer" value="h" />
            <label for="h" id="h+"></label>
          </li>
          <li>
            <input type="checkbox" id="i" name="answer" class="answer" value="i" />
            <label for="i" id="i+"></label>
          </li>
          <li>
            <input type="checkbox" id="j" name="answer" class="answer" value="j" />
            <label for="j" id="j+"></label>
          </li>
          <li>
            <input type="checkbox" id="k" name="answer" class="answer" value="k" />
            <label for="k" id="k+"></label>
          </li>
          <li>
            <input type="checkbox" id="l" name="answer" class="answer" value="l" />
            <label for="l" id="l+"></label>
          </li>
          <li>
            <input type="checkbox" id="m" name="answer" class="answer" value="m" />
            <label for="m" id="m+"></label>
          </li>
          <li>
            <input type="checkbox" id="n" name="answer" class="answer" value="n" />
            <label for="n" id="n+"></label>
          </li>
          <button id="submit" value="Submit">Submit</button>
        </div>
      </main>
          <script src="../quiz/script.js"></script>
    </body>
</html>