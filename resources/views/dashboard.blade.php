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
                  <h4>Admins</h4>
                  <ul class="d-flex align-items-center eBreadcrumb-2">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Users</a></li>
                    <li><a href="#">Admin</a></li>
                  </ul>
                </div>
                <div class="export-btn-area">
                  <a href="#" class="export_btn">Create Admin</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Start Admin area -->
        <div class="row">
          <div class="col-12">
            <div class="eSection-wrap-2">
              <!-- Search and filter -->
              <div
                class="search-filter-area d-flex justify-content-md-between justify-content-center align-items-center flex-wrap gr-15"
                >
                <div
                  class="search-input d-flex justify-content-start align-items-center"
                  >
                  <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      viewBox="0 0 16 16"
                      >
                      <path
                        id="Search_icon"
                        data-name="Search icon"
                        d="M2,7A4.951,4.951,0,0,1,7,2a4.951,4.951,0,0,1,5,5,4.951,4.951,0,0,1-5,5A4.951,4.951,0,0,1,2,7Zm12.3,8.7a.99.99,0,0,0,1.4-1.4l-3.1-3.1A6.847,6.847,0,0,0,14,7,6.957,6.957,0,0,0,7,0,6.957,6.957,0,0,0,0,7a6.957,6.957,0,0,0,7,7,6.847,6.847,0,0,0,4.2-1.4Z"
                        fill="#797c8b"
                        />
                      </svg>
                    </span>
                    <input
                    type="text"
                    placeholder="Search user"
                    class="form-control"
                    />
                  </div>
                  <div class="filter-export-area d-flex align-items-center">
                    <div class="position-relative">
                      <button
                      class="eBtn-3 dropdown-toggle"
                      type="button"
                      id="defaultDropdown"
                      data-bs-toggle="dropdown"
                      data-bs-auto-close="true"
                      aria-expanded="false"
                      >
                      <span class="pr-10">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="14.028"
                          height="12.276"
                          viewBox="0 0 14.028 12.276"
                          >
                          <path
                            id="filter-solid"
                            d="M.106,32.627A1.1,1.1,0,0,1,1.1,32H12.934a1.092,1.092,0,0,1,.989.627,1.054,1.054,0,0,1-.164,1.164l-4.99,6.126V43.4a.877.877,0,0,1-1.4.7L5.612,42.786a.871.871,0,0,1-.351-.7V39.917L.248,33.79a1.1,1.1,0,0,1-.142-1.164Z"
                            transform="translate(0 -32)"
                            fill="#00a3ff"
                            />
                          </svg>
                        </span>
                        Filter
                        </button>
                        <div
                          class="dropdown-menu dropdown-menu-end filter-options"
                          aria-labelledby="defaultDropdown"
                          >
                          <h4 class="title">Filter Options</h4>
                          <div class="filter-option d-flex flex-column">
                            <div>
                              <label for="eDataList" class="eForm-label"
                              >Class</label
                              >
                              <select
                                class="form-select"
                                data-placeholder="Type to search..."
                                >
                                <option value="Choice 01">Choice 01</option>
                                <option value="Choice 02">Choice 02</option>
                                <option value="Choice 03">Choice 03</option>
                                <option value="Choice 04">Choice 04</option>
                                <option value="Choice 05">Choice 05</option>
                              </select>
                            </div>
                            <div>
                              <label for="eDataList" class="eForm-label"
                              >Section</label
                              >
                              <select
                                class="form-select"
                                data-placeholder="Type to search..."
                                >
                                <option value="Choice 01">Choice 01</option>
                                <option value="Choice 02">Choice 02</option>
                                <option value="Choice 03">Choice 03</option>
                                <option value="Choice 04">Choice 04</option>
                                <option value="Choice 05">Choice 05</option>
                              </select>
                            </div>
                            <div>
                              <label for="eFilterRoll" class="eForm-label"
                              >Roll</label
                              >
                              <input
                              type="number"
                              class="form-control eForm-control"
                              id="eFilterRoll"
                              placeholder="Your roll"
                              aria-label="Your roll"
                              />
                            </div>
                            <div>
                              <label for="eDataList" class="eForm-label"
                              >Month</label
                              >
                              <select
                                class="form-select"
                                data-placeholder="Type to search..."
                                >
                                <option value="Choice 01">Choice 01</option>
                                <option value="Choice 02">Choice 02</option>
                                <option value="Choice 03">Choice 03</option>
                                <option value="Choice 04">Choice 04</option>
                                <option value="Choice 05">Choice 05</option>
                              </select>
                            </div>
                            <div>
                              <label for="eDataList" class="eForm-label"
                              >Date</label
                              >
                              <select
                                class="form-select"
                                data-placeholder="Type to search..."
                                >
                                <option value="Choice 01">Choice 01</option>
                                <option value="Choice 02">Choice 02</option>
                                <option value="Choice 03">Choice 03</option>
                                <option value="Choice 04">Choice 04</option>
                                <option value="Choice 05">Choice 05</option>
                              </select>
                            </div>
                          </div>
                          <div
                            class="filter-button d-flex justify-content-end align-items-center"
                            >
                            <a href="#" class="eFilter-reset">Reset</a>
                            <a href="#" class="eFilter-apply">Apply</a>
                          </div>
                        </div>
                      </div>
                      <!-- Export Button -->
                      <div class="position-relative">
                        <button
                        class="eBtn-3 dropdown-toggle"
                        type="button"
                        id="defaultDropdown"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="true"
                        aria-expanded="false"
                        >
                        <span class="pr-10">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="12.31"
                            height="10.77"
                            viewBox="0 0 10.771 12.31"
                            >
                            <path
                              id="arrow-right-from-bracket-solid"
                              d="M3.847,1.539H2.308a.769.769,0,0,0-.769.769V8.463a.769.769,0,0,0,.769.769H3.847a.769.769,0,0,1,0,1.539H2.308A2.308,2.308,0,0,1,0,8.463V2.308A2.308,2.308,0,0,1,2.308,0H3.847a.769.769,0,1,1,0,1.539Zm8.237,4.39L9.007,9.007A.769.769,0,0,1,7.919,7.919L9.685,6.155H4.616a.769.769,0,0,1,0-1.539H9.685L7.92,2.852A.769.769,0,0,1,9.008,1.764l3.078,3.078A.77.77,0,0,1,12.084,5.929Z"
                              transform="translate(0 12.31) rotate(-90)"
                              fill="#00a3ff"
                              />
                            </svg>
                          </span>
                          Export
                          </button>
                          <ul
                            class="dropdown-menu dropdown-menu-end eDropdown-menu-2"
                            >
                            <li>
                              <a class="dropdown-item" href="#">PDF</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">ZIP</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">CSV</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive">
                      <table class="table eTable eTable-2">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">USR INFO</th>
                            <th scope="col">OPTIONS</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">
                              <p class="row-number">01</p>
                            </th>
                            <td>
                              <div
                                class="dAdmin_profile d-flex align-items-center min-w-200px"
                                >
                                <div class="dAdmin_profile_img">
                                  <img
                                  class="img-fluid"
                                  width="50"
                                  height="50"
                                  src="{{asset('/images/user.png')}}"
                                  />
                                </div>
                                <div class="dAdmin_profile_name">
                                  <h4>Jony Bristow</h4>
                                  <p>University of Michigan</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="dAdmin_info_name min-w-250px">
                                <p>admin@domain.com</p>
                                <p>jonybristow@domain.com</p>
                              </div>
                            </td>
                            <td>
                              <div class="dAdmin_info_name min-w-250px">
                                <p><span>Phone:</span> + (00) 1234-5678</p>
                                <p>
                                  <span>Address:</span> Melbourne, S/A 120,
                                  Australia
                                </p>
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
                                    <a class="dropdown-item" href="#">Edit</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="#">Delete</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <p class="row-number">02</p>
                            </th>
                            <td>
                              <div
                                class="dAdmin_profile d-flex align-items-center min-w-250px"
                                >
                                <div class="dAdmin_profile_img">
                                  <img
                                  class="img-fluid"
                                  width="50"
                                  height="50"
                                  src="{{asset('/images/user.png')}}"
                                  />
                                </div>
                                <div class="dAdmin_profile_name">
                                  <h4>Jony Bristow</h4>
                                  <p>University of Michigan</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="dAdmin_info_name min-w-250px min-w-200px">
                                <p>admin@domain.com</p>
                                <p>jonybristow@domain.com</p>
                              </div>
                            </td>
                            <td>
                              <div class="dAdmin_info_name min-w-250px min-w-250px">
                                <p><span>Phone:</span> + (00) 1234-5678</p>
                                <p>
                                  <span>Address:</span> Melbourne, S/A 120,
                                  Australia
                                </p>
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
                                    <a class="dropdown-item" href="#">Edit</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="#">Delete</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <p class="row-number">03</p>
                            </th>
                            <td>
                              <div
                                class="dAdmin_profile d-flex align-items-center min-w-200px"
                                >
                                <div class="dAdmin_profile_img">
                                  <img
                                  class="img-fluid"
                                  width="50"
                                  height="50"
                                  src="{{asset('/images/user.png')}}"
                                  />
                                </div>
                                <div class="dAdmin_profile_name">
                                  <h4>Jony Bristow</h4>
                                  <p>University of Michigan</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="dAdmin_info_name min-w-250px">
                                <p>admin@domain.com</p>
                                <p>jonybristow@domain.com</p>
                              </div>
                            </td>
                            <td>
                              <div class="dAdmin_info_name min-w-250px">
                                <p><span>Phone:</span> + (00) 1234-5678</p>
                                <p>
                                  <span>Address:</span> Melbourne, S/A 120,
                                  Australia
                                </p>
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
                                    <a class="dropdown-item" href="#">Edit</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="#">Delete</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <p class="row-number">04</p>
                            </th>
                            <td>
                              <div
                                class="dAdmin_profile d-flex align-items-center min-w-200px"
                                >
                                <div class="dAdmin_profile_img">
                                  <img
                                  class="img-fluid"
                                  width="50"
                                  height="50"
                                  src="{{asset('/images/user.png')}}"
                                  />
                                </div>
                                <div class="dAdmin_profile_name">
                                  <h4>Jony Bristow</h4>
                                  <p>University of Michigan</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="dAdmin_info_name min-w-250px min-w-200px">
                                <p>admin@domain.com</p>
                                <p>jonybristow@domain.com</p>
                              </div>
                            </td>
                            <td>
                              <div class="dAdmin_info_name min-w-250px min-w-200px">
                                <p><span>Phone:</span> + (00) 1234-5678</p>
                                <p>
                                  <span>Address:</span> Melbourne, S/A 120,
                                  Australia
                                </p>
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
                                    <a class="dropdown-item" href="#">Edit</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="#">Delete</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <p class="row-number">05</p>
                            </th>
                            <td>
                              <div
                                class="dAdmin_profile d-flex align-items-center min-w-200px"
                                >
                                <div class="dAdmin_profile_img">
                                  <img
                                  class="img-fluid"
                                  width="50"
                                  height="50"
                                  src="{{asset('/images/user.png')}}"
                                  />
                                </div>
                                <div class="dAdmin_profile_name">
                                  <h4>Jony Bristow</h4>
                                  <p>University of Michigan</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="dAdmin_info_name min-w-250px">
                                <p>admin@domain.com</p>
                                <p>jonybristow@domain.com</p>
                              </div>
                            </td>
                            <td>
                              <div class="dAdmin_info_name min-w-250px">
                                <p><span>Phone:</span> + (00) 1234-5678</p>
                                <p>
                                  <span>Address:</span> Melbourne, S/A 120,
                                  Australia
                                </p>
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
                                    <a class="dropdown-item" href="#">Edit</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="#">Delete</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <p class="row-number">06</p>
                            </th>
                            <td>
                              <div
                                class="dAdmin_profile d-flex align-items-center min-w-200px"
                                >
                                <div class="dAdmin_profile_img">
                                  <img
                                  class="img-fluid"
                                  width="50"
                                  height="50"
                                  src="{{asset('assets/images/user.png')}}"
                                  />
                                </div>
                                <div class="dAdmin_profile_name">
                                  <h4>Jony Bristow</h4>
                                  <p>University of Michigan</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="dAdmin_info_name min-w-250px min-w-200px">
                                <p>admin@domain.com</p>
                                <p>jonybristow@domain.com</p>
                              </div>
                            </td>
                            <td>
                              <div class="dAdmin_info_name min-w-250px min-w-200px">
                                <p><span>Phone:</span> + (00) 1234-5678</p>
                                <p>
                                  <span>Address:</span> Melbourne, S/A 120,
                                  Australia
                                </p>
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
                                    <a class="dropdown-item" href="#">Edit</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="#">Delete</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <p class="row-number">07</p>
                            </th>
                            <td>
                              <div
                                class="dAdmin_profile d-flex align-items-center min-w-200px"
                                >
                                <div class="dAdmin_profile_img">
                                  <img
                                  class="img-fluid"
                                  width="50"
                                  height="50"
                                  src="{{asset('/images/user.png')}}"
                                  />
                                </div>
                                <div class="dAdmin_profile_name">
                                  <h4>Jony Bristow</h4>
                                  <p>University of Michigan</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="dAdmin_info_name min-w-250px min-w-200px">
                                <p>admin@domain.com</p>
                                <p>jonybristow@domain.com</p>
                              </div>
                            </td>
                            <td>
                              <div class="dAdmin_info_name min-w-250px min-w-200px">
                                <p><span>Phone:</span> + (00) 1234-5678</p>
                                <p>
                                  <span>Address:</span> Melbourne, S/A 120,
                                  Australia
                                </p>
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
                                    <a class="dropdown-item" href="#">Edit</a>
                                  </li>
                                  <li>
                                    <a class="dropdown-item" href="#">Delete</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- Data info and Pagination -->
                    <div
                      class="admin-tInfo-pagi d-flex justify-content-md-between justify-content-center align-items-center flex-wrap gr-15"
                      >
                      <p class="admin-tInfo">Showing 1 - 6 from 30 data</p>
                      <div class="admin-pagi">
                        <nav aria-label="Page navigation example">
                          <ul class="pagination epagination-2">
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Previous">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="6"
                                  height="12"
                                  viewBox="0 0 8.414 14.828"
                                  >
                                  <path
                                    id="Path_460"
                                    data-name="Path 460"
                                    d="M15,6,9,12l6,6"
                                    transform="translate(-8 -4.586)"
                                    fill="none"
                                    stroke="#797c8b"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    />
                                  </svg>
                                </a>
                              </li>
                              <li class="page-item">
                                <a class="page-link active" href="#">1</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">2</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">3</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">...</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">29</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">30</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="6"
                                    height="12"
                                    viewBox="0 0 8.414 14.828"
                                    >
                                    <path
                                      id="Path_462"
                                      data-name="Path 462"
                                      d="M9,6l6,6L9,18"
                                      transform="translate(-7.586 -4.586)"
                                      fill="none"
                                      stroke="#797c8b"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      />
                                    </svg>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                          </div>
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
          </body>