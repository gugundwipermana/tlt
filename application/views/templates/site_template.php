<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Needs
   ================================================== -->
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Telkom Landmark Tower</title>
    <meta name="description" content="telkom landmark tower">
    <meta name="keywords" content="bootstrap theme, portfolio template, telkom landmark tower">
    <meta name="author" content="dot.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/dist/img/icon.ico'); ?>">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/css/onepage-scroll.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/css/superslides.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/css/slick.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/css/main.css'); ?>">

</head>

<body style="height:100%;">
    <!--<div>
    </div>
    <div>
    </div>-->
        <?php echo $_site_header; ?>
        <?php echo $_site_content; ?>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Javascripts
    ================================================== -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->

    <script type="text/javascript" src="<?php echo base_url('assets/dist/js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/dist/js/bootstrap.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/dist/js/jquery.onepage-scroll.js'); ?>"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/plugins/imagemaps/jquery.rwdImageMaps.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/slick/slick.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/dist/js/jquery.superslides.js'); ?>"></script>

    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/dist/js/main.js'); ?>"></script>

    <script src="<?php echo base_url('assets/dist/js/fastclick.js'); ?>" type="text/javascript" ></script>
    <script>
          $(function() {
              FastClick.attach(document.body);
          });
    </script>

</body>
</html>