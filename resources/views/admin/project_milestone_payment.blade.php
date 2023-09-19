
<!-- Modal -->
<div class="modal fade" id="paymentMilestoneModal" tabindex="-1" aria-labelledby="paymentMilestoneModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content w-250">
      <div class="modal-header">
        <h5 class="modal-title" id="paymentMilestoneModalLabel">Make payment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="main_content paymentContent">
      

      <div class="paymentWrap d-flex align-items-start flex-wrap">
        <div class="paymentLeft">
          <p class="payment_tab_title pb-30">Payment Gateway</p>
          <!-- Tab -->
          <div
            class="nav flex-md-column flex-row nav-pills payment_modalTab"
            id="v-pills-tab"
            role="tablist"
            aria-orientation="vertical"
          >
            <div
              class="tabItem active"
              id="v-pills-paypal-tab"
              data-bs-toggle="pill"
              data-bs-target="#v-pills-paypal"
              role="tab"
              aria-controls="v-pills-paypal"
              aria-selected="true"
            >
              <div class="payment_gateway_option d-flex align-items-center">
                <div class="logo">
                  <img src="{{asset('/images/PayPal.png')}}" alt="" />
                </div>
                <div class="info">
                  <p class="card_no">Paypay ******7423</p>
                  <p class="card_date">Card expires at 03/25</p>
                </div>
              </div>
            </div>
            <div
              class="tabItem"
              id="v-pills-offPayment-tab"
              data-bs-toggle="pill"
              data-bs-target="#v-pills-offPayment"
              role="tab"
              aria-controls="v-pills-offPayment"
              aria-selected="false"
            >
              <div class="payment_gateway_option d-flex align-items-center">
                <div class="logo">
                  <img src="{{asset('/images/offline_payment.png')}}" alt="" />
                </div>
                <div class="info">
                  <p class="card_no">Offline payment</p>
                  <p class="card_date">Payment Document</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="paymentRight">
          <p class="payment_tab_title pb-30">Invoice List</p>
          <div class="payment_table">
            <div class="table-responsive">
              <table class="table eTable eTable-2">
                <tbody>
                  <tr>
                    <td>
                      <div class="dAdmin_info_name min-w-100px">
                        <p id="view_milestone_title"></p>
                      </div>
                    </td>
                    <td>
                      <div class="dAdmin_info_name min-w-150px text-end">
                        <p id="view_amount"></p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>
                      <div class="dAdmin_info_name min-w-150px text-end">
                        <p>Grand Total: <span id="view_amount_2"></span></p>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- Content -->
          <div
            class="tab-content payment_modalTab_content"
            id="v-pills-tabContent"
          >
            <div
              class="tab-pane fade show active"
              id="v-pills-paypal"
              role="tabpanel"
              aria-labelledby="v-pills-paypal-tab"
              tabindex="0"
            >
              <a href="#" class="paypal_btn">Pay by paypal</a>
            </div>
            <div
              class="tab-pane fade"
              id="v-pills-offPayment"
              role="tabpanel"
              aria-labelledby="v-pills-offPayment-tab"
              tabindex="0"
            >
              <div class="off_payment_form">
                <div class="payable_amount mb-16">
                  <label for="payableAmount" class="eForm-label"
                    >Payable amount</label
                  >
                  <input
                    type="text"
                    class="form-control eForm-control"
                    id="payableAmount"
                    placeholder="$25"
                    aria-label="$25"
                  />
                </div>
                <div class="payable_document">
                  <label for="payableDocuemnt" class="eForm-label"
                    >Document of your payment (jpg, pdf, txt, png, docx)</label
                  >
                  <input
                    class="form-control eForm-control-file"
                    type="file"
                    id="payableDocuemnt"
                  />
                </div>
              </div>
              <a href="#" class="off_payment_btn">Submit payment doucument</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Paymentslip -->
      <div
        class="modal fade"
        id="paymentModal"
        tabindex="-1"
        aria-labelledby="paymentModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-xl modal-fullscreen-xl-down">
          <div class="modal-content payment_modal_content">
            <div class="modal-header">
              <h5 class="modal-title" id="paymentModalLabel">Make payment</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body payment_modal_body">
              <div
                class="payment_modal_body_content d-flex flex-column flex-xl-row align-items-start"
              >
                <!-- Tab -->
                <div
                  class="nav flex-md-column flex-row nav-pills payment_modalTab"
                  id="v-pills-tab"
                  role="tablist"
                  aria-orientation="vertical"
                >
                  <p class="payment_tab_title">Payment Gateway</p>
                  <div
                    class="tabItem active"
                    id="v-pills-paypal-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#v-pills-paypal"
                    role="tab"
                    aria-controls="v-pills-paypal"
                    aria-selected="true"
                  >
                    <div
                      class="payment_gateway_option d-flex align-items-center"
                    >
                      <div class="logo">
                        <img src="assets/images/PayPal.png" alt="" />
                      </div>
                      <div class="info">
                        <p class="card_no">Paypay ******7423</p>
                        <p class="card_date">Card expires at 03/25</p>
                      </div>
                    </div>
                  </div>
                  <div
                    class="tabItem"
                    id="v-pills-offPayment-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#v-pills-offPayment"
                    role="tab"
                    aria-controls="v-pills-offPayment"
                    aria-selected="false"
                  >
                    <div
                      class="payment_gateway_option d-flex align-items-center"
                    >
                      <div class="logo">
                        <img src="assets/images/offline_payment.png" alt="" />
                      </div>
                      <div class="info">
                        <p class="card_no">Offline payment</p>
                        <p class="card_date">Payment Document</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Content -->
                <div
                  class="tab-content payment_modalTab_content"
                  id="v-pills-tabContent"
                >
                  <p class="payment_tab_title pb-30">Invoice List</p>
                  <div
                    class="tab-pane fade show active"
                    id="v-pills-paypal"
                    role="tabpanel"
                    aria-labelledby="v-pills-paypal-tab"
                    tabindex="0"
                  >
                    <div class="payment_table">
                      <div class="table-responsive">
                        <table class="table eTable eTable-2">
                          <tbody>
                            <tr>
                              <td>
                                <div class="dAdmin_info_name">
                                  <p><span>01</span></p>
                                </div>
                              </td>
                              <td>
                                <div class="dAdmin_info_name min-w-100px">
                                  <p>Test Exam Fee</p>
                                </div>
                              </td>
                              <td>
                                <div
                                  class="dAdmin_info_name min-w-150px text-end"
                                >
                                  <p>$25</p>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="dAdmin_info_name">
                                  <p><span>02</span></p>
                                </div>
                              </td>
                              <td>
                                <div class="dAdmin_info_name">
                                  <p>Test Exam Fee</p>
                                </div>
                              </td>
                              <td>
                                <div
                                  class="dAdmin_info_name min-w-150px text-end"
                                >
                                  <p>$25</p>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="dAdmin_info_name">
                                  <p><span>03</span></p>
                                </div>
                              </td>
                              <td>
                                <div class="dAdmin_info_name">
                                  <p>Test Exam Fee</p>
                                </div>
                              </td>
                              <td>
                                <div
                                  class="dAdmin_info_name min-w-150px text-end"
                                >
                                  <p>$25</p>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td>
                                <div
                                  class="dAdmin_info_name min-w-150px text-end"
                                >
                                  <p><span>Grand Total: $25</span></p>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <a href="#" class="paypal_btn">Pay by paypal</a>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="v-pills-offPayment"
                    role="tabpanel"
                    aria-labelledby="v-pills-offPayment-tab"
                    tabindex="0"
                  >
                    <div class="payment_table">
                      <div class="table-responsive">
                        <table class="table eTable eTable-2">
                          <tbody>
                            <tr>
                              <td>
                                <div class="dAdmin_info_name">
                                  <p><span>01</span></p>
                                </div>
                              </td>
                              <td>
                                <div class="dAdmin_info_name min-w-100px">
                                  <p>Test Exam Fee</p>
                                </div>
                              </td>
                              <td>
                                <div
                                  class="dAdmin_info_name min-w-150px text-end"
                                >
                                  <p>$25</p>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="dAdmin_info_name">
                                  <p><span>02</span></p>
                                </div>
                              </td>
                              <td>
                                <div class="dAdmin_info_name">
                                  <p>Test Exam Fee</p>
                                </div>
                              </td>
                              <td>
                                <div
                                  class="dAdmin_info_name min-w-150px text-end"
                                >
                                  <p>$25</p>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="dAdmin_info_name">
                                  <p><span>03</span></p>
                                </div>
                              </td>
                              <td>
                                <div class="dAdmin_info_name">
                                  <p>Test Exam Fee</p>
                                </div>
                              </td>
                              <td>
                                <div
                                  class="dAdmin_info_name min-w-150px text-end"
                                >
                                  <p>$25</p>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td>
                                <div
                                  class="dAdmin_info_name min-w-150px text-end"
                                >
                                  <p><span>Grand Total: $25</span></p>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="off_payment_form">
                      <div class="payable_amount mb-16">
                        <label for="payableAmount" class="eForm-label"
                          >Payable amount</label
                        >
                        <input
                          type="text"
                          class="form-control eForm-control"
                          id="payableAmount"
                          placeholder="$25"
                          aria-label="$25"
                        />
                      </div>
                      <div class="payable_document">
                        <label for="payableDocuemnt" class="eForm-label"
                          >Document of your payment (jpg, pdf, txt, png,
                          docx)</label
                        >
                        <input
                          class="form-control eForm-control-file"
                          type="file"
                          id="payableDocuemnt"
                        />
                      </div>
                    </div>
                    <a href="#" class="off_payment_btn"
                      >Submit payment doucument</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>