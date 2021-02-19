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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'blockbox' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7wK.0A`7q KZ2PI:brfWg c_^|lSL;J++TDz~=m(A26IU%AQw|3 x+U!tCN8uX8|' );
define( 'SECURE_AUTH_KEY',  'zTKNJC|o3nFC~i$tgV}_zej9wal~3dw,_RcH;^lG%7A~Y*8):Ax(B?NVDGyo{x7-' );
define( 'LOGGED_IN_KEY',    '<U<Y`I[w$*}t5.X%u/AWPzXxs<QHF9A-_gS[yCvZ65$8Rw[)eaDa.40;d1T0FvwZ' );
define( 'NONCE_KEY',        'x[g/{p2DAG-(/Y#;!I{&d6WcehAibyw8b+$Pp<C,D]k8DK08q!8<}l}:A/u6`}Y[' );
define( 'AUTH_SALT',        'qA%=p/B?_j1E<Z73j)Yd$Dg4Go)2{TPj&i1nM|#fWb@](ZSn]3b~R+e95FO}/}ro' );
define( 'SECURE_AUTH_SALT', 'UZh)76 ]<$B=X{?xQS;kAg0&O4;$`J6S=vr^HN@^162&LshY5dt3F`q-xsFTG$34' );
define( 'LOGGED_IN_SALT',   '1_8Z]=AT5N@e0cWwZvTt>|f% =Yv5?{|eDF:;p]co)H02+D?qH^WWeb@aXAnPp};' );
define( 'NONCE_SALT',       'M/q<.tvbsbrZ9]`@_>{fN#GTJoW{?m? +ytZN{vJcuELi?$C.Tyva F$CI4Dgrz_' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
