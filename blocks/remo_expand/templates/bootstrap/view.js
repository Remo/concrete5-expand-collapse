/*
 * Since usually there will be several individual accordion panals beeing used on one
 * Page we need to wrap them into a common accordion div to make bootstrap do it's magic
 */
$(document).ready(function() {
    if ($("div.accordion_element").length > 0 && $("#accordion").length == 0 && CCM_EDIT_MODE === false) {
        $("div.accordion_element").wrapAll('<div class="ccm-remo-expand panel-group" id="accordion" />');
    }
});