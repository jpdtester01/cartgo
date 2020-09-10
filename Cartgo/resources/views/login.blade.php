<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign in</title>
@yield('heading')
</head>

<body>
<div id="relate_Page">
	<div class="min-main-display">
		<div class="topper">
			<div class="row">
	            <div class="col-sm-6">
	            	 <form method="post"> @csrf
	                        <div class="leffer form-row">
	                        	<div class="form-group row">
	                        		<h1>Login<br></h1>
	                            	<button type = "button" class = "social-reg-btn fbb" href="http://www.facebook.com/profile.php?id=">
	   								   <i class="fa fa-facebook fa-lg"></i> &nbsp &nbsp &nbsp Login with Facebook           
	   								</button>
	                    		</div>
	                            <div class="form-group row">
	                                <button type = "button" class = "social-reg-btn ggg" href="mailto:">
	   								   <i class="fa fa-envelope-o fa-lg"></i> &nbsp &nbsp Login with Gmail &nbsp &nbsp &nbsp
	   								</button>
	                            </div>
	                            <div class="form-group row">
	                            	@if(session()->has('msg')) <h5><span class="err-msg">{{session()->get('msg')}}</span></h5>{{session()->forget('msg')}} @else <h5>Please enter your details below:</h5> @endif
	                            </div>
	                            <div class="form-group row">
	                                        <input type="text" class="inp-field form-control" id="uname" name="identity" placeholder="Username / Phone Number" required>
	                            </div>
	                            <div class="form-group row">
	                                        <input type="password" class="inp-field form-control" id="password" name="pass" placeholder="Password" required>   
	                            </div>
	                            <div class="form-group row">
	                            	<button type="submit" class = "amvio btn btn-primary" name="submit">
	   								   LOGIN      
	   								</button>
	   								<small class="txt-righty">Forget your password? <br><a href="#">Click Here</a></small>
	                            </div>
	                        </div>
	                    </form> 
	            </div>
	            <div class="col-sm-6">
	           		<div class="reffer col-sm-6 text-left">
	            		<h1>Dont Have an Account?</h1>
	            		<a class="button button2" href="/reg"><b>SIGN UP HERE</b></a>
	            	</div>
	            </div>
	            
	        </div>   <!-- Row -->
		</div>		<!-- Topper -->
	
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