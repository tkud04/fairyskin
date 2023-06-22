@extends('layout')

@section('title','Admin Center')

@section('scripts')
<script>
    $(document).ready(() => {
        hideElem('#add-categories-div')
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
    
                                    <a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i> address</a>
    
                                    <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> Account Details</a>
    
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
                                                <div class="col-md-4 col-sm-4">
                                                  <div class="card">
                                                    <div class="card-body">
                                                      <h1 class="card-title">Products</h1>
                                                      <h3 class="card-text">50</h3>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                  <div class="card">
                                                    <div class="card-body">
                                                      <h1 class="card-title">Orders</h1>
                                                      <h3 class="card-text">200</h3>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                  <div class="card">
                                                    <div class="card-body">
                                                      <h1 class="card-title">Users</h1>
                                                      <h3 class="card-text">47</h3>
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
                                        <h3>Products <a href="{{url('buup')}}" class="btn btn-primary">Add Products</a></h3>
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
                                     <div class="tab-pane fade" id="categories" role="tabpanel">
                                        <div class="myaccount-content">
                                        <div id="categories-div">
                                             <h3>Categories <a href="#" id="add-category" class="btn btn-primary">Add Category</a></h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
    
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Mostarizing Oil</td>
                                                        <td>Aug 22, 2022</td>
                                                        <td>Pending</td>
                                                        <td>Pending</td>
                                                        <td>$45</td>
                                                        <td><a href="cart.html" class="btn">Remove</a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                               </div>
                                            
                                           </div>
                                           <div id="add-categories-div" class="account-details-form">
                                               <h3> Add category <a href="#" id="categories-back-button" class="btn btn-primary">Back to Categories</a></h3>
                                               <form action="#">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="first-name" placeholder="First Name" type="text">
                                                        </div>
    
                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="last-name" placeholder="Last Name" type="text">
                                                        </div>
    
                                                        <div class="col-12 mb-30">
                                                            <input id="display-name" placeholder="Display Name" type="text">
                                                        </div>
    
                                                        <div class="col-12 mb-30">
                                                            <input id="email" placeholder="Email Address" type="email">
                                                        </div>
    
                                                        <div class="col-12 mb-30"><h4>Password change</h4></div>
    
                                                        <div class="col-12 mb-30">
                                                            <input id="current-pwd" placeholder="Current Password" type="password">
                                                        </div>
    
                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="new-pwd" placeholder="New Password" type="password">
                                                        </div>
    
                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="confirm-pwd" placeholder="Confirm Password" type="password">
                                                        </div>
    
                                                        <div class="col-12">
                                                            <button class="save-change-btn">Save Changes</button>
                                                        </div>
    
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
    
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Billing Address</h3>
    
                                            <address>
                                                <p><strong>Alex Tuntuni</strong></p>
                                                <p>1355 Market St, Suite 900 <br>
                                                    San Francisco, CA 94103</p>
                                                <p>Mobile: (123) 456-7890</p>
                                            </address>
    
                                            <a href="#" class="btn d-inline-block edit-address-btn"><i class="fa fa-edit"></i>Edit Address</a>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
    
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Account Details</h3>
    
                                            <div class="account-details-form">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="first-name" placeholder="First Name" type="text">
                                                        </div>
    
                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="last-name" placeholder="Last Name" type="text">
                                                        </div>
    
                                                        <div class="col-12 mb-30">
                                                            <input id="display-name" placeholder="Display Name" type="text">
                                                        </div>
    
                                                        <div class="col-12 mb-30">
                                                            <input id="email" placeholder="Email Address" type="email">
                                                        </div>
    
                                                        <div class="col-12 mb-30"><h4>Password change</h4></div>
    
                                                        <div class="col-12 mb-30">
                                                            <input id="current-pwd" placeholder="Current Password" type="password">
                                                        </div>
    
                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="new-pwd" placeholder="New Password" type="password">
                                                        </div>
    
                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="confirm-pwd" placeholder="Confirm Password" type="password">
                                                        </div>
    
                                                        <div class="col-12">
                                                            <button class="save-change-btn">Save Changes</button>
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