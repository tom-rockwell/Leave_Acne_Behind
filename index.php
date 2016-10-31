<?php
	$title = "Leave Acne Behind";
	$description = "Description goes here";
	$keywords = "Keywords go here";
	
	include("includes/page-top.php");
?>

<div id="container">

	<div id="content">
	
		<header class="home">
			
			<?php include("includes/nav.php"); ?>
			
			<div class="home-cta">
				<img src="assets/img/logos/leave-acne-behind.png" width="347" height="190" alt="Leave Acne Behind"/>
				<h1>Prevent the damage that can last a lifetime</h1>
				<h2>Learn about the physical and emotional consequences of acne and acne scarring.</h2>
				<a href="consequences-of-acne.php" class="button green">Learn More</a>
			</div>
			
		</header>
	
		<div id="home-signup">
			
			<h3>Stay informed about acne treatment</h3>
			<p>It’s good to stay informed about acne treatment and acne scarring.<br>
			Sign up now to receive important information as it becomes available.</p>
			<a href="#" class="button blue signup">Sign Up</a>
			
		</div>
		
		<div class="callouts">
			
			<div class="callout three">
				<?php include("includes/callouts/understanding.php"); ?>
			</div>
			<div class="callout three">
				<?php include("includes/callouts/treatment-options.php"); ?>
			</div>
			<div class="callout three">
				<?php include("includes/callouts/faq.php"); ?>
			</div>
		
		</div>
		
		<?php include("includes/footer.php"); ?>
	
	</div>

</div>

<?php
	include("includes/page-bottom.php");
?>