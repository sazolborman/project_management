@include('admin.project_room')
<!-- task part -->
<div class="container w-50">
	<div class="mainSection-title">
		<div class="row">
			<div class="col-12">
				<div
					class="d-flex justify-content-between align-items-center flex-wrap gr-15"
					>
					<div class="d-flex flex-column">
						<h4>Task Schedule</h4>
					</div>
					<div class="export-btn-area">
						<a href="#" class="export_btn"data-bs-toggle="modal" data-bs-target="#addTaskModal">Add New Task</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="att-table mt-5">
		<div class="att-content">
			<div class="att-dayWeek">
				<div class="att-wDay d-flex">
					<div><p>S</p></div>
					<div><p>S</p></div>
					<div><p>M</p></div>
					<div><p>T</p></div>
					<div><p>W</p></div>
					<div><p>T</p></div>
					<div><p>F</p></div>
					<div><p>S</p></div>
					<div><p>S</p></div>
					<div><p>M</p></div>
					<div><p>T</p></div>
					<div><p>W</p></div>
					<div><p>T</p></div>
					<div><p>F</p></div>
					<div><p>S</p></div>
					<div><p>S</p></div>
					<div><p>M</p></div>
					<div><p>T</p></div>
					<div><p>W</p></div>
					<div><p>T</p></div>
					<div><p>F</p></div>
					<div><p>S</p></div>
					<div><p>S</p></div>
					<div><p>M</p></div>
					<div><p>T</p></div>
					<div><p>W</p></div>
					<div><p>T</p></div>
					<div><p>F</p></div>
					<div><p>S</p></div>
					<div><p>S</p></div>
					<div><p>M</p></div>
				</div>
				<div class="att-date d-flex">
					<div><p>1</p></div>
					<div><p>2</p></div>
					<div><p>3</p></div>
					<div><p>4</p></div>
					<div><p>5</p></div>
					<div><p>6</p></div>
					<div><p>7</p></div>
					<div><p>8</p></div>
					<div><p>9</p></div>
					<div><p>10</p></div>
					<div><p>11</p></div>
					<div><p>12</p></div>
					<div><p>13</p></div>
					<div><p>14</p></div>
					<div><p>15</p></div>
					<div><p>16</p></div>
					<div><p>17</p></div>
					<div><p>18</p></div>
					<div><p>19</p></div>
					<div><p>20</p></div>
					<div><p>21</p></div>
					<div><p>22</p></div>
					<div><p>23</p></div>
					<div><p>24</p></div>
					<div><p>25</p></div>
					<div><p>26</p></div>
					<div><p>27</p></div>
					<div><p>28</p></div>
					<div><p>29</p></div>
					<div><p>30</p></div>
					<div><p>31</p></div>
				</div>
			</div>
		</div>
	</div>
	
	<table class="table w-100">
		<tbody>
			@foreach($tasks as $key=>$row)
			<tr>
				<td>
					<div class="col-lg-6">
						<p class="column-title">Accordion Ecample</p>
						<div class="accordion eAccordion" id="accordionExample">
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button collapsed" type="button"
								data-bs-toggle="collapse" data-bs-target="#collapseOne-{{$row->id}}"
								aria-expanded="true" aria-controls="collapseOne-{{$row->id}}">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="{{$row->task_color}}" class="bi bi-circle-fill" viewBox="0 0 16 16">
									<circle cx="8" cy="8" r="8"/>
								</svg>
								{{$row->title}}
								</button>
								</h2>
								<div id="collapseOne-{{$row->id}}" class="accordion-collapse collapse"
									aria-labelledby="headingOne-{{$row->id}}" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<p></p><br><hr>
										<div class="flex-row">
											<p>{{$row->description}}</p>
											<span>{{$row->timestamp_start}}</span> to
											<span>{{$row->timestamp_end}}</span>
											<ul>
												<a href=""
													class="dropdown-item update_task_form"
													href="#"
													data-bs-toggle="modal"
													data-bs-target="#updateTaskModal"
													data-id="{{$row->id}}"
													data-title="{{$row->title}}"
													data-description="{{$row->description}}"
													data-staff_id="{{$row->staff_id}}"
													data-status="{{$row->status}}"
													data-timestamp_start="{{$row->timestamp_start}}"
													data-timestamp_end="{{$row->timestamp_end}}"
													data-task_color="{{$row->task_color}}"
													>
													<li>Edit</li>
												</a>
												<a
													class="dropdown-item delete_task"
													href=""
													data-id="{{$row->id}}"
													><li>Delete</li></a>
												</ul>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@include('admin.project_task_add', ['project_code'=>$project_code])
@include('admin.project_task_update', ['project_code'=>$project_code])
	<!-- task part end -->