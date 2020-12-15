$(document).ready(function() {
    var tabsItem = $('.tabs__item');
    var contentItem = $('.main-content__item');

    tabsItem.on('click', function(event) {
        var activeContent = $(this).attr('data-target');
        tabsItem.removeClass('tabs__item--active');
        contentItem.removeClass('main-content__item--active');
        $(activeContent).toggleClass('main-content__item--active');
        $(this).toggleClass('tabs__item--active');
    });

});