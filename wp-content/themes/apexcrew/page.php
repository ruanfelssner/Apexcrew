<?php include("header.php"); 
?>
<div class="container conteudoGeral">
    <div class="row py-3">
        <div class="col-12">
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <h1 class="lancamentos">
            <?php 
            echo $wp_query->post->post_title;           
            ?>
            </h1>
                <?php the_content(); ?>
            <?php endwhile; ?> 
        </div>
    </div>
</div>
<?php include("footer.php"); ?>