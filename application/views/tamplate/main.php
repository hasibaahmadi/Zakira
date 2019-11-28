
<!DOCTYPE html>

<html>
<head>
    <title>Dormitory MIS</title>
    <meta charset="utf-8">

   
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css'); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-theme.min.css'); ?>">
 
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
  
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>
</head>
<body>
 
    <div class="main">
   
  <div class="header">
  
        
    <div class="block_header">
    <?php echo anchor('admins/change_language/english','English')?>
          <?php echo anchor('admins/change_language/pashto','pashto')?>
          <?php echo anchor('admins/change_language/persion','persion')?>

          <h1 style="text-align:center;position:relative;top:15px;margin:0;"> <?php echo $this->lang->line('Dormitory_mangement_system');?></h1>
        
      <div class="clr"></div>
    </div>

    </div>

        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
            	<ul class="nav navbar-nav" id="nav-top">
           
                	<li><a href="welcome.php"><?php echo $this->lang->line('main_page');?></a></li>
                  
                  <?php if($this->session->userdata('isloged')==true){?>
                	<li class="dropdown"><a href="#" data-toggle="dropdown"><?php echo $this->lang->line('manager');?> <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
 
                    
                            <li> <?php echo anchor('admins/admin_list',$this->lang->line('manager_list'));?></li>
					                  <li> <?php echo anchor('admins/add_admin',$this->lang->line('new_manager'));?></li>	
                        </ul>                    
                    </li>

              
                    <li class="dropdown"><a href="#" data-toggle="dropdown"><?php echo $this->lang->line('Rooms');?> <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
                        	
           <li> <?php echo anchor('room/room_list',$this->lang->line('room_list'));?><a href="register.html"></a></li>
      
					<li> <?php echo anchor('room/add_room',$this->lang->line('new_room'));?><a href="register.html"></a></li>

                        </ul>                    
                    </li>
                		<li class="dropdown"><a href="#" data-toggle="dropdown"> <?php echo $this->lang->line('Faculty');?> <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
						<li> <?php echo anchor('faculty/faculty_list',$this->lang->line('Faculty_list'));?><a href="register.html"></a></li>
           
					<li> <?php echo anchor('faculty/add_faculty',$this->lang->line('new_Faculty'));?></li>
                        </ul>                    
                    </li>

                  <?php } ?>              
                    <li class="dropdown"><a href="#" data-toggle="dropdown"><?php echo $this->lang->line('province');?><span class="caret"></span></a>
                    	<ul class="dropdown-menu">
						<li> <?php echo anchor('province/province_list',$this->lang->line('province_list'))?><a href="register.html"></a></li>
           
					<li> <?php echo anchor('province/add_province',$this->lang->line('new_province'))?><a href="register.html"></a></li>
                        </ul>                    
                    </li>

                

                    <li class="dropdown"><a href="#" data-toggle="dropdown"><?php echo $this->lang->line('student');?> <span class="caret"></span></a>
                    	<ul class="dropdown-menu">
            <li> <?php echo anchor('student/student_list',$this->lang->line('student_list'))?><a href="register.html"></a></li>
					<li> <?php echo anchor('student/add_student',$this->lang->line('new_student'))?><a href="register.html"></a></li>	
                        </ul>                    
                    </li>
  <?php if($this->session->userdata('isloged')==true):?>
      <?php
$attr=array(
	'class'=>"btn btn-danger square-btn-adjust",
	'id'=>''
);
echo anchor('welcome/logout',$this->lang->line('logout'),$attr);
?>
<?php else:?>
            
<?php
$attr=array(
	'class'=>"btn btn-danger square-btn-adjust",
	'id'=>''
);
echo anchor('welcome/login',$this->lang->line('Login'),$attr);
?>
<?php endif ?>
                </ul>
			</span>
            </div>  
        </nav>


       
				
				<?php $this->load->view($main_content);?>
				
								
				</div>
						
          <!-- Main content -->
         
    


  <div class="col-lg-12">
  
  <div class="body">
  
    <div class="body_resize">

      <div class="Welcome col-lg-12 col-md-12 col-sm-12 col-xs-12">
        
     

      </div>
      
      
    </div>
    <div class="clr"></div>
  </div>

  </div>

  <div class="clearfix"></div>

  <div class="FBG noprint">
    <div class="FBG_resize">

      <div class="fbg_box col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <h2><?php echo $this->lang->line('about_faculty');?></h2>
        <p><strong>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </strong></p>
        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop <br />
          publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
       
      </div>
      <div class="fbg_box col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <h2><?php echo $this->lang->line('about_dormitory_system');?></h2>
        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        
      </div>
      <div class="fbg_box  col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <h2><?php echo $this->lang->line('contact_dormitory');?></h2>
        <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
        <p><strong>Tel:</strong> +123456789<br />
          <strong>Fax:</strong> +123456789<br />
          <strong>Email:</strong> company@domainname.com </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer noprint">
    <div class="resize" style="text-align:center;">
      حق کاپی محفوظ است &copy; 2019
    </div>
    <p class="clr"></p>
  </div>
</div>

    </form>

</body>
</html>
