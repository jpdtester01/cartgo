<html>
    <body>
        @section('dashboard')
	        <svg class="Navbar">
				<rect id="Navbar" rx="0" ry="0" x="0" y="0" width="1920" height="81">
				</rect>
			</svg>
            <div class="panel-group" id="navitems">
				<div id="desk-view">
					<div id="Group_12">
					<div id="Group_1">
						<div id="cartgo">
							<span><a href="/" class="logo-Reck">CARTGO</a></span>
						</div>
					</div>
								<!-- Search Box  -->

					<div id="Group_9">
						<div id="Group_2">
							<svg class="Rectangle_5">
								<rect id="Rectangle_5" rx="2" ry="2" x="0" y="0" width="938" height="48">
								</rect>
							</svg>
							<svg class="Path_4" viewBox="0 0 938 48">
								<path id="Path_4" d="M 0 0 L 938 0 L 938 48 L 0 48 L 0 0 Z">
								</path>
							</svg>
							<input type="text" class="rubic-alpha-Mime" id="srcTxt" placeholder="Enter Search Keyword Here ..." onchange="searchListBy()">
							<svg class="Rectangle_6">
								<rect id="Rectangle_6" rx="0" ry="0" x="0" y="0" width="64" height="48">
								</rect>
							</svg>
							<button class="srcButton" onclick="searchListBy()"><i class="fa fa-search"></i></button>
						</div>
						<a data-toggle="collapse" href="#selector" >
							<svg class="Select_Catergory">
							<rect id="Select_Catergory" rx="0" ry="0" x="0" y="0" width="190" height="48">
							</rect>
						</svg>
						<div id="Select_Category">
							<span>Select Category</span>
						</div>
						<svg class="Polygon_1" viewBox="0 0 10 8">
							<path onclick="application.showOverlay('Dropdown',0,0, event)" id="Polygon_1" d="M 4.999999523162842 0 L 10 8 L 0 8 Z">
							</path>
						</svg></a>
					</div>

					<div class="panel-group" id="accordion">
										<!-- Account Pic -->
						<a data-toggle="collapse" data-parent="#accordion" class="profiler" href="#profile">
						<img id="user" src="{{asset('img/web/user.png')}}" srcset="{{asset('img/web/user.png')}} 1x, {{asset('img/web/user@2x.png')}} 2x"></a>
						
						<a data-toggle="collapse" data-parent="#accordion" href="#wishlist" >
						<svg class="heart" viewBox="0 0 29 23.589">
							<path id="heart" d="M 14.50006580352783 23.58908462524414 C 14.08720874786377 23.58908462524414 13.68917560577393 23.45233917236328 13.37897777557373 23.20393180847168 C 12.20744609832764 22.26734733581543 11.07795143127441 21.38719940185547 10.08142757415771 20.61082458496094 L 10.07633972167969 20.60677909851074 C 7.154701232910156 18.33045196533203 4.631757259368896 16.36463165283203 2.876350402832031 14.42812156677246 C 0.9140636324882507 12.26324939727783 6.484986079158261e-05 10.21065235137939 6.484986079158261e-05 7.968317985534668 C 6.484986079158261e-05 5.789694309234619 0.8171514272689819 3.779777526855469 2.30064868927002 2.308547258377075 C 3.801846981048584 0.8199219107627869 5.861708641052246 5.722045534639619e-05 8.101445198059082 5.722045534639619e-05 C 9.77544116973877 5.722045534639619e-05 11.30850028991699 0.4839260578155518 12.65791797637939 1.438109040260315 C 13.33893203735352 1.919752717018127 13.9562292098999 2.509215116500854 14.5000638961792 3.196784257888794 C 15.04412460327148 2.509215116500854 15.66119766235352 1.919748544692993 16.34243202209473 1.438109040260315 C 17.69185066223145 0.4839234948158264 19.22490882873535 5.722045534639619e-05 20.8989086151123 5.722045534639619e-05 C 23.13842582702637 5.722045534639619e-05 25.19851303100586 0.8199219703674316 26.69969940185547 2.308547258377075 C 28.18320083618164 3.779777526855469 29.00006484985352 5.789694309234619 29.00006484985352 7.968317985534668 C 29.00006484985352 10.21066188812256 28.0862922668457 12.26326084136963 26.1240062713623 14.42791271209717 C 24.36858940124512 16.36459922790527 21.84586334228516 18.33021926879883 18.92469787597656 20.60636329650879 C 17.9264087677002 21.38394927978516 16.79514122009277 22.26551628112793 15.62095546722412 23.2043285369873 C 15.3109827041626 23.45233154296875 14.91272830963135 23.58907699584961 14.50008964538574 23.58907699584961 Z M 8.101430892944336 1.553249597549438 C 6.341808319091797 1.553249597549438 4.725335597991943 2.195304155349731 3.549379110336304 3.361286878585815 C 2.355944156646729 4.544865131378174 1.698600769042969 6.180953979492188 1.698600769042969 7.968355178833008 C 1.698600769042969 9.854272842407227 2.465243101119995 11.54093551635742 4.184150695800781 13.43714237213135 C 5.845534324645996 15.27005577087402 8.316704750061035 17.19541549682617 11.17796993255615 19.4248161315918 L 11.18327903747559 19.42886161804199 C 12.18356418609619 20.20827293395996 13.31748104095459 21.09185981750488 14.49763965606689 22.03531837463379 C 15.68487930297852 21.09003639221191 16.8205680847168 20.20502853393555 17.82284164428711 19.42440795898438 C 20.68385887145996 17.19500732421875 23.15480613708496 15.27005290985107 24.81620597839355 13.43714809417725 C 26.5348949432373 11.54091548919678 27.3015308380127 9.854253768920898 27.3015308380127 7.968361854553223 C 27.3015308380127 6.180961132049561 26.64418983459473 4.544866561889648 25.45075798034668 3.361293315887451 C 24.27502059936523 2.195316314697266 22.65832901000977 1.553256392478943 20.89892959594727 1.553256392478943 C 19.60991287231445 1.553256392478943 18.42643356323242 1.927890300750732 17.38145446777344 2.666640043258667 C 16.4502010345459 3.325287103652954 15.80149173736572 4.157895565032959 15.42115592956543 4.740480422973633 C 15.2255687713623 5.040066719055176 14.88129997253418 5.218887805938721 14.50008296966553 5.218887805938721 C 14.11886692047119 5.218887805938721 13.77459621429443 5.040066242218018 13.57900905609131 4.740480422973633 C 13.19889640808105 4.157895565032959 12.5501823425293 3.325286626815796 11.6187105178833 2.666639804840088 C 10.57373523712158 1.927891612052917 9.390253067016602 1.553256154060364 8.101456642150879 1.553256154060364 Z M 8.101430892944336 1.553249597549438">
							</path>
						</svg></a>
						<a data-toggle="collapse" data-parent="#accordion" href="#cart">
						<img id="shopping-bag" src="{{asset('img/web/shopping-bag.png')}}" srcset="{{asset('img/web/shopping-bag.png')}} 1x, {{asset('img/web/shopping-bag@2x.png')}} 2x"></a>
						
					
					<div id="selector" class="panel-collapse collapse">
						<a href="/shop/withtag/category/Phones & Accessories"><li> Phones & Accessories </li></a>
						<a href="/shop/withtag/category/Electronics and Appliances"><li> Electronics and Appliances </li></a>
						<a href="/shop/withtag/category/Clothing"><li> Clothing </li></a>
						<a href="/shop/withtag/category/Food"><li> Food </li></a>
						<a href="/shop/withtag/category/Automobile"><li> Automobile </li></a>
						<a href="/shop/withtag/category/Home Furnishings"><li> Home Furnishings </li></a>
						<a href="/shop/withtag/category/Computer & Laptops"><li> Computer & Laptops </li></a>
					</div>	

					<div id="profile" class="panel-collapse collapse">
						@if(isset($userData))
							<p><br>&nbsp &nbsp <span id="tz"></span>, {{$userData->username}}</p>
							<ul>
								<a href="/profile"><li><img src="{{asset('img/web/login.png')}}" srcset="{{asset('img/web/login.png')}} 1x, {{asset('img/web/login@2x.png')}}"> &nbsp &nbsp My Profile </li></a>
								<a href="/invite"><li><img src="{{asset('img/web/invite.png')}}" srcset="{{asset('img/web/invite.png')}} 1x, {{asset('img/web/invite@2x.png')}}"> &nbsp &nbsp Invite/Refer </li></a>
								<a href="/reward"><li><img src="{{asset('img/web/badge.png')}}" srcset="{{asset('img/web/badge.png')}} 1x, {{asset('img/web/badge@2x.png')}}"> &nbsp &nbsp Rewards </li></a>
								<a href="/order"><li><img src="{{asset('img/web/product.png')}}" srcset="{{asset('img/web/product.png')}} 1x, {{asset('img/web/product@2x.png')}}"> &nbsp &nbsp Orders </li></a>
								<a href="/logout"><li><i class="fa fa-sign-out" id="mob-elo4"></i> &nbsp &nbsp &nbsp Sign out</li></a>
								@if($userData->type=='admin')
								<a href="/DashBoard"><li><i class="fa fa-bar-chart" id="mob-elo4"></i> &nbsp &nbsp Dashboard</li></a>
								<a href="/addDetails"><li><i class="fa fa-plus" id="mob-elo4"></i> &nbsp &nbsp &nbsp Add Product</li></a>@endif
								<a href="/SupplierReg"><li><i class="fa fa-truck" id="mob-elo4"></i> &nbsp &nbsp Become Supplier</li></a>
							</ul>
						@else
							<p><br>&nbsp &nbsp  Hi. Guest</p>
							<ul>
								<a href="/login"><li><img src="{{asset('img/web/login.png')}}" srcset="{{asset('img/web/login.png')}} 1x, {{asset('img/web/login@2x.png')}}"> &nbsp &nbsp Login</li></a>
								<a href="/invite"><li><img src="{{asset('img/web/invite.png')}}" srcset="{{asset('img/web/invite.png')}} 1x, {{asset('img/web/invite@2x.png')}}"> &nbsp &nbsp Invite/Refer </li></a>
								<a href="/reward"><li><img src="{{asset('img/web/badge.png')}}" srcset="{{asset('img/web/badge.png')}} 1x, {{asset('img/web/badge@2x.png')}}"> &nbsp &nbsp Rewards </li></a>
								<a href="/order"><li><img src="{{asset('img/web/product.png')}}" srcset="{{asset('img/web/product.png')}} 1x, {{asset('img/web/product@2x.png')}}"> &nbsp &nbsp Orders</li></a>
								<a href="/SupplierReg"><li><i class="fa fa-truck" id="mob-elo4"></i> &nbsp &nbsp Become Supplier</li></a>
								<a href="/reg"><li><i class="fa fa-sign-out" id="mob-elo4"></i> &nbsp &nbsp New Account</li></a>
							</ul>
						@endif
					</div>
					<div id="wishlist" class="panel-collapse collapse">
						@if(isset($WishData))
							@if($WishData != null)
								<center><h5><a href="/wishlist"><i class="fa fa-heart"></i> WishList <small>({{count($WishData)}} Products)</small></a></h5></center>
								<div class="palism">
									@foreach($WishData as $dt)
										<a href="/product-details/{{$dt->prod_id}}">
										<div id="cartNames">
											@foreach($imgData as $img)
												@if($img->prod_id == $dt->prod_id)
													<img src="{{asset('img/shop/'.$img->image1.'')}}" class="img-min-box">
												@endif
											@endforeach
											{{$dt->prod_name}}<br>${{$dt->prod_MRP_price}}
										</div></a>
									@endforeach
								</div>
								<p><br><small><a href="/wishlist">See Wishlist <i class="fa fa-share"></i></a></small></p>
							@else
								<h5><i class="fa fa-heart"></i> WishList (No Product)</h5><hr>
							@endif
						@else
							<center><h5><i class="fa fa-heart"></i> WishList</h5><hr> Please <a href="/login">Login</a> first.</center>
						@endif
					</div>
					
					<div id="cart" class="panel-collapse collapse">
						@if(isset($userData))
							@if($CartData != null)
								<center><h5><a href="/ProductCart"><i class="fa fa-shopping-cart"></i> Cart <small>({{count($CartData)}} Products)</small></a></h5></center>
								<div class="palism">
									@foreach($CartData as $dt)
										<a href="/product-details/{{$dt->prod_id}}">
										<div id="cartNames">
											@foreach($imgData as $img)
												@if($img->prod_id == $dt->prod_id)
													<img src="{{asset('img/shop/'.$img->image1.'')}}" class="img-min-box">
												@endif
											@endforeach
											{{$dt->prod_name}}<br>${{$dt->prod_MRP_price}}
										</div></a>
									@endforeach
								</div>
								<p><br><small><a href="/ProductCart">See Cart <i class="fa fa-share"></i></a></small></p>
							@else
								<center><h5><i class="fa fa-shopping-cart"></i> Cart (No Product)</h5></center><hr>
							@endif
						@else
							<center><h5><i class="fa fa-shopping-cart"></i> Cart</h5><hr> Please <a href="/login">Login</a> first.</center>
						@endif
					</div>

				</div>  <!-- / Accordion -->		
				</div>  <!-- /Group-12 -->
				</div>

				<div id="mob-view">
					<div id="Group_12">
					<div class="row">
						<div id="Group_1">
							<div id="cartgo">
								<span><a href="/" class="logo-Reck">CARTGO</a></span>
							</div>
							<small class="sub-data">We serve your desire.</small>
						</div>
					</div>

							<div class="panel-group" id="accordion">

								<div class="mob-menu">
											<!-- Account Pic -->
								<a data-toggle="collapse" data-parent="#accordion" href="#prof">
								<img id="user" src="{{asset('img/web/user.png')}}" srcset="{{asset('img/web/user.png')}} 1x, {{asset('img/web/user@2x.png')}} 2x"></a>
								
								<a data-toggle="collapse" data-parent="#accordion" href="#wilist" >
								<svg class="heart" viewBox="0 0 29 23.589">
									<path id="heart" d="M 14.50006580352783 23.58908462524414 C 14.08720874786377 23.58908462524414 13.68917560577393 23.45233917236328 13.37897777557373 23.20393180847168 C 12.20744609832764 22.26734733581543 11.07795143127441 21.38719940185547 10.08142757415771 20.61082458496094 L 10.07633972167969 20.60677909851074 C 7.154701232910156 18.33045196533203 4.631757259368896 16.36463165283203 2.876350402832031 14.42812156677246 C 0.9140636324882507 12.26324939727783 6.484986079158261e-05 10.21065235137939 6.484986079158261e-05 7.968317985534668 C 6.484986079158261e-05 5.789694309234619 0.8171514272689819 3.779777526855469 2.30064868927002 2.308547258377075 C 3.801846981048584 0.8199219107627869 5.861708641052246 5.722045534639619e-05 8.101445198059082 5.722045534639619e-05 C 9.77544116973877 5.722045534639619e-05 11.30850028991699 0.4839260578155518 12.65791797637939 1.438109040260315 C 13.33893203735352 1.919752717018127 13.9562292098999 2.509215116500854 14.5000638961792 3.196784257888794 C 15.04412460327148 2.509215116500854 15.66119766235352 1.919748544692993 16.34243202209473 1.438109040260315 C 17.69185066223145 0.4839234948158264 19.22490882873535 5.722045534639619e-05 20.8989086151123 5.722045534639619e-05 C 23.13842582702637 5.722045534639619e-05 25.19851303100586 0.8199219703674316 26.69969940185547 2.308547258377075 C 28.18320083618164 3.779777526855469 29.00006484985352 5.789694309234619 29.00006484985352 7.968317985534668 C 29.00006484985352 10.21066188812256 28.0862922668457 12.26326084136963 26.1240062713623 14.42791271209717 C 24.36858940124512 16.36459922790527 21.84586334228516 18.33021926879883 18.92469787597656 20.60636329650879 C 17.9264087677002 21.38394927978516 16.79514122009277 22.26551628112793 15.62095546722412 23.2043285369873 C 15.3109827041626 23.45233154296875 14.91272830963135 23.58907699584961 14.50008964538574 23.58907699584961 Z M 8.101430892944336 1.553249597549438 C 6.341808319091797 1.553249597549438 4.725335597991943 2.195304155349731 3.549379110336304 3.361286878585815 C 2.355944156646729 4.544865131378174 1.698600769042969 6.180953979492188 1.698600769042969 7.968355178833008 C 1.698600769042969 9.854272842407227 2.465243101119995 11.54093551635742 4.184150695800781 13.43714237213135 C 5.845534324645996 15.27005577087402 8.316704750061035 17.19541549682617 11.17796993255615 19.4248161315918 L 11.18327903747559 19.42886161804199 C 12.18356418609619 20.20827293395996 13.31748104095459 21.09185981750488 14.49763965606689 22.03531837463379 C 15.68487930297852 21.09003639221191 16.8205680847168 20.20502853393555 17.82284164428711 19.42440795898438 C 20.68385887145996 17.19500732421875 23.15480613708496 15.27005290985107 24.81620597839355 13.43714809417725 C 26.5348949432373 11.54091548919678 27.3015308380127 9.854253768920898 27.3015308380127 7.968361854553223 C 27.3015308380127 6.180961132049561 26.64418983459473 4.544866561889648 25.45075798034668 3.361293315887451 C 24.27502059936523 2.195316314697266 22.65832901000977 1.553256392478943 20.89892959594727 1.553256392478943 C 19.60991287231445 1.553256392478943 18.42643356323242 1.927890300750732 17.38145446777344 2.666640043258667 C 16.4502010345459 3.325287103652954 15.80149173736572 4.157895565032959 15.42115592956543 4.740480422973633 C 15.2255687713623 5.040066719055176 14.88129997253418 5.218887805938721 14.50008296966553 5.218887805938721 C 14.11886692047119 5.218887805938721 13.77459621429443 5.040066242218018 13.57900905609131 4.740480422973633 C 13.19889640808105 4.157895565032959 12.5501823425293 3.325286626815796 11.6187105178833 2.666639804840088 C 10.57373523712158 1.927891612052917 9.390253067016602 1.553256154060364 8.101456642150879 1.553256154060364 Z M 8.101430892944336 1.553249597549438">
									</path>
								</svg></a>
								<a data-toggle="collapse" data-parent="#accordion" href="#carty">
								<img id="shopping-bag" src="{{asset('img/web/shopping-bag.png')}}" srcset="{{asset('img/web/shopping-bag.png')}} 1x, {{asset('img/web/shopping-bag@2x.png')}} 2x"></a>
								
								<a data-toggle="collapse" data-parent="#accordion" href="#seletor"><i class="fa fa-search" id="mob-elo"></i></a>
								</div>		
										<!-- Mob Menu -->

						<div id="seletor" class="panel-collapse collapse"><center>
							<a href="/shop/withtag/category/Category 1"> Phones & Accessories </a><br>
							<a href="/shop/withtag/category/Category 2"> Electronics and Appliances </a><br>
							<a href="/shop/withtag/category/Category 3"> Clothing </a><br>
							<a href="/shop/withtag/category/Category 3"> Food </a><br>
							<a href="/shop/withtag/category/Category 4"> Automobile </a></center>
							<a href="/shop/withtag/category/Category 4"> Home Furnishings </a></center>
							<a href="/shop/withtag/category/Category 4"> Computer & Laptops </a></center>
						</div>	

						<div id="prof" class="panel-collapse collapse">
							@if(isset($userData))
								<small>welcome {{$userData->username}} !</small><h4><span id="tz"></span></h4>
								<ul>
									<li><a href="/profile">Profile <i class="fa fa-child"></i></a></li>
									<li><a href="/ProductCart">Cart <i class="fa fa-shopping-cart"></i></a></li>
									<li><a href="/wishlist">Wishlist <i class="fa fa-bookmark"></i></a></li>
									<li><a href="/logout">Sign out <i class="fa fa-sign-out"></i></a></li>
									@if($userData->type=='admin')
									<li><a href="/DashBoard">Dashboard <i class="fa fa-dashboard"></i></a></li>
									<li><a href="/addDetails">Add Product <i class="fa fa-plus"></i></a></li>
									<li><a href="">Admin Home <i class="fa fa-bank"></i></a></li>@endif
									<li><a href="/SupplierReg">Become a Supplier <i class="fa fa-truck"></i></a></li>
								</ul>
							@else
								<small>welcome User !</small><h4><span id="tz"></span></h4>
								<ul>
									<li><a href="/login">Login to Account <i class="fa fa-child"></i></a></li>
									<li><a href="/SupplierReg">Become a Supplier <i class="fa fa-truck"></i></a></li>
									<li><a href="/reg">Create New Account <i class="fa fa-sign-out"></i></a></li>
								</ul>
							@endif
						</div>

						<a href="/wishlist">
						<div id="wilist" class="panel-collapse collapse">
							@if(isset($WishData))
								@if($WishData != null)
									<h4><a href="/wishlist"><i class="fa fa-heart"></i> WishList <small>({{count($WishData)}} Products)</small></a></h4><hr>
									@foreach($WishData as $dt)
										<p id="cartNames">{{$dt->prod_name}}</p>
									@endforeach
								@else
									<h4><i class="fa fa-heart"></i> WishList (No Product)</h4><hr>
								@endif
							@else
								<a href="/login"><i class="fa fa-heart"></i> Login to Account </a>
							@endif
						</div></a>
						<a href="/ProductCart">
						<div id="carty" class="panel-collapse collapse">
							@if(isset($CartData))
								@if($CartData != null)
									<h4><a href="/ProductCart"><i class="fa fa-shopping-cart"></i> Cart <small>({{count($CartData)}} Products)</small></a></h4><hr>
									@foreach($CartData as $dt)
										<p id="cartNames">{{$dt->prod_name}}</p>
									@endforeach
								@else
									<h4><i class="fa fa-shopping-cart"></i> Cart (No Product)</h4><hr>
								@endif
							@else
								<a href="/login"><i class="fa fa-heart"></i> Login to Account </a>
							@endif
						</div></a>
					</div>  <!-- / Accordion -->		
				</div>
				</div>
			</div>  	<!-- /Navitems -->
        @endsection

        @section('footer')
        <div id="Footer">
			<div id="desk-footer">
					<svg class="Base" viewBox="0 0 1920 200">
					<path id="Base" d="M 0 0 L 1920 0 L 1920 200 L 0 200 L 0 0 Z">
					</path>
				</svg>
				<div id="Group_29">
					<div id="HELP">
						<span>HELP</span>
					</div>

					<div id="Payments_Shipping_Cancellation">
						<span>
							<a href="" title="Cancellation & Returns">Cancellation & Returns<br/></a>
							<a href="/dispute" title="Submit a Dispute">Submit a Dispute<br/></a>
							<a href="/payments" title="Payments">Payments<br/></a>
							<a href="" title="Shipping">Shipping<br/></a>
							<a href="/FAQ" title="Frequently Asked Question">FAQ</a>
						</span><br>
					</div>		<!-- Payments_Shipping_Cancellation -->
				</div>		<!-- Group_29 -->
				<div id="Group_30">
					<div id="POLICY">
						<span>POLICY</span>
					</div>
					<div id="Return_Policy_Warranty_Policy_">
						<span>
							<a href="" title="Warranty Policy">Warranty Policy<br/></a>
							<a href="" title="Terms Of Use">Terms Of Use<br/></a>
							<a href="" title="Return Policy">Return Policy<br/></a>
							<a href="" title="Sitemap">Sitemap<br/></a>
							<a href="" title="Privacy">Privacy</a>
						</span>
					</div>		<!-- Return_Policy_Warranty_Policy_ -->
				</div>		<!-- Group_30 -->
				<div id="Group_28">
					<div id="ABOUT">
						<span>ABOUT</span>
					</div>
					<div id="Contact_Us_Who_We_Are__Careers">
						<span>
							<a href="/SupplierReg" title="Become A Supplier">Become A Supplier<br/></a>
							<a href="" title="Investor Relations">Investor Relations<br/></a>
							<a href="/SupplierReg" title="Affiliate Program">Affiliate Program<br/></a>
							<a href="/contact" title="Contact Us">Contact Us<br/></a>
							<a href="" title="Careers">Careers</a>
						</span>
					</div>		<!-- Contact_Us_Who_We_Are__Careers -->
					
				</div>	<!-- Group_28 -->

				<div class="footer-mid-form">
					<div id="Group_35">
						<b>GET EXCLUSIVE OFFERS AND UPDATES</b><form method="post">
						<input type="text" name="tygo" class="tygo" placeholder="Enter email address here..." required>
						<input type="Submit" name="" value="SIGN UP"></form>
					</div>	

					<div id="Group_141">
						<div><p><P>PAYMENT OPTIONS</P></p></div>
						<a href="/payments">
						<tr>
							<td><div class="back-it"><img src="{{asset('img/web/Bkash_Vector_Logo_Converted-01.png')}}" srcset="{{asset('img/web/Bkash_Vector_Logo_Converted-01.png')}} 1x, {{asset('img/web/Bkash_Vector_Logo_Converted-01@2x.png')}} 2x"></div></td>
							<td><div class="back-it"><img src="{{asset('img/web/Mastercard-01.png')}}" srcset="{{asset('img/web/Mastercard-01.png')}} 1x, {{asset('img/web/Mastercard-01@2x.png')}} 2x"></div></td>
							<td><div class="back-it"><img src="{{asset('img/web/ID1.png')}}" srcset="{{asset('img/web/ID1.png')}} 1x, {{asset('img/web/ID1@2x.png')}} 2x"></div></td>
							<td><div class="back-it"><img src="{{asset('img/web/ID22.png')}}" srcset="{{asset('img/web/ID22.png')}} 1x, {{asset('img/web/ID22@2x.png')}} 2x"></div></td>
							<td><div class="back-it"><img src="{{asset('img/web/if-union-pay-2593673_86618.png')}}" srcset="{{asset('img/web/if-union-pay-2593673_86618.png')}} 1x, {{asset('img/web/if-union-pay-2593673_86618@2x.png')}} 2x"></div></td>
							<td><div class="back-it"><img src="{{asset('img/web/transparent-01.png')}}" srcset="{{asset('img/web/transparent-01.png')}} 1x, {{asset('img/web/transparent-01@2x.png')}} 2x"></div></td>
							<td><div class="back-it"><center><span>CASH ON<br/>DELIVERY</span></center></div></td>
							<td><div class="back-it"><center><p>POS</p></center></div></td>
						</tr></a>
					</div>
				</div>

				<div class="footer-social">
					<tr>
						<td><a href=""><img class="lohito" src="{{asset('img/web/instagram.png')}}" srcset="{{asset('img/web/instagram.png')}} 1x, {{asset('instagram@2x.png')}} 2x"></a></td>
						<td><a href=""><img class="lohito" src="{{asset('img/web/facebook.png')}}" srcset="{{asset('img/web/facebook.png')}} 1x, {{asset('facebook@2x.png')}} 2x"></a></td>
						<td><a href=""><img class="lohito" src="{{asset('img/web/youtube.png')}}" srcset="{{asset('img/web/youtube.png')}} 1x, {{asset('youtube@2x.png')}} 2x"></a></td>
						<td><a href=""><img class="lohito" src="{{asset('img/web/whatsapp.png')}}" srcset="{{asset('img/web/whatsapp.png')}} 1x, {{asset('whatsapp@2x.png')}} 2x"></a></td>
					</tr>
					<div id="Group_147">
						<svg class="Rectangle_1099">
							<rect id="Rectangle_1099" rx="0" ry="0" x="0" y="0" width="205" height="89">
							</rect>
						</svg>
						<div id="Later_this_space_can_be_utilis">
							<span>Android / IOS QR</span>
						</div>
					</div>
				</div>
				
			</div>

			<div id="mob-footer">
				
				<svg class="Base" viewBox="0 0 1920 200">
					<path id="Base" d="M 0 0 L 1920 0 L 1920 200 L 0 200 L 0 0 Z">
					</path>
				</svg>

				<div class="mob-footer-content">
					<div class="row">
					<div class="col-sm-4">
						<div id="Group_35">
							<div id="Symbol_11__1">
								<svg class="Rectangle_392">
									<rect id="Rectangle_392" rx="0" ry="0" x="0" y="0" width="16" height="16">
									</rect>
								</svg>
								<svg class="Path_1" viewBox="80 0 8.356 16">
									<path id="Path_1" d="M 85.42222595214844 16 L 85.42222595214844 8.711111068725586 L 87.91111755371094 8.711111068725586 L 88.26667785644531 5.8666672706604 L 85.42222595214844 5.8666672706604 L 85.42222595214844 4.088889122009277 C 85.42222595214844 3.288889169692993 85.68890380859375 2.666667222976685 86.84445190429688 2.666667222976685 L 88.35556030273438 2.666667222976685 L 88.35556030273438 0.08888889104127884 C 88 0.08888889104127884 87.11111450195313 0 86.13333129882813 0 C 84 0 82.4888916015625 1.333333373069763 82.4888916015625 3.733333110809326 L 82.4888916015625 5.866666793823242 L 80 5.866666793823242 L 80 8.711111068725586 L 82.4888916015625 8.711111068725586 L 82.4888916015625 16 L 85.42222595214844 16 Z">
									</path>
								</svg>
							</div>
							<div id="Symbol_12__1">
								<svg class="Rectangle_393">
									<rect id="Rectangle_393" rx="0" ry="0" x="0" y="0" width="16" height="16">
									</rect>
								</svg>
								<svg class="Path_2" viewBox="38 2 16 12.978">
									<path id="Path_2" d="M 43.06666564941406 14.97777557373047 C 49.11111068725586 14.97777557373047 52.39999771118164 9.999998092651367 52.39999771118164 5.644444465637207 C 52.39999771118164 5.466666698455811 52.39999771118164 5.377777576446533 52.39999771118164 5.199999809265137 C 53.02222061157227 4.755555629730225 53.5555534362793 4.133333683013916 53.99999618530273 3.51111102104187 C 53.37777328491211 3.777777910232544 52.75555038452148 3.955555438995361 52.13333129882813 4.044444561004639 C 52.84444427490234 3.599999904632568 53.28888702392578 2.977777719497681 53.5555534362793 2.266666889190674 C 52.93333053588867 2.622222185134888 52.22222137451172 2.888888597488403 51.5111083984375 3.066666603088379 C 50.88888549804688 2.355555534362793 49.99999618530273 2 49.11111068725586 2 C 47.33333206176758 2 45.82221984863281 3.511110782623291 45.82221984863281 5.288888454437256 C 45.82221984863281 5.555554866790771 45.82221984863281 5.822221279144287 45.91110610961914 5.999999523162842 C 43.15555572509766 5.822221755981445 40.75555419921875 4.57777738571167 39.15555572509766 2.53333306312561 C 38.88888931274414 2.977777481079102 38.71110916137695 3.599999666213989 38.71110916137695 4.222221851348877 C 38.71110916137695 5.377777576446533 39.33333206176758 6.355555057525635 40.13333129882813 6.977777004241943 C 39.59999847412109 6.977777004241943 39.06666564941406 6.799999237060547 38.62221908569336 6.533332824707031 C 38.62221908569336 6.533332824707031 38.62221908569336 6.533332824707031 38.62221908569336 6.533332824707031 C 38.62221908569336 8.133332252502441 39.77777481079102 9.46666431427002 41.28888702392578 9.733331680297852 C 41.02222061157227 9.822220802307129 40.75555419921875 9.822220802307129 40.39999771118164 9.822220802307129 C 40.22221755981445 9.822220802307129 39.95555114746094 9.822220802307129 39.77777481079102 9.733331680297852 C 40.22221755981445 11.06666469573975 41.37777328491211 11.95555305480957 42.88888549804688 12.04444122314453 C 41.73332977294922 12.93333053588867 40.31110763549805 13.46666431427002 38.79999923706055 13.46666431427002 C 38.53333282470703 13.46666431427002 38.26666641235352 13.46666431427002 37.99999618530273 13.37777423858643 C 39.42222213745117 14.44444179534912 41.19999694824219 14.97777557373047 43.06666564941406 14.97777557373047">
									</path>
								</svg>
							</div>
							<div id="Symbol_13__1">
								<svg class="Path_3" viewBox="0 0 16 16">
									<path id="Path_3" d="M 8 1.422222256660461 C 10.13333320617676 1.422222256660461 10.39999961853027 1.422222256660461 11.20000076293945 1.51111114025116 C 12 1.51111114025116 12.44444465637207 1.688889026641846 12.71111106872559 1.777777791023254 C 13.06666660308838 1.955555558204651 13.33333301544189 2.133333444595337 13.60000038146973 2.400000095367432 C 13.86666679382324 2.666666746139526 14.0444450378418 2.9333336353302 14.22222232818604 3.288888931274414 C 14.31111145019531 3.555555582046509 14.48888874053955 4 14.48888874053955 4.800000190734863 C 14.48888874053955 5.600000381469727 14.57777786254883 5.8666672706604 14.57777786254883 8 C 14.57777786254883 10.13333320617676 14.57777786254883 10.39999961853027 14.48888874053955 11.20000076293945 C 14.48888874053955 12 14.31110954284668 12.44444465637207 14.22222137451172 12.71111106872559 C 14.04444408416748 13.06666660308838 13.86666584014893 13.33333301544189 13.59999942779541 13.60000038146973 C 13.33333301544189 13.86666679382324 13.06666564941406 14.0444450378418 12.71111011505127 14.22222232818604 C 12.44444370269775 14.31111145019531 11.99999904632568 14.48888874053955 11.19999980926514 14.48888874053955 C 10.39999961853027 14.48888874053955 10.13333320617676 14.57777786254883 8 14.57777786254883 C 5.866666793823242 14.57777786254883 5.600000381469727 14.57777786254883 4.800000190734863 14.48888874053955 C 4 14.48888874053955 3.555555582046509 14.31110954284668 3.288888931274414 14.22222137451172 C 2.933333396911621 14.04444408416748 2.666666746139526 13.86666584014893 2.400000095367432 13.59999942779541 C 2.133333444595337 13.33333301544189 1.955555558204651 13.06666564941406 1.777777791023254 12.71111011505127 C 1.688888907432556 12.44444370269775 1.51111114025116 11.99999904632568 1.51111114025116 11.19999980926514 C 1.51111114025116 10.39999961853027 1.422222256660461 10.13333320617676 1.422222256660461 8 C 1.422222256660461 5.866666793823242 1.422222256660461 5.600000381469727 1.51111114025116 4.800000190734863 C 1.51111114025116 4 1.688888907432556 3.555555582046509 1.777777791023254 3.288888931274414 C 1.955555558204651 2.933333396911621 2.133333444595337 2.666666746139526 2.400000095367432 2.400000095367432 C 2.666666746139526 2.04444432258606 2.933333396911621 1.866666555404663 3.288888931274414 1.777777791023254 C 3.555555582046509 1.688888907432556 4 1.51111114025116 4.800000190734863 1.51111114025116 C 5.600000381469727 1.422222256660461 5.866666793823242 1.422222256660461 8 1.422222256660461 M 8 0 C 5.866666793823242 0 5.511110782623291 0 4.711111545562744 0.08888889104127884 C 3.822222471237183 0.08888889104127884 3.288889169692993 0.2666666805744171 2.755555629730225 0.4444444477558136 C 2.222222328186035 0.6222222447395325 1.777777791023254 0.8888888955116272 1.333333373069763 1.333333373069763 C 0.8888888955116272 1.777777791023254 0.6222222447395325 2.222222328186035 0.4444444477558136 2.755555391311646 C 0.1777777820825577 3.288888931274414 0.08888889104127884 3.822222471237183 0.08888889104127884 4.711111545562744 C 0 5.511110782623291 0 5.866666793823242 0 8 C 0 10.13333320617676 0 10.48888874053955 0.08888889104127884 11.28888893127441 C 0.08888889104127884 12.17777729034424 0.2666666805744171 12.71111106872559 0.4444444477558136 13.24444389343262 C 0.6222222447395325 13.77777767181396 0.8888888955116272 14.22222232818604 1.333333373069763 14.66666698455811 C 1.777777791023254 15.11111164093018 2.222222328186035 15.37777709960938 2.755555391311646 15.55555534362793 C 3.288888692855835 15.7333345413208 3.822222471237183 15.91111087799072 4.711111545562744 15.91111087799072 C 5.511110782623291 16 5.866666793823242 16 8 16 C 10.13333320617676 16 10.48888874053955 16 11.28888893127441 15.91111087799072 C 12.17777729034424 15.91111087799072 12.71111106872559 15.73333263397217 13.24444389343262 15.55555534362793 C 13.77777767181396 15.37777709960938 14.22222232818604 15.11111164093018 14.66666698455811 14.66666698455811 C 15.11111164093018 14.22222232818604 15.37777709960938 13.77777767181396 15.55555534362793 13.24444389343262 C 15.7333345413208 12.71111011505127 15.91111087799072 12.17777729034424 15.91111087799072 11.28888893127441 C 15.91111087799072 10.39999961853027 16 10.13333320617676 16 8 C 16 5.866666793823242 16 5.511110782623291 15.91111087799072 4.711111545562744 C 15.91111087799072 3.822222471237183 15.73333263397217 3.288889169692993 15.55555534362793 2.755555629730225 C 15.37777709960938 2.222222328186035 15.11111164093018 1.777777791023254 14.66666698455811 1.333333492279053 C 14.22222232818604 0.8888890147209167 13.77777767181396 0.6222223043441772 13.24444389343262 0.4444445669651031 C 12.71111011505127 0.2666667997837067 12.17777729034424 0.0888889878988266 11.28888893127441 0.0888889878988266 C 10.48888874053955 0 10.13333320617676 0 8 0 M 8 3.911111116409302 C 5.688889026641846 3.911111116409302 3.911111116409302 5.688889026641846 3.911111116409302 8 C 3.911111116409302 10.31111145019531 5.777777671813965 12.08888912200928 8 12.08888912200928 C 10.31111145019531 12.08888912200928 12.08888912200928 10.22222232818604 12.08888912200928 8 C 12.08888912200928 5.777777671813965 10.31111145019531 3.911111116409302 8 3.911111116409302 M 8 10.66666698455811 C 6.488889217376709 10.66666698455811 5.333333492279053 9.511111259460449 5.333333492279053 8 C 5.333333492279053 6.488889217376709 6.488889217376709 5.333333492279053 8 5.333333492279053 C 9.511111259460449 5.333333492279053 10.66666698455811 6.488889217376709 10.66666698455811 8 C 10.66666698455811 9.511111259460449 9.511111259460449 10.66666698455811 8 10.66666698455811 M 12.26666736602783 2.755555391311646 C 11.73333358764648 2.755555391311646 11.28888893127441 3.200000047683716 11.28888893127441 3.733333110809326 C 11.28888893127441 4.266666412353516 11.73333358764648 4.711111068725586 12.26666736602783 4.711111068725586 C 12.80000019073486 4.711111068725586 13.24444484710693 4.266666412353516 13.24444484710693 3.733333110809326 C 13.24444389343262 3.200000047683716 12.80000019073486 2.755555391311646 12.26666736602783 2.755555391311646">
									</path>
								</svg>
							</div>
							<div id="GET_EXCLUSIVE_OFFERS_AND_UPDAT">
								<span>GET EXCLUSIVE OFFERS AND UPDATES</span>
							</div>
							<div id="Group_24">
								<svg class="Rectangle_130">
									<rect id="Rectangle_130" rx="0" ry="0" x="0" y="0" width="216" height="22">
									</rect>
								</svg>
								<svg class="Rectangle_411">
									<rect id="Rectangle_411" rx="0" ry="0" x="0" y="0" width="56" height="22">
									</rect>
								</svg>
							</div>
							<div id="SIGN_UP">
								<span>SIGN UP</span>
							</div>
							<div id="Enter_email_address_here">
								<span>Enter email address here...</span>
							</div>
						</div>

					</div>

					<div class="col-sm-4">
						<div id="Payment_Method" class="Payment_Method">
							<svg class="Rectangle_419">
								<rect id="Rectangle_419" rx="0" ry="0" x="0" y="0" width="49" height="22">
								</rect>
							</svg>
							<svg class="Rectangle_418">
								<rect id="Rectangle_418" rx="0" ry="0" x="0" y="0" width="49" height="22">
								</rect>
							</svg>
							<svg class="Rectangle_417">
								<rect id="Rectangle_417" rx="0" ry="0" x="0" y="0" width="49" height="22">
								</rect>
							</svg>
							<svg class="Rectangle_432">
								<rect id="Rectangle_432" rx="0" ry="0" x="0" y="0" width="49" height="22">
								</rect>
							</svg>
							<svg class="Rectangle_431">
								<rect id="Rectangle_431" rx="0" ry="0" x="0" y="0" width="49" height="22">
								</rect>
							</svg>
							<div id="PAYMENT_OPTIONS">
								<span>PAYMENT OPTIONS</span>
							</div>
							<img id="ID1" src="img/web/ID1.png" srcset="img/web/ID1.png 1x, img/web/ID1@2x.png 2x">
							<img id="ID22" src="img/web/ID22.png" srcset="img/web/ID22.png 1x, img/web/ID22@2x.png 2x">
							<img id="if-union-pay-2593673_86618" src="img/web/if-union-pay-2593673_86618.png" srcset="img/web/if-union-pay-2593673_86618.png 1x, img/web/if-union-pay-2593673_86618@2x.png 2x">
							<img id="transparent-01" src="img/web/transparent-01.png" srcset="img/web/transparent-01.png 1x, img/web/transparent-01@2x.png 2x">
							<img id="Mastercard-01" src="img/web/Mastercard-01.png" srcset="img/web/Mastercard-01.png 1x, img/web/Mastercard-01@2x.png 2x">
							<img id="Bkash_Vector_Logo_Converted-01" src="img/web/Bkash_Vector_Logo_Converted-01.png" srcset="img/web/Bkash_Vector_Logo_Converted-01.png 1x, img/web/Bkash_Vector_Logo_Converted-01@2x.png 2x">
							<div id="CASH_ON_DELIVERY">
								<span>CASH ON<br/>DELIVERY</span>
							</div>
							<div id="POS">
								<span>POS</span>
							</div>
						</div>
					</div>
					</div> 			<!-- Row end -->

					<div class="row">
						<div class="col-sm-4">
							<div id="Group_29">
								<div id="HELP">
									<span>HELP</span>
								</div>
								<div id="Payments_Shipping_Cancellation">
									<span>
										Cancellation & Returns<br/>
										Submit a Dispute<br/>
										Payments<br/>
										Shipping<br/>
										FAQ
									</span><br>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div id="Group_30">
								<div id="POLICY">
									<span>POLICY</span>
								</div>
								<div id="Return_Policy_Warranty_Policy_">
									<span>
										Warranty Policy<br/>
										Terms Of Use<br/>
										Return Policy<br/>
										Sitemap<br/>
										Privacy
									</span>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div id="Group_28">
								<div id="ABOUT">
									<span>ABOUT</span>
								</div>
								<div id="Contact_Us_Who_We_Are__Careers">
									<span>
										Become A Supplier<br/>
										Investor Relations<br/>
										Affiliate Program<br/>
										Contact Us<br/>
										Careers
									</span>
								</div>	
							</div>			
						</div>

						<div class="col-sm-4">
							<div id="Group_37">
								<div id="Group_31">
									<div id="SOCIAL">
										<span>SOCIAL</span>
									</div>
								</div>
								<div id="Group_33">
									<div id="Facebook_Instagram_YouTube_Wha">
										<span>Facebook<br/>Instagram<br/>YouTube<br/>Whatsapp</span>
									</div>
									<div id="Group_32">
										<img id="youtube" src="img/web/youtube.png" srcset="img/web/youtube.png 1x, img/web/youtube@2x.png 2x">
										<img id="facebook" src="img/web/facebook.png" srcset="img/web/facebook.png 1x, img/web/facebook@2x.png 2x">
										<img id="instagram" src="img/web/instagram.png" srcset="img/web/instagram.png 1x, img/web/instagram@2x.png 2x">
										<img id="whatsapp" src="img/web/whatsapp.png" srcset="img/web/whatsapp.png 1x, img/web/whatsapp@2x.png 2x">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>				
				
			</div>

		</div>
        @endsection
		
		

		@section('footer-relate')
			<div id="Footer_prod">
					<div id="desk-footer">
							<svg class="Base" viewBox="0 0 1920 200">
							<path id="Base" d="M 0 0 L 1920 0 L 1920 200 L 0 200 L 0 0 Z">
							</path>
						</svg>
						<div id="Group_29">
							<div id="HELP">
								<span>HELP</span>
							</div>

							<div id="Payments_Shipping_Cancellation">
								<span>
									<a href="" title="Cancellation & Returns">Cancellation & Returns<br/></a>
									<a href="/dispute" title="Submit a Dispute">Submit a Dispute<br/></a>
									<a href="/payments" title="Payments">Payments<br/></a>
									<a href="" title="Shipping">Shipping<br/></a>
									<a href="/FAQ" title="Frequently Asked Question">FAQ</a>
								</span><br>
							</div>		<!-- Payments_Shipping_Cancellation -->
						</div>		<!-- Group_29 -->
						<div id="Group_30">
							<div id="POLICY">
								<span>POLICY</span>
							</div>
							<div id="Return_Policy_Warranty_Policy_">
								<span>
									<a href="" title="Warranty Policy">Warranty Policy<br/></a>
									<a href="" title="Terms Of Use">Terms Of Use<br/></a>
									<a href="" title="Return Policy">Return Policy<br/></a>
									<a href="" title="Sitemap">Sitemap<br/></a>
									<a href="" title="Privacy">Privacy</a>
								</span>
							</div>		<!-- Return_Policy_Warranty_Policy_ -->
						</div>		<!-- Group_30 -->
						<div id="Group_28">
							<div id="ABOUT">
								<span>ABOUT</span>
							</div>
							<div id="Contact_Us_Who_We_Are__Careers">
								<span>
									<a href="/SupplierReg" title="Become A Supplier">Become A Supplier<br/></a>
									<a href="" title="Investor Relations">Investor Relations<br/></a>
									<a href="/SupplierReg" title="Affiliate Program">Affiliate Program<br/></a>
									<a href="/contact" title="Contact Us">Contact Us<br/></a>
									<a href="" title="Careers">Careers</a>
								</span>
							</div>		<!-- Contact_Us_Who_We_Are__Careers -->
							
						</div>	<!-- Group_28 -->

						<div class="footer-mid-form">
							<div id="Group_35">
								<b>GET EXCLUSIVE OFFERS AND UPDATES</b><form method="post">
								<input type="text" name="tygo" class="tygo" placeholder="Enter email address here..." required>
								<input type="Submit" name="" value="SIGN UP"></form>
							</div>	

							<div id="Group_141">
								<div><p><P>PAYMENT OPTIONS</P></p></div>
								<a href="/payments">
								<tr>
									<td><div class="back-it"><img src="{{asset('img/web/Bkash_Vector_Logo_Converted-01.png')}}" srcset="{{asset('img/web/Bkash_Vector_Logo_Converted-01.png')}} 1x, {{asset('img/web/Bkash_Vector_Logo_Converted-01@2x.png')}} 2x"></div></td>
									<td><div class="back-it"><img src="{{asset('img/web/Mastercard-01.png')}}" srcset="{{asset('img/web/Mastercard-01.png')}} 1x, {{asset('img/web/Mastercard-01@2x.png')}} 2x"></div></td>
									<td><div class="back-it"><img src="{{asset('img/web/ID1.png')}}" srcset="{{asset('img/web/ID1.png')}} 1x, {{asset('img/web/ID1@2x.png')}} 2x"></div></td>
									<td><div class="back-it"><img src="{{asset('img/web/ID22.png')}}" srcset="{{asset('img/web/ID22.png')}} 1x, {{asset('img/web/ID22@2x.png')}} 2x"></div></td>
									<td><div class="back-it"><img src="{{asset('img/web/if-union-pay-2593673_86618.png')}}" srcset="{{asset('img/web/if-union-pay-2593673_86618.png')}} 1x, {{asset('img/web/if-union-pay-2593673_86618@2x.png')}} 2x"></div></td>
									<td><div class="back-it"><img src="{{asset('img/web/transparent-01.png')}}" srcset="{{asset('img/web/transparent-01.png')}} 1x, {{asset('img/web/transparent-01@2x.png')}} 2x"></div></td>
									<td><div class="back-it"><center><span>CASH ON<br/>DELIVERY</span></center></div></td>
									<td><div class="back-it"><center><p>POS</p></center></div></td>
								</tr></a>
							</div>
						</div>

						<div class="footer-social">
							<tr>
								<td><a href=""><img class="lohito" src="{{asset('img/web/instagram.png')}}" srcset="{{asset('img/web/instagram.png')}} 1x, {{asset('instagram@2x.png')}} 2x"></a></td>
								<td><a href=""><img class="lohito" src="{{asset('img/web/facebook.png')}}" srcset="{{asset('img/web/facebook.png')}} 1x, {{asset('facebook@2x.png')}} 2x"></a></td>
								<td><a href=""><img class="lohito" src="{{asset('img/web/youtube.png')}}" srcset="{{asset('img/web/youtube.png')}} 1x, {{asset('youtube@2x.png')}} 2x"></a></td>
								<td><a href=""><img class="lohito" src="{{asset('img/web/whatsapp.png')}}" srcset="{{asset('img/web/whatsapp.png')}} 1x, {{asset('whatsapp@2x.png')}} 2x"></a></td>
							</tr>
							<div id="Group_147">
								<svg class="Rectangle_1099">
									<rect id="Rectangle_1099" rx="0" ry="0" x="0" y="0" width="205" height="89">
									</rect>
								</svg>
								<div id="Later_this_space_can_be_utilis">
									<span>Android / IOS QR</span>
								</div>
							</div>
						</div>
						
					</div>

					<div id="mob-footer">
						
						<svg class="Base" viewBox="0 0 1920 200">
							<path id="Base" d="M 0 0 L 1920 0 L 1920 200 L 0 200 L 0 0 Z">
							</path>
						</svg>

						<div class="mob-footer-content">
							<div class="row">
							<div class="col-sm-4">
								<div id="Group_35">
									<div id="Symbol_11__1">
										<svg class="Rectangle_392">
											<rect id="Rectangle_392" rx="0" ry="0" x="0" y="0" width="16" height="16">
											</rect>
										</svg>
										<svg class="Path_1" viewBox="80 0 8.356 16">
											<path id="Path_1" d="M 85.42222595214844 16 L 85.42222595214844 8.711111068725586 L 87.91111755371094 8.711111068725586 L 88.26667785644531 5.8666672706604 L 85.42222595214844 5.8666672706604 L 85.42222595214844 4.088889122009277 C 85.42222595214844 3.288889169692993 85.68890380859375 2.666667222976685 86.84445190429688 2.666667222976685 L 88.35556030273438 2.666667222976685 L 88.35556030273438 0.08888889104127884 C 88 0.08888889104127884 87.11111450195313 0 86.13333129882813 0 C 84 0 82.4888916015625 1.333333373069763 82.4888916015625 3.733333110809326 L 82.4888916015625 5.866666793823242 L 80 5.866666793823242 L 80 8.711111068725586 L 82.4888916015625 8.711111068725586 L 82.4888916015625 16 L 85.42222595214844 16 Z">
											</path>
										</svg>
									</div>
									<div id="Symbol_12__1">
										<svg class="Rectangle_393">
											<rect id="Rectangle_393" rx="0" ry="0" x="0" y="0" width="16" height="16">
											</rect>
										</svg>
										<svg class="Path_2" viewBox="38 2 16 12.978">
											<path id="Path_2" d="M 43.06666564941406 14.97777557373047 C 49.11111068725586 14.97777557373047 52.39999771118164 9.999998092651367 52.39999771118164 5.644444465637207 C 52.39999771118164 5.466666698455811 52.39999771118164 5.377777576446533 52.39999771118164 5.199999809265137 C 53.02222061157227 4.755555629730225 53.5555534362793 4.133333683013916 53.99999618530273 3.51111102104187 C 53.37777328491211 3.777777910232544 52.75555038452148 3.955555438995361 52.13333129882813 4.044444561004639 C 52.84444427490234 3.599999904632568 53.28888702392578 2.977777719497681 53.5555534362793 2.266666889190674 C 52.93333053588867 2.622222185134888 52.22222137451172 2.888888597488403 51.5111083984375 3.066666603088379 C 50.88888549804688 2.355555534362793 49.99999618530273 2 49.11111068725586 2 C 47.33333206176758 2 45.82221984863281 3.511110782623291 45.82221984863281 5.288888454437256 C 45.82221984863281 5.555554866790771 45.82221984863281 5.822221279144287 45.91110610961914 5.999999523162842 C 43.15555572509766 5.822221755981445 40.75555419921875 4.57777738571167 39.15555572509766 2.53333306312561 C 38.88888931274414 2.977777481079102 38.71110916137695 3.599999666213989 38.71110916137695 4.222221851348877 C 38.71110916137695 5.377777576446533 39.33333206176758 6.355555057525635 40.13333129882813 6.977777004241943 C 39.59999847412109 6.977777004241943 39.06666564941406 6.799999237060547 38.62221908569336 6.533332824707031 C 38.62221908569336 6.533332824707031 38.62221908569336 6.533332824707031 38.62221908569336 6.533332824707031 C 38.62221908569336 8.133332252502441 39.77777481079102 9.46666431427002 41.28888702392578 9.733331680297852 C 41.02222061157227 9.822220802307129 40.75555419921875 9.822220802307129 40.39999771118164 9.822220802307129 C 40.22221755981445 9.822220802307129 39.95555114746094 9.822220802307129 39.77777481079102 9.733331680297852 C 40.22221755981445 11.06666469573975 41.37777328491211 11.95555305480957 42.88888549804688 12.04444122314453 C 41.73332977294922 12.93333053588867 40.31110763549805 13.46666431427002 38.79999923706055 13.46666431427002 C 38.53333282470703 13.46666431427002 38.26666641235352 13.46666431427002 37.99999618530273 13.37777423858643 C 39.42222213745117 14.44444179534912 41.19999694824219 14.97777557373047 43.06666564941406 14.97777557373047">
											</path>
										</svg>
									</div>
									<div id="Symbol_13__1">
										<svg class="Path_3" viewBox="0 0 16 16">
											<path id="Path_3" d="M 8 1.422222256660461 C 10.13333320617676 1.422222256660461 10.39999961853027 1.422222256660461 11.20000076293945 1.51111114025116 C 12 1.51111114025116 12.44444465637207 1.688889026641846 12.71111106872559 1.777777791023254 C 13.06666660308838 1.955555558204651 13.33333301544189 2.133333444595337 13.60000038146973 2.400000095367432 C 13.86666679382324 2.666666746139526 14.0444450378418 2.9333336353302 14.22222232818604 3.288888931274414 C 14.31111145019531 3.555555582046509 14.48888874053955 4 14.48888874053955 4.800000190734863 C 14.48888874053955 5.600000381469727 14.57777786254883 5.8666672706604 14.57777786254883 8 C 14.57777786254883 10.13333320617676 14.57777786254883 10.39999961853027 14.48888874053955 11.20000076293945 C 14.48888874053955 12 14.31110954284668 12.44444465637207 14.22222137451172 12.71111106872559 C 14.04444408416748 13.06666660308838 13.86666584014893 13.33333301544189 13.59999942779541 13.60000038146973 C 13.33333301544189 13.86666679382324 13.06666564941406 14.0444450378418 12.71111011505127 14.22222232818604 C 12.44444370269775 14.31111145019531 11.99999904632568 14.48888874053955 11.19999980926514 14.48888874053955 C 10.39999961853027 14.48888874053955 10.13333320617676 14.57777786254883 8 14.57777786254883 C 5.866666793823242 14.57777786254883 5.600000381469727 14.57777786254883 4.800000190734863 14.48888874053955 C 4 14.48888874053955 3.555555582046509 14.31110954284668 3.288888931274414 14.22222137451172 C 2.933333396911621 14.04444408416748 2.666666746139526 13.86666584014893 2.400000095367432 13.59999942779541 C 2.133333444595337 13.33333301544189 1.955555558204651 13.06666564941406 1.777777791023254 12.71111011505127 C 1.688888907432556 12.44444370269775 1.51111114025116 11.99999904632568 1.51111114025116 11.19999980926514 C 1.51111114025116 10.39999961853027 1.422222256660461 10.13333320617676 1.422222256660461 8 C 1.422222256660461 5.866666793823242 1.422222256660461 5.600000381469727 1.51111114025116 4.800000190734863 C 1.51111114025116 4 1.688888907432556 3.555555582046509 1.777777791023254 3.288888931274414 C 1.955555558204651 2.933333396911621 2.133333444595337 2.666666746139526 2.400000095367432 2.400000095367432 C 2.666666746139526 2.04444432258606 2.933333396911621 1.866666555404663 3.288888931274414 1.777777791023254 C 3.555555582046509 1.688888907432556 4 1.51111114025116 4.800000190734863 1.51111114025116 C 5.600000381469727 1.422222256660461 5.866666793823242 1.422222256660461 8 1.422222256660461 M 8 0 C 5.866666793823242 0 5.511110782623291 0 4.711111545562744 0.08888889104127884 C 3.822222471237183 0.08888889104127884 3.288889169692993 0.2666666805744171 2.755555629730225 0.4444444477558136 C 2.222222328186035 0.6222222447395325 1.777777791023254 0.8888888955116272 1.333333373069763 1.333333373069763 C 0.8888888955116272 1.777777791023254 0.6222222447395325 2.222222328186035 0.4444444477558136 2.755555391311646 C 0.1777777820825577 3.288888931274414 0.08888889104127884 3.822222471237183 0.08888889104127884 4.711111545562744 C 0 5.511110782623291 0 5.866666793823242 0 8 C 0 10.13333320617676 0 10.48888874053955 0.08888889104127884 11.28888893127441 C 0.08888889104127884 12.17777729034424 0.2666666805744171 12.71111106872559 0.4444444477558136 13.24444389343262 C 0.6222222447395325 13.77777767181396 0.8888888955116272 14.22222232818604 1.333333373069763 14.66666698455811 C 1.777777791023254 15.11111164093018 2.222222328186035 15.37777709960938 2.755555391311646 15.55555534362793 C 3.288888692855835 15.7333345413208 3.822222471237183 15.91111087799072 4.711111545562744 15.91111087799072 C 5.511110782623291 16 5.866666793823242 16 8 16 C 10.13333320617676 16 10.48888874053955 16 11.28888893127441 15.91111087799072 C 12.17777729034424 15.91111087799072 12.71111106872559 15.73333263397217 13.24444389343262 15.55555534362793 C 13.77777767181396 15.37777709960938 14.22222232818604 15.11111164093018 14.66666698455811 14.66666698455811 C 15.11111164093018 14.22222232818604 15.37777709960938 13.77777767181396 15.55555534362793 13.24444389343262 C 15.7333345413208 12.71111011505127 15.91111087799072 12.17777729034424 15.91111087799072 11.28888893127441 C 15.91111087799072 10.39999961853027 16 10.13333320617676 16 8 C 16 5.866666793823242 16 5.511110782623291 15.91111087799072 4.711111545562744 C 15.91111087799072 3.822222471237183 15.73333263397217 3.288889169692993 15.55555534362793 2.755555629730225 C 15.37777709960938 2.222222328186035 15.11111164093018 1.777777791023254 14.66666698455811 1.333333492279053 C 14.22222232818604 0.8888890147209167 13.77777767181396 0.6222223043441772 13.24444389343262 0.4444445669651031 C 12.71111011505127 0.2666667997837067 12.17777729034424 0.0888889878988266 11.28888893127441 0.0888889878988266 C 10.48888874053955 0 10.13333320617676 0 8 0 M 8 3.911111116409302 C 5.688889026641846 3.911111116409302 3.911111116409302 5.688889026641846 3.911111116409302 8 C 3.911111116409302 10.31111145019531 5.777777671813965 12.08888912200928 8 12.08888912200928 C 10.31111145019531 12.08888912200928 12.08888912200928 10.22222232818604 12.08888912200928 8 C 12.08888912200928 5.777777671813965 10.31111145019531 3.911111116409302 8 3.911111116409302 M 8 10.66666698455811 C 6.488889217376709 10.66666698455811 5.333333492279053 9.511111259460449 5.333333492279053 8 C 5.333333492279053 6.488889217376709 6.488889217376709 5.333333492279053 8 5.333333492279053 C 9.511111259460449 5.333333492279053 10.66666698455811 6.488889217376709 10.66666698455811 8 C 10.66666698455811 9.511111259460449 9.511111259460449 10.66666698455811 8 10.66666698455811 M 12.26666736602783 2.755555391311646 C 11.73333358764648 2.755555391311646 11.28888893127441 3.200000047683716 11.28888893127441 3.733333110809326 C 11.28888893127441 4.266666412353516 11.73333358764648 4.711111068725586 12.26666736602783 4.711111068725586 C 12.80000019073486 4.711111068725586 13.24444484710693 4.266666412353516 13.24444484710693 3.733333110809326 C 13.24444389343262 3.200000047683716 12.80000019073486 2.755555391311646 12.26666736602783 2.755555391311646">
											</path>
										</svg>
									</div>
									<div id="GET_EXCLUSIVE_OFFERS_AND_UPDAT">
										<span>GET EXCLUSIVE OFFERS AND UPDATES</span>
									</div>
									<div id="Group_24">
										<svg class="Rectangle_130">
											<rect id="Rectangle_130" rx="0" ry="0" x="0" y="0" width="216" height="22">
											</rect>
										</svg>
										<svg class="Rectangle_411">
											<rect id="Rectangle_411" rx="0" ry="0" x="0" y="0" width="56" height="22">
											</rect>
										</svg>
									</div>
									<div id="SIGN_UP">
										<span>SIGN UP</span>
									</div>
									<div id="Enter_email_address_here">
										<span>Enter email address here...</span>
									</div>
								</div>

							</div>

							<div class="col-sm-4">
								<div id="Payment_Method" class="Payment_Method">
									<svg class="Rectangle_419">
										<rect id="Rectangle_419" rx="0" ry="0" x="0" y="0" width="49" height="22">
										</rect>
									</svg>
									<svg class="Rectangle_418">
										<rect id="Rectangle_418" rx="0" ry="0" x="0" y="0" width="49" height="22">
										</rect>
									</svg>
									<svg class="Rectangle_417">
										<rect id="Rectangle_417" rx="0" ry="0" x="0" y="0" width="49" height="22">
										</rect>
									</svg>
									<svg class="Rectangle_432">
										<rect id="Rectangle_432" rx="0" ry="0" x="0" y="0" width="49" height="22">
										</rect>
									</svg>
									<svg class="Rectangle_431">
										<rect id="Rectangle_431" rx="0" ry="0" x="0" y="0" width="49" height="22">
										</rect>
									</svg>
									<div id="PAYMENT_OPTIONS">
										<span>PAYMENT OPTIONS</span>
									</div>
									<img id="ID1" src="img/web/ID1.png" srcset="img/web/ID1.png 1x, img/web/ID1@2x.png 2x">
									<img id="ID22" src="img/web/ID22.png" srcset="img/web/ID22.png 1x, img/web/ID22@2x.png 2x">
									<img id="if-union-pay-2593673_86618" src="img/web/if-union-pay-2593673_86618.png" srcset="img/web/if-union-pay-2593673_86618.png 1x, img/web/if-union-pay-2593673_86618@2x.png 2x">
									<img id="transparent-01" src="img/web/transparent-01.png" srcset="img/web/transparent-01.png 1x, img/web/transparent-01@2x.png 2x">
									<img id="Mastercard-01" src="img/web/Mastercard-01.png" srcset="img/web/Mastercard-01.png 1x, img/web/Mastercard-01@2x.png 2x">
									<img id="Bkash_Vector_Logo_Converted-01" src="img/web/Bkash_Vector_Logo_Converted-01.png" srcset="img/web/Bkash_Vector_Logo_Converted-01.png 1x, img/web/Bkash_Vector_Logo_Converted-01@2x.png 2x">
									<div id="CASH_ON_DELIVERY">
										<span>CASH ON<br/>DELIVERY</span>
									</div>
									<div id="POS">
										<span>POS</span>
									</div>
								</div>
							</div>
							</div> 			<!-- Row end -->

							<div class="row">
								<div class="col-sm-4">
									<div id="Group_29">
										<div id="HELP">
											<span>HELP</span>
										</div>
										<div id="Payments_Shipping_Cancellation">
											<span>
												Cancellation & Returns<br/>
												Submit a Dispute<br/>
												Payments<br/>
												Shipping<br/>
												FAQ
											</span><br>
										</div>
									</div>
								</div>

								<div class="col-sm-4">
									<div id="Group_30">
										<div id="POLICY">
											<span>POLICY</span>
										</div>
										<div id="Return_Policy_Warranty_Policy_">
											<span>
												Warranty Policy<br/>
												Terms Of Use<br/>
												Return Policy<br/>
												Sitemap<br/>
												Privacy
											</span>
										</div>
									</div>
								</div>

								<div class="col-sm-4">
									<div id="Group_28">
										<div id="ABOUT">
											<span>ABOUT</span>
										</div>
										<div id="Contact_Us_Who_We_Are__Careers">
											<span>
												Become A Supplier<br/>
												Investor Relations<br/>
												Affiliate Program<br/>
												Contact Us<br/>
												Careers
											</span>
										</div>	
									</div>			
								</div>

								<div class="col-sm-4">
									<div id="Group_37">
										<div id="Group_31">
											<div id="SOCIAL">
												<span>SOCIAL</span>
											</div>
										</div>
										<div id="Group_33">
											<div id="Facebook_Instagram_YouTube_Wha">
												<span>Facebook<br/>Instagram<br/>YouTube<br/>Whatsapp</span>
											</div>
											<div id="Group_32">
												<img id="youtube" src="img/web/youtube.png" srcset="img/web/youtube.png 1x, img/web/youtube@2x.png 2x">
												<img id="facebook" src="img/web/facebook.png" srcset="img/web/facebook.png 1x, img/web/facebook@2x.png 2x">
												<img id="instagram" src="img/web/instagram.png" srcset="img/web/instagram.png 1x, img/web/instagram@2x.png 2x">
												<img id="whatsapp" src="img/web/whatsapp.png" srcset="img/web/whatsapp.png 1x, img/web/whatsapp@2x.png 2x">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>				
						
					</div>
				
			</div>
		@endsection

     	@extends($site)

     	@section('heading')
     		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />
			<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}" />
			<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" />
			<link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.css')}}">
			<link rel="stylesheet" type="text/css" href="{{asset('css/MyStyle.css')}}">
			<link rel="stylesheet" type="text/css" href="{{asset('css/WebStyle.css')}}">
			<link rel="stylesheet" type="text/css" href="{{asset('css/mob.css')}}">
			<link rel="stylesheet" type="text/css" href="{{asset('css/CartStyle.css')}}">
			<link rel="icon"       type="image/x-icon" 	  href="{{asset('img/web/badge@2x.png')}}" >
			<link rel="shortcut icon" href="{{asset('img/web/badge@2x.png')}}" type="image/png">
			<link rel="shortcut icon" href="{{asset('img/web/badge@2x.png')}}" type="image/x-icon">
			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js"></script>
			<script src="{{asset('js/jquery-3.4.1.js')}}"></script>
			<script src="{{asset('js/WebScript.js')}}"></script>
			<script src="{{asset('js/DataScript.js')}}"></script>
			<script src="{{asset('js/MyScript.js')}}"></script>
			<script src="{{asset('js/MySecondScript.js')}}"></script>
			<script src="{{asset('js/jquery-ui.js')}}"></script>
			<meta name="description" content="Cartgo is a E-Commerce site currently spreading its functionality.">
			<meta name="keywords" content="">
     	@endsection

     	@section('heading-exp')
			<link rel="stylesheet" type="text/css" href="{{asset('css/WebStyleSecond.css')}}">
     	@endsection

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>