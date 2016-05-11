<!-- Main content -->
<section class="content-header">
	<h1>
		About Us
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> About Us</a></li>
        <li class="active">About Us</li>
    </ol>
</section>

<section class="content">	
<div class="row">
    <!-- Your Page Content Here -->
    <div class="box">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">About Us</h3>
            </div>

            <div class="box-body"> 
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>#</th> <th>Main</th> <th>Sub Main</th> <th>Content</th> <th>Created / Updated</th> <th>By</th> <th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php
						if (count($about) > 0) {
							$j = 1;
							foreach($about as $i => $rw){
							?>
								<tr>
									<td rowspan="2"><?php echo $j; ?></td>
									<td><?php echo $rw->content_description_1; ?></td>
									<td><?php echo $rw->content_description_2; ?></td>
									<td><?php echo $rw->content_description_3; ?></td>
									<td><?php echo $rw->created; ?></td>
									
									<td rowspan="2"><?php echo $rw->cu_by; ?></td>
									<td rowspan="2">
										<div class="pull-right">
										<a href="<?php echo base_url('admin_controller/edit_about/'.$rw->id) ?>" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>

										<a href="<?php echo base_url('admin_controller/image_about/'.$rw->id) ?>" class="btn btn-primary btn-xs" data-toggle="tooltip" title="View image"><i class="fa  fa-file-photo-o"></i></a>

										<a href="<?php echo base_url('admin_controller/bod/'.$rw->id) ?>" class="btn btn-primary btn-xs" data-toggle="tooltip" title="board of directors"><i class="fa fa-users"></i></a>
										</div>
									</td>
								</tr>

								<tr>
									<td><?php echo $rw->content_description_1_id; ?></td>
									<td><?php echo $rw->content_description_2_id; ?></td>
									<td><?php echo $rw->content_description_3_id; ?></td>
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
	//print_r($home);
	?>
</div>
</section><!-- /.content -->