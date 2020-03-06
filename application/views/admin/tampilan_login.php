<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE 2 | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url('assets/AdminLTE/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/AdminLTE/dist/css/AdminLTE.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url('images/icon-ipr.png') ?>"/>
        <!-- Favicon -->
        <link href="<?php echo base_url('assets/AdminLTE/plugins/iCheck/square/blue.css') ?>" rel="stylesheet" type="text/css" />

        <script type="text/javascript">
            function cekform(){
                if(!$("#username").val()){
                    alert('Username tidak boleh kosong');
                    $('#username').focus();
                return false;
                }
                if(!$("#password").val()){
                    alert('Password tidak boleh kosong');
                    $('#password').focus();
                    return false;
                }
            }
        </script>

    </head>
    <body class="login-page">
        <div class="login-box">
            <div class="login-box-body" align="center">
                <img src="<?php echo base_url(); ?>images/logo-ipr.png" height="70px" width="250px">
                <p class="login-box-msg"><strong>Form Login</strong></p>
                <form method="POST" action="<?php echo base_url().'login/auth'?>" onsubmit="return cekform();">
                    
                    <center>
                        <?php echo $this->session->flashdata('msg');?>
                    </center>
                    <div class="form-group has-feedback">
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                       <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                       <center>
                        <?php 
                            $info = $this->session->flashdata('info');
                            if(!empty($info)) {
                            echo $info;
                            }
                        ?>
                    </center>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-success btn-block btn-flat">Login</button>
                        </div><!-- /.col -->
                    </div>
                </form>

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.3 -->
        <script src="<?php echo base_url('assets/AdminLTE/plugins/jQuery/jQuery-2.1.3.min.js') ?>"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url('assets/AdminLTE/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url('assets/AdminLTE/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>
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