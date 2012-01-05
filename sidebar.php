<aside class="sidebar">

    <!--section>
        <h1>Random Posts</h1>

        <ul id="recent_posts">
            <?php
    $rand_posts = get_posts('numberposts=10&orderby=rand');
    foreach( $rand_posts as $post ) :?>
                <li class="post"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
                <?php endforeach; ?>
        </ul>
    </section-->

    <section>
        <h1>Categories</h1>

        <ul id="category">
            <?php wp_list_categories('show_count=1&title_li='); ?>
        </ul>
    </section>

    <!--section>
        <h1>Archives</h1>

        <ul id="archive">
            <?php wp_get_archives( 'type=monthly&show_post_count=1' ); ?>
        </ul>
    </section-->

</aside><!-- sidebar -->