<?php 
defined('C5_EXECUTE') or die('Access Denied.');

$textEditorWidth = intval(Config::get('CONTENTS_TXT_EDITOR_WIDTH'));
if ($textEditorWidth < 580)
    $textEditorWidth = 580;
?>
<h2><?php  echo t('Title')?></h2>

<input type="text" name="title" value="<?php  echo $controller->title?>" style="width:<?php  echo ($textEditorWidth - 40)?>px;"/>

<div style="float:left;width:200px;">
    <h2><?php  echo t('Layout')?></h2>

    <select name="layout">
        <option value="">(<?php  echo t('None selected')?>)</option>
        <?php 
        $templates = $controller->getTemplates();
        $currentTemplate = $controller->getCurrentTemplate();
        foreach ($templates as $template) {
            $selectedTemplate = "";
            if ($currentTemplate == $template) {
                $selectedTemplate = ' selected="selected" ';
            }

            echo "<option {$selectedTemplate} value=\"{$template}\">{$template}</option>";
        }
        ?>
    </select>
</div>

<div style="float:left;width:180px;">
    <h2><?php  echo t('Default State')?></h2>
    <select name="state">
        <option value="0"<?php  echo $controller->state == 0 ? ' selected="selected" ' : ''?>><?php  echo t('Open')?></option>
        <option value="1"<?php  echo $controller->state == 1 ? ' selected="selected" ' : ''?>><?php  echo t('Closed')?></option>
    </select>
</div>

<div style="float:left;width:120px;">
    <h2 title="<?php  echo t('Speed in miliseconds')?>"><?php  echo t('Speed')?></h2>
    <input type="text" size="5" name="speed" value="<?php  echo $controller->getSpeed()?>"/>
</div>

<div style="clear:both"></div>

<h2><?php  echo t('Content')?></h2>

<div style="text-align: center" id="ccm-editor-pane">

    <?php  Loader::element('editor_config'); ?>
    <?php  Loader::element('editor_controls');?>
    <?php  echo $form->textarea('content', $content, array('class' => 'ccm-advanced-editor'));?>

</div>