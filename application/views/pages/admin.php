<head>
<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
</head>

<div class="container-signup">

<?php
$userData = $this->session->userdata('username');
?>

    <h1>Registered Students</h1>



    <span>

 <img src="hitman.jpg" alt=" hitman" height="50px" width="auto">
    </span>
 
    <h2><?php echo  $userData . "</h2>";?></h2>
 
    <?php foreach($outPut as $item): ?>


       <p class="item">
         <?php echo $item['username'];?>
       </p>


      

<?php endforeach; ?>

<p>
  <?php

  echo anchor('Student/login','Logout')

  ?>
</p>

</div>