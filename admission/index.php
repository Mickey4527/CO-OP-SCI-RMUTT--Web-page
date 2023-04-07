<?php
 error_reporting(E_ALL ^ E_NOTICE);
 session_start();
if($_GET['action']=="m4"){
   $_SESSION['class'] = "m4";
   header("location:index.php");
}
if($_GET['action']=="m1"){
    $_SESSION['class'] = "m1";
    header("location:index.php");
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../base/styleWeb.css" >
        <link rel="stylesheet" type="text/css" href="../css/styleWeb1.css" >
        <link rel="stylesheet" type="text/css" href="../base/icon.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/denali-icon-font/dist/denali-icon-font.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
        <title>Home</title>
    </head>
<!-- Header -->
<body>	
    <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="#"><img src="../assets/img/logo.jpg" width="55px"><span class="text-logo sz-24 text-purple">งานรับนักเรียน</span></a>      
            </div>  
		  </nav>

    <div class="container">
      <h1 class="t-center">ปิดรับสมัครแล้ว</h1>
        <ul class="navbar-nav ml-auto bg-purple">
          <a href="../index.php" class="btn text-light">เข้าสู่เว็บไซต์หลัก โรงเรียนสีกัน(วัฒนานันท์อุปถัมภ์)</a>
        </ul>
    </div>
    

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>		
<script src="../base/index.js"></script>
<script src="../js/index.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>