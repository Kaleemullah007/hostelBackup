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
                           <table class="table">
                                        <tr>
                                            <th colspan="2"><h3>Asset</h3></th>
                                          </tr>
                           <?php $total = 0; foreach ($data as $value) {
                             
                            ?>
                             
                                          <tr>
                                            <th colspan="2"><?php echo $value->asset_name; ?></th>
                                            <td colspan="2"><?php echo $value->asset_amount; ?></td>
                                          </tr>
                                          <?php 
                                                  $total = $total+$value->asset_amount;
                                                }                                          
                                           ?>
                                         <tr>
                                            <th colspan="2"><?php echo "Total"; ?></th>
                                            <td colspan="2"><?php echo $total; ?></td>
                                          </tr>
                                          <tr>
                                            <th colspan="4"><h3>Equity & Liabilities</h3></th>
                                          </tr>
                                          <tr>
                                            <th>Partner Name</th>
                                            <th>Percentage</th>
                                            <th>Amount</th>
                                            <th>Payable</th>
                                          </tr>
                                          <?php 
                                          foreach ($patners as $value) {
                                            $own_amount =  $total * $value->liable_partner_percentage/100;
                                          ?>                                          
                                          <tr>
                                            <td><?php echo $value->liable_partner_name; ?></td>
                                            <td><?php echo $value->liable_partner_percentage;?>%</td>
                                            <td><?php echo $own_amount; ?></td>
                                            <td><?php echo $value->liable_partner_amount;
                                             
                                            ?></td>
                                          </tr>
                                          <?php } ?>
                                         
                                          
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
</body>
</html>
