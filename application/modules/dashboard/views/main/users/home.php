<main class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">All Users</h4>
        </div>
        <div class="">
            <a href="<?= base_url('users/new-user') ?>" target="_blank" class="btn btn-icon-text btn-primary">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Add A New User</a>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2 mb-md-3">
                        <h6 class="card-title mb-0">All Users</h6>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <form action="<?= base_url("blogs") ?>" method="get">
                                <div class="row g-2">
                                    <div class="col-lg col-md col-12">
                                        <input type="text" class="form-control" placeholder="Search By Name">
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-12">
                                        <select name="user_role" class="form-select" id="">
                                            <option value="">Select Role</option>
                                            <?php for ($i = 0; $i < 20; $i++): ?>
                                                <option value="Option <?= $i ?>">Option <?= $i ?></option>
                                            <?php endfor ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-12">
                                        <select name="user_status" class="form-select" id="">
                                            <option value="">Select Visibility</option>
                                            <?php for ($i = 0; $i < 20; $i++): ?>
                                                <option value="Option <?= $i ?>">Option <?= $i ?></option>
                                            <?php endfor ?>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-outline-primary">Apply</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-md-auto col-12">
                            <ul class="nav nav-underline">
                                <li class="nav-item">
                                    <a class="nav-link <?= (in_array($this->input->get('user_status'), [NULL, ""])) ? "active" : "" ?>" aria-current="page" href="<?= current_url() ?>">All Users&nbsp;<span class="badge bg-dark">200</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($this->input->get('user_status') == "active") ? "active" : "" ?>" href="<?= current_url() ?>?user_status=active">Active Users&nbsp;<span class="badge bg-dark">200</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($this->input->get('user_status') == "inactive") ? "active" : "" ?>" href="<?= current_url() ?>?user_status=inactive">Inactive Users&nbsp;<span class="badge bg-dark">200</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0 w-100" id="leadsDataTable">
                            <thead>
                                <tr>
                                    <th class="pt-0"></th>
                                    <th class="pt-0">Username</th>
                                    <th class="pt-0">Name</th>
                                    <th class="pt-0">Email</th>
                                    <!-- <th class="pt-0">Lang</th>
                                    <th class="pt-0">Lang</th>
                                    <th class="pt-0">Lang</th> -->
                                    <th class="pt-0">Role</th>
                                    <th class="pt-0">Posts</th>
                                    <th class="pt-0">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < 20; $i++) : ?>
                                    <tr>
                                        <td>
                                            <a target="_blank" href="<?= base_url('blogs/post/' . $i . '/edit') ?>"><i class="link-icon px-1 mb-1" data-feather="edit-2"></i></a>
                                            <button id="deleteButton<?= $i ?>" class="btn link-icon p-0" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal">
                                                <i class="link-icon px-1 mb-1" data-feather="trash-2"></i>
                                            </button>
                                            <a target="_blank" href="<?= base_url('blogs/post/' . $i . '/edit') ?>"><i class="link-icon px-1 mb-1" data-feather="external-link"></i></a>
                                        </td>
                                        <td><a target="_blank" href="<?= base_url('blogs/post/' . $i . '?post_preview=true') ?>">
                                                <div class="row g-2">
                                                    <div class="col-auto">
                                                        <img class="" src="https://ui-avatars.com/api/?name=<?= $active_user['name'] ?>" alt="profile">
                                                    </div>
                                                    <div class="col">
                                                        &nbsp;Lorem ipsum dolor sit.
                                                    </div>
                                                </div>
                                            </a></td>
                                        <td>Lorem ipsum dolor sit.</td>
                                        <td><a target="_blank" href="mailto:">Lorem ipsum dolor sit.</a></td>
                                        <td>
                                            <div class="d-flex gap-1">
                                                <span class="badge">Admin</span>
                                            </div>
                                        </td>
                                        <td>-</td>
                                        <td>
                                            <span>Active</span><br>
                                            <span class="text-muted"><?= date("Y/m/d H:i A") ?></span>
                                        </td>
                                    </tr>
                                    <script>
                                        $("#deleteButton<?= $i ?>").on('click', () => {
                                            $("#deleteConfirmModal input[name=post_id]").val(<?= $i ?>)
                                        })
                                    </script>
                                <?php endfor ?>
                            </tbody>
                        </table>
                        <script>
                            let table = new DataTable('#leadsDataTable', {
                                scrollX: true,
                                paging: false,
                                order: [
                                    [8, 'desc']
                                ],
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>