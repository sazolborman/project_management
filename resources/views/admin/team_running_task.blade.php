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
                        <h4>Running Team Tasks</h4>
                        <div class="export-btn-area col-sm-4">
                            <a href="#" class="export_btn" data-bs-toggle="modal"
                                data-bs-target="#addteamtaskModal">Add
                            New Team Task</a>
                        </div>
                    </div>
                </div>
                <div class="table_1 row">
                    <div class="col-md-4">
                        <div class="tab-options mt-4">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                @foreach($teamtask as $row)
                                <button class="nav-link mb-3"
                                id="v-pills-home-tab-{{$row->id}}"
                                data-bs-toggle="pill"
                                data-bs-target="#v-pills-home-{{$row->id}}"
                                type="button" role="tab"
                                aria-controls="v-pills-home-{{$row->id}}"
                                aria-selected="true">
                                {{$row->title}}</button>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content" id="v-pills-tabContent">
                            @foreach($teamtask as $row)
                            <div class="tab-pane fade show" id="v-pills-home-{{$row->id}}"
                                role="tabpanel" aria-labelledby="v-pills-home-tab-{{$row->id}}">
                                
                                <form id="update_task_note-{{$row->id}}">
                                    @csrf
                                    
                                    <div class="eMain">
                                        <div class="eCard-text ">
                                            <div class="row">
                                                <div class="fpb-7">
                                                    <textarea
                                                    class="form-control eForm-control"
                                                    id="task_note"
                                                    name="task_note"
                                                    placeholder="Write project notes.....">@if($row->task_note != ''){{$row->task_note}}@endif</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn-form team-note-update" id="{{$row->id}}">
                                    <span>Save Note</span>
                                    </button>
                                    
                                </form>
                            </div>
                            @endforeach
                            
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