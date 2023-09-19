@include('admin.project_room')
<div class="container w-50">
  <div class="">
    <div class="eCard eCard-special">
      <div class="eCard-body">
        <h5 class="eCard-title">Project Notes</h5>
        <form action="" id="add_project_note_form" method="Post" accept-charset="utf-8">
          @csrf
          <input type="hidden" id="update_id">
          <input type="hidden" id="project_code" name="project_code" value="{{$project_code}}">
          <div class="eMain">
            <div class="eCard-text ">
              <div class="row">
                <div class="fpb-7">
                  <textarea
                  class="form-control eForm-control"
                  id="project_note"
                  name="project_note"
                  placeholder="Write project notes....."
                  >{{$project_note}}</textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10">
              <button type="Save Note" class="btn-form add_note">
              Save Note
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>