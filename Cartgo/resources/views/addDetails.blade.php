<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Product</title>
@yield('heading')
</head>

<body>
<div id="relate_Page">
	<svg class="Lower_Body" viewBox="0 557 1920 1">
		<path id="Lower_Body" d="M 1920 557 L 0 557 L 1920 557 Z">
		</path>
	</svg>
	
	<div class="product-main-display">

		@if(session()->has('msg'))
			<p class="confirm-data">{{session()->get('msg')}}</p><br><br>
			{{session()->forget('msg')}}
		@endif

		  <div class="container">
		    <div class="row">
		      <div class="col-md-2"></div>.
			  <div class="col-sm-6 col-md-5"></div>
		      <div class="col-sm-6 col-md-5">
		        <div class="login">
		          <form id="accountform" action="/AddProduct" enctype="multipart/form-data" method="post" name="reg">@csrf
		            <h2>Insert Product Information.</h2>
		            <p class="err-data"> <br></p>
		            <label id="prodnameLbl"><strong>Product name</strong><span>*</span></label>
		            <input value="" type="text" name="pname" required>
		            <label for="exampleFormControlSelect1"><strong>Product category <span>*</span></strong></label>
		            <select class="form-control" id="prodcatLb9" name="pcat" required="required">
		              <option value="Category 1">category1</option>
		              <option value="Category 2">category2</option>
		              <option value="Category 3">category3</option>
		              <option value="Category 4">category4</option>
		              <option value="Category 5">category5</option>
		              <option value="Category 6">category6</option>
		            </select>
					<label id="prodqtyLb6"><strong>Product Quantity</strong><span>*</span></label>
		            <input value="" type="text" name="pqty" required>
		            <div class="bill-info">
						<div class="group">
							<label id="prodprcLb4"><strong>Product Price</strong></label>
							<input type="text" name="psell" placeholder="Product Sell Price" class="half" required>
							<input type="text" name="pmrp" placeholder="Product MRP Price * " class="half" required>
						</div>
					</div>
		        </div>
		      </div>
			  <div class="col-sm-6 col-md-5">
		        <div class="login">
					<label id="proddtlsLb2"><strong>Product Details ( Short details with the product )</strong><span>*</span></label>
		            <textarea value="" rows="6" cols="63" type="text" name="pdetail" class="det-area"></textarea><br>
					
					<div class="form-group mt-3">
		              <label class="mr-2" id="prodpicLb7"><strong>Upload product images</strong></label>
						<div class="bill-info">
							<div class="group">
								<input type="file" class="third" name="pimg1" required>
								<input type="file" class="third" name="pimg2">
								<input type="file" class="third" name="pimg3">
								<input type="file" class="third" name="pimg4">
							</div>
						</div>
					</div>
		            
					<label id="shopnamesLb8"><strong>Shop name</strong> <span>(Optional)</span></label>
		            <input value="" type="text" name="pshop"/>  
		            </br></br>  

		            <div class="offset-md-2 col-md-2">
		              <button type="submit" class="btn btn-primary"> Add Product </button></br></br>
		            </div>
				   </form>
		          </div>
			  </div>
		    </div>
		  </div>

	</div> 		<!-- /Product Main Display -->

	
	
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
					</div>    <!-- /Front Board -->
				</div>  		<!-- /single product rectangle -->
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
</div> <!-- /Relate Page -->
</body>
</html>