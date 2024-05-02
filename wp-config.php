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
define( 'DB_NAME', 'web23-wp' );

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
define( 'AUTH_KEY',         'mi+}s$}3i;g+Ck]@IUJ*!h2~)yk+I/0Z&<&Q9[iu=fc&YyVVjH/Awg5}vo]Ma+o~' );
define( 'SECURE_AUTH_KEY',  '+63I2es$0d;*Ca,0egD3}Ylp90hzaIBD.?:;Z+ER^T:Yi)O@vx}p:+9Ak^U~6f!j' );
define( 'LOGGED_IN_KEY',    'in%+HAv%OI})&6$/Q:ijo4MBCjz+p4>@wT]Ls3SesZq[A?y&gY#wnrgXUR,Udx>0' );
define( 'NONCE_KEY',        '351$jg?>p ?B^^%O_a@#~CvlsqDw;te!A|LD~}p>XKpWVjzJiS6Il:p*^fjgibeU' );
define( 'AUTH_SALT',        'dcE&Pgc l/3^pd03cm]Uo/#/sBWn=+@Sv>ZyH%*r#]B_qtNT_Q6HmZ~ni>.N-NSc' );
define( 'SECURE_AUTH_SALT', 'm`ujS+(=]F8]y ]p+Ab0[D<9%B:=_x.jHpi8Uh=Ci3K}:9q!t5&SYfu!Ex[L%%!a' );
define( 'LOGGED_IN_SALT',   'h55igSm;OAc*AZb5{;tdW7|a/R|3e4R<MunmNB:u0`!!B4_]Jf=Q[=MkA*b4eoi:' );
define( 'NONCE_SALT',       'k}}Y&5+ny!oa,$]iJ=|p9;-5jR-2P=*yl?{XMWEc7pR_Lrw_,20!VqQw[o+q w6(' );

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
