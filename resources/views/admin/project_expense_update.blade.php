<div class="modal fade" id="updateExpenseModal" tabindex="-1" aria-labelledby="updateExpenseModalLabel" aria-hidden="true">
  <form  action="" method="post" id="update_expense_form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" id="project_code" name="project_code" value="{{$project_code}}">
    <input type="hidden" id="update_id">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="updateExpenseModalLabel">Update New Expense</h1>
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
                          id="update_expense_title"
                          name="update_expense_title"
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eInputText" class="eForm-label"
                          >Amount</label
                          >
                          <input
                          type="number"
                          class="form-control eForm-control"
                          id="update_amount"
                          name="update_amount"
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
          <button type="submit" class="btn btn-primary update_expense">Update</button>
          <!-- <input type="submit" name=""> -->
        </div>
      </div>
    </div>
    
  </form>
</div>