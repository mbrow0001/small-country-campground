<?php
	// Posts are found
	if ( $posts->have_posts() ) {
		while ( $posts->have_posts() ) :
			$posts->the_post();
			global $post;
			?>

			<article class="item">
			  <a href="<?php the_permalink(); ?>" class="blog__img" style="background-image: url(/wp-content/uploads/2016/12/IMG_0770.jpg)" alt="">
			    <div class="shadow"></div>      
			    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
			  </a>
			  <div class="blog__detail">
			    <p class="date">January 10th, 2017</p>
			    <h4 class="blog__title">
			    	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			    </h4>
				<?php the_excerpt(); ?>                      
			  </div>
			</article>

				<?php
			endwhile;
		}
		// Posts not found
		else {
			echo '<h4>' . __( 'Posts not found', 'shortcodes-ultimate' ) . '</h4>';
		}
	?>