<?php
if (isset($_GET['view']) && $_GET['view'] == 'add-employee'):
    include 'add-employee.php';
elseif ( isset($_GET['view']) && $_GET['view'] == 'details' && isset($_GET['record']) ):
    include 'employee-details.php';
else: ?>
            <div class="border-bottom-2 py-32pt position-relative z-1">
                <div class="container-fluid page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                    <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                        <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                            <h2 class="mb-0"><?php echo set_title($_GET['p']) ?></h2>


                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="index.html"><?php echo set_title($_GET['module']) ?></a></li>

                                <li class="breadcrumb-item active">

                                  <?php echo set_title($_GET['p']) ?>

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
                            <a href="?module=hr&p=PIM&view=add-employee" class="btn btn-accent">Add employee</a>
                        </div>
                    </div>

                </div>
            </div>



















            <div class="container-fluid page__container">
                <div class="page-section">

                    <div class="page-separator">
                        <div class="page-separator__text">Overview</div>
                    </div>

                    <div class="row mb-lg-8pt">
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="position-relative mr-16pt">
                                            <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                                <small>92%</small>
                                            </div>
                                            <canvas width="48" height="48" class="chart-canvas position-relative z-1 js-update-chart-progress" id="inTimeProgressChart" data-chart-line-background-color="primary;gray" data-chart-disable-tooltips="true"></canvas>
                                        </div>
                                        <div class="flex">
                                            <strong>In Time</strong>
                                        </div>
                                        <div class="text-50">60</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="position-relative mr-16pt">
                                            <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                                <small>23%</small>
                                            </div>
                                            <canvas width="48" height="48" class="chart-canvas position-relative z-1 js-update-chart-progress-accent" id="lateProgressChart" data-chart-line-background-color="accent;gray" data-chart-disable-tooltips="true"></canvas>
                                        </div>
                                        <div class="flex">
                                            <strong>In Time</strong>
                                        </div>
                                        <div class="text-50">15</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="position-relative mr-16pt">
                                            <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                                <small>6%</small>
                                            </div>
                                            <canvas width="48" height="48" class="chart-canvas position-relative z-1" id="absentsProgressChart" data-chart-line-background-color="yellow;gray" data-chart-disable-tooltips="true"></canvas>
                                        </div>
                                        <div class="flex">
                                            <strong>Absents</strong>
                                        </div>
                                        <div class="text-50">4</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="position-relative mr-16pt">
                                            <div class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">
                                                <small>1%</small>
                                            </div>
                                            <canvas width="48" height="48" class="chart-canvas position-relative z-1" id="vacationProgressChart" data-chart-line-background-color="yellow;gray" data-chart-disable-tooltips="true"></canvas>
                                        </div>
                                        <div class="flex">
                                            <strong>Vacation</strong>
                                        </div>
                                        <div class="text-50">1</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-separator">
                        <div class="page-separator__text">Recently added</div>
                    </div>

                    <div class="card mb-32pt">

                        <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-date" data-lists-sort-desc="true" data-lists-values='["js-lists-values-name", "js-lists-values-department", "js-lists-values-status", "js-lists-values-type", "js-lists-values-phone", "js-lists-values-date"]'>




                            <table class="table mb-0 thead-border-top-0 table-nowrap">
                                <thead>
                                    <tr>

                                        <th style="width: 18px;" class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-toggle-check-all" data-target="#employees" id="customCheckAll">
                                                <label class="custom-control-label" for="customCheckAll"><span class="text-hide">Toggle all</span></label>
                                            </div>
                                        </th>

                                        <th>
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">Name</a>
                                        </th>

                                        <th style="width: 150px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-department">Department</a>
                                        </th>



                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-status">Status</a>
                                        </th>


                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-type">Type</a>
                                        </th>


                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-phone">Phone</a>
                                        </th>

                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-date">Hire date</a>
                                        </th>
                                        <th style="width: 24px;"></th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="employees">

                                    <tr>

                                        <td class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_1">
                                                <label class="custom-control-label" for="customCheck1_1"><span class="text-hide">Check</span></label>
                                            </div>
                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                <div class="avatar avatar-32pt mr-8pt">


                                                    <span class="avatar-title rounded-circle">BN</span>

                                                </div>
                                                <div class="media-body">

                                                  <a href="?module=hr&p=PIM&view=details&record=10">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-name">Billy Nunez</strong></p>
                                                            <small class="js-lists-values-email text-50">annabell.kris@yahoo.com</small>
                                                        </div>
                                                      </a>
                                                        <div class="d-flex align-items-center ml-24pt">
                                                            <i class="material-icons text-20 icon-16pt">link</i>
                                                            <small class="ml-4pt"><strong class="text-50">2</strong></small>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>

                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-light text-black-100">Ds</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-department"><strong>Design</strong></small>
                                                        <small class="js-lists-values-location text-50">UX Designer</small>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>



                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Probation</small>
                                                <span class="indicator-line rounded bg-warning"></span>
                                            </div>
                                        </td>


                                        <td>
                                            <small class="js-lists-values-type text-50">Temporary</small>
                                        </td>


                                        <td>
                                            <small class="js-lists-values-phone text-50">239-721-3649</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-date text-50">19/02/2019</small>
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
                                                <div class="avatar avatar-32pt mr-8pt">


                                                    <span class="avatar-title rounded-circle">TP</span>

                                                </div>
                                                <div class="media-body">


                                                    <div class="d-flex align-items-center">
                                                        <div class="flex d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-name">Tony Parks</strong></p>
                                                            <small class="js-lists-values-email text-50">vida_glover@gmail.com</small>
                                                        </div>

                                                        <div class="d-flex align-items-center ml-24pt">
                                                            <i class="material-icons text-20 icon-16pt">comment</i>
                                                            <small class="ml-4pt"><strong class="text-50">1</strong></small>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>

                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-light text-black-100">Dv</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-department"><strong>Development</strong></small>
                                                        <small class="js-lists-values-location text-50">Senior Frontend Developer</small>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>



                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Active</small>
                                                <span class="indicator-line rounded bg-primary"></span>
                                            </div>
                                        </td>


                                        <td>
                                            <small class="js-lists-values-type text-50">On Contract</small>
                                        </td>


                                        <td>
                                            <small class="js-lists-values-phone text-50">169-769-4821</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-date text-50">18/02/2019</small>
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
                                                <div class="avatar avatar-32pt mr-8pt">

                                                    <img src="assets/images/people/110/guy-1.jpg" alt="Avatar" class="avatar-img rounded-circle">


                                                </div>
                                                <div class="media-body">


                                                    <div class="d-flex align-items-center">
                                                        <div class="flex d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-name">Gilbert Barrett</strong></p>
                                                            <small class="js-lists-values-email text-50">paolo.zieme@gmail.com</small>
                                                        </div>

                                                        <div class="d-flex align-items-center ml-24pt">
                                                            <i class="material-icons text-20 icon-16pt">comment</i>
                                                            <small class="ml-4pt"><strong class="text-50">1</strong></small>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>

                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-light text-black-100">CR</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-department"><strong>Customer Relationship</strong></small>
                                                        <small class="js-lists-values-location text-50">CRM Manager</small>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>



                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Active</small>
                                                <span class="indicator-line rounded bg-primary"></span>
                                            </div>
                                        </td>


                                        <td>
                                            <small class="js-lists-values-type text-50">On Contract</small>
                                        </td>


                                        <td>
                                            <small class="js-lists-values-phone text-50">462-060-7408</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-date text-50">17/02/2019</small>
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
                                                <div class="avatar avatar-32pt mr-8pt">

                                                    <img src="assets/images/people/110/guy-2.jpg" alt="Avatar" class="avatar-img rounded-circle">


                                                </div>
                                                <div class="media-body">


                                                    <div class="d-flex align-items-center">
                                                        <div class="flex d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-name">Ollie Wallace</strong></p>
                                                            <small class="js-lists-values-email text-50">lorna_kirlin@nora.biz</small>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>

                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-light text-black-100">HR</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-department"><strong>HR</strong></small>
                                                        <small class="js-lists-values-location text-50">HR Manager</small>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>



                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Active</small>
                                                <span class="indicator-line rounded bg-primary"></span>
                                            </div>
                                        </td>


                                        <td>
                                            <small class="js-lists-values-type text-50">Full Time</small>
                                        </td>


                                        <td>
                                            <small class="js-lists-values-phone text-50">285-626-6050</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-date text-50">16/02/2019</small>
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
                                                <div class="avatar avatar-32pt mr-8pt">

                                                    <img src="assets/images/people/110/guy-3.jpg" alt="Avatar" class="avatar-img rounded-circle">


                                                </div>
                                                <div class="media-body">


                                                    <div class="d-flex align-items-center">
                                                        <div class="flex d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-name">Ricardo Bell</strong></p>
                                                            <small class="js-lists-values-email text-50">smith_winfield@douglas.io</small>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>

                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">
                                                    <span class="avatar-title rounded bg-light text-black-100">Ds</span>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex flex-column">
                                                        <small class="js-lists-values-department"><strong>Design</strong></small>
                                                        <small class="js-lists-values-location text-50">UX Designer</small>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>



                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt">Terminated</small>
                                                <span class="indicator-line rounded bg-danger"></span>
                                            </div>
                                        </td>


                                        <td>
                                            <small class="js-lists-values-type text-50">Temporary</small>
                                        </td>


                                        <td>
                                            <small class="js-lists-values-phone text-50">285-626-6050</small>
                                        </td>

                                        <td>
                                            <small class="js-lists-values-date text-50">01/12/2018</small>
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

                        <!-- <div class="card-body text-right">
  15 <span class="text-50">of 1,430</span> <a href="#" class="text-50"><i class="material-icons ml-1">arrow_forward</i></a>
</div> -->


                    </div>

                </div>

<?php endif ;?>
