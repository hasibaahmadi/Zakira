
<html lang="en">

<!-- Mirrored from www.g-axon.com/mouldifi-5.0/rtl/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Dec 2017 07:41:18 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
<title></title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='images/merci.png' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="<?php echo base_url();?>assets/new_assets/fonts/myfont.css" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- CSS3 Animate It Plugin Stylesheet -->
<link href="<?php echo base_url();?>assets/new_assets/css/plugins/css3-animate-it-plugin/animations.css" rel="stylesheet">
<!-- /css3 animate it plugin stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="<?php echo base_url();?>assets/new_assets/css/bootstrap.min.css" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Mouldifi core stylesheet -->
<link href="<?php echo base_url();?>assets/new_assets/css/mouldifi-core.css" rel="stylesheet">
<!-- /mouldifi core stylesheet -->

<link href="<?php echo base_url();?>assets/new_assets/css/mouldifi-forms.css" rel="stylesheet">

<!-- Bootstrap RTL stylesheet min version -->
<link href="<?php echo base_url();?>assets/new_assets/css/bootstrap-rtl.min.css" rel="stylesheet">
<!-- /bootstrap rtl stylesheet min version -->

<!-- Mouldifi RTL core stylesheet -->
<link href="<?php echo base_url();?>assets/new_assets/css/mouldifi-rtl-core.css" rel="stylesheet">
<!-- /mouldifi rtl core stylesheet -->
</head>
<body class="login-page" id="body">
	<div class="login-pag-inner">
		<div class="animatedParent animateOnce z-index-50">
			<div class="login-container animated growIn slower">
				<div class="login-branding">
				<h3>
	<?php echo $this->session->flashdata('msg');
	?>
	</h3>
				</div>
				<div class="login-content">
				<h3 style= "marging-Buttom:20px; text-align:center; borde-bottom:1px sold #ddd;font-weight: bold;"><?php echo $this->lang->line('welcom')?></h3>
				<?php echo form_open('admins/create_register')?>                       
					
						<div class="form-group">
							<input type="text" placeholder="firstname"" class="form-control" style="font-size: 21px;" name="fname" >
						</div> 
            
            <div class="form-group">
							<input type="text" placeholder="lastname" class="form-control" style="font-size: 21px;" name="lname" >
						</div>
            <div class="form-group">
							<input type="text" placeholder="position " class="form-control" style="font-size: 21px;" name="type " >
						</div>
						<div class="form-group">
							<input type="text" placeholder="username " class="form-control" style="font-size: 21px;" name="user_name " >
						</div>
     
            
						<div class="form-group">
							<input type="password" placeholder=" password"class="form-control" style="font-size: 21px;" name="pass" id="pass">
						</div>
						
					   <?php form_close();?>

						
							<button class="btn btn-primary btn-block" style="font-size: 22px; font-weight: bold;"name="submit" value="submit">Register</button>
									
						</div>  
					
				
				</div>
			</div>
		</div>
	</div>
	
<!--Load JQuery-->
<script src="<?php echo base_url();?>assets/new_assets/js/jquery.min.js"></script>
<!-- Load CSS3 Animate It Plugin JS -->
<script src="<?php echo base_url();?>assets/new_assets/js/plugins/css3-animate-it-plugin/css3-animate-it.js"></script>
<script src="<?php echo base_url();?>assets/new_assets/js/bootstrap.min.js"></script>
</body>

<!-- Mirrored from www.g-axon.com/mouldifi-5.0/rtl/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Dec 2017 07:41:18 GMT -->
</html>
