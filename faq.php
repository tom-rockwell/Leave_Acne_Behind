<?php
	$title = "Frequently Asked Questions";
	$description = "Description goes here";
	$keywords = "Keywords go here";
	
	$thisPage = "faq";
	
	include("includes/page-top.php");
?>

<div id="container">

	<div id="content">
	
		<header class="faq">
			
			<?php include("includes/nav.php"); ?>
			
			<div class="black-bar">
				<p class="blue">acne & scarring</p>
				<p class="line1">Frequently asked questions about</p>
			</div>
						
		</header>
	
		<div class="main">
			
			<ol>
			<li>Does sweating make acne worse?</li>
			<p>Perspiration may make acne worse, especially when wearing a hat or helmet. Wash skin soon after
			sweating, if possible.</p>
			
			<li>Does touching my face affect my acne?</li>
			<p>Yes, touching your skin can cause acne flare-ups, so try not to do it. In addition, picking at, popping, or
			squeezing your acne may make it last longer and could cause scarring.</p>
			
			<li>Should I wash my face with a washcloth?</li>
			<p>Using a washcloth or sponge can irritate skin with acne. Apply a gentle, nonabrasive cleanser with your
			fingertips instead. Scrubbing your face does not help and may only make acne worse.</p>
			
			<li>Is tanning helpful or harmful for my acne?</li> 
			<p>Tanning is damaging to your skin, whether from sunbathing or tanning beds. Also, some acne
			medications make your skin sensitive to sunlight, so avoid tanning.</p>
			
			<li>Can makeup cause acne or make it worse?</li> 
			<p>Some types of makeup can make acne worse, though not in everyone. When using makeup, choose
			water-based, non-comedogenic (does not clog pores) products, and apply them lightly to your skin.
			Always be sure to wash off makeup at the end of the day.</p>
			
			<li>If I don’t treat my acne, will I get permanent scars?</li>
			<p>Acne causes injury to the skin, and scarring, like any other skin injury, is part of the wound healing
			process. Because waiting to treat severe acne can cause permanent scarring, the quicker acne is
			treated, the better.</p>
			
			<li>Why is acne more common in teenagers?</li>
			<p>When teenagers hit puberty, they have a surge in hormones. Some of these hormones cause the oil
			glands in the skin to get bigger and make more oil. As pores become blocked and clog, bacteria start
			to build up and acne results.</p>
			
			<li>Can what I eat cause acne?</li>
			<p>Generally, no. The primary cause of acne is not diet but rather the fluctuations of hormones.</p>
			
			<li>How does isotretinoin work?</li>
			<p>Isotretinoin reduces the amount of sebum the skin produces, shrinking the oil glands. When the body makes less sebum, fewer bacteria grow, and the pores have less chance of clogging and forming acne lesions. At the same time, isotretinoin helps the body shed dead skin cells, which also cause pores to clog.</p>
			
			<li>Should I eat a high-fat meal when taking isotretinoin?</li>
			<p>For optimal absorption, most isotretinoin therapies are taken with a high-fat meal with each dose. Talk to your health care provider regarding any dietary concerns.</p>
			</ol>
			
			
			<div id="print-list">
				<p>Print out a <a href="list-of-questions.php" target="_blank">list of questions</a> you may want to ask your dermatology health care provider</p>
			</div>
			
			<div id="resources">			
				<h6>For additional resources, please visit the following websites:</h6>
				<p><a href="#" class="exit" data-url="https://www.aad.org/">American Academy of Dermatology &gt;</a></p>
				<p><a href="#" class="exit" data-url="https://acneandrosacea.org/">American Acne and Rosacea Society &gt;</a></p>
				<p><a href="#" class="exit" data-url="http://www.theclearskinproject.com/">The Clear Skin Project &gt;</a></p>
				<p><a href="#" class="exit" data-url="http://www.dermpa.org/">Society of Dermatology Physician Assistants &gt;</a></p>
			</div>
			
			
			
			<hr class="no-subheader" />

			<?php include("includes/ask-your-doctor.php"); ?>

			
		</div>


		<div class="callouts sub">
			
			<div class="callout four">
				<?php include("includes/callouts/sign-up.php"); ?>
			</div>
			<div class="callout four">
				<?php include("includes/callouts/consequences.php"); ?>
			</div>
			<div class="callout four">
				<?php include("includes/callouts/understanding.php"); ?>
			</div>
			<div class="callout four">
				<?php include("includes/callouts/treatment-options.php"); ?>
			</div>
		
		</div>
		<div class="clearfix"></div>


		<?php include("includes/footer.php"); ?>
	
	</div>

</div>

<?php
	include("includes/page-bottom.php");
?>