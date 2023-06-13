@include('layouts.header')
@include('layouts.slider')
@include('layouts.navigation')
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
                <h4>Project List</h4>
              </div>
              <div class="export-btn-area">
                
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
                    <th scope="col"><br></th>
                    <th scope="col">Project</th>
                    <th scope="col">Client</th>
                    <th scope="col">Company</th>
                    <th scope="col">Progress</th>
                    <th scope="col">Option</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($project as $key=>$row)
                  <tr>
                    <th scope="row">
                      <p class="row-number">{{++$key}}</p>
                    </th>
                    <td>
                      <div class="dAdmin_info_name min-w-100px">
                        <a href="{{route('projectroom.index')}}"><p><span>{{$row->title}}</span></p></a>
                      </div>
                    </td>
                    <td>
                      <div class="dAdmin_info_name min-w-100px">
                        <p>{{$row->client_name}}</p>
                      </div>
                    </td>
                    <td>
                      <div class="dAdmin_info_name">
                        <div class="dAdmin_info_name min-w-100px">
                          <p>{{$row->company_id}}</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="progress eProgress">
                        <div class="progress-bar eProgress-bar eBlue" style="width: 35%;"
                          role="progressbar" aria-valuenow="{{$row->progress_status}}" aria-valuemin="0"
                          aria-valuemax="100">{{$row->progress_status}}</div>
                      </div>
                    </td>
                    <td>
                      <span class="eBadge">

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
                              href="{{route('projectroom.index')}}"
                            >Project Room</a
                            >
                          </li>
                          <li>
                            <form  action="{{route('project.destroy', $row->id)}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="dropdown-item" type="submit">Delete</button>
                                </form>
                          </li>
                          <li>
                            <a
                              class="dropdown-item delete_client"
                              href=""
                              data-id=""
                            >Mark as Archive</a
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
@include('admin.add_client')
@include('admin.client_update')
