import Swiper, { Navigation, Pagination, Scrollbar, Autoplay } from 'swiper';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

const swiper = new Swiper('.swiper-hero', {
    modules: [Navigation, Pagination, Scrollbar, Autoplay],

    // Optional parameters
    loop: true,

    autoplay: {
        delay: 3000,
    },
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
    
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
});

const swiper_new_product = new Swiper('.swiper-new-product', {
  modules: [Navigation, Pagination, Scrollbar],
  slidesPerView: 2,
  effect: 'slide',

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next-new-product',
    prevEl: '.swiper-button-prev-new-product',
  },

  breakpoints: {
    // when window width is >= 320px
    748: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    }
  }
})