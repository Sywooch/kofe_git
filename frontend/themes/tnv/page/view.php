<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($model['meta_title']) ? $model['meta_title'] : $model['title'];
$breadcrumbs = [
    $model['title'],
];
?>
<?= tnv\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<div class="aside-layout container mb166">
    <div class="row sticky-parent">
        <aside class="aside float--left col-xs-12 col-md-4" data-stick="true">
            <div class="aside--inner sm-reverse lg-pr">
                <div class="mb">
                    <?= tnv\widgets\other\LeftMenu::widget(); ?>
                </div>
                <div class="aside--banner mt visible-lg">
                    <!--  AdRiver code START. Type:AjaxJS Site: ntvplus BN:1 -->
                    <div id="adriver_banner_1865176885"></div>
                    <script type="text/javascript">
                        new adriver("adriver_banner_1865176885", {sid: 85358, bt: 52, bn: 1});
                    </script>
                    <!--  AdRiver code END  -->
                </div>
            </div>
        </aside>
        <div class="page float--right col-xs-12 col-md-8">
            <div data-flatr="webpage 46">
                <h1 class="page--title"><?= !empty($model['meta_h1']) ? $model['meta_h1'] : $model['title']; ?></h1>
                <div class="richtext ">
                    <?= $model['description']; ?>
                </div>
            </div>
        </div>
    </div>
</div>