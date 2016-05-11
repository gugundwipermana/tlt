<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Floorplan Images
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="<?php echo base_url('admin_controller/floorplan') ?>"><i class="fa fa-dashboard"></i> Floorplan</a></li>
        <li class="active"><a href="<?php echo base_url('admin_controller/zone_floorplan/'.$mid) ?>"><i class="fa fa-dashboard"></i> Zone Floorplan</a></li>
        <li class="active">Floorplan Images</li>
      </ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="box">
			<div class="box-header">
              <h3 class="box-title">Floorplan Images</h3>
			  <a href="<?php echo base_url('admin_controller/add_image_floorplan/'.$pid.'/'.$mid); ?>" class="btn btn-primary btn-xs pull-right" data-toggle="tooltip" title="Add"><i class="fa fa-plus"></i></a>
            </div>
			
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>#</th> <th>Detail</th> <th>Image</th> <th>Created / Updated</th> <th>By</th> <th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php
						if (count($floorplan_image) > 0) {
							$j = 1;
							foreach($floorplan_image as $i => $rw){
							?>
								<tr>
									<td rowspan="2"><?php echo $j; ?></td>
									<td><?php echo $rw->content_description_1; ?></td>
									
									<td rowspan="2">
										<div style="background-color: #ddd;">
											<img src="<?php echo base_url('assets/images/upload/'.$rw->images_name); ?>" style="width: auto; height: 100px;">
										</div>
									</td>
									<td><?php echo $rw->created; ?></td>
									<td rowspan="2"><?php echo $rw->cu_by; ?></td>
									<td rowspan="2">
										<div class="pull-right">
										<a href="<?php echo base_url('admin_controller/edit_image_floorplan/'.$rw->id.'/'.$rw->id_image.'/'.$pid.'/'.$mid) ?>" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
										
										<a href="<?php echo base_url('admin_controller/delete_image_floorplan/'.$rw->id.'/'.$pid.'/'.$mid) ?>" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete" onclick="konfirmasihapus(event)"><i class="fa fa-trash"></i></a>
										</div>
									</td>
								</tr>

								<tr>
									<td><?php echo $rw->content_description_1_id; ?></td>
									<td><?php echo $rw->updated; ?></td>
								</tr>
							<?php
								$j++;
							}
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