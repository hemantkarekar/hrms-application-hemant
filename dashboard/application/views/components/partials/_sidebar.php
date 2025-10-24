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
            <li class="nav-item <?= link_is_active("")['active'] ? "active" : "" ?>">
                <a href="<?= base_url() ?>" class="nav-link">
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
            <!-- Timesheet Management -->

            <!-- Content Management -->
            <li class="nav-item nav-category">Attendance Management</li>
            <!-- Access Level: jury -->
            <!-- Timesheet Management -->
            <li class="nav-item <?= link_is_active(['blogs', 'blog/new-post'], $group = true)['active'] ? "active" : ""  ?>">
                <a class="nav-link" data-bs-toggle="collapse" href="#timesheet" role="button" aria-expanded="<?= link_is_active(['blogs', 'blog/new-post'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="timesheet">
                    <i class="link-icon" data-feather="database"></i>
                    <span class="link-title">Timesheet</span>
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
            <!-- Timesheet Management -->

            <!-- Episodes -->
            <li class="nav-item <?= link_is_active(['episodes', 'episode/new-post'], $group = true)['active'] ? "active" : ""  ?>">
                <a class="nav-link" data-bs-toggle="collapse" href="#episodes" role="button" aria-expanded="<?= link_is_active(['episodes', 'episode/new-post'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="episodes">
                    <i class="link-icon" data-feather="database"></i>
                    <span class="link-title">Episodes</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse <?= link_is_active(['episodes', 'episode/new-post'], $group = true)['show'] ? "show" : "" ?>" id="episodes">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url("episodes") ?>" class="nav-link <?= link_is_active('episodes')['active'] ? "active" : ""  ?>">All Episodes</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('episode/new-post') ?>" target="_blank" class="nav-link <?= link_is_active('episode/new-post')['active'] ? "active" : "" ?>">Add New Post</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Episodes -->

            <!-- Podcasts -->
            <li class="nav-item <?= link_is_active(['podcasts', 'podcast/new-post'], $group = true)['active'] ? "active" : ""  ?>">
                <a class="nav-link" data-bs-toggle="collapse" href="#podcasts" role="button" aria-expanded="<?= link_is_active(['podcasts', 'podcast/new-post'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="podcasts">
                    <i class="link-icon" data-feather="database"></i>
                    <span class="link-title">Podcasts</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse <?= link_is_active(['podcasts', 'podcast/new-post'], $group = true)['show'] ? "show" : "" ?>" id="podcasts">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url("podcasts") ?>" class="nav-link <?= link_is_active('podcasts')['active'] ? "active" : ""  ?>">All Podcasts</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('podcast/new-post') ?>" target="_blank" class="nav-link <?= link_is_active('podcast/new-post')['active'] ? "active" : "" ?>">Add New Post</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Podcasts -->

            <!-- Reports -->
            <li class="nav-item <?= link_is_active(['reports', 'report/new-post'], $group = true)['active'] ? "active" : ""  ?>">
                <a class="nav-link" data-bs-toggle="collapse" href="#reports" role="button" aria-expanded="<?= link_is_active(['reports', 'report/new-post'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="reports">
                    <i class="link-icon" data-feather="database"></i>
                    <span class="link-title">Reports</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse <?= link_is_active(['reports', 'report/new-post'], $group = true)['show'] ? "show" : "" ?>" id="reports">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url("reports") ?>" class="nav-link <?= link_is_active('reports')['active'] ? "active" : ""  ?>">All Reports</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('report/new-post') ?>" target="_blank" class="nav-link <?= link_is_active('report/new-post')['active'] ? "active" : "" ?>">Add New Post</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- FAQs -->
            <li class="nav-item">
                <a href="<?= base_url('faqs') ?>" class="nav-link <?= link_is_active()['active'] ?>">
                    <i class="link-icon" data-feather="database"></i>
                    <span class="link-title">FAQs</span>
                </a>
            </li>

            <!-- All Comments -->
            <li class="nav-item">
                <a href="<?= base_url('') ?>" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Comments</span>
                </a>
            </li>

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
