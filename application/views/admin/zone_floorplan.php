<!-- Main content -->
<section class="content-header">
	<h1>
		Zone Floorplan
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="<?php echo base_url('admin_controller/floorplan'); ?>"><i class="fa fa-dashboard"></i> Floorplan</a></li>     
        <li class="active">Zone Floorplan</li>
    </ol>
</section>

<section class="content">	
<div class="row">
    <!-- Your Page Content Here -->
    <div class="box">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Zone Floorplan</h3>
                <div class="box-tools pull-right">
                	<!--
					<a href="<?php //echo base_url('admin_controller/add_zone_floorplan/'.$pid); ?>" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Add">
						<i class="fa fa-plus"></i>
					</a> -->
                </div>
            </div>

            <div class="box-body"> 
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>#</th> <th>Title</th> <th>Main</th> <th>Detail</th> <th>Titile indo</th> <th>Main Indo</th> <th>Detail Indo</th> <th>Image</th> <th>Created</th> <th>Updated</th> <th>By</th> <th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php
						if (count($zone_floorplan) > 0) {
							$j = 1;
							foreach($zone_floorplan as $i => $rw){
							?>
								<tr>
									<td><?php echo $j; ?></td>
									<td><?php echo $rw->content_description_1; ?></td>
									<td><?php echo $rw->content_description_2; ?></td>
									<td><?php echo $rw->content_description_3; ?></td>
									<td><?php echo $rw->content_description_1_id; ?></td>
									<td><?php echo $rw->content_description_2_id; ?></td>
									<td><?php echo $rw->content_description_3_id; ?></td>
									<td>
										<div style="background-color: #ddd;">
											<img src="<?php echo base_url('assets/images/upload/'.$rw->images_name); ?>" style="width: auto; height: 100px;">
										</div>
									</td>
									<td><?php echo $rw->created; ?></td>
									<td><?php echo $rw->updated; ?></td>
									<td><?php echo $rw->cu_by; ?></td>									
									<td>
										<div class="pull-right">
										<a href="<?php echo base_url('admin_controller/edit_zone_floorplan/'.$rw->id.'/'.$rw->id_image.'/'.$pid) ?>" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>

										<a href="<?php echo base_url('admin_controller/image_floorplan/'.$rw->id.'/'.$pid) ?>" class="btn btn-primary btn-xs" data-toggle="tooltip" title="slide floorplan"><i class="fa  fa-file-photo-o"></i></a>
										</div>
									</td>
								</tr>
							<?php
								$j++;
							}
						}
						?>
					</tbody>
				</table>
            </div> <!--end div body-->
        </div> <!--end box devault-->
    </div>
	<?php
	//print_r($home);
	?>
</div>
</section><!-- /.content -->