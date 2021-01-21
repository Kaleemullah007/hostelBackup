  <table class="table" id="replace">
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