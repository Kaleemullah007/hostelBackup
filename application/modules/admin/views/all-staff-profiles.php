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
                            Staff Records
                            <a href="staff-registration" class="btn btn-outline btn-warning pull-right editbutton">Add New</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div id="message" style="visibility:hidden;"></div>
                        <!-- /.search bar filter portion  -->
                                <div class="row inner-left-15 inner-right-15">
                                  <div class="col-sm-12 well">
                                      <!-- /.search bar filter select box  -->
                                      <div class="col-md-4 col-sm-12">

                                      <input type="text" id="search" onkeyup="search_staff();" class="form-control" >
                                      </div>
                                  </div>
                                 </div>
                                 <!-- /.end of search bar filter portion  -->

                            <div class="dataTable_wrapper">
                                <div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="dataTables-example_wrapper">
                                
                              <div class="row"><div class="col-sm-12">
                                <table aria-describedby="dataTables-example_info" role="grid" class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" >
                                    <thead>
                                        <tr role="row">
                                            <th>Sr No</th>
                                            <th>Name</th>
                                            <th>Father Name</th>
                                            <th>CNIC</th>
                                            <th>Designation</th>
                                            <th>Actions</th>
                                            
                                                                                  </tr>
                                    </thead>
                                    <tbody id="replace">
                                       <?php $serial=0;  
                                       if(count($data)>0){
                                       foreach ($data as $value) {

                                       ?>
                                    <tr role="row" class="gradeA odd <?php echo 'staff-'.$value->staff_id;?>" >
                                            <td class="sorting_1"><?php echo ++$serial; ?></td>
                                            <td><?php echo $value->staff_name; ?></td>
                                            <td><?php echo $value->staff_father_or_husband; ?></td>
                                            <td class="center"><?php echo $value->staff_cnic; ?></td>
                                            <td class="center"><?php echo $value->staff_designation; ?></td>
                                            <td>
                                            <button type="button" class="btn btn-primary btn-circle" id="<?php echo $value->staff_id; ?>" onclick="viewstaff(this.id)" data-toggle="modal" data-target="#viewsingle-staff"><i class="fa fa-eye"></i></button>
                                             <button type="button" class="btn btn-success btn-circle" id="<?php echo $value->staff_id; ?>" onclick="updatestaff(this.id)" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
                                             <button type="button" class="btn btn-danger btn-circle" id="<?php echo $value->staff_id; ?>" onclick="deletestaff(this.id)"><i class="fa fa-trash"></i></button>
                                            </td>
                                    </tr>
                                    <?php }
                                         }
                                         else{?>

                                          <tr role="row"><td colspan="6"><h3 class="text-center">No Staff Added Yet</h3></td></tr>
                                         <?php 

                                         }

                                       ?>
                                      </tbody>
                                </table></div></div>
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




    <div class="modal fade" id="myModal" role="dialog">
     <div class="modal-dialog">
      <!-- Modal content-->
       <div class="modal-content">
        <div class="modal-header modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Update Staff Detail</h4>
        </div>
        <div class="modal-body">
           <div class="row">
                <div class="col-lg-12">
                  <div id="message" style="visibility:hidden;"></div>
                    <form enctype="multipart/form-data" method="post" id="staffupdate">
                     <div class="col-xs-12">
                         <div class="col-md-12 well">
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Name:</label><input type="text" name="staff-name" id="staff-name" class="form-control"><span class="staff-name"></span></div></div>
                                  <input type="hidden" name="id" id="id" class="form-control"><span class="id"></span>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Father Name:</label><input type="text" name="father-name" id="father-name" class="form-control"><span class="father-name"></span></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Sallary:</label><input type="text" name="sallary" id="sallary" class="form-control"><span class="sallary"></span></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">CNIC</label><input type="text" name="cnic" id="cnic" class="form-control"><span class="cnic"></span></div></div>
                            </div>
                           <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Gender:</label><!-- <input type="text" name="gender" id="gender" class="form-control"> --><select name="gender"  id="gender" class="form-control"><option value="Male">Male</option><option value="female">Female</option></select><span class="gender"></span></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Phone</label><input type="text" name="tel" id="tel" class="form-control"><span class="tel"></span></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Designation:</label><input type="text" name="desig" id="desig" class="form-control"><span class="desig"></span></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Email</label><input type="text" name="email-staff" id="email-staff" class="form-control"><span class="email-staff"></span></div></div>
                            </div>

 
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Address:</label><textarea name="address" id="address" cols="8" class="form-control"></textarea><span class="address"></span></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Date:</label><input type="text" name="date1" value="<?php echo date('Y-m-d');?>"  class="form-control " disabled ><span class="date"></span></div></div>
                            </div>
                            <div class="progress" style="height:40px;display:none;">
                               <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;line-height:40px;">
                                please wait...
                                </div>
                               </div>
                            <input type="submit" value="Submit"  name="update-staff" class="btn btn-primary pull-right">
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
  <!-- end of update partner modal -->








  <!-- view single partner modal -->
    <div class="modal fade" id="viewsingle-staff" role="dialog">
     <div class="modal-dialog">
      <!-- Modal content-->
       <div class="modal-content">
        <div class="modal-header modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 id="Head">Staff Detail</h4>
        </div>
        <div class="modal-body">
           <div class="row">
                <div class="col-lg-12">
                  <table aria-describedby="dataTables-example_info" class="table table-striped table-hover">
                    <tbody>
                    <tr role="row" class="gradeA odd">
                    <th>Staff Name</th>   
                    <td class="sorting_1" id="staff-name1" ></td>
                    </tr>
                    <tr role="row" class="gradeA odd">
                    <th>Father Name</th>   
                    <td class="sorting_1" id="father-name1" ></td>
                    </tr>
                    <tr role="row" class="gradeA odd">
                    <th>Sallary</th>   
                    <td id="sallary1" ></td>
                    </tr>
                    <tr role="row" class="gradeA odd">
                    <th>Phone</th>
                    <td id="phone1" ></td>
                    </tr>
                    <tr role="row" class="gradeA odd">
                    <th>CNIC</th>   
                    <td class="sorting_1" id="cnic1" ></td>
                    </tr>
                    <tr role="row" class="gradeA odd">
                    <th>Designation</th>   
                    <td class="sorting_1" id="desig1" ></td>
                    </tr>
                    <tr role="row" class="gradeA odd">
                    <th>Gender</th>   
                    <td class="sorting_1" id="gender1" ></td>
                    </tr>
                    <tr role="row" class="gradeA odd">
                    <th>Address</th>   
                    <td class="sorting_1" id="address1" ></td>
                    </tr>
                    <tr role="row" class="gradeA odd">
                    <th>Date of Appointment</th>   
                    <td class="sorting_1" id="doa1" ></td>
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
  <!-- end of single partner view modal -->


    <?php include(APPPATH."views/includes/footer.php");?>
     <script src="theme/js/admin/addstaff.js"></script>
</body>
</html>
