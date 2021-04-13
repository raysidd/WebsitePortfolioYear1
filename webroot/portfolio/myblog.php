<?php
include ('addblog_db.php');
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
<title>Rayyan Siddiqui Portfolio | Blog </title>
</head>
<div class="csimage">
<body>
<div class="background">
<h1 class="about-me"> Blog Posts</h1>
<?php foreach ($query as $q) {?>
  <div class="container">
    <h5><?php echo $q['topic'];?></h5>
    <p><?php echo $q['comment'];?><p>
    <p><?php echo  date("d/m/Y") ?><p>
    <p><?php echo  date("h:i:sa") ?><p>
</div>
<?php }?>
