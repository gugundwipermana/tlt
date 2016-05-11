<!-- Main content -->
<section class="content-header">
	<h1>
		Awards
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="<?php echo base_url('admin_controller/award') ?>"><i class="fa fa-dashboard"></i> Award & Cerification</a></li>     
        <li class="active">Award</li>
    </ol>
</section>

<section class="content">	
<div class="row">
    <!-- Your Page Content Here -->
    <div class="box">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Awards</h3>
                <div class="box-tools pull-right">
					<a href="<?php echo base_url('admin_controller/add_awards/'.$pid); ?>" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Add">
						<i class="fa fa-plus"></i>
					</a>
                </div>
            </div>

            <div class="box-body"> 
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>#</th> <th>Titile</th> <th>Detail</th> <th>Image</th> <th>Created / Updated / By</th> <th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php
						if (count($awards) > 0) {
							$j = 1;
							foreach($awards as $i => $rw){
							?>
								<tr>
									<td rowspan="2"><?php echo $j; ?></td>
									<td><?php echo $rw->content_description_1; ?></td>
									<td><?php echo $rw->content_description_1_id; ?></td>
									<td rowspan="2"><img src="<?php echo base_url('assets/images/upload/'.$rw->images_name); ?>" style="width: auto; height: 100px;"></td>
									<td><?php echo $rw->created; ?></td>
									<td rowspan="2"><?php echo $rw->cu_by; ?></td>									
									<td rowspan="2">
										<div class="pull-right">
										<a href="<?php echo base_url('admin_controller/edit_awards/'.$rw->id.'/'.$rw->id_image.'/'.$pid) ?>" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
										<a href="<?php echo base_url('admin_controller/delete_awards/'.$rw->id.'/'.$pid) ?>" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete" onclick="konfirmasihapus(event)"><i class="fa fa-trash"></i></a>
										</div>
									</td>
								</tr>

								<tr>
									<td><?php echo $rw->content_description_2; ?></td>
									<td><?php echo $rw->content_description_2_id; ?></td>
									<td><?php echo $rw->updated; ?></td>
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
	//print_r($bod);
	?>
</div>
</section><!-- /.content -->