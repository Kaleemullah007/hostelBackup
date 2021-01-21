<?php include(APPPATH."views/includes/header.php");?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Generate voucher</h1>
                    </div>
                </div>
                <!-- end of row -->
                <div class="row">
                    <form>
                     <div class="col-xs-12">
                         <div class="col-md-12 well">
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Registration No:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Registration Fee:</label><input type="text" class="form-control"></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Monthly Fee:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Concession:</label><input type="text" class="form-control"></div></div>
                            </div>
                             <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Late Fee Fine:</label><input type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Name:</label><input disabled="disabled" type="text" class="form-control"></div></div>
                            </div>
                             <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Father Name:</label><input disabled="disabled" type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Degree:</label><input disabled="disabled"  type="text" class="form-control"></div></div>
                            </div>
                             <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Semester:</label><input disabled="disabled" type="text" class="form-control"></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Addmission Date:</label><input disabled="disabled" type="text" class="form-control"></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Due Date:</label><input disabled="disabled" type="text" class="form-control"></div></div>                            </div>
                        
                            <input type="submit" value="Print Voucher" class="btn btn-primary pull-right">
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
