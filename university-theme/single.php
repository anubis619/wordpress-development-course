<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 2/4/2019
 * Time: 9:59 AM
 */
?>
<?php

    get_header();

    while(have_posts()){
	the_post(); ?>

	<h2><?php the_title(); ?></h2>
	<?php  the_content(); ?>
	<?php
}

    get_footer();

?>