<!-- Main content -->
<section class="content-header">
	<h1>
		Menu
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Menu</a></li>     
        <li class="active">Menu</li>
    </ol>
</section>

<section class="content">	
<div class="row">
    <!-- Your Page Content Here -->
    <div class="box">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Menu</h3>
                <div class="box-tools pull-right">
					<!--
					<a href="<?php // echo base_url('admin_controller/add_menu'); ?>" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Add">
						<i class="fa fa-plus"></i>
					</a>
					-->
                </div>
            </div>

            <div class="box-body"> 
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<td>#</td> <td>Name</td> <td>Name Ind</td> <td>Created</td> <td>Updated</td> <td>By</td> <td></td>
						</tr>
					</thead>
					
					<tbody>
						<?php
						if (count($admin_menu) > 0) {
							$j = 1;
							foreach($admin_menu as $i => $rw){
							?>
								<tr>
									<td><?php echo $j; ?></td>
									<td><?php echo $rw->menu_name; ?></td>
									<td><?php echo $rw->menu_name_id; ?></td>
									<td><?php echo $rw->created; ?></td>
									<td><?php echo $rw->updated; ?></td>
									<td><?php echo $rw->cu_by; ?></td>									
									<td>
										<div class="pull-right">
										<a href="<?php echo base_url('admin_controller/edit_menu/'.$rw->id) ?>" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
										<!--
										<a href="<?php //echo base_url('admin_controller/delete/'.$rw->id) ?>" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete" onclick="konfirmasihapus(event)"><i class="fa fa-trash"></i></a>
										-->
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