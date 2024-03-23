<div class="page-content">
	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">All Departments</li>
		</ol>
	</nav>
	<div class="row">
		<div class="col-12 grid-margin">
			<div class="row">
				<div class="col-12 grid-margin">
					<h3>All Departments</h3>
				</div>
				<div class="col-xxl-10 col-xl-9 col-12">
					<div class="row">
						<div class="col-xl-5 col-lg-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="card-title">
										<h5>List All Departments</h5>
									</div>
									<table class="table" id="departmentsTable">
										<thead>
											<tr>
												<th>Department Name</th>
												<th>Parent Department</th>
											</tr>
										</thead>
										<tbody>
											<?php for ($i = 0; $i < count($departments); $i++) : ?>
												<tr>
													<td> <?= $departments[$i] ?></td>
													<td>NA</td>
												</tr>
											<?php endfor ?>
										</tbody>
										<script>
											new DataTable('#departmentsTable', {
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
										<h5>Create a New Department</h5>
									</div>
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="mb-3">
												<label for="" class="form-label">Department Name</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="mb-3">
												<label for="" class="form-label">Select Parent Department</label>
												<select class="form-select" name="" id="select2ParentDepartment">
													<option value="">Select Parent Department</option>
													<?php for ($i = 0; $i < count($departments); $i++) : ?>
														<option value="<?= $departments[$i] ?>"> <?= $departments[$i] ?></option>
													<?php endfor ?>
												</select>
												<script>
													$("#select2ParentDepartment").select2();
												</script>
											</div>
										</div>
										<div class="col-12">
											<div class="mb-3">
												<button type="submit" class="btn btn-primary">Create New Department</button>
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
