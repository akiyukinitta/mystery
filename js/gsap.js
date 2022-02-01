window.onload = function() {


// gsap.set('.gsap_fadein', {x: -80,opacity: 0}); 

  // gsap.to('.gsap_fadein', {
  //   x: 0, 
  //   opacity: 1,
  //   scrollTrigger: {
  //     trigger: '.gsap_trigger01',
	
  //       start: "top center",
  //       end: "400px",
  //       markers: true
  //   }
  // });

  document.querySelectorAll(".gsap_fadein").forEach((el) => {
    gsap.fromTo(
      el,
      { x: -400, autoAlpha: 0 },
      {
        x: 0,
        autoAlpha: 1,
        duration: 1.0,
        scrollTrigger: {
          trigger: el,
          start: "top 80%",
          ease: "expo",
          paused: true, 
          ease: "power2.out",
        },
      }
    );
  });
  

/*
  document.querySelectorAll(".gsap_card").forEach((el) => {
    gsap.fromTo(
      el,
      { y: 200, autoAlpha: 0 },
      {
        y: 0,
        autoAlpha: 1,
        duration: 1.0,
        // スクロールトリガーの登録
        scrollTrigger: {
          trigger: el,
          start: "top 120%",
          ease: "expo",
          paused: true, 
          ease: "power2.out",
          // scrub: true, 
        },
      }
    );
  });
*/

};


// 動きのきっかけとなるアニメーションの名前を定義
function fadeAnime(){

  // ふわっ
  $('.js_scrollBlock').each(function(){ //fadeUpTriggerというクラス名が
    var elemPos = $(this).offset().top-50;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
    $(this).addClass('anime_fadeUp');// 画面内に入ったらfadeUpというクラス名を追記
    }else{
    $(this).removeClass('anime_fadeUp');// 画面外に出たらfadeUpというクラス名を外す
    }
    });
}

// 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function (){
    fadeAnime();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
  $(window).on('load', function(){
    fadeAnime();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述



// 動きのきっかけの起点となるアニメーションの名前を定義
function BgFadeAnime(){

  // 背景色が伸びて出現（左から右）
$('.bgLRextendTrigger').each(function(){ //bgLRextendTriggerというクラス名が
  var elemPos = $(this).offset().top+100;//要素より、50px上の
  var scroll = $(window).scrollTop();
  var windowHeight = $(window).height();
  if (scroll >= elemPos - windowHeight){
    $(this).addClass('bgLRextend');// 画面内に入ったらbgLRextendというクラス名を追記
  }else{
    $(this).removeClass('bgLRextend');// 画面外に出たらbgLRextendというクラス名を外す
  }
});	

 // 文字列を囲う子要素
$('.bgappearTrigger').each(function(){ //bgappearTriggerというクラス名が
  var elemPos = $(this).offset().top+100;//要素より、50px上の
  var scroll = $(window).scrollTop();
  var windowHeight = $(window).height();
  if (scroll >= elemPos - windowHeight){
    $(this).addClass('bgappear');// 画面内に入ったらbgappearというクラス名を追記
  }else{
    $(this).removeClass('bgappear');// 画面外に出たらbgappearというクラス名を外す
  }
});		
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function (){
  BgFadeAnime();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function(){
  BgFadeAnime();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面が