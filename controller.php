<?php

defined('C5_EXECUTE') or die('Access Denied.');

class RemoExpandPackage extends Package {

    protected $pkgHandle = 'remo_expand';
    protected $appVersionRequired = '5.6.2.1';
    protected $pkgVersion = '1.2.6';

    public function getPackageDescription() {
        return t("Expand / Collapse Content.");
    }

    public function getPackageName() {
        return t("Expand / Collapse");
    }

    public function install() {
        $pkg = parent::install();

        // install block		
        BlockType::installBlockTypeFromPackage('remo_expand', $pkg);
    }

}