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
			<li class="nav-item <?= link_is_active("") ?>">
				<a href="<?= base_url() ?>" class="nav-link">
					<i class="link-icon" data-feather="box"></i>
					<span class="link-title">Dashboard</span>
				</a>
			</li>

			<!-- Projects -->
			<li class="nav-item nav-category">Projects Management</li>
			<!-- Access Level: jury -->
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

			<!-- Access Level: admin -->

			<li class="nav-item nav-category">User Management</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
					<i class="link-icon" data-feather="users"></i>
					<span class="link-title">Users</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="emails">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="#" class="nav-link">All Users</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Add New User</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a href="dashboard.html" class="nav-link">
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
