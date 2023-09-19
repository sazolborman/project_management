@include('admin.project_room')
<table class="w-50 container">
	<tbody>
		@foreach($project as $key=>$row)
		<tr>
			<td>
				<div class="">
					<div class="eCard eCard-special">
						<div class="eCard-body">
							<h5 class="eCard-title">Project Overview</h5>
							<div class="eCard-text">
								<p>{{$row->description}}</p><hr>
							</div>
							<div class="flex-row">
								<i class="las la-calendar">
									<span>{{$row->timestamp_start}}</span> to
									<span>{{$row->timestamp_end}}</span>
								</i>
								<i class="las la-globe"><span>{{$row->demo_url}}</span></i>
								<i class="las la-money-check"><span>budget:{{$row->budget}}</span></i>
							</div>
							<div class="progress eProgress">
                          <div class="progress-bar eProgress-bar eBlue" style="width: 35%;"
                            role="progressbar" aria-valuenow="{{$row->progress_status}}" aria-valuemin="0"
                          aria-valuemax="100">{{$row->progress_status}}</div>
                        </div>
						</div>
					</div>
				</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>