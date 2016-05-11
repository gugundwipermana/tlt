<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome -->
   
    <!-- Theme style -->
    <link href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>" rel="stylesheet">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/flat/blue.css'); ?>">

    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/morris/morris.css'); ?>">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>">
   
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">

</head>
<body class="hold-transition skin-blue sidebar-mini">

    <div class="login-box">
        <div class="login-logo">
            Login
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <?php
            $target = "";
            $attributes = array('class' => 'loginform', 'id' => 'form_login');
            echo form_open($target, $attributes);
            ?>
            <div class="form-group has-feedback">
                <?php
                $data = array('class'=>'form-control', 'id'=>'user_name', 'name'=>'user_name', 'placeholder'=>'User Name');
                echo form_input($data);
                ?>
            </div>

            <div class="form-group has-feedback">
                <?php
                $data = array('class'=>'form-control', 'id'=>'password', 'name'=>'password', 'placeholder'=>'Password');
                echo form_password($data);
                ?>
            </div>

            <div class="row">
                <div class="col-xs-8">
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <?php
                    $data = array('class' =>'btn btn-primary btn-block btn-flat', 'id'=>'', 'name'=>'kirim', 'value'=>'Sign In');
                    echo form_submit($data);
                    ?>
                </div><!-- /.col -->
            </div>

            </form>
        	
            <?php
            if (isset($error_post)) { echo $error_post; }
            ?>

        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->


<!-- jQuery 2.1.3 -->
<script src="<?php echo base_url('assets/plugins/jQuery/jQuery-2.1.4.min.js'); ?>"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo base_url('assets/dist/js/bootstrap.min.js'); ?>"></script>
<!-- iCheck

<!------------------------->



<script src="<?php echo base_url('assets/plugins/knob/jquery.knob.js'); ?>"></script>
<!-- daterangepicker -->

<!-- datepicker -->
<script src="<?php echo base_url('assets/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/plugins/fastclick/fastclick.min.js'); ?>"></script>


<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/app.min.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>

</body>
</html>

