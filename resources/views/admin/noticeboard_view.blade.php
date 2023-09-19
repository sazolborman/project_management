
<!-- Modal -->
<div class="modal fade" id="viewNoticeboardModal" tabindex="-1" aria-labelledby="viewNoticeboardModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewNoticeboardModalLabel">Notice Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <div class="eSection-wrap-2">
              <div class="">
                <form>
                  @csrf
                  <input type="hidden" id="view_id">
                  <table class="eTable">
                  <tbody >
                    <tr class="row">
                      <td class="col-12">
                        <h6 id="view_title"></h6>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p id="view_description"></p>
                      </td>
                    </tr>
                    <tr>
                      <th class="">
                        <div class="row">
                          <p class="font-weight-bold col-sm-6 ">Published By:</p>
                          <div class="col-sm-6">
                            <p id="view_published_by"></p>
                          </div>
                        </div>
                        <div class="row">
                          <p class="font-weight-bold col-sm-6 ">Date Added:</p>
                          <div class="col-sm-6">
                            <p id="view_date_added"></p>
                          </div>
                        </div>
                        <div class="row">
                          <p class="font-weight-bold col-sm-6 ">Date Added:</p>
                          <div class="col-sm-6">
                            <p id="view_updated_at"></p>
                          </div>
                        </div>
                      </th>
                    </tr>
                  </tbody>
                </table>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>