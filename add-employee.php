

            <div class="border-bottom-2 py-32pt position-relative z-1">
                <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                    <div class="flex d-flex flex-column flex-sm-row align-items-center">

                        <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                            <h2 class="mb-0">Account</h2>


                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="index.html"><?php echo set_title($_GET['module'])?></a></li>

                                <li class="breadcrumb-item">

                                    <a href=""><?php echo set_title($_GET['p'])?></a>

                                </li>

                                <li class="breadcrumb-item active">

                                    <?php echo set_title($_GET['view'])?>

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


                </div>
            </div>















            <div class="container page__container">
                <form action="compact-edit-account.html">
                    <div class="row">
                        <div class="col-lg-9 pr-lg-0">

                            <div class="page-section">
                                <h4>Profile &amp; Privacy</h4>
                                <div class="list-group list-group-form">
                                    <div class="list-group-item">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="col-form-label form-label col-sm-3">Your photo</label>
                                            <div class="col-sm-9 media align-items-center">
                                                <a href="" class="media-left mr-16pt">
                                                    <img src="assets/images/people/110/guy-3.jpg" alt="people" width="56" class="rounded-circle" />
                                                </a>
                                                <div class="media-body">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="col-form-label form-label col-sm-3">Huma profile name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="Huma.com/alexander" placeholder="Your profile name ...">
                                                <small class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="col-form-label form-label col-sm-3">About you</label>
                                            <div class="col-sm-9">
                                                <textarea rows="3" class="form-control" placeholder="About you ..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" checked id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Display your real name on your profile</label>
                                            <small class="form-text text-muted">If unchecked, your profile name will be displayed instead of your full name.</small>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" checked id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Allow everyone to see your profile</label>
                                            <small class="form-text text-muted">If unchecked, your profile will be private and no one except you will be able to view it.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 page-nav">
                            <div class="page-section pt-lg-112pt">
                                <nav class="nav page-nav__menu">
                                    <a class="nav-link" href="compact-edit-account.html">Basic Information</a>
                                    <a class="nav-link active" href="compact-edit-account-profile.html">Profile &amp; Privacy</a>
                                    <a class="nav-link" href="compact-edit-account-notifications.html">Email Notifications</a>
                                    <a class="nav-link" href="compact-edit-account-password.html">Change Password</a>
                                </nav>
                                <div class="page-nav__content">
                                    <button type="submit" class="btn btn-accent">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>











<!--
<div class="container-fluid page__container">
              <form action="edit-account.html">
                  <div class="row">
                      <div class="col-lg-9 pr-lg-0">

                          <div class="page-section">
                              <h4>Basic Information</h4>
                              <div class="list-group list-group-form">
                                  <div class="list-group-item">
                                      <div class="form-group row align-items-center mb-0">
                                          <label class="form-label col-form-label col-sm-3">First name</label>
                                          <div class="col-sm-9">
                                              <input type="text" class="form-control" value="Alexander" placeholder="Your first name ...">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="list-group-item">
                                      <div class="form-group row align-items-center mb-0">
                                          <label class="form-label col-form-label col-sm-3">Last name</label>
                                          <div class="col-sm-9">
                                              <input type="text" class="form-control" value="Watson" placeholder="Your last name ...">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="list-group-item">
                                      <div class="form-group row align-items-center mb-0">
                                          <label class="form-label col-form-label col-sm-3">Email address</label>
                                          <div class="col-sm-9">
                                              <input type="email" class="form-control" value="alexander.watson@fake-mail.com" placeholder="Your email address ...">
                                              <small class="form-text text-muted">Note that if you change your email, you will have to confirm it again.</small>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                      </div>
                      <div class="col-lg-3 page-nav">
                          <div class="page-section pt-lg-112pt">
                              <nav class="nav page-nav__menu">
                                  <a class="nav-link active" href="edit-account.html">Basic Information</a>
                                  <a class="nav-link" href="edit-account-profile.html">Profile &amp; Privacy</a>
                                  <a class="nav-link" href="edit-account-notifications.html">Email Notifications</a>
                                  <a class="nav-link" href="edit-account-password.html">Change Password</a>
                              </nav>
                              <div class="page-nav__content">
                                  <button type="submit" class="btn btn-accent">Save changes</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </form>
          </div>



--->



<!---





            <div class="container-fluid page__container">
                <form action="edit-account.html">
                    <div class="row">
                        <div class="col-lg-9 pr-lg-0">

                            <div class="page-section">
                                <h4>Change Password</h4>

                                <div class="alert alert-soft-warning">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="mr-8pt">
                                            <i class="material-icons">check_circle</i>
                                        </div>
                                        <div class="flex" style="min-width: 180px">
                                            <small class="text-100">
                                                An email with password reset instructions has been sent to your email address, if it exists on our system.
                                            </small>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group list-group-form">
                                    <div class="list-group-item">
                                        <div class="form-group row mb-0">
                                            <label class="col-form-label col-sm-3">New password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" placeholder="Password ...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="form-group row mb-0">
                                            <label class="col-form-label col-sm-3">Confirm password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" placeholder="Confirm password ...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 page-nav">
                            <div class="page-section pt-lg-112pt">
                                <nav class="nav page-nav__menu">
                                    <a class="nav-link" href="edit-account.html">Basic Information</a>
                                    <a class="nav-link" href="edit-account-profile.html">Profile &amp; Privacy</a>
                                    <a class="nav-link" href="edit-account-notifications.html">Email Notifications</a>
                                    <a class="nav-link active" href="edit-account-password.html">Change Password</a>
                                </nav>
                                <div class="page-nav__content">
                                    <button type="submit" class="btn btn-accent">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>




            <div class="js-fix-footer footer border-top-2">
                <div class="container-fluid page__container page-section d-flex flex-column">
                    <p class="text-70 brand mb-24pt">
                        <img class="brand-icon" src="assets/images/logo/black-70@2x.png" width="30" alt="Huma"> Huma
                    </p>
                    <p class="measure-lead-max text-muted mb-0 small">Huma is a beautifully crafted user interface for modern Business Admin Web Applications, with examples for many pages needed for Customer Relationship Management, Enterprise Resource Planning, Human Resources, Content Management System, Project Management, Tasks, eCommerce, Messaging and Account Management.</p>
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
                                        <!-- <a href="#" class="nav-link"><img src="assets/images/icon/footer/youtube-square@2x.png" width="24" height="24" alt="YouTube"></a> -->
                                  <!--  </nav>
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
        <!--- // END drawer-layout__content -->

--->
