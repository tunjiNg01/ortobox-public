        <?php 
        if ( isset($_GET['p']) && $_GET['p'] == 'project-milestone' ): 
            include 'project-milestone.php';
        elseif ( isset($_GET['p']) && $_GET['p'] == 'project-task' ):
            include 'project-task.php';
        else: ?>
            <div class="border-bottom-2 py-32pt position-relative z-1">
                <div class="container-fluid page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                    <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                        <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                            <h2 class="mb-0">Projects</h2>


                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="">Home</a></li>

                                <li class="breadcrumb-item active">

                                    Productivity

                                </li>

                            </ol>

                        </div>

                        <div class="dropdown">
                            <a href="" class="border rounded d-flex align-items-center p-16pt" data-toggle="dropdown" data-caret="false">

                                <div class="avatar avatar-sm mr-8pt">

                                    <span class="avatar-title rounded bg-primary">FM</span>

                                </div>

                                <small class="ml-4pt flex">
                                    <span class="d-flex align-items-center">
                                        <span class="flex d-flex flex-column">
                                            <strong class="text-100">FrontendMatter Inc.</strong>
                                            <span class="text-50">Select company</span>
                                        </span>
                                        <i class="material-icons icon-16pt text-50 ml-4pt">arrow_drop_down</i>
                                    </span>
                                </small>
                            </a>
                            <div class="dropdown-menu w-100">
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
                                            <strong class="text-black-100">HumaHuma Inc.</strong>
                                            <span class="text-black-50">Publisher</span>
                                        </span>
                                    </small>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="row" role="tablist">
                        <div class="col-auto d-flex flex-column">
                            <h6 class="m-0">&dollar;12.3k</h6>
                            <p class="text-50 mb-0 d-flex align-items-center">
                                Earnings
                                <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                            </p>
                        </div>
                        <div class="col-auto border-left">
                            <h6 class="m-0">264</h6>
                            <p class="text-50 mb-0 d-flex align-items-center">
                                Sales
                                <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                            </p>
                        </div>
                        <div class="col-auto border-left">
                            <a href="" class="btn btn-accent">New Project</a>
                        </div>
                    </div>

                </div>
            </div>


















            <div class="container-fluid page__container">
                <div class="page-section">

                    <div class="page-separator">
                        <div class="page-separator__text">Overview</div>
                    </div>

                    <div class="row card-group-row mb-lg-8pt">
                        <div class="col-lg-4 card-group-row__col">

                            <div class="card card-group-row__card">
                                <div class="card-header d-flex">
                                    <div class="flex row">
                                        <div class="col-auto d-flex flex-column">
                                            <div class="h2 mb-0">14</div>
                                            <p class="mb-0"><strong>Projects</strong></p>
                                        </div>
                                        <div class="col-auto border-left d-flex flex-column">
                                            <div class="h2 mb-0">2</div>
                                            <p class="mb-0"><strong>Active</strong></p>
                                        </div>
                                    </div>
                                    <a href="#"><i class="material-icons text-50">more_horiz</i></a>
                                </div>
                                <div class="card-body d-flex flex-column justify-content-center">



                                    <div class="mb-8pt">
                                        <p class="d-flex align-items-center mb-4pt">
                                            <small class="flex lh-24pt"><strong>Social Media API</strong></small>
                                            <small class="text-50 lh-24pt">due in 12 days</small>
                                        </p>
                                        <div class="progress" style="height: 4px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <div>
                                        <p class="d-flex align-items-center mb-4pt">
                                            <small class="flex lh-24pt"><strong>Advertising Platform</strong></small>
                                            <small class="text-50 lh-24pt">due in 30 days</small>
                                        </p>
                                        <div class="progress" style="height: 4px;">
                                            <div class="progress-bar bg-accent" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 card-group-row__col">

                            <div class="card card-group-row__card">
                                <div class="card-header d-flex">
                                    <div class="flex d-flex align-items-center">
                                        <div class="h2 mb-0 mr-3">2</div>
                                        <div class="d-flex flex-column">
                                            <p class="mb-0"><strong>Team Members</strong></p>
                                            <small class="text-50">Joined this week</small>
                                        </div>
                                    </div>
                                    <i class="material-icons text-50">more_horiz</i>
                                </div>



                                <div class="list-group list-group-flush">

                                    <div class="list-group-item p-16pt">
                                        <div class="d-flex align-items-center" style="white-space: nowrap;">

                                            <div class="avatar avatar-32pt mr-8pt">

                                                <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">

                                            </div>

                                            <div class="flex ml-4pt">
                                                <div class="d-flex flex-column">
                                                    <p class="mb-0"><strong>Gilbert Barrett</strong></p>
                                                    <small class="text-50">HR Manager</small>
                                                </div>
                                            </div>
                                            <a href=""><i class="material-icons text-20 icon-16pt">email</i></a>
                                        </div>
                                    </div>

                                    <div class="list-group-item p-16pt">
                                        <div class="d-flex align-items-center" style="white-space: nowrap;">

                                            <div class="avatar avatar-32pt mr-8pt">

                                                <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">

                                            </div>

                                            <div class="flex ml-4pt">
                                                <div class="d-flex flex-column">
                                                    <p class="mb-0"><strong>Noah Allen</strong></p>
                                                    <small class="text-50">iOS Developer</small>
                                                </div>
                                            </div>
                                            <a href=""><i class="material-icons text-20 icon-16pt">email</i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 card-group-row__col">

                            <div class="card card-group-row__card">
                                <div class="card-header p-0 nav border-0">
                                    <div class="row no-gutters flex" role="tablist">
                                        <div class="col-auto">
                                            <div class="p-card-header pr-0">
                                                <div class="border-right pr-16pt">
                                                    <div class="h2 mb-0">&dollar;25k</div>
                                                    <div class="d-flex flex-column">
                                                        <p class="mb-0"><strong>Earnings</strong></p>
                                                        <small class="text-50">This billing cycle</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto flex">
                                            <div class="p-card-header d-flex flex-column align-items-end">
                                                <a href="#"><i class="material-icons text-50">more_horiz</i></a>
                                                <div class="flex d-flex align-items-center align-self-start">
                                                    <div class="position-relative mr-16pt">
                                                        <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                                            <small>42%</small>
                                                        </div>
                                                        <canvas width="48" height="48" class="chart-canvas position-relative z-1 js-update-chart-progress-accent" id="invoicesProgressChart" data-chart-line-background-color="teal;gray" data-chart-disable-tooltips="true"></canvas>
                                                    </div>
                                                    <small class="text-50">4 of 12 invoices</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body position-relative o-hidden p-0">
                                    <div class="chart z-0" style="height: 98px;">
                                        <canvas id="earningsChart" class="chart-canvas js-update-chart-line js-update-chart-line-2nd-accent" data-chart-line-border-color="primary,teal" data-chart-hide-axes="true"></canvas>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="page-separator">
                        <div class="page-separator__text">Projects</div>
                    </div>

                    <div class="card dashboard-area-tabs mb-32pt">
                        <div class="card-header p-0 nav">
                            <div class="row no-gutters" role="tablist">
                                <div class="col-auto">
                                    <a href="#" data-toggle="tab" role="tab" aria-selected="true" class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                        <span class="h2 mb-0 mr-3">3</span>
                                        <span class="flex d-flex flex-column">
                                            <strong>Active</strong>
                                            <small class="text-50">Ongoing Projects</small>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-auto border-left border-right">
                                    <a href="#" data-toggle="tab" role="tab" aria-selected="false" class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                        <span class="h2 mb-0 mr-3">2</span>
                                        <span class="flex d-flex flex-column">
                                            <strong>Archived</strong>
                                            <small class="text-50">Past Projects</small>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-date" data-lists-sort-desc="true" data-lists-values='["js-lists-values-lead", "js-lists-values-project", "js-lists-values-status", "js-lists-values-budget", "js-lists-values-date"]'>




                            <table class="table mb-0 thead-border-top-0 table-nowrap">
                                <thead>
                                    <tr>

                                        <th style="width: 18px;" class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-toggle-check-all" data-target="#projects" id="customCheckAll">
                                                <label class="custom-control-label" for="customCheckAll"><span class="text-hide">Toggle all</span></label>
                                            </div>
                                        </th>


                                        <th style="width: 150px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-project">Project</a>
                                        </th>


                                        <th>
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-lead">Lead / Team</a>
                                        </th>


                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-status">Status</a>
                                        </th>



                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-budget">Budget</a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-date">Due</a>
                                        </th>
                                        <th style="width: 24px;"></th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="projects">

                                    <tr>

                                        <td class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_1">
                                                <label class="custom-control-label" for="customCheck1_1"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>



                                        <td>

                                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-primary text-white">SM</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-project"><strong>Social Media API</strong></small>
                                                        <small class="js-lists-values-location text-50">Twitter</small>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>


                                        <td>

                                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                <div class="avatar avatar-32pt mr-8pt">


                                                    <span class="avatar-title rounded-circle">BN</span>

                                                </div>
                                                <div class="media-body">


                                                    <div class="d-flex align-items-center">
                                                        <div class="flex d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-lead">Billy Nunez</strong></p>
                                                            <small class="js-lists-values-email text-50">Quality Assurance</small>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                        </td>


                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">QA</small>
                                                <span class="indicator-line rounded bg-warning"></span>
                                            </div>
                                        </td>



                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-budget"><strong>&dollar;1,200</strong></small>
                                                <small class="text-50">Invoice Sent</small>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-date"><strong>19/02/2019</strong></small>
                                                <small class="text-50">18 days</small>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="" class="text-50"><i class="material-icons">more_vert</i></a>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_2">
                                                <label class="custom-control-label" for="customCheck1_2"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>



                                        <td>

                                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-accent text-white">PM</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-project"><strong>Project Management App</strong></small>
                                                        <small class="js-lists-values-location text-50">Github</small>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>


                                        <td>

                                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                <div class="avatar avatar-32pt mr-8pt">


                                                    <span class="avatar-title rounded-circle">TP</span>

                                                </div>
                                                <div class="media-body">


                                                    <div class="d-flex align-items-center">
                                                        <div class="flex d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-lead">Tony Parks</strong></p>
                                                            <small class="js-lists-values-email text-50">iOS Development</small>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                        </td>


                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Finished</small>
                                                <span class="indicator-line rounded bg-accent"></span>
                                            </div>
                                        </td>



                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-budget"><strong>&dollar;12,500</strong></small>
                                                <small class="text-50">Paid</small>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-date"><strong>18/02/2019</strong></small>
                                                <small class="text-danger">Overdue</small>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="" class="text-50"><i class="material-icons">more_vert</i></a>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_3">
                                                <label class="custom-control-label" for="customCheck1_3"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>



                                        <td>

                                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-warning text-white">AD</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-project"><strong>Advertising Platform</strong></small>
                                                        <small class="js-lists-values-location text-50">Facebook</small>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>


                                        <td>

                                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                <div class="avatar avatar-32pt mr-8pt">

                                                    <img src="assets/images/people/110/guy-1.jpg" alt="Avatar" class="avatar-img rounded-circle">


                                                </div>
                                                <div class="media-body">


                                                    <div class="d-flex align-items-center">
                                                        <div class="flex d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-lead">Gilbert Barrett</strong></p>
                                                            <small class="js-lists-values-email text-50">Marketing</small>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                        </td>


                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Finished</small>
                                                <span class="indicator-line rounded bg-accent"></span>
                                            </div>
                                        </td>



                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-budget"><strong>&dollar;7,100</strong></small>
                                                <small class="text-50">Paid</small>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-date"><strong>17/02/2019</strong></small>
                                                <small class="text-50">15 days</small>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="" class="text-50"><i class="material-icons">more_vert</i></a>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_4">
                                                <label class="custom-control-label" for="customCheck1_4"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>



                                        <td>

                                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-light text-black-100">FD</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-project"><strong>Frontend Development</strong></small>
                                                        <small class="js-lists-values-location text-50">Trello</small>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>


                                        <td>

                                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                <div class="avatar avatar-32pt mr-8pt">

                                                    <img src="assets/images/people/110/guy-2.jpg" alt="Avatar" class="avatar-img rounded-circle">


                                                </div>
                                                <div class="media-body">


                                                    <div class="d-flex align-items-center">
                                                        <div class="flex d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-lead">Ollie Wallace</strong></p>
                                                            <small class="js-lists-values-email text-50">Design</small>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                        </td>


                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Designing</small>
                                                <span class="indicator-line rounded bg-primary"></span>
                                            </div>
                                        </td>



                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-budget"><strong>&dollar;4,200</strong></small>
                                                <small class="text-50">Paid</small>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-date"><strong>16/02/2019</strong></small>
                                                <small class="text-50">15 days</small>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="" class="text-50"><i class="material-icons">more_vert</i></a>
                                        </td>
                                    </tr>

                                    <tr class="selected">

                                        <td class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-check-selected-row" checked="" id="customCheck1_5">
                                                <label class="custom-control-label" for="customCheck1_5"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>



                                        <td>

                                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-light text-black-100">DU</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-project"><strong>Database Upgrade</strong></small>
                                                        <small class="js-lists-values-location text-50">MySQL</small>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>


                                        <td>

                                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                <div class="avatar avatar-32pt mr-8pt">

                                                    <img src="assets/images/people/110/guy-3.jpg" alt="Avatar" class="avatar-img rounded-circle">


                                                </div>
                                                <div class="media-body">


                                                    <div class="d-flex align-items-center">
                                                        <div class="flex d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-lead">Ricardo Bell</strong></p>
                                                            <small class="js-lists-values-email text-50">Web Development</small>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                        </td>


                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Waiting</small>
                                                <span class="indicator-line rounded bg-danger"></span>
                                            </div>
                                        </td>



                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-budget"><strong>&dollar;130</strong></small>
                                                <small class="text-danger">Overdue</small>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-date"><strong>01/12/2018</strong></small>
                                                <small class="text-50">1 day</small>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="" class="text-50"><i class="material-icons">more_vert</i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer p-8pt">

                            <ul class="pagination justify-content-start pagination-xsm m-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true" class="material-icons">chevron_left</span>
                                        <span>Prev</span>
                                    </a>
                                </li>
                                <li class="page-item dropdown">
                                    <a class="page-link dropdown-toggle" data-toggle="dropdown" href="#" aria-label="Page">
                                        <span>1</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="" class="dropdown-item active">1</a>
                                        <a href="" class="dropdown-item">2</a>
                                        <a href="" class="dropdown-item">3</a>
                                        <a href="" class="dropdown-item">4</a>
                                        <a href="" class="dropdown-item">5</a>
                                    </div>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span>Next</span>
                                        <span aria-hidden="true" class="material-icons">chevron_right</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <!-- <div class="card-body bordet-top text-right">
  15 <span class="text-50">of 1,430</span> <a href="#" class="text-50"><i class="material-icons ml-1">arrow_forward</i></a>
</div> -->


                    </div>

                    <div class="row">
                        <div class="col-lg-8">

                            <div class="page-separator">
                                <div class="page-separator__text">Todo</div>
                            </div>

                            <div class="card mb-lg-0">
                                <div class="card-header d-flex align-items-center">
                                    <strong class="flex">Checklist</strong>
                                    <div><a href="#" data-target="#todo" class="js-toggle-check-all">Mark All as Completed</a></div>
                                </div>
                                <div class="progress rounded-0" style="height: 4px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled list-todo" id="todo">
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Add Fluid Layout Featuring A Vertical Menu With Icons Only</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">Refactor HTML Markup To Be More SEO Friendly</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label" for="customCheck4">Design A New Page In Sketch</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked="" id="customCheck5">
                                                <label class="custom-control-label" for="customCheck5">Quote the custom work</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked="" id="customCheck6">
                                                <label class="custom-control-label" for="customCheck6">Interview John for Full-Stack Developer</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" checked="" id="customCheck7">
                                                <label class="custom-control-label" for="customCheck7">Research the success of CRM</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer p-8pt">

                                    <ul class="pagination justify-content-start pagination-xsm m-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true" class="material-icons">chevron_left</span>
                                                <span>Prev</span>
                                            </a>
                                        </li>
                                        <li class="page-item dropdown">
                                            <a class="page-link dropdown-toggle" data-toggle="dropdown" href="#" aria-label="Page">
                                                <span>1</span>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a href="" class="dropdown-item active">1</a>
                                                <a href="" class="dropdown-item">2</a>
                                                <a href="" class="dropdown-item">3</a>
                                                <a href="" class="dropdown-item">4</a>
                                                <a href="" class="dropdown-item">5</a>
                                            </div>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span>Next</span>
                                                <span aria-hidden="true" class="material-icons">chevron_right</span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4">

                            <div class="page-separator">
                                <div class="page-separator__text">Open Tasks</div>
                            </div>



                            <div class="card mb-lg-0">
                                <div class="card-header d-flex align-items-center">
                                    <strong class="flex">Tasks</strong>
                                    <div><a href="#">View all</a></div>
                                </div>
                                <div class="progress rounded-0" style="height: 4px;">
                                    <div class="progress-bar bg-accent" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="list-group list-group-flush">


                                    <div class="list-group-item p-16pt">



                                        <div class="d-flex">
                                            <div class="d-flex flex-column flex">
                                                <a href="#" class="mb-8pt"><strong>Add Fluid Layout Featuring A Vertical Menu With Icons Only</strong></a>
                                                <div class="d-flex align-items-center mb-8pt">

                                                    <a href="" class="mr-4pt"><span class="indicator-line rounded bg-primary"></span></a>

                                                    <a href="" class="mr-4pt"><span class="indicator-line rounded bg-accent"></span></a>

                                                </div>
                                            </div>
                                            <a href="#"><i class="material-icons text-50">more_horiz</i></a>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex d-flex align-items-center">
                                                <small class="text-50 mr-16pt">Today</small>


                                                <i class="material-icons icon-16pt text-20 mr-4pt">link</i>
                                                <small class="text-50">2</small>

                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-group flex mr-8pt">

                                                    <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                                        <a href=""><img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle"></a>
                                                    </div>

                                                    <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                                        <a href=""><img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle"></a>
                                                    </div>

                                                    <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                                        <a href=""><img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle"></a>
                                                    </div>

                                                </div>
                                                <a style="text-decoration: none;" class="rounded-circle d-flex align-items-center border align-items-center text-50" href=""><i class="material-icons icon-16pt m-1">add</i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="list-group-item p-16pt">


                                        <a href="" class="d-block mb-16pt"><img src="assets/images/stories/256_rsz_jared-rice-388260-unsplash.jpg" alt="" style="height: 64px;" class="card-img card-img-cover"></a>


                                        <div class="d-flex">
                                            <div class="d-flex flex-column flex">
                                                <a href="#" class="mb-8pt"><strong>Add Layout Options</strong></a>
                                                <div class="d-flex align-items-center mb-8pt">

                                                    <a href="" class="mr-4pt"><span class="indicator-line rounded bg-primary"></span></a>

                                                </div>
                                            </div>
                                            <a href="#"><i class="material-icons text-50">more_horiz</i></a>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex d-flex align-items-center">
                                                <small class="text-50 mr-16pt">Tomorrow</small>


                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-group flex mr-8pt">

                                                    <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                                        <a href=""><img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle"></a>
                                                    </div>

                                                    <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                                        <a href=""><img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle"></a>
                                                    </div>

                                                    <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="Janell D.">
                                                        <a href=""><img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle"></a>
                                                    </div>

                                                </div>
                                                <a style="text-decoration: none;" class="rounded-circle d-flex align-items-center border align-items-center text-50" href=""><i class="material-icons icon-16pt m-1">add</i></a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <?php endif; ?>