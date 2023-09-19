<!-- Modal -->
<div class="modal fade" id="updateMilestoneModal" tabindex="-1" aria-labelledby="updateMilestoneModalLabel" aria-hidden="true">
  <form  action="" method="post" id="update_milestone_form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" id="update_id">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="updateMilestoneModalLabel"> Update Project Milestone</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="eSection-wrap">
              <div class="eMain">
                <div class="row">
                  <div class="col-md-12 pb-3">
                    <div class="eForm-layouts">
                      <form>
                        
                        <div class="fpb-7">
                          <label for="eInputText" class="eForm-label"
                          >Title</label
                          >
                          <input
                          type="text"
                          class="form-control eForm-control"
                          id="update_milestone_title"
                          name="update_milestone_title"
                          placeholder="web development"
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eInputText" class="eForm-label"
                          >Amount</label
                          >
                          <input
                          type="number"
                          class="form-control eForm-control"
                          id="update_amount"
                          name="update_amount"
                          placeholder="$100"
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eDataList" class="eForm-label"
                          >Status</label
                          >
                          <select
                            class="form-select eForm-select eChoice-multiple-without-remove"
                            data-placeholder="Type to search..."
                            name="update_status"
                            id="update_status"
                            >
                            <option value="0">Unpaid</option>
                              <option value="1">Paid</option>

                          </select>
                        </div>
                        <div class="fpb-7">
                          <label for="eInputText" class="eForm-label"
                          >Date</label
                          >
                          <input
                          type="date"
                          class="form-control eForm-control"
                          id="update_timestamp"
                          name="update_timestamp"
                          placeholder="web development"
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eInputTextarea" class="eForm-label"
                          >Note</label
                          >
                          <textarea
                          class="form-control eForm-control"
                          id="update_note"
                          name="update_note"
                          placeholder="Type Note"
                          ></textarea>
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
          <button type="submit" class="btn btn-primary update_milestone">Update</button>
          <!-- <input type="submit" name=""> -->
        </div>
      </div>
    </div>
    
  </form>
</div>