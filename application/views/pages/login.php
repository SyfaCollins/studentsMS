
<div class="container-signup">
    <h1>Login here</h1>




    <?php 

    $target = 'Student/login_user';
    $attributes = array(


    );



    echo form_open($target,$attributes);?>

<!-- username input -->
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

<?php echo form_error('username','<div class="alert alert-danger">', '</div>');?>

<!--  -->

<div class="mb-3">

<!-- password input -->
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
<?php echo form_error('password','<div class="alert alert-danger">', '</div>');?>


<div class="mb-3">


<!-- Submit button -->
<?php
$submitattr = array(
  'class' => 'btn btn-primary',
  'value' => 'login',
  'name' => 'submit'
);

  echo form_submit($submitattr);

?>


</div>

    <?php echo form_close();?>

    <?php
    echo '<h5>' . $this->session->flashdata('error') . '</h5>';

    ?>
  

