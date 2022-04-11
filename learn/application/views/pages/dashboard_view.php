<?php
include('application/views/Templates/header.php');
?>

<div class="dashboard-container container">
<h3>Dashboard</h3>

<h2>
<?php echo $this->session->userdata('username'); ?>
</h2>
<h6>
<?php echo $this->session->userdata('email'); ?>
</h6>

<?php echo anchor("Login/logout_user","logout",['class'=>'btn btn-danger']);?>

</div>

<?= include('application/views/Templates/footer.php'); ?>