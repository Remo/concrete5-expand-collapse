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

    echo '<a href="" id="ccm-remo-expand-title-' . $bID . '" class="ccm-remo-expand-title ' . $className . '" data-expander-speed="' . $this->controller->getSpeed() . '"><span class="ccm-background"><span class="ccm-icon">' . $controller->title . '</span></span></a>';
    echo '<div id="ccm-remo-expand-content-' . $bID . '" class="ccm-remo-expand-content">';
    $content = $controller->getContent();

    echo $content;
    echo '</div>';
    ?>
</div>