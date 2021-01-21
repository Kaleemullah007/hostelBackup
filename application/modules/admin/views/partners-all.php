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
                            Partners Records
                            <a href="add-partner" class="btn btn-outline btn-warning pull-right editbutton">Add New</a>
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
                                                <th>partner Name</th>
                                                <th>Amount</th>
                                                <th>Percentage</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                          </thead>
                                          <tbody id="partners-replacable">
                                          <?php $serial =0;  
                                          if(count($data) > 0){
                                          foreach($data as $value ){ ?>
                                            <tr role="row" class="gradeA odd <?php echo 'partner-'.$value->liable_id; ?>">
                                                <td class="sorting_1"><?php echo ++$serial;  ?></td>
                                                <td><?php echo $value->liable_partner_name; ?></td>
                                                <td><?php echo $value->liable_partner_amount; ?></td>
                                                <td class="center"><?php echo $value->liable_partner_percentage; ?></td>
                                                <td class="center"><?php echo $value->liable_date; ?></td>
                                                <td>
                                                <button type="button" class="btn btn-primary btn-circle" id="<?php echo $value->liable_id; ?>" onclick="viewpartner(this.id)" data-toggle="modal" data-target="#viewsingle-partner"><i class="fa fa-eye"></i></button>
                                                <button type="button" class="btn btn-success btn-circle" id="<?php echo $value->liable_id; ?>" onclick="updatepartner(this.id)" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger btn-circle" id="<?php echo $value->liable_id; ?>" onclick="deletepartner(this.id)"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                          <?php } } else{ ?>
                                          <tr role="row"><td colspan="6"><h3 class="text-center">No Partners Added Yet</h3></td></tr>
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

    <!-- update partner modal -->
    <div class="modal fade" id="myModal" role="dialog">
     <div class="modal-dialog">
      <!-- Modal content-->
       <div class="modal-content">
        <div class="modal-header modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Update Partner Detail</h4>
        </div>
        <div class="modal-body">
           <div class="row">
                <div class="col-lg-12">
                  <div id="message" style="visibility:hidden;"></div>
                    <form enctype="multipart/form-data" id="partnerupdate">
                     <div class="col-xs-12">
                         <div class="col-md-12 well">
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Name:</label><input type="text" name="partner-name" id="name" class="form-control"><span class="partner-name"></span></div></div>
                                  <input type="hidden" name="id" id="id" class="form-control"><span class="id"></span>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Amount:</label><input type="text" name="partner-amount" id="amount" class="form-control"><span class="partner-amount"></span></div></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Amount:</label><input type="text" name="partner-percentage" id="percentage" class="form-control"><span class="partner-percentage"></span></div></div>
                                <div class="col-md-6"><div class="form-group"><label class="pull-left">Date:</label><input type="text" name="date" id="datepicker" value="<?php echo date('Y-m-d');?>"  class="form-control " disabled ><span class="date"></span></div></div>
                            </div>
                            <div class="progress" style="height:40px;display:none;">
                               <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;line-height:40px;">
                                please wait...
                                </div>
                               </div>
                            <input type="submit" value="Submit"  name="update-partner" class="btn btn-primary pull-right">
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
    <div class="modal fade" id="viewsingle-partner" role="dialog">
     <div class="modal-dialog">
      <!-- Modal content-->
       <div class="modal-content">
        <div class="modal-header modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Partner Detail</h4>
        </div>
        <div class="modal-body">
           <div class="row">
                <div class="col-lg-12">
                  <table aria-describedby="dataTables-example_info" class="table table-striped table-hover">
                    <tbody>
                    <tr role="row" class="gradeA odd">
                    <th>Partner Name</th>   
                    <td class="sorting_1" id="name1" ></td>
                    </tr>
                    <tr role="row" class="gradeA odd">
                    <th>Partner Amount</th>   
                    <td id="amount1" ></td>
                    </tr>
                    <tr role="row" class="gradeA odd">
                    <th>Partner Percentage</th>
                    <td id="percentage1" ></td>
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
  <script src="theme/js/admin/addpartners.js"></script>
</body>
</html>
