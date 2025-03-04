<?php
if (!defined('VALID_ROOT')) {
  exit('');
}
/**
 * Application Configuration
 *
 * @author    George Lewe <george@lewe.com>
 * @copyright Copyright (c) 2014-2024 by George Lewe
 * @link      https://www.lewe.com
 *
 * @package   TeamCal Neo Basic
 * @since     1.0.0
 */

/**
 * ----------------------------------------------------------------------------
 * ROUTING
 * ----------------------------------------------------------------------------
 */
$protocol = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
$fullURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$pos = strrpos($fullURL, '/');
define('WEBSITE_URL', substr($fullURL, 0, $pos)); //Remove trailing slash
define('APP_AVATAR_DIR', "upload/avatars/");
define('APP_UPL_DIR', "upload/files/");
define('APP_IMP_DIR', "upload/import/");

/**
 * ----------------------------------------------------------------------------
 * INSTALLATION FLAG
 * ----------------------------------------------------------------------------
 */
//
// A flag indicating whether the installation script has been executed.
// 0 = Not run yet
// 1 = Was run
// Set this to 0 if you want to run the installation.php script again.
// If not, you need to delete or rename the installation.php file.
//
define('APP_INSTALLED', "0");

//
// The cookie prefix to be used on the browser client's device
//
define('COOKIE_NAME', "tcneobasic");

/**
 * ----------------------------------------------------------------------------
 * MANDATORY MODULES
 * ----------------------------------------------------------------------------
 */
define('BOOTSTRAP_VER', "5.3.3");
define('BOOTSTRAP_ICONS_VER', "1.11.3");
define('DATATABLES_VER', "2.2.0");
define('FONTAWESOME_VER', "6.7.2");
define('JQUERY_VER', "3.7.1");
define('JQUERY_UI_VER', "1.14.1");
define('SECUREIMAGE_VER', "3.6.4");

/**
 * ----------------------------------------------------------------------------
 * OPTIONAL MODULES
 * ----------------------------------------------------------------------------
 */
//
// Chart.js
// Simple yet flexible JavaScript charting for designers & developers
// https://www.chartjs.org/
//
define('CHARTJS_VER', "4.4.7");

//
// Cookie Consent by Silktide
// https://silktide.com/cookieconsent
//
define('COOKIECONSENT_VER', "3.1.1");

//
// Magnific Popup
// Magnific Popup is a responsive lightbox & dialog script
// https://dimsemenov.com/plugins/magnific-popup/
//
define('MAGNIFICPOPUP', false);
define('MAGNIFICPOPUP_VER', "1.2.0");

//
// Syntaxhighlighter
// SyntaxHighlighter is a fully functional self-contained code syntax highlighter developed in JavaScript.
// https://github.com/syntaxhighlighter
//
define('SYNTAXHIGHLIGHTER', false);
define('SYNTAXHIGHLIGHTER_VER', "3.0.83");

/**
 * ----------------------------------------------------------------------------
 * FILE UPLOAD
 * ----------------------------------------------------------------------------
 */
//
// Defines the allowed file types for upload
// Defines the allowed max file sizes for upload
//
$CONF['avatarExtensions'] = array( 'gif', 'jpg', 'png' );
$CONF['avatarMaxsize'] = 1024 * 100; // 100 KB
$CONF['imgExtensions'] = array( 'gif', 'jpg', 'png' );
$CONF['impExtensions'] = array( 'csv' );
$CONF['uplExtensions'] = array( 'gif', 'jpg', 'png', 'doc', 'docx', 'pdf', 'ppt', 'pptx', 'xls', 'xlsx', 'zip' );
$CONF['uplMaxsize'] = 2048 * 1024; // 2 MB

/**
 * ----------------------------------------------------------------------------
 * APPLICATION
 * ----------------------------------------------------------------------------
 *
 * !Do not change anything below this line. It is protected by the license agreement!
 */
define('APP_NAME', "TeamCal Neo Basic");
define('APP_VER', "4.1.1");
define('APP_DATE', "2025-03-04");
define('APP_YEAR', "2014-" . date('Y'));
define('APP_AUTHOR', "George Lewe");
define('APP_URL', "https://www.lewe.com");
define('APP_EMAIL', "george@lewe.com");
define('APP_LICENSE', "https://lewe.gitbook.io/teamcal-neo/readme/teamcal-neo-license/");
define('APP_MABS', intval(substr('2024-10-31', 5, 2)));
define('APP_MUSR', intval(substr('2024-10-31', 0, 2)));
define('APP_COPYRIGHT', "(c) " . APP_YEAR . " by " . APP_AUTHOR . " (" . APP_URL . ")");
define('APP_POWERED', "Powered by " . APP_NAME . " " . APP_VER . " &copy; " . APP_YEAR . " by <a href=\"https://www.lewe.com\" class=\"copyright\" target=\"_blank\">" . APP_AUTHOR . "</a>");
