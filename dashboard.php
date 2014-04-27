<?php include("_head.php"); ?>

</head>

<body class="dash">

<div id="page">
	


<?php include("_topbar-navigation.php"); ?>



<section class="dashHeader">
	<div class="row">
		<div class="large-12 columns">
			<img class="profile left" width="100" height="100" src="http://www.gravatar.com/avatar/b96be315140d8ca5f50b03267673c155?s=100&amp;d=wavatar" title="2 Jack Dummy" alt="2 Jack Dummy" />
			<h1 class="profile left">Sammy Ryan Watkins<br/><small>Blue Mountains</small></h1>
		</div><!-- /12 columns-->
	</div><!-- /row -->    	
</section><!-- /dashHeader -->    	
	    	
<section class="dashContent">
	<div class="row">

		<div class="large-12 columns dashAlerts">

			<div id="snippet--flashMessages"></div>
		    
		    <div data-alert="" class="alert-box">
				<p>Rego is now open for the <strong>Autumn Comp</strong> starting in <strong>-16 days</strong>. Apply now to secure your spot <a href="/player/my-league/select-league" class="button">Sign-up Autumn Comp</a></p>
				<a href="#" class="close">×</a>
			</div>

		<div data-alert class="alert-box">
			Rego is now open for the <strong>Autumn Comp</strong> starting in <strong>-16 days</strong>. Apply now to secure your spot <a href="/player/my-league/select-league" class="button">Sign-up Autumn Comp</a>
			<a href="#" class="close">&times;</a>
		</div>
		 
		</div><!-- /large-12 -->

	</div><!-- row -->

	<div class="row collapse">
		<div class="large-12 columns">

			<ul class="dashPanel">
				<li class="grid-sizer"></li>
				<li class="item">
					<div class="playOverlay">
				   		<h3>Inbox</h3>
				    	<span class="">0</span>
						<p>You have 0 unread message in your inbox <a href="/player/inbox/" class="">InBox</a></p>
					</div>
				</li><!-- /item -->
				<li class="item">
					<div class="miniTable">
				   		<h3>Mini Results panel</h3>
				    	<span class="">0</span>
						<p>You have 0 unread message in your inbox <a href="/player/inbox/" class="">InBox</a></p>
					</div>
				</li><!-- /item -->
				<li class="item">
					<div class="inboxOverlay">
				   		<h3>Inbox</h3>
				    	<span class="mailCount">0</span>
						<p>You have 0 unread message in your inbox <a href="/player/inbox/" class="">InBox</a></p>
					</div>
				</li><!-- /item -->
				<li class="item">
					<div>
				   		<h3>Something else</h3>
						<p>This will be another section, maybe to update your profile, but it will need a button...</p>
					</div>
				</li><!-- /item -->
				<li class="item">
					<div>
				   		<h3>Current Credit: 345</h3>
					</div>
				</li><!-- /item -->
				<li class="item">
					<div>
				   		<h3>Connect FB</h3>
						<p>Connect your account with facebook and earn 215 round credits!</p>
					</div>
				</li><!-- /item -->
			</ul>
   
		</div><!-- /large-12 -->
	</div><!-- /row -->
</section><!-- /dashContent -->

<?php include("_footer.php"); ?>

</div><!-- fluid-column -->

<?php include("_sidebar.php"); ?>

<?php include("_getStarted.php"); ?>

<script type="text/javascript">
	var $container = $('.dashPanel');

	$container.isotope({
		itemSelector: '.item',
		masonry: { columnWidth: '.grid-sizer'}
	});
	$(window).on('resize', function(){
		$container.isotope('layout');
	});
</script>

</body>
</html>