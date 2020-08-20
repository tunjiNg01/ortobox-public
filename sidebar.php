<!-- drawer -->
        <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
            <div class="mdk-drawer__content">
                <div class="sidebar sidebar-dark sidebar-left" data-perfect-scrollbar>


                    <!-- Navbar toggler -->
                    <a href="javascript:void(0)" class="navbar-toggler navbar-toggler-right navbar-toggler-custom d-flex align-items-center justify-content-center position-absolute right-0 top-0" data-toggle="tooltip" data-title="Switch to Compact Vertical Layout" data-placement="right" data-boundary="window">
                        <span class="material-icons">sync_alt</span>
                    </a>


                    <a href="http://localhost:8012/erp" class="sidebar-brand">
                        <img class="sidebar-brand-icon" src="assets/images/logo/accent-teal-100@2x.png" alt="Ortorbox">
                        <span>Ortorbox</span>
                    </a>


                    <div class="sidebar-account mx-16pt mb-16pt dropdown">
                        <a href="#" class="nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown" data-caret="false">
                            <img width="32" height="32" class="rounded-circle mr-8pt" src="assets/images/people/50/guy-3.jpg" alt="account" />
                            <span class="flex d-flex flex-column mr-8pt">
                                <span class="text-black-100">Laza Bogdan</span>
                                <small class="text-black-50">Administrator</small>
                            </span>
                            <i class="material-icons text-black-20 icon-16pt">keyboard_arrow_down</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-full dropdown-menu-caret-center">
                            <div class="dropdown-header"><strong>Account</strong></div>
                            <a class="dropdown-item" href="edit-account.html">Edit Account</a>
                            <a class="dropdown-item" href="billing.html">Billing</a>
                            <a class="dropdown-item" href="billing-history.html">Payments</a>
                            <a class="dropdown-item" href="login.html">Logout</a>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-header"><strong>Select company</strong></div>
                            <a href="" class="dropdown-item active d-flex align-items-center">

                                <div class="avatar avatar-sm mr-8pt">

                                    <span class="avatar-title rounded bg-primary">FM</span>

                                </div>

                                <small class="ml-4pt flex">
                                    <span class="d-flex flex-column">
                                        <strong class="text-black-100">FrontendMatter Inc.</strong>
                                        <span class="text-black-50">Administrator</span>
                                    </span>
                                </small>
                            </a>
                            <a href="" class="dropdown-item d-flex align-items-center">

                                <div class="avatar avatar-sm mr-8pt">

                                    <span class="avatar-title rounded bg-accent">HH</span>

                                </div>

                                <small class="ml-4pt flex">
                                    <span class="d-flex flex-column">
                                        <strong class="text-black-100">OrtorboxOrtorbox Inc.</strong>
                                        <span class="text-black-50">Publisher</span>
                                    </span>
                                </small>
                            </a>
                        </div>
                    </div>

                    <form action="" class="search-form search-form--black sidebar-m-b sidebar-p-l mx-16pt pr-0">
                        <input type="text" class="form-control pl-0" placeholder="Search">
                        <button class="btn" type="submit"><i class="material-icons">search</i></button>
                    </form>


                    <div class="sidebar-heading">Overview</div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="?module=dashboard">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">insert_chart_outlined</span>
                                <span class="sidebar-menu-text">Dashboard</span>
                            </a>
                        </li>

                    </ul>

                    <div class="sidebar-heading">Applications</div>
                    <ul class="sidebar-menu">


                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#project_mgt_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">access_time</span>
                                Project Management
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent" id="project_mgt_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="?module=projects">
                                        <span class="sidebar-menu-text">Projects</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="?module=projects&p=project-milestone">
                                        <span class="sidebar-menu-text">Project Milestone</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="?module=projects&p=project-task">
                                        <span class="sidebar-menu-text">Project Task</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#sourcing_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                                Sourcing
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent" id="sourcing_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="?module=sourcing">
                                        <span class="sidebar-menu-text">Sourcing</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="?module=sourcing&p=catalog-management">
                                        <span class="sidebar-menu-text">Catalog Management</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="?module=sourcing&p=rft-management">
                                        <span class="sidebar-menu-text">RFT Management</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#hr_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">person</span>
                                HR
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent" id="hr_menu">
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="?module=hr&p=hr-overview">
                                      <span class="sidebar-menu-text">HR-Overview</span>
                                  </a>
                              </li>

                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="?module=hr&p=PIM">
                                      <span class="sidebar-menu-text">PIM</span>
                                  </a>
                              </li>
                              <li class="sidebar-menu-item">
                                  <a class="sidebar-menu-button" href="?module=hr&p=leaves-time-mgt">
                                      <span class="sidebar-menu-text">Leave/Time Mgt.</span>
                                  </a>
                              </li>

                            </ul>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#procurement_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">archive</span>
                                Procurement
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent" id="procurement_menu">

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="?module=procurement&p=purchase-requisition">
                                        <span class="sidebar-menu-text">Purchase Requisition</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">

                                    <a class="sidebar-menu-button" href="?module=procurement&p=purchase-order">
                                        <span class="sidebar-menu-text">Purchase Order</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="?module=procurement&p=receiveable">
                                        <span class="sidebar-menu-text">Account Receiveable</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                    </ul>

                </div>
            </div>
        </div>
        <!-- // END drawer -->
