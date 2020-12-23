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

    // Подключение слайдера на главной странице
    var actualSlider = new Swiper('.actual-slider', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        speed: 300,

        autoplay: {
            delay: 4500,
        },

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },
    });

    // Подключение слайдера на внутренней странице
    var actualSlider = new Swiper('.gallery-slider', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        speed: 300,

        autoplay: {
            delay: 4500,
        },

        navigation: {
            nextEl: '.gallery-slider__button--next',
            prevEl: '.gallery-slider__button--prev',
        },

        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },
    });

    // Активируем бургер
    var burger = document.querySelector('.burger');
    burger.addEventListener('click', function() {
        document.querySelector('.navbar-menu__list').classList.toggle('navbar-menu__list--mobile--visible');
    });

    // Открываем модальное окно
    var modalButton = $("[data-toggle=modal]");
    var modalCloseButton = $('.modal__close');
    var modalWindow = $('.modal__dialog');
    modalButton.on('click', openModal);
    modalCloseButton.on('click', closeModal);

    function openModal(event) {
        event.preventDefault();
        var modalOverlay = $('.modal__overlay');
        var modalDialog = $('.modal__dialog');
        modalOverlay.addClass('modal__overlay--visible');
        modalDialog.addClass('modal__dialog--visible');
    };

    function closeModal(event) {
        event.preventDefault();
        var modalOverlay = $('.modal__overlay');
        var modalDialog = $('.modal__dialog');
        modalOverlay.removeClass('modal__overlay--visible');
        modalDialog.removeClass('modal__dialog--visible');
    };

    // Закрыть модальное окно на кнопку esc
    $(document).on('keydown', function(e) {
        if (e.keyCode == 27)
            var modalOverlay = $('.modal__overlay');
        var modalDialog = $('.modal__dialog');
        modalOverlay.removeClass('modal__overlay--visible');
        modalDialog.removeClass('modal__dialog--visible');
    });

    // Закрыть модальное окно при клике вне модального окна
    $(document).click(function(e) {
        if (!modalButton.is(e.target) && !modalWindow.is(e.target) && modalWindow.has(e.target).length === 0) {
            var modalOverlay = $('.modal__overlay');
            var modalDialog = $('.modal__dialog');
            modalOverlay.removeClass('modal__overlay--visible');
            modalDialog.removeClass('modal__dialog--visible');
        };
    });

    // Обработка форм
    $('.form').each(function() {
        $(this).validate({
            messages: {
                subscriptionalEmail: {
                    required: "Вы не можете оформить подписку, не указав почты :(",
                    email: "Пожалуйста, укажите корректный email"
                },
                email: {
                    required: "Для отправки обращения, укажите почту",
                    email: "Пожалуйста, укажите корректный email"
                }
            }
        });
    })

    // Раскрытие дополнительных комментариев
    var btnShow = $('.comments__bottom-button--show');
    var btnHide = $('.comments__bottom-button--hide');
    var comments = $('.comments-item__hidden-comment');
    var activeComments = $('.comments-item__border-none');
    var lastComment = $('.comments-item--last-comment');

    btnShow.on('click', showComments);
    btnHide.on('click', hideComments);

    function showComments() {
        btnShow.addClass('comments__bottom-button--hidden');
        btnHide.removeClass('comments__bottom-button--hidden');
        activeComments.removeClass('comments-item__border-none');
        comments.removeClass('comments-item__hidden-comment');
        lastComment.addClass('comments-item__border-none')
    }

    function hideComments() {
        btnShow.removeClass('comments__bottom-button--hidden');
        btnHide.addClass('comments__bottom-button--hidden');
        comments.addClass('comments-item__hidden-comment');
        activeComments.addClass('comments-item__border-none');
    }


});