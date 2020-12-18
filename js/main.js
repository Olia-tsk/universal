$(document).ready(function() {
    // подключение табов
    var tabsItem = $('.tabs__item');
    var contentItem = $('.main-content__item');

    tabsItem.on('click', function(event) {
        var activeContent = $(this).attr('data-target');
        console.log(activeContent)
        tabsItem.removeClass('tabs__item--active');
        contentItem.removeClass('main-content__item--active');
        $(activeContent).toggleClass('main-content__item--active');
        $(this).toggleClass('tabs__item--active');
    });

    // добавление в закладки - изменение цвета элемента
    var bookmarkIcon = $('.newsfeed-main__bookmark');

    bookmarkIcon.on('click', function(event) {
        var activeIcon = $(this);

        if ($(this).css('fill') == "rgb(188, 191, 194)") {
            $(this).css({ fill: "#ff4f52" });
        } else {
            $(this).css({ fill: "#bcbfc2" });
        }
    })

});