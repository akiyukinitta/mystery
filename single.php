<?php if ( !defined( 'ABSPATH' ) ) exit; ?>
<?php get_header(); ?>

<main class="ly_main">
    <div class="bl_mv" id="voice"></div>
    <div class="ly_inner">
        <div class="ly_section">
            <div class="ly_section_inner">
                <div class="bl_cont">
                    <div class="bl_cont_head">
                        <div class="bl_voiceGrid ">
                            <span class="bl_voice_cat" id="voice04"><a href="#">悠々定住ライフ</a></span>
                            <h2 class="bl_cont_head_ttl"><?php the_title() ?></span></h2>
                        </div>
                    </div>
                    <div class="bl_cont_body">
                    <?php the_content(); ?>
                    </div>


                </div>
            </div>


        </div>
    </div>

</main>
<!-- /.main -->

<?php get_footer(); ?>