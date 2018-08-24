<?php
$assets = '/' . Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<div class="servicessss">
	<?= coffee_repair\widgets\lists\Neispravnost::widget(['title' => 'Частые неисправности кофемашин', 'type' => 2, 'is_popular' => 1]); ?>
</div>
<?= coffee_repair\widgets\lists\Neispravnost::widget(['type' => 1, 'is_popular' => 1, 'view' => 'services']); ?>