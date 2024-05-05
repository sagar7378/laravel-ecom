<?php 
if(!empty($category_info)){
        $count = 1;foreach($category_info as $info){ ?>
        <tr>
            <td><?php echo $count;?></td>
            <td><?php echo isset($info->name)? $info->name:'-'; ?></td>
            <td><?php if($info->status == 1) {?>
                <a href="#" class="btn btn-sm btn-success">Active</a>
                <?php }else {?>
                <a href="#" class="btn btn-danger">Inactive</a>
                <?php } ?>
            <td><?php echo isset($info->date_added)? $info->date_added:'-'; ?></td>        
            <td>
                <a href="{{ route('admin/categories/edit', ['id' => $info->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                <button class="btn btn-sm btn-danger" id="btn_delete" del-id="<?php echo isset($info->id)? $info->id:'-'; ?>">Delete</button>
            </td>
        </tr>
<?php $count++;} 
}else{?>
    <tr>
        <td class="alert alert-danger">Categories not found !</td>
    </tr>
<?php }?>
