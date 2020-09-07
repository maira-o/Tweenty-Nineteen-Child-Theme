<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null; ?>

<?php if ( ! is_page() ) : ?>
<div class="entry-meta">

</div><!-- .entry-meta -->
<?php endif; ?>
