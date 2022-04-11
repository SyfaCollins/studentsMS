<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap-5.1.3-dist/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/include/inc/login.css'); ?>">
    <title>System Login</title>
</head>
<body>


<div id="login-form-container">

<h1 class="login-title">Login Form</h1>

<?php echo "<h5 class='alarm'>" . $this->session->flashdata('msg') . "</h5>";?>

<!-- <h5 class="alarm">Error</h5> -->

<?php echo form_open('Login/login_user',  ['class'=> 'form-group form login-form']);?>
    <input type="text" name="username" placeholder="username" value="<?php echo $this->input->post('username'); ?>"  class="form-control"><br>
    
    <?php echo form_error('username', '<div class="alert alert-danger">', '</div>'); ?>
 
    <input type="password" name= "password" placeholder="password" class="form-control"><br>

    <?php echo form_error('password', '<div class="alert alert-danger">', '</div>'); ?>

    <input type="submit" value="login" class="btn btn-primary">

</form>


</div>
    
    
</body>
</html>