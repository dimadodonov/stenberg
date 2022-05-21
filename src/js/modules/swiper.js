import Swiper from 'swiper/swiper-bundle.min';

export default () => {
    if (window.innerWidth < 480) {
    } else {
    }

    const swiper = new Swiper('.siteinfo__slider', {
        loop: true,
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
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 1,
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 2,
            },
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
    const galleryThumbs = new Swiper('.product-slider-thumbs', {
        spaceBetween: 27,
        slidesPerView: 3,
        freeMode: true,
        direction: 'vertical',
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        autoHeight: true, //enable auto height
    });

    const galleryTop = new Swiper('.product-slider-big', {
        spaceBetween: 0,
        // navigation: {
        //     nextEl: '.swiper-btn-next',
        //     prevEl: '.swiper-btn-prev',
        // },
        thumbs: {
            swiper: galleryThumbs,
        },
    });

    const loopSlider = new Swiper('.loop-slider', {
        slidesPerView: 3,
        spaceBetween: 20,
        watchSlidesProgress: true,
        navigation: {
            nextEl: '.dd-slider-next',
            prevEl: '.dd-slider-prev',
        },
        lazy: true,
        pagination: {
            el: '.my-swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 2,
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 2,
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 4,
            },
        },
    });
};
