<!-- Main content -->
<section class="content-header">
	<h1>
		Detail News & Events
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="<?php echo base_url('admin_controller/newsevents')?>"><i class="fa fa-dashboard"></i> News & Events</a></li>     
        <li class="active">Detail News & Events</li>
    </ol>
</section>

<section class="content">	
<div class="row">
    <!-- Your Page Content Here -->
    <div class="box">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Detail News & Events</h3>
                <div class="box-tools pull-right">
                	<?php
                	if (count($newsevent) > 0) {
                	?>                		
                	<a href="<?php echo base_url('admin_controller/add_image/detail_newsevents/'.$newsevent[0]->id); ?>" class="btn btn-primary btn-xs pull-right" data-toggle="tooltip" title="Add"><i class="fa fa-plus"></i></a>
                	<?php
                	}
                	?>
                </div>
            </div>

            <div class="box-body"> 
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>#</th> <th>Title</th> <th>Subtitle</th> <th>Detail</th> <th>Created / Updated</th> <th>By</th> <th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php
						if (count($detail_newsevents) > 0) {
							$j = 1;
							foreach($detail_newsevents as $i => $rw){
							?>
								<tr>
									<td rowspan="2"><?php echo $j; ?></td>
									<!--
									<td><?php //echo $rw->content_description_1; ?></td>
									<td><?php //echo $rw->content_description_2; ?></td>
									<td><?php //echo $rw->content_description_3; ?></td>
									-->
									<td rowspan="2"><img src="<?php echo base_url('assets/images/upload/'.$rw->images_name); ?>" style="width: auto; height: 100px;"></td>
									<td>
									<td><?php echo $rw->created; ?></td>
									<td rowspan="2"><?php echo $rw->cu_by; ?></td>
									<td rowspan="2">
										<div class="pull-right">
										<a href="<?php echo base_url('admin_controller/edit_image/detail_newsevents/'.$rw->id_image.'/'.$rw->id); ?>" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>

										<a href="<?php echo base_url('admin_controller/delete_detail_newsevents/'.$rw->id_image.'/'.$rw->content_parent) ?>" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete" onclick="konfirmasihapus(event)"><i class="fa fa-trash"></i></a>
										
										<!--
										<a href="<?php //echo base_url('admin_controller/image_detail_newsevents/'.$rw->id); ?>" class="btn btn-primary btn-xs" data-toggle="tooltip" title="view image"><i class="fa fa-file-photo-o"></i></a>
										-->
										</div>
									</td>
								</tr>

								<tr>
									<!--
									<td><?php //echo $rw->content_description_1_id; ?></td>
									<td><?php //echo $rw->content_description_2_id; ?></td>
									<td><?php //echo $rw->content_description_3_id; ?></td>
									-->
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