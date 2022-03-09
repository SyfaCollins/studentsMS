<div class="container-signup">
    <h1>Registered Students</h1>

    <h2>welcome <?php
    echo $this->session->userdata('username');
    
    ?></h2>
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