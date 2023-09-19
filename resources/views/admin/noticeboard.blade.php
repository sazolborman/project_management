@include('layouts.header')
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
                  <h4>Noticeboard</h4>
                </div>
                <div class="export-btn-area">
                  <a href="#" class="export_btn" data-bs-toggle="modal" data-bs-target="#addNoticeboardModal">Add Notice</a>
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
                      <th scope="col">#</th>
                      <th scope="col">Title</th>
                      <th scope="col">Published By</th>
                      <th scope="col">Date Added</th>
                      <th scope="col">Visible For</th>
                      <th scope="col">Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($notice as $key=>$row)
                    <tr>
                      <th scope="row">
                        <p class="row-number">{{++$key}}</p>
                      </th>
                      <td>
                        <div class="dAdmin_info_name min-w-100px">
                          <p>{{$row->title}}</p>
                        </div>
                      </td>
                      <td>
                        <div class="dAdmin_info_name min-w-100px">
                          <p>{{$row->user_name}}</p>
                        </div>
                      </td>
                      <td>
                        <div class="dAdmin_info_name">
                          <div class="dAdmin_info_name min-w-100px">
                            <p>{{$row->date_added}}</p>
                          </div>
                        </div
                      </td>
                      <td>
                        <div class="dAdmin_info_name min-w-100px">
                          @if($row->visible_for == 1)
                          <p>All</p>
                        
                        @elseif($row->visible_for == 2)
                          <p>Staffs</p>

                        @else
                          <p>Clients</p>
                        
                        @endif
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
                                class="dropdown-item view_notice"
                                href="#"
                                data-bs-toggle="modal"
                                data-bs-target="#viewNoticeboardModal"
                                data-id="{{$row->id}}"
                                data-title="{{$row->title}}"
                                data-description="{{$row->description}}"
                                data-published_by="{{$row->user_name}}"
                                data-date_added="{{$row->date_added}}"
                                data-updated_at="{{$row->updated_at}}"
                              >View</a
                              >
                              
                            </li>
                            <li>
                              <a
                                class="dropdown-item update_notice_form"
                                href="#"
                                data-bs-toggle="modal"
                                data-bs-target="#updateNoticeboardModal"
                                data-id="{{$row->id}}"
                                data-title="{{$row->title}}"
                                data-description="{{$row->description}}"
                                data-visible_for="{{$row->visible_for}}"
                              >Edit</a
                              >
                            </li>
                            <li>
                              <a
                                class="dropdown-item delete_notice"
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
  @include('admin.noticeboard_add')
  @include('admin.noticeboard_update')
  @include('admin.noticeboard_view')