<?php $serial =0;  foreach($data as $value ){ ?>
<tr role="row" class="gradeA odd <?php echo 'asset-'.$value->asset_id; ?>">
    <td class="sorting_1"><?php echo ++$serial;  ?></td>
    <td><?php echo $value->asset_name; ?></td>
    <td><?php echo $value->asset_amount; ?></td>
    <td class="center"><?php echo $value->asset_date;  ?></td>
    <td>
     <button type="button" class="btn btn-primary btn-circle" id="<?php echo $value->expense_id; ?>" onclick="viewexpense(this.id)" data-toggle="modal" data-target="#viewsingle-expense"><i class="fa fa-eye"></i></button>
                                            <button type="button" class="btn btn-success btn-circle" id="<?php echo $value->expense_id; ?>" onclick="updateexpense(this.id)" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-circle" id="<?php echo $value->expense_id; ?>" onclick="deleteexpense(this.id)"><i class="fa fa-trash"></i></button>
    </td>
</tr>
<?php } ?>