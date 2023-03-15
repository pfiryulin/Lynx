<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '' );

/** Имя пользователя базы данных */
define( 'DB_USER', '' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'i?`b%VY6|%i)D%cZ26Frhi,J3YTL}8ei,F#{A%+Urdv7{Iy:TJ4PlMDU.T t:Sb!' );
define( 'SECURE_AUTH_KEY',  'YCTsho8=d$g1r-FYYeFQrfn#`y?[jD&s&ycY`478WiNWO`B;+b9yYAzKr{5K@>IK' );
define( 'LOGGED_IN_KEY',    'mR~gw5Ies`VB&$9J3l WspTNyF@6M~#<VQt qH^t{l<;GPit>l2*t;&`Xj?FE;yn' );
define( 'NONCE_KEY',        '[H9MF=m-&a#}e6YWSHHR4B5vfS|hx%4G/$9h.s255w<TqKNPkc7Q75iP@4+pa$Q;' );
define( 'AUTH_SALT',        '+|`rh<o|9LY8<{UXEZ;w}b(vT^ESd_Y@`l+P.GcAf#O8-ks=!^{yFMnH*l6cG[g^' );
define( 'SECURE_AUTH_SALT', '#VV6X d<-q`[dR),_:tN%B8)szLis1E)7,LukUqc>D9vU{$8O^Xc9K^@jZ|[8BRR' );
define( 'LOGGED_IN_SALT',   ']$^Ka{[Pc)J=zp7F3S8^zLlKu%dvGNZO|8>,x1W^O@JI;9uhwm5 1)Dnzg&aq`2~' );
define( 'NONCE_SALT',       'eQl~.).d3pXotz`8a]HX5Y*eA!c_Ck=1?yja-pPgVz2pY2{Y&o*;&i8#-B8;RtFQ' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
