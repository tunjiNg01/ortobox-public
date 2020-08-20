

            <div class="container page__container">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="?module=procurement"><?php echo set_title($_GET['module']); ?></a></li>
                    <li class="breadcrumb-item"><a href="?module=procurement&p=purchase-requisition"><?php echo set_title($_GET['p']) ?></a></li>
                    <li class="breadcrumb-item active"><?php echo isset($_GET['record']) ? 'Details' : 'Create'; ?></li>
                </ol>
            </div>
            <div class="container-fluid page__container">
                <div class="page-section">

                    <div class="row">

                        <div class="col-lg-12">
                            <form method="">
                            <div class="card card--raised">
                                <div class="card-header d-flex align-items-center">
                                    <div class="flex">
                                        <h6 class="card-title">Purchase Requisition</h6>
                                    </div>
                                </div>
                                <div class="card-body table-responsive">
                                    <div class="was-validated">
                                        <table class="">
                                            <thead>
                                                <tr>
                                                    <th width="200"></th>
                                                    <th width="200"></th>
                                                    <th colspan="3" width="300"></th>
                                                    <th width="200"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td >
                                                        <label class="form-label" for="validationSample01">Requested By</label>
                                                        <input type="text" class="form-control" name="requested-by" id="validationSample01" placeholder="" disabled>
                                                        <!--<div class="invalid-feedback">Please provide a project milestone name.</div>
                                                        <div class="valid-feedback">Looks good!</div>-->
                                                    </td>
                                                    <td>
                                                        <label class="form-label" for="validationSample02">Project Name</label>
                                                        <input type="text" class="form-control" name="project-name" id="validationSample02" placeholder="" required="">
                                                        <!--<div class="invalid-feedback"></div>
                                                        <div class="valid-feedback">Looks good!</div>-->
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <label class="form-label" for="validationSample02">Date Requested</label>
                                                        <input type="text" class="form-control" name="date-requested" id="validationSample03" placeholder="" required="">
                                                        <!--<div class="invalid-feedback"></div>
                                                        <div class="valid-feedback">Looks good!</div>-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <label class="form-label" for="validationSample04">Purpose/Use(Task Id# if applicable)</label>
                                                        <input type="text" class="form-control" name="purpose" id="validationSample04" placeholder="" required="">
                                                        <!--<div class="invalid-feedback">Please provide a project milestone name.</div>
                                                        <div class="valid-feedback">Looks good!</div>-->
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <label class="form-label" for="validationSample05">Date Needed</label>
                                                        <input type="text" class="form-control" name="date-needed" id="validationSample05" placeholder="" required="">
                                                        <!--<div class="invalid-feedback"></div>
                                                        <div class="valid-feedback">Looks good!</div>-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="form-label" for="validationSample06">Vendor Name</label>
                                                        <input type="text" class="form-control" name="vendor-name" id="validationSample06" placeholder="" required="">
                                                        <!--<div class="invalid-feedback">Please provide a project milestone name.</div>
                                                        <div class="valid-feedback">Looks good!</div>-->
                                                    </td>
                                                    <td>
                                                        <label class="form-label" for="validationSample07">Delivery Address</label>
                                                        <input type="text" class="form-control" name="deelivery-address" id="validationSample07" placeholder="" required="">
                                                        <!--<div class="invalid-feedback"></div>
                                                        <div class="valid-feedback">Looks good!</div>-->
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <label class="form-label" for="validationSample08">Charge To</label>
                                                        <input type="text" class="form-control" name="charge-to" id="validationSample08" placeholder="" required="">
                                                        <!--<div class="invalid-feedback"></div>
                                                        <div class="valid-feedback">Looks good!</div>-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="form-label" for="validationSample09">Point of Contract</label>
                                                        <input type="text" class="form-control" name="point-of-contract" id="validationSample09" placeholder="" required="">
                                                        <!--<div class="invalid-feedback">Please provide a project milestone name.</div>
                                                        <div class="valid-feedback">Looks good!</div>-->
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td >
                                                        <label class="form-label" for="validationSample09">Purchase Order ID</label>
                                                        <input type="text" class="form-control" name="ship-via" id="validationSample09" placeholder="" required="">
                                                        <!--<div class="invalid-feedback"></div>
                                                        <div class="valid-feedback">Looks good!</div>-->
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="form-label" for="validationSample10">Vendor Phone</label>
                                                        <input type="text" class="form-control" name="vendor-phone" id="validationSample10" placeholder="" required="">
                                                        <!--<div class="invalid-feedback">Please provide a project milestone name.</div>
                                                        <div class="valid-feedback">Looks good!</div>-->
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card card--raised">
                                <div class="card-header d-flex align-items-center">
                                    <div class="flex">
                                        <h6 class="card-title row">
                                            &nbsp;&nbsp;
                                            <input type="number" min="1" id="item-no" name="items-rows" class="form-control col-lg-4 col-md-4 col-xs-4" placeholder="Enter how many items">
                                            <button type="button" id="add-item" class="btn btn-sm btn-primary col-lg-2 col-md-2 col-xs-2"><i class="fa fa-plus"> </i>&nbsp;Add Items</button>
                                        </h6>
                                    </div>
                                </div>

                                <div class="card-body table-responsive">
                                    <div class="">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th><label class="form-label" >Item</label></th>
                                                    <th width="200">
                                                        <label class="form-label" >Product Category</label>
                                                    </th>
                                                    <th width="250">
                                                        <label class="form-label">Product / Service Description</label>
                                                    </th>
                                                    <th width="80">
                                                        <label class="form-label">Quantity</label>
                                                    </th>
                                                    <th width="150">
                                                        <label class="form-label">Unit Price</label>
                                                    </th>
                                                    <th width="150">
                                                        <label class="form-label">Total</label>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="table-body">
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <select id="select01" name="category" data-toggle="select" class="form-control">
                                                            <option selected="" disabled="" hidden="">Select Category</option>
                                                            <option>Hr</option>
                                                            <option>Secretary</option>
                                                        </select> 
                                                    </td>
                                                    <td>
                                                        <select id="select02" name="product" data-toggle="select" class="form-control">
                                                            <option selected="" disabled="" hidden="">Select Product</option>
                                                            <option>Rubber</option>
                                                            <option>Plastic</option>
                                                        </select> 
                                                    </td>
                                                    
                                                    <td>
                                                        <input type="number" min="1" name="quantity" class="form-control"/>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="unit-price" id="exampleInputUnitPrice" placeholder="Unit Price">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="total" id="exampleInputTotal" placeholder="Total">
                                                    </td>
                                                </tr>
                                                
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    <script>
                                        $(document).ready(function(){
                                            loadItems();
                                        });
                                        function loadItems(){
                                            $("#add-item").click(function(){
                                                $('#table-body').empty();
                                                var ItemNo = $("#item-no").val();
                                                if( ItemNo > 0 ){
                                                    createFields(ItemNo);
                                                }
                                            });
                                        }
                                        function createFields(ItemNo) {
                                            var tr = "";
                                            for (var i = 1; i <= ItemNo; i++) {
                                                tr += '<tr>'+
                                                    '<td>'+i+'</td>'+
                                                    '<td><select id="select01" name="category" data-toggle="select" class="form-control">'+
                                                            '<option selected="" disabled="" hidden="">Select Category</option>'+
                                                            '<option>Hr</option>'+
                                                            '<option>Secretary</option>'+
                                                        '</select></td>'+
                                                    '<td><select id="select02" name="product" data-toggle="select" class="form-control">'+
                                                            '<option selected="" disabled="" hidden="">Select Product</option>'+
                                                            '<option>Rubber</option>'+
                                                            '<option>Plastic</option>'+
                                                        '</select></td>'+
                                                    '<td><input type="number" min="1" name="quantity" class="form-control"/></td>'+
                                                    '<td><input type="text" class="form-control" name="unit-price" id="exampleInputUnitPrice" placeholder="Unit Price"></td>'+
                                                    '<td>'+'<input type="text" class="form-control" name="total" id="exampleInputTotal" placeholder="Total"></td>'+
                                                '</tr>'; 
                                            }
                                            tr += '<tr><td></td><td></td><td></td><td></td>'+
                                                    '<td><label class="form-label" for="exampleInputTax">Tax</label></td>'+
                                                    '<td><input type="text" class="form-control" id="exampleInputTax" placeholder="Enter Tax"></td>'+
                                                 '</tr>'+
                                                '<tr><td></td><td></td><td></td><td></td>'+
                                                    '<td><label class="form-label" for="exampleInputDelivery">Delivery</label></td>'+
                                                    '<td><input type="text" class="form-control" id="exampleInputDelivery" placeholder="Enter Delivery"></td>'+
                                                '</tr>'+
                                                '<tr><td></td><td></td><td></td><td></td>'+
                                                    '<td><label class="form-label" for="exampleInputGrandTotal">Grand Total</label></td>'+
                                                    '<td><input type="text" class="form-control" id="exampleInputGrandTotal" placeholder="Enter Grand Total"></td>'+
                                                '</tr>';
                                            $('#table-body').append(tr);
                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="card card--raised">
                                <div class="card-header d-flex align-items-center">
                                    <div class="flex">
                                        <h6 class="card-title">Approvals</h6>
                                    </div>
                                </div>
                                <div class="card-body table-responsive">
                                    <div class="">
                                        <table class="">
                                            <thead>
                                                <tr>
                                                    <td width="300">
                                                        <label class="form-label">Name</label>
                                                    </td>
                                                    <td>
                                                        <label class="form-label">Approved? (Yes/No)</label>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody class="" id="table-approve">                                            
                                                <tr>
                                                    <td>
                                                        <select class="form-control" name="approve-name[]">
                                                            <option>Select Name</option>
                                                            <option></option>
                                                            <option></option>
                                                        </select>
                                                        <!--<div class="invalid-feedback"></div>
                                                        <div class="valid-feedback">Looks good!</div>-->
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="approve-status[]">
                                                            <option value="" disabled selected hidden>Approved?</option>
                                                            <option>Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                        <!--<div class="invalid-feedback"></div>
                                                        <div class="valid-feedback">Looks good!</div>-->
                                                    </td>
                                                    <td><button type="button" id="add" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>&nbsp;Add More</button></td>
                                                </tr>
    
                                            </tbody>
                                        </table>
                                    </div>
                                    <script>
                                        $(document).ready(function(){
                                            var i = 1;
                                            $("#add").click(function() {
                                                i++; 
                                                $("#table-approve").append('<tr id="row'+i+'"><td><select class="form-control" name="approve-name[]"><option>Select Name</option><option></option><option></option></select></td><td><select class="form-control" name="approve-status[]"><option value="" selected hidden disabled>Approved?</option><option>Yes</option><option>No</option></select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-sm btn-danger btn_remove"><i class="fa fa-times"></i>&nbsp;Remove</button></td></tr>');
                                            });
                                            $(document).on('click', '.btn_remove', function(){
                                                var button_id = $(this).attr("id");
                                                $('#row'+button_id+'').remove();
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="card card--raised">
                                <div class="card-body">
                                    <label class="form-label">Comments</label>
                                    <div style="height: 150px;" data-toggle="quill" data-quill-placeholder="Reason, why it should not be approved">
                                        <textarea name="comments"></textarea>
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