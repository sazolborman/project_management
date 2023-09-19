
@include('layouts.header')
@include('layouts.slider')
<section class="home-section">
	<div class="home-content">
		@include('layouts.navigation')
		<div class="row">
			<div class="col-12">
				<div class="eSection-wrap">
					<div class="col-md-12">
						<p class="column-title">Project Room</p>
						<ul class="nav nav-tabs eNav-Tabs-custom" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<a href="{{route('dashboard.index',['project_code' => $project_code])}}"><button class="nav-link {{ (request()->is('project/dashboard/{project_code}')) ? 'active' : '' }}" id="cHome-tab" data-bs-toggle="tab"
								data-bs-target="#cHome" type="button" role="tab"
								aria-controls="cHome" aria-selected="true">
								Dashboard
								<span></span>
								</button></a>
							</li>
							<li class="nav-item" role="presentation">
								<a href="{{route('overview.index',['project_code' => $project_code])}}"><button class="nav-link {{'project/overview/{project_code}' == request()->path() ? 'active':''}}" id="" data-bs-toggle=""
									data-bs-target="" type="button" role="tab"
									aria-controls="" aria-selected="">
									Overview
									<span></span>
								</button></a>
							</li>
							<li class="nav-item active" role="presentation">
								<a href="{{route('wall.index',['project_code' => $project_code])}}"><button class="nav-link active" id="cProfile-tab" data-bs-toggle="tab"
									data-bs-target="#cProfile" type="button" role="tab"
									aria-controls="cProfile" aria-selected="false">
									Wall
									<span></span>
								</button></a>
							</li>
							<li class="nav-item active" role="presentation">
								<a href="{{route('projectfile.index',['project_code' => $project_code])}}"><button class="nav-link" id="cMessage-tab" data-bs-toggle="tab"
									data-bs-target="#cMessage" type="button" role="tab"
									aria-controls="cMessage" aria-selected="false">
									Files
									<span></span>
								</button></a>
							</li>
							<li class="nav-item" role="presentation">
								<a href="{{route('task.index',['project_code' => $project_code])}}"><button class="nav-link" id="cMessage-tab" data-bs-toggle="tab"
									data-bs-target="#cMessage" type="button" role="tab"
									aria-controls="cMessage" aria-selected="false">
									Tasks
									<span></span>
								</button></a>
							</li>
							<li class="nav-item" role="presentation">
								<a href="{{route('bug.index',['project_code' => $project_code])}}"><button class="nav-link" id="cMessage-tab" data-bs-toggle="tab"
									data-bs-target="#cMessage" type="button" role="tab"
									aria-controls="cMessage" aria-selected="false">
									Bugs/issues
									<span></span>
								</button></a>
							</li>
							<li class="nav-item" role="presentation">
								<a href="{{route('timesheet.index',['project_code' => $project_code])}}"><button class="nav-link" id="cMessage-tab" data-bs-toggle="tab"
									data-bs-target="#cMessage" type="button" role="tab"
									aria-controls="cMessage" aria-selected="false">
									Timesheet
									<span></span>
								</button></a>
							</li>
							<li class="nav-item" role="presentation">
								<a href="{{route('milestone.index',['project_code' => $project_code])}}"><button class="nav-link" id="cMessage-tab" data-bs-toggle="tab"
									data-bs-target="#cMessage" type="button" role="tab"
									aria-controls="cMessage" aria-selected="false">
									Payment
									<span></span>
								</button></a>
							</li>
							<li class="nav-item" role="presentation">
								<a  href="{{route('projectnote.index',['project_code' => $project_code])}}"
									class="view_note"
									
									>
									<button class="nav-link" id="cSettings-tab" data-bs-toggle="tab"
									data-bs-target="#cSettings" type="button" role="tab"
									aria-controls="cSettings" aria-selected="false">
									Note
									<span></span>
								</button></a>
							</li>
							<li class="nav-item" role="presentation">
								<a href="{{route('expense.index',['project_code' => $project_code])}}"><button class="nav-link" id="cSettings-tab" data-bs-toggle="tab"
									data-bs-target="#cSettings" type="button" role="tab"
									aria-controls="cSettings" aria-selected="false">
									Expense
									<span></span>
								</button></a>
							</li>
							<li class="nav-item" role="presentation">
								<a href="{{route('edit.project',['project_code' => $project_code])}}"><button class="nav-link" id="cSettings-tab" data-bs-toggle="tab"
									data-bs-target="#cSettings" type="button" role="tab"
									aria-controls="cSettings" aria-selected="false">
									Edit This Project
									<span></span>
								</button></a>
							</li>
						</ul>						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@include('admin.admin_js')