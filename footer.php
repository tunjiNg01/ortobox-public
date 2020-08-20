                    <div class="js-fix-footer footer border-top-2">
<!--
                <div class="container-fluid page__container page-section d-flex flex-column">
                    <p class="text-70 brand mb-24pt">
                        <img class="brand-icon" src="assets/images/logo/black-70@2x.png" width="30" alt="Ortorbox"> Ortorbox
                    </p>
                    <p class="measure-lead-max text-muted mb-0 small">Ortorbox is a beautifully crafted user interface for modern Business Admin Web Applications, with examples for many pages needed for Customer Relationship Management, Enterprise Resource Planning, Ortorboxn Resources, Content Management System, Project Management, Tasks, eCommerce, Messaging and Account Management.</p>
                </div>
                <div class="pb-16pt pb-lg-24pt">
                    <div class="container-fluid page__container">
                        <div class="bg-dark rounded page-section py-lg-32pt px-16pt px-lg-24pt">
                            <div class="row">
                                <div class="col-md-2 col-sm-4 mb-24pt mb-md-0">
                                    <p class="text-white-70 mb-8pt"><strong>Follow us</strong></p>
                                    <nav class="nav nav-links nav--flush">
                                        <a href="#" class="nav-link mr-8pt"><img src="assets/images/icon/footer/facebook-square@2x.png" width="24" height="24" alt="Facebook"></a>
                                        <a href="#" class="nav-link mr-8pt"><img src="assets/images/icon/footer/twitter-square@2x.png" width="24" height="24" alt="Twitter"></a>
                                        <a href="#" class="nav-link mr-8pt"><img src="assets/images/icon/footer/vimeo-square@2x.png" width="24" height="24" alt="Vimeo"></a>
                                        <a href="#" class="nav-link"><img src="assets/images/icon/footer/youtube-square@2x.png" width="24" height="24" alt="YouTube"></a>
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
                </div>-->
            </div>
        </div>
        <!-- // END drawer-layout__content -->
        <?php include 'sidebar.php'; ?>
    </div>
    <!-- // END drawer-layout -->

    <!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings layout-active="app" :layout-location="{
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
                                                    <a class="nav-link2 dropdown-item px-0" href="index.html">Analytics Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="analytics.html">Analytics 2 Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="projects.html">Projects Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="tasks.html">Tasks Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="staff.html">Staff Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="ecommerce.html">eCommerce Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="erp-dashboard.html">ERP Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="crm-dashboard.html">CRM Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="hr-dashboard.html">HR Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="cms-dashboard.html">CMS Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="card-metrics.html">Card Metrics</a>
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
                                                    <a class="nav-link2 dropdown-item px-0" href="erp-dashboard.html">ERP Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="crm-dashboard.html">CRM Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="documents.html">Documents</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="accounting.html">Accounting</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="inventory.html">Inventory</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-6 p-0">
                                        <div class="p-24pt">
                                            <h5 class="text-black-100">HR</h5>
                                            <ul class="nav flex-column mb-24pt">

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="hr-dashboard.html">HR Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="employees.html">Employees</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="staff.html">Staff</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="leaves.html">Leaves</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="departments.html">Departments</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="attendance.html">Attendance</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="recruitment.html">Recruitment</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="payroll.html">Payroll</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="training.html">Training</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="employee-profile.html">Employee Profile</a>
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
                                                    <a class="nav-link2 dropdown-item px-0" href="projects.html">Projects</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="tasks-board.html">Tasks Board</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="tasks-list.html">Tasks List</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="kanban.html">Kanban</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="task-details.html">Task Details</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="team-members.html">Team Members</a>
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
                                                    <a class="nav-link2 dropdown-item px-0" href="ecommerce.html">Shop Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0 disabled" href="edit-product.html">Edit Product</a>
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
                                                    <a class="nav-link2 dropdown-item px-0" href="messages.html">Messages</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="email.html">Email</a>
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
                                                    <a class="nav-link2 dropdown-item px-0" href="cms-dashboard.html">CMS Dashboard</a>
                                                </li>

                                                <li class="nav-item2">
                                                    <a class="nav-link2 dropdown-item px-0" href="posts.html">Posts</a>
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
    
    <!-- Touchspin -->
    <script src="assets/vendor/jquery.bootstrap-touchspin.js"></script>
    <script src="assets/js/touchspin.js"></script>

    <!-- Flatpickr -->
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="assets/js/flatpickr.js"></script>

    <!-- DateRangePicker -->
    <script src="assets/vendor/moment.min.js"></script>
    <script src="assets/vendor/daterangepicker.js"></script>
    <script src="assets/js/daterangepicker.js"></script>

    <!-- Dropzone -->
    <script src="assets/vendor/dropzone.min.js"></script>
    <script src="assets/js/dropzone.js"></script>

    <!-- jQuery Mask Plugin -->
    <script src="assets/vendor/jquery.mask.min.js"></script>

    <!-- Quill -->
    <script src="assets/vendor/quill.min.js"></script>
    <script src="assets/js/quill.js"></script>

    <!-- Select2 -->
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/js/select2.js"></script>
            <!-- Sidebar Mini JS -->
    <script src="assets/js/sidebar-mini.js"></script>

    <script>
        $(document).ready(function(){
            $('.navbar-toggler').on('click', function(e){
                e.preventDefault();
                $clikedbtn = $(this);
                var title = $(this).data('title');
                $body = $('.layout-sticky-subnav');
                if($body.hasClass('layout-compact')){
                    $body.removeClass('layout-compact');
                    $body.addClass('layout-app');
                    title.val('Switch to Compact Vertical Layout');
                }else if($body.hasClass('layout-app')){
                    $body.removeClass('layout-app');
                    $body.addClass('layout-compact');
                    title.val('Switch to Vertical App Layout');
                    sidebarMini();
                }
            });
        });
        
    </script>

    <script>
        function sidebarMini(){
            (function() {
                'use strict';

                // ENABLE sidebar menu tabs
                $('#sidebar-mini-tabs [data-toggle="tab"]').on('click', function(e) {
                    e.preventDefault()
                    $(this).tab('show')
                })
            })()
        }
    </script>

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>
</body>

</html>