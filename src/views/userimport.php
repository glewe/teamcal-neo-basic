<?php
if (!defined('VALID_ROOT')) exit('');
/**
 * User Import View
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
      view.userimport
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
        $colsleft = 6;
        $colsright = 6; ?>

        <form class="bs-example form-control-horizontal" enctype="multipart/form-data" action="index.php?action=<?= $controller ?>" method="post" target="_self" accept-charset="utf-8">

            <div class="panel panel-<?= $CONF['controllers'][$controller]->panelColor ?>">
                <?php
                $pageHelp = '';
                if ($C->read('pageHelp')) $pageHelp = '<a href="' . $CONF['controllers'][$controller]->docurl . '" target="_blank" class="pull-right" style="color:inherit;"><i class="fas fa-question-circle fa-lg"></i></a>';
                ?>
                <div class="panel-heading"><i class="<?= $CONF['controllers'][$controller]->faIcon ?> fa-lg fa-header"></i><?= $LANG['imp_title'] . $pageHelp ?></div>
                <div class="panel-body">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary" tabindex="<?= $tabindex++ ?>" name="btn_import"><?= $LANG['btn_import'] ?></button>
                            </div>
                            <div class="col-lg-6 text-right">
                                <?php if (isAllowed("useraccount")) { ?>
                                    <a href="index.php?action=users" class="btn btn-default pull-right" tabindex="<?= $tabindex++ ?>"><?= $LANG['btn_user_list'] ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-<?= $colsleft ?> control-label">
                            <?= $LANG['imp_file'] ?><br>
                            <span class="text-normal"><?= sprintf($LANG['imp_file_comment'], $viewData['upl_maxsize'] / 1024, $viewData['upl_formats'], APP_UPL_DIR) ?></span>
                        </label>
                        <div class="col-lg-<?= $colsright ?>">
                            <input type="hidden" name="MAX_FILE_SIZE" value="<?= $viewData['upl_maxsize'] ?>"><br>
                            <input class="form-control" tabindex="<?= $tabindex++ ?>" name="file_image" type="file"><br>
                        </div>
                    </div>
                    <div class="divider">
                        <hr>
                    </div>

                    <?php foreach ($viewData['import'] as $formObject) {
                        echo createFormGroup($formObject, $colsleft, $colsright, $tabindex++);
                    } ?>

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary" tabindex="<?= $tabindex++ ?>" name="btn_import"><?= $LANG['btn_import'] ?></button>
                            </div>
                            <div class="col-lg-6 text-right">
                                <?php if (isAllowed("useraccount")) { ?>
                                    <a href="index.php?action=users" class="btn btn-default pull-right" tabindex="<?= $tabindex++ ?>"><?= $LANG['btn_user_list'] ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </form>

    </div>

</div>