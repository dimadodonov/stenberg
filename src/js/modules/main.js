import $ from 'jquery';
import fancybox from '@fancyapps/fancybox';
import Inputmask from 'inputmask';
import masonry from 'masonry-layout';
import imagesLoaded from 'imagesLoaded';

export default () => {
    (function ($) {
        $('[data-fancybox]').fancybox({
            clickOutside: 'close',
            buttons: [
                //"zoom",
                //"share",
                //"slideShow",
                //"fullScreen",
                //"download",
                //"thumbs",
                'close',
            ],
            loop: true,
            infobar: false,
            protect: true, // РїРѕР»СЊР·РѕРІР°С‚РµР»СЊ РЅРµ РјРѕР¶РµС‚ СЃРѕС…СЂР°РЅРёС‚СЊ РёР·РѕР±СЂР°Р¶РµРЅРёРµ
            // toolbar  : false // СѓР±СЂР°Р»Рё РїР°РЅРµР»СЊ РёРЅСЃС‚СЂСѓРјРµРЅС‚РѕРІ
            mobile: {
                clickContent: 'close',
                clickSlide: 'close',
            },
        });
    })(jQuery.noConflict());

    const tel = new Inputmask('+7 (999) 999-99-99');
    tel.mask(document.querySelectorAll('input[type="tel"]'));

    // init Masonry
    const grid = document.querySelector('.grid');
    var msnry = new masonry(grid, {
        itemSelector: '.grid-item',
        percentPosition: true,
        columnWidth: '.grid-sizer',
    });

    // layout Masonry after each image loads
    // msnry.imagesLoaded().progress(function () {
    //     msnry.masonry();
    // });

    imagesLoaded(grid).on('progress', function () {
        // layout Masonry after each image loads
        msnry.layout();
    });

    document
        .querySelector('.project-share__icon')
        .addEventListener('click', function () {
            alert();
        });
};
