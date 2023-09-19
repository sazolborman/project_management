@include('layouts.header')
@include('layouts.slider')
<section class="home-section">
  <div class="home-content">
    @include('layouts.navigation')
    <div class="main_content">
      <!-- Mani section header and breadcrumb -->
      <div class="mainSection-title">
        <div class="row">
          <div class="col-12">
            <div
              class="d-flex justify-content-between align-items-center flex-wrap gr-15"
              >
              <div class="d-flex flex-column eMain">
                <h4>Running Team Tasks</h4>
                <div class="export-btn-area">
                <a href="#" class="export_btn" data-bs-toggle="modal" data-bs-target="#addteamtaskModal">Add New Team Task</a>
              </div>
              <table class="table table-borderless">
                <tbody>
                  @foreach($teamtask as $row)
                  <tr>
                    <td>
                      <div class="export-btn-area mt-2">
                        <a href="#" class="export_btn btn-block"><i class="las la-angle-right"></i>{{$row->title}}</a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start Footer -->
      <div class="copyright-text">
        <p>2022 &copy; <span>By Creativeitem</span></p>
      </div>
      <!-- End Footer -->
    </div>
  </div>
</section>
@include('admin.admin_js')
@include('admin.team_running_task_add')


