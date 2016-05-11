<!-- Main content -->
<section class="content-header">
	<h1>
		Users
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Users</a></li>     
        <li class="active">Users</li>
    </ol>
</section>

<section class="content">	
<div class="row">
    <!-- Your Page Content Here -->
    <div class="box">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Users</h3>
                <div class="box-tools pull-right">
					<a href="<?php echo base_url('admin_controller/add_users'); ?>" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Add">
						<i class="fa fa-plus"></i>
					</a>
                </div>
            </div>

            <div class="box-body"> 
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<td>#</td> <td>Name</td> <td>Username</td> <td>Last login</td> <td>Created</td> <td>Updated</td> <td>By</td> <td></td>
						</tr>
					</thead>
					
					<tbody>
						<?php
						if (count($users) > 0) {
							$j = 1;
							foreach($users as $i => $rw){
							?>
								<tr>
									<td><?php echo $j; ?></td>
									<td><?php echo $rw->name; ?></td>
									<td><?php echo $rw->user_name; ?></td>
									<td><?php echo $rw->last_login; ?></td>
									<td><?php echo $rw->created; ?></td>
									<td><?php echo $rw->updated; ?></td>
									<td><?php echo $rw->cu_by; ?></td>									
									<td>
										<div class="pull-right">
										<a href="<?php echo base_url('admin_controller/edit_users/'.$rw->id) ?>" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
										<a href="<?php echo base_url('admin_controller/delete_users/'.$rw->id) ?>" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete" onclick="konfirmasihapus(event)"><i class="fa fa-trash"></i></a>
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
	//print_r($list);
	?>
</div>
</section><!-- /.content -->