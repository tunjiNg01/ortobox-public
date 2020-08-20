

            <div class="container page__container">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="?module=projects"><?php echo set_title($_GET['module']); ?></a></li>
                    <li class="breadcrumb-item"><a href="?module=projects&p=project-milestone"><?php echo set_title($_GET['p']); ?></a></li>
                    <li class="breadcrumb-item active"><?php echo isset($_GET['record']) ? 'Details' : 'Create'; ?></li>
                </ol>
            </div>
            <div class="container-fluid page__container">
                <div class="page-section">

                    <div class="row">

                        <div class="col-lg-12">
                            <form>
                            <div class="card card--raised">
                                <div class="card-header d-flex align-items-center">
                                    <div class="flex">
                                        <h6 class="card-title">Project Milestone</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                <div class="">
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="form-label" for="validationSample01">Project Milestone Name</label>
                                            <input type="text" class="form-control" name="project-milestone-name" id="validationSample01" placeholder="Project Milestone Name" required="">
                                            <!--<div class="invalid-feedback">Please provide a project milestone name.</div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="form-label" for="validationSample02">Project</label>
                                            <input type="text" class="form-control" name="project" id="validationSample02" placeholder="Project Name" required="">
                                            <!--<div class="invalid-feedback"></div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="form-label" for="validationSample03">Project Number</label>
                                            <select class="form-control" name="project-no" id="validationSample03" required="">
                                                <option value="" selected hidden disabled>Select Project Number</option>
                                                <option></option>
                                            </select>
                                            <!--<div class="invalid-feedback"></div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="text-label form-label" for="dateRangePickerSample01">Estimated Work Date</label>
                                            <input id="dateRangePickerSample01" name="estimated-work-time" type="text" class="form-control" placeholder="Date example" data-toggle="daterangepicker" data-daterangepicker-drops="up">
                                            <!--<div class="invalid-feedback"></div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="text-label form-label" for="dateRangePickerSample02">Target Start Date</label>
                                            <input id="dateRangePickerSample02" name="target-start-date" type="date" class="form-control" placeholder="Date example" data-toggle="daterangepicker" data-daterangepicker-drops="up" data-daterangepicker-start-date="08/12/2020" data-daterangepicker-single-date-picker="true">
                                            <!--<div class="invalid-feedback"></div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                       </div>
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="text-label form-label" for="dateRangePickerSample03">Target End Date</label>
                                            <input id="dateRangePickerSample03" name="target-end-date" type="date" class="form-control" placeholder="Date example" data-toggle="daterangepicker" data-daterangepicker-drops="up" data-daterangepicker-start-date="08/12/2020" data-daterangepicker-single-date-picker="true">
                                            <!--<div class="invalid-feedback"></div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-0">
                                            <label for="select01" class="form-label">Assigned To</label>
                                            <select id="select01" name="assigned-to" data-toggle="select" multiple class="form-control">
                                                <option selected="">John Doe</option>
                                                <option selected="">Green Doe</option>
                                                <optgroup label="Others">
                                                    <option value="">Adrelle Fish</option>
                                                    <option value="">Matthew Rick</option>
                                                </optgroup>
                                            </select>
                                            <!--<div class="invalid-feedback"></div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="form-label" for="select02">Set Priority</label>
                                            <select id="select02" name="priority" class="form-control">
                                                <option disabled hidden selected>Set Priority</option>
                                                <option>Medium</option>
                                                <option>High</option>
                                                <option>Low</option>
                                            </select> 
                                            <!--<div class="invalid-feedback"></div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                       </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-0">
                                            <label for="touch-spin-1" class="form-label">Allocation</label>
                                            <input id="touch-spin-1" data-toggle="touch-spin" data-min="1" data-max="1000000" data-step="1" type="text" name="allocation" class="form-control" />
                                        </div>
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="form-label" for="validationSample03">Status</label>
                                            <select type="text" name="status" class="form-control" id="validationSample03" required="">
                                                <option value="" hidden="" selected="" disabled="">Select Status</option>
                                                <option>Done</option>
                                                <option>Doing</option>
                                            </select>
                                            <!--<div class="invalid-feedback"></div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-0">
                                            <label for="select03" class="form-label">Share with users</label>
                                            <select id="select03" name="share-with-users" data-toggle="select" multiple class="form-control">
                                                <option>John Doe</option>
                                                <option>Green Doe</option>
                                                <option>Adrelle Fish</option>
                                                <option>Matthew Rick</option>
                                            </select>
                                            <!--<div class="invalid-feedback"></div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                        <div class="col-12 col-md-6 mb-0">

                                       </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="card card--raised">
                                <div class="card-header d-flex align-items-center">
                                    <div class="flex">
                                        <h6 class="card-title">Description</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Description</label>
                                    <div style="height: 150px;" data-toggle="quill" data-quill-placeholder="Description">
                                        <textarea name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card card--raised">
                                <div class="card-header d-flex align-items-center">
                                    <div class="flex">
                                        <h6 class="card-title">Comment</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Comment</label>
                                    <div style="height: 150px;" data-toggle="quill" data-quill-placeholder="Comment">
                                        <textarea name="comment"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card card--raised">
                                <div class="card-header d-flex align-items-center">
                                    <div class="flex">
                                        <h6 class="card-title">Attachments (PDF, PNG, ETC.)</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="flex">

                                        <div class="dropzone dropzone-multiple w-100" data-toggle="dropzone" data-dropzone-multiple data-dropzone-url="http://" data-dropzone-files=''>

                                            <div class="fallback">
                                                <div class="custom-file">
                                                    <input type="file" name="multiplefiles" class="custom-file-input" id="customFileUploadMultiple" multiple>
                                                    <label class="custom-file-label" for="customFileUploadMultiple">Choose file</label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-danger" type="submit">Cancel</button>
                            </form>

                        </div>
                    </div>



                </div>
            </div>