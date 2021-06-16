<div class="container">
		<div class="card">
			<div class="card-header">Edit Mahasiswa</div>
			<div class="card-body">
			<?php 
			if(validation_errors() != false)
			{
				?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
				<?php
			}
			?>
			<form method="post" action="<?php echo base_url(); ?>mahasiswa/update">
				<input type="hidden" name="id" id="id" value="<?php echo $mahasiswa->id; ?>"/>
				
				<div class="form-group">
					<label for="nrp">NRP</label>
					<input type="text" value="<?php echo $mahasiswa->nrp; ?>" class="form-control" id="nrp" name="nrp">
				</div>

                <div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" value="<?php echo $mahasiswa->nama; ?>" class="form-control" id="nama" name="nama">
				</div>

				<button type="submit" class="btn btn-primary">Update</button>
			</form>
			</div>
		</div>
	</div>