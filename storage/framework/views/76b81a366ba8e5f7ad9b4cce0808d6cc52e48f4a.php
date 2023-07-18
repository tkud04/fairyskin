<?php $__env->startSection('title','Admin Center'); ?>

<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="assets/lib/datatables/css/dataTables.bootstrap.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="assets/lib/datatables/js/datatables.min.js"></script>
<script src="assets/lib/datatables/js/datatables-init.js"></script>
<script>
    /*
      $('#buup-select-product-error').hide();
		  $('#buup-select-qty-error').hide();
    */
   let buupCounter = 0, categories = [], tags = ['trending,top-rated,sale']
    $(document).ready(() => {
        hideElem([
            '#add-categories-div','#add-category-loading',
            '.update-category-status-loading', '#add-products-div',
            '#add-product-loading','.buup-hide',
            '#buup-select-product-error','#buup-select-qty-error',
            '#buup-result-box','#buup-finish-box',
            '#buup-select-validation-error','.product-loading',
            '#add-banners-div','#add-banner-loading','.update-banner-loading'
        ])
        localStorage.clear()

        <?php 
          foreach($categories as $cc){ 
           if($cc['status'] == "enabled"){
        ?>
	      categories.push("<?php echo e($cc['category']); ?>")
	    <?php
           }
        }
        ?>
    })
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('banner-2',['title' => 'Admin Center','subtitle' => 'Admin suite for managing the site operations'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <!--My Account section start-->
 <div class="my-account-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    
                    <div class="col-12">
                        <input type="hidden" id="skf" value="<?php echo e(csrf_token()); ?>"/>
                        <div class="row">
                            <!-- My Account Tab Menu Start -->
                            <div class="col-lg-3 col-12">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="#dashboad" class="active" data-bs-toggle="tab"><i class="fa fa-dashboard"></i>
                                        Dashboard</a>
    
                                    <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
    
                                    <a href="#download" data-bs-toggle="tab"><i class="fa fa-users"></i> Users</a>
    
                                    <a href="#products" data-bs-toggle="tab"><i class="fa fa-shopping-bag"></i> Products</a>

                                    <a href="#categories" data-bs-toggle="tab"><i class="fa fa-shopping-bag"></i> Categories</a>

                                    <a href="#banners" data-bs-toggle="tab"><i class="fa fa-picture-o"></i> Banners</a>
    
                                    <a href="<?php echo e(url('bye')); ?>"><i class="fa fa-sign-out"></i> Logout</a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->
    
                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-12">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Dashboard</h3>
    
                                            <div class="row">
                                                <div class="col-md-3 col-sm-3">
                                                  <div class="card">
                                                    <div class="card-body">
                                                      <h2 class="card-title">Products</h2>
                                                      <h3 class="card-text"><?php echo e($stats['products']); ?></h3>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                  <div class="card">
                                                    <div class="card-body">
                                                      <h3 class="card-title">Categories</h3>
                                                      <h3 class="card-text"><?php echo e($stats['categories']); ?></h3>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                  <div class="card">
                                                    <div class="card-body">
                                                      <h2 class="card-title">Orders</h2>
                                                      <h3 class="card-text"><?php echo e($stats['orders']); ?></h3>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                  <div class="card">
                                                    <div class="card-body">
                                                      <h2 class="card-title">Users</h2>
                                                      <h3 class="card-text"><?php echo e($stats['users']); ?></h3>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>

                                            <div class="row" style="margin-top: 20px;">
                                                <div class="col-md-12 col-sm-12">
                                                <h3>Recent Orders</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Name</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
    
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Mostarizing Oil</td>
                                                        <td>Aug 22, 2022</td>
                                                        <td>Pending</td>
                                                        <td>$45</td>
                                                        <td><a href="cart.html" class="btn">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Katopeno Altuni</td>
                                                        <td>July 22, 2022</td>
                                                        <td>Approved</td>
                                                        <td>$100</td>
                                                        <td><a href="cart.html" class="btn">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Murikhete Paris</td>
                                                        <td>June 12, 2022</td>
                                                        <td>On Hold</td>
                                                        <td>$99</td>
                                                        <td><a href="cart.html" class="btn">View</a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
    
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="orders" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Orders</h3>
    
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Name</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
    
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Mostarizing Oil</td>
                                                        <td>Aug 22, 2022</td>
                                                        <td>Pending</td>
                                                        <td>$45</td>
                                                        <td><a href="cart.html" class="btn">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Katopeno Altuni</td>
                                                        <td>July 22, 2022</td>
                                                        <td>Approved</td>
                                                        <td>$100</td>
                                                        <td><a href="cart.html" class="btn">View</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Murikhete Paris</td>
                                                        <td>June 12, 2022</td>
                                                        <td>On Hold</td>
                                                        <td>$99</td>
                                                        <td><a href="cart.html" class="btn">View</a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
    
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="download" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Downloads</h3>
    
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Date</th>
                                                        <th>Expire</th>
                                                        <th>Download</th>
                                                    </tr>
                                                    </thead>
    
                                                    <tbody>
                                                    <tr>
                                                        <td>Mostarizing Oil</td>
                                                        <td>Aug 22, 2022</td>
                                                        <td>Yes</td>
                                                        <td><a href="#" class="btn">Download File</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Katopeno Altuni</td>
                                                        <td>Sep 12, 2018</td>
                                                        <td>Never</td>
                                                        <td><a href="#" class="btn">Download File</a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
    
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="products" role="tabpanel">
                                        <div class="myaccount-content">
                                        <div id="products-div">
                                          <h3>Products <a href="#" id="add-product" class="btn btn-primary">Add Product</a></h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered fairyskin-table">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th>Product Details</th>
                                                        <th>Inventory Details</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
    
                                                    <tbody>
                                                    <?php
                                                     if(count($products) > 0){
                                                        foreach($products as $p){
                                                            $sku = $p['sku'];
                                                            $mode= $p['status'] === "enabled" ? "Disable" : "Enable";
                                                            $updateButton = "update-product-status-btn-{$sku}";
                                                            $removeButton = "remove-product-btn-{$sku}";
                                                            $productLoading = "product-loading-{$sku}";
                                                            $imgs = $p['imggs'];
                                                            $pd = $p['pd'];
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-7">
                                                                    <p>SKU: <b><?php echo e($sku); ?></b></p>
                                                                    <p>Name: <b><?php echo e($p['name']); ?></b></p>
                                                                    <p>Price: <b>&#8358;<?php echo e(number_format($pd['amount'],2)); ?></b></p>
                                                                    <p>Weight: <b><?php echo e($pd['weight']); ?>kg</b></p>
                                                                    <p>Description: <em><?php echo e($pd['description']); ?></em></p>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <img src="<?php echo e($imgs[0]); ?>" style="width: 70px; heoght: 70px; border-radius: 35px;" alt="<?php echo e($p['name']); ?>"/>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <p>Category: <b><?php echo e(ucwords($pd['category'])); ?></b></p>
                                                                    <p>Tag: <b><?php echo e(ucwords($pd['tag'])); ?></b></p>
                                                                    <p>Stock status: <b><?php echo e(ucwords($pd['in_stock'])); ?></b></p>
                                                                    <p>Quantity: <b><?php echo e($p['qty']); ?></b></p>
                                                                    <p>Date added: <b><?php echo e($p['date']); ?></b></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><b><?php echo e(strtoupper($p['status'])); ?></b></td>
                                                        <td>
                                                            <a href="#" id="<?php echo e($updateButton); ?>" class="update-product-status-btn" data-mode="<?php echo e($mode); ?>" data-xf="<?php echo e($sku); ?>"><?php echo e($mode); ?></a>
                                                            <a href="#" id="<?php echo e($removeButton); ?>" class="remove-product-btn" data-xf="<?php echo e($sku); ?>">Remove</a>
                                                            <p id="<?php echo e($productLoading); ?>" class="product-loading"> <img src="assets/images/loading.gif" alt="Loading" style="width: 70px; height: 70px;"/> Processing</p>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                          </div>
                                           <div id="add-products-div">
                                           <h3> Add product <a href="#" id="products-back-button" class="btn btn-primary">Back to Products</a></h3>
                                           <form id="buup-form" enctype="multipart/form-data">
					                         <div class="myaccount-table table-responsive text-center">
					     
                        <table id="buup-table" cellpadding="0" cellspacing="0" width="100%" data-idl="3" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SKU</th>
                                    <th>Product name</th>
                                    <th>Description</th>
                                    <th>Price(&#8358;)</th>
                                    <th>Weight(kg)</th>
                                    <th>Current stock</th>
                                    <th>Category</th>
                                    <th>Tag</th>
									<th>Status</th>
                                    <th>Images</th>
                                    <th>Actions</th>                                                                                                      
                                </tr>
                            </thead>
                            <tbody>
							   							   
                            </tbody>
                        </table>                                        

                    </div><br>
					
					
					  </form>
                      <div class="hp-info hp-simple pull-left">
					      
							
                          <input type="hidden" id="buup-dt" name="dt">
                         
                            <div class="hp-sm" id="buup-button-box">
                             <a id="buup-add-row-btn" href="#" class="btn btn-primary" style="margin-top: 5px;">Add new product</a>
                        
                             <h3 id="buup-select-product-error" class="label label-danger text-uppercase buup-hide mr-5 mb-5">Please add a new product</h3>
                             <h3 id="buup-select-validation-error" class="label label-danger text-uppercase buup-hide">All fields are required</h3>
                             <br>
                             <button id="buup-btn" class="btn btn-default btn-block btn-clean" style="margin-top: 5px;">Submit</button>
                            </div>
                            <div id="buup-result-box">
                             <h4 id="buup-loading"> <img src="/assets/images/loading.gif" class="img img-fluid" alt="Loading" width="50" height="50"></h4> Uploading products<br>
                             <h5>Products uploaded: <span class="label label-success" id="buup-result-ctr">0</span></h5>
                            </div>
                            <div id="buup-finish-box">
                             <h4>Upload complete!</h4>
                            </div>                                
                   </div>
                                           </div>

                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                     <!-- Single Tab Content Start -->
                                     <div class="tab-pane fade" id="categories" role="tabpanel">
                                        <div class="myaccount-content">
                                        <div id="categories-div">
                                             <h3>Categories <a href="#" id="add-category" class="btn btn-primary">Add Category</a></h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered fairyskin-table">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Date Added</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
    
                                                    <tbody>
                                                    <?php
                                                     if(count($categories) > 0){
                                                        foreach($categories as $c){
                                                            $xf = $c['id'];
                                                            $mode= $c['status'] === "enabled" ? "Disable" : "Enable";
                                                            $updateButton = "update-category-status-btn-{$xf}";
                                                            $updateLoading = "update-category-status-loading-{$xf}";
                                                    ?>
                                                    <tr>
                                                        <td><?php echo e($c['name']); ?></td>
                                                        <td><?php echo e($c['category']); ?></td>
                                                        <td><?php echo e($c['date']); ?></td>
                                                        <td><b><?php echo e(strtoupper($c['status'])); ?></b></td>
                                                        <td>
                                                            <a href="#" id="<?php echo e($updateButton); ?>" class="btn update-category-status-btn" data-mode="<?php echo e($mode); ?>" data-xf="<?php echo e($xf); ?>"><?php echo e($mode); ?></a>
                                                            <p id="<?php echo e($updateLoading); ?>" class="update-category-status-loading"> <img src="assets/images/loading.gif" alt="Loading" style="width: 70px; height: 70px;"/> Processing your request</p>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                               </div>
                                            
                                           </div>
                                           <div id="add-categories-div" class="account-details-form">
                                               <h3> Add category <a href="#" id="categories-back-button" class="btn btn-primary">Back to Categories</a></h3>
                                               <form action="#">
                                                  <?php
                                                   $statuses = [
                                                    ['label' => 'Enabled', 'value' => 'enabled'],
                                                    ['label' => 'Disabled', 'value' => 'disabled'],
                                                   ];
                                                  ?>
                                                
                                                    <div class="row">
                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <div class="form-fild">
                                                              <p><label>Name <span class="required">*</span></label></p>
                                                              <input id="add-category-name" name="name" placeholder="Display name" type="text">
                                                             </div>
                                                        </div>
    
                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <div class="form-fild">
                                                              <p><label>Category <span class="required">*</span></label></p>
                                                              <input id="add-category-category" name="category" placeholder="Category" type="text" disabled>
                                                             </div>
                                                            
                                                        </div>
    
                                                        <div class="col-lg-12 col-12 mb-30">
                                                            <div class="form-fild">
                                                              <p><label>Status <span class="required">*</span></label></p>
                                                              <select id="add-category-status">
                                                                <option value='none'>Choose an option</option>
                                                                <?php
                                                                 foreach($statuses as $s){
                                                                ?>
                                                                 <option value="<?php echo e($s['value']); ?>"><?php echo e($s['label']); ?></option>
                                                                <?php
                                                                 }
                                                                ?>
                                                              </select>
                                                           </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <button class="save-change-btn" id="add-category-btn">Save Changes</button>
                                                            <p id="add-category-loading"> <img src="assets/images/loading.gif" alt="Loading" style="width: 70px; height: 70px;"/> Processing your request</p>
                                                        </div>
    
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->


                                     <!-- Single Tab Content Start -->
                                     <div class="tab-pane fade" id="banners" role="tabpanel">
                                        <div class="myaccount-content">
                                        <div id="banners-div">
                                             <h3>Banners <a href="#" id="add-banner" class="btn btn-primary">Add Banner</a></h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered fairyskin-table">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th>Details</th>
                                                        <th>Date Added</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
    
                                                    <tbody>
                                                    <?php
                                                     if(count($banners) > 0){
                                                        foreach($banners as $b){
                                                            $xf = $b['id'];
                                                            $mode= $b['status'] === "enabled" ? "Disable" : "Enable";
                                                            $updateButton = "update-banner-btn-{$xf}";
                                                            $removeButton = "remove-banner-btn-{$xf}";
                                                            $updateLoading = "update-banner-loading-{$xf}";
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <p>URL: <b><?php echo e($b['url']); ?></b></p>
                                                            <p>Top text: <b><?php echo e($b['top_text']); ?></b></p>
                                                            <p>Middle text: <b><?php echo e($b['middle_text']); ?></b></p>
                                                            <p>Bottom text: <b><?php echo e($b['bottom_text']); ?></b></p>
                                                            <p>Action text: <b><?php echo e($b['action_text']); ?></b></p>
                                                            <img src="<?php echo e($b['img']); ?>" alt=""/>
                                                        </td>
                                                        <td><?php echo e($b['date']); ?></td>
                                                        <td><b><?php echo e(strtoupper($b['status'])); ?></b></td>
                                                        <td>
                                                            <a href="#" id="<?php echo e($updateButton); ?>" class="btn update-banner-btn" data-mode="<?php echo e($mode); ?>" data-xf="<?php echo e($xf); ?>"><?php echo e($mode); ?></a>
                                                            <a href="#" id="<?php echo e($removeButton); ?>" class="btn remove-banner-btn"  data-xf="<?php echo e($xf); ?>">Remove</a>
                                                            <p id="<?php echo e($updateLoading); ?>" class="update-banner-loading"> <img src="assets/images/loading.gif" alt="Loading" style="width: 70px; height: 70px;"/> Processing your request</p>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                               </div>
                                            
                                           </div>
                                           <div id="add-banners-div" class="account-details-form">
                                               <h3> Add banner <a href="#" id="banners-back-button" class="btn btn-primary">Back to Banners</a></h3>
                                               <form action="#">
                                                  <?php
                                                   $statuses = [
                                                    ['label' => 'Enabled', 'value' => 'enabled'],
                                                    ['label' => 'Disabled', 'value' => 'disabled'],
                                                   ];

                                                   $bannerTextThemes = [
                                                    ['label' => 'Dark theme', 'value' => 'color-1'],
                                                    ['label' => 'Light theme', 'value' => 'color-2'],
                                                   ];

                                                   $bannerTextPositions = [
                                                    ['label' => 'Centered', 'value' => 'center'],
                                                    ['label' => 'Left', 'value' => ''],
                                                   ];
                                                  ?>
                                                
                                                    <div class="row">
                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <div class="form-fild">
                                                              <p><label>URL <span class="required">*</span></label></p>
                                                              <input id="add-banner-url" name="url" placeholder="URL" type="text">
                                                             </div>
                                                        </div>
    
                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <div class="form-fild">
                                                              <p><label>Top text <span class="required">*</span></label></p>
                                                              <input id="add-banner-toptext" name="top_text" placeholder="Text for the first line" type="text">
                                                             </div>
                                                        </div>

                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <div class="form-fild">
                                                              <p><label>Middle text <span class="required">*</span></label></p>
                                                              <input id="add-banner-middletext" name="middle_text" placeholder="Text for the middle line" type="text">
                                                             </div>
                                                        </div>

                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <div class="form-fild">
                                                              <p><label>Bottom text <span class="required">*</span></label></p>
                                                              <input id="add-banner-bottomtext" name="bottom_text" placeholder="Text for the bottom line" type="text">
                                                             </div>
                                                        </div>

                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <div class="form-fild">
                                                              <p><label>Action text <span class="required">*</span></label></p>
                                                              <input id="add-banner-actiontext" name="action_text" placeholder="Text for the button" type="text">
                                                             </div>
                                                        </div>

                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <div class="form-fild">
                                                              <p><label>Banner text theme <span class="required">*</span></label></p>
                                                              <select id="add-banner-text-theme">
                                                                <option value='none'>Choose an option</option>
                                                                <?php
                                                                 foreach($bannerTextThemes as $s){
                                                                ?>
                                                                 <option value="<?php echo e($s['value']); ?>"><?php echo e($s['label']); ?></option>
                                                                <?php
                                                                 }
                                                                ?>
                                                              </select>
                                                             </div>
                                                        </div>

                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <div class="form-fild">
                                                              <p><label>Banner text position <span class="required">*</span></label></p>
                                                              <select id="add-banner-text-position">
                                                                <option value='none'>Choose an option</option>
                                                                <?php
                                                                 foreach($bannerTextPositions as $s){
                                                                ?>
                                                                 <option value="<?php echo e($s['value']); ?>"><?php echo e($s['label']); ?></option>
                                                                <?php
                                                                 }
                                                                ?>
                                                              </select>
                                                             </div>
                                                        </div>

                                                        <div class='col-lg-6 col-12 mb-30'>
                                                            <div class='form-fild'>
                                                            <p><label>Image <span class="required">*</span></label></p>
                                                                <input type="file" id="add-banner-img" placeholder="Upload image" data-ic='0' onchange="readURL(this,'0')" class=" images" name="img">
                                                                <img src="" id='buup-0-preview-0'/>
                                                            </div>
                                                        </div>
    
    
    
    
                                                        <div class="col-lg-12 col-12 mb-30">
                                                            <div class="form-fild">
                                                              <p><label>Status <span class="required">*</span></label></p>
                                                              <select id="add-banner-status">
                                                                <option value='none'>Choose an option</option>
                                                                <?php
                                                                 foreach($statuses as $s){
                                                                ?>
                                                                 <option value="<?php echo e($s['value']); ?>"><?php echo e($s['label']); ?></option>
                                                                <?php
                                                                 }
                                                                ?>
                                                              </select>
                                                           </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <button class="save-change-btn" id="add-banner-btn">Save Changes</button>
                                                            <p id="add-banner-loading"> <img src="assets/images/loading.gif" alt="Loading" style="width: 70px; height: 70px;"/> Processing your request</p>
                                                        </div>
    
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
    
                                   
    
                                  
                                </div>
                            </div>
                            <!-- My Account Tab Content End -->
                        </div>
    
                    </div>
                    
                </div> 
            </div>           
        </div>
        <!--My Account section end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/repos/fairyskin/resources/views/admin-center.blade.php ENDPATH**/ ?>