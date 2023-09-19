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
                <h4>Expense Resource</h4>
                <ul class="d-flex align-items-center eBreadcrumb-2">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Expense Resource</a></li>
                  <li><a href="#">Payroll</a></li>
                </ul>
              </div>
              <div class="export-btn-area">
                <a href="#" class="export_btn" data-bs-toggle="modal" data-bs-target="#addExpenseModal">Add New Expense</a>
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
                    <th scope="col">Title</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Date</th>
                    <th scope="col">Option</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($expense as $row)
                  <tr>
                    <td>
                      <div class="dAdmin_info_name min-w-100px">
                        <p>{{$row->title}}</p>
                      </div>
                    </td>
                    <td>
                      <div class="dAdmin_info_name min-w-100px">
                        <p>{{$row->amount}}</p>
                      </div>
                    </td>
                    <td>
                      <div class="dAdmin_info_name">
                        <div class="dAdmin_info_name min-w-100px">
                          <p>{{$row->timestamp}}</p>
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
                              class="dropdown-item update_expense_form"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#updateExpenseModal"
                              data-id="{{$row->id}}"
                              data-title="{{$row->title}}"
                              data-amount="{{$row->amount}}"
                              
                            >Edit</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item delete_expense"
                              href=""
                              data-id="{{$row->id}}"
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

@include('admin.project_expense_add', ['project_code'=>$project_code])
@include('admin.project_expense_update', ['project_code'=>$project_code])
