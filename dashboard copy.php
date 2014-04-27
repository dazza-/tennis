<?php include("_head.php"); ?>

</head>

<body class="dashboard">

<?php include("_sidebar.php"); ?>

<div id="fluid-column">

	<section role="dashboardHomeWelcome" class="dashboardHomeWelcome">
	
		<?php include("_topbar-navigation.php"); ?>
	
		<div class="row">
		
			<div class="large-12 columns">
		
				<img class="profile" width="100" height="100" src="http://www.gravatar.com/avatar/b96be315140d8ca5f50b03267673c155?s=100&amp;d=wavatar" title="2 Jack Dummy" alt="2 Jack Dummy" />
				<strong>Sammy Ryan Watkins<!-- <br/> Blue Mountains --></strong>
		
			</div><!-- /large-10 -->
		
		</div><!-- /row -->    	
	
	</section><!-- /dashHomeWelcome -->    	
	    	



	<section role="dashboardHome" class="dashboardHome">
	
		<div id="snippet--flashMessages"></div>

		<div class="row dashContent">
		
		    <div class="large-12 columns dashAlerts">
		    
			    <div data-alert="" class="alert-box">
					<p>Rego is now open for the <strong>Autumn Comp</strong> starting in <strong>-16 days</strong>. Apply now to secure your spot <a href="/player/my-league/select-league" class="button green">Sign-up Autumn Comp</a></p>
					<a href="#" class="close">×</a>
				</div>
		 
		    </div><!-- /large-12 -->
		
			<div class="large-12 columns dashCpanel">
		    
			    <div class="row">
			    
				    <div class="large-6 columns testBox">
    					<p>Start playing Tennis Comp: <a href="/player/dashboard/matches" class="button green glass">Match Centre</a></p>	

    					<p>Start playing Tennis Comp: <a href="/player/dashboard/matches" class="button green glass">Results</a></p>	

				    </div><!-- /large-4 -->			    
			    
			    

			    
				    <div class="large-4 columns testBox">
						<div class="dashInbox">
					    	<h3>Inbox</h3>
					    	<span class="inboxCount">0</span>
							<p>You have 0 unread message in your inbox <a href="/player/inbox/" class="">InBox</a></p>	 	
						</div><!-- /dashInbox -->
				    </div><!-- /large-4 -->
			
				    <div class="large-4 columns testBox">
				    	<h3>Facebook</h3>
			            <p>Use Facebook to use your profile picture <a href="https://www.facebook.com/dialog/oauth?client_id=417155041695310&amp;redirect_uri=http%3A%2F%2Fwww.tenniscomp.com.au%2Fplayer%2F%3Fdo%3DfBAccountConnect&amp;state=1457564ef37190042ece983fd638334c&amp;scope=email%2Cuser_birthday%2Cpublish_actions" class="button green glass">Connect to Facebook</a></p>
				    </div><!-- /large-4 -->
				    
				    <div class="large-4 columns testBox"> 
				    	<div class="row">
				    	
				    		<!--
						    <div class="large-12 columns smallBox">
								<h3>Earn Credit</h3>
								<p>Invite friends to play Tennis Comp to <a href="/player/dashboard/earn-credit" class="button green glass">Earn Credit</a></p>				    
							</div> /large-12 -->
			
							<div class="large-12 columns">
								<div class="dashProfile">
									<h3>Profile</h3>
									<p>Update your details, add a photo, select your state of origin and country <a href="/player/dashboard/profile" class="button green glass">Profile Info</a></p>
								</div>
							</div><!-- /large-12 -->
							
						</div><!-- /row -->					
				    </div><!-- /large-4 -->
			    
			    </div><!-- /row -->
		    
			</div><!-- /large-12 -->
		
		</div><!-- /row -->
	</section><!-- /dashHome -->

<?php include("_footer.php"); ?>

</div><!-- fluid-column -->

</body>
</html>