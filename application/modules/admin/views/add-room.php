<?php include(APPPATH."views/includes/header.php");?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Room Detail</h1>
                    </div>
                </div>
                <!-- end of row -->
                <div class="row">
                  <div id="message" style="visibility:hidden;"></div>
                    <form method="post" id="room">
                     <div class="col-xs-12">
                         <div class="col-md-12 well">
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Room No:</label><input type="text" class="form-control" name="room-no"><span class="room-no"></span></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Room Capacity:</label><input type="text" class="form-control" name="room-capacity"><span class="room-capacity"></span></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group">
                                <label class="pull-left">Select Catagory:</label>
                                <select class="form-control" name="room-type">
                                <option value="">Select one....</option>
                                <?php foreach ($cats as $cat){ ?>
                                 <option value="<?php echo $cat->cat_id; ?>"><?php echo $cat->cat_name; ?></option>
                                <?php }?>
                                </select>
                                <span class="room-type"></span></div></div>
                            </div>
                            <div class="progress" style="height:40px;display:none;">
                               <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;line-height:40px;">
                                please wait...
                               </div>
                            </div>
                            <input type="submit" value="Submit" class="btn btn-primary pull-right" name="add-room">
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
    <script src="theme/js/admin/addroom.js"></script>
</body>
</html>
