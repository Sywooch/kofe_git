<?php
$breadcrumbs = [
    $pageInfo['title'],
];
$this->title = $pageInfo['meta_title'];
$siteConfig = app\components\CController::getSiteConfig();
?>
<?= ofitsial\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<div class="container">    
    <section class="page page-contacts">
        <h1 class="apm_heading"><?= !empty($pageInfo['meta_h1']) ? $pageInfo['meta_h1'] : $pageInfo['title'] ?></h1>
        <div class="commercpage_text">
        	<?= !empty($pageInfo['description']) ? $pageInfo['description'] : '<p>Мы, сервисный центр по ремонту кофемашин &laquo;РемонтКофе&raquo; - команда профессионалов, которые знают все о кофемашинах от А до Я. Наши мастера работают как на выезде, так и в сервисном центре, осуществляя ремонт кофемашин любой сложности.</p>' ?>
        </div>
        <div class="row">
            <?= $pageInfo['full_description']; ?>
        </div>
    </section>
</div>
<?= ofitsial\widgets\other\Ht::widget(['view' => 'map']); ?>
<?= ofitsial\widgets\lists\LastReviews::widget(); ?>