<?php
if (!defined('VALID_ROOT')) exit('');
/**
 * Database Check
 *
 * @author George Lewe <george@lewe.com>
 * @copyright Copyright (c) 2014-2022 by George Lewe
 * @link https://www.lewe.com
 *
 * @package TeamCal Neo Basic
 * @subpackage Helpers
 * @since 2.3.0
 */
header("Cache-Control: no-cache");
header("Pragma: no-cache");
if (strlen($_REQUEST['server']) and strlen($_REQUEST['db']) and strlen($_REQUEST['db']) and strlen($_REQUEST['user'])) {
    try {
        $pdo = new PDO('mysql:host=' . $_REQUEST['server'] . ';dbname=' . $_REQUEST['db'] . ';charset=utf8', $_REQUEST['user'], $_REQUEST['pass']);
        $query = $pdo->prepare('SELECT * FROM ' . $_REQUEST['prefix'] . 'users;');
        $result = $query->execute();
        if ($result and $query->rowCount()) {
            $msg  = "<div class='alert alert-success'><h4><strong>Database Connection Test</strong></h4><p>Connect to the mySQL server and database was successful.</p></div>";
            $msg .= "<div class='alert alert-success'><h4><strong>Table Test</strong></h4><p>Tables with the given prefix exist.</p></div>";
        } else {
            $msg  = "<div class='alert alert-success'><h4><strong>Database Connection Test</strong></h4><p>Connect to the mySQL server and database was successful.</p></div>";
            $msg .= "<div class='alert alert-warning'><h4><strong>Table Test</strong></h4><p>Tables with the given prefix do not exist.</p></div>";
        }
    } catch (PDOException $e) {
        $msg = "<div class='alert alert-danger'><h4><strong>Database Connection Test</strong></h4><p>Connect to mySQL server and/or database failed.</p></div>";
    }
} else {
    $msg = "<div class='alert alert-danger'><h4><strong>Database Connection Test</strong></h4><p>Connect to mySQL server and/or database failed.</p></div>";
}
echo $msg;
