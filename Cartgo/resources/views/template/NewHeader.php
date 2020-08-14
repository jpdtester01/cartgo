<!-- <svg class="Navbar">
		<rect id="Navbar" rx="0" ry="0" x="0" y="0" width="1920" height="81">
		</rect>
	</svg>
	<div class="panel-group" id="navitems">
		<div id="Group_12">
			<div id="Group_1">
				<div id="cartgo">
					<span><a href="/" class="logo-Reck">CARTGO</a></span>
				</div>
			</div>			<!-- Search Box  -->
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
				</svg>
			</div>

			<div class="panel-group" id="accordion">
								<!-- Account Pic -->
				<a data-toggle="collapse" data-parent="#accordion" href="#profile">
				<img id="user" src="{{asset('img/web/user.png')}}" srcset="{{asset('img/web/user.png')}} 1x, {{asset('img/web/user@2x.png')}} 2x"></a>
				@if(isset($userData))
				<a data-toggle="collapse" data-parent="#accordion" href="#wishlist" >
				<svg class="heart" viewBox="0 0 29 23.589">
					<path id="heart" d="M 14.50006580352783 23.58908462524414 C 14.08720874786377 23.58908462524414 13.68917560577393 23.45233917236328 13.37897777557373 23.20393180847168 C 12.20744609832764 22.26734733581543 11.07795143127441 21.38719940185547 10.08142757415771 20.61082458496094 L 10.07633972167969 20.60677909851074 C 7.154701232910156 18.33045196533203 4.631757259368896 16.36463165283203 2.876350402832031 14.42812156677246 C 0.9140636324882507 12.26324939727783 6.484986079158261e-05 10.21065235137939 6.484986079158261e-05 7.968317985534668 C 6.484986079158261e-05 5.789694309234619 0.8171514272689819 3.779777526855469 2.30064868927002 2.308547258377075 C 3.801846981048584 0.8199219107627869 5.861708641052246 5.722045534639619e-05 8.101445198059082 5.722045534639619e-05 C 9.77544116973877 5.722045534639619e-05 11.30850028991699 0.4839260578155518 12.65791797637939 1.438109040260315 C 13.33893203735352 1.919752717018127 13.9562292098999 2.509215116500854 14.5000638961792 3.196784257888794 C 15.04412460327148 2.509215116500854 15.66119766235352 1.919748544692993 16.34243202209473 1.438109040260315 C 17.69185066223145 0.4839234948158264 19.22490882873535 5.722045534639619e-05 20.8989086151123 5.722045534639619e-05 C 23.13842582702637 5.722045534639619e-05 25.19851303100586 0.8199219703674316 26.69969940185547 2.308547258377075 C 28.18320083618164 3.779777526855469 29.00006484985352 5.789694309234619 29.00006484985352 7.968317985534668 C 29.00006484985352 10.21066188812256 28.0862922668457 12.26326084136963 26.1240062713623 14.42791271209717 C 24.36858940124512 16.36459922790527 21.84586334228516 18.33021926879883 18.92469787597656 20.60636329650879 C 17.9264087677002 21.38394927978516 16.79514122009277 22.26551628112793 15.62095546722412 23.2043285369873 C 15.3109827041626 23.45233154296875 14.91272830963135 23.58907699584961 14.50008964538574 23.58907699584961 Z M 8.101430892944336 1.553249597549438 C 6.341808319091797 1.553249597549438 4.725335597991943 2.195304155349731 3.549379110336304 3.361286878585815 C 2.355944156646729 4.544865131378174 1.698600769042969 6.180953979492188 1.698600769042969 7.968355178833008 C 1.698600769042969 9.854272842407227 2.465243101119995 11.54093551635742 4.184150695800781 13.43714237213135 C 5.845534324645996 15.27005577087402 8.316704750061035 17.19541549682617 11.17796993255615 19.4248161315918 L 11.18327903747559 19.42886161804199 C 12.18356418609619 20.20827293395996 13.31748104095459 21.09185981750488 14.49763965606689 22.03531837463379 C 15.68487930297852 21.09003639221191 16.8205680847168 20.20502853393555 17.82284164428711 19.42440795898438 C 20.68385887145996 17.19500732421875 23.15480613708496 15.27005290985107 24.81620597839355 13.43714809417725 C 26.5348949432373 11.54091548919678 27.3015308380127 9.854253768920898 27.3015308380127 7.968361854553223 C 27.3015308380127 6.180961132049561 26.64418983459473 4.544866561889648 25.45075798034668 3.361293315887451 C 24.27502059936523 2.195316314697266 22.65832901000977 1.553256392478943 20.89892959594727 1.553256392478943 C 19.60991287231445 1.553256392478943 18.42643356323242 1.927890300750732 17.38145446777344 2.666640043258667 C 16.4502010345459 3.325287103652954 15.80149173736572 4.157895565032959 15.42115592956543 4.740480422973633 C 15.2255687713623 5.040066719055176 14.88129997253418 5.218887805938721 14.50008296966553 5.218887805938721 C 14.11886692047119 5.218887805938721 13.77459621429443 5.040066242218018 13.57900905609131 4.740480422973633 C 13.19889640808105 4.157895565032959 12.5501823425293 3.325286626815796 11.6187105178833 2.666639804840088 C 10.57373523712158 1.927891612052917 9.390253067016602 1.553256154060364 8.101456642150879 1.553256154060364 Z M 8.101430892944336 1.553249597549438">
					</path>
				</svg></a>
				<a data-toggle="collapse" data-parent="#accordion" href="#cart">
				<img id="shopping-bag" src="{{asset('img/web/shopping-bag.png')}}" srcset="{{asset('img/web/shopping-bag.png')}} 1x, {{asset('img/web/shopping-bag@2x.png')}} 2x"></a>
				@endif
			

			<div id="profile" class="panel-collapse collapse">
				@if(isset($userData))
					<small>welcome {{$userData->username}} !</small><h4><span id="tz"></span></h4>
					<ul>
						<li><a href="/profile">Profile <i class="fa fa-child"></i></a></li>
						<li><a href="/ProductCart">Cart <i class="fa fa-shopping-cart"></i></a></li>
						<li><a href="/wishlist">Wishlist <i class="fa fa-bookmark"></i></a></li>
						<li><a href="/logout">Sign out <i class="fa fa-sign-out"></i></a></li>
						@if($userData->type=='admin')
						<li><a href="">Dashboard <i class="fa fa-dashboard"></i></a></li>
						<li><a href="">Add Product <i class="fa fa-plus"></i></a></li>
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
			<div id="wishlist" class="panel-collapse collapse">
				@if(isset($WishData))
					@if($WishData != null)
						<h4><a href="/wishlist"><i class="fa fa-heart"></i> WishList <small>({{count($WishData)}} Products)</small></a></h4><hr>
						@foreach($WishData as $dt)
							<p id="cartNames">{{$dt->prod_name}}</p>
						@endforeach
					@else
						<h4><i class="fa fa-heart"></i> WishList (No Product)</h4><hr>
					@endif
				@endif
			</div></a>
			<a href="/ProductCart">
			<div id="cart" class="panel-collapse collapse">
				@if(isset($CartData))
					@if($CartData != null)
						<h4><a href="/ProductCart"><i class="fa fa-shopping-cart"></i> Cart <small>({{count($CartData)}} Products)</small></a></h4><hr>
						@foreach($CartData as $dt)
							<p id="cartNames">{{$dt->prod_name}}</p>
						@endforeach
					@else
						<h4><i class="fa fa-shopping-cart"></i> Cart (No Product)</h4><hr>
					@endif
				@endif
			</div></a>
		</div>  <!-- / Accordion -->		
		</div>  <!-- /Group-12 --> -->
	<!-- </div> -->