        <?php 
        if (isset($_GET['view']) && $_GET['view'] == 'edit'): 
            include 'edit-purchase-requisition.php';
        elseif ( isset($_GET['view']) && $_GET['view'] == 'details' && isset($_GET['record']) ):
            include 'details-purchase-requisition.php';
        else: ?>
            <div class="border-bottom-2 py-32pt position-relative z-1">
                <div class="container-fluid page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                    <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                        <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                            <h2 class="mb-0"><?php echo set_title($_GET['p']) ?></h2>


                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="?module=procurement"><?php echo set_title($_GET['module']) ?></a></li>

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
                            <a href="?module=procurement&p=purchase-requisition&view=edit" class="btn btn-accent">New Purchase Requisition</a>
                        </div>
                    </div>

                </div>
            </div>

                        <div class="container-fluid page__container">
                <div class="page-section">

                    <div class="page-separator">
                        <div class="page-separator__text"><?php echo set_title($_GET['p']) ?></div>
                    </div>

                    <div class="card dashboard-area-tabs mb-32pt">
                        <div class="card-header p-0 nav">
                            <div class="row no-gutters" role="tablist">
                                <div class="col-auto">
                                    <a href="#" data-toggle="tab" role="tab" aria-selected="true" class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                        <span class="h2 mb-0 mr-3">1</span>
                                        <span class="flex d-flex flex-column">
                                            <strong>Active</strong>
                                            <small class="text-50">Purchase Pending</small>
                                        </span>
                                    </a>
                                </div>
                                <div class="col-auto border-left border-right">
                                    <a href="#" data-toggle="tab" role="tab" aria-selected="false" class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                        <span class="h2 mb-0 mr-3">2</span>
                                        <span class="flex d-flex flex-column">
                                            <strong>Archived</strong>
                                            <small class="text-50">Approved</small>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-date" data-lists-sort-desc="true" data-lists-values='["js-lists-values-lead", "js-lists-values-project", "js-lists-values-status", "js-lists-values-budget", "js-lists-values-date"]'>
                            <div class="card-header row">
                                        <div class="col-lg-8"></div>
                                        <div class="col-lg-4">
                                            <div class="search-form">
                                                <input type="text" class="form-control search" placeholder="Search ...">
                                                <button class="btn" type="button" role="button"><i class="material-icons">search</i></button>
                                            </div> 
                                        </div>
                                       
                                    </div>



                            <table class="table mb-0 thead-border-top-0 table-nowrap">
                                <thead>
                                    <tr>
                                        <th style="" class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input js-toggle-check-all" data-target="#projects" id="customCheckAll">
                                                <label class="custom-control-label" for="customCheckAll"><span class="text-hide">Toggle all</span></label>
                                            </div>
                                        </th>

                                        <th><a href="javascript:void(0)" class="sort" data-sort="js-lists-values-project">Project Name</a></th>

                                        <th ><a href="javascript:void(0)" class="sort" data-sort="js-lists-values-vendor">Vendor</a></th>

                                        <th >
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-date">Needed Date</a>
                                        </th>

                                        <th >
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-assigned">Assigned To</a>
                                        </th>
                                        <th >
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-contract">Status</a>
                                        </th>
                                        <th ></th>
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
                                            <a href="?module=procurement&p=purchase-requisition&view=details&record=12">
                                                <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                    <div class="avatar avatar-32pt mr-8pt">


                                                    <span class="avatar-title rounded-circle">BN</span>

                                                    </div>
                                                    <div class="media-body">


                                                        <div class="d-flex align-items-center">
                                                            <div class="flex d-flex flex-column">
                                                                <p class="mb-0"><strong class="js-lists-values-project">Billy Nunez</strong></p>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="?module=procurement&p=purchase-requisition&view=details&record=12">
                                                <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                    <div class="avatar avatar-32pt mr-8pt">


                                                        <span class="avatar-title rounded-circle">BN</span>

                                                    </div>
                                                    <div class="media-body">


                                                        <div class="d-flex align-items-center">
                                                            <div class="flex d-flex flex-column">
                                                                <p class="mb-0"><strong class="js-lists-values-item">Billy Nunez</strong></p>
                                                                <small class="js-lists-values-email text-50">Quality Assurance</small>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </a>
                                        </td>

                                        <td>
                                            <a href="?module=procurement&p=purchase-requisition&view=details&record=12">
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-date"><strong>19/02/2019</strong></small>
                                                    <small class="text-50">18 days</small>
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="?module=procurement&p=purchase-requisition&view=details&record=12">
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-assigned"><strong>Administrator</strong></small>
                                                    <small class="text-50">18 days</small>
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="?module=procurement&p=purchase-requisition&view=details&record=12">
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-contract"><strong>approved</strong></small>
                                                    <small class="text-50">18 days</small>
                                                </div>
                                            </a>
                                        </td>
                                    
                                        <td class="text-right dropup">
                                            <a href="#" class="dropdown-toggle text-50" data-caret="false" data-toggle="dropdown" class=""><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Approve</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                                <a class="dropdown-item" href="#">Edit</a>
                                            </div>
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

                </div>
            </div>
<?php endif; ?>













