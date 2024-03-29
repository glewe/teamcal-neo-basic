<?php
if (!defined('VALID_ROOT')) exit('');
/**
 * Holiday Edit View
 *
 * @author George Lewe <george@lewe.com>
 * @copyright Copyright (c) 2014-2022 by George Lewe
 * @link https://www.lewe.com
 *
 * @package TeamCal Neo Basic
 * @subpackage Views
 * @since 2.3.0
 */
?>

<!-- ==================================================================== 
      view.holidayedit
      -->
<div class="container content">

    <div class="col-lg-12">
        <?php
        if ($showAlert and $C->read("showAlerts") != "none") {
            if (
                $C->read("showAlerts") == "all" or
                $C->read("showAlerts") == "warnings" and ($alertData['type'] == "warning" or $alertData['type'] == "danger")
            ) {
                echo createAlertBox($alertData);
            }
        } ?>
        <?php $tabindex = 1;
        $colsleft = 8;
        $colsright = 4; ?>

        <form class="bs-example form-control-horizontal" name="form_create" action="index.php?action=<?= $CONF['controllers'][$controller]->name ?>&amp;id=<?= $viewData['id'] ?>" method="post" target="_self" accept-charset="utf-8">

            <div class="panel panel-<?= $CONF['controllers'][$controller]->panelColor ?>">
                <?php
                $pageHelp = '';
                if ($C->read('pageHelp')) $pageHelp = '<a href="' . $CONF['controllers'][$controller]->docurl . '" target="_blank" class="pull-right" style="color:inherit;"><i class="fas fa-question-circle fa-lg"></i></a>';
                ?>
                <div class="panel-heading"><i class="<?= $CONF['controllers'][$controller]->faIcon ?> fa-lg fa-header"></i><?= $LANG['hol_edit_title'] . $viewData['name'] . $pageHelp ?></div>
                <div class="panel-body">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <button type="submit" class="btn btn-primary" tabindex="<?= $tabindex++; ?>" name="btn_holidayUpdate"><?= $LANG['btn_save'] ?></button>
                            <a href="index.php?action=holidays" class="btn btn-default pull-right" tabindex="<?= $tabindex++; ?>"><?= $LANG['btn_holiday_list'] ?></a>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <input name="hidden_id" type="hidden" value="<?= $viewData['id'] ?>">
                            <?php foreach ($viewData['holiday'] as $formObject) {
                                echo createFormGroup($formObject, $colsleft, $colsright, $tabindex++);
                            } ?>
                        </div>
                    </div>

                </div>
            </div>

        </form>

    </div>
</div>