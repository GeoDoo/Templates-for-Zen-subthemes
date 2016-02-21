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
			    <footer id="footer">
				    <?php print $content; ?>
			    </footer>
		    </div>
	    </div>
    </section>
<?php endif; ?>
