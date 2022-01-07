<?php
if (!defined('VALID_ROOT')) exit('');
/**
 * Region Edit View
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

      <!-- ==================================================================== 
      view.regionedit
      -->
      <div class="container content">
      
         <div class="col-lg-12">
            <?php 
            if ($showAlert AND $C->read("showAlerts")!="none")
            { 
               if ( $C->read("showAlerts")=="all" OR 
                    $C->read("showAlerts")=="warnings" AND ($alertData['type']=="warning" OR $alertData['type']=="danger")
                  ) 
               {
                  echo createAlertBox($alertData);
               }
            } ?>
            <?php $tabindex = 1; $colsleft = 8; $colsright = 4;?>
            
            <form  class="bs-example form-control-horizontal" enctype="multipart/form-data" action="index.php?action=<?=$controller?>&amp;id=<?=$viewData['id']?>" method="post" target="_self" accept-charset="utf-8">

               <div class="panel panel-<?=$CONF['controllers'][$controller]->panelColor?>">
                  <?php 
                  $pageHelp = '';
                  if ($C->read('pageHelp')) $pageHelp = '<a href="'.$CONF['controllers'][$controller]->docurl.'" target="_blank" class="pull-right" style="color:inherit;"><i class="fas fa-question-circle fa-lg"></i></a>';
                  ?>
                  <div class="panel-heading"><i class="<?=$CONF['controllers'][$controller]->faIcon?> fa-lg fa-header"></i><?=$LANG['group_edit_title'].$viewData['name'].$pageHelp?></div>
                  <div class="panel-body">

                     <div class="panel panel-default">
                        <div class="panel-body">
                           <input name="hidden_id" type="hidden" value="<?=$viewData['id']?>">
                           <button type="submit" class="btn btn-primary" tabindex="<?=$tabindex++;?>" name="btn_regionUpdate"><?=$LANG['btn_save']?></button>
                           <a href="index.php?action=regions" class="btn btn-default pull-right" tabindex="<?=$tabindex++;?>"><?=$LANG['btn_region_list']?></a>
                        </div>
                     </div>
                     
                     <div class="panel panel-default">
                        <div class="panel-body">
                           <?php foreach($viewData['region'] as $formObject) {
                              echo createFormGroup($formObject, $colsleft, $colsright, $tabindex++);
                           } ?>
                        </div>
                     </div>
                     
                     <div class="panel panel-default">
                        <div class="panel-body">
                           <button type="submit" class="btn btn-primary" tabindex="<?=$tabindex++;?>" name="btn_regionUpdate"><?=$LANG['btn_save']?></button>
                        </div>
                     </div>
                     
                  </div>
               </div>
                  
            </form>
            
         </div>
         
      </div>      
            