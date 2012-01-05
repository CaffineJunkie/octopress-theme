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
            <!--p class="meta">
 <a class="basic-alignment left" href="/2011/12/02/add-flickr-aside-to-octopress/" title="Previous Post: 为 Octopress 添加 Flickr 边栏插件">为 Octopress 添加 Flickr 边栏插件</a>
 <a class="basic-alignment right" href="/2011/12/21/octopress-on-server-and-portable-scheme/" title="next Post: 服务器端 Octopress 搭建及移动方案">服务器端 Octopress 搭建及移动方案 &raquo;</a>
                </p-->
        </footer>
    </article>

    <?php endwhile; else: ?>
    <article class="hentry" role="article">
        <?php _e('Sorry, no posts matched your criteria.'); ?>
    </article>
    <?php endif; ?>
</div>

<?php get_sidebar();?>

<?php get_footer();?>