@php
$staff = DB::table('staffs')->get();
@endphp
<!-- Modal -->

<div class="modal fade" id="updateBugModal" tabindex="-1" aria-labelledby="updateBugModalLabel" aria-hidden="true">
  <form  action="" method="post" id="update_bug_form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" id="update_id">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="updateBugModalLabel">Update Bug</h1>
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
                          id="update_bug_title"
                          name="update_bug_title"
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eInputTextarea" class="eForm-label"
                          >Description</label
                          >
                          <textarea
                          class="form-control eForm-control"
                          id="update_bug_description"
                          name="update_bug_description"
                          ></textarea>
                        </div>
                        <div class="fpb-7">
                          <label for="eDataList" class="eForm-label"
                          >Assign Staff</label
                          >
                          <select
                            class="form-select eForm-select eChoice-multiple-without-remove"
                            data-placeholder="Type to search..."
                            name="update_assigned_staff"
                            id="update_assigned_staff"
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
                            name="update_status"
                            id="update_status"
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
                            id="formFile"
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
          <button type="submit" class="btn btn-primary update_bug">Update</button>
        </div>
      </div>
    </div>
    
  </form>
</div>