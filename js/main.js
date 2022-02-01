
    $(function() {
      
      $('.js_accordion_cont').hide();
    
      $('.js_accordion_link').click(function() {
        console.log("test");
        $(this).children("span").toggleClass('open');
        $(this).next().slideToggle();
    
      });
      

    });


$(function(){


        $(".js_navlink").each(function(i, elem) {
            $(elem).addClass("js_diff_nav");
            console.log(i + ': ' + $(elem).text());
        });
/*
          $('.js_accordion_cont').hide();
          $('.js_accordion_link').click(function() {
            $('.js_accordion_link').toggleClass('active');
            $(this).next().slideToggle();
          });
        */
          
        
        $('.js_smoothe a[href^="#"]').click(function() {
            // スクロールの速度
            let speed = 400;
            headerHight = 100;
            // スクロールタイプ
            let type = 'swing';
            // href属性の取得
            let href= $(this).attr("href");
            // 移動先の取得（hrefが#indexならトップ$(html)に、）
            let target = $(href == "#index" ? 'html' : href);
            // 移動先のポジション取得
            let position = target.offset().top-headerHight;;
            // animateでスムーススクロール
            $('body,html').animate({scrollTop:position}, speed, type);
            return false;
          });

    });



