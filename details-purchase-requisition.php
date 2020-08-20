

            <div class="container page__container">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="?module=procurement"><?php echo set_title($_GET['module']); ?></a></li>
                    <li class="breadcrumb-item"><a href="?module=procurement&p=purchase-requisition"><?php echo set_title($_GET['p']); ?></a></li>
                    <li class="breadcrumb-item active"><?php echo isset($_GET['record']) ? 'Details' : 'Create'; ?></li>
                </ol>
            </div>
            <div class="container-fluid page__container">
                <div class="page-section">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="" data-toggle="lists" data-lists-sort-by="js-lists-values-employee-name" data-lists-values='["js-lists-values-employee-name", "js-lists-values-employer-name", "js-lists-values-projects", "js-lists-values-activity", "js-lists-values-earnings"]'>

                                <div class="card card--raised">
                                    
                                    <div class="card-body table-responsive">

                                    <table class="table mb-0 thead-border-top-0 table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col" colspan="5">Procurement Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><label class="form-label">REQUESTED BY</label></th>
                                                <th scope="row" colspan="2"><label class="form-label">PROJECT NAME</label></th>
                                                <th></th>
                                                <th></th>
                                                <th scope="row"><label class="form-label">DATE REQUESTED</label></th>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td colspan="2"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row" colspan="3"><label class="form-label">PURPOSE / USE (TASK ID# IF APPLICABLE)</label></th>
                                                <th></th>
                                                <th></th>
                                                <th scope="row"><label class="form-label">DATE NEEDED</label></th>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><label class="form-label">VENDOR NAME</label></th>
                                                <th scope="row" colspan="2"><label class="form-label">VENDOR ADDRESS</label></th>
                                                <th></th>
                                                <th></th>
                                                <th scope="row"><label class="form-label">CHARGE TO</label></th>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td colspan="2"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><label class="form-label">POINT OF CONTACT</label></th>
                                                <th scope="row" colspan="2"></th>
                                                <th></th>
                                                <th></th>
                                                <th scope="row"><label class="form-label">REQUISITION ID</label></th>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td colspan="2"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><label class="form-label">VENDOR PHONE</label></th>
                                                <th scope="row" colspan="2"></th>
                                                <th></th>
                                                <th></th>
                                                <th scope="row"></th>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td colspan="2"></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card card--raised">
                                    
                                    <div class="card-body table-responsive">
                                    <table class="table mb-0 thead-border-top-0 table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="row">ITEM #</th>
                                                <th scope="row">CATEGORY</th>
                                                <th scope="row">PRODUCT / SERVICE DESCRIPTION</th>
                                                <th scope="row">QTY</th>
                                                <th scope="row">UNIT PRICE</th>
                                                <th scope="row">TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody >
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td colspan="2"></td>
                                                <td></td>
                                                <td><label class="form-label">TAX</label></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td colspan="2"></td>
                                                <td></td>
                                                <td><label class="form-label">DELIVERY</label></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td colspan="2"></td>
                                                <td></td>
                                                <td><label class="form-label">TOTAL</label></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card card--raised">
                                    
                                    <div class="card-body table-responsive">
                                    <table class="table mb-0 thead-border-top-0 table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col" colspan="4">Approval</th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody >
                                            <tr>
                                                <td width="300">
                                                    <label class="form-label">Name</label>
                                                </td>
                                                <td>
                                                    <label class="form-label">Approved? (Yes/No)</label>
                                                </td>
                                                <td><label class="form-label">Date</label></td>
                                                <td><label class="form-label">Status</label></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <label class="form-label">Comments</label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>



                </div>
            </div>