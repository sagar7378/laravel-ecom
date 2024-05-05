
<?php //echo '<pre>';print_r($cart_data);die;?>
<?php 
$total_price = 0;?>
<?php
if(!empty($cart_data)){?>

  <?php  foreach($cart_data as $info){?>
    <ul>
		<li>
            <figure><img src="{{ asset('storage/app/public/products/images/' . $info['food_image']) }}" data-src="{{ asset('storage/app/public/products/images/' . $info['food_image']) }}" alt="" width="50" height="50" class="lazy"></figure>
            <strong><span><?php echo isset($info['food_qty'])?$info['food_qty']:'';?> x <?php echo isset($info['food_name'])?$info['food_name']:'';?></span>Rs <?php echo isset($info['food_price'])?$info['food_price']:'';?></strong>
            <a href="javascript:void(0)" food-id="<?php echo isset($info['food_id'])?$info['food_id']:'';?>" class="action delete_cart"><i class="icon_trash_alt"></i></a>
        </li>
    <?php 
    $total_price = $total_price + ($info["food_qty"] * $info["food_price"]);
}?>
    </ul>
    <div class="total_drop">
			<div class="clearfix add_bottom_15"><strong>Total</strong><span>Rs <?php echo $total_price;?></span></div>
			<a href="{{ route('front/foods/cart-details') }}" class="btn_1 outline">View Cart</a><a href="shop-checkout.html" class="btn_1">Checkout</a>

	</div>
<?php }else{?>
        <li>Cart is Empty</li>
    <?php }?>