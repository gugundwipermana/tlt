<!-- Main content -->
<section class="content-header">
	<h1>
		Image Contact
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="<?php echo base_url('admin_controller/contact'); ?>"><i class="fa fa-dashboard"></i> Contact</a></li>
        <li class="active"><a href="<?php echo base_url('admin_controller/background_contact'); ?>"><i class="fa fa-dashboard"></i> Image Contact</a></li>
        <li class="active"> Image Contact</a></li>
    </ol>
</section>

<section class="content">	
<div class="row">
    <!-- Your Page Content Here -->
    <div class="box">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Image Contact</h3>
            </div>

            <div class="box-body"> 
				<?php
				if (isset($background_contact)){
					$content_description_1 = $background_contact->content_description_1;
					$content_description_1_id = $background_contact->content_description_1_id;					
					$img = $background_contact->images_name;
				}else{
					$content_description_1 = "";
					$content_description_1_id = "";					
					$img = "";
				}
				
				$target = "";
				$attributes = array('class' => 'form-horizontal', 'id' => 'form_hoe');
				echo form_open_multipart($target, $attributes);
				?>

				<div class="form-group">
					<div class="col-sm-2"></div>
					<div class="col-sm-10">
						<?php
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_1', 'name'=>'content_description_1', 'placeholder'=>'text', 'value'=>"background_contact", 'readonly'=>'true');
						echo form_input($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-2"></div>
					<div class="col-sm-10">
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_1_id', 'name'=>'content_description_1_id', 'placeholder'=>'text indo', 'value'=>"background_contact", 'readonly'=>'true');
						echo form_input($data);
						?>
					</div>
				</div>

				<div class="form-group">
                    <label class="col-sm-2 control-label" for="view_image">Image</label>
                    <div class="col-sm-10">
                        <div id="image_preview" style="width: auto; height: 102px; border: none;">
                        	<img id='output' src="<?php echo base_url('assets/images/upload/'.$img); ?>" class="form-control input-sm" style="width: auto; height: 100px;"/>
                        </div>
                        <div>Image require < 800KB, 1229 X 366 Pixel</div>
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
						<a href="<?php echo base_url('admin_controller/background_contact'); ?>"><button class="btn btn-default" type="button">Cancel</button></a>
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