<?php include("_head.php"); ?>

</head>

<body class="signUp">

<?php include("_sidebar.php"); ?>

<div id="fluid-column">

	<?php include("_topbar-navigation.php"); ?>





<section role="forms">
	
    <!-- Forms --> 
    <div class="row">

        <div class="eight columns offset-by-two end">
            <form class="custom">
            	
                <!-- text input -->
                <div class="row">
                    <div class="two mobile-one columns">
                        <label class="right inline">First Name</label>
                    </div>
                    <div class="ten mobile-three columns">
                        <span class="glass-span"><input type="text" placeholder="What's your First Name?" /></span>
                    </div>
                </div><!-- inner row -->
                
				<!-- radio -->            
                <div class="row">
                    <div class="two mobile-one columns">
                        <label class="right inline">Sex</label>
                    </div>
                    <div class="ten mobile-three columns">
                        <div class="row">
                            <div class="four mobile-one columns">
                                <label for="radio1"><input class="glass" name="radio1" type="radio" id="radio1"> Male</label>
                            </div>
                            <div class="four mobile-one columns end">
                                <label for="radio2"><input name="radio1" type="radio" class="glass" id="radio2"> Female</label>
                            </div>
                        </div><!-- inner row -->
                    </div><!-- ten -->
                </div><!-- inner row -->

				<!-- checkbox -->
                <div class="row">
                    <div class="ten mobile-three columns offset-by-two">
                        <label for="checkbox1"><input class="glass" type="checkbox" id="checkbox1">I agree to the Terms of Service and Privacy Policy.</label>
                    </div>
                    <br /><br /><br />
                    <div class="ten mobile-three columns offset-by-two">
                        <a class="button right" href="#">Sign Up Now</a>
                    </div>
                </div><!-- inner row -->

				<!-- textarea -->
                <div class="row">
                    <div class="two mobile-one columns">
                        <label class="right inline">First Name</label>
                    </div>
                    <div class="ten mobile-three columns">
                       <span class="glass-span"><textarea rows="15" placeholder="Message"></textarea></span>
                    </div>
                </div><!-- inner row -->

				<!-- dropdown -->
                <div class="row">
                    <div class="two mobile-one columns">
                        <label class="right inline">Location</label>
                    </div>
                    <div class="ten mobile-three columns">
                    <span class="glass-span">
                        <select>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                            <option value="1975">1975</option>
                            <option value="1974">1974</option>
                            <option value="1973">1973</option>
                            <option value="1972">1972</option>
                            <option value="1971">1971</option>
                            <option value="1970">1970</option>
                            <option value="1969">1969</option>
                            <option value="1968">1968</option>
                            <option value="1967">1967</option>
                            <option value="1966">1966</option>
                            <option value="1965">1965</option>
                            <option value="1964">1964</option>
                            <option value="1963">1963</option>
                            <option value="1962">1962</option>
                            <option value="1961">1961</option>
                            <option value="1960">1960</option>
                            <option value="1959">1959</option>
                            <option value="1958">1958</option>
                            <option value="1957">1957</option>
                            <option value="1956">1956</option>
                            <option value="1955">1955</option>
                            <option value="1954">1954</option>
                        </select>
                        </span>
                    </div>
                </div><!-- inner row -->

            </form>
        </div><!-- eight -->
    </div><!-- row -->
    
</section><!-- forms -->
















	

	<section role="page" class="test">
		<div class="row">
			<h1>Sign-up to Tennis Comp</h1>
			<h6 class="strike"><span>or</span></h6>

			<a href="#" data-reveal-id="mySignup" data-reveal>Test button</a>

<div id="mySignup" class="reveal-modal tiny" data-reveal>
	<h3>Player Sign-up</h3>
	<a href="https://www.facebook.com/dialog/oauth?client_id=417155041695310&amp;redirect_uri=http%3A%2F%2Fwww.tenniscomp.com.au%2Fauth%2Flogin%3Fbacklink%3Dv4s33%26do%3DfbRegisterCallback&amp;state=82557b4240b7bb76e38746c63bc46138&amp;scope=email%2Cuser_birthday%2Cpublish_actions"><img src="images/login-with-facebook.png" alt="Register with Facebook"></a>
	<h6 class="strike"><span>or</span></h6>
	

	<form action="/auth/register?backlink=13y51&amp;do=playerRegForm-submit" method="post" id="frm-playerRegForm">
		<table>
			<tbody>
				<tr class="required">
					<th><label class="required" for="frmplayerRegForm-name">Name</label></th>
					<td><input type="text" name="name" id="frmplayerRegForm-name" required="required" /></td>
				</tr>
				<tr class="required">
					<th><label class="required" for="frmplayerRegForm-email">Email</label></th>
					<td><input type="text" name="email" id="frmplayerRegForm-email" required="required" /></td>
				</tr>
				<tr class="required">
					<th><label class="required" for="frmplayerRegForm-password1">Password</label></th>
					<td><input type="password" name="password1" id="frmplayerRegForm-password1" required="required" /></td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td><input type="submit" class="button end" name="save" id="frmplayerRegForm-save" value="Register"></td>
				</tr>
			</tbody>
		</table>
		<div><!--[if IE]><input type=IEbug disabled style="display:none"><![endif]--></div>
	</form>

	<a class="close-reveal-modal">&#215;</a>
</div><!-- /mySignup -->





<div id="mySignup2" class="reveal-modal small" data-reveal>
	<h3>Player Sign-up</h3>
	<a href="https://www.facebook.com/dialog/oauth?client_id=417155041695310&amp;redirect_uri=http%3A%2F%2Fwww.tenniscomp.com.au%2Fauth%2Flogin%3Fbacklink%3Dv4s33%26do%3DfbRegisterCallback&amp;state=82557b4240b7bb76e38746c63bc46138&amp;scope=email%2Cuser_birthday%2Cpublish_actions"><img src="images/login-with-facebook.png" alt="Register with Facebook"></a>
	<br>- or -<br>
	

	<form action="/auth/register?backlink=13y51&amp;do=playerRegForm-submit" method="post" id="frm-playerRegForm">
		<table>
			<tbody>
				<tr class="required">
					<th><label class="required" for="frmplayerRegForm-name">Name</label></th>
					<td><input type="text" name="name" id="frmplayerRegForm-name" required="required" /></td>
				</tr>
				<tr class="required">
					<th><label class="required" for="frmplayerRegForm-email">Email</label></th>
					<td><input type="text" name="email" id="frmplayerRegForm-email" required="required" /></td>
				</tr>
				<tr class="required">
					<th><label class="required" for="frmplayerRegForm-password1">Password</label></th>
					<td><input type="password" name="password1" id="frmplayerRegForm-password1" required="required" /></td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td><input type="submit" class="button end" name="save" id="frmplayerRegForm-save" value="Register"></td>
				</tr>
			</tbody>
		</table>
		<div><!--[if IE]><input type=IEbug disabled style="display:none"><![endif]--></div>
	</form>

	<a class="close-reveal-modal">&#215;</a>
</div><!-- /mySignup -->







			<div class="small-12 columns">








			</div><!-- /column -->


			<div class="large-6 columns">
				<h3>Player Login</h3>
				<a href="https://www.facebook.com/dialog/oauth?client_id=417155041695310&amp;redirect_uri=http%3A%2F%2Fwww.tenniscomp.com.au%2Fauth%2Flogin%3Fbacklink%3Dv4s33%26do%3DfbLoginCallback&amp;state=82557b4240b7bb76e38746c63bc46138&amp;scope=email%2Cuser_birthday%2Cpublish_actions"><img src="images/login-with-facebook.png" alt="Login with Facebook"></a>
				<br>- or -<br>
				<form action="/auth/login?backlink=v4s33&amp;do=signInForm-submit" method="post" id="frm-signInForm">

					<table>
						<tbody>
							<tr class="required">
								<th><label class="required" for="frmsignInForm-name">E-mail address:</label></th>
								<td><input type="text" name="name" id="frmsignInForm-name" required="required" placeholder="What's your First Name?"></td>
							</tr>
							<tr class="required">
								<th><label class="required" for="frmsignInForm-password">Password:</label></th>
								<td><input type="password" class="text" name="password" id="frmsignInForm-password" required="required" data-nette-rules="{op:':filled',msg:'Please provide a password.'}" mouseev="true" autocomplete="off" keyev="true" clickev="true" style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QsPDhss3LcOZQAAAU5JREFUOMvdkzFLA0EQhd/bO7iIYmklaCUopLAQA6KNaawt9BeIgnUwLHPJRchfEBR7CyGWgiDY2SlIQBT/gDaCoGDudiy8SLwkBiwz1c7y+GZ25i0wnFEqlSZFZKGdi8iiiOR7aU32QkR2c7ncPcljAARAkgckb8IwrGf1fg/oJ8lRAHkR2VDVmOQ8AKjqY1bMHgCGYXhFchnAg6omJGcBXEZRtNoXYK2dMsaMt1qtD9/3p40x5yS9tHICYF1Vn0mOxXH8Uq/Xb389wff9PQDbQRB0t/QNOiPZ1h4B2MoO0fxnYz8dOOcOVbWhqq8kJzzPa3RAXZIkawCenHMjJN/+GiIqlcoFgKKq3pEMAMwAuCa5VK1W3SAfbAIopum+cy5KzwXn3M5AI6XVYlVt1mq1U8/zTlS1CeC9j2+6o1wuz1lrVzpWXLDWTg3pz/0CQnd2Jos49xUAAAAASUVORK5CYII=); padding-right: 0px; background-attachment: scroll; background-position: 100% 50%; background-repeat: no-repeat no-repeat;"></td>
							</tr>
							<tr>
								<th>&nbsp;</th>
								<td><input type="checkbox" class="left" name="remember" id="frmsignInForm-remember"><label for="frmsignInForm-remember">Remember me</label></td>
							</tr>
							<tr>
								<th>&nbsp;</th>
								<td><input type="submit" class="green button button" name="send" id="frmsignInForm-send" value="Sign in"></td>
							</tr>
						</tbody>
					</table>
					<div><!--[if IE]><input type=IEbug disabled style="display:none"><![endif]--></div>
				</form>
				<br>
				<a href="/auth/reset-password?backlink=v4s33">Forgotten password?</a>
			</div>
		</div>
	</section>

	<?php include("_footer.php"); ?>

</div><!-- fluid-column -->

<script>
	$(document).foundation();
</script>

</body>
</html>