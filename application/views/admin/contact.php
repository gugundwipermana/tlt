<!-- Main content -->
<section class="content-header">
	<h1>
		Contact
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Contact</a></li>
        <!-- <li class="active">About Us</li> -->
    </ol>
</section>

<section class="content">	
<div class="row">
    <!-- Your Page Content Here -->
    <div class="box">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Contact</h3>
                <?php
                if (count($contact) < 2) {
                	?>
                	<a href="<?php echo base_url('admin_controller/add_contact'); ?>" class="btn btn-primary btn-xs pull-right" data-toggle="tooltip" title="Add"><i class="fa fa-plus"></i></a>
                	<?php
                }
                ?>
            </div>

            <div class="box-body"> 
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>#</th> <th>Title</th> <th>Name</th> <th>Address</th> <th>Phone</th> <th>E-mail</th> <!--<th>Image</th>--> <th>Created / Updated</th> <th>By</th> <th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php
						if (count($contact) > 0) {
							$j = 1;
							foreach($contact as $i => $rw){
							?>
								<tr>
									<td rowspan="2"><?php echo $j; ?></td>
									<td><?php echo $rw->content_description_1; ?></td>
									<td><?php echo $rw->content_description_2; ?></td>
									<td><?php echo $rw->content_description_3; ?></td>
									<td><?php echo $rw->content_description_4; ?></td>
									<td><?php echo $rw->content_description_5; ?></td>
									<td><img src="<?php echo base_url('assets/images/upload/'.$rw->images_name); ?>" style="width: auto; height: 100px;"></td>
									<td><?php echo $rw->created; ?></td>
									
									<td rowspan="2"><?php echo $rw->cu_by; ?></td>
									<td rowspan="2">
										<div class="pull-right">
										<a href="<?php echo base_url('admin_controller/edit_contact/'.$rw->id.'/'.$rw->id_image) ?>" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>

										<a href="<?php echo base_url('admin_controller/background_contact') ?>" class="btn btn-primary btn-xs" data-toggle="tooltip" title="View background image"><i class="fa  fa-file-photo-o"></i></a>

										<a href="<?php echo base_url('admin_controller/delete_contact/'.$rw->id) ?>" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete" onclick="konfirmasihapus(event)">
											<i class="fa fa-trash"></i>
										</a>
										</div>
									</td>
								</tr>

								<tr>
									<td><?php echo $rw->content_description_1_id; ?></td>
									<td><?php echo $rw->content_description_2_id; ?></td>
									<td><?php echo $rw->content_description_3_id; ?></td>
									<td><?php echo $rw->content_description_4_id; ?></td>
									<td><?php echo $rw->content_description_5_id; ?></td>
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