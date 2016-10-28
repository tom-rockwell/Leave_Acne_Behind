<?php
	$title = "Understanding Acne";
	$description = "Description goes here";
	$keywords = "Keywords go here";
	
	$thisPage = "options";
	
	include("includes/page-top.php");
?>

<div id="container">

	<div id="content">
	
		<header class="options">
			
			<?php include("includes/nav.php"); ?>
			
			<div class="black-bar">
				<p class="line1">Options for treating your</p>
				<p class="blue">acne</p>
			</div>
						
		</header>
	
		<div class="main">
			
			<h1>You <em>can</em> make a difference in your appearance</h1>
			<hr class="no-subheader" />
			
			<figure style="margin-bottom: 75px;">
				<img src="assets/img/figures/medicines.jpg" alt=""/>
			</figure>
			<div class="fig-description">
				<p class="top">For mild forms of acne, over-the-counter (OTC)
products may be suitable.</p>
				<p>These include</p>
				<ul>
					<li>Gentle cleansers</li>
					<li>Benzoyl peroxide</li>
					<li>Products containing sulfur, resorcinol, or salicylic acid</li>
				</ul>
				<p>Many people with acne try various OTC products.  If they don’t work, the best course of action is to see your dermatology health care provider.</p>
			</div>
			<div class="clearfix"></div>
			
			
			<figure style="margin-bottom: 75px;">
				<img src="assets/img/figures/pharmacist.jpg" alt=""/>
			</figure>
			<div class="fig-description">
				<p class="top">In less severe cases, a dermatology health care provider may prescribe a topical retinoid, which
is a liquid that you can put on your skin. This is often used in combination with an oral antibiotic and an antimicrobial agent, such as benzoyl peroxide.</p>
				<p>For severe recalcitrant nodular acne, however, your dermatology health care provider may prescribe a retinoid called isotretinoin, which is taken by mouth. Isotretinoin is considered the treatment standard for severe recalcitrant nodular acne</p>
			</div>
			<div class="clearfix"></div>
			
		</div>
		
		<div class="sub-header options">
			<div class="black-bar">
				<p class="line1">About isotretinoin for<br>severe recalcitrant nodular</p>
				<p class="blue">acne</p>
			</div>
		</div>
		
		<div class="main">
		
			<figure>
				<img src="assets/img/figures/effects-on-pimple.jpg" alt=""/>
				<figcaption>Severe recalcitrant nodular acne</figcaption>
			</figure>
			<div class="fig-description">
				<p class="top">Isotretinoin, a drug that treats acne where it starts, has been used in the United States since 1982. Isotretinoin reduces the amount of sebum the skin produces, shrinking the oil glands. When the body makes less sebum, fewer bacteria grow and the pores have less chance of clogging and forming acne. At the same time, isotretinoin helps the body shed dead skin cells, which also cause pores to clog.</p>
			</div>
			<div class="clearfix"></div>
			
			
			<figure style="margin-bottom: 40px;">
				<img src="assets/img/figures/long-term-remission.jpg" alt=""/>
			</figure>
			<div class="fig-description">
				<p class="top">Isotretinoin has been effective in producing long-term remission and significant improvement of acne. Many people who use isotretinoin will be free of acne after 4 to 6 months of treatment. For optimal absorption, most isotretinoin therapies need to be taken with a high-fat meal with each dose.</p>
			</div>
			<div class="clearfix"></div>
			
			
			<div class="isi">
				<h5>IMPORTANT SAFETY INFORMATION ABOUT ISOTRETINOIN THERAPIES</h5>
				
				<p>Isotretinoin must not be used by female patients who are or may become pregnant. There is an
				extremely high risk that severe birth defects will result if pregnancy occurs while taking isotretinoin in
				any amount, even for a short period of time. Potentially any fetus exposed during pregnancy can be
				affected. There are no accurate means of determining whether an exposed fetus has been affected.
				Because of this toxicity, isotretinoin can only be marketed under a special restricted distribution
				program. This program is called iPLEDGE™. Under this program, prescribers must be registered and
				activated with the iPLEDGE Program and can prescribe isotretinoin only to registered patients who
				meet all the requirements of iPLEDGE. Isotretinoin can be dispensed only by a pharmacy registered
				and activated with iPLEDGE. Registered and activated pharmacies can only receive isotretinoin from
				wholesalers registered with iPLEDGE.</p> 
				
				<p>Patients on isotretinoin have been known to become depressed or to develop other serious mental
				health problems. Some people have had thoughts of hurting themselves or putting an end to their
				own lives. Some people tried to end their own lives and some have ended their own lives. There have
				been reports that people on isotretinoin were aggressive or violent. No one knows if isotretinoin
				caused these problems or behaviors or if they would have happened even if the person did not
				take isotretinoin.</p>
				
				<p>Isotretinoin use has been associated with pseudotumor cerebri, a condition caused by increased
				pressure on the brain. This condition may occur more often in patients also taking tetracycline. Patients
				should be aware of other serious side effects, including problems with the skin, pancreas, liver,
				stomach, bones, muscles, hearing, vision, lipids, allergic reactions, blood sugar, or red and white blood
				cells. The most common, less serious adverse events include dry skin, chapped lips, dry eyes, and dry
				nose that may lead to nosebleeds. Patients should be advised about these adverse events and
				routinely monitored by a doctor during treatment with isotretinoin.</p>
				
				<p>Please refer to the isotretinoin package inserts for full prescribing and dispensing instructions.</p>
				
				<p>For more information, visit <a href="http://www.ipledgeprogram.com">ipledgeprogram.com</a>.</p>
			</div>
			
			<hr class="no-subheader" />

			<?php include("includes/talk-to-your-derm.php"); ?>
			<p class="footnote pledge">iPLEDGE is a registered trademark of McKesson Specialty Arizona, Inc.</p>

			
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
				<?php include("includes/callouts/faq.php"); ?>
			</div>
		
		</div>
		<div class="clearfix"></div>


		<?php include("includes/footer.php"); ?>
	
	</div>

</div>

</body>
</html>