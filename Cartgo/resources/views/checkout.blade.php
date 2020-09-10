<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Checkout</title>
@yield('heading')
</head>

<body>
<div id="relate_Page">
	<div class="checkout-display">
		<div class="row">
			<div class="col-sm-9">
				<div class="checkout-main">
					<b>CART LIST</b>
					<table>
						<tbody id="CartBody">
							@php($subtot=0)
							@foreach($CartData as $dt)
							<tr class="table-info">
								<td class="produ">
									@php($imgCall=0) @foreach($imgData as $img) @if($img->prod_id==$dt->prod_id)
										<a href="/product-details/{{$dt->prod_id}}" class="pro-image fix"><img src="img/shop/{{$img->image1}}" alt="featured" /></a>@php($imgCall=1) @break @endif
									@endforeach
									@if($imgCall==0) <a href="/product-details/{{$dt->prod_id}}"><img alt="" src="img/cart-1.jpg"></a> @endif
								</td>
								<td class="namedes">
									<h2><a href="/product-details/{{$dt->prod_id}}">{{$dt->prod_name}}</a></h2>
									<p>{{$dt->prod_brief}}</p>
								</td>
								<td class="unit">
									<h5>${{$dt->prod_MRP_price}}</h5>
								</td>
								<td class="quantity">
									<div>
										<input type="text" placeholder=" -" id="qtyminus-{{$dt->prod_id}}" onclick="qtyChange('remove','{{$dt->prod_id}}','{{$dt->prod_MRP_price}}')" class="cart-qty-box" readonly>
										<input type="text" value="{{$dt->prod_quantity}}" id="qtytxt-{{$dt->prod_id}}" class="cart-qty-box" readonly disabled>
										<input type="text" placeholder=" +" id="qtyplus-{{$dt->prod_id}}" onclick="qtyChange('add','{{$dt->prod_id}}','{{$dt->prod_MRP_price}}')" class="cart-qty-box" readonly>
									</div>
								</td>
								<td class="valu">
									<h4><span id="val-{{$dt->prod_id}}">${{$dt->prod_quantity * $dt->prod_MRP_price}}<span></h4>
								</td>
								<td class="acti">
									<a><i class="fa fa-trash-o" onclick="DelCart('{{$dt->prod_id}}')"></i></a>
								</td>
							</tr>
							@php($subtot=$subtot + $dt->prod_quantity * $dt->prod_MRP_price)
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="checkout-side">
					<center><p><b>ORDER SUMMARY</b></p></center>
					<p>Subtotal <span class="td-righty">$100</span></p>
					<p>Discount <span class="td-righty">$0</span></p>
					<p>Shipping <span class="td-righty">$50</span></p>
					<p>VAT <span class="td-righty">$0</span></p>
					<h4>TOTAL <span class="td-righty">$100</span></h4>
					<input type="text" name="promo" class="field_promo" placeholder="APPLY PROMO CODE">
					<button class="field_promo cl-btn">APPLY</button>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="later-check-div">
				<center><p>SAVED FOR LATER</p></center>
				@if($WishData != null)
					@foreach($WishData as $dt)
						<a href="/product-details/{{$dt->prod_id}}">
						<div class="later-box">
							@foreach($imgData as $img)
								@if($img->prod_id == $dt->prod_id)
									<center><img src="{{asset('img/shop/'.$img->image1.'')}}" class="img-chk"></center>
								@endif
							@endforeach
							<p><br>{{$dt->prod_name}}<br>${{$dt->prod_MRP_price}}</p>
						</div></a>
					@endforeach
				@endif
			</div>
		</div>
	</div>		<!-- Min MAin Display -->
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
	
	@yield('footer-relate')
	@yield('dashboard')
</div> <!-- /Relate Page -->
</body>
</html>