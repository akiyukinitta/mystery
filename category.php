<?php if ( !defined( 'ABSPATH' ) ) exit; ?>
<?php get_header(); ?>

<?php
$page = get_post( get_the_ID() );
$slug = $page->post_name;
?>
<main class="ly_main">
    <div class="bl_mv" id="<?php echo $slug; ?>"><h1 class="bl_mv_ttl"><?php the_title() ?></h1></div>
    <div class="ly_inner">

    <div class="ly_section">
            <div class="ly_section_inner">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
            </div>
        </div>

        <div class="ly_section">
            <div class="ly_section_inner">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>
<!-- /.main -->

<?php get_footer(); ?>