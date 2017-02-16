<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/themes/adminlte/bootstrap/css/bootstrap.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',
        '/themes/adminlte/dist/css/AdminLTE.min.css',
        '/themes/adminlte/dist/css/skins/_all-skins.min.css',
        '/themes/adminlte/plugins/iCheck/flat/blue.css',
        '/themes/adminlte/plugins/morris/morris.css',
        '/themes/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css',
        '/themes/adminlte/plugins/datepicker/datepicker3.css',
        '/themes/adminlte/plugins/daterangepicker/daterangepicker.css',
        '/themes/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        '/themes/adminlte/custom.css',
    ];
    public $js = [
         '/themes/adminlte/plugins/jQuery/jquery-2.2.3.min.js',
         'https://code.jquery.com/ui/1.11.4/jquery-ui.min.js',
         '/themes/adminlte/bootstrap/js/bootstrap.min.js',
         'https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
         // '/themes/adminlte/plugins/morris/morris.min.js',
         '/themes/adminlte/plugins/sparkline/jquery.sparkline.min.js',
         '/themes/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
         '/themes/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
         '/themes/adminlte/plugins/knob/jquery.knob.js',
         'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js',
         '/themes/adminlte/plugins/daterangepicker/daterangepicker.js',
         '/themes/adminlte/plugins/datepicker/bootstrap-datepicker.js',
         '/themes/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
         '/themes/adminlte/plugins/slimScroll/jquery.slimscroll.min.js',
         '/themes/adminlte/plugins/fastclick/fastclick.js',
         '/themes/adminlte/dist/js/app.min.js',
         // '/themes/adminlte/dist/js/pages/dashboard.js',
         '/themes/adminlte/dist/js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
