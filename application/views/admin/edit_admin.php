<div>
<h1> <?php echo $this->lang->line('regiester_admin');?></h1>
<?php

$attribute=array(
  'method'=>'post',
  'class'=>'user_regiesteration_form'
);
 
echo form_open('admins/update_admin');
?>
<input type="hidden" name="id" value="<?php echo $single_admins->admin_id;?>">
<div class="row"> 

<div class="col-md-6 form-group">
<?php
$attribute=array(
    'class'=>'from-control',
    'name'=>'firstname',
    'placeholder'=>' enter firstname',
    'value'=>$single_admins->firstname,
);

echo form_label('firstname');
echo form_input($attribute);

?>

</div>
<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control',
    'name'=>'lastname',
    'placeholder'=>' enterlastname',
    'value'=>$single_admins->lastname,
);

echo form_label('lastname');
echo form_input($attribute);
?>

</div>


<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control',
    'name'=>'position',
    'placeholder'=>' enterposition',
    'value'=>$single_admins->position,
);

echo form_label('position');
echo form_input($attribute);
?>

</div>

<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control',
    'name'=>'password',
    'placeholder'=>' enterpass',
    'value'=>$single_admins->password,
);

echo form_label('password');
echo form_password($attribute);
?>
</div>



<div class="col-md-6 form-group"> 
<?php
$attribute=array(
    'class'=>'from-control btn btn-success',
    'value'=><?php echo $this->lang->line('submit');?>,
    
);

echo form_submit($attribute);
?>

</div>

 

<?php
echo form_close();
?>

