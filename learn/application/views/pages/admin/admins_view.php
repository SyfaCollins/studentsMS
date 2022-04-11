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



<!-- add admin list -->

<table class="table">
<thead>Admins</thead>
    <tr>
        <th>
            Name
        </th>
        <th>
            email
        </th>
        <th>
            class
        </th>
    </tr>

<?php foreach($results as $result){
   echo '<tr>';

  echo  '<td>' .  $result['firstname']   .'</td>';
  echo  '<td>' .  $result['lastname']  .'</td>';
  echo  '<td>' .  $result['class']  .'</td>';
    
    echo '</tr>';

}


?>
</table>

<!-- add form -->


</div>

<?= include('application/views/Templates/footer.php'); ?>