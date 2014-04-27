<div id="mySignup" class="reveal-modal medium" data-reveal>
	<h3>Player Sign-up</h3>
	<a href="https://www.facebook.com/dialog/oauth?client_id=417155041695310&amp;redirect_uri=http%3A%2F%2Fwww.tenniscomp.com.au%2Fauth%2Flogin%3Fbacklink%3Dv4s33%26do%3DfbRegisterCallback&amp;state=82557b4240b7bb76e38746c63bc46138&amp;scope=email%2Cuser_birthday%2Cpublish_actions"><img src="images/login-with-facebook.png" alt="Register with Facebook"></a>
	<h6 class="strike"><span>or</span></h6>
	
	<form action="/auth/register?backlink=13y51&amp;do=playerRegForm-submit" method="post" id="frm-playerRegForm">
		<table>
			<tbody>
				<tr class="required">
					<td><input type="text" name="" id="" required="required" placeholder="Your Name" /></td>
				</tr>
				<tr class="required">
					<td><input type="text" name="" id="" required="required" placeholder="Your Email Address" /></td>
				</tr>
				<tr class="required">
					<td><input type="password" name="" id="" required="required" placeholder="Set a Password" /></td>
				</tr>
				<tr>
					<td><button type="button" class="button fill fullwidth end">Sign Up</button></td>
				</tr>
			</tbody>
		</table>
		<div><!--[if IE]><input type=IEbug disabled style="display:none"><![endif]--></div>
	</form>
	<p>Already have an Account? <a href="#" data-reveal-id="myLogin" class="">Login Here</a></p>
	
	<a class="close-reveal-modal">&#215;</a>
</div><!-- /mySignup -->

<div id="myLogin" class="reveal-modal medium" data-reveal>
	<h3>Player Login</h3>
	<a href="https://www.facebook.com/dialog/oauth?client_id=417155041695310&amp;redirect_uri=http%3A%2F%2Fwww.tenniscomp.com.au%2Fauth%2Flogin%3Fbacklink%3Dv4s33%26do%3DfbRegisterCallback&amp;state=82557b4240b7bb76e38746c63bc46138&amp;scope=email%2Cuser_birthday%2Cpublish_actions"><img src="images/login-with-facebook.png" alt="Register with Facebook"></a>
	<h6 class="strike"><span>or</span></h6>
	
	<form action="/auth/register?backlink=13y51&amp;do=playerRegForm-submit" method="post" id="frm-playerRegForm">
		<table>
			<tbody>
				<tr class="required">
					<td colspan="2"><input type="text" name="" id="" required="required" placeholder="Email Address" /></td>
				</tr>
				<tr class="required">
					<td colspan="2"><input type="password" name="" id="" required="required" placeholder="Password" /></td>
				</tr>
				<tr>
					<td><input type="checkbox" class="left" name="remember" id="frmsignInForm-remember"><label for="frmsignInForm-remember">Remember me</label></td>
					<td><a href="/auth/reset-password?backlink=v4s33">Forgotten password?</a></td>
				</tr>			
				<tr>
					<td colspan="2"><button type="button" class="button navy fullwidth end">Login</button></td>
				</tr>
			</tbody>
		</table>
		<div><!--[if IE]><input type=IEbug disabled style="display:none"><![endif]--></div>
	</form>
	<p>Don't have an Account? <a href="#" data-reveal-id="mySignup" class="">Sign Up</a></p>
	
	
	<a class="close-reveal-modal">&#215;</a>
</div><!-- /myLogin -->

<script>
	$(document).foundation();
</script>
