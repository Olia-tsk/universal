<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script defer src="js/swiper-bundle.min.js"></script>
    <script defer src="js/parallax.min.js"></script>
    <script defer src="js/jquery.validate.min.js"></script>
    <script defer src="js/main.js"></script>
    <title>Universal - онлайн портал о веб разработке</title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="navbar navbar__mobile navbar__mobile--fixed">
        <div class="container">
            <div class="navbar-menu">
                <a href="index.html" class="navbar-logo">
                    <img src="img/navbar-logo.png" alt="logo: Universal" class="navbar-logo__image">
                </a>

                <ul class="navbar-menu__list">
                    <li class="navbar-menu__item navbar-menu__item--mobile--visible">
                        <form action="#" class="search navbar-menu__search navbar-menu__search--mobile--visible">
                            <input type="search" class="search__input" placeholder="Поиск">
                            <button class="search__button">
                                <svg class="search__icon">
                                    <use xlink:href="img/sprite.svg#icon-search"></use>
                                </svg>
                            </button>
                        </form>
                    </li>

                    <li class="navbar-menu__item">
                        <a href="#" class="navbar-menu__link">Статьи</a>
                    </li>
                    <li class="navbar-menu__item">
                        <a href="#" class="navbar-menu__link">Новости</a>
                    </li>
                    <li class="navbar-menu__item">
                        <a href="#" class="navbar-menu__link">Курсы</a>
                    </li>
                    <li class="navbar-menu__item">
                        <a href="#" class="navbar-menu__link">HTML</a>
                    </li>
                    <li class="navbar-menu__item">
                        <a href="#" class="navbar-menu__link">CSS</a>
                    </li>
                    <li class="navbar-menu__item">
                        <a href="#" class="navbar-menu__link">JavaScript</a>
                    </li>
                    <li class="navbar-menu__item">
                        <a href="#" class="navbar-menu__link">Web Design</a>
                    </li>
                </ul>

                <form action="#" class="search navbar-menu__search">
                    <input type="search" class="search__input" placeholder="Поиск">
                    <button class="search__button">
                        <svg class="search__icon">
                            <use xlink:href="img/sprite.svg#icon-search"></use>
                        </svg>
                    </button>
                </form>

                <button class="navbar-menu__button burger">
                    <span class="burger__line"></span>
                    <span class="burger__line"></span>
                    <span class="burger__line"></span>
                </button>
            </div>
        </div>
    </header>