<section class="section">
	<div class="section-header">
		<h1>Dashboard</h1>
	</div>

	<div class="section-body">
		<h2 class="section-title">Table</h2>
		<p class="section-lead">Example of some Bootstrap table components.</p>

		<div class="row">
			<div class="col-12 col-md-12 col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4>Simple Table</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-md">
								<tr>
									<th>#</th>
									<th>Nama Sistem</th>
									<th>Nama Instansi</th>
									<th>Telepon Instansi</th>
									<th>Status</th>
									<th>Tindakan</th>
								</tr>

								<?php 
								
								$no = 1;
								foreach ($konfigurasi as $konfig) : ?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $konfig->nama_sistem ?></td>
									<td><?php echo $konfig->nama_instansi ?></td>
									<td><?php echo $konfig->telepon_instansi ?></td>
									<td><?php echo $konfig->status ?></td>
									<td>
										<div class="badge badge-success">Active</div>
									</td>
									<td>
										<a href="#" class="btn btn-secondary">Detail</a>
									</td>
									
								</tr>
								<?php endforeach ?>
								
							</table>
						</div>
					</div>
					<div class="card-footer text-right">
						<nav class="d-inline-block">
							<ul class="pagination mb-0">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
								</li>
								<li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
								</li>
								<li class="page-item">
									<a class="page-link" href="#">2</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
