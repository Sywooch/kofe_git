<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use app\widgets\menu\MainMenu;

AppAsset::register($this);
$assets = Yii::getAlias('@web');

$isHome = Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index' ? true : false;
$curRegion = \Yii::$app->session['region'];
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>   
        <link rel="stylesheet" href="/css/fonts.css?v=1.0" type="text/css">
        <link rel="stylesheet" href="/css/all.css?v=2.5" type="text/css">		
        <link href="<?= $assets ?>/favicon.ico?a=14" rel="shortcut icon"/>		
    </head>
    <body> 
<?php //\yii\widgets\Spaceless::begin(); ?>	
       
        <?php $this->beginBody() ?>
        <!-- wrapper Start -->
        <div class="wrapper">
            <!-- header Start -->
            <header class="header">
                <div class="top-panel">
                    <div class="container">
                        <div class="top-panel__in">                            
                            <div class="header__left-col">
                                <?= MainMenu::widget(); ?>
                            </div>
                            <div class="header__right-col">
                                <?= \app\widgets\menu\TopMenu::widget(); ?>
                                <div class="search-form">
                                    <form action="/search" method="get">
                                        <fieldset>
                                            <input type="text" name="text" placeholder="Укажите фразу для поиска">
                                        </fieldset>    
                                    </form>
                                    <span class="search-form__button">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>  
                <div class="header__in<?php echo empty($_GET['data']['description']) ? ' indent-bt-small' : '' ?>">
                    <div class="container">
                        <div class="header__top-col">
                            <div class="header__left-col">
                                <div class="logo">
                                    <a href="/">ФинЮр - консалт</a>
                                </div>
                            </div>
                            <div class="header__right-col">
                                <div class="header__address">
                                    <div class="select">
                                        <select id="change-region">
                                            <?php foreach (\Yii::$app->params['regions'] as $region): ?>
                                                <option<?php echo \Yii::$app->session['region']['id'] == $region['id'] ? ' selected="selected"' : '' ?> value="<?= $region['id']; ?>"><?= $region['title']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <p><?= $curRegion['address']; ?></p>
                                </div>    
                                <div class="phone">
                                    <a href="tel:<?= $curRegion['tel']; ?>"><?= $curRegion['tel']; ?></a> 
                                    <span><?= $curRegion['mode']; ?></span> 
                                </div>
                            </div>
                        </div>
                        <div class="midl-col">
                            <div class="header__left-col">
                                <div class="links__list">
                                    <ul>
                                        <li>
                                            <i class="i i-phone2"></i>
                                            <span>
                                                <a href="#" data-toggle="modal" data-target="#modal">Заказать<br /> обратный звонок</a>
                                            </span>
                                        </li>
                                        <li>
                                            <i class="i i-chat2"></i>
                                            <span>
                                                <a href="#" class="open-chat">Онлайн<br /> консультант</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>    
                            </div>
                            <div class="header__right-col">
                                <h1><?= !empty($_GET['data']['meta_h1']) ? $_GET['data']['meta_h1'] : $_GET['data']['title']; ?></h1>
                                <?= app\widgets\lists\BreadCrumbs::widget(['page' => $_GET['data']]); ?>
                            </div>    
                        </div>
                        <div class="bottom-col">
                            <div class="header__left-col">
                                <?php if ($isHome): ?>
                                    <ul class="info-list">
                                        <li>
                                            <strong>
                                                <a href="/fiz">Физическим лицам</a>
                                            </strong>    
                                        </li>
                                        <li>
                                            <strong>
                                                <a href="/yur">Юридическим лицам</a>
                                            </strong>    
                                        </li>
                                    </ul>
                                <?php endif; ?>
                                <?php if (Yii::$app->controller->id == 'category' && $_GET['data']['url'] != 'about/price-list'): ?>
                                    <ul class="info-list">
                                        <li>
                                            <a href="#"><strong>45</strong> дел расмотрено</a> 
                                        </li>
                                        <li>
                                            <a href="#"><strong>39</strong> дел завершено</a> 
                                        </li>
                                        <li>
                                            <a href="#"><strong>100%</strong> из них успешных</a>  
                                        </li>
                                    </ul>
                                <?php endif; ?>
                            </div>
                            <div class="header__right-col">
                                <?= $_GET['data']['description']; ?>
                            </div>  
                        </div>
                    </div>
                </div>
            </header>  
            <!-- header end -->
            <!-- page Start -->
            <div class="page">
                <?php echo $content; ?>
            </div>
            <!-- page end -->
            <!-- footer Start -->
            <footer class="footer">
                <div class="container">
                    <div class="footer__in">
                        <div class="footer__right-col">
                            <div class="logo">
                                <a href="/">ФинЮр - консалт</a>
                            </div>
                        </div>
                        <div class="footer__left-col">
                            <div class="footer__phone">
                                <ul>
                                    <?php foreach (\Yii::$app->params['regions'] as $region): ?>
                                        <li>
                                            <span><?= $region['title']; ?></span>
                                            <a href="tel:<?= $region['tel']; ?>"><?= $region['tel']; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="development">
                                <dl>
                                    <dt>Дизайн сайта</dt>
                                    <dd><a target="_blank" rel="nofollow" href="http://trumplin.net/">Trumplin</a></dd>
                                </dl>
                            </div>
                            <div class="social">
                                <dl>
                                    <dt>Мы в социальных сетях</dt>
                                    <dd>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-vk"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>    
                </div>    
            </footer>
            <!-- footer end -->
        </div>   
        <!-- wrapper end --> 

        <!-- modal Start -->
        <div class="fx-menu">
            <div class="container">
                <div class="links__list">
                    <ul>
                        <li>
                            <i class="i i-phone2"></i>
                            <span>
                                <a href="#" data-toggle="modal" data-target="#modal">Заказать<br /> обратный звонок</a>
                            </span>
                        </li>
                        <li>
                            <i class="i i-chat2"></i>
                            <span>
                                <a href="#" class="open-chat">Онлайн<br /> консультант</a>
                            </span>
                        </li>
                    </ul>
                </div> 
                <div class="right-col">
                    <span><a href="#"><?= $curRegion['tel']; ?></a></span>
                    <a href="/about/contacts">схема проезда</a>
                </div>
            </div>    
        </div>
        <!-- modal end -->		
		<!-- modal Start -->
		<div class="modal fade" id="alert-box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-content__in">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
						<h3>Спасибо за обращение</h3>
						<p>
							Мы перезвоним в течении 15 минут
						</p>						
					</div>
				</div>
			</div>
		</div>
		<!-- modal end -->
        <?= app\widgets\forms\CallBack::widget(); ?>            		
		<?php //\yii\widgets\Spaceless::end(); ?>
    </body>
</html>
<?php $this->registerJsFile($assets . '/js/jquery.js'); ?>
<?php $this->registerJsFile($assets . '/js/jquery.inputmask.bundle.js'); ?>
<?php $this->registerJsFile($assets . '/js/yii.js'); ?>
<?php $this->registerJsFile($assets . '/js/yii.validation.js'); ?>
<?php $this->registerJsFile($assets . '/js/yii.activeForm.js'); ?>
<?php $this->registerJsFile($assets . '/js/bootstrap.js', ['depends' => [\yii\web\YiiAsset::className()]]); ?>
<?php $this->registerJsFile($assets . '/js/jquery.fancybox.js', ['depends' => [\yii\web\YiiAsset::className()]]); ?>
<?php $this->registerJsFile($assets . '/js/owl.carousel.js', ['depends' => [\yii\web\YiiAsset::className()]]); ?>
<?php $this->registerJsFile($assets . '/js/module.fixedHeader.js', ['depends' => [\yii\web\YiiAsset::className()]]); ?>
<?php $this->registerJsFile($assets . '/js/scripts.js?v=1.4', ['depends' => [\yii\web\YiiAsset::className()]]); ?>
<?php if($flash = Yii::$app->session->getFlash('success')) {echo '<script>$("#alert-box").modal();</script>';} ?>
<?php $this->endBody() ?>
<?php $this->endPage() ?>	