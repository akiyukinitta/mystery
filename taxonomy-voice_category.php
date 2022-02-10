





<?php if ( !defined( 'ABSPATH' ) ) exit; ?>
<?php get_header(); ?>

<main class="ly_main">
    <div class="bl_mv" id="voice"></div>
    <section class="ly_section">
        <div class="ly_section_inner">
            <div class="bl_cont">
                <div class="bl_breadcrumb">
                    <ul class="bl_breadcrumb_list">
                        <li class="bl_breadcrumb_item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://test05.j-cool.co.jp/harumigaoka-test/">HOME</a></li>
                        <li class="bl_breadcrumb_item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://test05.j-cool.co.jp/harumigaoka-test/ownersvoice/" itemprop="url">オーナーズボイス</a></li>
						<li class="bl_breadcrumb_item" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="#" itemprop="url"><?php the_terms($post->ID, 'voice_category'); ?></a></li>
                    </ul>
                </div>
                <div class="bl_cont_head js_fadeIn">
                    <h2 class="bl_cont_head_ttl"><?php the_terms($post->ID, 'voice_category'); ?></h2>
                </div>
                <div class="bl_cont_body">
                    <div class="bl_cont_body_lowerContainer">

                    <ul class="bl_grid bl_voice_catList">
                            <?php // get_terms を使ったターム一覧の表示
                                $taxonomy_terms = get_terms('voice_category'); // タクソノミースラッグを指定
                                if(!empty($taxonomy_terms)&&!is_wp_error($taxonomy_terms)){
                                    foreach($taxonomy_terms as $taxonomy_term): // foreach ループの開始
                            ?>
                            <li class="bl_voice_catItem js_fadeIn">
                                <a href="<?php echo get_term_link($taxonomy_term); ?>" id="<?php echo($taxonomy_term->slug) ?>"
                                    class="bl_voice_cat<?php if($taxonomy_term->slug === $term){ echo ' current'; } ?>"
                                    data-filter="<?php echo($taxonomy_term->slug) ?>"
                                    role="button"><?php echo $taxonomy_term->name; ?>
                                </a>
                            </li>
                            <?php
                            endforeach; // foreach ループの終了
                                }
                            ?>
                        </ul>
                   
					<ul class="bl_grid js-tab-boxes">

                            <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>


                            <li class="bl_grid_item -column3 js_fadeIn"
                                data-category="<?php $terms = wp_get_object_terms($post->ID,'voice_category'); foreach($terms as $term){echo $term->slug . '';} ?>">
                                <div class="un_voice">
                                    <div class="el_imgWrapper">
                                        <a href="<?php the_permalink(); ?>" class="bl_grid_item_reverse">
                                            <?php the_post_thumbnail(); ?>
                                        </a>
                                        <span class="bl_grid_item_voiceCat"
                                            id="<?php $terms = wp_get_object_terms($post->ID,'voice_category'); foreach($terms as $term){echo $term->slug . '';} ?>"><?php the_terms($post->ID, 'voice_category'); ?></span>
                                    </div>
                                </div>
                                <h3 class="bl_grid_item_ttl -ellipsisTtl"><?php the_title() ?></h3>
                            </li>

                            <?php endwhile; ?>

                            <?php else : ?>


                            <?php endif; ?>

                        </ul>

                        
                        <div class="bl_pagenation">
                            <?php if( function_exists("the_pagination") ) the_pagination(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- /.main -->

<?php get_footer(); ?>
