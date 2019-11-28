<div>
<h1><?php echo $this->lang->line('regiester_province');?></h1>
<?php

$attribute=array(
  'method'=>'post',
  'class'=>'user_regiesteration_form'
);
echo form_open('province/create_province',$attribute);
?>

<div class="row"> 

<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control',
    'name'=>'province_name',
    'placeholder'=>' enterprovince_name',
    
);

echo form_label('province_name');
echo form_input($attribute);
?>
</div>
<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control btn btn-success',
    'value'=>$this->lang->line('submit')
    
);

echo form_submit($attribute);
?>

</div>
<?php
echo form_close();
?>
</div>