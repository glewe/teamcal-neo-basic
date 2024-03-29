<?php
if (!defined('VALID_ROOT')) exit('');
/**
 * Alert Controller
 *
 * @author George Lewe <george@lewe.com>
 * @copyright Copyright (c) 2014-2022 by George Lewe
 * @link https://www.lewe.com
 *
 * @package TeamCal Neo Basic
 * @subpackage Controllers
 * @since 2.3.0
 */

//=============================================================================
//
// SHOW VIEW
//
require(WEBSITE_ROOT . '/views/header.php');
require(WEBSITE_ROOT . '/views/menu.php');
include(WEBSITE_ROOT . '/views/alert.php');
require(WEBSITE_ROOT . '/views/footer.php');
