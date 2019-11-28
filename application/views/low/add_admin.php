<?php echo form_open('Admin_roles/create_permission');?>
<div class="col-md-12 form-group">
<label for="permission_name" > permission_name</lable>
<input type="text" name="permission_name"class="form-control"id="permission_name">

</div>
<div class="row">
<div class="col-md-4">
<p>
<label for="student_list"> view student list</lable>
<input type="checkbox" name="student_list"id="student_list">
</p>
</div>
<div class="col-md-4">
<p>
<label for="add_student"> add student list</lable>
<input type="checkbox" name="add_student"id="add_student">
</p>
</div>


<div class="col-md-4">
<p>
<label for="edit_student"> edit student list</lable>
<input type="checkbox" name="edit_student"id="edit_student">
</p>
</div>
<div class="col-md-4">
<p>
<label for="delete_student"> delete student list</lable>
<input type="checkbox" name="delete_student"id="delete_student">
</p>
</div>


</div>
<div class="row">
<div class="col-md-4">
<p>
<label for="student_list"> view role list</lable>
<input type="checkbox" name="role_list"id="student_list">
</p>
</div>
<div class="col-md-4">
<p>
<label for="add_student"> add role list</lable>
<input type="checkbox" name="add_role"id="add_student">
</p>
</div>


<div class="col-md-4">
<p>
<label for="edit_student"> edit role list</lable>
<input type="checkbox" name="edit_role"id="edit_student">
</p>
</div>
<div class="col-md-4">
<p>
<label for="delete_student"> delete role list</lable>
<input type="checkbox" name="delete_role"id="delete_student">
</p>
</div>


</div>
<input type="submit" value="save"class="btn btn-primary">
<?php echo form_close();?>
