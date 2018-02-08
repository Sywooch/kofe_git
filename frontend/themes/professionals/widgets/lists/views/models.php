<section class="brands" style="padding-top: 0px;">
    <div class="container">
        <div clas="col-md-12">
            <div class="row">
                <div class="col-lg-16">
                    <h2 class="title title__2">Профессиональный ремонт моделей <?= $brand['title']; ?></h2>
                </div>
                <div class="col-lg-6 col-lg-offset-2">
                    <div class="form dark">
                        <?=
                        yii\jui\AutoComplete::widget([
                            'name' => 'models',
                            'clientOptions' => [
                                'source' => $searches,
                                'select' => new yii\web\JsExpression('function(event, ui){window.location.href = "/" + ui.item.url;return false;}'),
                            ],
                            'options' => ['placeholder' => 'Название модели', 'class' => 'my-input ui-autocomplete-input',],
                                ]
                        );
                        ?>
                    </div>
                </div>
            </div>
            <div class="model-list model-list-text">
                <?php $a = 0; foreach ($sortedBrands as $latter => $brands): $a++; ?>
                    <div class="bukva<?= $a != 1 ? ' hide' : '' ?>"><span><?= $latter; ?></span></div>
                    <?php foreach ($brands as $brand): ?>
                        <a<?= $a != 1 ? ' class="hide"' : '' ?> href="/<?= $brand['url']; ?>">
                            <div class="model-list_item">
                                <div class="border-coner left"></div>
                                    <div class="img">
                                        <img src="/uploads/images/<?= $brand['image']; ?>" alt="<?= $brand['title']; ?>"/>
                                    </div>
                                    <div class="text">
                                        <div><?= $brand['title']; ?></div>
                                    </div>
                                <div class="border-coner right"></div>
                            </div>
                        </a>                
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="show-model">Показать остальные модели</div>
    </div>
</section>