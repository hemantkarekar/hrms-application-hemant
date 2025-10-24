<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<div class="page-content">

  <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
      <h4 class="mb-3 mb-md-0">Welcome to the Basic Dashboard</h4>
    </div>
  </div>

  <div class="row">
    <div class="col-12 grid-margin">
      <div class="row">
        <div class="col-xl-4 grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="row m-0 h-100 align-items-center">
                <div class="col-12">
                  <div class="d-flex gap-2 justify-content-between">
                    <div class="">
                      <div class="mb-3">
                        <h4 class="mb-1">Welcome Back, Hemant!</h4>
                        <p class="tx-18">You have <a href=""><u>4 meetings</u></a> today,</p>
                      </div>
                      <a href="" class="btn btn-primary btn-icon-text">View Profile<i data-feather="arrow-right" class="icon-sm mb-1 btn-icon-append"></i></a>
                    </div>
                    <div class="">
                      <img class="wd-50 ht-50 rounded-circle" src="https://ui-avatars.com/api/?name=Hemant+Karekar" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="row justify-content-between">
                <div class="col-lg-auto">
                  <h6 class="card-title mb-3">Punch In</h6>
                  <h3 class="mb-2">12:00 PM</h3>
                  <button class="btn btn-primary btn-icon-text"><i class="btn-icon-prepend" data-feather="clock"></i>Punch In</button>
                </div>
                <div class="col-lg-auto">
                  <h6 class="card-title mb-3">Punch Out</h6>
                  <h3 class="mb-2">12:00 PM</h3>
                  <button class="btn btn-primary btn-icon-text"><i class="btn-icon-prepend" data-feather="clock"></i>Punch Out</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="d-flex h-100 align-items-center justify-content-center">
                <div class="">
                  <h2 class="digital-clock mb-0"></h2>
                  <h3 class="text-center fw-normal text-secondary"><?= date("F j, Y") ?></h3>
                </div>
              </div>
              <script>
                $(document).ready(function() {
                  clockUpdate();
                  setInterval(clockUpdate, 1000);
                })

                function clockUpdate() {
                  var date = new Date();
                  $('.digital-clock').css({
                    'font-size': '4rem'
                  });

                  function addZero(x) {
                    if (x < 10) {
                      return x = '0' + x;
                    } else {
                      return x;
                    }
                  }

                  function twelveHour(x) {
                    if (x > 24) {
                      return x = x - 24;
                    } else if (x == 0) {
                      return x = 24;
                    } else {
                      return x;
                    }
                  }

                  var h = addZero(twelveHour(date.getHours()));
                  var m = addZero(date.getMinutes());
                  var s = addZero(date.getSeconds());

                  $('.digital-clock').text(h + ':' + m + ':' + s)
                }
              </script>
            </div>
          </div>
        </div>

        <div class="col-12 grid-margin">
          <div class="card">
            <div class="card-body">

            </div>
          </div>
        </div>

        <div class="col-xl-4 grid-margin">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Leaves & Half Days</h6>
                    <div class="dropdown mb-2">
                      <a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                      </div>
                    </div>
                  </div>
                  <div class="row gy-3">
                    <div class="col-xl-6">
                      <h2>200</h2>
                      <p>Sick Leaves (Remaining)</p>
                    </div>
                    <div class="col-xl-6">
                      <h2>200</h2>
                      <p>Paid Leaves (Remaining)</p>
                    </div>
                    <div class="col-xl-6">
                      <h2>200</h2>
                      <p>Comp Off Leaves (Approved)</p>
                    </div>
                    <div class="col-xl-6">
                      <h2>200</h2>
                      <p>Half Days</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Overtimes & Comp-offs</h6>
                    <div class="dropdown mb-2">
                      <a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                      </div>
                    </div>
                  </div>
                  <div class="row gy-3">
                    <div class="col-xl-6">
                      <h2>200</h2>
                      <p>Approved Comp-offs</p>
                    </div>
                    <div class="col-xl-6">
                      <h2>200</h2>
                      <p>Pending Comp-offs</p>
                    </div>
                    <div class="col-xl-6">
                      <h2>200</h2>
                      <p>Approved Overtime</p>
                    </div>
                    <div class="col-xl-6">
                      <h2>200</h2>
                      <p>Pending Overtime</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline mb-2">
                <h6 class="card-title mb-0">Current Attendance (<?= date("F, Y") ?>)</h6>
                <div class="dropdown mb-2">
                  <a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                  </div>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table w-100 table-hover mb-0" id="leadsDataTable">
                  <thead>
                    <tr>
                      <th class="pt-0">Date</th>
                      <th class="pt-0">Punch In</th>
                      <th class="pt-0">Punch Out</th>
                      <th class="pt-0">Hours</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($payroll['attendance'] as $key => $timesheet) : ?>
                      <tr>
                        <td><?= date_format(date_create_from_format('Y-m-d', $timesheet['attendance_date']), 'd F, Y') ?></td>
                        <td><?= $timesheet['timepunchIn'] ?></td>
                        <td><?= $timesheet['timepunchOut'] ?></td>
                        <td><?= $timesheet['hours'] ?></td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
                <script>
                  let table = new DataTable('#leadsDataTable');
                </script>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 grid-margin">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body p-0">
                  <div class="celebrations w-100">
                    Happy Birthday!
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-baseline mb-3">
                    <h6 class="card-title mb-0">Birthdays of the month (<?= date("F, Y") ?>)</h6>
                  </div>
                  <div class="row g-3">
                    <?php if (count($events['birthdays']) == 0) : ?>
                      <i class="text-capitalize text-muted">No upcoming birthdays</i>
                    <?php else: ?>
                      <?php foreach ($events['birthdays'] as $key => $employee) :
                        $name = implode(' ', [$employee['first_name'], $employee['last_name']]);
                        $date = date_format(date_create_from_format("Y-m-d", $employee['dob']), "F j");
                      ?>
                        <div class="col-xl-6 col-12">
                          <div class="row align-items-center">
                            <div class="col-auto">
                              <img src="https://ui-avatars.com/api/?name=<?= $name ?>" class="w-100" alt="">
                            </div>
                            <div class="col">
                              <h5><?= $name ?></h5>
                              <p><?= $date ?></p>
                            </div>
                          </div>
                        </div>
                      <?php endforeach ?>
                    <?php endif ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-baseline mb-3">
                    <h6 class="card-title mb-0">Anniversaries of the month (<?= date("F, Y") ?>)</h6>
                  </div>
                  <div class="row g-3">
                    <?php if (count($events['anniversaries']) == 0) : ?>
                      <i class="text-capitalize text-muted">No upcoming anniversaries</i>
                    <?php else: ?>
                      <?php foreach ($events['anniversaries'] as $key => $employee) :
                        $name = implode(' ', [$employee['first_name'], $employee['last_name']]);
                        $date = date_format(date_create_from_format("Y-m-d", $employee['joining_date']), "F j");
                      ?>
                        <div class="col-xl-6 col-12">
                          <div class="row align-items-center">
                            <div class="col-auto">
                              <img src="https://ui-avatars.com/api/?name=<?= $name ?>" class="w-100" alt="">
                            </div>
                            <div class="col">
                              <h5><?= $name ?></h5>
                              <p><?= $date ?></p>
                            </div>
                          </div>
                        </div>
                      <?php endforeach ?>
                    <?php endif ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-6 grid-margin">
          <div class="card">
            <div class="card-body">
              <h6 class="card-title">Projects</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-6 grid-margin">
          <div class="card">
            <div class="card-body">
              <h6 class="card-title">Tasks</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-12 grid-margin stretch-card">
      <div class="row">

      </div>
    </div>
  </div> <!-- row -->

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</div>