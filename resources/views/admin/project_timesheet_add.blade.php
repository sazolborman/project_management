<!-- Modal -->
<div class="modal fade" id="addTimesheetModal" tabindex="-1" aria-labelledby="addTimesheetModalLabel" aria-hidden="true">
  <form  action="" method="post" id="add_timesheet_form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" id="project_code" name="project_code" value="{{$project_code}}">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addTimesheetModalLabel"> Add Timesheet</h1>
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
                          >Start Time</label
                          >
                          <input
                          type="time"
                          class="form-control eForm-control"
                          id="start_timestamp"
                          name="start_timestamp"
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eInputText" class="eForm-label"
                          >End Time</label
                          >
                          <input
                          type="time"
                          class="form-control eForm-control"
                          id="end_timestamp"
                          name="end_timestamp"
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
          <button type="submit" class="btn btn-primary add_timesheet">Save Time</button>
          <!-- <input type="submit" name=""> -->
        </div>
      </div>
    </div>
    
  </form>
</div>