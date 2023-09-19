<!-- Modal -->
<div class="modal fade" id="addMilestoneModal" tabindex="-1" aria-labelledby="addMilestoneModalLabel" aria-hidden="true">
  <form  action="" method="post" id="add_milestone_form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" id="project_code" name="project_code" value="{{$project_code}}">
    <input type="hidden" id="client_id" name="client_id" value="{{$client_id}}">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addMilestoneModalLabel"> Add Project Milestone</h1>
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
                          id="milestone_title"
                          name="milestone_title"
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
                          id="amount"
                          name="amount"
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
                            name="status"
                            id="status"
                            >
                            <option value="0">Unpaid</option>
                          </select>
                        </div>
                        <div class="fpb-7">
                          <label for="eInputText" class="eForm-label"
                          >Date</label
                          >
                          <input
                          type="date"
                          class="form-control eForm-control"
                          id="timestamp"
                          name="timestamp"
                          placeholder="web development"
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eInputTextarea" class="eForm-label"
                          >Note</label
                          >
                          <textarea
                          class="form-control eForm-control"
                          id="note"
                          name="note"
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
          <button type="submit" class="btn btn-primary add_milestone">Submit</button>
          <!-- <input type="submit" name=""> -->
        </div>
      </div>
    </div>
    
  </form>
</div>