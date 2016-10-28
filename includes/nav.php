<?php

	$consequences = "";
	if ($thisPage == "consequences") {
		$consequences = "class=\"active\"";
	}
	$understanding = "";
	if ($thisPage == "understanding") {
		$understanding = "class=\"active\"";
	}
	$options = "";
	if ($thisPage == "options") {
		$options = "class=\"active\"";
	}
	$faq = "";
	if ($thisPage == "faq") {
		$faq = "class=\"active\"";
	}

?>

			<nav>
				<a href="index.php" id="home-link">&nbsp;</a>
				<ul>
					<li><a href="consequences-of-acne.php" <?php echo $consequences; ?>>Consequences of Acne</a></li>
					<li><a href="understanding-acne.php" <?php echo $understanding; ?>>Understanding Acne</a></li>
					<li><a href="treatment-options.php" <?php echo $options; ?>>Treatment Options</a></li>
					<li><a href="faq.php" <?php echo $faq; ?>>FAQ</a></li>
					<li>|</li>
					<li class="less-right">Share:</li>
					<a href="#"><img src="assets/img/icons/facebook.png" width="8" height="13" alt="Facebook"/></a>
					<a href="#"><img src="assets/img/icons/twitter.png" width="18" height="13" alt="Twitter"/></a>
					<a href="#"><img src="assets/img/icons/email.png" width="20" height="13" alt="Email"/></a>
				</ul>
			</nav>