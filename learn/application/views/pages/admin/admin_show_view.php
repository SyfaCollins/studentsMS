<?php
include('application/views/Templates/header.php');
?>

<div class="admins-container container">

<div class="title">
<h3>Admins View</h3>
</div>

<div class="buttons">

<?php echo anchor("Admins","admins",['class'=>'btn btn-primary']);?>
<?php echo anchor("Admins/admin_add","register admin",['class'=>'btn btn-primary']);?>

</div>

<?php



    echo $message;
    // echo $lastname;
    // echo $email;
    // echo $password;


?>



</div>
<?= include('application/views/Templates/footer.php'); ?>