<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); 

$cate = get_queried_object();
$cateID = $cate->term_id;
$classes = "";

if($cateID == 136){ // realdrift
	$classes = "realdrift_page";
}

if($cateID == 233){ // realdrift
	$classes = "fausto_drift";
}

?>
<div class="background-category <?=$classes?>">	
<?php if ( have_posts() ) : ?>
	<div class="header_title">
		<div class="container">
			<div class="row mb-3">
				<div class="col-12 text-left">
					<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
						<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>	
					<?php endif; ?>
					<?php do_action( 'woocommerce_archive_description' );?>
				</div>
				<div class="col-12 d-none banners_real">					
					<img src="<?php echo get_stylesheet_directory_uri().'/img/banner-realdrift.jpg'; ?>" class="img-fluid d-none d-md-block" alt="">
					<img src="<?php echo get_stylesheet_directory_uri().'/img/loja-oficial-realdrift.png'; ?>" class="img-fluid d-block d-md-none" alt="">
				</div>
				<div class="col-12 d-none banners_fausto">					
					<img src="<?php echo get_stylesheet_directory_uri().'/img/banner-faustodrift.jpg'; ?>" class="img-fluid d-none d-md-block" alt="">
					<img src="<?php echo get_stylesheet_directory_uri().'/img/loja-oficial-faustodrift.png'; ?>" class="img-fluid d-block d-md-none" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid d-block d-lg-none">
    <div class="row">
        <div class="col-12 text-center">
            <div class="produtos">
                <div class="swiper-wrapper">
				<?php 
							$term = get_queried_object();
							$args = array('post_type' => 'product', 'posts_per_page' => 18, 'product_cat' => $term->slug, 'orderby' => 'DESC'); $loop = new WP_Query($args);
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
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container d-none d-lg-block">
		<div class="row products">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="product col-12 col-sm-6 col-lg-3 col-xl-3 mb-5">
					<?php
					do_action('woocommerce_before_shop_loop_item');
					do_action('woocommerce_before_shop_loop_item_title');	
					?>
					<div class="row">
						<div class="col-12 text-center">
							<div class="title_new">
								<?php  do_action('woocommerce_shop_loop_item_title'); ?>
							</div>
						</div>
						<div class="col-12 text-center">
							<?php global $product; if ( $price = $product->get_price() ) : ?>
							<div class="price_new">
								<h2 class="price">R$<?php echo number_format($price,2,",",".");?></h2>
								<!-- <span class="parcelamento">3x de R$<?php echo number_format(($price/3),2,",","."); ?><br /> sem juros no cartão</span> -->
							</div>
							<?php endif; ?>
						</div>
					</div>
					<?php do_action('woocommerce_after_shop_loop_item'); ?>					
				</div>
			<?php endwhile; // end of the loop. ?>
		</div>
		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
		<?php do_action( 'woocommerce_no_products_found' ); ?>
		<?php endif; ?>
		<?php do_action( 'woocommerce_after_main_content' ); ?>
    </div>
</div>
<script>
    const bannersProdutos = new Swiper('.produtos', { direction: 'horizontal', slidesPerView: 1, spaceBetween: 30,loop: true,
		autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
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
<?php get_footer( 'shop' ); ?>

