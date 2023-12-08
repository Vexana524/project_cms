<!-- Button trigger modal -->
<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class=" mb-3">
	<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
		Tambah User
	</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="<?= base_url('admin/user/simpan') ?>" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="form-group col-lg-12">
						<label for="form-label">Nama</label>
						<input type="text" class="form-control" placeholder="Nama" name="nama" required>
					</div>
					<div class="form-group col-lg-12">
						<label for="form-label">Username</label>
						<input type="text" class="form-control" placeholder="Username" name="username" required>
					</div>
					<div class="form-group col-lg-12">
						<label for="form-label">Password</label>
						<input type="password" class="form-control" placeholder="Password" name="password" required>
					</div>
					<div class="form-group col-lg-12">
						<label for="form-label">Level</label>
						<select name="level" class="form-control">
							<option value="Admin">Admin</option>
							<option value="Kontributor">Kontributor</option>
						</select>
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
		<h4 class="card-title">Data Pengguna</h4>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>Username</th>
						<th>Nama</th>
						<th>Level</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($user as $aa) { ?>
					<tr>
						<td><?= $aa['username'] ?></td>
						<td><?= $aa['nama'] ?></td>
						<td><?= $aa['level'] ?></td>
						<td>
							<a href="<?php echo site_url('admin/user/delete_data/'.$aa['id_user']);?>"
								class="btn btn-sm btn-danger"
								onClick="return confirm('Apakah anda yakin menghapus data ini?')"><span
									class="mdi mdi-delete "></span></a>
							<button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
								data-target="#edit<?= $aa['id_user'] ?>">
								<span class=" mdi mdi-tooltip-edit"></span>
							</button>
							<div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1" role="dialog"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<form action="<?= base_url('admin/user/update') ?>" method="post">
										<input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Perbarui Nama User</h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="form-group col-lg-12">
												<label for="form-label">Nama</label>
												<input type="text" class="form-control" value="<?= $aa['nama'] ?>" name="nama">
											</div>
											<div class="form-group col-lg-12">
												<label for="form-label">Username</label>
												<input type="text" class="form-control" value="<?= $aa['username'] ?>"
													name="username" readonly>
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
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
