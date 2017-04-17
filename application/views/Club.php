<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css">


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<nav class="navbar navbar-default" role="navigation">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								
									<a class="navbar-brand" href="#">UTS</a>
								</div>
						
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex1-collapse">
									<ul class="nav navbar-nav">
										<li class="active"><a href="<?php echo site_url() ?>">Data Club</a></li>
										<li><a href="<?php echo site_url('pemain/All') ?>">DATA PEMAIN</a></li>
									</ul>
									
										</li>
									</ul>
								</div><!-- /.navbar-collapse -->
						</div>
						</nav>

					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h2>DAFTAR CLUB <a href="<?php echo site_url()?>/Club/addData" class="btn btn-warning"><span class="glyphicon glyphicon-plus"></span><br> TAMBAH CLUB</a> </h2>	
						<div class="table-responsive">
							<table class="table table-hover" id="example">
								<thead>
									<tr>
										<th>LOGO</th>
										<th>NAMA</th>
										<th>ACTION</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data_pegawai as $key){ ?>
									<tr>
										<td width="10%" align="center"><img class="img img-responsive" src="<?php echo base_url('') ?>assets/uploads/<?php echo $key['logo']; ?>?>"></td>
										<td><?php echo $key['nama']; ?></td>
										<td>
										<a href="<?php echo site_url()?>/pemain/index/<?php echo $key['id'] ?>" class="btn btn-success">DataPemain</a>
										<a href="<?php echo site_url()?>/club/edit/<?php echo $key['id'] ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Edit</a>
										<a href="<?php echo site_url()?>/club/deleteValidation/<?php echo $key['id'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
										</td>
									</tr>
								<?php }?>
								</tbody>
							</table>
						
						</div>
					</div>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url('') ?>assets/datatables.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script type="text/javascript">
 		$(document).ready(function(){
 			$('#example').DataTable();}
 			)</script>
	</body>
</html>