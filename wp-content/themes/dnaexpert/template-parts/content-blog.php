<?php
/*
 * @package: DNA Expert
 * @subpackage: dnaexpert
 */
?>

<article class="main-article">
    <div class="col-md-12">
        <header class="main-article__header" align="center">
            <h1><?php the_title(); ?></h1>
        </header>
    </div>
    <div class="col-md-8">
        <div class="main-article__body">
            <?php if (has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url('medium_large'); ?>"/>
            <?php endif; ?>
            <?php the_content(); ?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="main-article__related-articles">
            <?php
            $args = array('posts_per_page' => '10','post_type'=>'DNA Blog');
            $loop = new WP_Query($args);
            if ($loop->have_posts()):
                ?> 
                <ul class="related">
                    <li>Related Articles</li>
                    <?php while ($loop->have_posts()):$loop->the_post(); ?>
                        <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-md-12">
        <div class="main-article__comments">
            <?php comments_template(); ?>
        </div>
    </div>
</article>

