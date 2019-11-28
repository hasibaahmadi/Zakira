<div>
<h1> regiester room</h1>
<?php

$attribute=array(
  'method'=>'post',
  'class'=>'user_regiesteration_form'
);
echo form_open('room/create_room',$attribute);
?>

<div class="row"> 
<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control',
    'name'=>'room_no',
    'placeholder'=>'enterroom_no',
    
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
    'placeholder'=>' enterlocattion',
    
);

echo form_label('location');
echo form_input($attribute);
?>
</div>
<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control btn btn-success',
    'value'=>'submit',
    
);

echo form_submit($attribute);
?>

</div>
<?php
echo form_close();
?>
</div>