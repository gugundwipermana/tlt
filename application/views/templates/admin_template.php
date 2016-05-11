<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome 
    -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons 
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    -->
    <!-- Theme style -->
    <link href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.css'); ?>" rel="stylesheet">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/flat/blue.css'); ?>">
    <!-- ck editor -->    

    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/morris/morris.css'); ?>">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css'); ?>">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datepicker/datepicker3.css'); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker-bs3.css'); ?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">
        <?php echo $_admin_header;?>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <?php echo $_admin_side_bar;?>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <?php echo $_admin_content;?>
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <?php echo $_admin_control_side_bar;?>
    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

    <!-- Main Footer -->
    <footer class="main-footer">
        <?php echo $_admin_footer;?>
    </footer>
</div>

<!-- jQuery 2.1.3 -->
<script src="<?php echo base_url('assets/plugins/jQuery/jQuery-2.1.4.min.js'); ?>"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo base_url('assets/dist/js/bootstrap.min.js'); ?>"></script>
<!-- iCheck


<!-- Sparkline -->
<script src="<?php echo base_url('assets/plugins/sparkline/jquery.sparkline.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/plugins/knob/jquery.knob.js'); ?>"></script>
<!-- daterangepicker -->

<!-- datepicker -->
<script src="<?php echo base_url('assets/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>
<!-- data tables -->
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.js'); ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/plugins/fastclick/fastclick.min.js'); ?>"></script>
<!-- CK editor -->
<script src="<?php echo base_url('assets/plugins/ckeditor/ckeditor.js'); ?>"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/app.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>


<script type="text/javascript">
    $(document).ready(function() { $('#cumaini').DataTable(); } );
</script>

<script>
    $(function () {
        $('textarea').each(function(){
            CKEDITOR.replace( $(this).attr('id'));
            CKEDITOR.add;
        });
    });
</script>

<script>
    var openFile = function(event) {
        var input = event.target;

        var reader = new FileReader();
        reader.onload = function(){
            var dataURL = reader.result;
            var output = document.getElementById('output');
            output.src = dataURL;
        };
        reader.readAsDataURL(input.files[0]);
        var imgSize = parseFloat(input.files[0].size / 1024).toFixed(2);
        if (imgSize > 800){
            alert("Peringatan!. Ukuran gambar:" + parseFloat(input.files[0].size / 1024).toFixed(2) + " KB.\nMaximal 800 KB");
        }
    };
</script>

<script>
    $(document).ready(function(){
        $('#content_date').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
        $('#content_end_date').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
    })
</script>

<script>
    function konfirmasihapus(event){
        var r=confirm("Yakin di hapus ?");
        if (r==true){
            return true;
        }else{
            //event.stopImmediatePropagation();
            event.preventDefault();
            return false;
        }
    }

    function alertWithoutNotice(message){
        setTimeout(function(){
            alert(message);
        }, 1000);
    }
</script>

</body>
</html>
