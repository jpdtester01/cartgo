<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Frequently Asked Questions</title>
@yield('heading')
</head>

<body>
<div id="relate_Page">
	<svg class="Lower_Body" viewBox="0 557 1920 1">
		<path id="Lower_Body" d="M 1920 557 L 0 557 L 1920 557 Z">
		</path>
	</svg>
	
	<div class="faq-display">
		<div class="faq-banner">
			<h3>Frequently Asked Questions</h3>
			<input type="text" name="longFaqSearch" class="longFaqSearch" placeholder="Search your topic here..."><button class="faq-search"><i class="fa fa-search"></i></button>
		</div>
		<div class="faq-cat">
			<div class="col-sm-3">
				<div class="faq-board">
					<p><b>About <i>Policies</i> ?</b></p>
					<ul>
						<li><a href="">Return Policy</a></li>
						<li><a href="">Offer Conditions</a></li>
						<li><a href="">Cashback Policy</a></li>
						<li><a href="">Exchange Policies</a></li>
						<li><a href="">Applied Conditions</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="faq-board">
					<p><b>About <i>Purchases</i> ?</b></p>
					<ul>
						<li><a href="">EMI Purchase</a></li>
						<li><a href="">Card Payments</a></li>
						<li><a href="">Cash on Delivery</a></li>
						<li><a href="">Flashsale Puchases</a></li>
						<li><a href="">Multiple Purchasing</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="faq-board">
					<p><b>About <i>Shipments</i> ?</b></p>
					<ul>
						<li><a href="">Working Day</a></li>
						<li><a href="">Out of Dhaka</a></li>
						<li><a href="">Opening Hours</a></li>
						<li><a href="">Return Delivery</a></li>
						<li><a href="">Express Shipment</a></li>
					</ul>
				</div>
			</div>
		</div>		<!-- FAQ CAT -->
	</div> 		<!-- /Product Main Display -->
	
	
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