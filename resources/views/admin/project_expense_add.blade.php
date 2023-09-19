<div class="modal fade" id="addExpenseModal" tabindex="-1" aria-labelledby="addExpenseModalLabel" aria-hidden="true">
  <form  action="" method="post" id="add_expense_form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" id="project_code" name="project_code" value="{{$project_code}}">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addExpenseModalLabel">Add New Expense</h1>
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
                          id="expense_title"
                          name="expense_title"
                          placeholder="web development"
                          aria-label=""
                          />
                        </div>
                        <div class="fpb-7">
                          <label for="eInputText" class="eForm-label"
                          >Amount</label
                          >
                          <input
                          type="number"
                          class="form-control eForm-control"
                          id="amount"
                          name="amount"
                          placeholder="$100"
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
          <button type="submit" class="btn btn-primary add_expense">Submit</button>
          <!-- <input type="submit" name=""> -->
        </div>
      </div>
    </div>
    
  </form>
</div>
