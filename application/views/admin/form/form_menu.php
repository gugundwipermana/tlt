<section class="content-header">
	<h1>
		Menu
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="<?php echo base_url('admin_controller/menu'); ?>"><i class="fa fa-dashboard"></i> Menu</a></li>     
        <li class="active">Menu</li>
    </ol>
</section>

<section class="content">
<div class="row">
    <!-- Your Page Content Here -->
    <div class="box">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Menu</h3>
                <div class="box-tools pull-right">					
                </div>
            </div>

            <div class="box-body"> 
				<?php
				if (isset($menu)){
					$menu_name = $menu->menu_name;
					$menu_name_id = $menu->menu_name_id;
				}else{
					$menu_name = "";
					$menu_name_id = "";
				}
				
				$target = "";
				$attributes = array('class' => 'form-horizontal', 'id' => 'form_menu');
				echo form_open($target, $attributes);
				?>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="menu_name">Menu Name *</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'menu_name', 'name'=>'menu_name', 'placeholder'=>'menu name', 'value'=>$menu_name);
						echo form_input($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="menu_name_id">Menu Name Ind*</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'menu_name_id', 'name'=>'menu_name_id', 'placeholder'=>'menu name indonesia', 'value'=>$menu_name_id);
						echo form_input($data);
						?>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-2">
						<a href="<?php echo base_url('admin_controller/menu'); ?>"><button class="btn btn-default" type="button">Cancel</button></a>
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
        </div> <!--end box devault-->
    </div>
	<?php
	print_r($error_post);
	?>
</div>
</section>