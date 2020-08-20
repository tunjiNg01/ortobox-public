

            <div class="container page__container">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="?module=procurement"><?php echo set_title($_GET['module']); ?></a></li>
                    <li class="breadcrumb-item"><a href="?module=procurement&p=receiveable"><?php echo set_title($_GET['p']); ?></a></li>
                    <li class="breadcrumb-item active"><?php echo isset($_GET['record']) ? 'Details' : 'Create'; ?></li>
                </ol>
            </div>
            <div class="container-fluid page__container">
                <div class="page-section">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="table-responsive">

                                <div class="card card--raised">
                                    
                                    <div class="card-body">

                                        <table class="table mb-0 thead-border-top-0 table-nowrap">
                                            <thead>
                                                <tr>
                                                    <th scope="col" colspan="4">Receiveable Details</th>
                                                </tr>
                                            </thead>
                                            <tbody >
                                                <tr>
                                                    <th scope="row">Project Name</th>
                                                    <td style="text-align: left"></td>
                                                    <th scope="row">Order Number</th>
                                                    <td style="text-align: left"></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Supplier Code</th>
                                                    <td style="text-align: left"></td>
                                                    <th scope="row">Supplier Name</th>
                                                    <td style="text-align: left;"></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Address</th>
                                                    <td style="text-align: left"></td>
                                                    <th scope="row">Date Ordered</th>
                                                    <td style="text-align: left"></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Supplier Reference</th>
                                                    <td style="text-align: left"></td>
                                                    <th scope="row">Total Net Values</th>
                                                    <td style="text-align: left"></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Total VAT</th>
                                                    <td style="text-align: left"></td>
                                                    <th scope="row">Order Status</th>
                                                    <td style="text-align: left"></td>
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
                                                    <th scope="col" colspan="10">Receiveable Items</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">#</th>
                                                    <th scope="row">Product Code</th>
                                                    <th scope="row">Product Description</th>
                                                    <th scope="row">Unit of Measure</th>
                                                    <th scope="row">Order Quantity</th>
                                                    <th scope="row">Received Quantity</th>
                                                    <th scope="row">Due Date</th>
                                                    <th scope="row">Status</th>
                                                    <th scope="row">Unit Cost</th>
                                                    <th scope="row">Line Value</th>
                                                </tr>
                                            </thead>
                                            <tbody >
                                                <tr>
                                                    <td style="text-align: left">1</td>
                                                    <td style="text-align: left"></td>
                                                    <td style="text-align: left"></td>
                                                    <td style="text-align: left"></td>
                                                    <td style="text-align: left"></td>
                                                    <td style="text-align: left"></td>
                                                    <td style="text-align: left"></td>
                                                    <td style="text-align: left"></td>
                                                    <td style="text-align: left"></td>
                                                    <td style="text-align: left"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card card--raised">
                                        
                                        <div class="card-body">
                                        <table class="table mb-0 thead-border-top-0 table-nowrap">
                                            <thead>
                                                <tr>
                                                    <th scope="col" colspan="2">Description Details</th>
                                                </tr>
                                            </thead>
                                            <tbody >
                                                <tr>
                                                    <th scope="row">Description</th>
                                                    <td style="text-align: left" colspan="3"></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Documentation</th>
                                                    <td style="text-align: left" colspan="3"></td>
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