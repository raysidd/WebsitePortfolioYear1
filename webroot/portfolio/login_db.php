<?php

//$servername = "localhost";
//$username = "root";
//$password = "";
//$database = "details";

$dbhost = getenv("MYSQL_SERVICE_HOST");
    $dbport = getenv("MYSQL_SERVICE_PORT");
    $dbuser = getenv("DATABASE_USER");
    $dbpwd = getenv("DATABASE_PASSWORD");
    $dbname = getenv("DATABASE_NAME");
    // Creates connection
    $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
    // Checks connection

//Creating Connection

//$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
  die("connection failed: " .mysql_error());
}


   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $Username = mysqli_real_escape_string($conn,$_POST['Username']);
      $Password = mysqli_real_escape_string($conn,$_POST['Password']);

      $sql = ("SELECT * FROM login_database WHERE Username = '$Username' and Password = '$Password'");
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         $_SESSION['Username'] = $Username;
         header("location: addblog.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }

?>
