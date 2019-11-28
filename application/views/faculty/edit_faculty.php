<div>
<h1><?php echo $this->lang->line('regiester_faculty');?></h1>
<?php

$attribute=array(
  'method'=>'post',
  'class'=>'user_regiesteration_form'
);
echo form_open('faculty/update_faculty',$attribute);
?>
<input type="hidden" name="f_id" value="<?php echo $single_faculty->F_id ;?>">
<div class="row"> 
<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control',
    'name'=>'f_name',
    'placeholder'=>' enterfaculty_name',
    'value'=>$single_faculty->f_name,
);

echo form_label('f_name');
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
