<!-- Button trigger modal -->
<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class=" mb-3">
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
		Tambah Kategori
	</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="form-group col-lg-12">
						<label for="form-label">Nama Kategori</label>
						<input type="text" class="form-control" placeholder="Nama" name="nama_kategori" required>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="card">
	<div class="card-body">
		<h4 class="card-title">Data Kategori</h4>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Kategori Konten</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach ($kategori as $aa) { ?>
					<tr>
                        <td><?= $no; ?></td>
						<td><?= $aa['nama_kategori'] ?></td>
						<td>
							<a href="<?php echo site_url('admin/kategori/delete_data/'.$aa['id_kategori']);?>"
								class="btn btn-sm btn-danger"
								onClick="return confirm('Apakah anda yakin menghapus data ini?')"><span
									class="mdi mdi-delete "></span></a>
							<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
								data-target="#edit<?= $aa['id_kategori'] ?>">
								<span class=" mdi mdi-tooltip-edit"></span>
							</button>
							<div class="modal fade" id="edit<?= $aa['id_kategori'] ?>" tabindex="-1" role="dialog"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<form action="<?= base_url('admin/kategori/update') ?>" method="post">
										<input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Perbarui Kategori</h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="form-group col-lg-12">
												<label for="form-label">Nama Kategori Konten</label>
												<input type="text" class="form-control" value="<?= $aa['nama_kategori'] ?>" name="nama_kategori">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Simpan</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</td>
					</tr>
					<?php $no++; } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
