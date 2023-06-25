@extends('layout')

@section('title','Admin Center')

@section('styles')
<link rel="stylesheet" href="assets/lib/datatables/css/dataTables.bootstrap.min.css">
@stop

@section('scripts')
<script src="assets/lib/datatables/js/datatables.min.js"></script>
<script src="assets/lib/datatables/js/datatables-init.js"></script>
<script>
    /*
      $('#buup-select-product-error').hide();
		  $('#buup-select-qty-error').hide();
    */
   let buupCounter = 0, categories = []
    $(document).ready(() => {
        hideElem([
            '#add-categories-div','#add-category-loading',
            '.update-category-status-loading', '#add-products-div',
            '#add-product-loading','.buup-hide',
            '#buup-select-product-error','#buup-select-qty-error',
            '#buup-result-box','#buup-finish-box',
            '#buup-select-validation-error','.product-loading'
        ])
        localStorage.clear()

        <?php 
          foreach($categories as $cc){ 
           if($cc['status'] == "enabled"){
        ?>
	      categories.push("{{$cc['category']}}")
	    <?php
           }
        }
        ?>
    })
</script>
@stop

@section('content')
@include('banner-2',['title' => 'Admin Center','subtitle' => 'Admin suite for managing the site operations'])

 <!--My Account section start-->
 <div class="my-account-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    
                    <div class="col-12">
                        <input type="hidden" id="skf" value="{{csrf_token()}}"/>
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
    
                                    <a href="{{url('bye')}}"><i class="fa fa-sign-out"></i> Logout</a>
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
                                                      <h3 class="card-text">{{$stats['products']}}</h3>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                  <div class="card">
                                                    <div class="card-body">
                                                      <h3 class="card-title">Categories</h3>
                                                      <h3 class="card-text">{{$stats['categories']}}</h3>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                  <div class="card">
                                                    <div class="card-body">
                                                      <h2 class="card-title">Orders</h2>
                                                      <h3 class="card-text">{{$stats['orders']}}</h3>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                  <div class="card">
                                                    <div class="card-body">
                                                      <h2 class="card-title">Users</h2>
                                                      <h3 class="card-text">{{$stats['users']}}</h3>
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
                                                                    <p>SKU: <b>{{$sku}}</b></p>
                                                                    <p>Name: <b>{{$p['name']}}</b></p>
                                                                    <p>Price: <b>&#8358;{{number_format($pd['amount'],2)}}</b></p>
                                                                    <p>Description: <em>{{$pd['description']}}</em></p>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <img src="{{$imgs[0]}}" style="width: 70px; heoght: 70px; border-radius: 35px;" alt="{{$p['name']}}"/>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <p>Category: <b>{{ucwords($pd['category'])}}</b></p>
                                                                    <p>Stock status: <b>{{ucwords($pd['in_stock'])}}</b></p>
                                                                    <p>Quantity: <b>{{$p['qty']}}</b></p>
                                                                    <p>Date added: <b>{{$p['date']}}</b></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><b>{{strtoupper($p['status'])}}</b></td>
                                                        <td>
                                                            <a href="#" id="{{$updateButton}}" class="update-product-status-btn" data-mode="{{$mode}}" data-xf="{{$sku}}">{{$mode}}</a>
                                                            <a href="#" id="{{$removeButton}}" class="remove-product-btn" data-xf="{{$sku}}">Remove</a>
                                                            <p id="{{$productLoading}}" class="product-loading"> <img src="assets/images/loading.gif" alt="Loading" style="width: 70px; height: 70px;"/> Processing</p>
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
                                    <th>Current stock</th>
                                    <th>Category</th>
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
                                                        <td>{{$c['name']}}</td>
                                                        <td>{{$c['category']}}</td>
                                                        <td>{{$c['date']}}</td>
                                                        <td><b>{{strtoupper($c['status'])}}</b></td>
                                                        <td>
                                                            <a href="#" id="{{$updateButton}}" class="btn update-category-status-btn" data-mode="{{$mode}}" data-xf="{{$xf}}">{{$mode}}</a>
                                                            <p id="{{$updateLoading}}" class="update-category-status-loading"> <img src="assets/images/loading.gif" alt="Loading" style="width: 70px; height: 70px;"/> Processing your request</p>
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
                                                                 <option value="{{$s['value']}}">{{$s['label']}}</option>
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
    
                                   
    
                                  
                                </div>
                            </div>
                            <!-- My Account Tab Content End -->
                        </div>
    
                    </div>
                    
                </div> 
            </div>           
        </div>
        <!--My Account section end-->
@stop