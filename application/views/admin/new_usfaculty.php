<div>
<h1><?php echo $this->lang->line('regiester_admin');?></h1>
<div>
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

?>
<?php

echo form_open('admins/create_admin',$attribute);
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
    'name'=>'position',
    'placeholder'=>' enterposition',
);

//echo form_label('position');
echo form_input($attribute);
?>

</div>



<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control',
    'name'=>'pass',
    'placeholder'=>' enterpass',
);

//echo form_label('password');
echo form_password($attribute);
?>
</div>

<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control btn btn-success',
    'value'=> $this->lang->line('submit'),
    
);

echo form_submit($attribute);
?>

</div>


<?php
echo form_close();
?>
