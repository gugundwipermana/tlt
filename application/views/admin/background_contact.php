<!-- Main content -->
<section class="content-header">
	<h1>
		Image Contact
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="<?php echo base_url('admin_controller/contact'); ?>"><i class="fa fa-dashboard"></i> Contact</a></li>
        <li class="active"> Image Contact</a></li>
        <!-- <li class="active">Home</li> -->
    </ol>
</section>

<section class="content">	
<div class="row">
    <!-- Your Page Content Here -->
    <div class="box">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Backgroun Contact</h3>
                <div class="box-tools pull-right">
					<a href="<?php echo base_url('admin_controller/add_background_contact'); ?>" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Add">
						<i class="fa fa-plus"></i>
					</a>
                </div>
            </div>

            <div class="box-body"> 
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>#</th> <th>Image</th> <th>Created</th> <th>Updated</th> <th>By</th> <th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php						
						if (count($background_contact) > 0) {
							$j = 1;
							foreach($background_contact as $i => $rw){
							?>
								<tr>
									<td><?php echo $j; ?></td>
								
									<td><img src="<?php echo base_url('assets/images/upload/'.$rw->images_name); ?>" style="width: auto; height: 100px;"></td>
									<td><?php echo $rw->created; ?></td>
									<td><?php echo $rw->updated; ?></td>
									<td><?php echo $rw->cu_by; ?></td>									
									<td>
										<div class="pull-right">
										<a href="<?php echo base_url('admin_controller/edit_background_contact/'.$rw->id.'/'.$rw->id_image); ?>" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
										<a href="<?php echo base_url('admin_controller/delete_background_contact/'.$rw->id); ?>" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete" onclick="konfirmasihapus(event)"><i class="fa fa-trash"></i></a>
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