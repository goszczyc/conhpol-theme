const historySlider = () => {
  $('.slider').slick({
    infinite: false,
    slidesToShow: 1,
    autoplay: false,
    arrows: true,
    dots: true,
    dotsClass: 'slider__dots',
    prevArrow: document.querySelector('.slider__arrow--prev'),
    nextArrow: document.querySelector('.slider__arrow--next'),
  })
}

export default historySlider;