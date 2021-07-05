$(function () {
  $('.js-click-open').on('click', function (e) {
    e.preventDefault();
    $('.js-modal-target').fadeIn(1000);
    $('.js-click-close').fadeIn(1000);
  });
  $('.js-click-close').on('click', function (e) {
    e.preventDefault();
    $('.js-modal-target').fadeOut();
    $('.js-click-close').fadeOut();
  });
});
