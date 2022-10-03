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
define( 'DB_NAME', 'lynx' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'lynx_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'Az0987654321' );

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
define( 'AUTH_KEY',         'y_dtS@D1lP<F.g5|]=6Qr:ivLP2$/&1FlE+K4LWZbsn53jm LW~?hkI+0E-{$vcZ' );
define( 'SECURE_AUTH_KEY',  '9Ozi]-B3V@wbX&[0hP*.g.ZJMzc^}rEb`-Y$mNP0ZDK60njsE[k@^sil_%S_y)p_' );
define( 'LOGGED_IN_KEY',    'V`h;-(Br`w{APlyhT50[CcUFhEL<~/Ll=J}fA6i%[,r2nbIgPe0<k^rez+h(Vf)1' );
define( 'NONCE_KEY',        'mK,l=sVtI%4vUeQ2-F^fY{SEwI%jgks<~Ao>25X+i08R]5=}DM1J775oz._~nxa&' );
define( 'AUTH_SALT',        'GaGk/)=DS+3#?6&|l(W-CfhvS!gh+d[]p!a4dxVc#IC4,|TezPP wNwa1`)J)lrC' );
define( 'SECURE_AUTH_SALT', '6buC++QMl6.U.ple]Z+oC(l9jVNQ1gE(~VKok:t8%4GJ!`=cyqf~7dy!cwo%(_6H' );
define( 'LOGGED_IN_SALT',   'Hsc=9R?pq5oDY5+za}vIl:}?O)efxA/?dpykRFI31w-:XBW0:h4SPlAQ{re/A7U[' );
define( 'NONCE_SALT',       '3|NH[T(5[S{(YetJ;8rf(GN5Y1NJd94cOU@TL<G#>({m=#-YiaoV&){ja5QsS)$m' );

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
