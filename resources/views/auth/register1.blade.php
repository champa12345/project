@extends('master')
@section('title','resgiter')
@section('content')
<div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
	        <section class="col-sm-9 col-xs-12">
	          <div class="col-main">
	            <div class="my-account">
	              <div class="page-title">
	                <h2>Dang ky thong tin nguoi dung</h2>
	              </div>
	              <div class="row">
	                <div class="col-sm-6 col-md-6 col-xs-12">
	                  <div class="title-box">
	                    <h3>Account Information</h3>
	                  </div>
	                  <ul class="list-unstyled">
	                    <li>
	                      <div class="form-group"  method ="post">
	                        <label for="fname">last Name <span class="required">*</span></label>
	                        <input type="text" name="fname" id="fname" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Mr.">
	                        @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
	                      </div>
	                    </li>
	                    <li>
	                      <div class="form-group">
	                        <label for="emailAddress">Email Address <span class="required">*</span></label>
	                        <input type="email" name="email" id="emailAddress" class="form-control" placeholder="vince-roy@example.com">
	                      </div>
	                    </li>
	                  </ul>
	                </div>
	                <div class="col-sm-6 col-md-6 col-xs-12">
	                  <div class="title-box">
	                    <h3>Change Password</h3>
	                  </div>
	                  <ul class="list-unstyled">
	                    <li>
	                      <div class="form-group">
	                        <label for="cpassword">Current Password <span class="required">*</span></label>
	                        <input type="password" name="cpassword" id="cpassword" class="form-control">
	                      </div>
	                      <div class="form-group">
	                        <label for="npassword">New Password <span class="required">*</span></label>
	                        <input type="password" name="npassword" id="npassword" class="form-control">
	                      </div>
	                    </li>
	                    <li>
	                      <div class="form-group">
	                        <label for="cnewpassword">Confirm New Password <span class="required">*</span></label>
	                        <input type="password" name="cnewpassword" id="cnewpassword" class="form-control">
	                      </div>
	                    </li>
	                  </ul>
	                </div>
	              </div>
	              <div class="buttons-set">
	                <button id="send2" name="send" type="submit" class="button login"><span>Save</span></button>
	                <span class="required pull-right"><b>*</b> Required Field</span> </div>
	            </div>
	          </div>
	        </section>
	        <aside class="col-right sidebar col-sm-3 col-xs-12">
	          <div class="block block-account">
	            <div class="block-title">My Account</div>
	            <div class="block-content">
	              <ul>
	                <li><a href="dashboard.html"><i class="fa fa-angle-right"></i> Account Dashboard</a></li>
	                <li class="current"><a href="my-account-information.html"><i class="fa fa-angle-right"></i> Account Information</a></li>
	                <li><a href="my-address.html"><i class="fa fa-angle-right"></i> Address Book</a></li>
	                <li><a href="my-order.html"><i class="fa fa-angle-right"></i> My Orders</a></li>
	                <li><a href="#"><i class="fa fa-angle-right"></i> Billing Agreements</a></li>
	                <li><a href="#"><i class="fa fa-angle-right"></i> Recurring Profiles</a></li>
	                <li><a href="#"><i class="fa fa-angle-right"></i> My Product Reviews</a></li>
	                <li><a href="#"><i class="fa fa-angle-right"></i> My Tags</a></li>
	                <li><a href="wishlist.html"><i class="fa fa-angle-right"></i> My Wishlist</a></li>
	                <li><a href="#"><i class="fa fa-angle-right"></i> My Downloadable</a></li>
	                <li><a href="#"><i class="fa fa-angle-right"></i> Newsletter Subscriptions</a></li>
	              </ul>
	            </div>
	          </div>
	          <div class="block block-compare">
	            <div class="block-title "><span>Compare Products (3)</span></div>
	            <div class="block-content">
	              <ol id="compare-items">
	                <li class="item">
	                  <input type="hidden" value="2173" class="compare-item-id">
	                  <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a href="#" class="product-name"><i class="fa fa-angle-right"></i>Product Title Here</a></li>
	                <li class="item">
	                  <input type="hidden" value="2174" class="compare-item-id">
	                  <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a href="#" class="product-name"><i class="fa fa-angle-right"></i>Product Title Here</a></li>
	                <li class="item">
	                  <input type="hidden" value="2175" class="compare-item-id">
	                  <a class="jtv-btn-remove" title="Remove This Item" href="#"></a> <a href="#" class="product-name"><i class="fa fa-angle-right"></i>Product Title Here</a></li>
	              </ol>
	              <div class="ajax-checkout">
	                <button type="submit" title="Submit" class="button button-compare"><span>Compare</span></button>
	                <button type="submit" title="Submit" class="button button-clear"><span>Clear</span></button>
	              </div>
	            </div>
	          </div>
	        </aside>
      </div>
    </div>
 </div>
@endsection