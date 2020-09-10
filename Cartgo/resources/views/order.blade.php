<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Orders</title>
@yield('heading')
</head>

<body>
<div id="relate_Page">
	<div class="min-main-display">
		<center><h1><i class="fa fa-suitcase"></i> <small> Your Orders</small></h1><hr>
		<input type="text" name="longFaqSearch" class="longFaqSearch" placeholder="Search by #Order No..."></center>
	
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