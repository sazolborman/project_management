@include('admin.project_room')
<section class="home-section">
  <div class="home-content">
    <div class="main_content">
      <!-- Mani section header and breadcrumb -->
      <div class="mainSection-title">
        <div class="row">
          <div class="col-12">
            <div
              class="d-flex justify-content-between align-items-center flex-wrap gr-15"
              >
              <div class="d-flex flex-column">
                <h4>Timesheet Resource</h4>
                <ul class="d-flex align-items-center eBreadcrumb-2">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Bug Resource</a></li>
                  <li><a href="#">Payroll</a></li>
                </ul>
              </div>
              <div class="export-btn-area">
                <a href="#" class="export_btn" data-bs-toggle="modal" data-bs-target="#addTimesheetModal">Add New Timesheet</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start Admin area -->
      <div class="row">
        <div class="col-12">
          <div class="eSection-wrap-2">
            <div class="table-responsive border-top">
              <table class="table eTable eTable-2">
                <thead>
                  <tr>
                    <th scope="col">Start</th>
                    <th scope="col">End</th>
                    <th scope="col">Total Time</th>
                    <th scope="col">Option</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($timesheet as $row)
                  <tr>
                    <td>
                      <div class="dAdmin_info_name min-w-100px">
                        <p>{{$row->start_timestamp}}</p>
                      </div>
                    </td>
                    <td>
                      <div class="dAdmin_info_name min-w-100px">
                        <p>{{$row->end_timestamp}}</p>
                      </div>
                    </td>
                    <td>
                      <div class="dAdmin_info_name">
                        <div class="dAdmin_info_name min-w-100px">
                          
                          <p></p>
                          
                        </div>
                      </div>
                    </td>

                    <td>
                      <div class="adminTable-action">
                        <button
                        type="button"
                        class="eBtn eBtn-black dropdown-toggle table-action-btn-2"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        >
                        Actions
                        </button>
                        <ul
                          class="dropdown-menu dropdown-menu-end eDropdown-menu-2 eDropdown-table-action"
                          >
                          <li>
                            <a
                              class="dropdown-item"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#payslipModal"
                            >Profile</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item update_bug_form"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#updateBugModal"
                              
                            >Edit</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item delete_bug"
                              href=""
                              data-id=""
                            >Delete</a
                            >
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                   @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- End Admin area -->
      <!-- Start Footer -->
      <div class="copyright-text">
        <p>2022 &copy; <span>By Creativeitem</span></p>
      </div>
      <!-- End Footer -->
    </div>
  </div>
</section>
@include('admin.project_timesheet_add',['project_code'=>$project_code])


