<!-- Modal -->
<div class="modal fade" id="addStaffModal" tabindex="-1" aria-labelledby="addStaffModalLabel" aria-hidden="true">
  <form  action="" method="post" id="add_staff_form">
    @csrf
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addStaffModalLabel">Add New Staff</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="eSection-wrap">
              <div class="eMain">
                <div class="row">
                  <div class="col-md-6 pb-3">
                    <div class="eForm-layouts">
                      <form>
                        
                        <div class="fpb-7">
                          <label for="eInputText" class="eForm-label"
                          >Name</label
                          >
                          <input
                          type="text"
                          class="form-control eForm-control"
                          id="name"
                          name="name"
                          placeholder="Abu ishaqk"
                          aria-label="Abu ishaqk"
                          />
                        </div>
                        <div class="fpb-7">
                            <label for="eDataList" class="eForm-label"
                              >Account Role</label
                            >
                            <select
                              class="form-select eForm-select eChoice-multiple-without-remove"
                              data-placeholder="Type to search..."
                              id="account_role_id"
                              name="account_role_id"
                            >
                              <option value="0"></option>
                              <option value="0"></option>
                            </select>
                          </div>
                        <div class="fpb-7">
                          <label for="eInputSearch" class="eForm-label"
                          >Email</label
                          >
                          <input
                          type="email"
                          class="form-control eForm-control"
                          id="email"
                          name="email"
                          placeholder="example@email.com"
                          aria-label="example@email.com"
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eInputEmail" class="eForm-label"
                          >Password</label
                          >
                          <input
                          type="password"
                          class="form-control eForm-control"
                          id="password"
                          name="password"
                          placeholder="******"
                          aria-label="******"
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eInputPhone" class="eForm-label"
                          >Phone</label
                          >
                          <input
                          type="number"
                          class="form-control eForm-control"
                          id="phone"
                          name="phone"
                          placeholder="00 (88) 12345 6789"
                          aria-label="00 (88) 12345 6789"
                          />
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6 pb-3">
                    <div class="eForm-layouts">
                      <form id="add_staff_form_1">
                        <div class="fpb-7">
                          <label for="eInputNumber" class="eForm-label"
                          >Skype Id</label
                          >
                          <input
                          type="text"
                          class="form-control eForm-control"
                          id="skype_id"
                          name="skype_id"
                          placeholder="url"
                          aria-label="url"
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eInputDateTime" class="eForm-label"
                          >Facebook Profile Link</label
                          >
                          <input
                          type="text"
                          class="form-control eForm-control"
                          id="facebook_profile_link"
                          name="facebook_profile_link"
                          placeholder="url"
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eInputDate" class="eForm-label"
                          >Linkedin Profile Link</label
                          >
                          <input
                          type="text"
                          class="form-control eForm-control"
                          id="linkedin_profile_link"
                          name="linkedin_profile_link"
                          placeholder="url"
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eInputMonth" class="eForm-label"
                          >Twitter Profile Link</label
                          >
                          <input
                          type="text"
                          class="form-control eForm-control"
                          id="twitter_profile_link"
                          name="twitter_profile_link"
                          placeholder="url"
                          />
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary add_staff">Submit</button>
        </div>
      </div>
    </div>
    
  </form>
</div>