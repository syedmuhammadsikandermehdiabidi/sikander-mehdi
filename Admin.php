<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['Admin_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Admin/style.css">
</head>
<body>
	<div class="container-fluid p-5 bg-primary text-green text-center"> 
	<h1> ADMIN PAGE </h1>
</div>
<div class="Container-fluid p-5  text-center"> 

<h2><a href="video/sender.html"> Live Session </h2>  <br> <br> <br>
<h2> <a href="lecture.html">Lecture </h2> 
<h2> <a href="Software.html"> software </h2>
</div>


</body>
</html>