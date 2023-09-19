
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
                <h4>Payment Milestones</h4>
                <ul class="d-flex align-items-center eBreadcrumb-2">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Milestone Resource</a></li>
                  <li><a href="#">Payroll</a></li>
                </ul>
              </div>
              <div class="export-btn-area">
                <a href="#" class="export_btn" data-bs-toggle="modal" data-bs-target="#addMilestoneModal"> Add New Milestone</a>
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
              <table class="table eTable eTable-2 milestonetable">
                <thead>
                  <tr>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach($milestone as $row)
                  <tr>
                    <td width="1">
                      <div class="dAdmin_info_name min-w-100px">
                        <li class="entypo-dot"> </li>
                      </div>
                    </td>
                    <td>
                      <div class="dAdmin_info_name min-w-100px">
                        <p>{{$row->title}}</p>
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
                      <div class="dAdmin_info_name min-w-100px">
                        <p> {{$row->amount}}</p>
                      </div>
                    </td>

                    <td>
                      <div class="dAdmin_info_name min-w-100px ">
                        @if($row->status == 0)
                          <span class="eBadge ebg-soft-red ">Unpaid</span>
                        
                        @else
                          <span class="eBadge ebg-soft-success">Paid</span>                        
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
                        Action
                        </button>
                        <ul
                          class="dropdown-menu dropdown-menu-end eDropdown-menu-2 eDropdown-table-action"
                          >
                          <li>
                            <a
                              class="dropdown-item view_milestone"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#viewMilestoneModal"
                              data-id="{{$row->id}}"
                              data-title="{{$row->title}}"
                              data-amount="{{$row->amount}}"
                              data-status="{{$row->status}}"
                              data-timestamp="{{$row->timestamp}}"
                              data-note="{{$row->note}}"
                              data-client_id="{{$row->client_id}}"
                            >View/Print/Email</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item view_payment"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#paymentMilestoneModal"
                              data-id="{{$row->id}}"
                              data-title="{{$row->title}}"
                              data-amount="{{$row->amount}}"
                            >Take Manual Payment</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item update_milestone_form"
                              href="#"
                              data-bs-toggle="modal"
                              data-bs-target="#updateMilestoneModal"
                              data-id="{{$row->id}}"
                              data-title="{{$row->title}}"
                              data-amount="{{$row->amount}}"
                              data-status="{{$row->status}}"
                              data-timestamp="{{$row->timestamp}}"
                              data-note="{{$row->note}}"
                            >Edit</a
                            >
                          </li>
                          <li>
                            <a
                              class="dropdown-item delete_milestone"
                              href="#"
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
      <div class="row viewtable">
        <strong class="col-sm-4">Total Amount: {{$sum}}</strong>
        <strong class="col-sm-4">Paid Amount: {{$paid}}</strong>
        <strong class="col-sm-4">Due: {{$unpaid}}</strong>
      </div>
      
      <!-- Start Footer -->
      <div class="copyright-text">
        <p>2022 &copy; <span>By Creativeitem</span></p>
      </div>
      <!-- End Footer -->
    </div>
  </div>
</section>
@include('admin.project_milestone_add', ['project_code'=>$project_code],['client_id'=>$client_id])
@include('admin.project_milestone_update')
@include('admin.project_milestone_payment')
@include('admin.project_milestone_view')



