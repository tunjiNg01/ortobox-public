

            <div class="container page__container">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="?module=sourcing"><?php echo set_title($_GET['module']); ?></a></li>
                    <li class="breadcrumb-item"><a href="?module=sourcing&p=rft-management"><?php echo set_title($_GET['p']) ?></a></li>
                    <li class="breadcrumb-item active"><?php echo isset($_GET['form']) ? set_title($_GET['form']) : 'Create'; ?></li>
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
                                        <h6 class="card-title">Contruction Bid Proposal Form</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="was-validated">
                                        <div class="form-group">
                                                <label class="form-label" for="validationSample01">Project Name</label>
                                                <input type="text" class="form-control" name="project-name" id="validationSample01" placeholder="" required="">
                                                <!--<div class="invalid-feedback">Please provide a project milestone name.</div>
                                                <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                        <div class="form-group">
                                                <label class="form-label" for="validationSample02">Job Allocation</label>
                                                <input type="text" class="form-control" name="job-allocation" id="validationSample02" placeholder="" required="">
                                                <!--<div class="invalid-feedback">Please provide a project milestone name.</div>
                                                <div class="valid-feedback">Looks good!</div>-->
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label class="text-label form-label" for="dateRangePickerSample01">Estimated Start Date</label>
                                                    <input id="dateRangePickerSample01" type="text" name="estimated-start-date" class="form-control" placeholder="Date example" data-toggle="daterangepicker" data-daterangepicker-drops="up" data-daterangepicker-single-date-picker="true">
                                                </div>
                                                <!--<div class="invalid-feedback"></div>
                                                <div class="valid-feedback">Looks good!</div>-->
                                            </div>
                                            <div class="col-12 col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label class="text-label form-label" for="dateRangePickerSample02">Estimated End Date</label>
                                                    <input id="dateRangePickerSample02" type="text" name="estimated-end-date" class="form-control" placeholder="Date example" data-toggle="daterangepicker" data-daterangepicker-drops="up" data-daterangepicker-single-date-picker="true">
                                                </div>
                                                <!--<div class="invalid-feedback"></div>
                                                <div class="valid-feedback">Looks good!</div>-->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card card--raised">
                                <div class="card-body table-responsive">
                                    <table class="table mb-0 thead-border-top-0 table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col" colspan="1"></th>
                                                <th scope="col" colspan="1">Owner Information</th>
                                                <th scope="col" colspan="1"></th>
                                                <th scope="col" colspan="1">Contractor Information</th>
                                            </tr>
                                        </thead>
                                        <tbody >
                                            <tr>
                                                <th scope="row"><label class="form-label" for="validationSample03">Owner Company Name</label></th>
                                                <td style="text-align: left"><input type="text" class="form-control" name="owner-comapany-name" id="validationSample03" placeholder="" required=""></td>
                                                <th scope="row"><label class="form-label" for="validationSample04">Contractor Company Name</label></th>
                                                <td style="text-align: left"><input type="text" class="form-control" name="contractor-comapany-name" id="validationSample04" placeholder="" required=""></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><label class="form-label" for="validationSample05">Owner Contact Name</label></th>
                                                <td style="text-align: left"><input type="text" class="form-control" name="owner-contact-name" id="validationSample05" placeholder="" required=""></td>
                                                <th scope="row"><label class="form-label" for="validationSample06">Contractor Contact Name</label></th>
                                                <td style="text-align: left"><input type="text" class="form-control" name="contractor-contact-name" id="validationSample06" placeholder="" required=""></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><label class="form-label" for="validationSample07">Owner Address</label></th>
                                                <td style="text-align: left"><input type="text" class="form-control" name="owner-address" id="validationSample07" placeholder="" required=""></td>
                                                <th scope="row"><label class="form-label" for="validationSample08">Contractor Address</label></th>
                                                <td style="text-align: left"><input type="text" class="form-control" name="contractor-address" id="validationSample08" placeholder="" required=""></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><label class="form-label" for="validationSample09">Owner Phone</label></th>
                                                <td style="text-align: left"><input type="text" class="form-control" name="owner-phone" id="validationSample09" placeholder="" required=""></td>
                                                <th scope="row"><label class="form-label" for="validationSample10">Contractor Phone</label></th>
                                                <td style="text-align: left"><input type="text" class="form-control" name="contractor-phone" id="validationSample10" placeholder="" required=""></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><label class="form-label" for="validationSample11">Owner Email</label></th>
                                                <td style="text-align: left"><input type="email" class="form-control" name="owner-email" id="validationSample11" placeholder="" required=""></td>
                                                <th scope="row"><label class="form-label" for="validationSample12">Contractor Email</label></th>
                                                <td style="text-align: left"><input type="email" class="form-control" name="contractor-email" id="validationSample12" placeholder="" required=""></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="card card--raised">
                                <div class="card-body">
                                    <label class="form-label">Scope of Work</label>
                                    <div style="height: 150px;" data-toggle="quill" data-quill-placeholder="Scope of Work">
                                        <textarea name="scope-of-work"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card card--raised">
                                <div class="card-body">
                                    <label class="form-label">Materials and Services not included</label>
                                    <div style="height: 150px;" data-toggle="quill" data-quill-placeholder="Materials and Services not included">
                                        <textarea name="materials-not-included"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card card--raised">
                                <div class="card-body">
                                    <label class="form-label">Agreement Terms</label>
                                    <div style="height: 150px;" data-toggle="quill" data-quill-placeholder="Agreement Terms">
                                        <textarea name="agreement-terms"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card card--raised">
                                <div class="card-header d-flex align-items-center">
                                    <div class="flex">
                                        <h6 class="card-title">Documentation (Attachments PDF, PNG, ETC.)</h6>
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
                                <button class="btn btn-primary" type="submit">Add</button>
                                <button class="btn btn-danger" type="submit">Cancel</button>
                            </form>

                        </div>
                    </div>



                </div>
            </div>