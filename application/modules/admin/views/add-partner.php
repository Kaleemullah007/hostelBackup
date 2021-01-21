<?php include(APPPATH."views/includes/header.php");?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Partner</h1>
                    </div>
                </div>
                <!-- end of row -->
                <div class="row">
                  <div id="message" style="visibility:hidden;"></div>
                    <form id="add-partner">
                     <div class="col-xs-12">
                         <div class="col-md-12 well">
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Partner Name:</label><input type="text" class="form-control" name="partner-name"><span class="partner-name"></span></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Amount:</label><input type="text" class="form-control" name="partner-amount"><span class="partner-amount"></span></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Percentage:</label><input type="text" class="form-control" name="partner-percentage"><span class="partner-percentage"></span></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Date:</label><input type="text" class="form-control" value="<?php echo date('Y-m-d');?>" disabled="disabled"></div></div>
                            </div>
                            <div class="progress" style="height:40px;display:none;">
                               <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;line-height:40px;">
                                please wait...
                                </div>
                            </div>
                            <input type="submit" value="Submit" class="btn btn-primary pull-right" name="add-partner">
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
    <script src="theme/js/admin/addpartners.js"></script>
</body>
</html>
