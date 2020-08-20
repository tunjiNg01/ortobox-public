

            <div class="container page__container">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="?module=procurement"><?php echo set_title($_GET['module']); ?></a></li>
                    <li class="breadcrumb-item"><a href="?module=procurement&p=receiveable"><?php echo set_title($_GET['p']) ?></a></li>
                    <li class="breadcrumb-item active"><?php echo isset($_GET['record']) ? 'Details' : 'Create'; ?></li>
                </ol>
            </div>
            <div class="container-fluid page__container">
                <div class="page-section">

                    <div class="row">

                        <div class="col-lg-12">
                            <form name="" action="" method="post" enctype="">
                            <div class="card card--raised">
                                <div class="card-header d-flex align-items-center">
                                    <div class="flex">
                                        <h6 class="card-title">Receiveable Definition</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="was-validated">
                                        <div class="form-row">
                                            <div class="col-12 col-md-6 mb-0">
                                                <label class="form-label" for="validationSample01">Project Name</label>
                                                <input type="text" class="form-control" name="project-name" id="validationSample01" placeholder="" required="">
                                                <!--<div class="invalid-feedback">Please provide a project milestone name.</div>
                                                <div class="valid-feedback">Looks good!</div>-->
                                            </div>
                                            <div class="col-12 col-md-6 mb-0">
                                                <label class="form-label" for="validationSample02">Order Number</label>
                                                <input type="text" class="form-control" name="order-number" id="validationSample02" placeholder="" required="">
                                                <!--<div class="invalid-feedback"></div>
                                                <div class="valid-feedback">Looks good!</div>-->
                                            </div>
                                        </div>
                                        
                                        <div class="form-row">
                                            <div class="col-12 col-md-6 mb-0">
                                                <label class="form-label" for="validationSample03">Supplier Code</label>
                                                <input type="text" class="form-control" name="supplier-code" id="validationSample03" placeholder="" required="">
                                                <!--<div class="invalid-feedback"></div>
                                                <div class="valid-feedback">Looks good!</div>-->
                                            </div>
                                            <div class="col-12 col-md-6 mb-0">
                                                <div class="form-group">
                                                   <label class="form-label" for="select01">Supplier Name</label>
                                                    <select id="select01" name="supplier-name" class="form-control">
                                                        <option selected="" disabled="" hidden="">Select Supplier</option>
                                                    </select> 
                                                </div>
                                                <!--<div class="invalid-feedback"></div>
                                                <div class="valid-feedback">Looks good!</div>-->
                                           </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-md-6 mb-0">
                                                <label class="form-label" for="validationSample04">Address</label>
                                                <input type="text" class="form-control" name="address" id="validationSample04" placeholder="" required="">
                                                <!--<div class="invalid-feedback"></div>
                                                <div class="valid-feedback">Looks good!</div>-->
                                            </div>
                                            <div class="col-12 col-md-6 mb-0">
                                                <div class="form-group">
                                                   <label class="form-label" for="supplier-reference">Supplier Reference</label>
                                                    <select id="supplier-reference" name="supplier-reference" data-toggle="select" multiple class="form-control">
                                                        <option selected="">Administrator</option>
                                                        <option>Hr</option>
                                                        <option>Secretary</option>
                                                    </select> 
                                                </div>
                                                <!--<div class="invalid-feedback"></div>
                                                <div class="valid-feedback">Looks good!</div>-->
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="card card--raised">
                                <div class="table-responsive" data-toggle="lists">
                                    <div class="card-header d-flex align-items-center">
                                        <div class="flex">
                                            <h6 class="card-title">
                                                Order Product
                                            </h6>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <table class="table mb-0 thead-border-top-0 table-nowrap">
                                            <thead>
                                                <tr>
                                                    <th><label class="form-label">Code</label></th>
                                                    <th width="300">
                                                        <label class="form-label" >Product Category</label>
                                                    </th>
                                                    <th width="300">
                                                        <label class="form-label">Product Description</label>
                                                    </th>
                                                    <th width="50">
                                                        <label class="form-label">Unit Measure</label>
                                                    </th>
                                                    <th width="100">
                                                        <label class="form-label">Quantity</label>
                                                    </th>
                                                    <th width="80">
                                                        <label class="form-label">Due Date</label>
                                                    </th>
                                                    <th class="60">
                                                        <label class="form-label">Status</label>
                                                    </th>
                                                    <th class="80">
                                                        <label class="form-label">Unit Cost</label>
                                                    </th>
                                                    <th width="150">
                                                        <label class="form-label">Total</label>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="table-body">
                                                <tr>
                                                    <td><label class="form-label" >1123</label></td>
                                                    <td>
                                                        <select id="select01" name="category" data-toggle="select" class="form-control">
                                                            <option selected="" disabled="" hidden="">Select Category</option>
                                                            <option>Hr</option>
                                                            <option>Secretary</option>
                                                        </select> 
                                                    </td>
                                                    <td>
                                                        <select id="select02" name="product-description" data-toggle="select" class="form-control">
                                                            <option selected="" disabled="" hidden="">Select Product</option>
                                                            <option>Rubber</option>
                                                            <option>Plastic</option>
                                                        </select> 
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="unit-measure" id="exampleInputMeasure">
                                                    </td>
                                                    <td>
                                                        <input type="number" min="1" name="quantity" class="form-control"/>
                                                    </td>
                                                    <td>
                                                        <input type="date" class="form-control" name="due-date" id="exampleInputDate" placeholder="">
                                                    </td>
                                                    <td>
                                                        <select id="select03" name="status" class="form-control">
                                                            <option selected="" hidden="" disabled="">Select Status</option>
                                                            <option>Delivered</option>
                                                        </select> 
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="unit-cost" id="exampleInputCost">
                                                    </td>
                                                    <td>
                                                        <input  type="text" name="line-value" class="form-control" id="exampleInputValue" />
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
                                        <textarea name="description" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="card-header d-flex align-items-center">
                                    <div class="flex">
                                        <h6 class="card-title">Documentation (Attach Receipts/Invoices PDF, PNG, ETC.)</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="flex">

                                        <div class="dropzone dropzone-multiple w-100" data-toggle="dropzone" data-dropzone-multiple data-dropzone-url="http://" data-dropzone-files=''>

                                            <div class="fallback">
                                                <div class="custom-file">
                                                    <input type="file" name="attachments" class="custom-file-input" id="customFileUploadMultiple" multiple>
                                                    <label class="custom-file-label" for="customFileUploadMultiple">Choose file</label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <button class="btn btn-danger" type="submit">Cancel</button>
                            </form>

                        </div>
                    </div>



                </div>
            </div>