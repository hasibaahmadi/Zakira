<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-0 pull-left">
<table class="table table-striped">
<thead>
<tr>
<th><?php echo $this->lang->line('NO');?></th>


<th><?php echo $this->lang->line('room_no');?> </th>
<th><?php echo $this->lang->line('location');?> </th>
<th colspan="2"><?php echo $this->lang->line('oprations');?> </th>





</tr>

</thead>
<tbody>
<?php $counter=1; ?>
<?php foreach($rooms as $row){?>
<tr>
<td><?php echo $counter;?></td>
<td> <?php echo $row->room_no	;?>  </td>
<td> <?php echo $row->location;?>  </td>


<td> <button class="btn btn-danger" onclick ="confirmDelete(<?php echo $row->room_no  ;?>)"> <?php echo $this->lang->line('Delet');?> </button></td>
<td> <a href="edit_room/<?=$row->room_no  ?>"class="btn btn-info"><?php echo $this->lang->line('edit');?></a> </td>
</tr>
<?php $counter++;?>
<?php } ?>


</tbody>
</table>
<?php echo $this->pagination->create_links(); ?>
<script>
var base_url="<?php echo base_url('/');?>"
function confirmDelete(room_no  ){
    var res=confirm('are you sure ?');
    
    if(res==true){
        window.location.assign(base_url+'index.php/'+'room/room_delete/'+room_no);

    }else{

    }
}

</script>

