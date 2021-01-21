<?php include(APPPATH."views/includes/header.php");?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header"><?php echo $title; ?></h2>
                    </div>
                </div>
                <!-- end of row -->
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mess Records
                            <a href="add-inventory" class="btn btn-outline btn-warning pull-right editbutton">Add New</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div id="message" style="visibility:hidden;"></div>
                            <div class="dataTable_wrapper">
                                <div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="dataTables-example_wrapper"><div class="row">
                                <div class="col-sm-6"><div class="dataTables_filter" id="dataTables-example_filter"><label>Search:<input aria-controls="dataTables-example" placeholder="" class="form-control input-sm" type="search"></label></div></div></div><div class="row"><div class="col-sm-12"><table aria-describedby="dataTables-example_info" role="grid" class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example">
                                    <thead>
                                        <tr role="row">
                                            <th>Sr No</th>
                                            <th>Item Name</th>
                                            <th>Brand</th>
                                            <th>Quantity</th>
                                            <th>Remaining</th>
                                            <th>Purchase Price</th>
                                            <th>Supplier</th>
                                            <th>Invoice</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                            
                                                                                  </tr>
                                    </thead>
                                    <tbody id="inventory-replacable" >
                                    <?php $serial= 0; 
                                    if(count($data)>=1){
                                     foreach ($data as $value) { ?>
                                    <tr role="row" class="gradeA odd <?php echo 'inventory-'.$value->itemin_id; ?>">
                                            <td class="sorting_1"><?php echo ++$serial; ?></td>
                                            <td><?php echo $value->itemin_name; ?></td>                                            
                                            <td><?php echo $value->itemin_brand; ?></td>
                                            <td class="center"><?php echo $value->itemin_quantity.$value->itemin_unit; ?></td>
                                            <td class="center"><?php echo $value->stock_remain_quantity.$value->itemin_unit; ?></td>
                                            <td class="center"><?php echo $value->itemin_purchase_price; ?></td>
                                            <td class="center"><?php echo $value->itemin_supplier; ?></td>
                                            <td class="center"><?php echo $value->itemin_invoice_no ?></td>
                                            <td class="center"><?php echo $value->itemin_date; ?></td>
                                            <td>
                                            <button type="button" class="btn btn-primary btn-circle" id="<?php echo $value->itemin_id; ?>" onclick="viewinventory(this.id)" data-toggle="modal" data-target="#viewsingle-inventory"><i class="fa fa-eye"></i></button>
                                            <button type="button" class="btn btn-success btn-circle" id="<?php echo $value->itemin_id; ?>" onclick="updateinventory(this.id)" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-warning btn-circle" id="<?php echo $value->itemin_id; ?>" onclick="withdrawinventory(this.id)" data-toggle="modal" data-target="#add-withdraw" ><i class="fa fa-shopping-cart"></i></button>
                                            <button type="button" class="btn btn-danger btn-circle" id="<?php echo $value->itemin_id; ?>" onclick="deleteinventory(this.id)" disabled ><i class="fa fa-trash"></i></button>
                                            
                                            </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else{
                                echo '<tr role="row"><td colspan="12"><h3 class="text-center">No Inventory Added Yet</h3></td></tr>';
                            }
                                    ?>
                    
                                      </tbody>
                                </table></div></div></div>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
               <!-- end of row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<!-- update asset modal -->
    <div class="modal fade" id="myModal" role="dialog">
     <div class="modal-dialog">
      <!-- Modal content-->
       <div class="modal-content">
        <div class="modal-header modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Update inventory</h4>
        </div>
        <div class="modal-body">
           <div class="row">
                <div class="col-lg-12">
                  <div id="message" style="visibility:hidden;"></div>
                    <form enctype="multipart/form-data" id="inventoryupdate">
                     <div class="col-xs-12">
                         <div class="col-md-12 well">
                            <div class="row" >
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Name:</label><input type="text" name="name" id="name1" class="form-control"><span class="name"></span></div></div>
                                <input type="hidden" name="id" id="id" class="form-control"><span class="id"></span>                                
                                <input type="hidden" name="iteminid" id="iteminid" class="form-control"><span class="iteminid"></span>                                
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Price:</label><input type="text" name="price" id="price1" class="form-control"><span class="price"></span></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Brand:</label><input type="text" name="brand" id="brand1" class="form-control"><span class="brand"></span></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Quantity:</label><input type="text" name="qty" id="remain" class="form-control"><span class="qty"></span></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Supplier:</label><input type="text" name="supplier" id="supplier1" class="form-control"><span class="supplier"></span></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Invoice:</label><input type="text" name="invoice" id="invoice1" class="form-control"><span class="invoice"></span></div></div>
                                 <input type="hidden" name="remain1" id="remain1" class="form-control">  <input type="hidden" name="remain2" id="remain2" class="form-control">
                                 <div class="col-md-6"><div class="form-group"><label class="pull-left">Date:</label><input type="text" name="date" id="datepicker" value=""  class="form-control " disabled ><span class="date1"></span></div></div>
                            </div>
                            <div class="progress" style="height:40px;display:none;">
                               <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;line-height:40px;">
                                please wait...
                                </div>
                               </div>
                            <input type="submit" value="Submit"  name="update-inventory" class="btn btn-primary pull-right">
                         </div>
                    </div>
                    </form>
                </div>
                <!-- /.col-lg-12 -->
            </div>
               <!-- end of row -->
          </div>
          <!-- end of modal body -->
      </div>   
      <!-- end of modal content --> 
    </div>
    <!-- end of modal dialogue -->
  </div>
  <!-- end of update asset modal -->







 <div class="modal fade" id="add-withdraw" role="dialog">
     <div class="modal-dialog">
      <!-- Modal content-->
       <div class="modal-content">
        <div class="modal-header modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>withdraw inventory</h4>
        </div>
        <div class="modal-body">
           <div class="row">
                <div class="col-lg-12">
                  <div id="message" style="visibility:hidden;"></div>
                    <form enctype="multipart/form-data" id="addwithdraw">
                     <div class="col-xs-12">
                         <div class="col-md-12 well">
                            <div class="row" >
                                
                                <input type="hidden" name="id" id="id" class="form-control"><span class="id"></span>                                
                                <input type="hidden" name="iteminid" id="iteminid" class="form-control"><span class="iteminid"></span>                                
                            <div class="col-md-6"><div class="form-group"><label class="pull-left">Total Quantity:</label><input type="text" name="remain0" id="remain0" disabled class="form-control"><span class="remain0"></span></div></div>
                            <input type="hidden" name="remaining" id="remaining" class="form-control">
                            <input type="hidden" name="id4" id="id4" class="form-control">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Withdraw:</label><input type="text" name="with" id="with" class="form-control"><span class="with"></span></div></div>
                                 <input type="hidden" name="remain" id="remain1" class="form-control">
                                 <div class="col-md-6"><div class="form-group"><label class="pull-left">Date:</label><input type="text" name="date" id="datepicker" value="<?php echo date('Y-m-d'); ?>"  class="form-control " disabled ><span class="date1"></span></div></div>
                            </div>
                            <div class="progress" style="height:40px;display:none;">
                               <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;line-height:40px;">
                                please wait...
                                </div>
                               </div>
                            <input type="submit" value="Submit"  name="add-withdraw" class="btn btn-primary pull-right">
                         </div>
                    </div>
                    </form>
                </div>
                <!-- /.col-lg-12 -->
            </div>
               <!-- end of row -->
          </div>
          <!-- end of modal body -->
      </div>   
      <!-- end of modal content --> 
    </div>
    <!-- end of modal dialogue -->
  </div>
  <!-- end of update asset modal -->












<!-- view single inventory modal -->
    <div class="modal fade" id="viewsingle-inventory" role="dialog">
     <div class="modal-dialog">
      <!-- Modal content-->
       <div class="modal-content">
        <div class="modal-header modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Inventory Detail</h4>
        </div>
        <div class="modal-body">
           <div class="row">
                <div class="col-lg-12">
                  <table aria-describedby="dataTables-example_info" class="table table-striped table-hover">
                    <tbody>
                    <tr role="row" class="gradeA odd">
                    <th>Item Name</th>   
                    <td class="sorting_1" id="name" ></td>
                    </tr>
                    <tr role="row" class="gradeA odd">
                    <th>Item Price</th>   
                    <td id="price" ></td>
                    </tr>
                    <tr role="row" class="gradeA odd">
                    <th>Brand</th>
                    <td id="brand" ></td>
                    </tr>
                    <tr role="row" class="gradeA odd">
                    <th>Qauntity</th>
                    <td id="qty" ></td>
                    </tr>
                    <tr role="row" class="gradeA odd">
                    <th>Remaining Qty</th>
                    <td id="remain-qty" ></td>
                    </tr>
                    <tr role="row" class="gradeA odd">
                    <th>Supplier</th>
                    <td id="suplier" ></td>
                    </tr>
                    <tr role="row" class="gradeA odd">
                    <th>Invoice</th>
                    <td id="invoice" ></td>
                    </tr>
                    <tr role="row" class="gradeA odd">
                    <th>Date</th>
                    <td id="date" ></td>
                    </tr>                    
                    </tbody>
                  </table>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
               <!-- end of row -->
          </div>
          <!-- end of modal body -->
      </div>   
      <!-- end of modal content --> 
    </div>
    <!-- end of modal dialogue -->
  </div>
  <!-- end of single inventory view modal -->



    <?php include(APPPATH."views/includes/footer.php");?>
    <script src="theme/js/admin/addinventory.js"></script>
</body>
</html>
