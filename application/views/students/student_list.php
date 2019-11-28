<div class="col-md-6 form-group"> 
<table class="table table-striped">
<thead>
<tr>
<th>No </th>
<th><?php echo $this->lang->line('firstname');?> </th>
<th><?php echo $this->lang->line('lastname');?> </th>
<th><?php echo $this->lang->line('fathername');?> </th>
<th><?php echo $this->lang->line('photo');?> </th>
<th><?php echo $this->lang->line('student_phone');?> </th>
<th><?php echo $this->lang->line('room_no');?> </th>
<th><?php echo $this->lang->line('province_name');?> </th>
<th colspan="2"><?php echo $this->lang->line('oprations');?> </th>
</tr>


</thead>
<tbody>
<?php $counter=1; ?>
<?php foreach($students as $field){?>
<tr>
<td><?php echo $counter;?></td>
<td> <?php echo $field->firstname;?>  </td>
<td> <?php echo $field->lastname;?>  </td>
<td> <?php echo $field->fathername;?>  </td>
<td> <img src="<?php echo base_url().'upload_image/'.$field->photo;?>" alt="" width="100">  </td>
<td> <?php echo $field->student_phone;?>  </td>
<td> <?php echo $field->room_no;?>  </td>
<td> <?php echo $field->province_name;?>  </td>

<td> <button class="btn btn-danger" onclick ="confirmDelete(<?php echo $field->student_id   ;?>)"><?php echo $this->lang->line('Delet');?></button></td>
<td> <a href="edit_student/<?=$field->student_id   ?>"class="btn btn-info"><?php echo $this->lang->line('edit');?></a> </td>
</tr>
<?php $counter++;?>
<?php } ?>


</tbody>
</table>
<?php echo $this->pagination->create_links(); ?>
<script>
var base_url="<?php echo base_url('/');?>"
function confirmDelete(student_id   ){
    var res=confirm('are you sure ?');
    
    if(res==true){
        window.location.assign(base_url+'index.php/'+'student/student_delete/'+student_id );

    }else{

    }
}

</script>

</div>