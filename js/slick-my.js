
          


  $(function () {
    $(".un_topSlider")
      .on("init", function (event, slick) {
        $(this).append('<div class="slick-num"><span class="slick_nowCount"></span><span class="slick_allCount"></span></div>');
        // $(this).append('<div class="slick-num"><span class="slick_nowCount"></span> <span class="slick_nowCountBar"></span> <span class="slick_allCount"></span></div>');
        $(".slick_nowCount").text(slick.currentSlide + 1); // 現在のスライド番号(+1が無いと0からスタートしてしまう)
        $(".slick_allCount").text(slick.slideCount); // スライドの総数
        $(".next.slick-arrow").append('<svg xmlns="http://www.w3.org/2000/svg" width="116" height="116" viewBox="0 0 116 116"style="" class="bl_viewMore_btnCircleBg"><circle cx="58" cy="58" r="56" /></svg><svg xmlns="http://www.w3.org/2000/svg" width="116" height="116" viewBox="0 0 116 116"style="" class="bl_viewMore_btnCircle"><circle cx="58" cy="58" r="56" /></svg>');})
      .slick({
        // 通常のスライダー同様、オプションを記入
        autoplay:true,
        autoplaySpeed: 3000,
        speed: 1000,
        arrows: true,
        // centerMode: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        slidesToShow: 1,
        nextArrow:'<div class="next">→</div>',
        // fade:true,//切り替えをフェードで行う。初期値はfalse。
        responsive: [{
          breakpoint: 1200,
            settings: {
              centerMode: false,
          }
        }
        ]
      })
      .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
        $(".slick_nowCount").text(nextSlide + 1); // 現在のスライド番号の次のスライドになったら番号を+1
      });
  }); 