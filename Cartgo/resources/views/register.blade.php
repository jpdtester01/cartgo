<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>
@yield('heading')
</head>

<body>
<div id="relate_Page">
	<div class="min-main-display">
		<div class="topper">
			<div class="row">
	            <div class="col-sm-6">
	            	 
	                        <div class="leffer form-row">
	                        	<div class="form-group row">
	                        		<h1>Sign Up<br></h1>
	                            	<button type = "button" class = "social-reg-btn fbb" href="http://www.facebook.com/profile.php?id=">
	   								   <i class="fa fa-facebook fa-lg"></i> &nbsp &nbsp &nbsp Sign Up with Facebook           
	   								</button>
	                    		</div>
	                            <div class="form-group row">
	                                <button type = "button" class = "social-reg-btn ggg" href="mailto:">
	   								   <i class="fa fa-envelope-o fa-lg"></i> &nbsp &nbsp Sign Up with Gmail &nbsp &nbsp &nbsp
	   								</button>
	                            </div>
	                            
	                        </div>
	                    </form> 
	            </div>
	            <div class="col-sm-6">
	            	<form id="signup-form" action="/reg" method="post" name="reg"> @csrf
	           		<h1>Other Options</h1>
						
						<div class="reg-form">

							<p class="err-data">@foreach($errors->all() as $err)
								{{$err}} <br>
									@endforeach</p>
							<small>Please enter your details below:</small>
							<input type="text" name="username" class="field_acc" onkeyup="unameChk('{{csrf_token()}}')" placeholder="Username" required>
							<small id="unameLbl"></small>
							
							<input type="password" class="field_acc" name="pass1" onkeyup="passChk('{{csrf_token()}}')" placeholder="Password" required>
							<small id="pass1Lbl"></small>
							
							<input type="password" class="field_acc" name="pass2" placeholder="Re-type Password" required>
							<small id="pass2Lbl"></small>
							
							<input type="text" name="email" class="field_acc" onkeyup="emailChk('{{csrf_token()}}')" placeholder="Email Address" required>
							<small id="emailLbl"></small>
							
							<input type="text" name="contact" class="field_acc" onkeyup="contactChk('{{csrf_token()}}')" placeholder="Mobile Phone Number" required>
							<small id="contactLbl"></small>
							
							<select name="Gender" class="Gender">
								<option value="" disabled selected> Gender : </option>
								<option value="Male"> Male</option>
								<option value="Female"> Female</option>
							</select>

							<input type="text" class="field_acc_addr" name="address" placeholder="Address">
							
							<input type="Submit" class="reg-btn" value="Sign up" />
						
						</div> 			<!-- reg-form -->
	                 
                    </form> 
	            </div> <!-- col-sm-6 -->
	            
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