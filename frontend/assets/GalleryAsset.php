<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Description of GalleryAsset
 *
 * @author Max
 */
class GalleryAsset extends AssetBundle{
    
    public $css = [
        'css/gallery/style.css',
    ];
    
    public $js = [
        'js/isotope/isotope.js',
    ];
    
    public $depends = [
        'yii\web\JqueryAsset'
    ];
            
            
}
