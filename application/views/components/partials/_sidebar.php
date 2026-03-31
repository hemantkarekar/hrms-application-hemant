<nav class="sidebar">
	<div class="sidebar-header">
		<a href="#" class="sidebar-brand">
			<img src="<?= base_url('assets/logo.png') ?>" alt="" width="160">
		</a>
		<div class="sidebar-toggler not-active">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<div class="sidebar-body">
		<ul class="nav">
			<li class="nav-item <?= link_is_active("dashboard")['active'] ? "active" : "" ?>">
				<a href="<?= base_url('dashboard') ?>" class="nav-link">
					<i class="link-icon" data-feather="box"></i>
					<span class="link-title">Dashboard</span>
				</a>
			</li>

			<li class="nav-item <?= link_is_active(['blogs', 'blog/new-post'], $group = true)['active'] ? "active" : ""  ?>">
				<a class="nav-link" data-bs-toggle="collapse" href="#timesheet" role="button" aria-expanded="<?= link_is_active(['blogs', 'blog/new-post'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="timesheet">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">Attendance</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse <?= link_is_active(['blogs', 'blog/new-post'], $group = true)['show'] ? "show" : "" ?>" id="timesheet">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("blogs") ?>" class="nav-link <?= link_is_active('blogs')['active'] ? "active" : ""  ?>">Current Timesheet</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('blog/new-post') ?>" target="_blank" class="nav-link <?= link_is_active('blog/new-post')['active'] ? "active" : "" ?>">All Timesheets</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item <?= link_is_active(['blogs', 'blog/new-post'], $group = true)['active'] ? "active" : ""  ?>">
				<a class="nav-link" data-bs-toggle="collapse" href="#leaves" role="button" aria-expanded="<?= link_is_active(['blogs', 'blog/new-post'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="leaves">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">Leaves</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse <?= link_is_active(['blogs', 'blog/new-post'], $group = true)['show'] ? "show" : "" ?>" id="leaves">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("blogs") ?>" class="nav-link <?= link_is_active('blogs')['active'] ? "active" : ""  ?>">All Leaves</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('blog/new-post') ?>" target="_blank" class="nav-link <?= link_is_active('blog/new-post')['active'] ? "active" : "" ?>">New Requests</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('blog/new-post') ?>" target="_blank" class="nav-link <?= link_is_active('blog/new-post')['active'] ? "active" : "" ?>">All Approvals</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item <?= link_is_active(['blogs', 'blog/new-post'], $group = true)['active'] ? "active" : ""  ?>">
				<a class="nav-link" data-bs-toggle="collapse" href="#compoff" role="button" aria-expanded="<?= link_is_active(['blogs', 'blog/new-post'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="compoff">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">Comp Offs</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse <?= link_is_active(['blogs', 'blog/new-post'], $group = true)['show'] ? "show" : "" ?>" id="compoff">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("blogs") ?>" class="nav-link <?= link_is_active('blogs')['active'] ? "active" : ""  ?>">All Comp Offs</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('blog/new-post') ?>" target="_blank" class="nav-link <?= link_is_active('blog/new-post')['active'] ? "active" : "" ?>">New Requests</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('blog/new-post') ?>" target="_blank" class="nav-link <?= link_is_active('blog/new-post')['active'] ? "active" : "" ?>">All Approvals</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item <?= link_is_active(['payslips', 'reimbursements', 'incentives'], $group = true)['active'] ? "active" : ""  ?>">
				<a class="nav-link" data-bs-toggle="collapse" href="#payments" role="button" aria-expanded="<?= link_is_active(['payslips', 'reimbursements', 'incentives'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="payments">
					<i class="link-icon" data-feather="dollar-sign"></i>
					<span class="link-title">Payments</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse <?= link_is_active(['payslips', 'reimbursements', 'incentives'], $group = true)['show'] ? "show" : "" ?>" id="payments">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("payslips") ?>" class="nav-link <?= link_is_active('payslips')['active'] ? "active" : ""  ?>">Payslips</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('reimbursements') ?>" target="_blank" class="nav-link <?= link_is_active('reimbursements')['active'] ? "active" : "" ?>">Reimbursements</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('incentives') ?>" target="_blank" class="nav-link <?= link_is_active('incentives')['active'] ? "active" : "" ?>">Incentives</a>
						</li>
					</ul>
				</div>
			</li>
			<!-- Timesheet Management -->


			<!-- Access Level: admin -->
			<li class="nav-item nav-category">Attendance Management</li>
			<!-- Timesheet Management -->
			<li class="nav-item <?= link_is_active(['timesheets', 'timesheet/current'], $group = true)['active'] ? "active" : ""  ?>">
				<a class="nav-link" data-bs-toggle="collapse" href="#timesheet" role="button" aria-expanded="<?= link_is_active(['timesheets', 'timesheet/current'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="timesheet">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">Timesheet</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse <?= link_is_active(['timesheets', 'timesheet/current'], $group = true)['show'] ? "show" : "" ?>" id="timesheet">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("blogs") ?>" class="nav-link <?= link_is_active('blogs')['active'] ? "active" : ""  ?>">Current Timesheet</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('blog/new-post') ?>" target="_blank" class="nav-link <?= link_is_active('blog/new-post')['active'] ? "active" : "" ?>">All Timesheets</a>
						</li>
					</ul>
				</div>
			</li>
			<!-- Timesheet Management -->
			<!-- Leaves & Half-days Management -->
			<li class="nav-item <?= link_is_active(['blogs', 'blog/new-post'], $group = true)['active'] ? "active" : ""  ?>">
				<a class="nav-link" data-bs-toggle="collapse" href="#leaves" role="button" aria-expanded="<?= link_is_active(['blogs', 'blog/new-post'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="leaves">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">Leaves & Half Days</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse <?= link_is_active(['blogs', 'blog/new-post'], $group = true)['show'] ? "show" : "" ?>" id="leaves">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("blogs") ?>" class="nav-link <?= link_is_active('blogs')['active'] ? "active" : ""  ?>">All Leaves</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('blog/new-post') ?>" target="_blank" class="nav-link <?= link_is_active('blog/new-post')['active'] ? "active" : "" ?>">All Half-days</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('blog/new-post') ?>" target="_blank" class="nav-link <?= link_is_active('blog/new-post')['active'] ? "active" : "" ?>">Leave Requests</a>
						</li>
					</ul>
				</div>
			</li>
			<!-- Leaves & Half-days Management -->
			<!-- Comp-offs Management -->
			<li class="nav-item <?= link_is_active(['comp-offs', 'comp-off/new-requests'], $group = true)['active'] ? "active" : ""  ?>">
				<a class="nav-link" data-bs-toggle="collapse" href="#compoffs" role="button" aria-expanded="<?= link_is_active(['comp-offs', 'comp-off/new-requests'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="compoffs">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">Comp-offs</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse <?= link_is_active(['comp-offs', 'comp-off/new-requests'], $group = true)['show'] ? "show" : "" ?>" id="compoffs">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url('comp-offs') ?>" target="_blank" class="nav-link <?= link_is_active('comp-offs')['active'] ? "active" : "" ?>">All Comp-offs</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('comp-off/new-requests') ?>" target="_blank" class="nav-link <?= link_is_active('comp-off/new-requests')['active'] ? "active" : "" ?>">Comp-off Requests</a>
						</li>
					</ul>
				</div>
			</li>
			<!-- Comp-offs Management -->
			<!-- Overtimes Management -->
			<li class="nav-item <?= link_is_active(['overtime-works', 'overtime/new-requests'], $group = true)['active'] ? "active" : ""  ?>">
				<a class="nav-link" data-bs-toggle="collapse" href="#overtimes" role="button" aria-expanded="<?= link_is_active(['overtime-works', 'overtime/new-requests'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="overtimes">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">Overtime Works</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse <?= link_is_active(['overtime-works', 'overtime/new-requests'], $group = true)['show'] ? "show" : "" ?>" id="overtimes">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url('overtime-works') ?>" target="_blank" class="nav-link <?= link_is_active('overtime-works')['active'] ? "active" : "" ?>">All Overtime Works</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('overtime/new-requests') ?>" target="_blank" class="nav-link <?= link_is_active('overtime/new-requests')['active'] ? "active" : "" ?>">Overtime Work Requests</a>
						</li>
					</ul>
				</div>
			</li>
			<!-- Overtimes Management -->

			<!-- Projects Management -->
			<li class="nav-item nav-category">Projects Management</li>
			<li class="nav-item <?= link_is_active("project-management") ['active'] ? "active" : "" ?>">
				<a href="<?= base_url('project-management') ?>" class="nav-link">
					<i class="link-icon" data-feather="box"></i>
					<span class="link-title">Projects Dashboard</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('nominations') ?>" class="nav-link">
					<i class="link-icon" data-feather="users"></i>
					<span class="link-title">Clients</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="collapse" href="#projects" role="button" aria-expanded="false" aria-controls="projects">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">Projects</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="projects">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="#" class="nav-link">All Projects</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Add New Project</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="collapse" href="#tasks" role="button" aria-expanded="false" aria-controls="tasks">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">Tasks</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="tasks">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="#" class="nav-link">All Tasks</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Add New Task</a>
						</li>
					</ul>
				</div>
			</li>
			<!-- Projects Management -->

			<li class="nav-item nav-category">Miscellaneous</li>
			<li class="nav-item">
				<a href="<?= base_url('') ?>" class="nav-link <?= link_is_active()['active'] ?>">
					<i class="link-icon" data-feather="bookmark"></i>
					<span class="link-title">FPOs</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('') ?>" class="nav-link <?= link_is_active()['active'] ?>">
					<i class="link-icon" data-feather="bookmark"></i>
					<span class="link-title">Commodities</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('') ?>" class="nav-link <?= link_is_active()['active'] ?>">
					<i class="link-icon" data-feather="bookmark"></i>
					<span class="link-title">Categories</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('') ?>" class="nav-link <?= link_is_active()['active'] ?>">
					<i class="link-icon" data-feather="bookmark"></i>
					<span class="link-title">Tags</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('') ?>" class="nav-link <?= link_is_active()['active'] ?>">
					<i class="link-icon" data-feather="image"></i>
					<span class="link-title">Media</span>
				</a>
			</li>

			<!-- Access Level: admin -->

			<li class="nav-item nav-category">User Management</li>
			<li class="nav-item <?= link_is_active(['blogs', 'blog/new-post'], $group = true)['active'] ? "active" : ""  ?>">
				<a class="nav-link" data-bs-toggle="collapse" href="#blogs" role="button" aria-expanded="<?= link_is_active(['blogs', 'blog/new-post'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="blogs">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">Blogs</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse <?= link_is_active(['blogs', 'blog/new-post'], $group = true)['show'] ? "show" : "" ?>" id="blogs">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("blogs") ?>" class="nav-link <?= link_is_active('blogs')['active'] ? "active" : ""  ?>">All Blogs</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('blog/new-post') ?>" target="_blank" class="nav-link <?= link_is_active('blog/new-post')['active'] ? "active" : "" ?>">Add New Post</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item <?= link_is_active(['users', 'users/new-user'], $group = true)['active'] ? "active" : ""  ?>">
				<a class="nav-link" data-bs-toggle="collapse" href="#users" role="button" aria-expanded="<?= link_is_active(['users', 'users/new-user'], $group = true)['expand'] ? "true" : "false"  ?>" aria-controls="users">
					<i class="link-icon" data-feather="users"></i>
					<span class="link-title">Users</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse <?= link_is_active(['users', 'users/new-user'], $group = true)['show'] ? "show" : ""  ?>" id="users">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url('users') ?>" class="nav-link <?= link_is_active("users")['active'] ? "active" : "" ?>">All Users</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('users/new-user') ?>" class="nav-link <?= link_is_active("users/new-user")['active'] ? "active" : "" ?>">Add New User</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item <?= link_is_active("settings")['active'] ? "active" : "" ?>">
				<a href="<?= base_url('settings') ?>" class="nav-link">
					<i class="link-icon" data-feather="settings"></i>
					<span class="link-title">Settings</span>
				</a>
			</li>

			<li class="nav-item nav-category">Apps</li>
			<li class="nav-item">
				<a href="dashboard.html" class="nav-link">
					<i class="link-icon" data-feather="settings"></i>
					<span class="link-title">App Settings</span>
				</a>
			</li>

			<li class="nav-item nav-category">Docs</li>
			<li class="nav-item">
				<a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
					<i class="link-icon" data-feather="hash"></i>
					<span class="link-title">Documentation</span>
				</a>
			</li>
		</ul>
	</div>
</nav>