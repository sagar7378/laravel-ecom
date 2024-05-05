<?php 
if(!empty($orders_data)){
        $count = 1;foreach($orders_data as $info){ ?>
        <tr>
            <td><?php echo $count;?></td>
            <td><?php echo isset($info->order_id)? $info->order_id:'-'; ?></td>
            <td><?php echo isset($info->name)? $info->name:'-'; ?></td>
            <td><?php echo isset($info->payment_method)? $info->payment_method:'-'; ?></td>
            <td><?php echo isset($info->payment_method)? $info->payment_status:'-'; ?></td>
            <td><?php echo isset($info->order_status)? $info->order_status:'-'; ?></td>
            <td>
            <a href="{{ url('admin/orders-details/' . $info->order_id) }}" class="btn btn-sm btn-warning">View</a>
            </td>
        </tr>
<?php $count++;} 
}else{?>
    <tr>
        <td class="alert alert-danger">Orders not found !</td>
    </tr>
<?php }?>
