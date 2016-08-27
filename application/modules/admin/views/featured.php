<html>
<head>
	<title> Products/Services  | DasVision</title>
</head>
<body>

	<?php $this->load->helper('file');?>


	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				All boats

			</h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('/admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active"><a href="<?php echo base_url('/admin/featured');?>">Featured</a></li>
			</ol>
		</section>
		<section class="content">
			<?php if($data['rowcount']==0)
			echo"<h3>There Are no boats at the moment.</h3>";
			else
				{?>
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Featured Boats</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<table id="featured" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th data-field="id">Pno.</th>
										<th data-field="name">Product Name</th>
										<th data-field="price">Start Date</th>
										<th data-field="edit">Featured</th>
									</tr>
								</thead>
								<tbody>
									<form action="<?php echo base_url('admin/feat');?>" method="post">
										<?php for($i=0;$i<$data['rowcount'];$i++){?>
										<tr>
											<td><?php echo $data[$i]['p_no'];?></td>
											<td><?php echo $data[$i]['boat_name'];?></td>
											<td><?php echo $data[$i]['s_date'];?></td>
											<td> 
												<p>
													<input onclick="submit();"type="checkbox" value = "<?php echo $data[$i]['p_no'];?>" id="cb<?php echo $data[$i]['p_no'];?>" name="cb<?php echo $data[$i]['p_no'];?>" <?php if($data[$i]['feat']==1) echo "checked";?>/>
													<label for="cb<?php echo $data[$i]['p_no'];?>"></label>

												</p>

											</td>	
											<?php }}?></tr>


									</form>
								</tbody>
									<tfoot>
									<tr>
										<th data-field="id">Pno.</th>
										<th data-field="name">Product Name</th>
										<th data-field="price">Start Date</th>
										<th data-field="edit">Featured</th>
									</tr>
								</tfoot>
							</table>
									
									
						</div>
					</div>
				</div>
			</div>

		</section>
	</div>

