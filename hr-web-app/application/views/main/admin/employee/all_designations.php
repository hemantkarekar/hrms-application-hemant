<div class="page-content">
	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">All Designations</li>
		</ol>
	</nav>
	<div class="row">
		<div class="col-12 grid-margin">
			<div class="row">
				<div class="col-12 grid-margin">
					<h3>All Designations</h3>
				</div>
				<div class="col-xxl-10 col-xl-9 col-12">
					<div class="row">
						<div class="col-xl-5 col-lg-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="card-title">
										<h5>List All Designations</h5>
									</div>
									<table class="table" id="designationsTable">
										<thead>
											<tr>
												<th>Designation Name</th>
											</tr>
										</thead>
										<tbody>
											<?php for ($i = 0; $i < 10; $i++) : ?>
												<tr>
													<td> Designation <?= $i ?></td>
												</tr>
												<tr>
													<td> Department <?= $i ?></td>
												</tr>
											<?php endfor ?>
										</tbody>
										<script>
											new DataTable('#designationsTable', {
												dom: 'lfrtip'
											});
										</script>
									</table>
								</div>
							</div>
						</div>
						<div class="col-xl-7 col-lg-6 col-12">
							<?= form_open() ?>
							<div class="card">
								<div class="card-body">
									<div class="card-title">
										<h5>Create a New Designation</h5>
									</div>
									<div class="row">

										<div class="col-lg-6 col-12">
											<div class="mb-3">
												<label for="" class="form-label">Select Department</label>
												<select class="form-select" name="" id="select2Department">
													<?php for ($i = 0; $i < 10; $i++) : ?>
														<option value=""> Designation <?= $i ?></option>
													<?php endfor ?>
												</select>
												<script>
													$("#select2Department").select2();
												</script>
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="mb-3">
												<label for="" class="form-label">Designation Reporting to</label>
												<select class="form-select" name="" id="select2ParentDesignation">
													<?php for ($i = 0; $i < 10; $i++) : ?>
														<option value=""> Designation <?= $i ?></option>
													<?php endfor ?>
												</select>
												<script>
													$("#select2ParentDesignation").select2();
												</script>
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="mb-3">
												<label for="" class="form-label">Designation Name</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-12">
											<div class="mb-3">
												<button type="submit" class="btn btn-primary">Create New Designation</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?= form_close() ?>
						</div>
					</div>
				</div>
				<div class="col-xxl-2 col-xl-3 col-12"></div>
			</div>
		</div>
	</div>
</div>
