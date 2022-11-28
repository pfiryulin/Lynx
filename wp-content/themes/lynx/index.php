

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
        <?php
        // параметры по умолчанию
        $my_posts = get_posts( array(
        'numberposts' => -1,
        'category_name'    => 'catalog',
        'orderby'     => 'date',
        'order'       => 'ASC',
        'post_type'   => 'post',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

        global $post;

        foreach( $my_posts as $post ){
        setup_postdata( $post );
        ?>
<!--        // формат вывода the_title() ...-->
            <div class="card pointer" style="background:url('<?php the_field('cat_img'); ?>'); background-size: cover;">
                <div class="card-content">
                    <?php the_title();?>
                </div>
                <a href="tel:<?php the_field('phone_numb',2); ?>" class="button card-button">Записаться</a>
            </div>
        <?php
        }

        wp_reset_postdata(); // сброс
        ?>
    </div>
</section>

<section class="section__info trainers" id="ourTiam">
    <h3>Наша команда</h3>
    <div class="slider">

            <?php
            // параметры по умолчанию
            $my_posts = get_posts( array(
                'numberposts' => -1,
                'category_name'    => 'treners',
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            global $post;

            foreach( $my_posts as $post ){
                setup_postdata( $post );
            ?>
        <div class="slider-item">
                <div class="trainers__card">
                    <div class="trainers__card-img">
                        <img src="<?php the_field('trainer_photo'); ?>" alt="Иванов Иван" width="150px">
                    </div>
                    <div class="trainers__card-text">
                        <h4><?php the_title();?></h4>
                        <p>
                            <?php the_field('about_trainer'); ?>
                        </p>
                    </div>
                </div>
        </div>

            <?php
            }

            wp_reset_postdata(); // сброс


            ?>



    </div>

</section>

<section class="section__info feedback" id="feedback">

    <div class="catalog">
        <?php
        // параметры по умолчанию
        $my_posts = get_posts( array(
            'numberposts' => 5,
            'category_name'    => 'feedback',
            'orderby'     => 'rand',
//            'order'       => 'DESC',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

        global $post;

        foreach( $my_posts as $post ){
            setup_postdata( $post );

            ?>
                <div class="card">
                    <div class="card-content">
                        <h4><?php the_title();?></h4>
                        <p>
                            <?php the_field('feedback');?>
                        </p>
                    </div>
                </div>


<!--            // формат вывода the_title() ...-->
            <?php
        }

        wp_reset_postdata(); // сброс
        ?>
</section>


<section class="section__info shedule" id="shedule">
    <h3>Расписание</h3>
    <div class="shedule__table">
        <?php

        // параметры по умолчанию
        $my_posts = get_posts( array(
            'numberposts' => -1,
            'category_name'    => 'shedule',
            'orderby'     => 'date',
            'order'       => 'ASC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

        global $post;

        foreach( $my_posts as $post ){
            setup_postdata( $post );
        ?>
<!--            // формат вывода the_title() ...-->
            <div class="shedule-card">
                <div class="shedule-head"><?php the_title(); ?></div>
                <div class="shedule-info"><?php the_field('shedule'); ?></div>
            </div>
        <?php
        }

        wp_reset_postdata(); // сброс

        ?>

    </div>
    <h4>Весь инвентарь предоставляется</h4>

</section>

<section class="section__info cost" id="cost">
    <div class="catalog">
       <?php
        // параметры по умолчанию
            $my_posts = get_posts( array(
            'numberposts' => -1,
            'category_name'    => 'coast',
            'orderby'     => 'date',
            'order'       => 'ASC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            global $post;

            foreach( $my_posts as $post ){
            setup_postdata( $post );
       ?>
        <div class="card">


            <h4><?php the_title() ?></h4>
            <p><?php the_field('start_explan'); ?></p>
            <div>
                <span class="span-cost"><?php the_field('coast')?> </span><br>
                <span class=""><?php the_field('unit'); ?></span><br>
                <span class="span-cost"><?php the_field('stcondary_coast'); ?></span><br>
                <span class=""><?php the_field('end_explan'); ?></span><br>
            </div>
            <a href="tel:<?php the_field('phone_numb', 2); ?>" class="button card-button">Записаться</a>
        </div>
       <?php }

        wp_reset_postdata(); // сброс
        ?>


<!--        <div class="card">-->
<!---->
<!--            <h4>Индивидуальные занятия</h4>-->
<!--            <p>Персональные</p>-->
<!--            <div>-->
<!--                <span class="span-cost">1200</span><br>-->
<!--                <span class="">рублей/занятие</span>-->
<!--            </div>-->
<!--            <a href="tel:--><?php //the_field('phone_numb'); ?><!--" class="button card-button">Записаться</a>-->
<!--        </div>-->
<!---->
<!--        <div class="card">-->
<!---->
<!--            <h4>Индивидуальные занятия</h4>-->
<!--            <p>Для семьи из трех человек</p>-->
<!--            <div>-->
<!--                <span class="span-cost">2700</span><br>-->
<!--                <span class="">рублей/занятие</span><br>-->
<!--                <span>Каждый дом. стрелок +600р.</span>-->
<!--            </div>-->
<!--            <a href="tel:--><?php //the_field('phone_numb'); ?><!--" class="button card-button">Записаться</a>-->
<!--        </div>-->
<!---->
<!--        <div class="card">-->
<!--            <h4>Абонемент 8 занятий</h4>-->
<!--            <div>-->
<!--                <span class="span-cost">4200</span><br>-->
<!--                <span class="">рублей</span>-->
<!--            </div>-->
<!--            <a href="tel:--><?php //the_field('phone_numb'); ?><!--" class="button card-button">Записаться</a>-->
<!--        </div>-->
<!---->
<!--        <div class="card">-->
<!--            <h4>Абонемент 12 занятий</h4>-->
<!--            <div>-->
<!--                <span class="span-cost">6000</span><br>-->
<!--                <span class="">рублей/занятие</span>-->
<!--            </div>-->
<!--            <a href="tel:--><?php //the_field('phone_numb'); ?><!--" class="button card-button">Записаться</a>-->
<!--        </div>-->
<!---->
<!--        <div class="card">-->
<!--            <h4>Праздничные мероприятия</h4>-->
<!--            <div>-->
<!--                В нашем зале <br>-->
<!--                <span class="span-cost">600</span>-->
<!--                <span class="">р./чел - 1,5 часа <br> или <br> </span>-->
<!--                <span class="span-cost">8000</span>-->
<!--                <span>р. - 2,5 часа аренды </span>-->
<!--            </div>-->
<!--            <a href="tel:--><?php //the_field('phone_numb'); ?><!--" class="button card-button">Записаться</a>-->
<!--        </div>-->
<!---->
<!--        <div class="card">-->
<!--            <h4>Выездной тир</h4>-->
<!--            <div>-->
<!--                <span class="span-cost">4000</span><br>-->
<!--                <span class="">рублей/час</span>-->
<!--            </div>-->
<!--            <a href="tel:--><?php //the_field('phone_numb'); ?><!--" class="button card-button">Записаться</a>-->
<!--        </div>-->

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
