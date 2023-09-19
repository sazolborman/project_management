@php
$client = DB::table('clients')->get();
@endphp
<!-- Modal -->
<div class="modal fade" id="addCompanyModal" tabindex="-1" aria-labelledby="addCompanyModalLabel" aria-hidden="true">
  <form  action="" method="post" id="add_company_form">
    @csrf
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addCompanyModalLabel">Add New Company</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="eSection-wrap">
              <div class="eMain">
                <div class="row">
                  <div class="col-md-6 pb-3">
                    <div class="eForm-layouts">
                      <form>
                        
                        <div class="fpb-7">
                          <label for="eInputText" class="eForm-label"
                          >Name</label
                          >
                          <input
                          type="text"
                          class="form-control eForm-control"
                          id="name"
                          name="name"
                          placeholder="Abu ishaqk"
                          aria-label="Abu ishaqk"
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eInputURL" class="eForm-label"
                          >Address</label
                          >
                          <input
                          type="text"
                          class="form-control eForm-control"
                          id="address"
                          name="address"
                          placeholder="Address"
                          aria-label=""
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eInputPhone" class="eForm-label"
                          >Phone</label
                          >
                          <input
                          type="number"
                          class="form-control eForm-control"
                          id="phone"
                          name="phone"
                          placeholder="00 (88) 12345 6789"
                          aria-label="00 (88) 12345 6789"
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eInputSearch" class="eForm-label"
                          >Email</label
                          >
                          <input
                          type="email"
                          class="form-control eForm-control"
                          id="email"
                          name="email"
                          placeholder="example@email.com"
                          aria-label="example@email.com"
                          />
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6 pb-3">
                    <div class="eForm-layouts">
                      <form id="add_company_form_1">
                        <div class="fpb-7">
                          <label for="eInputPassword" class="eForm-label"
                          >Website</label
                          >
                          <input
                          type="text"
                          class="form-control eForm-control"
                          id="website"
                          name="website"
                          placeholder="https//:www.xyz.com"
                          aria-label="https//:www.xyz.com"
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eDataList" class="eForm-label"
                          >Associated Person</label
                          >
                          <select
                            class="form-select eForm-select eChoice-multiple-without-remove"
                            data-placeholder="Type to search..."
                            id="client_id" name="client_id"
                            >
                            @foreach($client as $row)
                            <option value="{{$row->id}}">{{$row->name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="fpb-7">
                          <label for="eDataList" class="eForm-label"
                          >Company Logo</label
                          >
                          <input
                          class="form-control eForm-control-file eForm-control-file-sm"
                          id="formFileSm"
                          type="file"
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
          <button type="submit" class="btn btn-primary add_company">Submit</button>
        </div>
      </div>
    </div>
    
  </form>
</div>