<?php 
if(!empty($products)){
$count= 1; foreach($products as $product) { ?>    
                                <li class="scl-item"> 
                                    <div class="scl-box">
                                    <span id="wishlist_msg_{{$product->id}}" style="display:none;background: red;color: white;padding: 5px;"></span>
                                    <span id="cart_message_{{ $count }}" style="display:none;background: green;color: white;padding: 5px;"> Product Added !</span>
                                        <div class="scl-img"> 
                                            <span> Sale </span>
                                            <a href="<?php echo url('front/product-detail/' . $product->id); ?>"><img src="{{ asset('storage/app/public/products/images/' . $product->image) }}" alt=""/> </a>
                                        <form action="{{ route('admin/foods/add-to-cart') }}" method="post" id="CartForm_{{$count}}" >
                                        <input type="hidden" id="csrf_token" value="{{ csrf_token() }}">
										<input type="hidden" id="food_id" name="food_id" value="<?php echo isset($product->id)?$product->id:'';?>">
										<input type="hidden" id="food_name" name="food_name" value="<?php echo isset($product->name)?$product->name:'';?>">
										<input type="hidden" id="food_price" name="food_price" value="<?php echo isset($product->price)?$product->price:'';?>">
										<input type="hidden" id="food_image" name="food_image" value="<?php echo isset($product->image)?$product->image:'';?>">
										<!-- <div class="" id="cart_button"><input type="submit"  id="submit_button" class="" value=""></input></div> -->
                                            <!-- <div class="vpcr-btn add_cart" id="cart_button_{{ $count }}" > <a  href="#!" data-product-id="{{ $count }}" class="cart_icon_trigger" > <img src="public/front/assets/images/delete-icon.png" alt=""/> </a></div> -->
                                            <ul class="sll-icon-list">
                                                <li  class="sll-icon-item cart_icon_trigger"  id="cart_button_{{ $count }}" data-product-id="{{ $count }}"> <i class="fa-solid fa-cart-shopping" ></i> </li>
                                                <li class="sll-icon-item wishlist_btn"  wishlist-product-id="<?php echo isset($product->id)?$product->id:'';?>"> <i class="fa-regular fa-heart"></i> </li>
                                                <!-- <li class="sll-icon-item"> <i class="fa-solid fa-magnifying-glass"></i> </li> -->
                                            </ul>
                                        </form>	   
                                        </div>
                                        <div class="scl-text"> 
                                            <h4><?php echo isset($product->name)?$product->name:''?>  </h4>
                                            <p> $<?php echo isset($product->price)?$product->price:''?>   </span> </p>
                                        </div>
                                    </div>
                                </li>
<?php $count++;}
}else{
    ?>
     <div class="text-center"> 
            <span>Product Not found</span>
    </div>
    <?php
}
?>  
