

<?php
    get_header();

?>


<section class="section__lable">
    <div class="article">
        Стрельба из лука - больше чем спорт! Это древнее искусство, которое учит
        нас концентрации, контролю эмоций и достижению поставленных целей.
    </div>

    <div class="section__icon">
        <div class="lable">
            <img src="<?php echo get_template_directory_uri() . '/assets/'?>img/icons/trening.png" alt="">
            <div> Тренируется тело и разум</div>
        </div>
        <div class="lable">
            <img src="<?php echo get_template_directory_uri() . '/assets/'?>img/icons/friends.png" alt="">
            <div>Новые друзья и интересы</div>
        </div>

        <div class="lable">
            <img src="<?php echo get_template_directory_uri() . '/assets/'?>img/icons/target.png" alt="">
            <div>Концентрация и интуиция</div>
        </div>
        <div class="lable">
            <img src="<?php echo get_template_directory_uri() . '/assets/'?>img/icons/priz.png" alt="">
            <div>Мотивация и личные интересы
            </div>
        </div>
    </div>
</section>

<section class="section__info aboutUs" id="aboutUs">
    <h1><?php the_field('about_title'); ?></h1>
    <p>
        <?php the_field('about_company'); ?></h1>
    </p>
    <div class="catalog">
        <div class="card pointer" style="background:url(<?php echo get_template_directory_uri() . '/assets/'?>img/background/lernarcher.png); background-size: cover;">
            <div class="card-content">
                Обучение стрельбе из традиционного и исторического лука
            </div>
            <a href="tel:<?php the_field('phone_numb'); ?>" class="button card-button">Записаться</a>
        </div>
        <div class="card pointer" style="background:url(<?php echo get_template_directory_uri() . '/assets/'?>img/background/shotwithring.png); background-size: cover;">
            <div class="card-content">
                Стрельба с кольцом и средиземноморский хват
            </div>
            <a href="tel:<?php the_field('phone_numb'); ?>" class="button card-button">Записаться</a>
        </div>
        <div class="card pointer" style="background:url(<?php echo get_template_directory_uri() . '/assets/'?>img/background/lerncheldren.png); background-size: cover;">
            <div class="card-content">
                Обучаем взрослых и детей с 6 лет
            </div>
            <a href="tel:<?php the_field('phone_numb'); ?>" class="button card-button">Записаться</a>
        </div>
        <div class="card pointer" style="background:url(<?php echo get_template_directory_uri() . '/assets/'?>img/background/grouplesson.png); background-size: cover;">
            <div class="card-content">
                Индивидуальные и групповые занятия
            </div>
            <a href="tel:<?php the_field('phone_numb'); ?>" class="button card-button">Записаться</a>
        </div>
        <div class="card pointer" style="background:url(<?php echo get_template_directory_uri() . '/assets/'?>img/background/games.png); background-size: cover;">
            <div class="card-content">
                Проводим соревнования по различным дисциплинам
            </div>
            <a href="tel:<?php the_field('phone_numb'); ?>" class="button card-button">Записаться</a>
        </div>
        <div class="card pointer" style="background:url(<?php echo get_template_directory_uri() . '/assets/'?>img/background/corporation.png); background-size: cover;">
            <div class="card-content">
                Корпоративные и праздничные мероприятия
            </div>
            <a href="tel:<?php the_field('phone_numb'); ?>" class="button card-button">Записаться</a>
        </div>

    </div>
</section>

<section class="section__info trainers" id="ourTiam">
    <h3>Наша команда</h3>
    <div class="slider">
        <div class="slider-item">
            <div class="trainers__card">
                <div class="trainers__card-img">
                    <img src="<?php echo get_template_directory_uri() . '/assets/'?>img/trainer-exemp.png" alt="Иванов Иван" width="150px">
                </div>
                <div class="trainers__card-text">
                    <h4>Андрей Копылов</h4>
                    <p>
                        Старший тренер
                    </p>
                </div>
            </div>
        </div>
        <div class="slider-item">
            <div class="trainers__card">
                <div class="trainers__card-img">
                    <img src="<?php echo get_template_directory_uri() . '/assets/'?>img/trainers1.jpg" alt="Иванов Иван" width="150px">
                </div>
                <div class="trainers__card-text">
                    <h4>Ирина Копылова</h4>
                    <p>
                        Президент Автономной некоммерческой организации Клуб стрельбы из лука «Рысь»
                    </p>
                </div>
            </div>
        </div>

    </div>

</section>

<section class="section__info feedback" id="feedback">
    <div class="catalog">
        <div class="card">
            <div class="card-content">
                <h4>Петр Самсонов</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam atque consectetur cum deleniti est incidunt laborum minus nemo nihil perspiciatis, quae quaerat quas quod rerum sint temporibus veritatis voluptatum.
                </p>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <h4>Петр Самсонов</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam atque consectetur cum deleniti est incidunt laborum minus nemo nihil perspiciatis, quae quaerat quas quod rerum sint temporibus veritatis voluptatum.
                </p>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <h4>Петр Самсонов</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam atque consectetur cum deleniti est incidunt laborum minus nemo nihil perspiciatis, quae quaerat quas quod rerum sint temporibus veritatis voluptatum.
                </p>
            </div>
        </div>

    </div>

</section>


<section class="section__info shedule" id="shedule">
    <h3>Расписание</h3>
    <div class="shedule__table">

        <div class="shedule-card">
            <div class="shedule-head">Понедельник</div>
            <div class="shedule-info">Выходной</div>
        </div>
        <div class="shedule-card">
            <div class="shedule-head">
                Вторник
            </div>
            <div class="shedule-info">
                16:00-17:20,
                17-30-18:50,
                19:00 - 20:20,
                20:30 - 22:50
            </div>
        </div>
        <div class="shedule-card">
            <div class="shedule-head">
                Среда
            </div>
            <div class="shedule-info">
                Выходной
            </div>
        </div>
        <div class="shedule-card">
            <div class="shedule-head">
                Четверг
            </div>
            <div class="shedule-info">
                16:00-17:20,
                17:30-18:50,
                19:00 - 20:20,
                20:30 - 21:50
            </div>
        </div>
        <div class="shedule-card">
            <div class="shedule-head">
                Пятница
            </div>
            <div class="shedule-info">
                20:30 - 21:50
            </div>
        </div>
        <div class="shedule-card">
            <div class="shedule-head">
                Суббота
            </div>
            <div class="shedule-info">
                15:00 - 16:20,
                16:30 - 17:50,
                18:00 - 19:20,
                19:30 - 21:00
            </div>
        </div>
        <div class="shedule-card">
            <div class="shedule-head">
                Воскресенье
            </div>
            <div class="shedule-info">
                15:00 - 16:20,
                16:30 - 17:50,
                18:00 - 19:20,
                19:30 - 21:00
            </div>
        </div>
    </div>
    <h4>Весь инвентарь предоставляется</h4>

</section>

<section class="section__info cost" id="cost">
    <div class="catalog">
        <div class="card">

            <h4>Разовые занятия</h4>
            <div>
                <span class="span-cost">500</span><br>
                <span class="">рублей/занятие</span>
            </div>
            <a href="tel:<?php the_field('phone_numb'); ?>" class="button card-button">Записаться</a>
        </div>

        <div class="card">

            <h4>Индивидуальные занятия</h4>
            <p>Персональные</p>
            <div>
                <span class="span-cost">1200</span><br>
                <span class="">рублей/занятие</span>
            </div>
            <a href="tel:<?php the_field('phone_numb'); ?>" class="button card-button">Записаться</a>
        </div>

        <div class="card">

            <h4>Индивидуальные занятия</h4>
            <p>Для семьи из трех человек</p>
            <div>
                <span class="span-cost">2700</span><br>
                <span class="">рублей/занятие</span><br>
                <span>Каждый дом. стрелок +600р.</span>
            </div>
            <a href="tel:<?php the_field('phone_numb'); ?>" class="button card-button">Записаться</a>
        </div>

        <div class="card">
            <h4>Абонемент 8 занятий</h4>
            <div>
                <span class="span-cost">4200</span><br>
                <span class="">рублей</span>
            </div>
            <a href="tel:<?php the_field('phone_numb'); ?>" class="button card-button">Записаться</a>
        </div>

        <div class="card">
            <h4>Абонемент 12 занятий</h4>
            <div>
                <span class="span-cost">6000</span><br>
                <span class="">рублей/занятие</span>
            </div>
            <a href="tel:<?php the_field('phone_numb'); ?>" class="button card-button">Записаться</a>
        </div>

        <div class="card">
            <h4>Праздничные мероприятия</h4>
            <div>
                В нашем зале <br>
                <span class="span-cost">600</span>
                <span class="">р./чел - 1,5 часа <br> или <br> </span>
                <span class="span-cost">8000</span>
                <span>р. - 2,5 часа аренды </span>
            </div>
            <a href="tel:<?php the_field('phone_numb'); ?>" class="button card-button">Записаться</a>
        </div>

        <div class="card">
            <h4>Выездной тир</h4>
            <div>
                <span class="span-cost">4000</span><br>
                <span class="">рублей/час</span>
            </div>
            <a href="tel:<?php the_field('phone_numb'); ?>" class="button card-button">Записаться</a>
        </div>

    </div>
</section>

<section class="contacts" id="contacts">
    <div class="socialNetwork">
        <div class="phoneNumber">
            <a href="tel:<?php the_field('phone_numb'); ?>"> <?php the_field('phone_numb'); ?> </a>
        </div>
        <div class="socialNetwork-link">
            <h4>Связаться с нами</h4><br>
            <a href="https://vk.com/public211342658" target="blank" title="Наша страница в VK"><img src="<?php echo get_template_directory_uri() . '/assets/'?>img/icons/vk.png" alt=""></a>
            <a href="https://t.me/+AA6adk_-pNJhOWQy" target="blank" title="Связаться с нами">
                <img src="<?php echo get_template_directory_uri() . '/assets/'?>img/icons/telegram.png" alt="">
            </a>
        </div>
    </div>
    <div class="map">
        <div>
            <?php the_field('address'); ?>
        </div> <br>
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad7e95251aecb5e8130a3d8c5d0432429a400ef35d13de7f289b5d132239ea38f&amp;width=100%&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>

    </div>
</section>
<?php
    get_footer();

?>

</body>
</html>
