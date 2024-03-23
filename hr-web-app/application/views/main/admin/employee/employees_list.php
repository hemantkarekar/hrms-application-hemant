<div class="page-content">
	<nav class="page-breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">Employee Management</li>
			<li class="breadcrumb-item active" aria-current="page">All Employees</li>
		</ol>
	</nav>
	<div class="row">
		<div class="col-12 grid-margin">
			<div class="row m-0 justify-content-between">
				<div class="col-auto">
					<h3>All Employees</h3>
				</div>
				<div class="col-auto">
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-trigger="hover" data-bs-toggle="popover" title="Add A New Employee" data-bs-content="And here's some tips to Add A New Employee">
							Add New Employee
						</button>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="<?= base_url("employee-management/employees/new") ?>">Add Single Employee</a></li>
							<li><a class="dropdown-item" href="<?= base_url("employee-management/employees/new-bulk") ?>">Upload Bulk Employee</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xxl-10 col-xl-9 col-12">
			<div class="row">
				<div class="col-lg-7 col-md-6 col-12 grid-margin">
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h5>Head Count</h5>
							</div>
							<div id="headcountBarChart"></div>
							<script>
								var options = {
									theme: {
										mode: 'light'
									},
									series: [
										// 	{
										// 	name: 'Required',
										// 	data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
										// }, 
										{
											name: 'Current',
											data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
										}
									],
									chart: {
										type: 'bar',
										height: 300,
										zoom: {
											enabled: true,
											type: 'x',
											autoScaleYaxis: false,
										}
									},
									plotOptions: {
										bar: {
											horizontal: false,
											columnWidth: '55%',
											endingShape: 'rounded'
										},
									},
									dataLabels: {
										enabled: false
									},
									stroke: {
										show: true,
										width: 2,
										colors: ['transparent']
									},
									xaxis: {
										categories: ['HR', 'Business', 'Development', 'Creative', 'Content', 'SEO', 'Social Media', 'AV Editors', 'IT'],
										title: {
											text: 'Departments'
										}
									},
									yaxis: {
										title: {
											text: 'Employees'
										}
									},
									fill: {
										opacity: 1
									},
									tooltip: {
										x: {
											formatter: function(val) {
												return val + " Department"
											}
										},
										y: {
											formatter: function(val) {
												return val + " Employees"
											}
										}
									}
								};

								var chart = new ApexCharts(document.querySelector("#headcountBarChart"), options);
								chart.render();
							</script>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-6 col-12 grid-margin">
					<div class="card">
						<div class="card-body"></div>
					</div>
				</div>

				<div class="col-12 grid-margin">
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h5>All Employees</h5>
							</div>
							<table id="employee_table" class="table table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Employee Name</th>
										<th>Designation</th>
										<th>Department</th>
										<th>Gender</th>
										<th>Date of Joining</th>
									</tr>
								</thead>
								<tbody>
									<?php for ($i = 1; $i < 50; $i++) : ?>
										<tr>
											<?php
											$id = "EMP_" . random_string('alnum', 5) . "_" . str_pad($i, 2, "0", STR_PAD_LEFT);
											?>
											<td><a href="<?= base_url('profile?employee_id=' . $id) ?>"><?= "#" . $id ?></a></td>
											<td>Employee_<?= str_pad($i, 2, "0", STR_PAD_LEFT) ?></td>
											<td>Designation_000</td>
											<td>Department_000</td>
											<td>Male</td>
											<td><?= date_format(date_create('now'), "Y-m-d") ?></td>
										</tr>
									<?php endfor ?>
								</tbody>
							</table>
							<script>
								new DataTable('#employee_table', {
									dom: 'lfrtip'
								});
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xxl-2 col-xl-3 col-12">
			<div class="p-3 bg-light">
				<div class="mb-3">
					<h5>All Employees Data</h5>
				</div>
				<div class="desc">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis at dolorem consectetur rerum aperiam aspernatur repellat nobis ea amet nemo.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
