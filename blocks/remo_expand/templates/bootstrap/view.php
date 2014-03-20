<?php
/*
 *  This Template utilizes The Twitter Bootstrap 3 Accordion JavaScript Component.
 *  In order to work and look good it needs the Bootstrap Styles for the "panel" component
 *  and the according .js to be loaded within your Project.
*/
defined('C5_EXECUTE') or die('Access Denied.');

global $c;
// define if the the accordion initializes collapsed or opened
$collapse_status_class = 'collapse in';
if ($controller->state == 1) {
    $collapse_status_class = 'collapse';
}
?>
<div class="panel panel-default accordion_element">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a id="ccm-remo-expand-title-<?php echo $bID;?>" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $bID;?>">
                <?php echo $controller->title;?>
            </a>
        </h4>
    </div>
    <div id="collapse-<?php echo $bID;?>" class="panel-collapse <?php echo $collapse_status_class;?>">
        <div id="ccm-remo-expand-content-<?php echo $bID;?>" class="panel-body">
            <?php echo $controller->getContent();?>
        </div>
    </div>
</div>
