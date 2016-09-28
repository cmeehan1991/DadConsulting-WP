<?php
/*
 * @package: DNA Expert
 * @subpackage: dnaexpert
 */
get_header();
?>

<div class="page">
    <!--Get the template part by the page type-->
    <?php
    get_template_part('page-parts/page', get_query_var('pagename'));
    ?>
</div>
<?php
get_footer();
