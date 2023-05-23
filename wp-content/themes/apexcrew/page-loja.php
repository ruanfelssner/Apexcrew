
<?php include("header.php");?>
<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">
        <a href="/categoria/pecas/"><img src="<?php echo get_stylesheet_directory_uri().'/img/banner-pecas.jpg'; ?>" class="w-100 h-auto" alt=""></a>
    </div>
    <div class="swiper-slide">
	<a href="/categoria/vestuario/camisetas/"><img src="<?php echo get_stylesheet_directory_uri().'/img/banner-peitas.jpg'; ?>" class="w-100 h-auto" alt=""></a>
    </div>
  </div>
  
  <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>

<div class="background-category mb-1 mb-md-5">
	<div class="container">
	<div class="header_title">
		<div class="container">
			<div class="row mb-3">
				<div class="col-12 text-left">
						<h1 class="woocommerce-products-header__title page-title">Lançamentos</h1>	
				</div>
			</div>
		</div>
	</div>
		<div class="row">
			<div class="col-12 overflow-hidden">
				<div class="produtos">
  					<div class="swiper-wrapper">

					  	<?php 
							$args = array('post_type' => 'product', 'posts_per_page' => 6, 'product_cat' => 'Lançamentos', 'orderby' => 'rand'); $loop = new WP_Query($args);
							while ($loop->have_posts()) : $loop->the_post(); global $product;
						?>
						<div class="swiper-slide text-center">
							<a href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
								<?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'mx-auto w-100 h-auto');
                    				else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" class="mx-auto w-100 h-auto />'; ?>
							<div class="title_new">
								<h2 class="woocommerce-loop-product__title"><?php the_title(); ?></h2>
							</div>
							
							<?php if ( $price = $product->get_price() ) : ?>
									<div class="price_new">
										<h2 class="price">R$<?php echo number_format($price,2,",",".");?></h2>
										<!-- <span class="parcelamento">3x de R$<?php echo number_format(($price/3),2,",","."); ?><br /> sem juros no cartão</span> -->
									</div>
									<?php endif; ?>
							</a>
						</div>
						<?php 
						endwhile;
						
						wp_reset_query();
						?>

  					</div><!--swiper-wrapper-->
						<div class="swiper-pagination"></div>
				</div><!--produtos -->
			</div><!-- col12 -->
		</div><!-- row -->
	</div><!-- container -->
</div><!--background-category -->



<div class="background-category mb-1 mb-md-5">
		<div class="container">
	<div class="header_title">
			<div class="row mb-3">
				<div class="col-12 text-left">
						<h1 class="woocommerce-products-header__title page-title">Camisetas</h1>	
				</div>
			</div>
		</div>
	</div>
	
<div class="container mb-1 mb-md-5">
	<div class="row">
		<div class="col-12 col-md-12">
			<a href="/categoria/vestuario/camisetas/"><img src="https://apexcrew.com.br/wp-content/themes/apexcrew/img/banner-peitas.jpg" class="img-fluid" alt=""></a>
		</div>
	</div>
</div>
	<div class="container">
		<div class="row">
			<div class="col-12 overflow-hidden">
				<div class="produtos">
  					<div class="swiper-wrapper">

					  	<?php 
							$args = array('post_type' => 'product', 'posts_per_page' => 6, 'product_cat' => 'Camisetas', 'orderby' => 'rand'); $loop = new WP_Query($args);
							while ($loop->have_posts()) : $loop->the_post(); global $product;
						?>
						<div class="swiper-slide text-center">
							<a href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
								<?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'mx-auto w-100 h-auto');
                    				else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" class="mx-auto w-100 h-auto />'; ?>
							<div class="title_new">
								<h2 class="woocommerce-loop-product__title"><?php the_title(); ?></h2>
							</div>
							<?php if ( $price = $product->get_price() ) : ?>
									<div class="price_new">
										<h2 class="price">R$<?php echo number_format($price,2,",",".");?></h2>
										<!-- <span class="parcelamento">3x de R$<?php echo number_format(($price/3),2,",","."); ?><br /> sem juros no cartão</span> -->
									</div>
									<?php endif; ?>
							</a>
						</div>
						<?php 
						endwhile;
						
						wp_reset_query();
						?>

  					</div><!--swiper-wrapper-->
						<div class="swiper-pagination"></div>
				</div><!--produtos -->
			</div><!-- col12 -->
		</div><!-- row -->
	</div><!-- container -->
</div><!--background-category -->

<div class=" background-category container mb-1 mb-md-5">
	<div class="row">
		<div class="col-12 col-md-6">		
			<a href="/categoria/adesivos/"><img src="<?php echo get_stylesheet_directory_uri().'/img/banner-adesivos.jpg'; ?>" class="img-fluid" alt=""></a>
		</div>
		<div class="col-12 col-md-6">	
			<a href="/categoria/chaveiros/"><img src="<?php echo get_stylesheet_directory_uri().'/img/banner-chaveiros.jpg'; ?>" class="img-fluid" alt=""></a>
		</div>
	</div>
</div>




<div class="background-category mb-1 mb-md-5">
	
	<div class="container mb-1 mb-md-5">
		<div class="row">
			<div class="col-12 col-md-12">				
				<a href="/categoria/marcas/fausto-drift/">
					<img src="<?php echo get_stylesheet_directory_uri().'/img/banner-faustodrift.jpg'; ?>" class="img-fluid d-none d-md-block" alt="">
					<img src="<?php echo get_stylesheet_directory_uri().'/img/loja-oficial-faustodrift.png'; ?>" class="img-fluid d-block d-md-none" alt="">
			</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 overflow-hidden">
				<div class="produtos">
  					<div class="swiper-wrapper">

					  	<?php 
							$args = array('post_type' => 'product', 'posts_per_page' => 6, 'product_cat' => 'Fausto Drift', 'orderby' => 'rand'); $loop = new WP_Query($args);
							while ($loop->have_posts()) : $loop->the_post(); global $product;
						?>
						<div class="swiper-slide text-center">
							<a href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
								<?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'mx-auto w-100 h-auto');
                    				else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" class="mx-auto w-100 h-auto />'; ?>
							<div class="title_new">
								<h2 class="woocommerce-loop-product__title"><?php the_title(); ?></h2>
							</div>
							
							<?php if ( $price = $product->get_price() ) : ?>
									<div class="price_new">
										<h2 class="price">R$<?php echo number_format($price,2,",",".");?></h2>
										<!-- <span class="parcelamento">3x de R$<?php echo number_format(($price/3),2,",","."); ?><br /> sem juros no cartão</span> -->
									</div>
									<?php endif; ?>
							</a>
						</div>
						<?php 
						endwhile;
						
						wp_reset_query();
						?>


  					</div><!--swiper-wrapper-->
						<div class="swiper-pagination"></div>
				</div><!--produtos -->
			</div><!-- col12 -->
		</div><!-- row -->
	</div><!-- container -->
</div><!--background-category -->


<div class="background-category mb-1 mb-md-5">
	
	<div class="container mb-1 mb-md-5">
		<div class="row">
			<div class="col-12 col-md-12">				
				<a href="/categoria/marcas/real-drift/">
					<img src="<?php echo get_stylesheet_directory_uri().'/img/banner-realdrift.jpg'; ?>" class="img-fluid d-none d-md-block" alt="">
					<img src="<?php echo get_stylesheet_directory_uri().'/img/loja-oficial-realdrift.png'; ?>" class="img-fluid d-block d-md-none" alt="">
			</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 overflow-hidden">
				<div class="produtos">
  					<div class="swiper-wrapper">

					  	<?php 
							$args = array('post_type' => 'product', 'posts_per_page' => 6, 'product_cat' => 'Real drift', 'orderby' => 'rand'); $loop = new WP_Query($args);
							while ($loop->have_posts()) : $loop->the_post(); global $product;
						?>
						<div class="swiper-slide text-center">
							<a href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
								<?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'mx-auto w-100 h-auto');
                    				else echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" class="mx-auto w-100 h-auto />'; ?>
							<div class="title_new">
								<h2 class="woocommerce-loop-product__title"><?php the_title(); ?></h2>
							</div>
							
							<?php if ( $price = $product->get_price() ) : ?>
									<div class="price_new">
										<h2 class="price">R$<?php echo number_format($price,2,",",".");?></h2>
										<!-- <span class="parcelamento">3x de R$<?php echo number_format(($price/3),2,",","."); ?><br /> sem juros no cartão</span> -->
									</div>
									<?php endif; ?>
							</a>
						</div>
						<?php 
						endwhile;
						
						wp_reset_query();
						?>


  					</div><!--swiper-wrapper-->
						<div class="swiper-pagination"></div>
				</div><!--produtos -->
			</div><!-- col12 -->
		</div><!-- row -->
	</div><!-- container -->
</div><!--background-category -->



<div class="container mb-1 mb-md-5 background-category">
			<div class="header_title mb-1 mb-md-5">
				<div class="col-12 text-left">
						<h1 class="woocommerce-products-header__title page-title">BLOG</h1>	
				</div>
			</div>
	<div class="row">
		<?php 
			$args = array('post_type' => '', 'posts_per_page' => 3); $loop = new WP_Query($args);
			while ($loop->have_posts()) : $loop->the_post(); global $product;
		?>
		<div class="col-12 col-md-4">
		<div class="card">
			<a href="<?php echo get_permalink($loop->post->ID) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
			<?php the_post_thumbnail('thumbnail', array('class' => 'card-img-top h-auto w-100')); ?>
			  	<div class="card-body">
			    	<h5 class="card-title"><?php the_title(); ?></h5>
			    	<p class="card-text"><?php echo  get_the_excerpt(); ?></p>
				</div>
			</a>
		</div>
		</div>
		<?php  endwhile; wp_reset_query(); ?>
	</div>
</div>

<script>
    const swiper = new Swiper('.swiper', { direction: 'horizontal', loop: true,
		autoplay: {
        delay: 5000,
        disableOnInteraction: true,
      }
	  ,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      } });
    const bannersProdutos = new Swiper('.produtos', { direction: 'horizontal', slidesPerView: 1, spaceBetween: 30,loop: true,
		breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 50,
        },
      } });
    </script>
<?php include("footer.php");?>