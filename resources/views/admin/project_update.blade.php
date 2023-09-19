@include('admin.project_room')
<!-- Edit part -->
<div class="container w-50">
	<form action="{{route('update.project',['project_code' => $project_code])}}" method="post">
		@csrf
		<input type="hidden" id="update_id">
		<div class="">
			<div class="">
				<h1 class=" mt-5 fs-5">Edit Project</h1>
				<div class="eSection-wrap">
					<div class="eMain">
						<div class="">
							<div class="">
								<div class="eForm-layouts">
									<form>
										@foreach($project as $key=>$rew)
										<div>
											
											<div class="fpb-7">
												<label for="eInputText" class="eForm-label"
												>Project Title</label
												>
												<input
												type="text"
												class="form-control eForm-control"
												id="title"
												name="title"
												value="{{$rew->title}}"
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
												value="{{$rew->description}}"
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
												value="{{$rew->budget}}"
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
												value="{{$rew->timestamp_start}}"
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
												value="{{$rew->timestamp_end}}"
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
												value="{{$rew->demo_url}}"
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
												value="{{$rew->progress_status}}"
												/>
											</div>
											
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
												<option value="{{$row->id}}" @if($row->id == $rew->client_id) selected @endif>{{$row->name}}</option>
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
												<option value="{{$row->id}}" @if($row->id == $rew->staffs) selected @endif>{{$row->name}}</option>
												@endforeach
											</select>
										</div>
										@endforeach
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Update Project</button>
		</div>
	</form>
</div>
<!-- Edit part end-->