<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{$userData->username}}</title>
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
			<p class="err-msg">{{session()->get('msg')}}</p><br><br>
			{{session()->forget('msg')}}
		@endif
			<div class="container">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-sm-6 col-md-5">
						<div class="login">
							<form id="accountform" action="/account" method="post" name="reg">
								@csrf
								<h2>Update Account Information.</h2>
								<p class="err-msg">@foreach($errors->all() as $err)
									{{$err}} <br>
										@endforeach</p>
								<label id="unameLbl">Username<span>*</span></label><br><br>
								<input value="{{$userData->username}}" type="text" name="username" onkeyup="unameChk('{{csrf_token()}}')" />
								<label id="emailLbl">E-mail Address<span>*</span></label><br><br>
								<input value="{{$userData->email}}" type="text" name="email" onkeyup="emailChk('{{csrf_token()}}')"/>
								<label id="contactLbl">Contact Number<span>*</span></label><br><br>
								<input value="0{{$userData->contact}}" type="text" name="contact" onkeyup="contactChk('{{csrf_token()}}')"/>
								
								<label id="addressLbl">Address</label>
								<input value="{{$userData->address}}" type="text" name="address"/><br/>
								<input type="submit" value="Update Information"/><br><br><br>
							</form>
								
								<div class="panel panel-default">
									<a class="collapsed" data-toggle="collapse" data-parent="#checkout-progress" href="#bill-info"><div class="panel-heading" >	<span><i class="fa fa-sign-out"></i></span>CHANGE PASSWORD
									</div></a>
									<div id="bill-info" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="bill-info">
												<form id="passwordform" action="/pass" method="post" name="passwordform">
													@csrf
													<label id="passLbl">Old Password<span>*</span></label>
													<input value="" type="password" name="pass"/><br><br>
													<label id="pass1Lbl">New Password<span>*</span></label><br><br>
													<input value="" type="password" name="pass1"/>
													<label id="pass2Lbl">Confirm New Password<span>*</span></label><br><br>
													<input type="password" name="pass2"/>
													<input type="submit" value="Update Password"/>
												</form>
											</div>
										</div>
									</div>
								</div>
							
						</div>
					</div>
					<div class="col-sm-6 col-md-5">
						<div class="pro-pic-dens">
							@if($userData->image != null)
							<img src="img/user/{{$userData->image}}" class="pro-pic-aux">
							@else
							<img src="{{asset('img/user/dff.jpg')}}" class="pro-pic-aux">
							@endif
							<div>
								<form action="/proChange" method="post" enctype="multipart/form-data"> {{csrf_field()}} <input type="file" name="proChange" required><button type="submit"> &nbsp <i class="chk-display" class="fa fa-check"></i> Change Picture &nbsp </button></form>
						</div>
					</div>
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