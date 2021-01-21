<?php include(APPPATH."views/includes/header.php");?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">All Rooms</h2>
                    </div>
                </div>
                <!-- end of row -->
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Rooms
                            <a href="add-room" class="btn btn-outline btn-warning pull-right editbutton">Add New</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <div id="message" style="visibility:hidden;"></div>
                            <div class="dataTable_wrapper">
                              <div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="dataTables-example_wrapper">
                                <!-- /.search bar portion  -->
                                <div class="row">
                                 <div class="col-sm-6">
                                  <div class="dataTables_filter" id="dataTables-example_filter">
                                    <label>Search:<input aria-controls="dataTables-example" placeholder="" class="form-control input-sm" type="search"></label>
                                  </div>
                                 </div>
                                </div>
                                <!-- /.end of search bar portion -->
                                <div class="row">
                                 <div class="col-sm-12">
                                  <table aria-describedby="dataTables-example_info" role="grid" class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example">
                                    <thead>
                                        <tr role="row">
                                            <th>Sr No</th>
                                            <th>Room No</th>
                                            <th>Room Capacity</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="room-replacable">
                                    <?php $serial =0;  
                                    if(count($data) > 0){
                                    foreach($data as $value ){ ?>
                                    <tr role="row" class="gradeA odd <?php echo 'room-'.$value->room_id; ?>">
                                        <td class="sorting_1"><?php echo ++$serial; ?></td>
                                        <td><?php echo $value->room_no; ?></td>
                                        <td><?php echo $value->room_capacity; ?></td>
                                        <td>
                                        <button type="button" class="btn btn-primary btn-circle" id="<?php echo $value->room_id; ?>" onclick="viewroom(this.id)" data-toggle="modal" data-target="#viewsingle-room"><i class="fa fa-eye"></i></button>
                                        <button type="button" class="btn btn-success btn-circle" id="<?php echo $value->room_id; ?>" onclick="updateroom(this.id)" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger btn-circle" id="<?php echo $value->room_id; ?>" onclick="deleteroom(this.id)"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <?php } } else{ ?>
                                        <tr role="row"><td colspan="6"><h3 class="text-center">No Rooms Added Yet</h3></td></tr>
                                    <?php } ?>
                                    </tbody>
                                  </table>
                                </div>
                                <!-- /.end of col-sm-12 -->
                              </div>
                              <!-- /.end of row containing data table -->
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


    <!-- update category modal -->
    <div class="modal fade" id="myModal" role="dialog">
     <div class="modal-dialog">
      <!-- Modal content-->
       <div class="modal-content">
        <div class="modal-header modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Update Room Detail</h4>
        </div>
        <div class="modal-body">
           <div class="row">
                <div class="col-lg-12">
                  <div id="message" style="visibility:hidden;"></div>
                    <form enctype="multipart/form-data" id="roomupdate">
                     <div class="col-xs-12">
                         <div class="col-md-12 well">
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Room No:</label><input type="text" name="room-no" id="name" class="form-control" readonly="readonly"><span class="room-no"></span></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Room Capacity:</label><input type="text" name="room-capacity" id="capacity" class="form-control"><span class="room-capacity"></span></div></div>
                                <input type="hidden" name="id" id="id" class="form-control"><span class="id"></span>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group">
                                <label class="pull-left">Room Type:</label>
                                <select name="room-type" id="type" class="form-control">
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
                            <input type="submit" value="Submit"  name="update-room" class="btn btn-primary pull-right">
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
  <!-- end of update category modal -->

  <!-- view single room modal -->
    <div class="modal fade" id="viewsingle-room" role="dialog">
     <div class="modal-dialog">
      <!-- Modal content-->
       <div class="modal-content">
        <div class="modal-header modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Room Detail</h4>
        </div>
        <div class="modal-body">
           <div class="row">
                <div class="col-lg-12">
                  <table aria-describedby="dataTables-example_info" class="table table-striped table-hover">
                    <tbody>
                    <tr role="row" class="gradeA odd">
                    <th>Room No</th>   
                    <td class="sorting_1" id="name1" ></td>
                    </tr>
                    <tr role="row" class="gradeA odd">
                    <th>Room Type</th>   
                    <td id="type1" ></td>
                    </tr>
                    <tr role="row" class="gradeA odd">
                    <th>Room Capacity</th>
                    <td id="capacity1" ></td>
                    </tr>
                    <tr role="row" class="gradeA odd">
                    <th>Positions Filled</th>
                    <td id="occupied1" ></td>
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
  <!-- end of single room view modal -->


  <?php include(APPPATH."views/includes/footer.php");?>
  <script src="theme/js/admin/addroom.js"></script>
</body>
</html>
