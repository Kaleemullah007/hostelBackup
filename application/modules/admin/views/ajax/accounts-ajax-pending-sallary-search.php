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
		<td class="center">
			<?php if($value->sallary_hr_status == 1 && $value->sallary_admin_status == 1 && $value->sallary_accounts_status == 0){ ?>
			Approved By Both Admin And HR
			<?php } 
			else if($value->sallary_hr_status == 0 || $value->sallary_admin_status == 0){ ?>
			Not Approved By Admin Or HR
			<?php } else{ ?>
			Approved By All
			<?php } ?>
		</td>
		<td class="no-print">
			<?php if($value->sallary_hr_status == 1 && $value->sallary_admin_status == 1 && $value->sallary_accounts_status == 0){ ?>
			<button type="button" class="btn btn-warning" id="<?php echo $value->sallary_id; ?>" onclick="approve_sallary(this.id)" data-toggle="modal" data-target="#viewsingle-sallary"><i class="fa fa-mail-forward"></i>Approve</button>
			<?php $pending_ids[] = $value->sallary_id; } 
			else if($value->sallary_hr_status == 0 || $value->sallary_admin_status == 0){ ?>
			<button type="button" class="btn btn-warning" disabled="disabled"><i class="fa fa-mail-forward">&nbsp;&nbsp;</i>Approve</button>
			<?php } else{ ?>
			<button type="button" class="btn btn-warning" id="<?php echo $value->sallary_id; ?>" onclick="approve_sallary(this.id)" data-toggle="modal" data-target="#viewsingle-sallary"><i class="fa fa-mail-forward">&nbsp;&nbsp;</i>Approved</button>
			<?php } ?>
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
		<td class="center">
			<?php if($value->sallary_hr_status == 1 && $value->sallary_admin_status == 1 && $value->sallary_accounts_status == 0){ ?>
			Approved By Both Admin And HR
			<?php } 
			else if($value->sallary_hr_status == 0 || $value->sallary_admin_status == 0){ ?>
			Not Approved By Admin Or HR
			<?php } else{ ?>
			Approved By All
			<?php } ?>
		</td>
		<td class="no-print">
			<?php if($value->sallary_hr_status == 1 && $value->sallary_admin_status == 1 && $value->sallary_accounts_status == 0){ ?>
			<button type="button" class="btn btn-warning" id="<?php echo $value->sallary_id; ?>" onclick="approve_sallary(this.id)" data-toggle="modal" data-target="#viewsingle-sallary"><i class="fa fa-mail-forward"></i>Approve</button>
			<?php $pending_ids[] = $value->sallary_id; } 
			else if($value->sallary_hr_status == 0 || $value->sallary_admin_status == 0){ ?>
			<button type="button" class="btn btn-warning" disabled="disabled"><i class="fa fa-mail-forward">&nbsp;&nbsp;</i>Approve</button>
			<?php } else{ ?>
			<button type="button" class="btn btn-warning" id="<?php echo $value->sallary_id; ?>" onclick="approve_sallary(this.id)" data-toggle="modal" data-target="#viewsingle-sallary"><i class="fa fa-mail-forward">&nbsp;&nbsp;</i>Approved</button>
			<?php } ?>
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
		<td class="center">
			<?php if($value->sallary_hr_status == 1 && $value->sallary_admin_status == 1 && $value->sallary_accounts_status == 0){ ?>
			Approved By Both Admin And HR
			<?php } 
			else if($value->sallary_hr_status == 0 || $value->sallary_admin_status == 0){ ?>
			Not Approved By Admin Or HR
			<?php } else{ ?>
			Approved By All
			<?php } ?>
		</td>
		<td class="no-print">
			<?php if($value->sallary_hr_status == 1 && $value->sallary_admin_status == 1 && $value->sallary_accounts_status == 0){ ?>
			<button type="button" class="btn btn-warning" id="<?php echo $value->sallary_id; ?>" onclick="approve_sallary(this.id)" data-toggle="modal" data-target="#viewsingle-sallary"><i class="fa fa-mail-forward"></i>Approve</button>
			<?php $pending_ids[] = $value->sallary_id; } 
			else if($value->sallary_hr_status == 0 || $value->sallary_admin_status == 0){ ?>
			<button type="button" class="btn btn-warning" disabled="disabled"><i class="fa fa-mail-forward">&nbsp;&nbsp;</i>Approve</button>
			<?php } else{ ?>
			<button type="button" class="btn btn-warning" id="<?php echo $value->sallary_id; ?>" onclick="approve_sallary(this.id)" data-toggle="modal" data-target="#viewsingle-sallary"><i class="fa fa-mail-forward">&nbsp;&nbsp;</i>Approved</button>
			<?php } ?>
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
		<td class="center">
			<?php if($value->sallary_hr_status == 1 && $value->sallary_admin_status == 1 && $value->sallary_accounts_status == 0){ ?>
			Approved By Both Admin And HR
			<?php } 
			else if($value->sallary_hr_status == 0 || $value->sallary_admin_status == 0){ ?>
			Not Approved By Admin Or HR
			<?php } else{ ?>
			Approved By All
			<?php } ?>
		</td>
		<td class="no-print">
			<?php if($value->sallary_hr_status == 1 && $value->sallary_admin_status == 1 && $value->sallary_accounts_status == 0){ ?>
			<button type="button" class="btn btn-warning" id="<?php echo $value->sallary_id; ?>" onclick="approve_sallary(this.id)" data-toggle="modal" data-target="#viewsingle-sallary"><i class="fa fa-mail-forward"></i>Approve</button>
			<?php $pending_ids[] = $value->sallary_id; } 
			else if($value->sallary_hr_status == 0 || $value->sallary_admin_status == 0){ ?>
			<button type="button" class="btn btn-warning" disabled="disabled"><i class="fa fa-mail-forward">&nbsp;&nbsp;</i>Approve</button>
			<?php } else{ ?>
			<button type="button" class="btn btn-warning" id="<?php echo $value->sallary_id; ?>" onclick="approve_sallary(this.id)" data-toggle="modal" data-target="#viewsingle-sallary"><i class="fa fa-mail-forward">&nbsp;&nbsp;</i>Approved</button>
			<?php } ?>
		</td>
	</tr>
<?php } } else{ ?>
		<tr role="row" class="gradeA odd">
			<td  colspan="8"><h3 class="text-center text-warning"><span class="fa fa-frown-o">&nbsp;</span>Sorry! No Record Found</h3></td>
		</tr>
<?php } } ?>
