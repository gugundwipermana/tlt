<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
        <!-- 
        <li class="header">HEADER</li>
        Optionally, you can add icons to the links -->
        <?php
        if (isset($admin_menu)) {
        	foreach($admin_menu as $i => $am){
        		?>
        		<li>
					<a href="<?php echo base_url($am->route_be); ?>">
						<i class="fa fa-dashboard"></i> <span><?php echo $am->menu_name; ?></span>
					</a>
				</li>
        		<?php
        	}
        }
        ?>
    </ul><!-- /.sidebar-menu -->
    <?php
    //print_r($admin_menu);
    ?>
</section>
<!-- /.sidebar -->