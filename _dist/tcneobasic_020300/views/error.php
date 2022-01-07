<?php
if (!defined('VALID_ROOT')) exit('');
/**
 * Error View
 *
 * @author George Lewe <george@lewe.com>
 * @copyright Copyright (c) 2014-2020 by George Lewe
 * @link https://www.lewe.com
 *
 * @package TeamCal Neo Basic
 * @subpackage Views
 * @since 2.3.0
 */
?>
<!DOCTYPE html>
<!--
===============================================================================
Application: TeamCal Neo
Author:      George Lewe
Copyright:   (c) 2014-2016
             All rights reserved.
===============================================================================
-->
<html>
   <head>
      <title>TeamCal Neo Error</title>
      <meta http-equiv="Content-type" content="text/html;charset=utf8">
      <meta charset="utf-8">
      <link rel="stylesheet" href="themes/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="themes/bootstrap/css/bootstrap-theme.min.css">
   </head>
   <body>
      <!-- ==================================================================== 
      view.error 
      -->
      <div class="container content" style="padding-left: 4px; padding-right: 4px;">
         <p></p>
         <div class="alert alert-dismissable alert-danger">
            <button type="button" class="close" data-dismiss="alert" title="'.$LANG['close_this_message'].'"><i class="far fa-times-circle"></i></button>
            <h4><strong><?=$errorData['title']?>!</strong></h4>
            <hr>
            <p><strong><?=$errorData['subject']?></strong></p>
            <p><?=$errorData['text']?></p>
         </div>
      </div>
   </body>
</html>
