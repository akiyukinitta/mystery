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
        // スクロールトリガーの登録
        scrollTrigger: {
          trigger: el,
          start: "top 80%",
          ease: "expo",
          paused: true, 
          ease: "power2.out",
          // scrub: true, 
        },
      }
    );
  });

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


};

