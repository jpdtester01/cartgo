<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Account Register Form</title>
@yield('heading')
</head>
<body>
<div id="Supplier_Form">
	<svg class="Form_Background">
		<rect id="Form_Background" rx="0" ry="0" x="0" y="0" width="1920" height="888">
		</rect>
	</svg>
	<svg class="Navbar">
		<rect id="Navbar" rx="0" ry="0" x="0" y="0" width="1920" height="81">
		</rect>
	</svg>

						<!-- REgister Div Back -->

	<svg class="Rectangle_422">
		<rect id="Rectangle_422" rx="51" ry="51" x="0" y="0" width="1246" height="711">
		</rect>
	</svg>
						<!-- REgister Form -->
	<div id="Become_A_Vendor">
		<span>Register New Account</span>
	</div>
	<div id="Start_Selling_on_Cartgo">
		<span>Become Member of Cartgo</span>
	</div>

	<!-- <div id="Button" class="Button">
		<svg class="Rectangle_429">
			<rect id="Rectangle_429" rx="4" ry="4" x="0" y="0" width="191" height="33">
			</rect>
		</svg>
		<div id="REGISTER">
			<span>REGISTER</span>
		</div>
	</div> -->

	<div id="reg_form">
		<span>Please complete the form below:</span><br>
		<form id="signup-form" action="/reg" method="post" name="reg">
			@csrf
			<p class="err-data">@foreach($errors->all() as $err)
				{{$err}} <br>
					@endforeach</p>
			<p id="unameLbl">Username<span>*</span></p>
			<input type="text" name="username" class="field_acc" onkeyup="unameChk('{{csrf_token()}}')" />
			
			<div class="col-sm-6">
				<p id="emailLbl">E-mail Address<span>*</span></p>
				<input type="text" name="email" class="field_acc" onkeyup="emailChk('{{csrf_token()}}')"/>
			</div>
			<div class="col-sm-6">
				<p id="contactLbl">Contact Number<span>*</span></p>
				<input type="text" name="contact" class="field_acc" onkeyup="contactChk('{{csrf_token()}}')"/>
			</div><br><br><br>
			<div class="col-sm-6">
				<p id="emailLbll">Company (If Any)</p>
				<input type="text" name="company" class="field_acc" >
			</div>
			<div class="col-sm-6">
				<p id="emailLbll">Gender</p>
				<select name="Gender" class="Gender">
					<option value="" disabled selected> Select an option</option>
					<option value="Male"> Male</option>
					<option value="Female"> Female</option>
				</select>
			</div><br><br>
			
			<p id="addressLbl">Address</p>
			<input type="text" class="field_acc_addr" name="address"/><br/><br/>
			
			<p id="pass1Lbl">Password<span>*</span></p>
			<input type="password" class="field_acc" name="pass1" onkeyup="passChk('{{csrf_token()}}')" />
			<p id="pass2Lbl">Confirm Password<span>*</span></p>
			<input type="password" class="field_acc" name="pass2" required />
			<p id="agreement"><input type="checkbox" value="checked" name="agreement" checked required> I accept all terms and conditions of CartGo</p>
			<input type="submit" class="reg-btn" value="Sign up" />
		</form>
	</div>
	
	<div id="Lorem_ipsum_dolor_sit_amet_con">
		<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam erat velit, hendrerit sed tempus auctor, tristique id diam. Fusce vitae magna consectetur, vehicula odio sed, cursus est. Phasellus vitae metus turpis. Quisque sit amet ante fringilla nisl commodo suscipit. In non lacus quis sapien laoreet pulvinar. Duis volutpat viverra turpis, quis lacinia urna lacinia ut. Donec dignissim, libero fermentum euismod rutrum, lorem augue vulputate purus, sit amet malesuada dolor neque sed lorem. Sed ipsum orci, iaculis a malesuada eget, porttitor vitae est. Nullam vehicula aliquam enim non scelerisque. Nulla posuere orci elit. In nec vestibulum urna. Suspendisse et purus in eros tincidunt porttitor. Duis pulvinar libero a maximus hendrerit. Mauris aliquet nisi quis mauris pharetra, non tempus magna placerat. Vestibulum neque odio, ultrices eu faucibus vitae, consectetur et orci. </span>
	</div>
	
	@yield('dashboard')
	@yield('footer-sup')
	
</div>
</body>
</html>