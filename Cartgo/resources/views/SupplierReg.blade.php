<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Supplier Reg. Form</title>
@yield('heading')
</head>

<body>
<div id="relate_Page">
	<div class="min-main-display">
		<div class="row row-content align-items-center">
            <div class="col-sm-6 offset-sm-1">
                <h1>Become a Vendor</h1>
                <h3>Start Selling on Cartgo</h3>
                <p>
                	Go to reportaproblem.apple.com. Sign in with your Apple ID and password. If you see the "Report" or "Report a Problem" button next to the item that you want to request a refund for, click it. Follow the instructions on the page to choose the reason why you want a refund and submit your request.
                </p>
            </div>
            <div class="col-sm-6">
                <h4>Please complete the form below</h4>
                 <form>
                        <div class="form-row">
                        	<div class="form-group row">
                        		<label for="fullname" class="col-md-3 col-form-label">Account Type</label>
                        			<div class="col-sm-6">
                        				<div class="col-sm-6 text-left">
                        					<input type="radio" class="form-check-input" id="one" name="personal" value="option1"></input>
                                    		<label for="radioone" class="form-check-label">Personal</label>
                                    	</div>
                                    	<div class="col-sm-6 text-right">
                            				<input type="radio" class="form-check-input" id="one" name="business" value="option2"></input>
                                    		<label for="radiotwo" class="form-check-label">Business</label>
                            			</div>
                                    	
                        			</div>
                    		</div>
                            <div class="form-group row">
                        		<label for="fullname" class="col-md-3 col-form-label">Full Name</label>
                        			<div class="col-sm-6">
                            			<input type="text" class="form-control" id="fullname" name="fullname">
                        			</div>
                    		</div>
                            <div class="form-group row">
                                <label for="Mobile" class="col-md-3 col-form-label">Country</label>
                                    <div class=" col-sm-6">
                                        <input type="text" class="form-control" id="orderno" name="orderno">
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="Mobile" class="col-md-3 col-form-label">Company Name</label>
                                    <div class=" col-sm-6">
                                        <input type="text" class="form-control" id="reason" name="reason">
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="Mobile" class="col-md-3 col-form-label">Mobile Number</label>
                                    <div class=" col-sm-6">
                                        <input type="tel" class="form-control" id="mobnum" name="mobnum" placeholder="Mob. Number">
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="Mobile" class="col-md-3 col-form-label">Email Address</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email@example.com">
                                    </div>
                            </div>
                            <div class="col-sm-9 text-right">
                               <button type = "button" class = "button">
   								    REGISTER
   								</button>
                            </div>
                        </div>
                    </form>            
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