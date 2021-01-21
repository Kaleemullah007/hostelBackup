<?php $pending_ids= array(); $serial= 0; if($flag == "designation"){
if(count($data) > 0){
foreach ($data as $value) { ?>
	<tr>
		<td class="sorting_1"><?php echo ++$serial; ?></td>
		<td><?php echo $value->staff_name; ?></td>
		<td><?php echo $value->staff_sallary; ?></td>
		<td class="center"><?php echo $value->staff_designation; ?></td>
		<td class="center"><?php echo $value->staff_gender; ?></td>
		<td class="center"><?php echo $value->sallary_status; ?></td>
		<td class="center"><?php echo $value->sallary_date; ?></td>
		<td class="no-print">
		<?php if($value->sallary_hr_status == 1 && $value->sallary_admin_status == 0){ ?>
		<button type="button" class="btn btn-warning" id="<?php echo $value->sallary_id; ?>" onclick="forward_to_accounts_single(this.id)"><i class="fa fa-mail-forward"></i>Pending</button>
		<?php $pending_ids[] = $value->sallary_id; } else{ ?>
		<button type="button" class="btn btn-warning"><i class="fa fa-mail-forward">&nbsp;&nbsp;</i>Sent</button>
		<?php }?>
		</td>
	</tr>
<?php } } else{ ?>
		<tr role="row" class="gradeA odd">
			<td  colspan="8"><h3 class="text-center text-warning"><span class="fa fa-frown-o">&nbsp;</span>Sorry! No Record Found</h3></td>
		</tr>
<?php   } }
elseif($flag == "gender"){ 
if(count($data) > 0){
foreach ($data as $value) { ?>
	<tr>
		<td class="sorting_1"><?php echo ++$serial; ?></td>
		<td><?php echo $value->staff_name; ?></td>
		<td><?php echo $value->staff_sallary; ?></td>
		<td class="center"><?php echo $value->staff_designation; ?></td>
		<td class="center"><?php echo $value->staff_gender; ?></td>
		<td class="center"><?php echo $value->sallary_status; ?></td>
		<td class="center"><?php echo $value->sallary_date; ?></td>
		<td class="no-print">
		<?php if($value->sallary_hr_status == 1 && $value->sallary_admin_status == 0){ ?>
		<button type="button" class="btn btn-warning" id="<?php echo $value->sallary_id; ?>" onclick="forward_to_accounts_single(this.id)"><i class="fa fa-mail-forward"></i>Pending</button>
		<?php $pending_ids[] = $value->sallary_id; } else{ ?>
		<button type="button" class="btn btn-warning"><i class="fa fa-mail-forward">&nbsp;&nbsp;</i>Sent</button>
		<?php }?>
		</td>
	</tr>
<?php } } else{ ?>
		<tr role="row" class="gradeA odd">
			<td  colspan="8"><h3 class="text-center text-warning"><span class="fa fa-frown-o">&nbsp;</span>Sorry! No Record Found</h3></td>
		</tr>
<?php } } 
elseif($flag == "date-range"){ 
if(count($data) > 0){
foreach ($data as $value) { ?>
	<tr>
		<td class="sorting_1"><?php echo ++$serial; ?></td>
		<td><?php echo $value->staff_name; ?></td>
		<td><?php echo $value->staff_sallary; ?></td>
		<td class="center"><?php echo $value->staff_designation; ?></td>
		<td class="center"><?php echo $value->staff_gender; ?></td>
		<td class="center"><?php echo $value->sallary_status; ?></td>
		<td class="center"><?php echo $value->sallary_date; ?></td>
		<td class="no-print">
		<?php if($value->sallary_hr_status == 1 && $value->sallary_admin_status == 0){ ?>
		<button type="button" class="btn btn-warning" id="<?php echo $value->sallary_id; ?>" onclick="forward_to_accounts_single(this.id)"><i class="fa fa-mail-forward"></i>Pending</button>
		<?php $pending_ids[] = $value->sallary_id; } else{ ?>
		<button type="button" class="btn btn-warning"><i class="fa fa-mail-forward">&nbsp;&nbsp;</i>Sent</button>
		<?php }?>
		</td>
	</tr>
<?php } } else{ ?>
		<tr role="row" class="gradeA odd">
			<td  colspan="8"><h3 class="text-center text-warning"><span class="fa fa-frown-o">&nbsp;</span>Sorry! No Record Found</h3></td>
		</tr>
<?php } } 
elseif($flag == "month-year"){ 
if(count($data) > 0){
foreach ($data as $value) { ?>
	<tr>
		<td class="sorting_1"><?php echo ++$serial; ?></td>
		<td><?php echo $value->staff_name; ?></td>
		<td><?php echo $value->staff_sallary; ?></td>
		<td class="center"><?php echo $value->staff_designation; ?></td>
		<td class="center"><?php echo $value->staff_gender; ?></td>
		<td class="center"><?php echo $value->sallary_status; ?></td>
		<td class="center"><?php echo $value->sallary_date; ?></td>
		<td class="no-print">
		<?php if($value->sallary_hr_status == 1 && $value->sallary_admin_status == 0){ ?>
		<button type="button" class="btn btn-warning" id="<?php echo $value->sallary_id; ?>" onclick="forward_to_accounts_single(this.id)"><i class="fa fa-mail-forward"></i>Pending</button>
		<?php $pending_ids[] = $value->sallary_id; } else{ ?>
		<button type="button" class="btn btn-warning" readonly="readonly"><i class="fa fa-mail-forward">&nbsp;&nbsp;</i>Sent</button>
		<?php }?>
		</td>
	</tr>
<?php } } else{ ?>
		<tr role="row" class="gradeA odd">
			<td  colspan="8"><h3 class="text-center text-warning"><span class="fa fa-frown-o">&nbsp;</span>Sorry! No Record Found</h3></td>
		</tr>
<?php } } ?>

<!-- admin forward portion -->
<tr role="row" class="no-print">
 <td colspan="8">
   <?php if(!empty($pending_ids) && count($pending_ids) != 0){ ?>
   <button type="button" class="btn btn-success forward" id='<?php echo json_encode($pending_ids); ?>' onclick="forward_to_accounts(this.id)"><i class="fa fa-mail-forward"></i>Forward To Accounts</button>
   <?php } ?>
 </td>
</tr>
 <!-- /.forward-button-row -->
