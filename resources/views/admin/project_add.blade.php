@include('layouts.header')
@include('layouts.slider')
<section class="home-section">
  <div class="home-content">
    @include('layouts.navigation')
    <form action="{{route('project.store')}}" method="post">
      @csrf
      <div class="container col-md-8">
        <div class="container">
          <h1 class=" mt-5 fs-5">Create Project</h1>
          <div class="eSection-wrap">
            <div class="eMain">
              <div class="">
                <div class="">
                  <div class="eForm-layouts">
                    <form>
                      <div class="fpb-7">
                        <label for="eInputText" class="eForm-label"
                        >Project Title</label
                        >
                        <input
                        type="text"
                        class="form-control eForm-control"
                        id="title"
                        name="title"
                        placeholder="Abu ishaqk"
                        aria-label="Abu ishaqk"
                        />
                      </div>
                      <div class="fpb-7">
                        <label for="eInputTextarea" class="eForm-label"
                        >Description</label
                        >
                        <textarea
                        class="form-control eForm-control"
                        id="description"
                        name="description"
                        placeholder="Type description"
                        ></textarea>
                      </div>
                      <div class="fpb-7">
                        <label for="eInputEmail" class="eForm-label"
                        >Budget</label
                        >
                        <input
                        type="number"
                        class="form-control eForm-control"
                        id="budget"
                        name="budget"
                        placeholder="600$"
                        aria-label="100$"
                        />
                      </div>
                      <div class="fpb-7">
                        <label for="eInputURL" class="eForm-label"
                        >Start Time</label
                        >
                        <input
                        type="date"
                        class="form-control eForm-control"
                        id="start_time"
                        name="timestamp_start"
                        placeholder="time"
                        aria-label=""
                        />
                      </div>
                      <div class="fpb-7">
                        <label for="eInputPhone" class="eForm-label"
                        >Ending Time</label
                        >
                        <input
                        type="date"
                        class="form-control eForm-control"
                        id="ending_time"
                        name="timestamp_end"
                        placeholder="time"
                        aria-label=""
                        />
                      </div>
                      <div class="fpb-7">
                        <label for="eInputPassword" class="eForm-label"
                        >Demo Url</label
                        >
                        <input
                        type="text"
                        class="form-control eForm-control"
                        id="url"
                        name="demo_url"
                        placeholder="https//:www.xyz.com"
                        aria-label="https//:www.xyz.com"
                        />
                      </div>
                      <div class="fpb-7">
                        <label for="eInputPhone" class="eForm-label"
                        >Progress Status</label
                        >
                        <input
                        type="number"
                        class="form-control eForm-control"
                        id="progress_status"
                        name="progress_status"
                        placeholder="100%"
                        aria-label=""
                        />
                      </div>
                      <div class="fpb-7">
                        <label for="eDataList" class="eForm-label"
                        >Client</label
                        >
                        <select
                          class="form-select eForm-select eChoice-multiple-without-remove"
                          data-placeholder="Type to search..."
                          name="client_id"
                          >
                          @foreach($client as $key=>$row)
                          <option value="{{$row->id}}">{{$row->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="fpb-7">
                        <label for="eDataList" class="eForm-label"
                        >Company</label
                        >
                        <select
                          class="form-select eForm-select eChoice-multiple-without-remove"
                          data-placeholder="Type to search..."
                          name="company_id"
                          >
                          
                        </select>
                      </div>
                      <div class="fpb-7">
                        <label for="eDataList" class="eForm-label"
                        >Assign Staff</label
                        >
                        <select
                          class="form-select eForm-select eChoice-multiple-without-remove"
                          data-placeholder="Type to search..."
                          name="staffs"
                          >
                          @foreach($staff as $key=>$row)
                          <option value="{{$row->id}}">{{$row->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Add New Project</button>
      </div>
    </form>
  </div>
</section>
@include('admin.admin_js')