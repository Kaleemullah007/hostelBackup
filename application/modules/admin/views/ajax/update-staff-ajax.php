<?php $serial=0;   foreach ($data as $value) {
?>
        <tr role="row" class="gradeA odd staff-<?php echo $value->staff_id; ?>" >
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
<?php
 }
?>