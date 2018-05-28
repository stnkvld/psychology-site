<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'psychology');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xa*qM4%>Ej?7@8}akWI?}=?ryAK:@1*_tGkp@m6Jw}dJ-2PXC9kB?N-[JB|{m,{W');
define('SECURE_AUTH_KEY',  'k&!P;4#ttQTTD[7h?4~cSc5`BHZx4!@mM!d(*jEoD5W_P nTb9r Hw!P-0QZ3T!#');
define('LOGGED_IN_KEY',    '^iG YX3_B@~T8.UCd}smgSAe,c@1Ja>yE).uT[P5GRBCI$XX)Y}u7ue0j`$IMlUB');
define('NONCE_KEY',        'ygCuG)IIYQM[BbbelZhKJtS#- .A+Rx^VH:C_Ml(fPiTLm+9j4|C3!sX^;x`g{p]');
define('AUTH_SALT',        'b(T_tYnC[lQH/{7#KdL*>V%n/d{NNAbUon*p1XR<Ye)JKe`:LB2F<ineKBaAZ`l^');
define('SECURE_AUTH_SALT', 'U6)q.RQ;%nuB}u1Z^5[2rz<R1SZ2:?rgb@U}GFE~u8.mFuIr0]TPK28A/k4yRvD ');
define('LOGGED_IN_SALT',   'IVs;sZcLyuxSP*dq4L XfiRKm% [)Rs~B,L0j,%2FKroAo(oM|ST)11y/8?7rTi(');
define('NONCE_SALT',       'Wvslzq~ZRNK_x7X&YKkyAs5#C/:|3mW)h1fKM&5G0(ikVuj5L6}vfGtKcj3c26jM');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
