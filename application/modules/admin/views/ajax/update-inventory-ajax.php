 <?php $serial= 0; 
    foreach ($data as $value) { ?>
  <tr role="row" class="gradeA odd <?php echo 'inventory-'.$value->itemin_id; ?>">
    <td class="sorting_1"><?php echo ++$serial; ?></td>
    <td><?php echo $value->itemin_name; ?></td>                                            
    <td><?php echo $value->itemin_brand; ?></td>
    <td class="center"><?php echo $value->itemin_quantity.$value->itemin_unit; ?></td>
    <td class="center"><?php echo $value->stock_remain_quantity.$value->itemin_unit; ?></td>
    <td class="center"><?php echo $value->itemin_purchase_price; ?></td>
    <td class="center"><?php echo $value->itemin_supplier; ?></td>
    <td class="center"><?php echo $value->itemin_invoice_no ?></td>
    <td class="center"><?php echo $value->itemin_date; ?></td>
    <td>
    <button type="button" class="btn btn-primary btn-circle" id="<?php echo $value->itemin_id; ?>" onclick="viewinventory(this.id)" data-toggle="modal" data-target="#viewsingle-inventory"><i class="fa fa-eye"></i></button>
    <button type="button" class="btn btn-success btn-circle" id="<?php echo $value->itemin_id; ?>" onclick="updateinventory(this.id)" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
    <button type="button" class="btn btn-warning btn-circle" id="<?php echo $value->itemin_id; ?>" onclick="withdrawinventory(this.id)" data-toggle="modal" data-target="#add-withdraw" ><i class="fa fa-shopping-cart"></i></button>
    <button type="button" class="btn btn-danger btn-circle" id="<?php echo $value->itemin_id; ?>" onclick="deleteinventory(this.id)"><i class="fa fa-trash"></i></button>

    </td>
    </tr>
<?php
}
?>