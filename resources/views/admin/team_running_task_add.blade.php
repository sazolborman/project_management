@php
$staff = DB::table('staffs')->get();
@endphp
<!-- Modal -->
<div class="modal fade" id="addteamtaskModal" tabindex="-1" aria-labelledby="addteamtaskModalLabel" aria-hidden="true">
  <form  action="" method="post" id="add_teamtask_form" enctype="multipart/form-data">
    @csrf
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addteamtaskModalLabel"> Add New Team Task</h1>
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
                          >Task Title</label
                          >
                          <input
                          type="text"
                          class="form-control eForm-control"
                          id="task_title"
                          name="task_title"
                          placeholder="web development"
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eInputText" class="eForm-label"
                          >Creation Date</label
                          >
                          <input
                          type="date"
                          class="form-control eForm-control"
                          id="creation_timestamp"
                          name="creation_timestamp"
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eInputText" class="eForm-label"
                          >Due Date</label
                          >
                          <input
                          type="date"
                          class="form-control eForm-control"
                          id="due_timestamp"
                          name="due_timestamp"
                          />
                        </div>
                        <div class=" fpb-7">
                          <label for="eInputPassword" class="eForm-label"
                          >Assign Staff</label>
                          <div class="">
                            <select option name="assigned_staff" id="assigned_staff" class="form-control">
                              @foreach($staff as $row)
                              <option value="{{$row->id}}">{{$row->name}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <div class=" fpb-7">
                          <label for="eInputPassword" class="eForm-label"
                          >Task Status</label>
                          <div class="">
                            <select option name="task_status" id="task_status" class="form-control">
                              
                              <option value="1">Running</option>
                              <option value="0">Archived</option>
                              
                            </select>
                          </div>
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
          <button type="submit" class="btn btn-primary add_team_running_task">Submit</button>
        </div>
      </div>
    </div>
    
  </form>
</div>