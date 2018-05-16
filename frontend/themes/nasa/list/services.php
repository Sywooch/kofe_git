<?php
$siteConfig = app\components\CController::getSiteConfig();
$breadcrumbs = [
    ($siteConfig['mono'] ? 'Прайс-лист' : $pageInfo['title']),
];
$this->title = $pageInfo['meta_title'];
?>
<div class="content">
    <div class="container">
        <h1><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title'] ?></h1>
        <?= $pageInfo['description'] ?><br />
        <div class="row">
            <?= nasa\widgets\lists\Price::widget(); ?>            
        </div><br>
        <div class="callback">
            <div class="align-items-center row">
                <div class="col-lg-6 col-md-8 col-xl-5 offset-lg-5 offset-md-3 offset-xl-6">
                    <div class="callback__heading h3"> Не нашли свою поломку? </div>
                    <div class="callback__text"> Свяжитесь с нами по телефону <a class="text-nowrap" href="tel:+74955404164">+7 (495) 540-41-64</a> или закажите бесплатную консультацию. </div>
                    <div class="callback__form text-center">
                        <form action="/order.php" class="form-order" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group"><input class="form-control" name="phone" placeholder="Номер телефона *" required="" type="tel"> </div>
                                </div>
                                <div class="col-md-6"><button class="btn btn-block btn-dark" type="submit"> Заказать консультацию </button> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>