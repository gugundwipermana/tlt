<!-- Main content -->
<section class="content-header">
	<h1>
		Zone Floorplan
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="<?php echo base_url('admin_controller/floorplan'); ?>"><i class="fa fa-dashboard"></i> Floorplan</a></li>
        <li class="active"><a href="<?php echo base_url('admin_controller/zone_floorplan'.$pid); ?>"><i class="fa fa-dashboard"></i> Zone Floorplan</a></li>
    </ol>
</section>

<section class="content">	
<div class="row">
    <!-- Your Page Content Here -->
    <div class="box">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Zone Floorplan</h3>
            </div>

            <div class="box-body"> 
				<?php
				if (isset($zone_floorplan)){
					$content_description_1 = $zone_floorplan->content_description_1;
					$content_description_2 = $zone_floorplan->content_description_2;
					$content_description_3 = $zone_floorplan->content_description_3;
					$content_description_1_id = $zone_floorplan->content_description_1_id;
					$content_description_2_id = $zone_floorplan->content_description_2_id;
					$content_description_3_id = $zone_floorplan->content_description_3_id;
					$img = $zone_floorplan->images_name;
				}else{
					$content_description_1 = "";
					$content_description_2 = "";
					$content_description_3 = "";
					$content_description_1_id = "";
					$content_description_2_id = "";
					$content_description_3_id = "";
					$img = "";
				}
				
				$target = "";
				$attributes = array('class' => 'form-horizontal', 'id' => 'form_hoe');
				echo form_open_multipart($target, $attributes);
				?>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_1">Tiile *</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_1', 'name'=>'content_description_1', 'value'=>$content_description_1);
						echo form_input($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_2">Main *</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_2', 'name'=>'content_description_2', 'value'=>$content_description_2);
						echo form_input($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_3">Detail *</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_3', 'name'=>'content_description_3', 'value'=>$content_description_3);
						echo form_textarea($data);
						?>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_1_id">Title Indo</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_1_id', 'name'=>'content_description_1_id', 'value'=>$content_description_1_id);
						echo form_input($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_2_id">Main Indo</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_2_id', 'name'=>'content_description_2_id', 'value'=>$content_description_2_id);
						echo form_input($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_3_id">Detail Indo</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_3_id', 'name'=>'content_description_3_id', 'value'=>$content_description_3_id);
						echo form_textarea($data);
						?>
					</div>
				</div>

				<div class="form-group">
                        <label class="col-sm-2 control-label" for="view_image">Image</label>
                        <div class="col-sm-10">
                            <div id="image_preview" style="width: auto; height: 102px; border: none;">
                                <img id='output' src="<?php echo base_url('assets/images/upload/'.$img); ?>" class="form-control input-sm" style="width: auto; height: 100px; background-color: #ddd; "/>
                            </div>
                            <div>Image require < 800KB, 486 X 486 Pixel</div>
                        </div>
                    
                        <label class="col-sm-2 control-label" for="input_image">Browse Image*</label>
                        <div class="col-sm-10">
                            <?php
                            $data = array('class'=>'', 'id'=>'input_image', 'name'=>'inputfile', 'onchange'=>'openFile(event)');
                            echo form_upload($data);
                            ?>
                        </div>
                    </div>
												
				<div class="form-group">
					<div class="col-sm-2">
						<a href="<?php echo base_url('admin_controller/zone_floorplan/'.$pid); ?>"><button class="btn btn-default" type="button">Cancel</button></a>
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