
<!-- Modal -->
<div class="modal fade" id="viewMilestoneModal" tabindex="-1" aria-labelledby="viewMilestoneModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewMilestoneModalLabel">INVOICE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="main_content">
          <!-- Mani section header and breadcrumb -->
          <!-- Start Admin area -->
          <div class="row view">
            <div class="col-12">
              <div class="eSection-wrap-2">
                <!-- Invoice Info -->
                <div
                  class="row flex-wrap justify-content-md-between align-items-start"
                >
                  <div class="col-sm-7">
                    <div class="invoice_details">
                      <div class="item">
                        <p class="title" id="view_client_id">{{$row->client_name}}</p>
                        <p class="sub-title" id="view_client_id">{{$row->client_phone}}</p>
                      </div>
                      <div class="item pt-57">
                        <div class="title">Billing Address</div>
                        <p class="sub-title" id="view_client_id">{{$row->client_address}}</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="invoice_details text-sm-end">
                      <div class="item">
                        <p class="sub-title">Invoice no</p>
                        <div class="title">{{$project_code}}</div>
                      </div>
                      <div class="item">
                        <p class="sub-title">Date</p>
                        <p class="title" id="view_timestamp_1"></p>
                      </div>
                      <span class="eBadge test">
                          <!-- <span class="eBadge ebg-soft-red " id="status">Unpaid</span> -->
                        
                          <!-- <span class="eBadge ebg-soft-success">Paid</span>                         -->
                      </span>
                    </div>
                  </div>
                </div>
                <!-- Invoice Summary -->
                <div class="invoice_summary d-flex flex-column">
                  <div class="invoice_summary_item">
                    <div class="table-responsive">
                      <table class="table eTable eTable-2 tbody-border">
                        <thead>
                          <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Amount</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="dAdmin_info_name min-w-100px">
                                <p id="view_milestone_title_1"></p>
                              </div>
                            </td>
                            <td>
                              <div class="dAdmin_info_name min-w-100px">
                                <p id="view_amount_1"></p>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="salary_table">
                      <div class="table-responsive">
                        <table class="table eTable eTable-2">
                          <tbody>
                            <tr>
                              <td>
                                <div class="dAdmin_info_name">
                                  <p><span>Grand Total</span></p>
                                </div>
                              </td>
                              <td>
                                <div class="dAdmin_info_name">
                                  <p id="view_amount_next"></p>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <a href="#" class="print_invoice_btn">
                  <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16.202"
                      height="16.202"
                      viewBox="0 0 16.202 16.202"
                    >
                      <path
                        id="print-solid"
                        d="M14.176,6.076H2.025A2.026,2.026,0,0,0,0,8.1v3.038a1.013,1.013,0,0,0,1.013,1.013H2.025v3.038A1.013,1.013,0,0,0,3.038,16.2H13.164a1.013,1.013,0,0,0,1.013-1.013V12.151h1.013A1.013,1.013,0,0,0,16.2,11.139V8.1A2.027,2.027,0,0,0,14.176,6.076Zm-2.025,8.1H4.05V11.139h8.1Zm1.519-4.81a.759.759,0,1,1,.759-.759A.76.76,0,0,1,13.67,9.367ZM4.05,2.025h7.262l.839.839v2.2h2.025V2.444a1.012,1.012,0,0,0-.3-.716L12.448.3a1.012,1.012,0,0,0-.714-.3h-8.7A1.013,1.013,0,0,0,2.025,1.013v4.05H4.05Z"
                        fill="#fff"
                      />
                    </svg>
                  </span>
                  <span>Print Invoice</span>
                </a>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>