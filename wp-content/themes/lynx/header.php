    <!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>КСЛ Рысь</title>
    <?php
        wp_head();
    ?>
</head>
<body>


<div class="header__burger">
    <div class="burger">
        <span></span>
    </div>
</div>
<header class="" style="background:url(<?php echo get_template_directory_uri() . '/assets/'?>img/background/headerBackground.png);background-size: cover;">

    <div class="container-fluid">
        <img src="<?php echo get_template_directory_uri() . '/assets/'?>img/icons/logo.png" width="490px" alt="">
    </div>
</header>

<nav>

    <menu>
        <ul>
            <li class="menu-link">
                <a href="#aboutUs">
                    <img src="<?php echo get_template_directory_uri() . '/assets/'?>img/icons/aboutUs.png" alt=""><br>
                    <span>О нас</span>
                </a>
            </li>
            <li class="menu-link">
                <a href="#ourTiam">
                    <img src="<?php echo get_template_directory_uri() . '/assets/'?>img/icons/team.png" alt=""><br>
                    <span>Наша команда</span><br>
                </a>
            </li>
            <li class="menu-link">
                <a href="http://t.me/archery38lynx" target="blank">
                    <img src="<?php echo get_template_directory_uri() . '/assets/'?>img/icons/news.png" alt=""><br>
                    <span>Новости</span><br>
                </a>
            </li>
            <li class="menu-link">
                <a href="#shedule">
                    <img src="<?php echo get_template_directory_uri() . '/assets/'?>img/icons/schedule.png" alt=""><br>
                    <span>Расписание</span>
                </a>
            </li>

            <li class="menu-link">
                <a href="#feedback">
                    <img src="<?php echo get_template_directory_uri() . '/assets/'?>img/icons/feedback.png" alt=""><br>
                    <span>Отзывы</span>
                </a>
            </li>
            <li class="menu-link">
                <a href="#cost" class="nav-link">
                    <img src="<?php echo get_template_directory_uri() . '/assets/'?>img/icons/cost.png" alt=""><br>
                    <span>Стоимость</span>
                </a>
            </li>
            <li class="menu-link">
                <a href="#contacts">
                    <img src="<?php echo get_template_directory_uri() . '/assets/'?>img/icons/contacts.png" alt=""><br>
                    <span>Контакты</span>
                </a>
            </li>
        </ul>
    </menu>

</nav>

