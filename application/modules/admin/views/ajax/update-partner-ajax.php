<?php $serial =0;  
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
<?php } ?>