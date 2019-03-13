<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view pengurus</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css">
</head>
<body>
	<center>
		<br><br><br><br><br><br><br><br><br>
<h2><?php echo $isi; ?></h2>
	<div class="container">
	<?php echo form_open('pengurus/addpengurus', 'class="form-horizontal"'); ?>
	<div class="form-group">
			<label class="control-label col-sm-2">ID</label>
		 	<div class="col-sm-10"><?php echo form_input('id', '', 'class="form-control"');?>
	</div>
			</div>
		<div class="form-group ">
			<label class="control-label col-sm-2">Nama</label>
			<div class="col-sm-10"><?php echo form_input('nama', '','class="form-control"'); ?>
		</div>
			</div>
		<div class="form-group">
			<label class="control-label col-sm-2">Alamat</label>
			<div class="col-sm-10"><?php echo form_input('alamat','','class="form-control"'); ?>
		</div>
			</div>
		<div class="form-group">
			<label class="control-label col-sm-2">Gender</label>
			<div class="col-sm-5"><input type="radio" name=" gender" value="Pria">Pria
		</div>
			<div class="col-sm-5"><input type="radio" name=" gender" value="Wanita">Wanita
		</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2">Gaji</label>
			<div class="col-sm-10"><?php echo form_input('gaji','','class="form-control"'); ?>
		</div>
		</div>
			<?php echo form_submit('submit','Simpan','class="btn btn-primary"'); ?><input class="btn btn-danger" type="reset" value="Clear">
	<?php echo form_close() ?><a href="<?php echo site_url('login/logout') ?>" class="btn btn-warning">Logout</a>
	

	<hr>

	<table class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Gender</th>
			<th>Gaji</th>
			<th>Aksi</th>
		</tr>
		<?php
		foreach ($data as $row) { ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['alamat']; ?></td>
				<td><?php echo $row['gender']; ?></td>
				<td><?php echo $row['gaji']; ?></td>
				<td>
					<?php echo anchor('pengurus/editpengurus/'.$row['id'],'UBAH','class="btn btn-primary"'); ?>
					 | 
					 <?php echo anchor('pengurus/delete/'.$row['id'],'HAPUS', 'class="btn btn-danger"'); ?>
				</td>
			</tr>
		<?php } ?>
	</table>
	</div>
</center>
</body>
</html>