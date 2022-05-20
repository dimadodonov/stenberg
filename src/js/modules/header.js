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

    function menuEvent(event) {
        if (event === true) {
            document.querySelectorAll('.hamburger').forEach((hamburger) => {
                hamburger.classList.toggle('animate');
            });

            document.querySelector('.nav').classList.toggle('action');
            document.querySelector('body').classList.toggle('is-fixed');
        } else {
            document.querySelectorAll('.hamburger').forEach((hamburger) => {
                hamburger.classList.remove('animate');
            });
            document.querySelector('.nav').classList.remove('action');
            document.querySelector('body').classList.remove('is-fixed');
            document.querySelector('.header-stiky').classList.remove('open');
        }
    }

    document.querySelector('.header-nav').addEventListener('click', () => {
        menuEvent(true);
        document.querySelector('.header-stiky').classList.toggle('open');
    });
    document
        .querySelector('.header-stiky-mob__nav')
        .addEventListener('click', () => {
            menuEvent(true);
            document.querySelector('.header-stiky').classList.toggle('open');
        });
};
