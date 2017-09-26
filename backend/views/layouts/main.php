<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => 'Kofe - admin',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                    ['label' => 'Главная', 'url' => ['/site/index']],
                    ['label' => 'Заказы', 'url' => ['/orders/index']],
                    ['label' => 'Страницы', 'url' => ['/page/index']],
                    ['label' => 'Услуги', 'url' => ['/services/index']],
                    ['label' => 'Привязка услуг', 'url' => ['/services/linking']],
                    ['label' => 'Ява скрипты', 'url' => ['/services/js']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link']
                        )
                        . Html::endForm()
                        . '</li>';
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
            ?>

            <div class="container">
<?=
Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
])
?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
<script>
    $("#seo-meta_title").keyup(function () {
        var el = $(this);
        $("#cnt-title").text(el.val().length);
    });
    $("#seo-meta_description").keyup(function () {
        var el = $(this);
        $("#cnt-desc").text(el.val().length);
    });
    $("#select-site").on("change", function () {
        var id = $(this).val();
        $.get('/services/js', {id: id}, function (resp) {
            $("#site-js").val(resp);
        });
    });
    $("#site-save").on("click", function () {
        var js = $("#site-js").val();
        var site = $("#select-site").val();
        var robots = $("#site-robots").val();
        var yandex = $("#yandex-verification").val();
        $.post("/services/js", {js: js, site: site}, function (resp) {
            $("#site-js").val(resp);
        });
    });
</script>