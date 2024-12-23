var swiper = new Swiper(".js-posts", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    // autoplay: {
    //   delay: 3500,
    //   disableOnInteraction: false
    // },
    pagination: {
      el: ".swiper-pagination--posts",
      // dynamicBullets: true,
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      1024: {
        slidesPerView:3,
        spaceBetween: 30
      }
    }
  });
  