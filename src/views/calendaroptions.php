<?php
if (!defined('VALID_ROOT')) exit('');
/**
 * Calendar Options View
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
      view.calendaroptions 
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

        <form class="bs-example form-control-horizontal" action="index.php?action=<?= $controller ?>" method="post" target="_self" accept-charset="utf-8">

            <div class="panel panel-<?= $CONF['controllers'][$controller]->panelColor ?>">
                <?php
                $pageHelp = '';
                if ($C->read('pageHelp')) $pageHelp = '<a href="' . $CONF['controllers'][$controller]->docurl . '" target="_blank" class="pull-right" style="color:inherit;"><i class="fas fa-question-circle fa-lg"></i></a>';
                ?>
                <div class="panel-heading"><i class="<?= $CONF['controllers'][$controller]->faIcon ?> fa-lg fa-header"></i><?= $LANG['calopt_title'] ?><?= $pageHelp ?></div>
                <div class="panel-body">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <button type="submit" class="btn btn-primary" tabindex="<?= $tabindex++; ?>" name="btn_caloptApply"><?= $LANG['btn_apply'] ?></button>
                        </div>
                    </div>

                    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                        <li class="active"><a href="#display" data-toggle="tab"><?= $LANG['calopt_tab_display'] ?></a></li>
                        <li><a href="#filter" data-toggle="tab"><?= $LANG['calopt_tab_filter'] ?></a></li>
                        <li><a href="#options" data-toggle="tab"><?= $LANG['calopt_tab_options'] ?></a></li>
                        <li><a href="#stats" data-toggle="tab"><?= $LANG['calopt_tab_stats'] ?></a></li>
                        <li><a href="#summary" data-toggle="tab"><?= $LANG['calopt_tab_summary'] ?></a></li>
                    </ul>

                    <div id="myTabContent" class="tab-content">

                        <!-- Tab: General -->
                        <div class="tab-pane fade active in" id="display">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <?php foreach ($caloptData['display'] as $formObject) {
                                        echo createFormGroup($formObject, $colsleft, $colsright, $tabindex++);
                                    } ?>
                                </div>
                            </div>
                        </div>

                        <!-- Tab: Filter -->
                        <div class="tab-pane fade" id="filter">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <?php foreach ($caloptData['filter'] as $formObject) {
                                        echo createFormGroup($formObject, $colsleft, $colsright, $tabindex++);
                                    } ?>
                                </div>
                            </div>
                        </div>

                        <!-- Tab: Options -->
                        <div class="tab-pane fade" id="options">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <?php foreach ($caloptData['options'] as $formObject) {
                                        echo createFormGroup($formObject, $colsleft, $colsright, $tabindex++);
                                    } ?>
                                </div>
                            </div>
                        </div>

                        <!-- Tab: Summary -->
                        <div class="tab-pane fade" id="summary">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <?php foreach ($caloptData['summary'] as $formObject) {
                                        echo createFormGroup($formObject, $colsleft, $colsright, $tabindex++);
                                    } ?>
                                </div>
                            </div>
                        </div>

                        <!-- Statistics tab -->
                        <div class="tab-pane fade" id="stats">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <?php foreach ($caloptData['stats'] as $formObject) {
                                        echo createFormGroup($formObject, $colsleft, $colsright, $tabindex++);
                                    } ?>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <button type="submit" class="btn btn-primary" tabindex="<?= $tabindex++; ?>" name="btn_caloptApply"><?= $LANG['btn_apply'] ?></button>
                        </div>
                    </div>

                </div>
            </div>

        </form>

    </div>

</div>