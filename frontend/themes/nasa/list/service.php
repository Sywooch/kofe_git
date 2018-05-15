<?php
$assets = Yii::getAlias('@web');
$url = Yii::$app->request->pathInfo;
$url = explode('/', $url);
array_pop($url);
$url = implode('/', $url);
$this->title = $title;
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="content">
    <div class="container">
        <div class="row">
            <?= nasa\widgets\menu\LeftMenu::widget(['id' => $pageInfo['id'], 'prefUrl' => $url]); ?>            
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-7">
                        <h1><?= (!empty($h1) ? ' ' . $h1 . ' ' : $pageInfo['title']); ?></h1> 
                        <?= $seoText; ?>
                        <p>Звоните сейчас <a href="tel:<?= preg_replace("/\D/", "", Yii::$app->session['region']['phone']); ?>"><?= Yii::$app->session['region']['phone']; ?></a> и уже совсем скоро ваша кофемашина будет радовать вас! </p>
                    </div> 
                    <div class="col-md-5">
                        <div class="content__fault">
                            <div class="bg-danger content__fault-icon">
                                <img alt="" src="/img/icons/fault-not-do-coffee.png"> 
                            </div> 
                            <div class="content__fault-image"></div>                                
                        </div> 
                    </div>
                </div> 
                <div class="content__divider"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="content__pricebox">
                            <p>Стоимость ремонта неисправности: </p>
                            <div class="content__pricebox-value"> от <?= round($pageInfo['price']); ?> р. </div>                                
                        </div> 
                    </div> 
                    <div class="col-md-8">
                        <div class="content__consult pl-md-4">
                            <div class="content__consult-heading h4"> Закажите бесплатную<br>консультацию специалиста! </div> 
                            <div class="content__consult-form text-center">
                                <?= nasa\widgets\forms\Main::widget(); ?>
                                
                            </div>
                            <div class="content__consult-text"> Наш специалист перезвонит вам в течение 2 минут. </div>
                        </div> 
                    </div>
                </div>
                <div class="content__divider"></div>
                <?= nasa\widgets\other\Advantage::widget(); ?>
            </div>
        </div> 
    </div> 
</div>
<?= nasa\widgets\other\Advantage::widget(['view' => 'warranty']); ?>
<?= nasa\widgets\other\Advantage::widget(['view' => 'timer']); ?>