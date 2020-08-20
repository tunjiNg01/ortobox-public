<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ERP Dashboard</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7COswald:300,400,500,700%7CRoboto:400,500%7CExo+2:600&display=swap" rel="stylesheet">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- Fix Footer CSS -->
    <link type="text/css" href="assets/vendor/fix-footer.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/material-icons.css" rel="stylesheet">
    <link type="text/css" href="assets/css/material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="assets/css/fontawesome.css" rel="stylesheet">
    <link type="text/css" href="assets/css/fontawesome.rtl.css" rel="stylesheet">

    <!-- Preloader -->
    <link type="text/css" href="assets/css/preloader.css" rel="stylesheet">
    <link type="text/css" href="assets/css/preloader.rtl.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet">

    <!-- Dark Mode CSS (optional) -->
    <link type="text/css" href="assets/css/dark-mode.css" rel="stylesheet">
    <link type="text/css" href="assets/css/dark-mode.rtl.css" rel="stylesheet">





</head>

<body class="layout-compact layout-sticky-subnav layout-compact">
























    <div class="preloader">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page-content">

            <!-- Header -->





            <div class="navbar navbar-expand navbar-shadow px-0  pl-lg-16pt navbar-light bg-body" id="default-navbar" data-primary>

                <!-- Navbar toggler -->
                <button class="navbar-toggler d-block d-lg-none rounded-0" type="button" data-toggle="sidebar">
                    <span class="material-icons">menu</span>
                </button>

                <!-- Navbar Brand -->
                <a href="index.html" class="navbar-brand mr-16pt">
                    <img class="navbar-brand-icon mr-0 mr-lg-8pt" src="assets/images/logo/accent-teal-100@2x.png" width="32" alt="Huma">
                    <span class="d-none d-lg-block">Huma</span>
                </a>

                <!-- <button class="btn navbar-btn mr-16pt ml-md-16pt" data-toggle="modal" data-target="#apps">Apps <i class="material-icons">arrow_drop_down</i></button> -->


                <form class="search-form navbar-search d-none d-md-flex mr-16pt" action="compact-index.html">
                    <button class="btn" type="submit"><i class="material-icons">search</i></button>
                    <input type="text" class="form-control" placeholder="Search ...">
                </form>


                <div class="flex"></div>

                <div class="nav navbar-nav flex-nowrap d-none d-lg-flex mr-16pt" style="white-space: nowrap;">
                    <div class="nav-item dropdown d-none d-sm-flex">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">EN</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header"><strong>Select language</strong></div>
                            <a class="dropdown-item active" href="">English</a>
                            <a class="dropdown-item" href="">French</a>
                            <a class="dropdown-item" href="">Romanian</a>
                            <a class="dropdown-item" href="">Spanish</a>
                        </div>
                    </div>
                </div>

                <div class="nav navbar-nav flex-nowrap d-flex ml-0 mr-16pt">
                    <div class="nav-item dropdown d-none d-sm-flex">
                        <a href="#" class="nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                            <img width="32" height="32" class="rounded-circle mr-8pt" src="assets/images/people/50/guy-3.jpg" alt="account" />
                            <span class="flex d-flex flex-column mr-8pt">
                                <span class="navbar-text-100">Laza Bogdan</span>
                                <small class="navbar-text-50">Administrator</small>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header"><strong>Account</strong></div>
                            <a class="dropdown-item" href="compact-edit-account.html">Edit Account</a>
                            <a class="dropdown-item" href="compact-billing.html">Billing</a>
                            <a class="dropdown-item" href="compact-billing-history.html">Payments</a>
                            <a class="dropdown-item" href="compact-login.html">Logout</a>
                        </div>
                    </div>


                    <!-- Notifications dropdown -->
                    <div class="nav-item ml-16pt dropdown dropdown-notifications">
                        <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-dropdown-disable-document-scroll data-caret="false">
                            <i class="material-icons">notifications</i>
                            <span class="badge badge-notifications badge-accent">2</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div data-perfect-scrollbar class="position-relative">
                                <div class="dropdown-header"><strong>System notifications</strong></div>
                                <div class="list-group list-group-flush mb-0">

                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action unread">
                                        <span class="d-flex align-items-center mb-1">
                                            <small class="text-black-50">3 minutes ago</small>

                                            <span class="ml-auto unread-indicator bg-accent"></span>

                                        </span>
                                        <span class="d-flex">
                                            <span class="avatar avatar-xs mr-2">
                                                <span class="avatar-title rounded-circle bg-light">
                                                    <i class="material-icons font-size-16pt text-accent">account_circle</i>
                                                </span>
                                            </span>
                                            <span class="flex d-flex flex-column">

                                                <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                            </span>
                                        </span>
                                    </a>

                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                        <span class="d-flex align-items-center mb-1">
                                            <small class="text-black-50">5 hours ago</small>

                                        </span>
                                        <span class="d-flex">
                                            <span class="avatar avatar-xs mr-2">
                                                <span class="avatar-title rounded-circle bg-light">
                                                    <i class="material-icons font-size-16pt text-primary">group_add</i>
                                                </span>
                                            </span>
                                            <span class="flex d-flex flex-column">
                                                <strong class="text-black-100">Adrian. D</strong>
                                                <span class="text-black-70">Wants to join your private group.</span>
                                            </span>
                                        </span>
                                    </a>

                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                        <span class="d-flex align-items-center mb-1">
                                            <small class="text-black-50">1 day ago</small>

                                        </span>
                                        <span class="d-flex">
                                            <span class="avatar avatar-xs mr-2">
                                                <span class="avatar-title rounded-circle bg-light">
                                                    <i class="material-icons font-size-16pt text-warning">storage</i>
                                                </span>
                                            </span>
                                            <span class="flex d-flex flex-column">

                                                <span class="text-black-70">Your deploy was successful.</span>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // END Notifications dropdown -->


                    <!-- Notifications dropdown -->
                    <div class="nav-item ml-16pt dropdown dropdown-notifications">
                        <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-dropdown-disable-document-scroll data-caret="false">
                            <i class="material-icons icon-24pt">mail_outline</i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div data-perfect-scrollbar class="position-relative">
                                <div class="dropdown-header"><strong>Messages</strong></div>
                                <div class="list-group list-group-flush mb-0">

                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action unread">
                                        <span class="d-flex align-items-center mb-1">
                                            <small class="text-black-50">5 minutes ago</small>

                                            <span class="ml-auto unread-indicator bg-accent"></span>

                                        </span>
                                        <span class="d-flex">
                                            <span class="avatar avatar-xs mr-2">
                                                <img src="assets/images/people/110/woman-5.jpg" alt="people" class="avatar-img rounded-circle">
                                            </span>
                                            <span class="flex d-flex flex-column">
                                                <strong class="text-black-100">Michelle</strong>
                                                <span class="text-black-70">Clients loved the new design.</span>
                                            </span>
                                        </span>
                                    </a>

                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                        <span class="d-flex align-items-center mb-1">
                                            <small class="text-black-50">5 minutes ago</small>

                                        </span>
                                        <span class="d-flex">
                                            <span class="avatar avatar-xs mr-2">
                                                <img src="assets/images/people/110/woman-5.jpg" alt="people" class="avatar-img rounded-circle">
                                            </span>
                                            <span class="flex d-flex flex-column">
                                                <strong class="text-black-100">Michelle</strong>
                                                <span class="text-black-70">🔥 Superb job..</span>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // END Notifications dropdown -->
                </div>

                <div class="dropdown border-left-2 navbar-border">
                    <button class="navbar-toggler navbar-toggler-custom d-block" type="button" data-toggle="dropdown" data-caret="false">
                        <span class="material-icons">business_center</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
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



            <!-- // END Header -->


            <div class="border-bottom-2 py-32pt position-relative z-1">
                <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                    <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                        <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                            <h2 class="mb-0">ERP Dashboard</h2>


                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                <li class="breadcrumb-item active">

                                    ERP Dashboard

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
                            <a href="" class="btn btn-accent">New Report</a>
                        </div>
                    </div>

                </div>
            </div>


















            <div class="container page__container">
                <div class="page-section">

                    <div class="row mb-lg-8pt">
                        <div class="col-md-6">

                            <div class="page-separator">
                                <div class="page-separator__text">Announcements</div>
                            </div>




                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center mb-16pt">
                                        <div class="flex">
                                            <strong>Latest Announcements</strong>
                                            <span class="text-20">(3)</span>
                                        </div>
                                        <i class="material-icons text-50">more_horiz</i>
                                    </div>

                                    <div class="alert alert-soft-warning mb-0 p-8pt">
                                        <div class="d-flex align-items-start">
                                            <div class="mr-8pt">
                                                <i class="material-icons">error_outline</i>
                                            </div>
                                            <div class="flex">
                                                <small class="text-100">Heads up! Q2 Report for 2018 has been released.</small>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="list-group list-group-flush">

                                    <div class="list-group-item d-flex align-items-start p-16pt">
                                        <div class="d-flex flex-column mr-16pt">
                                            <small class="text-uppercase text-50">FEB</small>
                                            <strong class="border-bottom-2 border-bottom-accent">18</strong>
                                        </div>
                                        <div class="flex">
                                            <div class="mb-8pt"><strong>Promotional Advertising Specialty</strong></div>





                                            <p class="mb-0 text-50">Differentiate and you stand out in a crowded marketplace. Present your uniqueness and ...</p>
                                            <a href="" class="text-70 text-underline">read more</a>



                                        </div>
                                    </div>

                                    <div class="list-group-item d-flex align-items-start p-16pt">
                                        <div class="d-flex flex-column mr-16pt">
                                            <small class="text-uppercase text-50">FEB</small>
                                            <strong class="border-bottom-2 border-bottom-accent">17</strong>
                                        </div>
                                        <div class="flex">
                                            <div class="mb-8pt"><strong>Rebranding Strategy</strong></div>





                                            <p class="mb-0 text-50">A good logo works in the simplest form. It is a memorable representation of your brand and ...</p>
                                            <a href="" class="text-70 text-underline">read more</a>



                                        </div>
                                    </div>

                                    <div class="list-group-item d-flex align-items-start p-16pt">
                                        <div class="d-flex flex-column mr-16pt">
                                            <small class="text-uppercase text-50">FEB</small>
                                            <strong class="border-bottom-2 border-bottom-accent">11</strong>
                                        </div>
                                        <div class="flex">
                                            <div class="mb-8pt"><strong>Promotional Advertising Specialty</strong></div>







                                            <a href="" class="d-flex align-items-center border-1 rounded mb-0 p-8pt">
                                                <span class="mr-8pt p-8pt bg-secondary rounded" style="width: 40px; height: 40px;">
                                                    <i class="material-icons icon-24pt text-white">file_download</i>
                                                </span>
                                                <span class="flex d-flex flex-column">
                                                    <span class="text-100">Final Report.pdf</span>
                                                    <span class="text-50 lh-1">1.3 Mb</span>
                                                </span>
                                                <span class="text-70 text-underline mr-8pt">download</span>
                                            </a>

                                        </div>
                                    </div>

                                </div>


                                <div class="card-footer">

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
                        <div class="col-md-6">

                            <div class="page-separator">
                                <div class="page-separator__text">Accounting</div>
                            </div>

                            <div class="card">
                                <div class="card-header p-0 nav">
                                    <div class="row no-gutters flex" role="tablist">
                                        <div class="col-auto">
                                            <div class="p-card-header d-flex align-items-center">
                                                <div class="h2 mb-0 mr-3">$4.1k</div>
                                                <div class="flex">
                                                    <p class="mb-0"><strong>Cash</strong></p>
                                                    <p class="text-50 mb-0 d-flex align-items-center">
                                                        <small>This week</small>
                                                        <!-- <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i> -->
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto border-left">
                                            <div class="p-card-header d-flex align-items-center">
                                                <div class="h2 mb-0 mr-3">$67k</div>
                                                <div class="flex">
                                                    <p class="mb-0"><strong>Savings</strong></p>
                                                    <p class="text-50 mb-0 d-flex align-items-center">
                                                        <small>Bank account</small>
                                                        <!-- <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i> -->
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto ml-sm-auto">
                                            <div class="p-card-header"><a href="#"><i class="material-icons text-50">more_horiz</i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="legend" class="chart-legend mt-0 mb-24pt justify-content-start"></div>
                                    <div class="chart" style="height: 182px;">
                                        <canvas id="earningsChart" class="chart-canvas js-update-chart-bar" data-chart-legend="#legend" data-chart-line-background-color="primary,gray" data-chart-prefix="$" data-chart-suffix="k">
                                            <span style="font-size: 1rem;"><strong>Views</strong> area chart goes here.</span>
                                        </canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header p-0 nav border-0">
                                    <div class="row no-gutters flex" role="tablist">
                                        <div class="col-auto">
                                            <div class="p-card-header d-flex align-items-center">
                                                <div class="h2 mb-0 mr-3">$75k</div>
                                                <div class="flex">
                                                    <p class="mb-4pt"><strong>Income</strong></p>
                                                    <p class="text-50 mb-0 d-flex align-items-center">
                                                        <i class="indicator-line rounded bg-accent"></i>
                                                        <!-- <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i> -->
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto border-left">
                                            <div class="p-card-header d-flex align-items-center">
                                                <div class="h2 mb-0 mr-3">$36k</div>
                                                <div class="flex">
                                                    <p class="mb-4pt"><strong>Expense</strong></p>
                                                    <p class="text-50 mb-0 d-flex align-items-center">
                                                        <i class="indicator-line rounded bg-primary"></i>
                                                        <!-- <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i> -->
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto ml-sm-auto">
                                            <div class="p-card-header"><a href="#"><i class="material-icons text-50">more_horiz</i></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body position-relative o-hidden p-0">
                                    <div class="chart z-0" style="height: 110px;">
                                        <canvas id="viewsChart" class="chart-canvas js-update-chart-line-2nd-accent" data-chart-line-border-color="primary,teal" data-chart-suffix=" views" data-chart-hide-axes="true"></canvas>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <div class="page-separator">
                                <div class="page-separator__text">HR</div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">


                                    <div class="card mb-md-0">
                                        <div class="card-header pb-0 border-0 d-flex">
                                            <div class="flex">
                                                <div class="h2 mb-0">65</div>
                                                <p class="mb-0"><strong>Employees</strong></p>
                                            </div>
                                            <i class="material-icons text-50">more_horiz</i>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-50 mb-16pt">

                                                <div class="mb-4pt">
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">In-time</small>
                                                        <small class="lh-24pt">60</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-accent" role="progressbar" style="width: 91%;" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="mb-4pt">
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Late</small>
                                                        <small class="lh-24pt">15</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 22%;" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="mb-4pt">
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Absents</small>
                                                        <small class="lh-24pt">4</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div>
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Out on Vacation</small>
                                                        <small class="lh-24pt">1</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 1.06%;" aria-valuenow="1.06" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="text-center">
                                                <a href="" class="btn btn-outline-secondary">View employees</a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-6">


                                    <div class="card mb-md-0">
                                        <div class="card-header pb-0 border-0 d-flex">
                                            <div class="flex">
                                                <div class="h2 mb-0">12</div>
                                                <p class="mb-0"><strong>Departments</strong></p>
                                            </div>
                                            <i class="material-icons text-50">more_horiz</i>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-50 mb-16pt">

                                                <div class="mb-4pt">
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Human Resources</small>
                                                        <small class="lh-24pt">2</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 7%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="mb-4pt">
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Entrepreneurship</small>
                                                        <small class="lh-24pt">8</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 29%;" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="mb-4pt">
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Operations</small>
                                                        <small class="lh-24pt">7</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div>
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Engineering</small>
                                                        <small class="lh-24pt">10</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 37%;" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="text-center">
                                                <a href="" class="btn btn-outline-secondary">View departments</a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="page-separator">
                                <div class="page-separator__text">CRM</div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">


                                    <div class="card mb-md-0">
                                        <div class="card-header pb-0 border-0 d-flex">
                                            <div class="flex">
                                                <div class="h2 mb-0">130</div>
                                                <p class="mb-0"><strong>Contacts</strong></p>
                                            </div>
                                            <i class="material-icons text-50">more_horiz</i>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-50 mb-16pt">

                                                <div class="mb-4pt">
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Customers</small>
                                                        <small class="lh-24pt">70</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 53%;" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="mb-4pt">
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Leads</small>
                                                        <small class="lh-24pt">21</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 16%;" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="mb-4pt">
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Opportunities</small>
                                                        <small class="lh-24pt">12</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 9%;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div>
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Subscribers</small>
                                                        <small class="lh-24pt">27</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="text-center">
                                                <a href="" class="btn btn-outline-secondary">View contacts</a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-6">


                                    <div class="card mb-md-0">
                                        <div class="card-header pb-0 border-0 d-flex">
                                            <div class="flex">
                                                <div class="h2 mb-0">53</div>
                                                <p class="mb-0"><strong>Companies</strong></p>
                                            </div>
                                            <i class="material-icons text-50">more_horiz</i>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-50 mb-16pt">

                                                <div class="mb-4pt">
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Customers</small>
                                                        <small class="lh-24pt">20</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 37%;" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="mb-4pt">
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Leads</small>
                                                        <small class="lh-24pt">12</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 22%;" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="mb-4pt">
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Opportunities</small>
                                                        <small class="lh-24pt">7</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 13%;" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div>
                                                    <p class="d-flex align-items-center mb-0">
                                                        <small class="flex lh-24pt">Subscribers</small>
                                                        <small class="lh-24pt">14</small>
                                                    </p>
                                                    <div class="progress" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 26%;" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="text-center">
                                                <a href="" class="btn btn-outline-secondary">View companies</a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>




            <div class="js-fix-footer footer border-top-2">
                <div class="container page__container page-section d-flex flex-column">
                    <p class="text-70 brand mb-24pt">
                        <img class="brand-icon" src="assets/images/logo/black-70@2x.png" width="30" alt="Huma"> Huma
                    </p>
                    <p class="measure-lead-max text-muted mb-0 small">Huma is a beautifully crafted user interface for modern Business Admin Web Applications, with examples for many pages needed for Customer Relationship Management, Enterprise Resource Planning, Human Resources, Content Management System, Project Management, Tasks, eCommerce, Messaging and Account Management.</p>
                </div>
                <div class="pb-16pt pb-lg-24pt">
                    <div class="container page__container">
                        <div class="bg-dark rounded page-section py-lg-32pt px-16pt px-lg-24pt">
                            <div class="row">
                                <div class="col-md-2 col-sm-4 mb-24pt mb-md-0">
                                    <p class="text-white-70 mb-8pt"><strong>Follow us</strong></p>
                                    <nav class="nav nav-links nav--flush">
                                        <a href="#" class="nav-link mr-8pt"><img src="assets/images/icon/footer/facebook-square@2x.png" width="24" height="24" alt="Facebook"></a>
                                        <a href="#" class="nav-link mr-8pt"><img src="assets/images/icon/footer/twitter-square@2x.png" width="24" height="24" alt="Twitter"></a>
                                        <a href="#" class="nav-link mr-8pt"><img src="assets/images/icon/footer/vimeo-square@2x.png" width="24" height="24" alt="Vimeo"></a>
                                        <!-- <a href="#" class="nav-link"><img src="assets/images/icon/footer/youtube-square@2x.png" width="24" height="24" alt="YouTube"></a> -->
                                    </nav>
                                </div>
                                <div class="col-md-6 col-sm-4 mb-24pt mb-md-0 d-flex align-items-center">
                                    <a href="" class="btn btn-outline-white">English <span class="icon--right material-icons">arrow_drop_down</span></a>
                                </div>
                                <div class="col-md-4 text-md-right">
                                    <p class="mb-8pt d-flex align-items-md-center justify-content-md-end">
                                        <a href="" class="text-white-70 text-underline mr-16pt">Terms</a>
                                        <a href="" class="text-white-70 text-underline">Privacy policy</a>
                                    </p>
                                    <p class="text-white-50 small mb-0">Copyright 2019 &copy; All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- // END drawer-layout__content -->



        <!-- drawer -->
        <div class="mdk-drawer js-mdk-drawer layout-compact__drawer" id="default-drawer">
            <div class="mdk-drawer__content js-sidebar-mini" data-responsive-width="992px" data-layout="compact">

                <div class="sidebar sidebar-mini sidebar-dark sidebar-left" data-perfect-scrollbar>

                    <!-- Navbar toggler -->
                    <a href="erp-dashboard.html" class="navbar-toggler navbar-toggler-custom w-auto d-flex align-items-center justify-content-center" data-toggle="tooltip" data-title="Switch to Vertical App Layout" data-placement="right" data-boundary="window">
                        <span class="material-icons">sync_alt</span>
                    </a>

                    <ul class="nav flex-column sidebar-menu sm-item-bordered" id="sidebar-mini-tabs" role="tablist">
                        <li class="sidebar-account mx-16pt mb-16pt">
                            <a href="#sm_account_1" class="p-4pt d-flex align-items-center justify-content-center" data-toggle="tab" role="tab" aria-controls="sm_account_1" aria-selected="true">
                                <img width="32" height="32" class="rounded-circle mr-8pt" src="assets/images/people/50/guy-3.jpg" alt="account" />
                                <i class="material-icons text-black-20 icon-16pt">keyboard_arrow_down</i>
                            </a>
                        </li>
                        <li class="sidebar-menu-item" data-title="Dashboards" data-placement="right" data-boundary="window">
                            <a class="sidebar-menu-button" href="#sm_dashboards" data-toggle="tab" role="tab" aria-controls="sm_dashboards" aria-selected="true">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i>
                                <span class="sidebar-menu-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item active" data-title="Enterprise" data-placement="right" data-container="body" data-boundary="window">
                            <a class="sidebar-menu-button" href="#sm_enterprise" data-toggle="tab" role="tab" aria-controls="sm_enterprise" aria-selected="false">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">donut_large</i>
                                <span class="sidebar-menu-text">Enterprise</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item " data-title="Productivity" data-placement="right" data-container="body" data-boundary="window">
                            <a class="sidebar-menu-button" href="#sm_productivity" data-toggle="tab" role="tab" aria-controls="sm_productivity">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">access_time</i>
                                <span class="sidebar-menu-text">Productivity</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item " data-title="eCommerce" data-placement="right" data-container="body" data-boundary="window">
                            <a class="sidebar-menu-button" href="#sm_ecommerce" data-toggle="tab" role="tab" aria-controls="sm_ecommerce">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">shopping_cart</i>
                                <span class="sidebar-menu-text">eCommerce</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item " data-title="Messaging" data-placement="right" data-container="body" data-boundary="window">
                            <a class="sidebar-menu-button" href="#sm_messaging" data-toggle="tab" role="tab" aria-controls="sm_messaging">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">message</i>
                                <span class="sidebar-menu-text">Messaging</span>
                            </a>
                        </li>
                        <!-- <li class="sidebar-menu-item " data-title="Marketplace" data-placement="right" data-container="body" data-boundary="window">
          <a class="sidebar-menu-button" href="#sm_marketplace" data-toggle="tab" role="tab" aria-controls="sm_marketplace">
            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">assessment</i>
            <span class="sidebar-menu-text">Marketplace</span>
          </a>
        </li> -->
                        <!-- <li class="sidebar-menu-item " data-title="Education" data-placement="right" data-container="body" data-boundary="window">
          <a class="sidebar-menu-button" href="#sm_education" data-toggle="tab" role="tab" aria-controls="sm_education">
            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">layers</i>
            <span class="sidebar-menu-text">Education</span>
          </a>
        </li>
        <li class="sidebar-menu-item " data-title="CMS" data-placement="right" data-container="body" data-boundary="window">
          <a class="sidebar-menu-button" href="#sm_cms" data-toggle="tab" role="tab" aria-controls="sm_cms">
            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">content_copy</i>
            <span class="sidebar-menu-text">CMS</span>
          </a>
        </li> -->
                        <li class="sidebar-menu-item " data-title="Account" data-placement="right" data-container="body" data-boundary="window">
                            <a class="sidebar-menu-button" href="#sm_account" data-toggle="tab" role="tab" aria-controls="sm_account">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i>
                                <span class="sidebar-menu-text">Account</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item " data-title="Community" data-placement="right" data-container="body" data-boundary="window">
                            <a class="sidebar-menu-button" href="#sm_community" data-toggle="tab" role="tab" aria-controls="sm_community">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">people_outline</i>
                                <span class="sidebar-menu-text">Community</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item" data-title="Components" data-placement="right" data-container="body" data-boundary="window">
                            <a class="sidebar-menu-button" href="#sm_components" data-toggle="tab" role="tab" aria-controls="sm_components">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
                                <span class="sidebar-menu-text">Components</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item" data-title="Plugins" data-placement="right" data-container="body" data-boundary="window">
                            <a class="sidebar-menu-button" href="#sm_plugins" data-toggle="tab" role="tab" aria-controls="sm_plugins">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">folder</i>
                                <span class="sidebar-menu-text">Plugins</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item" data-title="Layouts" data-placement="right" data-boundary="window">
                            <a class="sidebar-menu-button" href="#sm_layouts" data-toggle="tab" role="tab" aria-controls="sm_layouts" aria-selected="false">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">view_compact</i>
                                <span class="sidebar-menu-text">Layouts</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="sidebar sidebar-light sidebar-left flex sidebar-secondary sidebar-p-t" data-perfect-scrollbar>
                    <div class="tab-content">

                        <div class="tab-pane" id="sm_account_1">
                            <div class="sidebar-heading">Account</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="compact-edit-account.html">
                                        <span class="sidebar-menu-text">Edit Account</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="compact-billing.html">Billing</a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="compact-billing-history.html">Payments</a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="compact-login.html">Logout</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane" id="sm_dashboards">
                            <div class="sidebar-heading">Dashboards</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_menu">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">dashboard</span>
                                        Dashboard
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="dashboards_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-index.html">
                                                <span class="sidebar-menu-text">Analytics Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-analytics.html">
                                                <span class="sidebar-menu-text">Analytics 2 Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-projects.html">
                                                <span class="sidebar-menu-text">Projects Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-tasks-board.html">
                                                <span class="sidebar-menu-text">Tasks Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-staff.html">
                                                <span class="sidebar-menu-text">Staff Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ecommerce.html">
                                                <span class="sidebar-menu-text">Shop Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button" href="compact-erp-dashboard.html">
                                                <span class="sidebar-menu-text">ERP Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-crm-dashboard.html">
                                                <span class="sidebar-menu-text">CRM Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-hr-dashboard.html">
                                                <span class="sidebar-menu-text">HR Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-cms-dashboard.html">
                                                <span class="sidebar-menu-text">CMS Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button disabled" href="compact-ui-card-metrics.html">
                                                <span class="sidebar-menu-text">Card Metrics</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade active show" id="sm_enterprise">
                            <div class="sidebar-heading">Enterprise</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item active open">
                                    <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#enterprise_menu">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                                        Enterprise
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse show sm-indent" id="enterprise_menu">
                                        <li class="sidebar-menu-item active">
                                            <a class="sidebar-menu-button" href="compact-erp-dashboard.html">
                                                <span class="sidebar-menu-text">ERP Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-crm-dashboard.html">
                                                <span class="sidebar-menu-text">CRM Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-hr-dashboard.html">
                                                <span class="sidebar-menu-text">HR Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-employees.html">
                                                <span class="sidebar-menu-text">Employees</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-staff.html">
                                                <span class="sidebar-menu-text">Staff</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-leaves.html">
                                                <span class="sidebar-menu-text">Leaves</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button disabled" href="compact-departments.html">
                                                <span class="sidebar-menu-text">Departments</span>
                                            </a>
                                        </li>
                                        <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="compact-documents.html">
    <span class="sidebar-menu-text">Documents</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="compact-attendance.html">
    <span class="sidebar-menu-text">Attendance</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="compact-recruitment.html">
    <span class="sidebar-menu-text">Recruitment</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="compact-payroll.html">
    <span class="sidebar-menu-text">Payroll</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="compact-training.html">
    <span class="sidebar-menu-text">Training</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="compact-employee-profile.html">
    <span class="sidebar-menu-text">Employee Profile</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="compact-accounting.html">
    <span class="sidebar-menu-text">Accounting</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="compact-inventory.html">
    <span class="sidebar-menu-text">Inventory</span>
  </a>
</li> -->
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane " id="sm_productivity">
                            <div class="sidebar-heading">Productivity</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#productivity_menu">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">access_time</span>
                                        Productivity
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="productivity_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-projects.html">
                                                <span class="sidebar-menu-text">Projects</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-tasks-board.html">
                                                <span class="sidebar-menu-text">Tasks Board</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-tasks-list.html">
                                                <span class="sidebar-menu-text">Tasks List</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button disabled" href="compact-kanban.html">
                                                <span class="sidebar-menu-text">Kanban</span>
                                            </a>
                                        </li>
                                        <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="compact-task-details.html">
    <span class="sidebar-menu-text">Task Details</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="compact-team-members.html">
    <span class="sidebar-menu-text">Team Members</span>
  </a>
</li> -->
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane " id="sm_ecommerce">
                            <div class="sidebar-heading">eCommerce</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#ecommerce_menu">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">shopping_cart</span>
                                        eCommerce
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="ecommerce_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ecommerce.html">
                                                <span class="sidebar-menu-text">Shop Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button disabled" href="compact-edit-product.html">
                                                <span class="sidebar-menu-text">Edit Product</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane " id="sm_messaging">
                            <div class="sidebar-heading">Messaging</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#messaging_menu">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">message</span>
                                        Messaging
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="messaging_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-messages.html">
                                                <span class="sidebar-menu-text">Messages</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-email.html">
                                                <span class="sidebar-menu-text">Email</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane " id="sm_marketplace">
                            <div class="sidebar-heading">Marketplace</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#marketplace_menu">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">assessment</span>
                                        Marketplace
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="marketplace_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button disabled" href="compact-digital-product.html">
                                                <span class="sidebar-menu-text">Digital Product</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane " id="sm_education">
                            <div class="sidebar-heading">Education</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#education_menu">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">layers</span>
                                        Education
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="education_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" data-toggle="collapse" href="#student_menu">
                                                <span class="sidebar-menu-text">Student</span>
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu collapse sm-indent" id="student_menu">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled" href="compact-student-dashboard.html">
                                                        <span class="sidebar-menu-text">Student Dashboard</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled" href="compact-student-profile.html">
                                                        <span class="sidebar-menu-text">Student Profile</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled" href="compact-student-my-courses.html">
                                                        <span class="sidebar-menu-text">My Courses</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled" href="compact-student-quiz-results.html">
                                                        <span class="sidebar-menu-text">My Quizzes</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled" href="compact-student-take-course.html">
                                                        <span class="sidebar-menu-text">Take Course</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled" href="compact-student-take-lesson.html">
                                                        <span class="sidebar-menu-text">Take Lesson</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled" href="compact-student-take-quiz.html">
                                                        <span class="sidebar-menu-text">Take Quiz</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled" href="compact-student-quiz-result-details.html">
                                                        <span class="sidebar-menu-text">Quiz Result</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled" href="compact-student-path-assessment.html">
                                                        <span class="sidebar-menu-text">Skill Assessment</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled" href="compact-student-path-assessment-result.html">
                                                        <span class="sidebar-menu-text">Skill Result</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" data-toggle="collapse" href="#instructor_menu">
                                                <span class="sidebar-menu-text">Instructor</span>
                                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                            </a>
                                            <ul class="sidebar-submenu collapse sm-indent" id="instructor_menu">
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled" href="compact-instructor-dashboard.html">
                                                        <span class="sidebar-menu-text">Instructor Dashboard</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled" href="compact-instructor-profile.html">
                                                        <span class="sidebar-menu-text">Instructor Profile</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled" href="compact-instructor-courses.html">
                                                        <span class="sidebar-menu-text">Manage Courses</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled" href="compact-instructor-quizzes.html">
                                                        <span class="sidebar-menu-text">Manage Quizzes</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled" href="compact-instructor-edit-course.html">
                                                        <span class="sidebar-menu-text">Edit Course</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled" href="compact-instructor-edit-quiz.html">
                                                        <span class="sidebar-menu-text">Edit Quiz</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled" href="compact-instructor-earnings.html">
                                                        <span class="sidebar-menu-text">Earnings</span>
                                                    </a>
                                                </li>
                                                <li class="sidebar-menu-item">
                                                    <a class="sidebar-menu-button disabled" href="compact-instructor-statement.html">
                                                        <span class="sidebar-menu-text">Statement</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane " id="sm_cms">
                            <div class="sidebar-heading">CMS</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#cms_menu">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">content_copy</span>
                                        CMS
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="cms_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-cms-dashboard.html">
                                                <span class="sidebar-menu-text">CMS Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-posts.html">
                                                <span class="sidebar-menu-text">Posts</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane " id="sm_account">
                            <div class="sidebar-heading">Account</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#account_menu">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                                        Account
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="account_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-pricing.html">
                                                <span class="sidebar-menu-text">Pricing</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-login.html">
                                                <span class="sidebar-menu-text">Login</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-signup.html">
                                                <span class="sidebar-menu-text">Signup</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-signup-payment.html">
                                                <span class="sidebar-menu-text">Payment</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-reset-password.html">
                                                <span class="sidebar-menu-text">Reset Password</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-change-password.html">
                                                <span class="sidebar-menu-text">Change Password</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-edit-account.html">
                                                <span class="sidebar-menu-text">Edit Account</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-edit-account-profile.html">
                                                <span class="sidebar-menu-text">Profile &amp; Privacy</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-edit-account-notifications.html">
                                                <span class="sidebar-menu-text">Email Notifications</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-edit-account-password.html">
                                                <span class="sidebar-menu-text">Account Password</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-billing.html">
                                                <span class="sidebar-menu-text">Subscription</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-billing-upgrade.html">
                                                <span class="sidebar-menu-text">Upgrade Account</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-billing-payment.html">
                                                <span class="sidebar-menu-text">Payment Information</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-billing-history.html">
                                                <span class="sidebar-menu-text">Payment History</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-billing-invoice.html">
                                                <span class="sidebar-menu-text">Invoice</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane " id="sm_community">
                            <div class="sidebar-heading">Community</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#community_menu">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">people_outline</span>
                                        Community
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="community_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-faq.html">
                                                <span class="sidebar-menu-text">FAQ</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-discussions.html">
                                                <span class="sidebar-menu-text">Discussions</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-discussion.html">
                                                <span class="sidebar-menu-text">Discussion Details</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-discussions-ask.html">
                                                <span class="sidebar-menu-text">Ask Question</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="sm_components">
                            <div class="sidebar-heading">UI Components</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#components_menu">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">tune</span>
                                        Components
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="components_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-buttons.html">
                                                <span class="sidebar-menu-text">Buttons</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-avatars.html">
                                                <span class="sidebar-menu-text">Avatars</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-forms.html">
                                                <span class="sidebar-menu-text">Forms</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-loaders.html">
                                                <span class="sidebar-menu-text">Loaders</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-tables.html">
                                                <span class="sidebar-menu-text">Tables</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-cards.html">
                                                <span class="sidebar-menu-text">Cards</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-icons.html">
                                                <span class="sidebar-menu-text">Icons</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-tabs.html">
                                                <span class="sidebar-menu-text">Tabs</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-alerts.html">
                                                <span class="sidebar-menu-text">Alerts</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-badges.html">
                                                <span class="sidebar-menu-text">Badges</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-progress.html">
                                                <span class="sidebar-menu-text">Progress</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-pagination.html">
                                                <span class="sidebar-menu-text">Pagination</span>
                                            </a>
                                        </li>
                                        <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="compact-ui-typography.html">
    <span class="sidebar-menu-text">Typography</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="compact-ui-colors.html">
    <span class="sidebar-menu-text">Colors</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="compact-ui-breadcrumb.html">
    <span class="sidebar-menu-text">Breadcrumb</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="compact-ui-accordions.html">
    <span class="sidebar-menu-text">Accordions</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="compact-ui-modals.html">
    <span class="sidebar-menu-text">Modals</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="compact-ui-chips.html">
    <span class="sidebar-menu-text">Chips</span>
  </a>
</li> -->
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button disabled" href="">
                                                <span class="sidebar-menu-text">Disabled</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="sm_plugins">
                            <div class="sidebar-heading">Plugins</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item open">
                                    <a class="sidebar-menu-button" data-toggle="collapse" href="#plugins_menu">
                                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">folder</span>
                                        Plugins
                                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                    </a>
                                    <ul class="sidebar-submenu collapse sm-indent" id="plugins_menu">
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-charts.html">
                                                <span class="sidebar-menu-text">Charts</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-flatpickr.html">
                                                <span class="sidebar-menu-text">Flatpickr</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-daterangepicker.html">
                                                <span class="sidebar-menu-text">Date Range Picker</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-dragula.html">
                                                <span class="sidebar-menu-text">Dragula</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-dropzone.html">
                                                <span class="sidebar-menu-text">Dropzone</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-range-sliders.html">
                                                <span class="sidebar-menu-text">Range Sliders</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-quill.html">
                                                <span class="sidebar-menu-text">Quill</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-select2.html">
                                                <span class="sidebar-menu-text">Select2</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-nestable.html">
                                                <span class="sidebar-menu-text">Nestable</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-fancytree.html">
                                                <span class="sidebar-menu-text">Fancy Tree</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-maps-vector.html">
                                                <span class="sidebar-menu-text">Vector Maps</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-sweet-alert.html">
                                                <span class="sidebar-menu-text">Sweet Alert</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button" href="compact-ui-plugin-toastr.html">
                                                <span class="sidebar-menu-text">Toastr</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-menu-item">
                                            <a class="sidebar-menu-button disabled" href="">
                                                <span class="sidebar-menu-text">Disabled</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="sm_layouts">
                            <div class="sidebar-heading">Layouts</div>
                            <ul class="sidebar-menu">
                                <li class="sidebar-menu-item active">
                                    <a class="sidebar-menu-button" href="compact-erp-dashboard.html">
                                        <span class="sidebar-menu-text">Compact</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="mini-erp-dashboard.html">
                                        <span class="sidebar-menu-text">Mini</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="erp-dashboard.html">
                                        <span class="sidebar-menu-text">App</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="boxed-erp-dashboard.html">
                                        <span class="sidebar-menu-text">Boxed</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="sticky-erp-dashboard.html">
                                        <span class="sidebar-menu-text">Sticky</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="fixed-erp-dashboard.html">
                                        <span class="sidebar-menu-text">Fixed</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-heading mt-3"><strong>Select company</strong></div>
                    <a href="" class="dropdown-item active d-flex align-items-center">

                        <div class="avatar avatar-sm mr-8pt">

                            <span class="avatar-title rounded bg-primary">FM</span>

                        </div>

                        <small class="ml-4pt flex">
                            <span class="d-flex flex-column">
                                <strong class="text-100">FrontendMatter Inc.</strong>
                                <span class="text-50">Administrator</span>
                            </span>
                        </small>
                    </a>
                    <a href="" class="dropdown-item d-flex align-items-center mb-3">

                        <div class="avatar avatar-sm mr-8pt">

                            <span class="avatar-title rounded bg-accent">HH</span>

                        </div>

                        <small class="ml-4pt flex">
                            <span class="d-flex flex-column">
                                <strong class="text-100">HumaHuma Inc.</strong>
                                <span class="text-50">Publisher</span>
                            </span>
                        </small>
                    </a>
                </div>

            </div>
        </div>
        <!-- // END drawer -->
    </div>
    <!-- // END drawer-layout -->

    <!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings layout-active="compact" :layout-location="{
      'compact': 'compact-erp-dashboard.html',
      'mini': 'mini-erp-dashboard.html',
      'app': 'erp-dashboard.html',
      'boxed': 'boxed-erp-dashboard.html',
      'sticky': 'sticky-erp-dashboard.html',
      'default': 'fixed-erp-dashboard.html'
    }" sidebar-type="light" sidebar-variant="bg-body"></app-settings>
    </div>
    <!-- Modal -->
    <div class="modal menu-modal" id="apps" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-i8-plus bg-body pr-0">
                            <div class="py-16pt pl-16pt menu">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#apps-dashboards" data-toggle="tab">Dashboards</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#apps-enterprise" data-toggle="tab">Enterprise</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#apps-productivity" data-toggle="tab">Productivity</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#apps-ecommerce" data-toggle="tab">eCommerce</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#apps-messaging" data-toggle="tab">Messaging</a>
                                    </li>
                                    <!-- <li class="nav-item">
                  <a class="nav-link" href="#apps-marketplace" data-toggle="tab">Marketplace</a>
                </li> -->
                                    <!-- <li class="nav-item">
                  <a class="nav-link" href="#apps-education" data-toggle="tab">Education</a>
                </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="#apps-cms" data-toggle="tab">CMS</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6 col-i8-plus-auto tab-content">



                            <div id="apps-dashboards" class="tab-pane show active">
                                <div class="row no-gutters">

                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt">
                                            <h5 class="text-black-100">Dashboards</h5>
                                            <ul class="nav flex-column mb-24pt">

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-index.html">Analytics Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-analytics.html">Analytics 2 Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-projects.html">Projects Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-tasks.html">Tasks Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-staff.html">Staff Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-ecommerce.html">eCommerce Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-erp-dashboard.html">ERP Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-crm-dashboard.html">CRM Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-hr-dashboard.html">HR Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-cms-dashboard.html">CMS Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="compact-card-metrics.html">Card Metrics</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>



                            <div id="apps-enterprise" class="tab-pane">
                                <div class="row no-gutters">

                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt">
                                            <h5 class="text-black-100">Enterprise</h5>
                                            <ul class="nav flex-column mb-24pt">

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-erp-dashboard.html">ERP Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-crm-dashboard.html">CRM Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="compact-documents.html">Documents</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="compact-accounting.html">Accounting</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="compact-inventory.html">Inventory</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt">
                                            <h5 class="text-black-100">HR</h5>
                                            <ul class="nav flex-column mb-24pt">

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-hr-dashboard.html">HR Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-employees.html">Employees</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-staff.html">Staff</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-leaves.html">Leaves</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="compact-departments.html">Departments</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="compact-attendance.html">Attendance</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="compact-recruitment.html">Recruitment</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="compact-payroll.html">Payroll</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="compact-training.html">Training</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="compact-employee-profile.html">Employee Profile</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>



                            <div id="apps-productivity" class="tab-pane">
                                <div class="row no-gutters">

                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt">
                                            <h5 class="text-black-100">Productivity</h5>
                                            <ul class="nav flex-column mb-24pt">

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-projects.html">Projects</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-tasks-board.html">Tasks Board</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-tasks-list.html">Tasks List</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="compact-kanban.html">Kanban</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="compact-task-details.html">Task Details</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="compact-team-members.html">Team Members</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>



                            <div id="apps-ecommerce" class="tab-pane">
                                <div class="row no-gutters">

                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt">
                                            <h5 class="text-black-100">eCommerce</h5>
                                            <ul class="nav flex-column mb-24pt">

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-ecommerce.html">Shop Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="compact-edit-product.html">Edit Product</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>



                            <div id="apps-messaging" class="tab-pane">
                                <div class="row no-gutters">

                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt">
                                            <h5 class="text-black-100">Messaging</h5>
                                            <ul class="nav flex-column mb-24pt">

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-messages.html">Messages</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-email.html">Email</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>







                            <div id="apps-cms" class="tab-pane">
                                <div class="row no-gutters">

                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt">
                                            <h5 class="text-black-100">Content</h5>
                                            <ul class="nav flex-column mb-24pt">

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-cms-dashboard.html">CMS Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="compact-posts.html">Posts</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- DOM Factory -->
    <script src="assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- Fix Footer -->
    <script src="assets/vendor/fix-footer.js"></script>

    <!-- Chart.js -->
    <script src="assets/vendor/Chart.min.js"></script>

    <!-- App JS -->
    <script src="assets/js/app.js"></script>

    <!-- Highlight.js -->
    <script src="assets/js/hljs.js"></script>



    <!-- Global Settings -->
    <script src="assets/js/settings.js"></script>

    <!-- Moment.js -->
    <script src="assets/vendor/moment.min.js"></script>
    <script src="assets/vendor/moment-range.min.js"></script>

    <!-- Flatpickr -->
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="assets/js/flatpickr.js"></script>

    <!-- Chart.js -->
    <script src="assets/vendor/Chart.min.js"></script>
    <script src="assets/js/chartjs.js"></script>
    <script src="assets/js/chartjs-rounded-bar.js"></script>

    <!-- Chart.js Samples -->
    <script src="assets/js/page.erp-dashboard.js"></script>

    <!-- List.js -->
    <script src="assets/vendor/list.min.js"></script>
    <script src="assets/js/list.js"></script>

    <!-- Tables -->
    <script src="assets/js/toggle-check-all.js"></script>
    <script src="assets/js/check-selected-row.js"></script>

    <!-- Sidebar Mini JS -->
    <script src="assets/js/sidebar-mini.js"></script>
    <script>
        (function() {
            'use strict';

            // ENABLE sidebar menu tabs
            $('#sidebar-mini-tabs [data-toggle="tab"]').on('click', function(e) {
                e.preventDefault()
                $(this).tab('show')
            })
        })()
    </script>


    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>
</body>

</html>