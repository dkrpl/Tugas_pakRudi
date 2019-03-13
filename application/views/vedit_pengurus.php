<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $judul; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css">
</head>
<body>
	<center>
		<br><br><br><br><br><br><br><br><br>
	<h2><?php echo $isi; ?></h2>
	<div class="container">
	<?php echo form_open('pengurus/edit_submit','class="form-horizontal"'); ?>
		<?php foreach($data->result_array() as $row)
			{ ?>
				<div class="form-group">
					<label class="control-label col-sm-2">ID</label>
					<div class="col-sm-10"><input class="form-control" type="number" name="id" value="<?php echo $row['id']; ?>" readonly="yes">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Nama</label>
					<div class="col-sm-10"><?php echo form_input('nama', $row['nama'],'class="form-control"'); ?>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Alamat</label>
					<div class="col-sm-10"><?php echo form_input('alamat', $row['alamat'],'class="form-control"') ?>
				</div>
				</div>
				<div class="form-group">
						<label class="control-label col-sm-2">Gender</label>
					<div class="col-sm-5"><input type="radio" name="gender" value="Pria" <?php if (!(strcmp($row['gender'], "Pria"))) {echo "CHECKED";
					} ?>>Pria</div>
					<div class="col-sm-5"><input type="radio" name="gender" value="Wanita" <?php if (!(strcmp($row['gender'], "Wanita"))) {echo "CHECKED";
					} ?>>Wanita</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Gaji</label>
					<div class="col-sm-10"><?php echo form_input('gaji', $row['gaji'],'class="form-control"') ?>
					</div>
				</div>
					<?php echo form_submit('submit', 'Ubah','class="btn btn-primary"'); ?> <input class="btn btn-danger" type="button" value="Batal" onclick="self.history.back()">
			<?php } ?>
	</table>
	<?php echo form_close(); ?>
	</div>
</body>
</html>