<?php
$siteConfig = app\components\CController::getSiteConfig();
$assets = '/' . Yii::getAlias('@web');
?>
<div class="main_container">
    <div id="rumiservice3" class="inner_container">
        <div class="rumiservice3_header">
            Мы уже сделали:
        </div>
        <div class="rumiservice3_buttons">
            <?php $a = 0; ?>
            <?php foreach ($charts as $category => $chart): ?>
                <?php $a++; ?>
                <div class="rumiservice3_button_container">
                    <div class="rumiservice3_button colortexthover<?= $a == 1 ? ' rumiservice3_button_active' : ''; ?>" button_id="<?= $a; ?>" href="#">
                        Ремонт <?= mb_strtolower($category, 'utf8'); ?>       
                    </div>
                </div>
            <?php endforeach; ?>            
        </div>
        <?php $a = 0; ?>
        <?php foreach ($charts as $chart): ?>
            <?php $a++; ?>
            <div class="rumiservice3_blocks rumiservice3_block<?= $a; ?>"<?= $a != 1 ? ' style="display:none;"' : ''; ?>>
                <div class="rumiservice3_left_block">
                    <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>image/cache/data/rumiservice3-259x440.jpg" />
                </div>
                <div class="rumiservice3_chart">
                    <div class="rumiservice3_chart_bg"></div>
                    <div class="rumiservice3_chart_tooltip">
                        <span>7846</span> устройств за 3 года           
                    </div>
                    <div data-chart="<?= json_encode($chart); ?>" id="chart<?= $a; ?>"></div>
                </div>
            </div>
        <?php endforeach; ?>        
    </div>
</div>