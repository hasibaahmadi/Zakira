<div > 
<?php
$attribute=array(
    'class'=>'from-control btn btn-primary',
    'id'=>'new_admin_id'
    
);
echo anchor('Admin_roles/add_admin_form','new_role',$attribute);


?>

</div>






<table class="table table-striped">
<thead>
<tr>
<th>No </th>
<th>name </th>
</tr>

</thead>
<tbody>
<?php $counter=1; ?>
<?php foreach($admin_roles as $rtl){?>
<tr>
<td><?php echo $counter;?></td>
<td> <?php echo $rtl->name;?>  </td>


<td> <a class="btn btn-danger"href="#"> Dlete </button></td>
<td> <a class="btn btn-success"href="#"> edit </button></td>



</tr>
<?php $counter++;?>
<?php } ?>


</tbody>


