<?php

    // This File will show types of profiles like 
    // student Profile
    // staff profile

?>


        <?php include("../header.php");?>

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
                    <form>
                     <div class="col-xs-12">
                         <div class="col-md-12 well">
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Item Name:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Brand:</label><input type="text" class="form-control"></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><div class="col-md-12 padding-left-0"><label class="pull-left">Quantity:</label></div><div class="col-md-8 padding-left-0"><input type="text" class="form-control"></div><div class="col-md-4 padding-right-0"><select class="form-control"><option>Kg</option></select></div></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Purchase Price:</label><input type="text" class="form-control"></div></div>
                            </div>
                             <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Supplier:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Invoice:</label><input type="text" class="form-control"></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Date:</label><input type="text" class="form-control"></div></div>                            
                            </div>
                            <input type="submit" value="Submit" class="btn btn-primary pull-right">
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

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
