<?php
/*
 * @package: DNA Expert
 * @subpackage: dnaexpert
 */
get_header();
?>
<div class="main">
    <?php $args = array('post_type'=>'DNA Blog');
    $loop = new WP_Query($args);
    if($loop->have_posts()):
        while($loop->have_posts()):$loop->the_post();
            get_template_part('template-parts/content','blog');
        endwhile;
    endif;
    ?>
</div>
<?php get_footer();
