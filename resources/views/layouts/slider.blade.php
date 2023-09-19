<!--  -->
<div class="sidebar">
  <div class="logo-details">
    <div class="img_wrapper">
      <img src="{{asset('/images/Sidebar_Logo.png')}}" alt="" />
    </div>
    <span class="logo_name">ekattor</span>
  </div>
  <div class="closeIcon">
    <span>close</span>
  </div>
  <ul class="nav-links">
    <!-- sidebar title -->
    <li>
      <a href="#" class="sMenu-title">
        <div class="sidebar_icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.5 16.5">
            <path
              id="Menu_icon"
              data-name="Menu icon"
              d="M11,15a2,2,0,0,1-2-2V11a2,2,0,0,1,2-2h2a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2ZM2,15a2,2,0,0,1-2-2V11A2,2,0,0,1,2,9H4a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2Zm9-9A2,2,0,0,1,9,4V2a2,2,0,0,1,2-2h2a2,2,0,0,1,2,2V4a2,2,0,0,1-2,2ZM2,6A2,2,0,0,1,0,4V2A2,2,0,0,1,2,0H4A2,2,0,0,1,6,2V4A2,2,0,0,1,4,6Z"
              transform="translate(0.75 0.75)"
              stroke-width="1.5"
              />
            </svg>
          </div>
          <span class="link_name">UI Elements</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">UI Elements</a></li>
        </ul>
      </li>
      <!-- Sidebar menu -->
      <li class="nav-links-li {{'dashboard' == request()->path() ? 'showMenu' : ''}}">
        <div class="iocn-link">
          <a href="{{route('dashboard')}}">
            <div class="sidebar_icon">
              <?xml version="1.0"?><svg
                fill="#000000"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                width="48px"
                height="48px"
                >
                <path
                  d="M 6 2 C 4.9057453 2 4 2.9057453 4 4 L 4 20 C 4 21.094255 4.9057453 22 6 22 L 18 22 C 19.094255 22 20 21.094255 20 20 L 20 8 L 14 2 L 6 2 z M 6 4 L 13 4 L 13 9 L 18 9 L 18 20 L 6 20 L 6 4 z M 8 12 L 8 14 L 16 14 L 16 12 L 8 12 z M 8 16 L 8 18 L 16 18 L 16 16 L 8 16 z"
                  />
                </svg>
              </div>
              <span class="link_name">Dashboard</span>
            </a>
          </div>
        </li>
        <li class="nav-links-li {{'client' == request()->path() ? 'showMenu' : ''}}">
          <div class="iocn-link">
            <a href="#">
              <div class="sidebar_icon">
                <?xml version="1.0"?><svg
                  fill="#000000"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  width="48px"
                  height="48px"
                  >
                  <path
                    d="M 6 2 C 4.9057453 2 4 2.9057453 4 4 L 4 20 C 4 21.094255 4.9057453 22 6 22 L 18 22 C 19.094255 22 20 21.094255 20 20 L 20 8 L 14 2 L 6 2 z M 6 4 L 13 4 L 13 9 L 18 9 L 18 20 L 6 20 L 6 4 z M 8 12 L 8 14 L 16 14 L 16 12 L 8 12 z M 8 16 L 8 18 L 16 18 L 16 16 L 8 16 z"
                    />
                  </svg>
                </div>
                <span class="link_name">Clint</span>
              </a>
              <span class="arrow">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="4.743"
                  height="7.773"
                  viewBox="0 0 4.743 7.773"
                  >
                  <path
                    id="navigate_before_FILL0_wght600_GRAD0_opsz24"
                    d="M1.466.247,4.5,3.277a.793.793,0,0,1,.189.288.92.92,0,0,1,0,.643A.793.793,0,0,1,4.5,4.5l-3.03,3.03a.828.828,0,0,1-.609.247.828.828,0,0,1-.609-.247.875.875,0,0,1,0-1.219L2.668,3.886.247,1.466A.828.828,0,0,1,0,.856.828.828,0,0,1,.247.247.828.828,0,0,1,.856,0,.828.828,0,0,1,1.466.247Z"
                    fill="#fff"
                    opacity="1"
                    />
                  </svg>
                </span>
              </div>
              <ul class="sub-menu">
                <li><a class="link_name" href="#">Clint</a></li>
                <li><a href="{{route('client')}}">Person</a></li>
                <li><a href="{{route('company.index')}}">Company</a></li>
              </ul>
            </li>
            <li class="nav-links-li {{'staff' == request()->path() ? 'showMenu' : ''}}">
              <div class="iocn-link">
                <a href="#">
                  <div class="sidebar_icon">
                    <?xml version="1.0"?><svg
                      fill="#000000"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      width="48px"
                      height="48px"
                      >
                      <path
                        d="M 6 2 C 4.9057453 2 4 2.9057453 4 4 L 4 20 C 4 21.094255 4.9057453 22 6 22 L 18 22 C 19.094255 22 20 21.094255 20 20 L 20 8 L 14 2 L 6 2 z M 6 4 L 13 4 L 13 9 L 18 9 L 18 20 L 6 20 L 6 4 z M 8 12 L 8 14 L 16 14 L 16 12 L 8 12 z M 8 16 L 8 18 L 16 18 L 16 16 L 8 16 z"
                        />
                      </svg>
                    </div>
                    <span class="link_name">Team</span>
                  </a>
                  <span class="arrow">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="4.743"
                      height="7.773"
                      viewBox="0 0 4.743 7.773"
                      >
                      <path
                        id="navigate_before_FILL0_wght600_GRAD0_opsz24"
                        d="M1.466.247,4.5,3.277a.793.793,0,0,1,.189.288.92.92,0,0,1,0,.643A.793.793,0,0,1,4.5,4.5l-3.03,3.03a.828.828,0,0,1-.609.247.828.828,0,0,1-.609-.247.875.875,0,0,1,0-1.219L2.668,3.886.247,1.466A.828.828,0,0,1,0,.856.828.828,0,0,1,.247.247.828.828,0,0,1,.856,0,.828.828,0,0,1,1.466.247Z"
                        fill="#fff"
                        opacity="1"
                        />
                      </svg>
                    </span>
                  </div>
                  <ul class="sub-menu">
                    <li><a class="link_name" href="#">Team</a></li>
                    <li><a href="">Admin</a></li>
                    <li><a href="{{route('staff.index')}}">Staff</a></li>
                    <li><a href="#">Premission</a></li>
                  </ul>
                </li>
                <li class="nav-links-li {{ (request()->is('project')) ? 'showMenu' : '' }}">
                  <div class="iocn-link">
                    <a href="#">
                      <div class="sidebar_icon">
                        <?xml version="1.0"?><svg
                          fill="#000000"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="48px"
                          height="48px"
                          >
                          <path
                            d="M 6 2 C 4.9057453 2 4 2.9057453 4 4 L 4 20 C 4 21.094255 4.9057453 22 6 22 L 18 22 C 19.094255 22 20 21.094255 20 20 L 20 8 L 14 2 L 6 2 z M 6 4 L 13 4 L 13 9 L 18 9 L 18 20 L 6 20 L 6 4 z M 8 12 L 8 14 L 16 14 L 16 12 L 8 12 z M 8 16 L 8 18 L 16 18 L 16 16 L 8 16 z"
                            />
                          </svg>
                        </div>
                        <span class="link_name">Client Project</span>
                      </a>
                      <span class="arrow">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="4.743"
                          height="7.773"
                          viewBox="0 0 4.743 7.773"
                          >
                          <path
                            id="navigate_before_FILL0_wght600_GRAD0_opsz24"
                            d="M1.466.247,4.5,3.277a.793.793,0,0,1,.189.288.92.92,0,0,1,0,.643A.793.793,0,0,1,4.5,4.5l-3.03,3.03a.828.828,0,0,1-.609.247.828.828,0,0,1-.609-.247.875.875,0,0,1,0-1.219L2.668,3.886.247,1.466A.828.828,0,0,1,0,.856.828.828,0,0,1,.247.247.828.828,0,0,1,.856,0,.828.828,0,0,1,1.466.247Z"
                            fill="#fff"
                            opacity="1"
                            />
                          </svg>
                        </span>
                      </div>
                      <ul class="sub-menu">
                        <li><a class="link_name" href="#">Client Project</a></li>
                        <li><a href="{{route('project.index')}}">Project List</a></li>
                        <li><a href="{{route('project.create')}}">Create Project</a></li>
                      </ul>
                    </li>
                    <li class="nav-links-li">
                      <div class="iocn-link">
                        <a href="#">
                          <div class="sidebar_icon">
                            <?xml version="1.0"?><svg
                              fill="#000000"
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 24 24"
                              width="48px"
                              height="48px"
                              >
                              <path
                                d="M 6 2 C 4.9057453 2 4 2.9057453 4 4 L 4 20 C 4 21.094255 4.9057453 22 6 22 L 18 22 C 19.094255 22 20 21.094255 20 20 L 20 8 L 14 2 L 6 2 z M 6 4 L 13 4 L 13 9 L 18 9 L 18 20 L 6 20 L 6 4 z M 8 12 L 8 14 L 16 14 L 16 12 L 8 12 z M 8 16 L 8 18 L 16 18 L 16 16 L 8 16 z"
                                />
                              </svg>
                            </div>
                            <span class="link_name">Team Task</span>
                          </a>
                          <span class="arrow">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="4.743"
                              height="7.773"
                              viewBox="0 0 4.743 7.773"
                              >
                              <path
                                id="navigate_before_FILL0_wght600_GRAD0_opsz24"
                                d="M1.466.247,4.5,3.277a.793.793,0,0,1,.189.288.92.92,0,0,1,0,.643A.793.793,0,0,1,4.5,4.5l-3.03,3.03a.828.828,0,0,1-.609.247.828.828,0,0,1-.609-.247.875.875,0,0,1,0-1.219L2.668,3.886.247,1.466A.828.828,0,0,1,0,.856.828.828,0,0,1,.247.247.828.828,0,0,1,.856,0,.828.828,0,0,1,1.466.247Z"
                                fill="#fff"
                                opacity="1"
                                />
                              </svg>
                            </span>
                          </div>
                          <ul class="sub-menu">
                            <li><a class="link_name" href="#">Team Task</a></li>
                            <li><a href="{{route('teamtask.index')}}">Running Tasks</a></li>
                            <li><a href="#">Archived Tasks</a></li>
                          </ul>
                        </li>
                        <li class="nav-links-li {{'calendar/view' == request()->path() ? 'showMenu' : ''}}">
                          <div class="iocn-link">
                            <a href="{{route('calendar.index')}}">
                              <div class="sidebar_icon">
                                <?xml version="1.0"?><svg
                                  fill="#000000"
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 24 24"
                                  width="48px"
                                  height="48px"
                                  >
                                  <path
                                    d="M 6 2 C 4.9057453 2 4 2.9057453 4 4 L 4 20 C 4 21.094255 4.9057453 22 6 22 L 18 22 C 19.094255 22 20 21.094255 20 20 L 20 8 L 14 2 L 6 2 z M 6 4 L 13 4 L 13 9 L 18 9 L 18 20 L 6 20 L 6 4 z M 8 12 L 8 14 L 16 14 L 16 12 L 8 12 z M 8 16 L 8 18 L 16 18 L 16 16 L 8 16 z"
                                    />
                                  </svg>
                                </div>
                                <span class="link_name">Calendar</span>
                              </a>
                            </div>
                          </li>
                          <li class="nav-links-li">
                            <div class="iocn-link">
                              <a href="{{route('noticeboard.index')}}">
                                <div class="sidebar_icon">
                                  <?xml version="1.0"?><svg
                                    fill="#000000"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    width="48px"
                                    height="48px"
                                    >
                                    <path
                                      d="M 6 2 C 4.9057453 2 4 2.9057453 4 4 L 4 20 C 4 21.094255 4.9057453 22 6 22 L 18 22 C 19.094255 22 20 21.094255 20 20 L 20 8 L 14 2 L 6 2 z M 6 4 L 13 4 L 13 9 L 18 9 L 18 20 L 6 20 L 6 4 z M 8 12 L 8 14 L 16 14 L 16 12 L 8 12 z M 8 16 L 8 18 L 16 18 L 16 16 L 8 16 z"
                                      />
                                    </svg>
                                  </div>
                                  <span class="link_name">Noticeboard</span>
                                </a>
                              </div>
                            </li>
                            <li class="nav-links-li">
                              <div class="iocn-link">
                                <a href="#">
                                  <div class="sidebar_icon">
                                    <?xml version="1.0"?><svg
                                      fill="#000000"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 24 24"
                                      width="48px"
                                      height="48px"
                                      >
                                      <path
                                        d="M 6 2 C 4.9057453 2 4 2.9057453 4 4 L 4 20 C 4 21.094255 4.9057453 22 6 22 L 18 22 C 19.094255 22 20 21.094255 20 20 L 20 8 L 14 2 L 6 2 z M 6 4 L 13 4 L 13 9 L 18 9 L 18 20 L 6 20 L 6 4 z M 8 12 L 8 14 L 16 14 L 16 12 L 8 12 z M 8 16 L 8 18 L 16 18 L 16 16 L 8 16 z"
                                        />
                                      </svg>
                                    </div>
                                    <span class="link_name">Message</span>
                                  </a>
                                </div>
                              </li>
                              <li class="nav-links-li">
                                <div class="iocn-link">
                                  <a href="#">
                                    <div class="sidebar_icon">
                                      <?xml version="1.0"?><svg
                                        fill="#000000"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        width="48px"
                                        height="48px"
                                        >
                                        <path
                                          d="M 6 2 C 4.9057453 2 4 2.9057453 4 4 L 4 20 C 4 21.094255 4.9057453 22 6 22 L 18 22 C 19.094255 22 20 21.094255 20 20 L 20 8 L 14 2 L 6 2 z M 6 4 L 13 4 L 13 9 L 18 9 L 18 20 L 6 20 L 6 4 z M 8 12 L 8 14 L 16 14 L 16 12 L 8 12 z M 8 16 L 8 18 L 16 18 L 16 16 L 8 16 z"
                                          />
                                        </svg>
                                      </div>
                                      <span class="link_name">Note</span>
                                    </a>
                                  </div>
                                </li>
                                <li class="nav-links-li">
                                  <div class="iocn-link">
                                    <a href="#">
                                      <div class="sidebar_icon">
                                        <?xml version="1.0"?><svg
                                          fill="#000000"
                                          xmlns="http://www.w3.org/2000/svg"
                                          viewBox="0 0 24 24"
                                          width="48px"
                                          height="48px"
                                          >
                                          <path
                                            d="M 6 2 C 4.9057453 2 4 2.9057453 4 4 L 4 20 C 4 21.094255 4.9057453 22 6 22 L 18 22 C 19.094255 22 20 21.094255 20 20 L 20 8 L 14 2 L 6 2 z M 6 4 L 13 4 L 13 9 L 18 9 L 18 20 L 6 20 L 6 4 z M 8 12 L 8 14 L 16 14 L 16 12 L 8 12 z M 8 16 L 8 18 L 16 18 L 16 16 L 8 16 z"
                                            />
                                          </svg>
                                        </div>
                                        <span class="link_name">Accounting</span>
                                      </a>
                                      <span class="arrow">
                                        <svg
                                          xmlns="http://www.w3.org/2000/svg"
                                          width="4.743"
                                          height="7.773"
                                          viewBox="0 0 4.743 7.773"
                                          >
                                          <path
                                            id="navigate_before_FILL0_wght600_GRAD0_opsz24"
                                            d="M1.466.247,4.5,3.277a.793.793,0,0,1,.189.288.92.92,0,0,1,0,.643A.793.793,0,0,1,4.5,4.5l-3.03,3.03a.828.828,0,0,1-.609.247.828.828,0,0,1-.609-.247.875.875,0,0,1,0-1.219L2.668,3.886.247,1.466A.828.828,0,0,1,0,.856.828.828,0,0,1,.247.247.828.828,0,0,1,.856,0,.828.828,0,0,1,1.466.247Z"
                                            fill="#fff"
                                            opacity="1"
                                            />
                                          </svg>
                                        </span>
                                      </div>
                                      <ul class="sub-menu">
                                        <li><a class="link_name" href="#">Accounting</a></li>
                                        <li><a href="{{route('project.index')}}">Client Payment</a></li>
                                        <li><a href="{{route('project.create')}}">Expense Manager</a></li>
                                        <li><a href="{{route('project.create')}}">Expense Category</a></li>
                                      </ul>
                                    </li>
                                    <li class="nav-links-li">
                                      <div class="iocn-link">
                                        <a href="#">
                                          <div class="sidebar_icon">
                                            <?xml version="1.0"?><svg
                                              fill="#000000"
                                              xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 24 24"
                                              width="48px"
                                              height="48px"
                                              >
                                              <path
                                                d="M 6 2 C 4.9057453 2 4 2.9057453 4 4 L 4 20 C 4 21.094255 4.9057453 22 6 22 L 18 22 C 19.094255 22 20 21.094255 20 20 L 20 8 L 14 2 L 6 2 z M 6 4 L 13 4 L 13 9 L 18 9 L 18 20 L 6 20 L 6 4 z M 8 12 L 8 14 L 16 14 L 16 12 L 8 12 z M 8 16 L 8 18 L 16 18 L 16 16 L 8 16 z"
                                                />
                                              </svg>
                                            </div>
                                            <span class="link_name">Report</span>
                                          </a>
                                          <span class="arrow">
                                            <svg
                                              xmlns="http://www.w3.org/2000/svg"
                                              width="4.743"
                                              height="7.773"
                                              viewBox="0 0 4.743 7.773"
                                              >
                                              <path
                                                id="navigate_before_FILL0_wght600_GRAD0_opsz24"
                                                d="M1.466.247,4.5,3.277a.793.793,0,0,1,.189.288.92.92,0,0,1,0,.643A.793.793,0,0,1,4.5,4.5l-3.03,3.03a.828.828,0,0,1-.609.247.828.828,0,0,1-.609-.247.875.875,0,0,1,0-1.219L2.668,3.886.247,1.466A.828.828,0,0,1,0,.856.828.828,0,0,1,.247.247.828.828,0,0,1,.856,0,.828.828,0,0,1,1.466.247Z"
                                                fill="#fff"
                                                opacity="1"
                                                />
                                              </svg>
                                            </span>
                                          </div>
                                          <ul class="sub-menu">
                                            <li><a class="link_name" href="#">Report</a></li>
                                            <li><a href="{{route('project.index')}}">Project Report</a></li>
                                            <li><a href="{{route('project.create')}}">Client Report</a></li>
                                            <li><a href="{{route('project.create')}}">Expense Report</a></li>
                                            <li><a href="{{route('project.create')}}">Income Expense Comparison</a></li>
                                          </ul>
                                        </li>
                                        <li class="nav-links-li">
                                          <div class="iocn-link">
                                            <a href="#">
                                              <div class="sidebar_icon">
                                                <?xml version="1.0"?><svg
                                                  fill="#000000"
                                                  xmlns="http://www.w3.org/2000/svg"
                                                  viewBox="0 0 24 24"
                                                  width="48px"
                                                  height="48px"
                                                  >
                                                  <path
                                                    d="M 6 2 C 4.9057453 2 4 2.9057453 4 4 L 4 20 C 4 21.094255 4.9057453 22 6 22 L 18 22 C 19.094255 22 20 21.094255 20 20 L 20 8 L 14 2 L 6 2 z M 6 4 L 13 4 L 13 9 L 18 9 L 18 20 L 6 20 L 6 4 z M 8 12 L 8 14 L 16 14 L 16 12 L 8 12 z M 8 16 L 8 18 L 16 18 L 16 16 L 8 16 z"
                                                    />
                                                  </svg>
                                                </div>
                                                <span class="link_name">Client Support</span>
                                              </a>
                                              <span class="arrow">
                                                <svg
                                                  xmlns="http://www.w3.org/2000/svg"
                                                  width="4.743"
                                                  height="7.773"
                                                  viewBox="0 0 4.743 7.773"
                                                  >
                                                  <path
                                                    id="navigate_before_FILL0_wght600_GRAD0_opsz24"
                                                    d="M1.466.247,4.5,3.277a.793.793,0,0,1,.189.288.92.92,0,0,1,0,.643A.793.793,0,0,1,4.5,4.5l-3.03,3.03a.828.828,0,0,1-.609.247.828.828,0,0,1-.609-.247.875.875,0,0,1,0-1.219L2.668,3.886.247,1.466A.828.828,0,0,1,0,.856.828.828,0,0,1,.247.247.828.828,0,0,1,.856,0,.828.828,0,0,1,1.466.247Z"
                                                    fill="#fff"
                                                    opacity="1"
                                                    />
                                                  </svg>
                                                </span>
                                              </div>
                                              <ul class="sub-menu">
                                                <li><a class="link_name" href="#">Client Support</a></li>
                                                <li><a href="{{route('ticket.index')}}">Ticket List</a></li>
                                                <li><a href="{{route('ticket.create')}}">Create Ticket</a></li>
                                                <li><a href="">Macro</a></li>
                                              </ul>
                                            </li>
                                            <li class="nav-links-li">
                                              <div class="iocn-link">
                                                <a href="#">
                                                  <div class="sidebar_icon">
                                                    <?xml version="1.0"?><svg
                                                      fill="#000000"
                                                      xmlns="http://www.w3.org/2000/svg"
                                                      viewBox="0 0 24 24"
                                                      width="48px"
                                                      height="48px"
                                                      >
                                                      <path
                                                        d="M 6 2 C 4.9057453 2 4 2.9057453 4 4 L 4 20 C 4 21.094255 4.9057453 22 6 22 L 18 22 C 19.094255 22 20 21.094255 20 20 L 20 8 L 14 2 L 6 2 z M 6 4 L 13 4 L 13 9 L 18 9 L 18 20 L 6 20 L 6 4 z M 8 12 L 8 14 L 16 14 L 16 12 L 8 12 z M 8 16 L 8 18 L 16 18 L 16 16 L 8 16 z"
                                                        />
                                                      </svg>
                                                    </div>
                                                    <span class="link_name">Addons</span>
                                                  </a>
                                                  <span class="arrow">
                                                    <svg
                                                      xmlns="http://www.w3.org/2000/svg"
                                                      width="4.743"
                                                      height="7.773"
                                                      viewBox="0 0 4.743 7.773"
                                                      >
                                                      <path
                                                        id="navigate_before_FILL0_wght600_GRAD0_opsz24"
                                                        d="M1.466.247,4.5,3.277a.793.793,0,0,1,.189.288.92.92,0,0,1,0,.643A.793.793,0,0,1,4.5,4.5l-3.03,3.03a.828.828,0,0,1-.609.247.828.828,0,0,1-.609-.247.875.875,0,0,1,0-1.219L2.668,3.886.247,1.466A.828.828,0,0,1,0,.856.828.828,0,0,1,.247.247.828.828,0,0,1,.856,0,.828.828,0,0,1,1.466.247Z"
                                                        fill="#fff"
                                                        opacity="1"
                                                        />
                                                      </svg>
                                                    </span>
                                                  </div>
                                                  <ul class="sub-menu">
                                                    <li><a class="link_name" href="#">Addons</a></li>
                                                    <li><a href="{{route('project.index')}}">Addons Manager</a></li>
                                                    <li><a href="{{route('project.create')}}">Available Addons</a></li>
                                                  </ul>
                                                </li>
                                                <li class="nav-links-li">
                                                  <div class="iocn-link">
                                                    <a href="#">
                                                      <div class="sidebar_icon">
                                                        <?xml version="1.0"?><svg
                                                          fill="#000000"
                                                          xmlns="http://www.w3.org/2000/svg"
                                                          viewBox="0 0 24 24"
                                                          width="48px"
                                                          height="48px"
                                                          >
                                                          <path
                                                            d="M 6 2 C 4.9057453 2 4 2.9057453 4 4 L 4 20 C 4 21.094255 4.9057453 22 6 22 L 18 22 C 19.094255 22 20 21.094255 20 20 L 20 8 L 14 2 L 6 2 z M 6 4 L 13 4 L 13 9 L 18 9 L 18 20 L 6 20 L 6 4 z M 8 12 L 8 14 L 16 14 L 16 12 L 8 12 z M 8 16 L 8 18 L 16 18 L 16 16 L 8 16 z"
                                                            />
                                                          </svg>
                                                        </div>
                                                        <span class="link_name">Settings</span>
                                                      </a>
                                                      <span class="arrow">
                                                        <svg
                                                          xmlns="http://www.w3.org/2000/svg"
                                                          width="4.743"
                                                          height="7.773"
                                                          viewBox="0 0 4.743 7.773"
                                                          >
                                                          <path
                                                            id="navigate_before_FILL0_wght600_GRAD0_opsz24"
                                                            d="M1.466.247,4.5,3.277a.793.793,0,0,1,.189.288.92.92,0,0,1,0,.643A.793.793,0,0,1,4.5,4.5l-3.03,3.03a.828.828,0,0,1-.609.247.828.828,0,0,1-.609-.247.875.875,0,0,1,0-1.219L2.668,3.886.247,1.466A.828.828,0,0,1,0,.856.828.828,0,0,1,.247.247.828.828,0,0,1,.856,0,.828.828,0,0,1,1.466.247Z"
                                                            fill="#fff"
                                                            opacity="1"
                                                            />
                                                          </svg>
                                                        </span>
                                                      </div>
                                                      <ul class="sub-menu">
                                                        <li><a class="link_name" href="#">Settings</a></li>
                                                        <li><a href="{{route('project.index')}}">System Settings</a></li>
                                                        <li><a href="{{route('project.create')}}">Email Template</a></li>
                                                        <li><a href="{{route('project.create')}}">Smtp Settings</a></li>
                                                        <li><a href="{{route('project.create')}}">Payment Settings</a></li>
                                                        <li><a href="{{route('project.create')}}">Language Settings</a></li>
                                                        <li><a href="{{route('project.create')}}">About</a></li>
                                                      </ul>
                                                    </li>
                                                  </ul>
                                                </div>