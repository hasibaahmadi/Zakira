<div>
<h1> <?php echo $this->lang->line('regiester_student');?></h1>
<?php

$attribute=array(
  'method'=>'post',
  'enctype'=>'multipart/form-data',
  'class'=>'user_regiesteration_form'
);
echo form_open('student/update_student',$attribute);
?>
<input type="hidden" name="s_id" value="<?php echo $single_student->student_id;?>">
<div class="row"> 
<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control',
    'name'=>'firstname',
    'placeholder'=>' enter firstname',
    'value'=>$single_student->firstname,
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
    'value'=>$single_student->lastname,
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
    'value'=>$single_student->fathername,
);

//echo form_label('fathername');
echo form_input($attribute);
?>

</div>
<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control',
    'name'=>'room_no',
    'placeholder'=>' enterroom_no',
    'value'=>$single_student->room_no,
);

//echo form_label('room_no');
echo form_input($attribute);
?>

</div>
<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control',
    'name'=>'province_name',
    'placeholder'=>' enterprovince_name',
    'value'=>$single_student->province_id,
);

//echo form_label('province_name');
echo form_input($attribute);
?>

</div>



<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control',
    'name'=>'student_phone',
    'placeholder'=>' entersstudent_phone',
    'value'=>$single_student->student_phone,
    
);

//echo form_label('student_phone');
echo form_input($attribute);
?>
</div>

<div class="col-md-6 form-group"> 
<?php

$attribute=array(
    'class'=>'from-control btn btn-primary',
    'value'=><?php echo $this->lang->line('submit');?>,,
    
);

echo form_submit($attribute);
?>

</div>
 

<?php
echo form_close();
?>
