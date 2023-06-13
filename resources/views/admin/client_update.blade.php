
<!-- Modal -->
<div class="modal fade" id="updateClientModal" tabindex="-1" aria-labelledby="updateClientModalLabel" aria-hidden="true">
  <form  action="" method="post" id="update_client_form">
    @csrf
    <input type="hidden" id="update_id">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="updateClientModalLabel">update Client</h1>
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
                          @csrf
                          <div class="fpb-7">
                            <label for="eInputText" class="eForm-label"
                              >Name</label
                            >
                            <input
                              type="text"
                              class="form-control eForm-control"
                              id="update_name"
                              name="update_name"
                              placeholder="Abu ishaqk"
                              aria-label="Abu ishaqk"
                            />
                          </div>
                          <div class="fpb-7">
                            <label for="eInputSearch" class="eForm-label"
                              >Email</label
                            >
                            <input
                              type="email"
                              class="form-control eForm-control"
                              id="update_email"
                              name="update_email"
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
                              id="update_password"
                              name="update_password"
                              placeholder="******"
                              aria-label="******"
                            />
                          </div>
                          <div class="fpb-7">
                            <label for="eInputURL" class="eForm-label"
                              >Address</label
                            >
                            <input
                              type="text"
                              class="form-control eForm-control"
                              id="update_address"
                              name="update_address"
                              placeholder="Address"
                              aria-label=""
                            />
                          </div>
                          <div class="fpb-7">
                            <label for="eInputPhone" class="eForm-label"
                              >Phone</label
                            >
                            <input
                              type="number"
                              class="form-control eForm-control"
                              id="update_phone"
                              name="update_phone"
                              placeholder="00 (88) 12345 6789"
                              aria-label="00 (88) 12345 6789"
                            />
                          </div>
                          <div class="fpb-7">
                            <label for="eInputPassword" class="eForm-label"
                              >Website</label
                            >
                            <input
                              type="text"
                              class="form-control eForm-control"
                              id="update_website"
                              name="update_update_website"
                              placeholder="https//:www.xyz.com"
                              aria-label="https//:www.xyz.com"
                            />
                          </div>
                          <div class="fpb-7">
                            <label for="eInputNumber" class="eForm-label"
                              >Skype Id</label
                            >
                            <input
                              type="text"
                              class="form-control eForm-control"
                              id="update_skype_id"
                              name="update_skype_id"
                              placeholder="url"
                              aria-label="url"
                            />
                          </div>
                          <div class="fpb-7">
                            <label for="eInputDateTime" class="eForm-label"
                              >Facebook</label
                            >
                            <input
                              type="text"
                              class="form-control eForm-control"
                              id="update_facebook_profile_link"
                              name="update_facebook_profile_link"
                              placeholder="url"
                            />
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-6 pb-3">
                      <div class="eForm-layouts">
                        <form>
                          <div class="fpb-7">
                            <label for="eInputDate" class="eForm-label"
                              >Linkedin</label
                            >
                            <input
                              type="text"
                              class="form-control eForm-control"
                              id="update_linkedin_profile_link"
                              name="update_linkedin_profile_link"
                              placeholder="url"
                            />
                          </div>
                          <div class="fpb-7">
                            <label for="eInputMonth" class="eForm-label"
                              >Twitter</label
                            >
                            <input
                              type="text"
                              class="form-control eForm-control"
                              id="update_twitter_profile_link"
                              name="update_twitter_profile_link"
                              placeholder="url"
                            />
                          </div>
                          <div class="fpb-7">
                            <label for="eInputWeek" class="eForm-label"
                              >Short Note</label
                            >
                            <input
                              type="text"
                              class="form-control eForm-control"
                              id="update_short_note"
                              name="update_short_note"
                              value="short note"
                            />
                          </div>
                          <div class="fpb-7">
                            <label for="eInputTime" class="eForm-label"
                              >Image</label
                            >
                            <input
                              type="file"
                              class="form-control eForm-control"
                              id="update_image"
                              name="update_image"
                              value="image"
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
        <button type="submit" class="btn btn-primary update_client">Update</button>
      </div>
    </div>
  </div>
  
  </form>
</div>