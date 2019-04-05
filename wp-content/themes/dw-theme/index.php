<?php get_header(); ?>
<h2>Mes derniers articles</h2>
<div class="archive">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> // demander la lecture
    <article class="post">
        <div class="post_body">
            <header class="post_head">
                <h3 class="post_title"><?php the_title(); ?></h3>
                <p>Publiè le <time datetime="c"><?php the_time(); ?></time> par <strong><?php the_author(); ?></strong></p>
            </header>
            <div class="post_contenr">
                <?php the_excerpt(); ?>
            </div>
            <footer class="post_footer">
                <a href="<?php the_permalink(); ?>" class="">Lire cet article</a>
            </footer>
            <figure class="post_thumb">
                <?php if(has_post_thumbnail() ): ?>
                <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="" class="post_img">
                <?php else: ?>
                <div class="post_noimg">&nbsp</div>
                <?php endif; ?>
            </figure>
        </div>
    </article>
    <?php endwhile; else : ?>
        <p class="empty"> Désoler les gars</p>
    <?php endif; ?>
    <small>Ne copiez pas mon site svp.</small>

</div>
<?php get_footer(); ?>

