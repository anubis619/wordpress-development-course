<?php
/**
 * Created by PhpStorm.
 * User: marius.voinescu
 * Date: 2/6/2019
 * Time: 1:12 PM
 */



    get_header();

    ?>

	<div class="page-banner">
		<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
		<div class="page-banner__content container container--narrow">
			<h1 class="page-banner__title"><?php the_archive_title(); ?></h1>
			<div class="page-banner__intro">
				<p><?php the_archive_description(); ?></p>
			</div>
		</div>
	</div>

	<div class="container container--narrow page-section">

		<?php

		while(have_posts()) {

			the_post(); ?>

			<div class="post-item">
				<h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
				<div class="metabox">
					<p>Posted by: <?php the_author_posts_link();?> on <?php the_time('d.M.Y'); ?> at <?php the_time('G:i');?> in <?php echo get_the_category_list(', ');?></p>

				</div>

				<div class="generic-content">
					<?php the_excerpt(); ?>
					<p><a class="btn btn--blue"  href="<?php echo the_permalink(); ?>">Read more &raquo; </a> </p>
				</div>
			</div>
			<?php

		}
		echo posts_nav_link();
		?>

	</div>
<?php


    get_footer();

?>