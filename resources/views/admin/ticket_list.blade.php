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
                  <h4>Ticket List</h4>
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
                      <th scope="col">Title</th>
                      <th scope="col">Ticket Code</th>
                      <th scope="col">Client</th>
                      <th scope="col">Assigned Staff</th>
                      <th scope="col">Status</th>
                      <th scope="col">Priority</th>
                      <th scope="col">Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($ticket as $key=>$row)
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
                          <p>{{$row->ticket_code}}</p>
                        </div>
                      </td>
                      <td>
                        <div class="dAdmin_info_name">
                          <div class="dAdmin_info_name min-w-100px">
                            <p>{{$row->client_name}}</p>
                          </div>
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
                        <div class="dAdmin_info_name min-w-100px">
                          <p class="eBadge bg-success text-white">{{$row->status}}</p>
                        </div>
                      </td>
                      <td>
                      <div class="dAdmin_info_name min-w-100px ">
                        @if($row->priority == "low")
                          <span class="eBadge ebg-soft-dark">low</span>
                        
                        @elseif($row->priority == "medium")
                          <span class="eBadge ebg-soft-info">medium</span>

                        @else
                          <span class="eBadge ebg-soft-red">high</span>                      
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
                                class="dropdown-item"
                                href="{{route('ticket.view', $row->ticket_code)}}"
                              >View</a
                              >
                            </li>
                            <li>
                              <form  action="{{route('ticket.delete', $row->id)}}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="dropdown-item" type="submit">Delete</button>
                              </form>
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
  @include('admin.client_update')
</body>