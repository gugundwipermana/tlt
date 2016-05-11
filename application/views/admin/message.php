<!-- Main content -->
<section class="content-header">
	<h1>
		Messages
    </h1>
    <ol class="breadcrumb">
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Message</a></li>     
        <!-- <li class="active">Teams</li> -->
    </ol>
</section>

<section class="content">	
<div class="row">
    <!-- Your Page Content Here -->
    <div class="box">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Messages</h3>
                <div class="box-tools pull-right">
                </div>
            </div>

            <div class="box-body"> 
				<table id="cumaini" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>#</th> <th>Name</th> <th>Email</th> <th>Phone</th> <th>Message</th> <th>Date</th> <th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php
						if (count($message) > 0) {
							$j = 1;
							foreach($message as $i => $rw){
							?>
								<tr>
									<td><?php echo $j; ?></td>
									<td><?php echo $rw->name; ?></td>
									<td><?php echo $rw->email; ?></td>
									
									<td><?php echo $rw->phone; ?></td>
									<td><?php echo $rw->message; ?></td>
									<td><?php echo $rw->send_date; ?></td>
									<td>
										<div class="pull-right">
										<a href="<?php echo base_url('admin_controller/delete_messages/'.$rw->id); ?>" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete" onclick="konfirmasihapus(event)"><i class="fa fa-trash"></i></a>
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
	//print_r($bod);
	?>
</div>
</section><!-- /.content -->