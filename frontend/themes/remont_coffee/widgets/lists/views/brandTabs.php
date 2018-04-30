<div class="brend-tabs">
    <div class="tabmenu">
        <div class="container">
            <?php if (!empty($pageInfo['full_description'])): ?>
                <div class="tab-b" rel="tab-text-1">Описание</div>
            <?php endif; ?>
            <div class="tab-b active" rel="tab-neispravnost">Неисправности бренда</div>
            <div class="tab-b" rel="tab-tseni">Цены на услуги</div>
            <div class="tab-b" rel="tab-text-2"<?= !empty($error['description']) ? ' style="display: none;"' : ''; ?>>Коды ошибок</div>
        </div>
    </div>
    <?= remont_coffee\widgets\lists\Neispravnost::widget(['title' => 'Типовые  <span>неисправности</span> ' . $pageInfo['title']]); ?>
    <div id="tab-text-1" class="full-text tab_content">
        <div class="container">
            <?php if (!empty($pageInfo['full_description'])): ?>
                <?= str_replace('#brand_en#', $pageInfo['title'], $pageInfo['full_description']); ?>
            <?php endif; ?>
        </div>
    </div>
    <?= remont_coffee\widgets\lists\Neispravnost::widget(['type' => 1, 'is_popular' => true, 'title' => 'Оказываемые услуги', 'view' => 'neispravnostTable']); ?>
    <?= remont_coffee\widgets\lists\PopularModels::widget(['parent' => $pageInfo['id']]); ?>
    <?php if (!empty($error['description'])): ?>
        <div id="tab-text-2" class="full-text tab_content">
            <div class="container">
                <?= $error['description']; ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="button-section">
        <div class="container">
            <a class="button opan-all-models" href="#">Все модели <?= $pageInfo['title']; ?></a>
        </div>
    </div>
    <?= remont_coffee\widgets\lists\Models::widget(['parent' => $pageInfo['id'], 'brand' => $pageInfo['title']]); ?>
</div>