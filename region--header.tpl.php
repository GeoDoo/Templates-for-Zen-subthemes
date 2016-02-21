<?php
/**
 * @file
 * Returns the HTML for the footer region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728140
 */
?>
<?php if ($content): ?>
	<section class="<?php print $classes; ?>">
	  	<div class="row">
		  	<div class="container">
				<header class="header" id="header" role="banner">
			    	<?php print $content; ?>
				</header>
			</div>
	    </div>
	</section>
<?php endif; ?>
