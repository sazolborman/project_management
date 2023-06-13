@include('layouts.header')
@include('layouts.slider')
@include('layouts.navigation')
<div class="col-md-6 pb-3 container w-50">
	<p class="column-title">Project Room</p>
	<ul class="nav nav-tabs eNav-Tabs" id="myTab" role="tablist">
		<li class="nav-item" role="presentation">
			<button class="nav-link active" id="dHome-tab" data-bs-toggle="tab"
			data-bs-target="#dHome" type="button" role="tab"
			aria-controls="dHome" aria-selected="true">Dashboard</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="dProfile-tab" data-bs-toggle="tab"
			data-bs-target="#dProfile" type="button" role="tab"
			aria-controls="dProfile" aria-selected="false">Overview</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="dMessage-tab" data-bs-toggle="tab"
			data-bs-target="#dMessage" type="button" role="tab"
			aria-controls="dMessage" aria-selected="false">Wall</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="dSettings-tab" data-bs-toggle="tab"
			data-bs-target="#dSettings" type="button" role="tab"
			aria-controls="dSettings" aria-selected="false">Files</button>
		</li>
		<li class="nav-item" role="presentation">
			<a href="{{route('task.index')}}"><button class="nav-link" id="dtasks-tab" data-bs-toggle="tab"
				data-bs-target="#dtasks" type="button" role="tab"
			aria-controls="dtasks" aria-selected="false">Tasks</button></a>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="dSettings-tab" data-bs-toggle="tab"
			data-bs-target="#dSettings" type="button" role="tab"
			aria-controls="dSettings" aria-selected="false">Bugs/issues</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="dSettings-tab" data-bs-toggle="tab"
			data-bs-target="#dSettings" type="button" role="tab"
			aria-controls="dSettings" aria-selected="false">Timesheet</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="dSettings-tab" data-bs-toggle="tab"
			data-bs-target="#dSettings" type="button" role="tab"
			aria-controls="dSettings" aria-selected="false">payment</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="dSettings-tab" data-bs-toggle="tab"
			data-bs-target="#dSettings" type="button" role="tab"
			aria-controls="dSettings" aria-selected="false">Note</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="dSettings-tab" data-bs-toggle="tab"
			data-bs-target="#dSettings" type="button" role="tab"
			aria-controls="dSettings" aria-selected="false">Expense</button>
		</li>
		
		<li class="nav-item" role="presentation">
			<a href=""><button class="nav-link" id="dedit-tab" data-bs-toggle="tab"
			data-bs-target="#dedit" type="button" role="tab"
			aria-controls="dedit" aria-selected="false">Edit This Project</button></a>
		</li>
		
	</ul>
	<div class="tab-content eNav-Tabs-content" id="myTabContent">
		
		<div class="tab-pane fade" id="dProfile" role="tabpanel"
			aria-labelledby="dProfile-tab">
			<p>Lorem Ipsum available but the majority
				have suffered alteration some form injected humour randomised words
				which don't look even slightly believable If you are going to use
				passage of lorem Ipsum, you need to be sure there isn't anything.
			</p>
		</div>
		<div class="tab-pane fade" id="dMessage" role="tabpanel"
			aria-labelledby="dMessage-tab">
			<p>Lorem Ipsum available but the majority
				have suffered alteration some form injected humour randomised words
				which don't look even slightly believable If you are going to use
				passage of lorem Ipsum, you need to be sure there isn't anything.
			</p>
		</div>
		
		
	</div>
</div>
@include('admin.admin_js')
@include('admin.project_task_add')