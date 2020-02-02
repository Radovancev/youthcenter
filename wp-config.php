<?php
/**
 * Основне поставке Вордпреса.
 *
 * Ова датотека се користи од стране скрипте за прављење wp-config.php током
 * инсталирања. Не морате да користите веб место, само умножите ову датотеку
 * у "wp-config.php" и попуните вредности.
 *
 * Ова датотека садржи следеће поставке:
 * * MySQL подешавања
 * * тајне кључеве
 * * префикс табеле
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL подешавања - Можете добити ове податке од свог домаћина ** //
/** Име базе података за Вордпрес */
define( 'DB_NAME', 'dzoni_wp' );

/** Корисничко име MySQL базе */
define( 'DB_USER', 'root' );

/** Лозинка MySQL базе */
define( 'DB_PASSWORD', '' );

/** MySQL домаћин */
define( 'DB_HOST', '127.0.0.1' );

/** Скуп знакова за коришћење у прављењу табела базе. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Не мењајте ово ако сте у сумњи. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Јединствени кључеви за аутентификацију.
 *
 * Промените ово у различите јединствене изразе!
 * Можете направити ово користећи {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org услугу тајних кључева}
 * Ово можете променити у сваком тренутку да бисте поништили све постојеће колачиће.
 * Ово ће натерати кориснике да се поново пријаве.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'O|IKrt}ig4yH-ILhZLr)-^ vg!jebi``$O.{-z7not2q_Bf8o$!c)--#~J.rC|%/');
define('SECURE_AUTH_KEY',  '6k`4b05f>TUNereD&Lfd@N NIrnvUQ5v}M<D| (~M[-ieW+BMtZ621S,9_:YZSyw');
define('LOGGED_IN_KEY',    'xF0$N[Bo]6A@q37)6!`@(1&xkAgFDq<pO~2kt k9B8.WNT<m<hwv+bwUGMWG~Vz7');
define('NONCE_KEY',        'eD7QLIhk^|R3%9F%&gm rae|bV7!f[.o-t4t>`C Rf{S03fl]+Gp/f!KsT+;Vzz}');
define('AUTH_SALT',        '=Vd01YGx2J}p6u=[1l e0iM92++-vQK+$wR?=7mk)z<Hl!(v_{tmAQN* =>%-Gz^');
define('SECURE_AUTH_SALT', '-.e MWTWq`Z/6{_=#$;fA(-Cj57P-[9`=&^=%2mw-xzoGo-S-+[|n1ck8KIZWW`<');
define('LOGGED_IN_SALT',   'qcsKp7%+ v>i<-&#d$(:5Pw0 sht,5&(HM*wG9Y(gwh0jT53rwRi0Zk/z&YyqQ&c');
define('NONCE_SALT',       'P;ayd+xi$ta^=WT~C6!j)M%I*L-lj]m]|=GyW;vF&eW7&tGTKH{iWN!m5$F>;lF|');
define('youthwork',       'lkHZNlhdEk497JcMnL');

/**#@-*/

/**
 * Префикс табеле Вордпресове базе података.
 *
 * Можете имати више инсталација Вордпреса у једној бази уколико
 * свакој дате јединствени префикс. Само бројеви, слова и доње цртице!
 */
$table_prefix = 'wp_';

/**
 * За градитеље: исправљање грешака у Вордпресу ("WordPress debugging mode").
 *
 * Промените ово у true да бисте омогућили приказ напомена током градње.
 * Веома се препоручује да градитељи тема и додатака користе WP_DEBUG
 * у својим градитељским окружењима.
 *
 * За више података о осталим константама које могу да се
 * користе током отклањања грешака, посетите Документацију.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* То је све, престаните са уређивањем! Срећно објављивање. */

/** Апсолутна путања ка Вордпресовом директоријуму. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Поставља Вордпресове променљиве и укључене датотеке. */
require_once( ABSPATH . 'wp-settings.php' );
