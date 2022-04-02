export default () => {
    function tabs() {
        // получаем массив всех вкладок
        const tabs = document.querySelectorAll('.tab-nav');
        // получаем массив всех блоков с содержимым вкладок
        const contents = document.querySelectorAll('.tab-content');

        // запускаем цикл для каждой вкладки и добавляем на неё событие
        for (let i = 0; i < tabs.length; i++) {
            tabs[i].addEventListener('click', (event) => {
                // сначала нам нужно удалить активный класс именно с вкладок
                let tabsChildren = event.target.parentElement.children;
                for (let t = 0; t < tabsChildren.length; t++) {
                    tabsChildren[t].classList.remove('tab-nav--active');
                }
                // добавляем активный класс
                tabs[i].classList.add('tab-nav--active');
                // теперь нужно удалить активный класс с блоков содержимого вкладок
                let tabContentChildren =
                    event.target.parentElement.nextElementSibling.children;
                for (let c = 0; c < tabContentChildren.length; c++) {
                    tabContentChildren[c].classList.remove(
                        'tab-content--active'
                    );
                }
                // добавляем активный класс
                contents[i].classList.add('tab-content--active');
            });
        }
    }

    tabs();

    function popup() {
        const initPopup = document.querySelectorAll('.initpopup'),
            popup = document.querySelectorAll('.popup'),
            closePopup = document.querySelectorAll('.popup__close');

        if (initPopup) {
            for (let i = 0; i < initPopup.length; i++) {
                const dataPopup = initPopup[i].dataset.popup;

                initPopup[i].addEventListener('click', function () {
                    const el = document.querySelector('.popup');

                    document.querySelector(
                        '.popup.popup-' + dataPopup
                    ).style.display = 'block';
                    document
                        .querySelector('.popup.popup-' + dataPopup)
                        .classList.add('is_active');
                    document.querySelector(
                        '.popup-' + dataPopup + ' .popup__overlay'
                    ).style.display = 'block';
                    document.querySelector('body').style.overflowY = 'hidden';
                });
            }
        }

        if (closePopup) {
            for (let i = 0; i < closePopup.length; i++) {
                const cp = closePopup[i];

                cp.addEventListener('click', function () {
                    for (
                        let allCloseBtn = 0;
                        allCloseBtn < popup.length;
                        allCloseBtn++
                    ) {
                        popup[allCloseBtn].style.display = 'none';
                        popup[allCloseBtn].classList.remove('is_active');
                    }
                    document.querySelector('body').style.overflowY = 'auto';
                });
            }
        }
    }

    popup();
};
