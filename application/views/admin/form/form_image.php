<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Add Images
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="<?php echo base_url('admin_controller/image_'.$kembali.'/'.$id_content) ?>"><i class="fa fa-dashboard"></i> <?php echo $kembali; ?></a></li>
        <!-- <li><a href="#">Tables</a></li> -->
        <li class="active">Add Image</li>
      </ol>
</section>

<!-- Main content -->
<section class="content">
	<?php
	if(isset($image)){
		$img = $image->images_name;
	}else{
		$img = "";
	}
	
	$target = "";
    $attributes = array('class' => 'form-horizontal', 'id' => '');
    echo form_open_multipart($target, $attributes);
	?>
	
	<!-- image -->
    <div class="form-group">
		<label class="col-sm-2 control-label" for="home_image">Image</label>
		<div class="col-sm-10">
			<div id="image_preview" style="width: auto; height: 152px; border: none;">
				<img id='output' src="<?php echo base_url('assets/images/upload/'.$img); ?>" class="form-control input-sm" style="width: auto; height: 150px;"/>
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
    <!-- end image -->
	
	<div class="form-group">
        <div class="col-sm-2">
			<a href="<?php echo base_url('admin_controller/image_'.$kembali.'/'.$id_content); ?>"><button class="btn btn-default" type="button">Cancel</button></a>
		</div>
        <div class="col-sm-10">
            <?php
            $data = array('class' =>'btn btn-info pull-right', 'id'=>'', 'name'=>'insertdata', 'value'=>'Submit');
            echo form_submit($data);
            ?>
        </div>
    </div>
	</form>
	<?php
	echo $error_post;
	?>
</section>
<!-- /.content -->