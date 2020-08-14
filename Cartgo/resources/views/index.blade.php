<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home Page</title>
@yield('heading')
</head>
<body>
<div id="Home_Page">
	<svg class="Lower_Body" viewBox="0 557 1920 1">
		<path id="Lower_Body" d="M 1920 557 L 0 557 L 1920 557 Z">
		</path>
	</svg>
	<div class="Icon_Holder" viewBox="0 -200 1364 444">
		<a href="/ComingSoon">
		<div id="Group_13">
			<div class="Rectangle_7">
				<img class="Offer1" src="img/web/Off_1.png">
			</div>
			<div class="Rectangle_7">
				<img class="Offer1" src="img/web/Off_1.png">
			</div>
			<div class="Rectangle_7">
				<img class="Offer1" src="img/web/Off_1.png">
			</div>
			<div class="Rectangle_7">
				<img class="Offer1" src="img/web/Off_1.png">
			</div>
			<div class="Rectangle_7">
				<img class="Offer1" src="img/web/Off_1.png">
			</div>
			<div class="Rectangle_7">
				<img class="Offer1" src="img/web/Off_1.png">
			</div>
			<div class="Rectangle_7">
				<img class="Offer1" src="img/web/Off_1.png">
			</div>
			<div class="Rectangle_7">
				<img class="Offer1" src="img/web/Off_1.png">
			</div>
			<div class="Rectangle_7">
				<img class="Offer1" src="img/web/Off_1.png">
			</div>
			<div class="Rectangle_7">
				<img class="Offer1" src="img/web/Off_1.png">
			</div>
			<div class="Rectangle_7">
				<img class="Offer1" src="img/web/Off_1.png">
			</div>
			<div class="Rectangle_7">
				<img class="Offer1" src="img/web/Off_1.png">
			</div>
			<div class="Rectangle_7">
				<img class="Offer1" src="img/web/Off_1.png">
			</div>
			<div class="Rectangle_7">
				<img class="Offer1" src="img/web/Off_1.png">
			</div>
		</div></a>
	</div>
	
	<svg class="Product_Sub_Categories" viewBox="0 0 1920 442">
		<path id="Product_Sub_Categories" d="M 0 0 L 1920 0 L 1920 442 L 0 442 L 0 0 Z">
		</path>
	</svg>
	<svg class="Product_Sub_Categories_" viewBox="0 0 1920 551">
		<path id="Product_Sub_Categories_" d="M 0 0 L 1920 0 L 1920 551 L 0 551 L 0 0 Z">
		</path>
	</svg>
	<svg class="Deals_section_ba" viewBox="0 0 1364 444">
		<path id="Deals_section_ba" d="M 0 0 L 1364 0 L 1364 444 L 0 444 L 0 0 Z">
		</path>
	</svg>
	<svg class="Advertisement">
		<rect id="Advertisement" rx="0" ry="0" x="0" y="0" width="1364" height="338">
		</rect>
	</svg>
	<svg class="Product_of_the_day">
		<rect id="Product_of_the_day" rx="0" ry="0" x="0" y="0" width="1364" height="657">
		</rect>
	</svg>

								<!-- Home Slider 1  -->

	<div id="Group_11">
		@foreach($prodData as $dt)
		<div class="Rectangle_38">
			<div class="front-board">
				<center><a href="/product-details/{{$dt->prod_id}}" class="prod-image-click">
					<img src="img/shop/{{$dt->image1}}" alt="featured" class="prod-image-slide">
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
	<div id="DEALS_OF_THE_DAY">
		<span>DEALS OF THE DAY</span>
	</div>
	<div id="Mobile__Accessories">
		<span>Mobile & Accessories</span>
	</div>

									<!-- Home Slider 2  -->

	<div id="Group_111">
		@foreach($prodData as $dt)
		<div class="Rectangle_388">
			<div class="front-board">
				<center><a href="/product-details/{{$dt->prod_id}}" class="prod-image-click">
					<img src="img/shop/{{$dt->image1}}" alt="featured" class="prod-image-slide">
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
	<div id="Titler400">
		<span>NEW ARRIVALS</span>
	</div>

	 <!-- Arrow of this slider here -->
	<div id="Arrow_for_slider2">
		<svg class="Path_55" viewBox="4296.241 734 24.996 49.992">
			<path id="Path_55" d="M 4321.2373046875 734 L 4296.2412109375 758.9961547851563 L 4321.2373046875 783.9923095703125" onclick="moving(-1)">
			</path>
		</svg>
		<svg class="Path_66" viewBox="4296.241 734 24.996 49.992">
			<path id="Path_66" d="M 4296.24072265625 734 L 4321.23681640625 758.9961547851563 L 4296.24072265625 783.9923095703125" onclick="moving(1)">
			</path>
		</svg>
	</div>

									<!-- Footer -->

	

								<!-- Product Slides -->

	<div id="Product_Slides">
		<a href="/ComingSoon">
		<div id="Group_23">
			<div id="Group_27">
				<svg class="Rectangle_405">
					<rect id="Rectangle_405" rx="0" ry="0" x="0" y="0" width="392" height="567">
					</rect>
				</svg>
				<div class="Rectangle_406">
					<div class="sub-cat-1">
						<img src="img/web/th.jpg" class="sub-cat-1">
					</div>
				</div>
				<div class="Rectangle_407">
					Big Sale!
				</div>
			</div>
		</div>
		<div id="Group_22">
			<div id="Group_26">
				<svg class="Rectangle_409">
					<rect id="Rectangle_409" rx="0" ry="0" x="0" y="0" width="392" height="567">
					</rect>
				</svg>
				<div class="Rectangle_406_c">
					<div class="sub-cat-1">
						<img src="img/web/th.jpg" class="sub-cat-1">
					</div>
				</div>
				<div class="Rectangle_407">
					New Arrival
				</div>
			</div>
		</div>
		<div id="Group_21">
			<div id="Group_25">
				<svg class="Rectangle_410">
					<rect id="Rectangle_410" rx="0" ry="0" x="0" y="0" width="392" height="567">
					</rect>
				</svg>
				<div class="Rectangle_406_da">
					<div class="sub-cat-1">
						<img src="img/web/th.jpg" class="sub-cat-1">
					</div>
				</div>
				<div class="Rectangle_407">
					20% OFF
				</div>
			</div>
		</div></a>
	</div>


	 <!-- Arrow of slider here -->
	<div id="Arrow_for_slider">
		<svg class="Path_5" viewBox="4296.241 734 24.996 49.992">
			<path id="Path_5" d="M 4321.2373046875 734 L 4296.2412109375 758.9961547851563 L 4321.2373046875 783.9923095703125" onclick="mover(-1)">
			</path>
		</svg>
		<svg class="Path_6" viewBox="4296.241 734 24.996 49.992">
			<path id="Path_6" d="M 4296.24072265625 734 L 4321.23681640625 758.9961547851563 L 4296.24072265625 783.9923095703125" onclick="mover(1)">
			</path>
		</svg>
	</div>


	<div id="Group_39">
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
	@yield('dashboard')	
	@yield('footer')	
	
</div>		<!-- /HomePage -->
</body>
</html>