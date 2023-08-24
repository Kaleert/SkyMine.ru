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
define( 'DB_NAME', 'SkyMine' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         ':M_t_fytYlu&tHoikg>YR61cySsTh}f@rYyC0wfpZB!z!]I?oYiSU~P[9yLiQt|?' );
define( 'SECURE_AUTH_KEY',  'w9X#Ob,Y(.1U$>Hh*mpS,sYjyWDF=-Yr(;Saa^t:d?ldr4?bdS[ly)I-dVV|;9Yi' );
define( 'LOGGED_IN_KEY',    '!buT/tXDb8Z-U>:[zn6d5w9Mh]Fs&+{(#tIJ3z1M!TB=%^=x]Y;b=wP*I3qB2mVG' );
define( 'NONCE_KEY',        '[KMx(*>ugX:E}S~ewGLIxLV[Cfkj%Q|%u#/]aI[i4>gG[4o +i=L$@7~0%kEW8bB' );
define( 'AUTH_SALT',        'AKpp#NK&%bew,H~=Wf9|8F?wyuvnX6coD=*qGZcp^`iyc1VBg|J@5a5&zkVgZ>`x' );
define( 'SECURE_AUTH_SALT', 'T0[{{BqZG,[SkIM99r?p3e[A|1`$W-IhVRtN`Q/3|1Qa nay%>)X29:E)*HNK/.5' );
define( 'LOGGED_IN_SALT',   'RCO/lNN8~Q:5~do,Gh$1)QZ~opoqoZG,0$AXGwO]g}~zoXH.4p8hkOty6q@xmqvD' );
define( 'NONCE_SALT',       '|n1m F*^[>&nAC]-^h.EkxSo5m(Y{89zKxOzrGHZ_EtEUQvqLW(zW mq$I5S[Gj)' );

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
