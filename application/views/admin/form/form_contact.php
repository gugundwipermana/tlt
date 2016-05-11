<!-- Main content -->
<section class="content-header">
	<h1>
		Contact
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="<?php echo base_url('admin_controller/contact'); ?>"><i class="fa fa-dashboard"></i> Contact</a></li>
    </ol>
</section>

<section class="content">	
<div class="row">
    <!-- Your Page Content Here -->
    <div class="box">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Home</h3>
            </div>

            <div class="box-body"> 
				<?php
				if (isset($contact)){
					$content_description_1 = $contact->content_description_1;
					$content_description_2 = $contact->content_description_2;
					$content_description_3 = $contact->content_description_3;
					$content_description_4 = $contact->content_description_4;
					$content_description_5 = $contact->content_description_5;

					$content_description_1_id = $contact->content_description_1_id;
					$content_description_2_id = $contact->content_description_2_id;
					$content_description_3_id = $contact->content_description_3_id;
					$content_description_4_id = $contact->content_description_4_id;
					$content_description_5_id = $contact->content_description_5_id;
					$img = $contact->images_name;
				}else{
					$content_description_1 = "";
					$content_description_2 = "";
					$content_description_3 = "";
					$content_description_4 = "";
					$content_description_5 = "";
					$content_description_1_id = "";
					$content_description_2_id = "";
					$content_description_3_id = "";
					$content_description_4_id = "";
					$content_description_5_id = "";
					$img = "";
				}
				
				$target = "";
				$attributes = array('class' => 'form-horizontal', 'id' => 'form_hoe');
				echo form_open_multipart($target, $attributes);
				?>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_1">Title *</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_1', 'name'=>'content_description_1', 'placeholder'=>'text', 'value'=>$content_description_1);
						echo form_input($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_2">Name</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_2', 'name'=>'content_description_2', 'placeholder'=>'text', 'value'=>$content_description_2);
						echo form_input($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_3">Address</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_3', 'name'=>'content_description_3', 'placeholder'=>'text', 'value'=>$content_description_3);
						echo form_input($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_4">Phone</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_4', 'name'=>'content_description_4', 'placeholder'=>'text', 'value'=>$content_description_4);
						echo form_input($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_5">E-mail</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_5', 'name'=>'content_description_5', 'placeholder'=>'text', 'value'=>$content_description_5);
						echo form_input($data);
						?>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_1_id">Title Indo</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_1_id', 'name'=>'content_description_1_id', 'placeholder'=>'text indo', 'value'=>$content_description_1_id);
						echo form_input($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_2_id">Name Indo</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_2_id', 'name'=>'content_description_2_id', 'placeholder'=>'text indo', 'value'=>$content_description_2_id);
						echo form_input($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_3_id">Address Indo</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_3_id', 'name'=>'content_description_3_id', 'placeholder'=>'text indo', 'value'=>$content_description_3_id);
						echo form_input($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_4_id">Phone Indo</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_4_id', 'name'=>'content_description_4_id', 'placeholder'=>'text indo', 'value'=>$content_description_4_id);
						echo form_input($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_4_id">E-mail Indo</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_5_id', 'name'=>'content_description_5_id', 'placeholder'=>'text indo', 'value'=>$content_description_5_id);
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
                        <div>Image require < 800KB, 300 X 200 Pixel</div>
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
						<a href="<?php echo base_url('admin_controller/contact'); ?>"><button class="btn btn-default" type="button">Cancel</button></a>
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




