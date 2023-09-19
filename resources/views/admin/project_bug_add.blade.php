@php
$staff = DB::table('staffs')->get();
$project_code = DB::table('projects')->where('id', $project_code)->value('project_code');
$user_id = DB::table('users')->get();
@endphp
<!-- Modal -->
<div class="modal fade" id="addBugModal" tabindex="-1" aria-labelledby="addBugModalLabel" aria-hidden="true">
  <form  action="" method="post" id="add_bug_form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" id="project_code" name="project_code" value="{{$project_code}}">
    @foreach($user_id as $row)
    <input type="hidden" id="user_id" name="user_id" value="{{$row->id}}">
    @endforeach
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addBugModalLabel">Add New Bug</h1>
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
                          id="bug_title"
                          name="bug_title"
                          placeholder="web development"
                          aria-label=""
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eInputTextarea" class="eForm-label"
                          >Description</label
                          >
                          <textarea
                          class="form-control eForm-control"
                          id="bug_description"
                          name="bug_description"
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
                            name="assigned_staff"
                            id="assigned_staff"
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
                            name="status"
                            id="status"
                            >
                            <option value="0">Pending</option>
                            <option value="1">Solved</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="formFile" class="eForm-label"
                            >Select File</label
                          >
                          <input
                            class="form-control eForm-control-file"
                            type="file"
                            name="bug_file" 
                            id="bug_file"
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
          <button type="submit" class="btn btn-primary add_bug">Submit</button>
          <!-- <input type="submit" name=""> -->
        </div>
      </div>
    </div>
    
  </form>
</div>