export default () => {
    let scrollPos = 0;
    const $headerHeight = document.querySelector('.header').clientHeight;
    const $navHeight = document.querySelector('.nav').clientHeight;
    const $onStiky = +$headerHeight + +$navHeight;

    window.addEventListener('scroll', function () {
        const sT = window.scrollY;
        const $header = document.querySelector('.header-stiky');

        if (sT > $onStiky) {
            if (sT > scrollPos) {
                $header.classList.add('up');
            } else {
                // $header.classList.remove('up');
            }
        } else {
            $header.classList.remove('up');
        }

        scrollPos = sT;
    });
};
