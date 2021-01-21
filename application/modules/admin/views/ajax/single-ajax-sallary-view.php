<tbody>
     <tr role="row" class="gradeA odd">
     <th>Employee Name</th>   
     <td class="sorting_1"><?php echo $data->staff_name; ?></td>
     </tr>
     <tr role="row" class="gradeA odd">
     <th>Designation</th>   
     <td><?php echo $data->staff_designation; ?></td>
     </tr>
     <tr role="row" class="gradeA odd">
     <th>Sallary</th>
     <td><?php echo $data->staff_sallary; ?></td>
     </tr>
     <tr role="row" class="gradeA odd">
     <th>Gender</th>
     <td><?php echo $data->staff_gender; ?></td>
     </tr>
     <tr role="row" class="gradeA odd">
     <th>Status</th>
     <td><?php echo $data->sallary_status; ?></td>
     </tr>
     <tr role="row" class="gradeA odd">
     <th>Sallary Month</th>
     <td><?php echo date('M',strtotime($data->sallary_date)); ?></td>
     </tr>
     <tr>
     <th>Remarks</th>
     <td class="center">
     <?php if($data->sallary_hr_status == 1 && $data->sallary_admin_status == 1 && $data->sallary_accounts_status == 0){ ?>
     Approved By Both Admin And HR
     <?php } 
     else if($data->sallary_hr_status == 0 || $data->sallary_admin_status == 0){ ?>
     Not Approved By Admin Or HR
     <?php } else{ ?>
     Approved By All
     <?php } ?>
     </td>
     </tr>
     <?php if($data->sallary_status == "paid"){ ?>
     <tr role="row" class="gradeA odd">
     <th>Paid Date</th>
     <td><?php echo $data->sallary_paid_date; ?></td>
     </tr>
     <?php } ?>
     <?php if($data->sallary_status == "unpaid"){ ?>
     <!-- admin forward portion -->
     <tr role="row" class="no-print">
      <td colspan="8">
        <button type="button" class="btn btn-warning forward" id='<?php echo $data->sallary_id; ?>' onclick="approve_single(this.id)"><i class="fa fa-mail-forward"></i>Approve</button>
      </td>
     </tr>
     <!-- /.forward-button-row -->
     <?php } ?>
     <?php if($data->sallary_status == "paid"){ ?>
     <!-- admin forward portion -->
     <tr role="row" class="no-print">
      <td colspan="8">
        <button type="button" class="btn btn-warning forward" onclick="print_sallary_slip('payroll')"><i class="fa fa-mail-forward"></i>Print Slip</button>
      </td>
     </tr>
     <!-- /.forward-button-row -->
     <?php } ?>
</tbody>