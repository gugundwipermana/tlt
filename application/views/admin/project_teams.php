<!-- Main content -->
<section class="content-header">
	<h1>
		Project Teams
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Project Teams</a></li>     
        <!-- <li class="active">Building Specification</li> -->
    </ol>
</section>

<section class="content">	
<div class="row">
    <!-- Your Page Content Here -->
    <div class="box">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Project Teams</h3>
            </div>

            <div class="box-body"> 
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>#</th> <th>Titile</th> <th>Detail</th> <th>Created / Updated</th> <th>By</th> <th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php
						if (count($project_teams) > 0) {
							$j = 1;
							foreach($project_teams as $i => $rw){
							?>
								<tr>
									<td rowspan="2"><?php echo $j; ?></td>
									<td><?php echo $rw->content_description_1; ?></td>
									<td><?php echo $rw->content_description_1_id; ?></td>
									
									<td><?php echo $rw->created; ?></td>
									<td rowspan="2"><?php echo $rw->cu_by; ?></td>									
									<td rowspan="2">
										<div class="pull-right">
										<a href="<?php echo base_url('admin_controller/edit_project_team/'.$rw->id); ?>" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>

										<a href="<?php echo base_url('admin_controller/team/'.$rw->id); ?>" class="btn btn-warning btn-xs" data-toggle="tooltip" title="view project"><i class="fa fa-users"></i></a>
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