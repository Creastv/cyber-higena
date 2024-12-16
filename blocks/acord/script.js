jQuery(function () {
  // Po kliknięciu na pytanie pokaż lub ukryj odpowiedź
  jQuery(document).on('click', '.faq-single', function () {
      // Zamknij wszystkie inne otwarte odpowiedzi
      jQuery(this).siblings().removeClass('active');

      jQuery(this).toggleClass('active');
      jQuery(this).siblings().find('.faq-answer').slideUp();

      jQuery(this).find('.faq-answer').slideToggle();
  });

})