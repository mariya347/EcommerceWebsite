<?php
require("header.php");
if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']=='yes'){
	?>
	<script>
	window.location.href='my_order.php';
	</script>
	<?php
}
?>
 <div class="login-page">
 	<div class="login-box">
 		<div class="left">
			 <div class="center-heading">
 			<h3>Create an account <br><span>Get access to your Orders, Wishlist and Recommendations</span></h3>
		</div>
 			<button type="button" class="register-btn">Register</button>
 		</div>
 		<div class="right-log">
 			<h3>Welcome back!<br><span>Log in grab your favorite beauty products</span></h3>
 			<button type="button" class="login-btn">Log in</button>
 		</div>
 		<div class="form">
 			 <!-- Login form Start -->			 
 			 <div class="login-form">
			  <h3>Log in</h3>
                <form action="" method="post">
                    <div class="form-group">
 			 	     	<input type="email" name="login_email" id="login_email"  placeholder=" Email Address*" class="form-control">
						<span class="field_error" id="login_email_error"></span>
 			    	</div>
 			    	<div class="form-group">
 			 	    	<input type="password" name="login_password" id="login_password" placeholder=" Password*" class="form-control">
						  <span class="field_error" id="login_password_error"></span>
 			    	</div>
                </form>
 			 	<!-- <div class="form-group">
 			 		<label>
 			 			<input type="checkbox"> Remember Me
 			 		</label>
 			 	</div> -->
 			 	<button type="button" class="submit-btn" onclick="user_login()">Log in</button>
				  <div class="form-output login_msg">
						<p class="form-messege field_error"></p>
					</div>
 			 	<p><a href="#" class="register-btn">Register</a> | <a href="#" class="lost-pass-btn">Lost Your Password ?</a></p>
 			 </div>
 			 <!-- Login form End -->

             <!-- Register form Start -->
 			 <div class="register-form form-hidden">
 			 	<h3>Register</h3>
                  <form action="" method="post">
 			 	<div class="form-group">
 			 		<input  type="text" name="name" id="name" placeholder="Name*" class="form-control">
                      <span class="field_error" id="name_error"></span>
 			 	</div>
                
 			 	<div class="form-group">
 			 		<input type="email" name="email" id="email" placeholder="Email Address*" class="form-control">
                    
					  <button type="button" class="email_sent_otp" onclick="email_sent_otp()">Send OTP</button>
					  <input type="text"  class="email_verify_otp " id="email_otp" placeholder="OTP" style="width:45%">
					  <input type="button" id ="verify_button" class="email_verify_otp email_verify_otp-btn" onclick="email_verify_otp()" value="Verify OTP"/>

					  <span id="email_otp_result"></span>
					  
					  <span class="field_error" id="email_error"></span>
 			 	</div>
                 
                <div class="form-group">
 			 		<input type="tel" name="mobile" id="mobile" placeholder="Mobile*" class="form-control">
                      <span class="field_error" id="mobile_error"></span>
 			 	</div>
                 
 			 	<div class="form-group">
 			 		<input type="password" name="password" id="password"  placeholder="Password*" class="form-control">
                      <span class="field_error" id="password_error"></span>
 			 	</div>
 			 	<button type="button" class="submit-btn" onclick="user_register()" disabled id="btn_register">Register</button>
                  </form>
                  <div class="form-output register_msg">
						<p class="form-messege "></p>
				  </div>
 			 	<p><a href="#" class="login-btn">Login</a> | <a href="#" class="lost-pass-btn">Lost Your Password ?</a></p>
 			 </div>
 			 <!-- Register form End -->

 			 <!-- Lost Password form Start -->
 			 <div class="lost-password-form form-hidden">
 			 	<h3>Lost Your Password ?</h3>
 			 	<h5 id="f_email_response"></h5>
 			 	
 			 	<div class="form-group">
 			 		<input type="email" id="f_email" name="f_email" placeholder="Email Address*" class="form-control">
					  <span class="field_error" id="f_email_error"></span>
 			 	</div>
 			 	
 			 	
 			 	<button type="button"  onclick="forgot_password()" id="f_btn_submit" class="submit-btn">Reset Password</button>
 			 	<p><a href="#" class="login-btn">Login</a> | <a href="#" class="register-btn">Register</a></p>
 			 </div>
 			 <!-- Lost Password form End -->

 		</div>
 	</div>
 </div>
<?php
require("footer.php");
?>