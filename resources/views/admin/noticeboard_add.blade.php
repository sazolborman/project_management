@php
$user_id = DB::table('users')->value('id');
@endphp
<!-- Modal -->
<div class="modal fade" id="addNoticeboardModal" tabindex="-1" aria-labelledby="addNoticeboardModalLabel" aria-hidden="true">
  <form  action="" method="post" id="add_notice_form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" id="user_id" name="user_id" value="{{$user_id}}">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addNoticeboardModalLabel">Add New Notice</h1>
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
                          id="notice_title"
                          name="title"
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
                              id="notice_description"
                              name="description"
                              placeholder="Type Description"
                            ></textarea>
                          </div>
                        <div class="fpb-7">
                            <label for="eDataList" class="eForm-label"
                              >Visible For</label
                            >
                            <select
                              class="form-select eForm-select eChoice-multiple-without-remove"
                              data-placeholder="Type to search..."
                              id="visible_for"
                              name="visible_for"
                            >
                              <option value="1">All</option>
                              <option value="2">Staffs</option>
                              <option value="3">Clients</option>
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
          <button type="submit" class="btn btn-primary add_notice">Submit</button>
        </div>
      </div>
    </div>
    
  </form>
</div>