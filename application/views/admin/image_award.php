<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Award Image
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="<?php echo base_url('admin_controller/award') ?>"><i class="fa fa-dashboard"></i> Award</a></li>
        <li class="active">Award Slide</li>
      </ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="box">
			<div class="box-header">
              <h3 class="box-title">Images</h3>
              <!--
			  <a href="<?php //echo base_url('admin_controller/add_image/award/'.$id); ?>" class="btn btn-primary btn-xs pull-right" data-toggle="tooltip" title="Add"><i class="fa fa-plus"></i></a>
			  -->
            </div>
			
			<div class="box-body">
				<table class="table table-bordered table-striped">
				<thead>
					<tr>
					<td>#</td><td></td><td></td>
					</tr>
				</thead>
				
				<tbody>
					<?php
					$j = 1;
					foreach($img as $i => $im){
						?>
						<tr>
							<td><?php echo $j; ?></td>
							<td><img src="<?php echo base_url('assets/images/upload/'.$im->images_name); ?>" style="width: auto; height: 100px;"></td>
							<td>
								<div class="pull-right">
								<a href="<?php echo base_url('admin_controller/edit_image/award/'.$im->id.'/'.$im->id_table) ?>" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Edit image"><i class="fa fa-edit"></i></a>
								<!--
								<a href="<?php //echo base_url('admin_controller/delete_image_award/'.$im->id.'/'.$im->id_table) ?>" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete image" onclick="konfirmasihapus(event)">
									<i class="fa fa-trash"></i>
								</a>
								-->
								</div>
							</td>
						</tr>
						<?php
						$j++;
					}
					?>
				</tbody>
				</table>
			</div>
		</div>
	</div>
<?php
//echo $_SERVER['DOCUMENT_ROOT'].'/Arthotel/assets/images/upload/'."<br>";
//print_r($img);
?>
</section>