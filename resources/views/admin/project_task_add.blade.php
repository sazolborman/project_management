@php
$staff = DB::table('staffs')->get();
@endphp
<!-- Modal -->
<div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
  <form  action="" method="post" id="add_task_form">
    @csrf
    <input type="hidden" id="project_code" name="project_code" value="{{$project_code}}">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addTaskModalLabel"> Add Project Task</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="eSection-wrap">
              <div class="eMain">
                <div class="">
                  <div class="">
                    <div class="eForm-layouts">
                      <form>
                        <div class="fpb-7">
                          <label for="eInputText" class="eForm-label"
                          >Title</label
                          >
                          <input
                          type="text"
                          class="form-control eForm-control"
                          id="task_title"
                          name="title"
                          placeholder="web design"
                          aria-label="web design"
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eInputTextarea" class="eForm-label"
                          >Description</label
                          >
                          <textarea
                          class="form-control eForm-control"
                          id="task_description"
                          name="description"
                          placeholder="Type description"
                          ></textarea>
                        </div>
                        <div class="fpb-7">
                          <label for="eDataList" class="eForm-label"
                          >Assign Staff</label
                          >
                          <select
                            class="form-select eForm-select eChoice-multiple-without-remove"
                            data-placeholder="Type to search..."
                            id="staff_id" name="staff_id"
                            >
                            @foreach($staff as $row)
                            <option value="{{$row->id}}">{{$row->name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="fpb-7">
                          <label for="eDataList" class="eForm-label"
                          >Status</label
                          >
                          <select
                            class="form-select eForm-select eChoice-multiple-without-remove"
                            data-placeholder="Type to search..."
                            id="status" name="status"
                            >
                            <option value="complete">Complete</option>
                            <option value="incomplete">Incomplete</option>
                          </select>
                        </div>
                        
                        <div class="fpb-7">
                          <label for="eInputURL" class="eForm-label"
                          >Start Date</label
                          >
                          <input
                          type="date"
                          class="form-control eForm-control"
                          id="timestamp_start"
                          name="timestamp_start"
                          placeholder="time"
                          aria-label=""
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eInputURL" class="eForm-label"
                          >End Date</label
                          >
                          <input
                          type="date"
                          class="form-control eForm-control"
                          id="timestamp_end"
                          name="timestamp_end"
                          placeholder="time"
                          aria-label=""
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eDataList" class="eForm-label"
                          >Task Label Color</label
                          >
                          <select
                            class="form-select eForm-select eChoice-multiple-without-remove"
                            data-placeholder="Type to search..."
                            id="task_color" name="task_color"
                            >
                            <option value="#ff0019">Red</option>
                            <option value="#0B6623">Green</option>
                            <option value="#FFFF00">Yellow</option>
                            <option value="#000080">Blue</option>
                            <option value="#FF8000">Orange</option>
                            <option value="#2C3333">Dark</option>
                          </select>
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
          <button type="submit" class="btn btn-primary add_task">Submit</button>
        </div>
      </div>
    </div>
  </form>
</div>