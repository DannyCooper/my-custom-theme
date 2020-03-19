<?php
/**
 * The sidebar template part.
 *
 * @copyright  Copyright (c) 2020, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
	<ul class="sidebar">
	    <?php dynamic_sidebar('sidebar-1' ); ?>
	</ul>
<?php } 
