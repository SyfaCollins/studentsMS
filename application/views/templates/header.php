<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css')?>">
    <title>Document</title>


</head>
<body>
<header >
    <h1 class="heading">STUDENT MANAGEMENT SYSTEM</h1>

    <nav id="nav" class="navbar-light bg-light">
  <div class="container">
    <div class="navbar-brand">
    <?php 
    $print = "<button class='btn btn-primary'>Home</button>";

    echo anchor('Student/', $print) 
    ?>
    
    </div>
   
    <div class="navbar-brand">
    <?php 
    $print = "<button class='btn btn-primary'>Admin</button>";

    echo anchor('Student/Admin', $print) 
    ?>
    
    </div>
   
    <div class="navbar-brand">
    <?php 
    $print = "<button class='btn btn-primary'>Signup</button>";

    echo anchor('Student/signup', $print) 
    ?>
    
    </div>

    <div class="navbar-brand">
    <?php 
    $print = "<button class='btn btn-primary'>Login</button>";

    echo anchor('Student/login', $print) 
    ?>
    
    </div>
   



  </div>
</nav>

</header>
    
