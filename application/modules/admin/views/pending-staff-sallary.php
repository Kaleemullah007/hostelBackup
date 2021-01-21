<?php include(APPPATH."views/includes/header.php");?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Sallary Pending Approvals</h2>
                    </div>
                </div>
                <!-- end of row -->
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Salary Records
                            <buttton onclick="go_to_print('dataTables-example')" class="btn btn-outline btn-warning pull-right editbutton">Print</button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         <!-- /.search bar filter portion  -->
                                <div class="row inner-left-15 inner-right-15">
                                  <div class="col-sm-12 well">
                                      <!-- /.search bar filter select box  -->
                                      <div class="col-md-4 col-sm-12">
                                       <div class="col-sm-12">
                                        <div class="form-group">
                                         <label>Select Search Type</label>
                                          <select class="form-control" onchange="show_form(this.value);" name="search-filter">
                                              <option value="designation" selected="selected">Designation</option>
                                              <option value="gender">Gender</option>
                                              <option value="month-year">Month & Year</option>
                                              <option value="date-range">Date Range</option>
                                          </select>
                                         </div>
                                        </div>
                                      </div>
                                      <!-- /.end of search bar select box portion  -->
                                      <!-- /.search bar filter forms  -->
                                      <div class="col-md-8 col-sm-12">
                                        <?php include(APPPATH."views/includes/hr-sallary-search-filter.php");?>  
                                      </div> 
                                  </div>
                                 </div>
                                 <!-- /.end of search bar filter portion  -->
                              <div class="dataTable_wrapper">
                              <!-- message portion -->
                              <div id="message" style="display:none;"></div>
                              <!-- end of message portion -->
                               <div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="dataTables-example_wrapper">
                                <div class="row">
                                  <div class="col-sm-12">
                                   <table aria-describedby="dataTables-example_info" role="grid" class="table table-striped table-bordered table-hover dataTable no-footer layout" id="dataTables-example">
                                    <thead>
                                        <tr role="row">
                                            <th>Sr No</th>
                                            <th>Employee Name</th>
                                            <th>Amount</th>
                                            <th>Designation</th>
                                            <th>Gender</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th class="no-print">Action</th>    
                                        </tr>
                                    </thead>
                                    <tbody id="inner-content">
                                    </tbody>  
                                  </table>
                                  <!-- progress bar area -->
                                  <div class="progress" id="progress-content" style="height:40px;display:none;">
                                     <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;line-height:40px;">
                                      please wait...
                                      </div>
                                  </div>
                                  <!-- end of progress bar area -->
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
    <?php include(APPPATH."views/includes/footer.php");?>
    <script type="text/javascript" src="theme/js/admin/adminsallaryfilter.js"></script>
    <script type="text/javascript" src="theme/js/admin/print.js"></script>
    <link rel="stylesheet" type="text/css" href="theme/bower_components/aircalendar/datepicker.min.css">
    <script type="text/javascript" src="theme/bower_components/aircalendar/datepicker.min.js"></script>
    <script type="text/javascript" src="theme/bower_components/aircalendar/datepicker.en.js"></script>
    <script type="text/javascript">
     $('#start-date').datepicker();
      $('#start-date').data('datepicker');
      $('#end-date').datepicker();
      $('#end-date').data('datepicker');
    </script>
</body>
</html>
