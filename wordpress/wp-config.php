<?php
/**
 * WordPress基础配置文件。
 *
 * 本文件包含以下配置选项：MySQL设置、数据库表名前缀、密钥、
 * WordPress语言设定以及ABSPATH。如需更多信息，请访问
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * 编辑wp-config.php}Codex页面。MySQL设置具体信息请咨询您的空间提供商。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以手动复制这个文件，并重命名为“wp-config.php”，然后填入相关信息。
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'db-guantang');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '密码');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.]r|7LP$Qrv^a,5`Ur6<~~z#5=Vlv!XHN$U+`K,dm<N}lD-P})Rxq~aBi 1N!E%7');
define('SECURE_AUTH_KEY',  'd3&!>Rv7ij}9iiV,N4,@[V%V+2,Y$`:!+E]|bo-?/[E-,M5x6]{=[Z5On?tz{%H{');
define('LOGGED_IN_KEY',    'zVY/:+Cm`&|4i?@H.fZ|L-uO-e [.T Xm{vd1EpA1VBG$QiG$/X^:NB;/%2:)z]^');
define('NONCE_KEY',        'iY.sb(~*Eq|{_(0Mq+1.K8`EN?cE<k*YHqARNs[Nfg&s`88HN[@C/(@IUa+HI+Gs');
define('AUTH_SALT',        'Ry6KaIK:D*-|;$,2n.(#P1*B7hJr9|6bS[2(~|k=DRQ)^c#4h&r<,r]:/R}+j|WJ');
define('SECURE_AUTH_SALT', '|:e|@I`wyZ-+4(CHmr3>(-&`@H#q$z*N3H|-1x=zKmb5$sn6gmi@Yn<:u?o8ow|p');
define('LOGGED_IN_SALT',   'g-RSqVWYWJk-.vnWS5G60cOdY)%l1z({gW0P{!OzV74xt#`DX3Gj1)J``;g KQ1x');
define('NONCE_SALT',       '% [[M?{mWs|^2*)_hQeA8!Z337D}TKx8t|~n)2z|!z~blI|~}Hrv[):[G2+vJ+D>');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
