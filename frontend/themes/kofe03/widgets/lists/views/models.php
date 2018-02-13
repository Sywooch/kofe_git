<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="search-brends">
    <div class="left"><img src="<?= $assets . $siteConfig['theme'] . '/'; ?>images/<?= $siteConfig['id']; ?>/search.svg" alt=""></div>
    <div class="right">
        <?=
        yii\jui\AutoComplete::widget([
            'name' => 'models',
            'clientOptions' => [
                'source' => $searches,
                'select' => new yii\web\JsExpression('function(event, ui){window.location.href = "/" + ui.item.url;return false;}'),
            ],
            'options' => ['placeholder' => 'Название модели', 'class' => 'form__input ui-autocomplete-input',],
                ]
        );
        ?>
    </div>
</div>
<?php $a = 0; foreach ($sortedBrands as $latter => $brands): $a++; ?>
    <div class="search-brends<?= $a != 1 ? ' hide' : '' ?>">
        <div class="left"><?= $latter; ?></div>
        <div class="right">
            <ul class="menu__list">                
                <?php foreach ($brands as $brand): ?>
                    <?php
                    if ($siteConfig['mono'])
                        $brand['url'] = str_replace(\app\components\CController::$monoBrand['url'] . '/', Yii::$app->params['replace-url'], $brand['url']);
                    $path = Yii::getAlias('@frontend') . '/web/uploads/images/';
                    $file = $path . $brand['image'];                    
                    if (!is_file($path . 'thumbs/' . $brand['image'])) {                        
                        $image = Yii::$app->image->load($file);
                        $image->resize(133, 117)->background('#fff', 100)->save($path . 'thumbs/' . $brand['image'], 60);
                    }
                    ?>
                    <li class="menu__item">
                        <a class="menu__link" href="/<?= $brand['url']; ?>">
                            <?php if (!Yii::$app->params['devicedetect']['isMobile']): ?>
                                <div class="img">
                                    <?php if (!empty($brand['image'])): ?>
                                        <img src="/uploads/images/thumbs/<?= $brand['image'] ?>" alt="<?= $brand['title']; ?>" title="<?= $brand['title']; ?>" />
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>	
                            <span><?= app\components\CController::$category['id'] != 7 ? $brand2 . ' ' : ''; ?><?= str_replace('/', ' / ', $brand['title']); ?></span>
                        </a>                        
                    </li>
                <?php endforeach; ?>               
            </ul>
        </div>
    </div>
<?php endforeach; ?>
