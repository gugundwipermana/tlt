<!-- Logo -->
<a href="<?php echo base_url('admin_controller'); ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>LT</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b><?php echo $this->session->userdata('ses_name'); ?></b></span>
</a>

<!-- Header Navbar -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
	<div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
			<!-- User Account: style can be found in dropdown.less -->
			<li class="dropdown user user-menu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">					
					<span class="hidden-xs"><?php echo $this->session->userdata('ses_name'); ?></span>
				</a>
				
				<ul class="dropdown-menu">
					<!-- User image -->
					<li class="user-header">
						<p>
						<small></small>
						</p>
					</li>
					
					<!-- Menu Footer-->
					<li class="user-footer">
						<div class="pull-left">
						<!-- <a href="#" class="btn btn-default btn-flat">Profile</a> -->
						</div>
						<div class="pull-right">
							<a href="<?php echo base_url('admin_controller/logout') ?>" class="btn btn-danger btn-flat">
								<i class="fa fa-power-off"></i> Sign out
							</a>
						</div>
					</li>
				</ul>					
			</li>
		</ul>
	</div>    
</nav>