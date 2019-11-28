<div>
<h1><?php echo $this->lang->line('regiester_faculty');?></h1>
<?php

$attribute=array(
  'method'=>'post',
  'class'=>'user_regiesteration_form'
);
echo form_open('faculty/create_faculty',$attribute);
?>


<div class="row"> 
<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control',
    'name'=>'f_name',
    'placeholder'=>'enter faculyname',
);

echo form_label('f_name');
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
