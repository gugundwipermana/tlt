<!-- Main content -->
<section class="content-header">
	<h1>
		Location
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="<?php echo base_url('admin_controller/location'); ?>"><i class="fa fa-dashboard"></i> Location</a></li>     
    </ol>
</section>

<section class="content">	
<div class="row">
    <!-- Your Page Content Here -->
    <div class="box">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Location</h3>
            </div>

            <div class="box-body"> 
				<?php
				if (isset($location)){
					$content_description_1 = $location->content_description_1;
					$content_description_2 = $location->content_description_2;
					$content_description_3 = $location->content_description_3;
					$content_description_4 = $location->content_description_4;

					$content_description_1_id = $location->content_description_1_id;
					$content_description_2_id = $location->content_description_2_id;
					$content_description_3_id = $location->content_description_3_id;
					$content_description_4_id = $location->content_description_4_id;
				}else{
					$content_description_1 = "";
					$content_description_2 = "";
					$content_description_3 = "";
					$content_description_4 = "";

					$content_description_1_id = "";
					$content_description_2_id = "";
					$content_description_3_id = "";
					$content_description_4_id = "";
				}
				
				$target = "";
				$attributes = array('class' => 'form-horizontal', 'id' => 'form_hoe');
				echo form_open_multipart($target, $attributes);
				?>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_1">Main *</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_1', 'name'=>'content_description_1', 'placeholder'=>'text', 'value'=>$content_description_1);
						echo form_input($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_2">Titile </label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_2', 'name'=>'content_description_2', 'placeholder'=>'text', 'value'=>$content_description_2);
						echo form_textarea($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_3">Main Detail </label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_3', 'name'=>'content_description_3', 'placeholder'=>'text', 'value'=>$content_description_3);
						echo form_input($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_4">Detail </label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_4', 'name'=>'content_description_4', 'placeholder'=>'Latitude', 'value'=>$content_description_4);
						echo form_textarea($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_1_id">Main Indo</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_1_id', 'name'=>'content_description_1_id', 'placeholder'=>'text indo', 'value'=>$content_description_1_id);
						echo form_input($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_2_id">Titile Indo</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_2_id', 'name'=>'content_description_2_id', 'placeholder'=>'text', 'value'=>$content_description_2_id);
						echo form_textarea($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_3_id">Main Detail Indo</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_3_id', 'name'=>'content_description_3_id', 'placeholder'=>'text', 'value'=>$content_description_3_id);
						echo form_input($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_4_id">Detail Indo </label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_4_id', 'name'=>'content_description_4_id', 'placeholder'=>'Latitude', 'value'=>$content_description_4_id);
						echo form_textarea($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-2">
						<a href="<?php echo base_url('admin_controller/location'); ?>"><button class="btn btn-default" type="button">Cancel</button></a>
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




