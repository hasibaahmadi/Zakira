

<div > 
<h1> <?php echo $this->lang->line('regiester_student');?></h1>
<?php
echo $this->session->userdata('validation');
?>
</div>
<?php

$attribute=array(
  'method'=>'post',
  'enctype'=>'multipart/form-data',
  'class'=>'user_regiesteration_form'
); 

echo form_open('student/create_student',$attribute);
?>


<div class="row"> 
<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control',
    'name'=>'firstname',
    'placeholder'=>' enter firstname',
    
);

//echo form_label('firstname');
echo form_input($attribute);

?>

</div>
<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control',
    'name'=>'lastname',
    'placeholder'=>' enterlastname',
   
);

//echo form_label('lastname');
echo form_input($attribute);
?>

</div>


<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control',
    'name'=>'fathername',
    'placeholder'=>' enterfathername',
    
);

//echo form_label('fathername');
echo form_input($attribute);
?>
<br>
<label for="room_no">Room number</label>
<select name="room_no" id="room_no">
<?php foreach($rooms as $item):?>
<option value="<?=$item['room_no']?>"><?=$item['room_no']?></option>
<?php endforeach;?>
</select>



</div>

<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control',
    'name'=>'student_phone',
    'placeholder'=>' enter student_phone',
    
);

//echo form_label('student_phone');
echo form_input($attribute);
?>
</div>


<br>
<label for="province_name">p_name</label>
<select name="province" province_id="province_id">
<?php foreach($province as $pro):?>
<option value="<?=$pro['province_id']?>"><?=$pro['province_name']?></option>
<?php endforeach;?>

</select>



</div>


<div class="col-md-6 form-group"> 
<label> photo</label>
<input type="file" class="form-control"name="user_photo">

</div>
<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control btn btn-primary',
    'value'=> $this->lang->line('submit'),
    
);

echo form_submit($attribute);
?>

</div>
 

<?php
echo form_close();
?>
