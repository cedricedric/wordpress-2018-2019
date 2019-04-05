<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="article">
        <header class="post_head" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
            <div class="article_head">
                <h3 class="post_title"><?php the_title(); ?></h3>
                <p>Publiè le <time datetime="c"><?php the_time(); ?></time> par <strong><?php the_author(); ?></strong></p>
            </div>
        </header>
        <div class="post_contenr">
            <?php the_content(); ?>
        </div>
        <footer class="post_footer">
            <a href="<?php the_permalink(); ?>" class="">Lire cet article</a>
        </footer>
    </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>


