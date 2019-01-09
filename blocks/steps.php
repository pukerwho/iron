<section id="steps">
	<div class="container">
		<div class="row mb-3">
			<div class="col-md-12">
				<h2 class="text-center">6 простых шагов</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="svg-line text-center mb-5">
					<svg viewBox="0 0 77 6" preserveAspectRatio="none" focusable="false" class="_zdxht7" style="height: 15px;"><path fill="currentColor" d="M76.223 1.027c-9.794.058-19.587.024-29.38-.074C37.049.856 27.257.686 17.466.446 11.952.311 6.439.141.926 0-.317-.03-.302 1.765.933 1.81c9.786.362 19.58.54 29.372.672 3.622.048 7.245.083 10.868.108a937.013 937.013 0 0 0-27.007 2.077c-.893.082-.901 1.41.005 1.33a936.8 936.8 0 0 1 24.14-1.854 890.681 890.681 0 0 1 24.285-1.21c4.544-.164 9.088-.296 13.633-.395 1.03-.022 1.028-1.517-.006-1.51"></path></svg>
				</div>
			</div>
		</div>
		<!-- PC VERSION -->
		<div class="pc-show">
			<div class="row">
				<?php 
	        $custom_query = new WP_Query( array( 'post_type' => 'steps', 'orderby' => 'menu_order' ) );
	        if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
	        <div class="col-md-4">
	        	<div class="step-card mb-5" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover;">
	      			<div class="step-bg"></div>
	      			<div class="step-top d-flex mb-3">
	      				<div class="step-icon mr-3">
	      					<?php echo rwmb_meta( 'meta-step-icon' ); ?>
	      				</div>
	      				<div class="step-number">
	      					<?php echo rwmb_meta( 'meta-step-number' ); ?>
	      				</div>
	      			</div>
	      			<div class="step-title mb-3">
	      				<?php the_title(); ?>	
	      			</div>
	      			<div class="step-content lead">
	      				<?php the_content(); ?>
	      			</div>
	      		</div>
	        </div>
				<?php endwhile; endif; ?>
			</div>
		</div>
		<!-- MOBILE VERSION -->
		<div class="row mobile-show">
			<div class="col-md-12">
				<div class="swiper-container swiper-steps">
			    <div class="swiper-wrapper mb-5">
			    	<?php 
	          $custom_query = new WP_Query( array( 'post_type' => 'steps', 'orderby' => 'menu_order' ) );
	          if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
	          	<div class="swiper-slide">
	          		<div class="step-card mb-5" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover;">
	          			<div class="step-bg"></div>
	          			<div class="step-top d-flex mb-3">
	          				<div class="step-icon mr-3">
	          					<?php echo rwmb_meta( 'meta-step-icon' ); ?>
	          				</div>
	          				<div class="step-number">
	          					<?php echo rwmb_meta( 'meta-step-number' ); ?>
	          				</div>
	          			</div>
	          			<div class="step-title mb-3">
	          				<?php the_title(); ?>	
	          			</div>
	          			<div class="step-content lead">
	          				<?php the_content(); ?>
	          			</div>
	          		</div>
	          	</div>
	          <?php endwhile; endif; ?>
			    </div>
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>
			  </div>
			</div>
		</div>
	</div>
</section>