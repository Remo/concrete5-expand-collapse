<?php
defined('C5_EXECUTE') or die('Access Denied.');
?>
<div class="ccm-remo-expand">
    <?php
    $className = 'ccm-remo-expand-open';
    if ($state == 1) {
        $className = 'ccm-remo-expand-closed';
    }

    echo '<div id="ccm-remo-expand-title-' . $bID . '" class="ccm-remo-expand-title ' . $className . '" data-expander-speed="' . $speed . '">' . $title . '</div>';
    echo '<div class="ccm-remo-expand-content-padding-wrapper">';
    echo '<div id="ccm-remo-expand-content-' . $bID . '" class="ccm-remo-expand-content">';
    echo $content;
    echo '</div></div>';
    ?>
</div>