

            <div class="container page__container">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="?module=projects"><?php echo set_title($_GET['module']); ?></a></li>
                    <li class="breadcrumb-item"><a href="?module=projects&p=project-task"><?php echo set_title($_GET['p']); ?></a></li>
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
                                        <h6 class="card-title">Project Task Details</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                <div class="was-validated">
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="form-label" for="select01">Project milestone</label>
                                            <select id="select01" name="project-milestone" data-toggle="select" class="form-control">
                                                <option value="" selected="" hidden="" disabled="">Select Project Milestone</option>
            
                                            </select>
                                            <!--<div class="invalid-feedback">Please provide a project milestone name.</div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                        <div class="col-12 col-md-6 mb-0">
                                            <label for="select02" class="form-label">Assigned To</label>
                                            <select id="select02" name="assigned" data-toggle="select" multiple class="form-control">
                                                <option selected="">Joseph</option>
                                                <option selected="">John</option>
                                                <optgroup label="Others">
                                                    <option>Racheal</option>
                                                    <option>Bradd</option>
                                                </optgroup>
                                            </select>
                                            <!--<div class="invalid-feedback"></div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="form-label" for="validationSample01">Project Name</label>
                                            <input type="text" name="project-name" class="form-control" id="validationSample01" placeholder="" required="">
                                            <!--<div class="invalid-feedback">Please provide a project milestone name.</div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                        <div class="col-12 col-md-6 mb-0">
                                            <label for="select03" class="form-label">Share with users </label>
                                            <select id="select03" name="share-with" data-toggle="select" multiple class="form-control">
                                                <option selected="">Pit Bull</option>
                                                <option>Grace Doe</option>
                                            </select>
                                            <!--<div class="invalid-feedback"></div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="form-label" for="validationSample03">Project Number</label>
                                            <input type="text" name="project-no" class="form-control" id="validationSample03" placeholder="" required="">
                                            <!--<div class="invalid-feedback">Please provide a project milestone name.</div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="form-label" for="select04">Status</label>
                                            <select type="text" name="status" class="form-control" id="select04" required="">
                                                <option value="" hidden="" selected="" disabled="">Select Status</option>
                                                <option>Planned</option>
                                                <option></option>
                                            </select>
                                            <!--<div class="invalid-feedback"></div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="form-label" for="validationSample04">Project Task Number</label>
                                            <input type="text" min="0" id="validationSample04" name="project-taskno" class="form-control" required="">
                                            <!--<div class="invalid-feedback"></div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                        <div class="col-12 col-md-6 mb-0">
                                            <label for="validationSample05" class="form-label">Total working time</label>
                                            <input type="text" id="validationSample05" name="working-time" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="form-label" for="validationSample06">Type</label>
                                            <select class="form-control" name="type" id="validationSample06" required="">
                                                <option value="" selected hidden disabled>Select an option</option>
                                                <option></option>
                                            </select>
                                            <!--<div class="invalid-feedback"></div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="form-label" for="select05">Related Task</label>
                                            <select id="select05" name="related-task" data-toggle="select" class="form-control">
                                                <option value="" selected="" hidden="" disabled="">Select some values</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="form-label" for="select06">Priority</label>
                                            <select id="select06" name="priority" class="form-control">
                                                <option selected="">Medium</option>
                                                <option>High</option>
                                                <option>Low</option>
                                            </select> 
                                            <!--<div class="invalid-feedback"></div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                        
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="card card--raised">
                                <div class="card-header d-flex align-items-center">
                                    <div class="flex">
                                        <h6 class="card-title">Custom Information</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="text-label form-label">Progress</label>
                                            <input type="" name="progress" class="form-control">
                                            <!--<div class="invalid-feedback"></div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="text-label form-label" for="dateRangePickerSample01">Target End Date</label>
                                            <input id="dateRangePickerSample01" name="target-end-date" type="text" class="form-control" placeholder="Date example" data-toggle="daterangepicker" data-daterangepicker-drops="up" data-daterangepicker-start-date="08/12/2020" data-daterangepicker-single-date-picker="true">
                                            <!--<div class="invalid-feedback"></div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                    </div>
                                    <div class="form-row"> 
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="text-label form-label" for="dateRangePickerSample02">Start Date</label>
                                            <input id="dateRangePickerSample02" name="start-date" type="text" class="form-control" placeholder="Date example" data-toggle="daterangepicker" data-daterangepicker-drops="up" data-daterangepicker-start-date="08/12/2020" data-daterangepicker-single-date-picker="true">
                                            <!--<div class="invalid-feedback"></div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="text-label form-label" for="dateRangePickerSample03">End Date</label>
                                            <input id="dateRangePickerSample03" name="end-date" type="text" class="form-control" placeholder="Date example" data-toggle="daterangepicker" data-daterangepicker-drops="up" data-daterangepicker-start-date="08/12/2020" data-daterangepicker-single-date-picker="true">
                                            <!--<div class="invalid-feedback"></div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-0">
                                            <label class="text-label form-label" for="dateRangePickerSample04">Estimated Work Date</label>
                                            <input id="dateRangePickerSample04" name="estimated-work-time" type="text" class="form-control" placeholder="Date Time example" data-toggle="daterangepicker" data-daterangepicker-drops="up" data-daterangepicker-opens="left" data-daterangepicker-time-picker="true" data-daterangepicker-locale-format="DD/MM Ha" data-daterangepicker-start-date="06/11 7am" data-daterangepicker-end-date="06/12 8pm" required="">
                                            <!--<div class="invalid-feedback"></div>
                                            <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card--raised">
                                <div class="card-header d-flex align-items-center">
                                    <div class="flex">
                                        <h6 class="card-title">Description Details</h6>
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