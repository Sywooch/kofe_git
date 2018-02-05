<section class="brands">
    <div class="container">
        <div clas="col-md-12">
            <div class="search-brends">
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
            <div class="brand-list brand-list-text">
                <?php foreach ($sortedBrands as $latter => $brands): ?>
                    <div class="left"><?= $latter; ?></div>
                    <?php foreach ($brands as $brand): ?>
                        <a href="/<?= $brand['url']; ?>">
                            <div class="brand-list_item">
                                <div class="border-coner left"></div>
                                <span><?= str_replace('/', ' / ', $brand['title']); ?></span>
                                <div class="border-coner right"></div>
                            </div>
                        </a>                
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>