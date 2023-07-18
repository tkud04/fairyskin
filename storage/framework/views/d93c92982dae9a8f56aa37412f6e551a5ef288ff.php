<?php $__env->startSection('title',"Cart"); ?>

<?php $__env->startSection('scripts'); ?>
<script>
  $(document).ready(() => {
    hideElem(['#cart-state'])
    removeClass('#cart-state','nice-select')

    $('#cart-country').change((e) => {
      e.preventDefault()
      const target = e.target
      if(target.value === 'nigeria'){
        showElem('#cart-state')
        $('#cart-state').niceSelect()
      }
      else{
        hideElem('#cart-state')
        removeClass('#cart-state','nice-select')
      }
    })
  })
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <!--Cart section start-->
 <div class="cart-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    
                    <div class="col-12">            
                        <!-- Cart Table -->
                        <div class="cart-table table-responsive mb-30">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $shipping = 0;
                                   foreach($cart as $c){
                                    $product = $c['product'];
                                    $imggs = $product['imggs'];
                                    $vu = url("product?sku={$product['sku']}");
                                    $ru = url("remove-from-cart?sku={$product['sku']}");
                                    $pd = $product['pd'];
                                    $subtotal = $pd['amount'] * $c['qty'];
                                  ?>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="<?php echo e($vu); ?>"><img src="<?php echo e($imggs[0]); ?>" alt="<?php echo e($product['name']); ?>"></a></td>
                                        <td class="pro-title"><a href="<?php echo e($vu); ?>"><?php echo e($product['name']); ?></a></td>
                                        <td class="pro-price"><span>&#8358;<?php echo e(number_format($pd['amount'],2)); ?></span></td>
                                        <td class="pro-quantity"><div class="pro-qty"><input type="number" value="<?php echo e($c['qty']); ?>"></div></td>
                                        <td class="pro-subtotal"><span>&#8358;<?php echo e(number_format($subtotal,2)); ?></span></td>
                                        <td class="pro-remove"><a href="<?php echo e($ru); ?>"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <?php
                                   }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="row">

                            <div class="col-lg-6 col-12 mb-5">
                                <!-- Calculate Shipping -->
                                <div class="calculate-shipping">
                                    <h4>Calculate Shipping</h4>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-25">
                                                <select class="nice-select" id="cart-country">
                                                    <option value="none">Select country</option>
                                                    <option value="nigeria">Nigeria</option>
                                                    <option value="others">Other countries</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mb-25">
                                                <select class="nice-select" id="cart-state">
                                                    <?php
                                                     foreach($states as $key => $value){
                                                    ?>
                                                     <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                                                    <?php
                                                     }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-12 mb-25">
                                                <input type="text" placeholder="Postcode / Zip">
                                            </div>
                                            <div class="col-md-6 col-12 mb-25">
                                                <button class="btn">Estimate</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Discount Coupon -->
                                <div class="discount-coupon">
                                    <h4>Discount Coupon Code</h4>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-25">
                                                <input type="text" placeholder="Coupon Code">
                                            </div>
                                            <div class="col-md-6 col-12 mb-25">
                                                <button class="btn">Apply Code</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Cart Summary -->
                            <div class="col-lg-6 col-12 mb-30 d-flex">
                                <div class="cart-summary">
                                    <div class="cart-summary-wrap">
                                        <h4>Cart Summary</h4>
                                        <p>Sub Total <span>&#8358;<?php echo e(number_format($subtotal,2)); ?></span></p>
                                        <p>Shipping Cost <span>&#8358;<?php echo e(number_format($shipping,2)); ?></span></p>
                                        <h2>Grand Total <span>&#8358;<?php echo e(number_format($shipping + $subtotal,2)); ?></span></h2>
                                    </div>
                                    <div class="cart-summary-button">
                                        <button class="btn">Checkout</button>
                                        <button class="btn">Update Cart</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    </div>
                    
                </div>            
            </div>
        </div>
        <!--Cart section end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/repos/fairyskin/resources/views/cart.blade.php ENDPATH**/ ?>