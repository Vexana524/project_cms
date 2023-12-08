<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class=" mb-3 mt-3">
	<div class="card">
		<form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype='multipart/form-data'>
			<h5 class="card-header">File input</h5>
			<div class="card-body">
				<div class="form-group col-lg-12">
					<label for="form-label">Judul</label>
					<input type="text" class="form-control" placeholder="Judul foto" name="judul" required />
				</div>
				<div class="mb-3">
					<label for="formFile" class="form-label">Pilih foto dengan ukuran(1:3)</label>
					<input class="form-control" type="file" name="foto">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</div>
</div>
<div class="row">
		<?php foreach ($caraousel as $aa){ ?>
<div class="card col-md-4 mb-3 mt-3 mr-3">
	<img src="<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>" class="card-img-top mt-4">
	<div class="card-body">
		<h5 class="card-title"><?=$aa['judul'] ?></h5>
		<a href="<?= site_url('admin/caraousel/delete_data/'.$aa['foto']);?>" class="btn btn-sm btn-danger"
			onClick="return confirm('Apakah anda yakin menghapus data ini?')"><span class="mdi mdi-delete "></span>
		</a>
	</div>
</div>
<?php } ?>
</div>

