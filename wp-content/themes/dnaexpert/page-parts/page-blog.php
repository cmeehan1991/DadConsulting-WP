<?php
/*
 * @package: DNA Expert
 * @subpackage: dnaexpert
 */
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <header class="page-blog__header">

            </header>
        </div>
        <div class="col-md-12">
            <?php
            $args = array('post_type' => 'DNA Blog');
            $loop = new WP_Query($args);
            if ($loop->have_posts()):
                while ($loop->have_posts()):$loop->the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>