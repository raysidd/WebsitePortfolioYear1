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
<?php if(isset($_REQUEST['info'])){?>
<?php if($_REQUEST['info'] == "added"){?>
  <?php } ?>
<?php }?>
<center><button class="button addblog-link"><a href = "addblog.php">Add Blog</a></button></center>
  </div>
</form>
<script src="portfolio.js"></script>
</body>
</html>
