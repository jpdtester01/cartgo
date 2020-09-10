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
	<div class="prod-box">
		<div class="sandra">
			<div class="col-sm-4">
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
			<div class="col-sm-5">
				<h2>{{$prodData->prod_name}}</h2><small>Descriptions of item</small><br>
				<h4><b>${{$prodData->prod_MRP_price}}</b></h4>
				<small>A <span class="arter">{{$product->prod_shop}}</span> Product</small>
				<div class="midro-tab">
					<table>
						<tr>
							<td>
								@if($product->prod_qty!=0)
									<h5 class="instock"><i class="fa fa-check-circle"></i> <span>In Stock</span></h5>
								@else
									<h5 class="outstock"><i class="fa fa-times-circle"></i> <span>Out of Stock</span></h5>
								@endif	
							</td>
							<td>
								<button class="req-btn">REQUEST STOCK</button>
							</td>
						</tr>
						<tr>
							<td>
								<select name="" class="opt-pan">
									<option value="" disabled selected> Quantity </option>
									<option value=""> 1 </option>
									<option value=""> 2 </option>
								</select><br>
								<select name="" class="opt-pan">
									<option value="" disabled selected> Color </option>
									<option value=""> Red </option>
									<option value=""> Green </option>
								</select>
							</td>
							<td>
								<button class="req-btn-wish" onclick="AddWish('{{csrf_token()}}','{{$product->prod_id}}')">ADD TO WISHLIST</button>
							</td>
						</tr>
					</table>
					<h4><br>Specifications</h4>
					<textarea class="prod-detials-terms" disabled>{{$product->prod_brief}}</textarea>
				</div>
			</div>
			<div class="col-sm-3">
				<button class="add-cart-btn">ADD TO CART</button>
				<button class="btn-proceed">PROCEED TO CHECKOUT</button>
				<br><br><center><h3>REGULATIONS</h3>
				<h3>CONDITIONS</h3>
				<h3>POLICIES</h3>
				<h3>TERMS</h3>
				<div><p><P><br>PAYMENT OPTIONS</P></p></div>
				<a href="/payments">
				<tr>
					<td><div class="back-it"><img src="{{asset('img/web/Bkash_Vector_Logo_Converted-01.png')}}" srcset="{{asset('img/web/Bkash_Vector_Logo_Converted-01.png')}} 1x, {{asset('img/web/Bkash_Vector_Logo_Converted-01@2x.png')}} 2x"></div></td>
					<td><div class="back-it"><img src="{{asset('img/web/Mastercard-01.png')}}" srcset="{{asset('img/web/Mastercard-01.png')}} 1x, {{asset('img/web/Mastercard-01@2x.png')}} 2x"></div></td></tr><tr>
					<td><div class="back-it"><img src="{{asset('img/web/ID1.png')}}" srcset="{{asset('img/web/ID1.png')}} 1x, {{asset('img/web/ID1@2x.png')}} 2x"></div></td>
					<td><div class="back-it"><img src="{{asset('img/web/ID22.png')}}" srcset="{{asset('img/web/ID22.png')}} 1x, {{asset('img/web/ID22@2x.png')}} 2x"></div></td></tr><tr>
					<td><div class="back-it"><img src="{{asset('img/web/if-union-pay-2593673_86618.png')}}" srcset="{{asset('img/web/if-union-pay-2593673_86618.png')}} 1x, {{asset('img/web/if-union-pay-2593673_86618@2x.png')}} 2x"></div></td>
					<td><div class="back-it"><img src="{{asset('img/web/transparent-01.png')}}" srcset="{{asset('img/web/transparent-01.png')}} 1x, {{asset('img/web/transparent-01@2x.png')}} 2x"></div></td>
					<td><div class="back-it"><center><span>CASH ON<br/>DELIVERY</span></center></div></td>
					<td><div class="back-it"><center><p>POS</p></center></div></td>
				</tr></a></center>
			</div>
		</div>
		<div class="sandra-foot">
			<div class="details-footer">
					<!-- Nav tabs -->
				<div class="neloo">
					<a data-toggle="tab" href="#description"> Product Details </a> &nbsp &nbsp
					<a data-toggle="tab" href="#review"> Ratings and Reviews </a> &nbsp &nbsp
					<a data-toggle="tab" href="#feedback"> Questions </a> &nbsp &nbsp
				</div>
							<!-- Tab panes -->
						<div class="tab-content">
							<div id="description" class="tab-pane fade active in" role="tabpanel">
								<div class="prod-name-div">
									<b>Product detials of <i>{{$product->prod_name}}</i></b>
								</div>		
								<div class="dandroff">
									<div class="col-sm-6">
										<textarea class="prod-detials-terms" disabled>{{$product->prod_details}}</textarea>
									</div>
									<div class="col-sm-6">
										<textarea class="prod-detials-terms" disabled>{{$product->prod_details}}</textarea>
									</div>
									<div class="image-goes-here">
										
									</div>
								</div>
							</div>
							<div id="review" class="tab-pane fade" role="tabpanel">
								<div class="prod-name-div">
									<b>Reviews of <i>{{$product->prod_name}}</i></b>
								</div>		
								<div class="dandroff">
									<div class="main-rev-sec">
										<div class="col-sm-4">
											@if(count($proRev)!=0) @php($tot=0) @foreach($proRev as $dt) @php($tot+=$dt->rating) @endforeach
											<center><h3>{{$tot/count($proRev)}}<small>/5</small></h3>
											<h4>@for($i=0; $i<$tot/count($proRev); $i++) <i class="on fa fa-star"></i>@endfor</h4>
											<span>{{count($proRev)}}</span> Ratings</center>
											@else <center><h3>0<small>/5</small></h3>
											<h4><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></h4>
											<span>0</span> Ratings</center>
											@endif
										</div>
										<div class="col-sm-1">
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
											<i class="fa fa-star"></i><i class="fa fa-star"></i><br><br>
											<i class="fa fa-star"></i><br><br>
										</div>
										<div class="col-sm-7">
											@php($rev=0) @foreach($proRev as $dt) @if($dt->rating==5) @php($rev+=1) @endif @endforeach <p>{{$rev}} Reviews</p>
											@php($rev=0) @foreach($proRev as $dt) @if($dt->rating==4) @php($rev+=1) @endif @endforeach <p>{{$rev}} Reviews</p>
											@php($rev=0) @foreach($proRev as $dt) @if($dt->rating==3) @php($rev+=1) @endif @endforeach <p>{{$rev}} Reviews</p>
											@php($rev=0) @foreach($proRev as $dt) @if($dt->rating==2) @php($rev+=1) @endif @endforeach <p>{{$rev}} Reviews</p>
											@php($rev=0) @foreach($proRev as $dt) @if($dt->rating==1) @php($rev+=1) @endif @endforeach <p>{{$rev}} Reviews</p>
										</div>
									</div>
									
									<div class="rev-heading">
										<div class="rev-title">
											<span>Product Reviews</span>
										</div>
										<div class="rev-filter">
											<i class="fa fa-filter"></i> Filter:
											<select name="" class="opt-rev">
												<option value=""> All Star </option>
												<option value=""> Random </option>
											</select>
										</div>
										<div class="rev-sort">
											<i class="fa fa-sort"></i> Sort:
											<select name="" class="opt-rev">
												<option value=""> Relevance </option>
												<option value=""> Oldest </option>
											</select>
										</div>
									</div>		 <!-- REVIEW HEADING -->
									
									<div class="rev-boxy">
										@foreach($proRev as $dt)
											<div class="rev-box-min">
												<div class="col-sm-9">
													<p>@for($i=0; $i< $dt->rating; $i++) <i class="on fa fa-star"></i>@endfor</p>
													<h4>{{$dt->username}}<small class="time-foot"> {{$dt->time}}</small></h4>
												 	<div class="comm-box-data">
												 		<center>{{$dt->review}}</center>
												 	</div>
												</div>
												<div class="col-sm-3"></div>
											</div>
										@endforeach
									</div>
								</div>
							</div>
							<div id="feedback" class="tab-pane fade" role="tabpanel">
								<div class="prod-name-div">
									<b>Questions about <i>{{$product->prod_name}}</i></b>
								</div>		
								<div class="dandroff">
									<div class="qt-boxy">
										@foreach($proRev as $dt)
											<div class="qt-box-min">
												<p class="qt-txt">Question By </p>
												<div class="qt-body">Does the product comes with multiple colors?</div>
												<p>Answered By {{$product->prod_shop}}</p>
												<div class="qt-body">Yes it is, please order mentioning the color you want.</div>
											</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>	<!-- Tab Content -->
				
			</div> <!-- Detials-footer -->
		</div>    <!-- Sandra Footer -->
	</div>

	@yield('footer-relate')
	@yield('dashboard')
</div>
</div>
</body>
</html>