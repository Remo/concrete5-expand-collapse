<?php
defined('C5_EXECUTE') or die('Access Denied.');
?>

<div class="ccm-remo-expand">
    <?php
    global $c;

    $className = 'ccm-remo-expand-open';
    if ($controller->state == 1) {
        $className = 'ccm-remo-expand-closed';
    }

    echo '<div id="ccm-remo-expand-title-' . $bID . '" class="ccm-remo-expand-title ' . $className . '" data-expander-speed="' . $this->controller->getSpeed() . '">' . $controller->title . '</div>';
    echo '<div id="ccm-remo-expand-content-' . $bID . '" class="ccm-remo-expand-content">';
    $content = $controller->getContent();
    echo $content;
    echo '</div>';
    ?>
</div>