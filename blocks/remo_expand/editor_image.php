<?php   
$includeAssetLibrary = true; 
$assetLibraryPassThru = array(
	'type' => 'image'
);

$al = Loader::helper('concrete/asset_library');
$bf = null;
global $controllerProduct;

if ($controllerProduct->getFileID() > 0) { 
	$bf = $controllerProduct->getFileObject();
}

?>	
<div class="ccm-block-field-group">
<h2><?php    echo t('Image')?></h2>
<?php    echo $al->image('ccm-b-image', 'fID', t('Choose Image'), $bf);?>
</div>