<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="loginpage.css">

<title>Login Page</title>

</head>
<body>

<form action="tables.php" method="post" style="max-width:500px;margin:auto">
  <h2 class="register">Login Page</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username / StudentID" name="usrnm">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>

  <button type="submit" class="btn">Login</button>
</form>

</body>
</html>

<?php

  include "connection.php";

  // session_start();
  // if (isset($_POST["usrnm"]) && isset($_POST["psw"])) {
  //   if ($_POST["usrnm"] == "sasa" && $_POST["psw"] == "18032500") {
  //     $_SESSION["user"] = $_POST["usrnm"];
  //     header("location: tables.php");
  //   }
  //   else {
  //     echo "<script>alert('Something got wrong');</script>";
  //   }
  // }

?>