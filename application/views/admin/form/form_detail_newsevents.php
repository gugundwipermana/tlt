<!-- Main content -->
<section class="content-header">
	<h1>
		Detail News & Events
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="<?php echo base_url('admin_controller/detail_newsevents/'.$pid); ?>"><i class="fa fa-dashboard"></i> Detail News & Events</a></li>     
    </ol>
</section>

<section class="content">	
<div class="row">
    <!-- Your Page Content Here -->
    <div class="box">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Detail News & Events</h3>
            </div>

            <div class="box-body"> 
				<?php
				if (isset($detail_newsevents)){
					$content_description_1 = $detail_newsevents->content_description_1;
					$content_description_2 = $detail_newsevents->content_description_2;
					$content_description_3 = $detail_newsevents->content_description_3;
					$content_description_1_id = $detail_newsevents->content_description_1_id;
					$content_description_2_id = $detail_newsevents->content_description_2_id;
					$content_description_3_id = $detail_newsevents->content_description_3_id;
				}else{
					$content_description_1 = "";
					$content_description_2 = "";
					$content_description_3 = "";
					$content_description_1_id = "";
					$content_description_2_id = "";
					$content_description_3_id = "";
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
					<label class="col-sm-2 control-label" for="content_description_1">Subitle </label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_2', 'name'=>'content_description_2', 'placeholder'=>'text', 'value'=>$content_description_2);
						echo form_textarea($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_3">Detail </label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_3', 'name'=>'content_description_3', 'placeholder'=>'text', 'value'=>$content_description_3);
						echo form_textarea($data);
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
					<label class="col-sm-2 control-label" for="content_description_2_id">Subtitle Indo</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_2_id', 'name'=>'content_description_2_id', 'placeholder'=>'text indo', 'value'=>$content_description_2_id);
						echo form_textarea($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="content_description_3_id">Detail Indo</label>
					<div class="col-sm-10">			
						<?php						
						$data = array('class'=>'form-control input-sm', 'id'=>'content_description_3_id', 'name'=>'content_description_3_id', 'placeholder'=>'text indo', 'value'=>$content_description_3_id);
						echo form_textarea($data);
						?>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-2">
						<a href="<?php echo base_url('admin_controller/detail_newsevents/'.$pid); ?>"><button class="btn btn-default" type="button">Cancel</button></a>
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




