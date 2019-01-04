<section id="products">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">Что заказывать будете?</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="svg-line text-center mb-5">
					<svg viewBox="0 0 132 10" preserveAspectRatio="none" focusable="false" class="_zdxht7" style="height: 15px;"><path fill="currentColor" d="M12.794 25.962c.166-.054.334-.106.5-.161-.083.03-.244.084-.513.168l.013-.007M131.946.954c-.248-.748-1.15-1.071-1.943-.916-.385.075-.774.123-1.163.176-.116.011-.232.025-.348.037-.287.03-.574.056-.862.082-1.376.124-2.755.215-4.135.293-3.69.21-7.385.339-11.079.448-8.249.245-16.502.375-24.755.47-7.757.092-15.514.157-23.27.228-9.215.084-18.43.129-27.647.093-10.137-.04-20.275-.12-30.413-.151-1.748-.006-3.495 0-5.242.048-1.465.04-1.442 1.864.009 1.931 5.371.25 10.763.271 16.145.34-3.689.563-7.376 1.175-11.012 1.942-1.28.27-3.437.499-4.225 1.587-.58.8.227 1.998 1.3 1.887 5.935-.613 11.88-1.223 17.843-1.582 5.288-.32 10.63-.445 15.908.074a46 46 0 0 1 7.44 1.355c1.9.511 2.756-2.002.826-2.554-4.66-1.331-9.644-1.717-14.51-1.784a115.74 115.74 0 0 0-5.024.045c.68-.116 1.36-.23 2.04-.347.827-.143 1.679-.262 2.51-.44l3.43.037c8.904.097 17.807.127 26.712.107 8.294-.02 16.59-.07 24.884-.153 8.078-.08 16.156-.194 24.231-.4 3.92-.1 7.841-.22 11.759-.406 2.792-.133 5.6-.266 8.37-.634.378-.05.754-.109 1.128-.182.787-.153 1.324-.932 1.093-1.63"></path></svg>
				</div>
			</div>
		</div>
		<div class="row">
			<?php 
        $custom_query = new WP_Query( array( 'post_type' => 'products', 'orderby' => 'menu_order' ) );
        if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
				<div class="col-md-4 mb-5">
					<div class="product">
						<div class="product-img mb-5">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" data-toggle="modal" data-target="#ProductModal<?php the_id(); ?>">
						</div>
						<div class="product-title text-center mb-3">
							<?php the_title(); ?>
						</div>
						<div class="product-price text-center mb-3">
							<?php echo rwmb_meta( 'meta-product-price' ); ?>
						</div>
						<div class="text-center">
							<div class="my-btn-black text-uppercase pointer">
								Заказать
							</div>
							<div class="my-btn-black text-uppercase pointer" data-toggle="modal" data-target="#ProductModal<?php the_id(); ?>">
								Подробнее
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>

<?php 
  $custom_query = new WP_Query( array( 'post_type' => 'products', 'orderby' => 'menu_order' ) );
  if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
	<!-- Product Modal -->
  <div class="modal fade" id="ProductModal<?php the_id(); ?>" tabindex="-1" role="dialog" aria-labelledby="ProductLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><?php the_title(); ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        	<p class="lead">
        		<?php the_content(); ?>
        	</p>
        </div>
        <div class="modal-footer">
        	<?php 
        		$files = rwmb_meta( 'meta-product-price-link', array( 'limit' => 1 ) );
						$file = reset( $files );
					?>
	        <a href="<?php echo $file['url']; ?>" class="btn btn-primary">Скачать полный прайс можно здесь</a>
	      </div>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>