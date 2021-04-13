<?php
  session_start();
  include("login_db.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <link rel="stylesheet" href="portfolio.css">
  <link rel="stylesheet" href="reset.css">
  <div class="topnav">
    <nav>
    <ul>
      <li><a href="homepage.html"><header>Rayyan Siddiqui</header></a></li>
          <li><a href="aboutme.html">About Me</a></li>
          <li><a href="education.html">Education</a></li>
          <li><a href="contactme.html">Contact Me</a></li>
          <li><a href="portfolio.html">Projects</a></li>
          <li><a href="login.php">Log In</a></li>
          <li><a href="blog.php">Add Blog</a></li>
          <li><a href="myblog.php">Blog Posts</a></li>
            <li><a href="logout.php">Log Out</a></li>
    </ul>
  </nav>
</div>
</head>
<title>Rayyan Siddiqui Portfolio | Log In </title>
<body>
<div class="csimage">

    <form action = "" method = "post">
        <div class="container">
            <center> <h1> Log in to your Account </h1> </center>
            <label>Username : </label>
            <input type="text" placeholder="example@email.com" name="Username"  required>
            <label>Password : </label>
            <input type="password" placeholder="password" name="Password" required>
            <center><button class="login-button"type="submit" name="submit" id="submit">Login</button></center>

            Forgot <a href="forgetpw.html"> password? </a>
        </div>
    </form>
</div>
</body>
</html>
