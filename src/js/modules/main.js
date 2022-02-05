import Inputmask from 'inputmask';

export default () => {

    const tel = new Inputmask('+7 (999) 999-99-99');
    tel.mask(document.querySelectorAll('input[type="tel"]'));

};
