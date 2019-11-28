<div>
<h1><?php echo $this->lang->line('regiester_room');?></h1>
<?php

$attribute=array(
  'method'=>'post',
  'class'=>'user_regiesteration_form'
);
echo form_open('room/update_room',$attribute);
?>
<input type="text" name="room_id" value="<?php echo $single_room->room_no;?>">
<div class="row"> 
<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control',
    'name'=>'room_no',
    'placeholder'=>' enterroom_no',
    'value'=>$single_room->room_no,
);

echo form_label('room_no');
echo form_input($attribute);

?>

</div>
<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control',
    'name'=>'location',
    'placeholder'=>' enterlocation',
    'value'=>$single_room->location,
);

echo form_label('location');
echo form_input($attribute);
?>

</div>


<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control btn btn-primary',
    'value'=>$this->lang->line('submit'),
    
);

echo form_submit($attribute);
?>

</div>
 

<?php
echo form_close();
?>
