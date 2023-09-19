@include('layouts.header')
<body>
  @include('layouts.slider')
  <section class="home-section">
    <div class="home-content">
      @include('layouts.navigation')
      <div class="main_content">
        <!-- Mani section header and breadcrumb -->
        <div class="mainSection-title">
          <div class="row">
            <div class="col-12">
              <div
                class="d-flex justify-content-between align-items-center flex-wrap gr-15"
                >
                <div class="d-flex flex-column">
                  <h4>Company Resource</h4>
                  <ul class="d-flex align-items-center eBreadcrumb-2">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Company Resource</a></li>
                    <li><a href="#">Payroll</a></li>
                  </ul>
                </div>
                <div class="export-btn-area">
                  <a href="#" class="export_btn" data-bs-toggle="modal" data-bs-target="#addCompanyModal">Add New Company</a>
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
                <table class="table table_1 eTable eTable-2">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Company Logo</th>
                      <th scope="col">Associated person</th>
                      <th scope="col">Website</th>
                      <th scope="col">Contact</th>
                      <th scope="col">Options</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($company as $key=>$row)
                    <tr>
                      <th scope="row">
                        <p class="row-number">{{++$key}}</p>
                      </th>
                      <td>
                        <div class="dAdmin_info_name min-w-100px">
                          <p><span>{{$row->name}}</span></p>
                        </div>
                      </td>
                      <td>
                        <div class="dAdmin_info_name min-w-100px">
                          <p>photo</p>
                        </div>
                      </td>
                      <td>
                        <div class="dAdmin_info_name">
                          <div class="dAdmin_info_name min-w-100px">
                            <p>{{$row->client_name}}</p>
                          </div>
                        </div
                      </td>
                      <td>
                        <div class="dAdmin_info_name min-w-100px">
                          <p>{{$row->website}}</p>
                        </div>
                      </td>
                      <td>
                        <span class="eBadge">
                          <a href="{{$row->email}}"><i class="las la-envelope"></i></a>
                          <a href="{{$row->phone}}"><i class="las la-phone"></i></a>
                        </span>
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
                                class="dropdown-item update_company_form"
                                href="#"
                                data-bs-toggle="modal"
                                data-bs-target="#updateCompanyModal"
                                data-id="{{$row->id}}"
                                data-name="{{$row->name}}"
                                data-email="{{$row->email}}"
                                data-address="{{$row->address}}"
                                data-phone="{{$row->phone}}"
                                data-website="{{$row->website}}"
                                data-client_id="{{$row->client_id}}"
                              >Edit</a
                              >
                            </li>
                            <li>
                              <a
                                class="dropdown-item delete_company"
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
  @include('admin.admin_js')
  @include('admin.company_add')
  @include('admin.company_update')
</body>
</html>