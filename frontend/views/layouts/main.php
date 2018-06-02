<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;

//AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!-- Bootstrap -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<?php $this->beginBody() ?>

<?= $content ?>
<hr>
<footer class="footer" style="background: #202020; padding: 0px 0 0; color: #959595;">


    <div style="
     background: #111;
    font-size: 13px;
    text-align: center;
    color: #555;
    padding-top: 28px;
    padding-bottom: 28px;
    border-top: 1px solid #303030;">

        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                <span>Copyright ©
                   扬州丰产生物科技有限公司
                </span>
                    |
                    <span>京ICP备11008151号</span>
                    |
                    <span>京公网安备11010802014853</span>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </div>

</footer>


<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
