<?php
require_once 'includes/session.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet">
    <link rel="stylesheet" href="css/btn.css">
    <script src="https://kit.fontawesome.com/4c31ea56e4.js" crossorigin="anonymous"></script>
    <title>Assignment 2 - <?php echo $title ?></title>
</head>
<body>
  <nav class="navbar navbar-dark navbar-expand-lg navbar-bg">
  <div class="container">
  <a class="navbar-brand" href="index.php">
      <img src="images/php-logo.png" alt="Bootstrap" width="75" height="45">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
        aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewrec.php">Participants</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Options
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="view.php">View Record</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>        
        </ul>        
     <div class="navbar-nav ml-auto">
      <?php 
      if(!isset($_SESSION['userid'])){
        ?>
      <a class="nav-item nav-link" href="login.php">Login</a>
      <?php } else { ?>
        <a class="nav-item nav-link" href="#"><span>Welcome <?php echo $_SESSION['username']?></span></a>
        <a class="nav-item nav-link" href="logout.php">Logout</a>
        <?php }?>
      </div>
      </div> 
    </div>
  </div>
</nav>
<div class="container">
