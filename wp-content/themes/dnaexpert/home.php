<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

get_header();
?>

<div class="main__home">
    <div class="container-fluid">
        <div class="col-md-4">
            <div class="main__recent-stories">
                <ul class="recent-stories">
                    <li>Recent Posts</li>
                    <?php
                    $recentPostsArgs = array('post_type' => 'DNA Blog', 'posts_per_page' => '10');
                    $recentPostsLoop = new WP_Query($recentPostsArgs);
                    if ($recentPostsLoop->have_posts()):
                        while ($recentPostsLoop->have_posts()):$recentPostsLoop->the_post();
                            ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <header class="main__top-story" align="center">
                <?php
                // Check to see if there is a new "Top Story" DNA Blog. If there is display it at the top of the page. Otherwise display the default banner.
                $args = array('post_type' => 'DNA Blog', 'posts_per_page' => '1', 'category_name' => 'Top Story');
                $loop = new WP_Query($args);
                if ($loop->have_posts()):
                    while ($loop->have_posts()):$loop->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <h1><?php the_title(); ?></h1>
                            <img src="<?php the_post_thumbnail_url(); ?>" width="100%" alt="<?php the_title(); ?>"/>
                            <h4><?php the_excerpt(); ?></h4>
                        </a>
                        <?php
                    endwhile;
                else:
                    ?>

                <?php endif;
                ?>
            </header>
        </div>
        <div class="col-md-12">
            <div class="main__body">
                <div class="col-md-4" align="center">
                    <a href="<?php bloginfo('url'); ?>/services/">
                        <h2>Services</h2>
                        <img src="<?php bloginfo('template_directory'); ?>/images/court_discovery.jpg" alt="Discovery"/>
                    </a>
                </div>
                <div class="col-md-4" align="center">
                    <a href="<?php bloginfo('url'); ?>/blog/">
                        <h2>Blog</h2>
                        <img src="<?php bloginfo('template_directory'); ?>/images/blog.jpg" alt="Blog"/>
                    </a>
                </div>
                <div class="col-md-4" align="center">
                    <a href="<?php bloginfo('url'); ?>/resources/">
                        <h2>Resources</h2>
                        <img src="<?php bloginfo('template_directory'); ?>/images/resources.jpg" alt="Resources"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();

