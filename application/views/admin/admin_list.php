<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-0 pull-left">
<table class="table table-striped">
<thead>
<tr>
<th>No </th>
<th><?php echo $this->lang->line('firstname');?> </th>
<th><?php echo $this->lang->line('lastname');?> </th>
<th><?php echo $this->lang->line('position');?> </th>

<th colspan="2"><?=$this->lang->line('operations');?></th>

</tr>

</thead>
<tbody>
<?php $counter=1; ?>
<?php foreach($admins as $row){?>
<tr>
<td><?php echo $counter;?></td>
<td> <?php echo $row->firstname;?>  </td>
<td> <?php echo $row->lastname;?>  </td>
<td> <?php echo $row->position;?>  </td>

<td> <button class="btn btn-danger" onclick ="confirmDelete(<?php echo $row->admin_id ;?>)"> <?php echo $this->lang->line('Delet');?> </button></td>
<td> <a href="edit_admin/<?=$row->admin_id?>"class="btn btn-info"> <?php echo $this->lang->line('edit');?></a> </td>

<?php
$arr=array(
    'class'=>"btn btn-success",
    'id'=> "edit_admin",

);
//`echo anchor('admins/edit_admin/'.$row->admin_id,'Edit',$arr);?>

</tr>
<?php $counter++;?>
<?php } ?>


</tbody>
</table>
<?php echo $this->pagination->create_links(); ?>
<script>
var base_url="<?php echo base_url('/');?>"
function confirmDelete(admin_id ){
    var res=confirm('are you sure ?');
    
    if(res==true){
        window.location.assign(base_url+'index.php/'+'admins/admin_delete/'+admin_id);

    }else{

    }
}

</script>
