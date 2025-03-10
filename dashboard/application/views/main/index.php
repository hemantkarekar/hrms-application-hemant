<div class="page-content">

  <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
      <h4 class="mb-3 mb-md-0">Welcome to the Basic Dashboard</h4>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-xl-12 stretch-card">
      <div class="row flex-grow-1">
        <div class="col-xxl-3 col-xl-4 grid-margin stretch-card">
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
        <div class="col-xxl-6 col-xl-5 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline mb-3">
                <h6 class="card-title mb-0">Punch In</h6>
                <h6 class="card-title mb-0">Punch Out</h6>
              </div>
              <div class="row justify-content-between">
                <div class="col-lg-auto">
                  <h3 class="mb-2">12:00 PM</h3>
                  <button class="btn btn-primary btn-icon-text"><i class="btn-icon-prepend" data-feather="clock"></i>Punch In</button>
                </div>
                <div class="col-lg-auto">
                  <h3 class="mb-2">12:00 PM</h3>
                  <button class="btn btn-primary btn-icon-text"><i class="btn-icon-prepend" data-feather="clock"></i>Punch Out</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 grid-margin stretch-card">
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
      </div>
    </div>
  </div>
  
  <!-- row -->
  <div class="row">
    <div class="col-lg-6 col-12 grid-margin stretch-card">
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
                <?php for ($i = 1; $i < 31; $i++) : ?>
                  <tr>
                    <td><?= date_format(date_create_from_format('Y-m-d', date('Y-m-') . $i), 'F j, Y') ?></td>
                    <td>11:00 AM</td>
                    <td>20:00 PM</td>
                    <td>9</td>
                  </tr>
                <?php endfor ?>
              </tbody>
            </table>
            <script>
              let table = new DataTable('#leadsDataTable');
            </script>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- row -->

  <div class="row">
    <div class="col-lg-7 col-xl-9 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-2">
            <h6 class="card-title mb-0">Monthly sales</h6>
            <div class="dropdown mb-2">
              <a type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
              </div>
            </div>
          </div>
          <p class="text-muted">Sales are activities related to selling or the number of goods or services sold in a given time period.</p>
          <div id="monthlySalesChart"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-5 col-xl-3 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline">
            <h6 class="card-title mb-0">Cloud storage</h6>
            <div class="dropdown mb-2">
              <a type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
              </div>
            </div>
          </div>
          <div id="storageChart"></div>
          <div class="row mb-3">
            <div class="col-6 d-flex justify-content-end">
              <div>
                <label class="d-flex align-items-center justify-content-end tx-10 text-uppercase fw-bolder">Total storage <span class="p-1 ms-1 rounded-circle bg-secondary"></span></label>
                <h5 class="fw-bolder mb-0 text-end">8TB</h5>
              </div>
            </div>
            <div class="col-6">
              <div>
                <label class="d-flex align-items-center tx-10 text-uppercase fw-bolder"><span class="p-1 me-1 rounded-circle bg-primary"></span> Used storage</label>
                <h5 class="fw-bolder mb-0">~5TB</h5>
              </div>
            </div>
          </div>
          <div class="d-grid">
            <button class="btn btn-primary">Upgrade storage</button>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- row -->

</div>