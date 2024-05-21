$(document).ready(function() {
    $('.service').click(function() {
        // remove .text-truncate class from clicked div's p element and show full text
        $(this).find('p').removeClass('text-truncate');
        // add .text-truncate class to all other service divs' p elements and truncate the text
        $('.service').not($(this)).find('p').addClass('text-truncate');
      });
});
