<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V12</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/css/main.css">
<!--===============================================================================================-->
 	<script type="text/javascript">
            function cekform(){
                if(!$("#username").val()){
                    alert('Nama pengguna tidak boleh kosong');
                    $('#username').focus();
                return false;
                }
                if(!$("#password").val()){
                    alert('Kata sandi tidak boleh kosong');
                    $('#password').focus();
                    return false;
                }
            }
        </script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/login/images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form">

					<div class="login100-form-avatar">
						<img src="<?php echo base_url(); ?>assets/login/images/logo_ipr.png" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Form Login
					</span>
					<form method="POST" action="<?php echo base_url().'index.php/login/auth'?>" onsubmit="return cekform();">
					<center>
                    	<?php echo $this->session->flashdata('msg');?>
                	</center>

						<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
							<input class="input100" type="text" name="username" placeholder="Username">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-user"></i>
							</span>
						</div>
						<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
							<input class="input100" type="password" name="pass" placeholder="Password">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock"></i>
							</span>
							<center>
                        <?php 
                            $info = $this->session->flashdata('info');
                            if(!empty($info)) {
                            echo $info;
                            }
                        ?>
						</div>

						<div class="container-login100-form-btn p-t-10">
							<button type="submit" class="login100-form-btn">
								Login
							</button>
						</div>
					</form>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?php echo base_url(); ?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script>
            $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
                });
            });
    </script>

</body>
</html>