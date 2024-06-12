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
define( 'DB_NAME', 'wordpress_rini' );

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
define( 'AUTH_KEY',         'nKD8-K=@v;5lT>kU&1t<`UkWUU4SaeMc&J`)m;`i{4cvVdvN)lJQ?.-,(JYC;` #' );
define( 'SECURE_AUTH_KEY',  'FYRKd^{9Ngi7iJoa8?UJ=$_+q|yjB(XAou+d}*;](_ruD&D~pdTc2,HE5hkku5?_' );
define( 'LOGGED_IN_KEY',    ':Js0L`}KKA(h`3 &(SMmB6R?6gvnq=vgDCIw[KNpi:meThQ8]d}f!iZM5xpC_oG)' );
define( 'NONCE_KEY',        'MlZCEIC7kqsz5`qiLO4$eF l0OL6(B-WEWr0_!drqR)(5)~#dAV?a6I:CY7`lZZP' );
define( 'AUTH_SALT',        'j>9 6~}*$eW-ytgAkY~kieblAX-+Cce#V**U~ P:n=-Yd2p*7/Z,{`WSnyDlV._m' );
define( 'SECURE_AUTH_SALT', '-CB1NH./]lTF@jdk&Iv#2WQgrlpW48z=D_1CroxTd!Og3Sh;T??Dj|W$!MA<Y>>F' );
define( 'LOGGED_IN_SALT',   ')GQS+NO-BZ[LWV@mQusq1Rt[;8#%{n.F{0]H%eT`8cwvM]A|&xF&}Z[#2Y[^I2bR' );
define( 'NONCE_SALT',       'Lyg0&t5&McoKnj7WY/bNfHBtYsZK2HCuzZJzw}Fq!se1U?uWoT1)u&z><}lcTq!,' );

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
