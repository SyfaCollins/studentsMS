
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

<!-- add form -->

<?php echo form_open('Admins/admin_added',['class' => 'form-group form']);?>

<!-- <form class="form-group form" action=""> -->
    <label for="firstname">First name</label>
    <input type="text" name="firstname" class="form-control">

    <label for="lastname">Last name</label><br>
    <input type="text" name="lastname" class="form-control">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control">

    <label for="Class">Class</label>
    <input type="text" name="class" class="form-control">

    <input type="submit" value="submit" name="submit" class="btn btn-primary form-btn">

</form>




</div>

<?= include('application/views/Templates/footer.php'); ?>