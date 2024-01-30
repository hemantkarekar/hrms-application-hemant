<?php 

$role = $this->session->webuser_client['user']['role'];
?>

<aside class="sidebar-wrapper" data-simplebar="init">
	<div class="simplebar-wrapper" style="margin: 0px;">
		<div class="simplebar-height-auto-observer-wrapper">
			<div class="simplebar-height-auto-observer"></div>
		</div>
		<div class="simplebar-mask">
			<div class="simplebar-offset" style="right: 0px; bottom: 0px;">
				<div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;">
					<div class="simplebar-content mm-active" style="padding: 0px;">
						<div class="sidebar-header">
							<div>
								<img src="assets/images/logo-icon-2.png" class="logo-icon" alt="logo icon">
							</div>
							<div>
								<h4 class="logo-text">Dashboard</h4>
							</div>
							<div class="toggle-icon ms-auto">
								<!-- <i class="ti ti-menu-2"></i> -->
							</div>
						</div>
						<!--navigation-->
						<ul class="metismenu mm-show" id="menu">
							<!-- COMMON -->
							<li>
								<a href="<?= base_url() ?>">
									<div class="parent-icon">
										<i class="ti ti-home"></i>
									</div>
									<div class="menu-title">Home</div>
								</a>
							</li>
							<li>
								<a href="javascript:;" class="has-arrow">
									<div class="parent-icon">
										<i class="ti ti-inbox"></i>
									</div>
									<div class="menu-title">Conversations</div>
								</a>
								<ul class="mm-collapse">
									<li>
										<a href="index.html">Inbox</a>
									</li>
									<li>
										<a href="index.html">Announcements</a>
									</li>
									<li>
										<a href="index2.html">Surveys</a>
									</li>
									<li>
										<a href="index2.html">Tasks</a>
									</li>
									<li>
										<a href="index2.html">All Drafts</a>
									</li>
									<li>
										<a href="index2.html">Trash</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:;" class="has-arrow">
									<div class="parent-icon">
										<i class="ti ti-pencil"></i>
									</div>
									<div class="menu-title">Team Announcements</div>
								</a>
								<ul class="mm-collapse">
									<li><a href="ecommerce-shop-grid-view.html">
											<i class="bi bi-circle"></i>New Announcement
										</a>
									</li>
									<li><a href="ecommerce-shop-list-view.html">
											<i class="bi bi-circle"></i>All Announcements
										</a>
									</li>
								</ul>
							</li>
							<!-- COMMON -->

							<!-- EMPLOYEE -->
							<li class="menu-label">Employee</li>
							<li>
								<a href="<?= base_url() ?>">
									<div class="parent-icon">
										<i class="ti ti-calendar-clock"></i>
									</div>
									<div class="menu-title">Attendance</div>
								</a>
							</li>
							<li>
								<a href="javascript:;" class="has-arrow">
									<div class="parent-icon">
										<i class="ti ti-briefcase-off"></i>
									</div>
									<div class="menu-title">Work Offs</div>
								</a>
								<ul class="mm-collapse">
									<li> <a href="widgets-data-widgets.html">
											<i class="bi bi-circle"></i>Apply for WFH
										</a>
									</li>
									<li> <a href="widgets-static-widgets.html">
											<i class="bi bi-circle"></i>Apply for Half Day
										</a>
									</li>
									<li> <a href="widgets-data-widgets.html">
											<i class="bi bi-circle"></i>Apply for Leave
										</a>
									</li>
									<li> <a href="widgets-data-widgets.html">
											<i class="bi bi-circle"></i>Pending Approvals
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a class="has-arrow" href="javascript:;">
									<div class="parent-icon">
										<i class="ti ti-checklist"></i>
									</div>
									<div class="menu-title">Requisitions</div>
								</a>
								<ul class="mm-collapse">
									<li> <a href="component-alerts.html">
											<i class="ti ti-checklist"></i>New
										</a>
									</li>
									<li> <a href="component-alerts.html">
											<i class="ti ti-checklist"></i>Pending Requisitions
										</a>
									</li>

								</ul>
							</li>
							<li>
								<a class="has-arrow" href="javascript:;">
									<div class="parent-icon">
										<i class="ti ti-checklist"></i>
									</div>
									<div class="menu-title">Requests</div>
								</a>
								<ul class="mm-collapse">
									<li>
										<a href="component-alerts.html">Overtime Wages</a>
									</li>
									<li>
										<a href="component-alerts.html">Compensatory Off</a>
									</li>
									<li>
										<a href="component-alerts.html">Reimbursement</a>
									</li>
									<li>
										<a href="component-alerts.html">Loan</a>
									</li>
									<li>
										<a href="component-alerts.html">Investment</a>
									</li>
								</ul>
							</li>
							<!-- EMPLOYEE -->

							<!-- HR -->
							<li class="menu-label">Human Resource</li>
							<li>
								<a class="has-arrow" href="javascript:;">
									<div class="parent-icon">
										<i class="bi bi-ui-radios-grid"></i>
									</div>
									<div class="menu-title">Employee Database</div>
								</a>
								<ul class="mm-collapse">
									<li> <a href="form-elements.html">
											<i class="bi bi-circle"></i>All Employees
										</a>
									</li>
									<li> <a href="form-input-group.html">
											<i class="bi bi-circle"></i>Past Employees
										</a>
									</li>
									<li> <a href="form-layouts.html">
											<i class="bi bi-circle"></i>Job Roles
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a class="has-arrow" href="javascript:;">
									<div class="parent-icon">
										<i class="bi bi-file-earmark-break"></i>
									</div>
									<div class="menu-title">Pending Approvals</div>
								</a>
								<ul class="mm-collapse">
									<li> <a href="table-basic-table.html">
											<i class="bi bi-circle"></i>All Requests
										</a>
									</li>
									<li> <a href="table-advance-tables.html">
											<i class="bi bi-circle"></i>All Requisitions
										</a>
									</li>
									<li> <a href="table-datatable.html">
											<i class="bi bi-circle"></i>Other Approvals
										</a>
									</li>
								</ul>
							</li>
							<!-- HR -->

							<!-- APPS -->
							<li class="menu-label">Apps & Widgets</li>
							<li>
								<a href="<?= base_url() ?>">
									<div class="parent-icon">
										<i class="ti ti-calendar"></i>
									</div>
									<div class="menu-title">Calendar <?= date('Y') ?></div>
								</a>
								<a href="<?= base_url() ?>">
									<div class="parent-icon">
									<i class="ti ti-binary-tree"></i>
									</div>
									<div class="menu-title">Employee Hierarchy</div>
								</a>
							</li>
							<!-- APPS -->

							<!-- USER PROFILE -->
							<li class="menu-label">User Profile</li>
							<li>
								<a class="has-arrow" href="javascript:;">
									<div class="parent-icon">
										<i class="bi bi-graph-up"></i>
									</div>
									<div class="menu-title">HR Handbook</div>
								</a>
								<ul class="mm-collapse">
									<li>
										<a href="charts-apex-chart.html">Documents</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="pages-user-profile.html">
									<div class="parent-icon">
										<i class="ti ti-user"></i>
									</div>
									<div class="menu-title">Profile</div>
								</a>
							</li>
							<li>
								<a href="javascript:;" target="_blank" class="text-danger">
									<div class="parent-icon">
										<i class="ti ti-logout"></i>
									</div>
									<div class="menu-title">Log Out</div>
								</a>
							</li>
						</ul>
						<!--end navigation-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
		<div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
	</div>
	<div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
		<div class="simplebar-scrollbar" style="height: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div>
	</div>
</aside>
