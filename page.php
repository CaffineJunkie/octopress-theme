<?php get_header(); ?>
<div>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="hentry" role="article">

        <header>
            <h1 class="entry-title"><?php the_title();?></h1>
            <p class="meta">
                <time datetime="<?php echo date('c', get_the_time('G')); ?>" pubdate data-updated="true"><?php the_time('F jS, Y') ?></time>
                | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
            </p>
        </header>

        <div class="entry-content">
            <?php the_content();?>
        </div>

        <footer>
            <p class="meta">
                <span class="byline author vcard">Posted by <span class="fn"><?php the_author();?></span></span>
                <time datetime="<?php echo date('c', get_the_time('G')); ?>" pubdate data-updated="true"><?php the_time('F jS, Y') ?></time>
            </p>
            <p class="meta sharing">
                <span class="basic-alignment left"><?php previous_post_link('上一篇： %link'); ?></span>
                <span class="basic-alignment left"><?php next_post_link('下一篇： %link'); ?></span>
            </p>
        </footer>
    </article>

    <section>
        <?php comments_template( '', true ); ?>
    </section>

    <?php endwhile; else: ?>
    <article class="hentry" role="article">
        <?php _e('Sorry, no posts matched your criteria.'); ?>
    </article>
    <?php endif; ?>
</div>

<?php get_sidebar();?>

<?php get_footer();?>