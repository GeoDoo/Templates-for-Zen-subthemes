<?php
/**
 * @file
 * Returns HTML for a region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728112
 */
?>
<?php if ($content): ?>
  <section class="<?php print $classes; ?>">
  	<div class="row">
	  	<div class="container">
	    	<?php print $content; ?>
	    </div>
    </div>
  </section>
<?php endif; ?>
