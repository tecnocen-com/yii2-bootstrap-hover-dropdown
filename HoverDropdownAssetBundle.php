<?php
namespace tecnocen\hoverdropdown;
use \yii\web\AssetBundle;

class HoverDropdownAssetBundle extends AssetBundle {
    public $sourcePath = '@bower/bootstrap-hover-dropdown';
    public $js = [
        'bootstrap-hover-dropdown.min.js'
    ];
}