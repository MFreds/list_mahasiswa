<main role="main" class="container">
		<div class="card">
			<div class="card-header">Data Mahasiswa</div>
			<div class="card-body">
				<a href="<?php echo base_url(); ?>mahasiswa/create" class="btn btn-success">Create</a>
				<br/>
				<br/>
				<table class="table table-bordered">
					<tr>
						<th width="5%">No</th>
						<th>NRP</th>
						<th>Nama</th>
						<th>Aksi</th>
					</tr>
					<?php 
					$no = 1;
					foreach($mahasiswa as $row)
					{
						?>
						<tr>
							<td widtd="5%"><?php echo $no++; ?></td>
							<td><?php echo $row->nrp; ?></td>
							<td><?php echo $row->nama; ?></td>
							<td>
							<a href="<?php echo base_url(); ?>mahasiswa/edit/<?php echo $row->id; ?>" class="btn btn-warning">Edit</a>
							<a href="<?php echo base_url(); ?>mahasiswa/delete/<?php echo $row->id; ?>" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<?php
					}
					?>
				</table>
			</div>
		</div>
</main>