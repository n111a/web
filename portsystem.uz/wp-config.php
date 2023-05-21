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
define( 'DB_NAME', 'port_systems' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '<t|<<&xgLX=j%{e9>Rj$ ~r`0D7MROf$Wv-L`2pX+@Ak3v4KC:W]7EE4[jG8&P+w' );
define( 'SECURE_AUTH_KEY',  '}87i!Aif/(Fd>`p$[qKpKaBv)?_MzM>19&`VL&z&0ayn`~TQju^r=(qSy)/k!2l4' );
define( 'LOGGED_IN_KEY',    '`Ent!<I/Lg6^5lFds]<bl<3#{tvC6E!{j]Z:1JZ9QQ=g@W?Bi3k8uH!a17S@f4Z.' );
define( 'NONCE_KEY',        'p&I7b@YF/R{OPs3~+O56G{PMB ]C3YY6+S^,nJ^/dC6[9{ew~)DM//dEMJyU98/;' );
define( 'AUTH_SALT',        '1Jr{fH#:cs_~X]F(AP $<y6U1@S#A5*E&x!6a]*,9,>0?wUC>s1oF?^GN/u{wj;!' );
define( 'SECURE_AUTH_SALT', ')5:M8dI>XtFv@]T~-Gj;<u6q)`m=/g..[Fz)%MYjpB+Q6pb=iAF~3&`3y2=]jS{K' );
define( 'LOGGED_IN_SALT',   'MvfKmzlLgoQ dU~y3&NFLM-nNVYQ@%dwE9<Q39 HPg+Z=4P`g+BOinV]& 774$*}' );
define( 'NONCE_SALT',       'D/bp!GbFhIEffGh^hwGB+#s$L@Rm9GA*<PVej&Z|@hs8%(R^YQ2q$cV8PDAkP!CO' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'ps_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
