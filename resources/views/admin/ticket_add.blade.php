@include('layouts.header')
@include('layouts.slider')
<section class="home-section">
  <div class="home-content">
    @include('layouts.navigation')
    <form action="{{route('ticket.store')}}" method="post">
      @csrf
      <div class="container col-md-8">
        <div class="container">
          <h1 class=" mt-5 mb-3 fs-5"> Ticket Form</h1>
          <div class="eSection-wrap">
            <div class="eMain">
              <div class="">
                <div class="">
                  <div class="eForm-layouts">
                    <form>
                      <div class="fpb-7">
                        <label for="eInputText" class="eForm-label"
                        >Ticket Title</label
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
                        <label for="eDataList" class="eForm-label"
                        >Project</label
                        >
                        <select
                          class="form-select eForm-select eChoice-multiple-without-remove"
                          data-placeholder="Type to search..."
                          name="project_code"
                          >
                          @foreach($project as $key=>$row)
                          <option value="{{$row->project_code}}">{{$row->title}}</option>
                          @endforeach
                        </select>
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
                        >Priority</label
                        >
                        <select
                          class="form-select eForm-select eChoice-multiple-without-remove"
                          data-placeholder="Type to search..."
                          name="priority"
                          >
                          <option value="low">Low</option>
                          <option value="medium">Medium</option>
                          <option value="high">High</option>
                        </select>
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
        <button type="submit" class="btn btn-primary">Submit Support Ticket</button>
      </div>
    </form>
  </div>
</section>
@include('admin.admin_js')