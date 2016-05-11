<!-- Main content -->
<section class="content-header">
	<h1>
		Users
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="<?php echo base_url('admin_controller/users'); ?>"><i class="fa fa-dashboard"></i> Users</a></li>     
    </ol>
</section>

<section class="content">	
<div class="row">
    <!-- Your Page Content Here -->
    <div class="box">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Users</h3>                
            </div>

            <div class="box-body"> 
				<?php
				if (isset($user)){
					$user_name = $user->user_name;
					$name = $user->name;
				}else{
					$user_name = "";
					$name = "";
				}
				
				$target = "";
				$attributes = array('class' => 'form-horizontal', 'id' => 'form_user');
				echo form_open($target, $attributes);
				?>

				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="name">Name *</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'name', 'name'=>'name', 'placeholder'=>'Name', 'value'=>$name);
						echo form_input($data);
						?>
					</div>
				</div>

                                <div class="form-group">
					<label class="col-sm-2 control-label" for="user_name">Username *</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'user_name', 'name'=>'user_name', 'placeholder'=>'User Name', 'value'=>$user_name);
						echo form_input($data);
						?>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="password">Password *</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'password', 'name'=>'password', 'placeholder'=>'Password');
						echo form_password($data);
						?>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="cpassword">Retype Password *</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'cpassword', 'name'=>'cpassword', 'placeholder'=>'Retype Password');
						echo form_password($data);
						?>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-2">
						<a href="<?php echo base_url('admin_controller/users'); ?>"><button class="btn btn-default" type="button">Cancel</button></a>
					</div>
					<div class="col-sm-10">
						<?php
						$data = array('class' =>'btn btn-info pull-right', 'id'=>'', 'name'=>'insertdata', 'value'=>'Submit');
						echo form_submit($data);
						?>
					</div>
				</div>
				</form>
				
            </div> <!--end div body-->
		<?php
		echo $error_post;
		?>
        </div> <!--end box devault-->
    </div>
</div>
</section><!-- /.content -->




