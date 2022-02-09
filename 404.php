<?php get_header(); ?>
<?php $theme_uri = get_template_directory_uri(); ?>

<main class="notfound">

    <div class="page_content">
        <div class="page_content__inner">
        <h1 class="nofound-maintitle">ページが見つかりません</h1>
             <!-- <?php the_content(); ?> -->
             <p class="nofound-centence">
             指定されたURLのページは存在しません。<br>
            サイト更新などによってURLが変更になったか、URLが正しく入力されていない可能性があります。
             </p>

             <div class="gototop-btn-wrapper">
                 <a href="<?php echo esc_url(home_url('')); ?>/" class="gototop-btn">TOPページへ戻る</a>
             </div>
             

        </div>
    </div>
</main>
<?php get_footer(); ?>