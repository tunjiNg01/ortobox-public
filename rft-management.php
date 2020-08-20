        <?php 
        if ( isset($_GET['form']) && $_GET['form'] == 'construction-proposal'): 
            include 'construction-bid-proposal.php';
        elseif ( isset($_GET['form']) && $_GET['form'] == 'construction-sheet' ):
            include 'construction-bid-sheet.php';
        elseif ( isset($_GET['form']) && $_GET['form'] == 'general-proposal' ):
            include 'general-bid-proposal.php';        
        else: ?>
            <div class="border-bottom-2 py-32pt position-relative z-1">
                <div class="container-fluid page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                    <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                        <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                            <h2 class="mb-0">RTF</h2>


                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="?module=sourcing"><?php echo set_title($_GET['module']); ?></a></li>

                                <li class="breadcrumb-item active">
                                    <?php echo set_title($_GET['p']); ?>
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
                            <div class="dropdown">
                                <a class="border rounded d-flex align-items-center p-16pt" data-toggle="dropdown" data-caret="false">New Bid Form                                      
                                    <i class="material-icons icon-16pt text-50 ml-4pt">arrow_drop_down</i>
                                </a>
                                <div class="dropdown-menu w-200">
                                    <div class="dropdown-header"><strong>Select Bid Form</strong></div>
                                    <a href="?module=sourcing&p=rft-management&form=construction-bid-proposal" class="dropdown-item active d-flex align-items-center">
                                        Construction Bid Proposal
                                    </a>
                                    <a href="?module=sourcing&p=rft-management&form=construction-sheet" class="dropdown-item d-flex align-items-center">
                                        Construction Bid
                                    </a>
                                    <a href="" class="dropdown-item d-flex align-items-center">
                                        Cleaning Service Bid
                                    </a>
                                    <a href="" class="dropdown-item d-flex align-items-center">
                                        Independent Contractor Bid
                                    </a>
                                    <a href="?module=sourcing&p=rft-management&form=general-bid-proposal" class="dropdown-item d-flex align-items-center">
                                        General Bid Proposal
                                    </a>
                                </div>
                            </div>
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

                    </div>

                </div>
            </div>
<?php endif; ?>













