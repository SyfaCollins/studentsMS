<div class="container-signup">
    <h1>Login here</h1>



    <?php 

    $target = 'pages/login';
    $attributes = array(


    );

    echo form_open($target,$attributes);?>


<div class="mb-3">
<?php
    $userdata = array(
      'type' => 'text',
      'class' => 'form-control',
      'placeholder' => 'enter username or email',
      'name' => 'username',
      'id'=>'formGroupExampleInput'
    );

    echo form_input($userdata)

    ?>
</div>

<div class="mb-3">
<?php
    $pwdata = array(
      
      'class' => 'form-control',
      'placeholder' => 'enter password',
      'name' => 'password',
      'id'=>'formGroupExampleInput2'

    );

    echo form_password($pwdata)

    ?>
</div>

<div class="mb-3">

<?php
$submitattr = array(
  'class' => 'btn btn-primary',
  'value' => 'Send',
  'name' => 'submit'
);

  echo form_submit($submitattr);

?>

</div>


    <?php echo form_close();?>
  

