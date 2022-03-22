import Swiper from 'swiper/swiper-bundle.min';

export default () => {
    if (window.innerWidth < 480) {
    } else {
    }

    const swiper = new Swiper('.siteinfo__slider', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
};
