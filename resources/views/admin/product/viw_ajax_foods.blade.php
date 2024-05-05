<?php 
if(!empty($foods)){
        $count = 1;foreach($foods as $info){ ?>
        <tr>
            <td><?php echo $count;?></td>
            <td><?php echo isset($info->cat_name)? $info->cat_name:'-'; ?></td>
            <td><?php echo isset($info->name)? $info->name:'-'; ?></td>
            <td><?php echo isset($info->price)? $info->price:'-'; ?></td>
            <td><img src="{{ asset('storage/app/public/products/images/' . $info->image) }}" alt="Uploaded Image" width="100px" height="100px" ></td>
            <td>
                <a href="{{ route('admin/foods/edit', ['id' => $info->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                <button class="btn btn-sm btn-danger" id="btn_delete" del-id="<?php echo isset($info->id)? $info->id:'-'; ?>">Delete</button>
            </td>
        </tr>
<?php $count++;} 
}else{?>
    <tr>
        <td class="alert alert-danger">Categories not found !</td>
    </tr>
<?php }?>
