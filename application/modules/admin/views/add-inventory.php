<?php include(APPPATH."views/includes/header.php");?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add New Mess Items</h1>
                    </div>
                </div>
                <!-- end of row -->
                <div class="row">
                    <form  id="add-inventory" enctype="multipart/form-data" >
                     <div class="col-xs-12">
                         <div class="col-md-12 well">
                          <div id="message" style="visibility:hidden;"></div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Item Name:</label><input type="text" name="name" class="form-control"><span class="name"></span></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Brand:</label><input type="text" name="brand" class="form-control"> <span class="brand"></span> </div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><div class="col-md-12 padding-left-0"><label class="pull-left">Quantity:</label></div><div class="col-md-8 padding-left-0"><input type="text" name="qty" class="form-control"><span class="qty"></span></div><div class="col-md-4 padding-right-0"><select class="form-control" name="unit" ><option value="kg" >Kg</option></select></div></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Purchase Price:</label><input type="text" name="price"  class="form-control"><span class="price"></span></div></div>
                            </div>
                             <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Supplier:</label><input type="text" name="supplier" class="form-control"><span class="supplier"></span></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Invoice:</label><input type="text" class="form-control" name="invoice" ><span class="invoice"></span></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Date:</label><input type="text" name="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly="readonly"></div></div>                            
                            </div>
                            <div class="progress" style="height:40px;display:none;">
                               <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;line-height:40px;">
                                please wait...
                                </div>
                            </div>
                            <input type="submit" name="add-inventory" value="Submit" class="btn btn-primary pull-right">
                         </div>
                    </div>
                    </form>
                </div>
            <!-- end of row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php include(APPPATH."views/includes/footer.php");?>
    <script src="theme/js/admin/addinventory.js"></script>
</body>
</html>
