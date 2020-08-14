<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{$prodData->prod_name}}</title>
@yield('heading')
</head>
<body>
<div id="relate_Page">
	<svg class="Lower_Body" viewBox="0 557 1920 1">
		<path id="Lower_Body" d="M 1920 557 L 0 557 L 1920 557 Z">
		</path>
	</svg>
	<div class="product-main-display">
		<h2><b>{{$prodData->prod_name}}</b></h2><hr>
		
		@if(isset($userData)) @if($userData->type=='admin')
			<div class="panel panel-default randy">
				<a class="collapsed" data-toggle="collapse" data-parent="#checkout-progress" href="#payment-met">
					<div class="panel-heading headpandiv" >
						<span> <i class="fa fa-edit"> </i> </span> UPDATE THIS PRODUCT INFORMATION
					</div>
				</a>
				<div id="payment-met" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="col-sm-6 col-md-5">
							<div class="login">
							  <form id="updateform" action="/UpdateProduct" enctype="multipart/form-data" method="post" name="updatePro">@csrf
								<h2>{{$product->prod_name}}</h2>
								<p class="err-data"> <br></p><input type="hidden" name="pid" value="{{$product->prod_id}}">
								<label id="prodnameLbl"><strong>Product name</strong><span>*</span></label>
								<input value="{{$product->prod_name}}" class="field_prod" type="text" name="pname" required><br><br>
								<label id="prodqtyLb6"><strong>Product Quantity</strong><span>*</span></label>
								<input value="{{$product->prod_qty}}" class="field_prod" type="text" name="pqty" required><br><br>
								<div class="bill-info">
									<div class="group">
										<label id="prodprcLb4"><strong>Product Price</strong></label><br>MRP price &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Seller Price<br>
										<input type="text" name="psell" value="{{$product->prod_SELLER_price}}" class="half_prod" required>
										<input type="text" name="pmrp" value="{{$product->prod_MRP_price}}" class="half_prod" required>
									</div>
								</div>
							</div>
						  </div>
						  <div class="col-sm-6 col-md-5">
							<div class="login">
								<label id="proddtlsLb2"><strong>Product Details ( Short details with the product )</strong><span>*</span></label>
								<textarea rows="6" cols="63" type="text" name="pdetail" class="det-area" required>{{$product->prod_details}}</textarea><br>
								
								<div class="form-group mt-3">
								  <label class="mr-2" id="prodpicLb7"><strong>Upload product images</strong></label>
									<div class="bill-info">
										<div class="group">
											<input type="file" class="third" name="pimg1">
											<input type="file" class="third" name="pimg2">
											<input type="file" class="third" name="pimg3">
											<input type="file" class="third" name="pimg4">
										</div>
									</div>
								</div>
								
								<label id="shopnamesLb8"><strong>Shop name</strong> <span>(Optional)</span></label>
								<input value="{{$product->prod_shop}}" type="text" name="pshop" class="field_prod"/>  
								</br></br>  

								<div class="offset-md-2 col-md-2">
								  <button type="submit" class="btn btn-primary"> Update Information </button></br></br>
								</div>
							   </form>
							  </div>
						  </div>
					</div>
				</div>
			</div>
		@endif @endif

		<div class="col-sm-6">
			<div class="FrontImage">
				<div id="ImgDiv"><center>
					@if($proImg->image1!=null)<img src="{{asset('img/shop/'.$proImg->image1.'')}}" class="ImageShow">
					@elseif($proImg->image2!=null)<img src="{{asset('img/shop/'.$proImg->image2.'')}}" class="ImageShow">
					@elseif($proImg->image3!=null)<img src="{{asset('img/shop/'.$proImg->image3.'')}}" class="ImageShow">
					@elseif($proImg->image4!=null)<img src="{{asset('img/shop/'.$proImg->image4.'')}}" class="ImageShow">@endif
				</center></div>
			</div>
			<div class="SelectImage">
				@if($proImg->image1!=null)<img src="{{asset('img/shop/'.$proImg->image1.'')}}" class="ImageSelector" onclick="CatchImage('{{$proImg->image1}}')">@endif
				@if($proImg->image2!=null)<img src="{{asset('img/shop/'.$proImg->image2.'')}}" class="ImageSelector" onclick="CatchImage('{{$proImg->image2}}')">@endif
				@if($proImg->image3!=null)<img src="{{asset('img/shop/'.$proImg->image3.'')}}" class="ImageSelector" onclick="CatchImage('{{$proImg->image3}}')">@endif
				@if($proImg->image4!=null)<img src="{{asset('img/shop/'.$proImg->image4.'')}}" class="ImageSelector" onclick="CatchImage('{{$proImg->image4}}')">@endif
			</div>
		</div>
		<div class="col-sm-6">
						<!-- Nav tabs -->
				<a data-toggle="tab" href="#description"> PRODUCT DETAILS </a> &nbsp &nbsp
				<a data-toggle="tab" href="#review"> REVIEWS </a> &nbsp &nbsp
				<a data-toggle="tab" href="#feedback"> FEEDBACK </a> &nbsp &nbsp
			
			<hr>
						<!-- Tab panes -->
			<div class="tab-content">
				<div id="description" class="tab-pane fade active in" role="tabpanel">
					<p>@if($product->prod_qty!=0)
							<h3 class="instock"><small>A <span class="arter">{{$product->prod_shop}}</span> Product</small> &nbsp &nbsp <i class="fa fa-check-circle"></i> <small>In Stock</small></h3>
						@else
							<h3 class="outstock"><small>A <span class="arter">{{$product->prod_shop}}</span> Product</small> &nbsp &nbsp <i class="fa fa-times-circle"></i> <small>Out of Stock</small></h3>
						@endif

						<h5><span class="sell-data">${{$product->prod_SELLER_price}}</span> <span class="mrp-data">${{$product->prod_MRP_price}}</span></h5>
						<h2><i class="fa fa-shopping-cart" onclick="AddCart('{{csrf_token()}}','{{$product->prod_id}}')"></i> &nbsp <i class="fa fa-heart" onclick="AddWish('{{csrf_token()}}','{{$product->prod_id}}')"></i></h2>
						</p>
						<textarea class="prod-detials-terms" disabled>{{$product->prod_details}}</textarea>
				</div>
				<div id="review" class="tab-pane fade" role="tabpanel">
					@foreach($proRev as $dt)
						<h4>{{$dt->username}}<small class="time-foot"> {{$dt->time}}</small></h4>
						<p>@for($i=0; $i< $dt->rating; $i++) <i class="on fa fa-star"></i> @endfor <br> {{$dt->review}} </p><br>
					@endforeach
				</div>
				<div id="feedback" class="tab-pane fade" role="tabpanel">
					@if(isset($userData))
						<div class="review">
							<form action="/revUpload" method="post">@csrf
								<textarea name="revData" class="revArea" placeholder="Write Your Review..."></textarea><input type="hidden" name="pid" value="{{$product->prod_id}}">
									<div class="rev-area">Give rating to this product : <span class="faces" id="faces"></span><br><input type="range" name="rate" id="rate" min="1" max="5" onchange="revChanger()" /></div>
										<button type="submit" class="rev-btn">Upload Review</button>
											</form><br>
												</div>
													@else Please <a href="/login">Log in</a> to your account to review 	this product or <a href="/reg">Create an account.</a>
														@endif
				</div>
				
			</div>
				
		</div>
	</div>
	
	
									<!-- Slider 2  -->

	@if(isset($historyData))
	<div class="slider2">
		<div id="Titler4001">
			<span>VISITED PRODUCTS</span>
		</div>
			<div id="Group_111_prod">
				@foreach($historyData as $dt)
				<div class="Rectangle_388">
					<div class="front-board">
						<center><a href="/product-details/{{$dt->prod_id}}" class="prod-image-click">
							@php($imgCall=0) @foreach($imgData as $img) @if($img->prod_id==$dt->prod_id)
								<a href="/product-details/{{$dt->prod_id}}" class="pro-image fix"><img src="{{ asset('img/shop/'.$img->image1.'') }}" alt="featured" class="prod-image-slide" /></a>@php($imgCall=1) @break @endif
							@endforeach
							@if($imgCall==0) <a href="/product-details/{{$dt->prod_id}}" class="pro-image fix"><img src="img/featured/1.jpg" alt="Product Not Available" /></a> @endif
						</a></center><br><br>
						<div class="prod-name-divv">
							<a href="/product-details/{{$dt->prod_id}}" class="prod-name-click">
								{{$dt->prod_name}}
							</a><br>
							<span class="sell-data">${{$dt->prod_SELLER_price}}</span> <span class="mrp-data">${{$dt->prod_MRP_price}}</span>
						</div>
					</div>
				</div>
				@endforeach
			</div>

		 <!-- Arrow of this slider here -->
		<div id="Arrow_for_slider_prod_page">
			<svg class="Path_55_prod" viewBox="4296.241 734 24.996 49.992">
				<path id="Path_55_prod" d="M 4321.2373046875 734 L 4296.2412109375 758.9961547851563 L 4321.2373046875 783.9923095703125" onclick="moving(-1)">
				</path>
			</svg>
			<svg class="Path_66_prod" viewBox="4296.241 734 24.996 49.992">
				<path id="Path_66_prod" d="M 4296.24072265625 734 L 4321.23681640625 758.9961547851563 L 4296.24072265625 783.9923095703125" onclick="moving(1)">
				</path>
			</svg>
		</div>
	</div>
	@endif
									<!-- Advertisement -->

		<div class="Advertisement_prod">
			<div id="Group_39_prod">
				<div id="Repeat_Grid_1">
					<div id="Repeat_Grid_1_0" class="">
						<svg class="Rectangle_421">
							<rect id="Rectangle_421" rx="2" ry="2" x="0" y="0" width="596" height="256">
							</rect>
						</svg>
					</div>
					<div id="Repeat_Grid_1_1" class="">
						<svg class="Rectangle_421_d">
							<rect id="Rectangle_421_d" rx="2" ry="2" x="0" y="0" width="596" height="256">
							</rect>
						</svg>
					</div>
				</div>
			</div>
		</div>
	
	                                  <!-- Advertise Body 1 2 -->

	@yield('dashboard')
	@yield('footer-relate')
</div>
</div>
</body>
</html>