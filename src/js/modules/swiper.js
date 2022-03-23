import Swiper from 'swiper/swiper-bundle.min';

export default () => {
    if (window.innerWidth < 480) {
    } else {
    }

    const swiper = new Swiper('.siteinfo__slider', {
        navigation: {
            nextEl: '.dd-slider-next',
            prevEl: '.dd-slider-prev',
        },
    });
    const projectsSwiper = new Swiper('.projectsSwiper', {
        slidesPerView: '2',
        spaceBetween: 30,
        navigation: {
            nextEl: '.dd-slider-next',
            prevEl: '.dd-slider-prev',
        },
    });

    const clientsSwiper = new Swiper('.clientsSwiper', {
        slidesPerView: '5',
        // loop: true,
        // loopFillGroupWithBlank: true,
        navigation: {
            nextEl: '.dd-slider-next',
            prevEl: '.dd-slider-prev',
        },
    });
};
