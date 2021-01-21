<?php include(APPPATH."views/includes/header.php");?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Staff Registration</h1>
                    </div>
                </div>
                <!-- end of row -->
                <div class="row">
                    <form>
                     <div class="col-xs-12">
                         <div class="col-md-12 well">
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Name:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Father/Husband Name:</label><input type="text" class="form-control"></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">CNIC:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Email:</label><input type="text" class="form-control"></div></div>
                            </div>
                             <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Phone No:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Date of Appointment:</label><input type="text" class="form-control"></div></div>
                            </div>
                             <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Sallary:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Designation:</label><input type="text" class="form-control"></div></div>
                            </div>
                             <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Address:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Postal Address:</label><input type="text" class="form-control"></div></div>
                            </div>
                            <div class="row">
                            <div class="col-md-6"><div class="form-group"><label class="pull-left">Scanned CNIC:</label><span class="btn btn-default pull-left outer-bottom-20 scannedcnic"><input type="file"></span></div></div>
                            <div class="col-md-6"><div class="form-group"><label class="pull-left">Picture:</label><span class="btn btn-default pull-left outer-bottom-20 scannedcnic"><input type="file"></span></div></div>
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
    <?php include(APPPATH."views/includes/footer.php");?>
</body>
</html>
