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
			<li class="nav-item <?= link_is_active("") ?>">
				<a href="<?= base_url() ?>" class="nav-link">
					<i class="link-icon" data-feather="box"></i>
					<span class="link-title">Dashboard</span>
				</a>
			</li>

			<!-- Nominations -->
			<li class="nav-item nav-category">Events Management</li>
			<!-- Access Level: jury -->
			<li class="nav-item">
				<a href="<?= base_url('nominations') ?>" class="nav-link">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">All Events</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('nominations') ?>" class="nav-link">
					<i class="link-icon" data-feather="book"></i>
					<span class="link-title">New Event</span>
				</a>
			</li>

			<!-- Nominations -->
			<li class="nav-item nav-category">Content Management</li>
			<!-- Access Level: jury -->
            <li class="nav-item">
				<a class="nav-link" data-bs-toggle="collapse" href="#blogs" role="button" aria-expanded="false" aria-controls="blogs">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">Blogs</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="blogs">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="#" class="nav-link">All Blogs</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Add New Blog</a>
						</li>
					</ul>
				</div>
			</li>
            <li class="nav-item">
				<a class="nav-link" data-bs-toggle="collapse" href="#episodes" role="button" aria-expanded="false" aria-controls="episodes">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">Episodes</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="episodes">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="#" class="nav-link">All Episodes</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Add New Episode</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('') ?>" class="nav-link">
					<i class="link-icon" data-feather="bookmark"></i>
					<span class="link-title">Categories</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('') ?>" class="nav-link">
					<i class="link-icon" data-feather="bookmark"></i>
					<span class="link-title">Tags</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('') ?>" class="nav-link">
					<i class="link-icon" data-feather="message-square"></i>
					<span class="link-title">Comments</span>
				</a>
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
