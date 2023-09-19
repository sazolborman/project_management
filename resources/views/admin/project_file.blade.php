@include('admin.project_room')
<div class="container w-50">
  <div class="">
    <div class="eCard eCard-special">
      <div class="eCard-body">
        <h5 class="eCard-title">Upload Files</h5>
        <form action="" id="add_wall_form" method="Post" accept-charset="utf-8">
          @csrf
          <input type="hidden" id="project_code" name="project_code" value="{{$project_code}}">
          <div class="align-middle">
          <div class="eCard-text ">
            <div class="eMain">
              <div class="row">
                <div class="col-8 pb-3">
                  <div class="eForm-sizing">
                    <div>
                      <label for="formLargeInput" class="eForm-label"
                      >Short Note</label
                      >
                      <input
                      class="form-control eForm-control-lg eForm-control"
                      id="formLargeInput"
                      type="text"
                      placeholder="Short Note"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-3 col-sm-4">
              <input
              class="form-control eForm-control-file eForm-control-file-sm"
              id="formFileSm"
              type="file"
              />
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10">
              <button type="submit" class="btn-form">
              Upload
              </button>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>