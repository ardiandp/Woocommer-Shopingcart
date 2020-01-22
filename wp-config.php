<?php
/**
 * Konfigurasi dasar WordPress.
 *
 * Berkas ini berisi konfigurasi-konfigurasi berikut: Pengaturan MySQL, Awalan Tabel,
 * Kunci Rahasia, Bahasa WordPress, dan ABSPATH. Anda dapat menemukan informasi lebih
 * lanjut dengan mengunjungi Halaman Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Menyunting wp-config.php}. Anda dapat memperoleh pengaturan MySQL dari web host Anda.
 *
 * Berkas ini digunakan oleh skrip penciptaan wp-config.php selama proses instalasi.
 * Anda tidak perlu menggunakan situs web, Anda dapat langsung menyalin berkas ini ke
 * "wp-config.php" dan mengisi nilai-nilainya.
 *
 * @package WordPress
 */

// ** Pengaturan MySQL - Anda dapat memperoleh informasi ini dari web host Anda ** //
/** Nama basis data untuk WordPress */
define( 'DB_NAME', 'dm_shop' );

/** Nama pengguna basis data MySQL */
define( 'DB_USER', 'ardiandp' );

/** Kata sandi basis data MySQL */
define( 'DB_PASSWORD', 'terserah' );

/** Nama host MySQL */
define( 'DB_HOST', 'localhost' );

/** Set Karakter Basis Data yang digunakan untuk menciptakan tabel basis data. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Jenis Collate Basis Data. Jangan ubah ini jika ragu. */
define('DB_COLLATE', '');

/**#@+
 * Kunci Otentifikasi Unik dan Garam.
 *
 * Ubah baris berikut menjadi frase unik!
 * Anda dapat menciptakan frase-frase ini menggunakan {@link https://api.wordpress.org/secret-key/1.1/salt/ Layanan kunci-rahasia WordPress.org}
 * Anda dapat mengubah baris-baris berikut kapanpun untuk mencabut validasi seluruh cookies. Hal ini akan memaksa seluruh pengguna untuk masuk log ulang.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@@)2 N3vB*V=8p=IT0%r$t<VVs/I:)+dM*nvB=KRJ(:`RECbI)C*RvFE`oB:MN,m' );
define( 'SECURE_AUTH_KEY',  ')CRZ.&XQCA5<kcVzX1m;L.$7;hbLaeR;B?_j.[:,Ns6sOOx(bEiB+k0{C-<kmT.%' );
define( 'LOGGED_IN_KEY',    '*Kp,&z=e% !1o%SSzRqPb2hY.o%fKko &@QS}ibu$)V&K)Cu@b!Pj^5NiM%P_7E3' );
define( 'NONCE_KEY',        'sU`;gH~(m%=gh5]nHLC0SP` {s7:.}s`6d;u0%aS7$0uu5-3(mb 0OWGjk5W[j{B' );
define( 'AUTH_SALT',        '.2WJNE]Oyd0pLz@nx~q1YM456lA?i]@!nBPM}D=0J)$c5w4Znm<Ca2t05CJiC|pB' );
define( 'SECURE_AUTH_SALT', 'Uf9mkXdo/A@wn>3**@}ixG%tPH7`cn?($)$ Nreg=B=s/3Avb9}8AaHP1V6DaP5d' );
define( 'LOGGED_IN_SALT',   'HH=,B!-+MJ4()-US~p!9@S*R50.oN%!#6QP^7boP,O{i*-8kjJdM6<oLwk%`wT/U' );
define( 'NONCE_SALT',       '+2F)}4_i^-&Sl}[8#kDa(9Ox%Lh;O*yVEdYcB/GjiVh&-geLG^Je]VX[xz[jY$?f' );

/**#@-*/

/**
 * Awalan Tabel Basis Data WordPress.
 *
 * Anda dapat memiliki beberapa instalasi di dalam satu basis data jika Anda memberikan awalan unik
 * kepada masing-masing tabel. Harap hanya masukkan angka, huruf, dan garis bawah!
 */
$table_prefix = 'shop_';

/**
 * Untuk pengembang: Moda pengawakutuan WordPress.
 *
 * Ubah ini menjadi "true" untuk mengaktifkan tampilan peringatan selama pengembangan.
 * Sangat disarankan agar pengembang plugin dan tema menggunakan WP_DEBUG
 * di lingkungan pengembangan mereka.
 */
define('WP_DEBUG', false);

/* Cukup, berhenti menyunting! Selamat ngeblog. */

/** Lokasi absolut direktori WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Menentukan variabel-variabel WordPress berkas-berkas yang disertakan. */
require_once(ABSPATH . 'wp-settings.php');
