<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Products</title>
@yield('heading')
</head>

<body>
<div id="relate_Page">
	<svg class="Lower_Body" viewBox="0 557 1920 1">
		<path id="Lower_Body" d="M 1920 557 L 0 557 L 1920 557 Z">
		</path>
	</svg>
	
	<div class="product-main-display">
		
		<div class="row">
			<h2><b>Products Search Result</b></h2> <small><span><i class="nato">Showing Result of</i> " {{$SearchData['value']}} ", <i class="nato">Found</i> {{count($searchResult)}} <i class="nato">results</i></span></small><hr>
			<div class="panel panel-default randy">
				<a class="collapsed" data-toggle="collapse" data-parent="#checkout-progress" href="#payment-met">
					<div class="panel-heading headpandiv" >
						<span> <i class="fa fa-search"> </i> &nbsp &nbsp ADVANCED SEARCH</span>
					</div>
				</a>
				<div id="payment-met" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="col-md-4">
							<select id="sort-by">
								<option value="" readonly> Sort Results By ... </option>
								<option value="/shop/withtag/{{$SearchData['searchType']}}/{{$SearchData['value']}}/l2%hi"> price ( low &gt; high ) </option>
								<option value="/shop/withtag/{{$SearchData['searchType']}}/{{$SearchData['value']}}/h2%lo"> price (high &gt; low) </option>
							</select>
							<input type="hidden" value="{{$SearchData['searchType']}}" id="srcDT">
							<input type="hidden" value="{{$SearchData['value']}}" id="valDT">
						</div>
						<div class="col-md-4">
							<!-- <p>
								<input type="text" id="price-amount" readonly>
								<input type="range" id="price-range" min="1" max="10000" onclick="rangeShow()">
								<input type="submit" onclick="RangeVal()" value="Search">
							</p> -->
							<p>
							  <label for="amount">Price range:</label>
							  <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
							</p>
							 
							<div id="slider-range"></div>
						</div>
						<div class="col-md-4">
							
						</div>
					</div>
				</div>
			</div>			<!--   // End of ADVANCED SEARCH panel -->
		</div>			<!-- / upper ROW collosure -->
		<div class="row">
			<div class="result-area">
				@if(count($searchResult)==0)
					<p><center><span class="err-msg">No product found.</span></center></p>
				@endif
				@foreach($searchResult as $dt)

				<div class="Rectangle_388-tango">
					<div class="front-board-tango">
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