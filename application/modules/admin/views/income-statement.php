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

                    <div class="panel panel-default">
                       <!--  <div class="panel-heading">
                            DataTables Advanced Tables
                        </div> -->
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="progress" style="height:40px;display:none;">
                               <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;line-height:40px;">
                                please wait...
                                </div>
                            </div>
                        <div id="message" style="visibility:hidden;"></div>
                 
                        <div id="date-range" class="filters">
  <div class="col-md-5">
  <div class="form-group">
  <label>Select Start Date</label>
    <input type="text" class="form-control" name="start-date" id="start-date"  data-date-format="yyyy-mm-dd" data-position="bottom left" data-language='en'>
   </div>
   </div>

  <div class="col-md-5">
  <div class="form-group">
  <label>Select End Date</label>
    <input type="text" class="form-control" name="end-date" id="end-date" data-date-format="yyyy-mm-dd" data-position="bottom left" data-language='en'>
   </div>
   </div>

  <div class="col-md-2">
  <div class="form-group">
   <button class="btn btn-primary outer-top-25" name="btn-date-range" onclick="search_by_date_range()"><span class="fa fa-search"></span></button>
  </div>
  </div>
</div>
<!--************* end of search portion for range between two dates **************-->
                           <table class="table" id="replace" >
                           <?php 
                            $count =  count($data); 
                            $count1 =  count($data1); 
                            $count2 =  count($data2); 
                                         $month    =       0;
                                         $reg      =       0;
                                         $other    =       0;
                                         $vocher   =       0;
                                         $fine     =       0;
                                         $Rent     =       0;
                                         $HK       =       0;
                                         $Bill     =       0;
                                         $Other    =       0;
                                         $Paid     =       0;
                                         $Unpaid   =       0;                                        
                                    
                            //////////////////////////////////Revenue //////////////////////////
                           if($count>0){
                                         $month    =  $month  +     $data[0][0]->vchr_monthly_fee;
                                         $reg      =  $reg    +      $data[1][0]->vchr_registration_fee;
                                         $other    =  $other  +    $data[2][0]->vchr_fee_concession_amount;
                                         $vocher   =  $vocher +     $data[3][0]->vchr_late_fee_fine;
                                         $fine     =   $fine  +      $data[4][0]->vchr_fee_concession;                                              
                                    
                                        }                           
                                        
                            //////////////////////////////////Expense //////////////////////////  
                                        if($count1>0)
                                        {
                                         $Rent     =    $Rent   + $data1[0][0]->expense_amount;
                                         $HK       =    $HK     + $data1[1][0]->expense_amount;
                                         $Bill     =    $Bill   + $data1[2][0]->expense_amount;
                                         $Other    =    $Other  + $data1[3][0]->expense_amount;
                                        }                                        
                                         
                            //////////////////////////////////Sallaray //////////////////////////  
                                        if($count2>0)
                                        {
                                         $Paid   = $Paid+  $data2[0][0]->sallary_amount_paid;
                                         $Unpaid =  $Unpaid  +  $data2[1][0]->sallary_amount_paid;
                                        }                                       

                                         $Salary_total = $Paid+$Unpaid;
                                         $total    = $reg+$month+$vocher+$fine+$other;                     
                                         $Expense_total = $Rent+$HK+$Bill+$Other+$Salary_total;
                                         $Grand_total = $total-$Expense_total;
                                           
                                            ?>
                                          <tr>
                                            <th colspan="2"><h3>Revenue</h3></th>
                                          </tr>
                                          <tr>
                                            <th>Monthly Fee</th>
                                            <td><?php echo $month;?></td>
                                          </tr>
                                          <tr>
                                            <th>Registration Fee</th>
                                            <td><?php echo $reg;?></td>
                                          </tr>
                                          <tr>
                                            <th>Late Fee Fine</th>
                                            <td><?php echo $fine;?></td>
                                          </tr>
                                          <tr>
                                            <th>Other Fee</th>
                                            <td><?php echo $other;?></td>
                                          </tr>
                                          <tr>
                                            <th>Total Fee</th>
                                            <td><?php echo $total;?></td>
                                          </tr>
                                          <tr>
                                            <th>Tatal Revenue</th>
                                            <td><?php echo $total;?></td>
                                          </tr
                                          <tr>
                                            <th colspan="2"><h3>Expenses</h3></th>
                                          </tr>
                                          <tr>
                                           <th>Paid Salary</th>
                                            <td><?php echo $Paid; ?></td>
                                          </tr>
                                          <tr>
                                           <th>Unpaid Salary</th>
                                            <td><?php echo $Unpaid; ?></td>
                                          </tr>
                                          <tr>
                                            <th>Rent</th>
                                            <td><?php echo $Rent; ?></td>
                                          </tr>
                                          <tr>
                                            <th>Housekeeping</th>
                                            <td><?php echo $HK; ?></td>
                                          </tr>
                                          <tr>
                                            <th>Utilities Bill</th>
                                            <td><?php echo $Bill; ?></td>
                                          </tr>
                                          <tr>
                                            <th>Others</th>
                                            <td><?php echo $Other; ?></td>
                                          </tr>
                                          <tr>
                                            <th>Tatal Expense</th>
                                            <td><?php echo $Expense_total; ?></td>
                                          </tr
                                          <tr>
                                            <th colspan="2"><h3>Net Income</h3></th>
                                          </tr>
                                          <tr>
                                            <th>Grand Total</th>
                                            <td><?php echo $Grand_total; ?></td>
                                          </tr>
                                  </table>

                        </div>

                        <!-- /.panel-body -->
                    </div>
            </div>

            <!-- end of row -->
            </div>

            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php include(APPPATH."views/includes/footer.php");?>
    <link rel="stylesheet" type="text/css" href="theme/bower_components/aircalendar/datepicker.min.css">
    <script type="text/javascript" src="theme/bower_components/aircalendar/datepicker.min.js"></script>
    <script type="text/javascript" src="theme/bower_components/aircalendar/datepicker.en.js"></script>
    <script type="text/javascript">
     $('#start-date').datepicker();
      $('#start-date').data('datepicker');
      $('#end-date').datepicker();
      $('#end-date').data('datepicker');
    </script>
    <script type="text/javascript" src="theme/js/admin/incomestatement.js"></script>
</body>
</html>
