<?php include(APPPATH."views/includes/header.php");?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><?php echo $title; ?></h1>
                    </div>
                </div>
                <!-- end of row -->
                <div class="row">
                 <div id="message" style="visibility:hidden;"></div>
                    <form enctype="multipart/form-data" id="expense">
                     <div class="col-xs-12">
                         <div class="col-md-12 well">
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Expense Name:</label><select class="form-control" name="name" ><option value="Rent" >Rent</option><option value="Bill" >Bill</option><option value="HK" >House Keeping</option><option value="Other">Other</option></select><span class="name"></span></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Amount:</label><input type="text" name="amount" class="form-control"><span class="amount"></span></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Date:</label><input type="text" name="date" id="datepicker" value="<?php echo date('Y-m-d');?>"  class="form-control " disabled ><span class="date"></span></div></div>
                            </div>
                            <div class="progress" style="height:40px;display:none;">
                               <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;line-height:40px;">
                                please wait...
                                </div>
                            </div>
                            <input type="submit" value="Submit"  name="add-expense" class="btn btn-primary pull-right">
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
    <script src="theme/js/admin/addexpense.js"></script>
</body>
</html>
