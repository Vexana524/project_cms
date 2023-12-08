<!-- Button trigger modal -->
<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class=" mb-3">
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
		Tambah Konten
	</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Tambah Konten</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div> 
					<div class="form-group col-lg-12">
						<label for="form-label">Judul</label>
						<input type="text" class="form-control" placeholder="Judul" name="judul" required>
					</div>
					<div class="form-group col-lg-12">
						<label for="form-label">Kategori</label>
						<select name="id_kategori" class="form-control">
							<?php $no=1; foreach ($kategori as $aa) { ?>
							<option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group col-lg-12">
						<label for="form-label">Keterangan</label>
						<textarea name="keterangan" class="form-control"></textarea>
					</div>
					<div class="form-group col-lg-12">
						<label for="form-label">Foto</label>
						<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
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
						<th>Judul</th>
						<th>Kategori Konten</th>
						<th>Tanggal</th>
						<th>Kreator</th>
						<th>Foto</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $o=1; 
					foreach ($konten as $aa) { ?>
					<tr>
						<td><?= $o++ ?></td>
						<td><?= $aa['judul'] ?></td>
						<td><?= $aa['nama_kategori'] ?></td>
						<td><?= $aa['tanggal'] ?></td>
						<td><?= $aa['nama'] ?></td>
						<td>
							<a href="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>">
								<i class=" mdi mdi-account-search"></i>
								<span class="menu-title">Lihat Foto</span>
							</a>
						</td>
						<td>
							<a href="<?= site_url('admin/konten/delete_data/'.$aa['foto']);?>"
								class="btn btn-sm btn-danger"
								onClick="return confirm('Apakah anda yakin menghapus data ini?')"><span
									class="mdi mdi-delete "></span>
							</a>
							<a class="btn btn-sm btn-info" 
							data-toggle="modal" data-target="#konten<?= $o;?>">
							<span class="mdi mdi-tooltip-edit"></span>
							</a>

							<!-- Modal -->
							<div class="modal fade" id="konten<?= $o;?>" tabindex="-1" role="dialog"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
									<form action="<?= base_url('admin/konten/update') ?>" method="post"
										enctype='multipart/form-data'>
										<input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel"><?= $aa['judul'] ?></h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="form-group col-lg-12">
												<label for="form-label">Judul</label>
												<input type="text" class="form-control" value= "<?= $aa['judul'] ?>" name="judul" />
											</div>
											<div class="form-group col-lg-12">
												<label for="form-label">Kategori</label>
												<select name="id_kategori" class="form-control">
													<?php $no=1; foreach ($kategori as $uu) { ?>
													<option 
													<?php if($uu['id_kategori']==$aa['id_kategori']){echo"selected"; } ?>
													value="<?= $uu['id_kategori'] ?>">
														<?= $uu['nama_kategori'] ?></option>
													<?php } ?>
												</select>
											</div>
											<div class="form-group col-lg-12">
												<label for="form-label">Keterangan</label>
												<textarea name="keterangan" class="form-control"><?= $aa['keterangan'] ?></textarea>
											</div>
											<div class="form-group col-lg-12">
												<label for="form-label">Foto</label>
												<input type="file" name="foto" class="form-control" value="<?= $aa['foto'] ?>"
													accept="image/png, image/jpeg">
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
					<?php  }  ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
