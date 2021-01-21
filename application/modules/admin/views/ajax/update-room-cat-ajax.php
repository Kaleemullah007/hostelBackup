<?php $serial =0;  
    foreach($data as $value ){ ?>
    <tr role="row" class="gradeA odd <?php echo 'cat-'.$value->cat_id; ?>">
        <td class="sorting_1"><?php echo ++$serial; ?></td>
        <td><?php echo $value->cat_name; ?></td>
        <td>
        <button type="button" class="btn btn-success btn-circle" id="<?php echo $value->cat_id; ?>" onclick="updatecat(this.id)" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
        <button type="button" class="btn btn-danger btn-circle" id="<?php echo $value->cat_id; ?>" onclick="deletecat(this.id)"><i class="fa fa-trash"></i></button>
        </td>
    </tr>
<?php } ?>