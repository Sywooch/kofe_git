<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
$breadcrumbs = [
    $pageInfo['title'],
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
            </div>
        </aside>
        <div class="page float--right col-xs-12 col-md-8">
            <div data-flatr="webpage 11">
                <h1 class="page--title"><?= $pageInfo['meta_h1']; ?></h1>
                <div class="richtext ">
                    <p><span class="call_phone_5"><a href="tel:+74957556789" class="caption moscow">+7&nbsp;(495) 755 67 89</a></span> <a href="tel:88005556789" class="caption russia">8&nbsp;(800) 555 67 89</a> <a href="mailto:rekofe@rekofe.ru" class="caption email">rekofe@rekofe.ru</a> <a href="skype:ntv-plus.com" class="caption skype">ntv‑plus.com</a> <a href="whatsapp://+79163802181" class="caption whatsappviber">+7 (916) 380 21 81</a> &nbsp;<a href="https://t.me/ntvplus_bot" class="caption telegram">ntvplus_bot</a></p>
                    <div class="message warning">
                        <p>Telegram, WhatsApp работают только в режиме чата.&nbsp;<br />Для получения более оперативного ответа просьба указывать номер оформленного договора.</p>
                    </div>
                    <div data-content="region-map" data-contacts-parent="true" class="region-map mb2" data-contacts-url="/ajax/contacts">
                        <div class="region-map--box">
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A0ff8bd3ce233081eb21bc5385e1162d99deb9e5cf7531729f8b38d4a44e5b1f0&amp;source=constructor" width="100%" height="370" frameborder="0"></iframe>
                        </div>
                    </div>
                    <?= $pageInfo['description']; ?>
                </div>
            </div>
        </div>
    </div>
</div>