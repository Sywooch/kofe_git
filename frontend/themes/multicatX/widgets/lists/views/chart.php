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
            <div class="rumiservice3_button_container">
                <div class="rumiservice3_button colortexthover rumiservice3_button_active" button_id="1" href="smartfonyi/index.html">
                    Ремонт смартфонов       
                </div>
                <a href="#" style="display:block;">
                    <span>
                        Все услуги для смартфонов                                   
                    </span>
                </a>
            </div>
            <div class="rumiservice3_button_container">
                <div class="rumiservice3_button colortexthover " button_id="2" href="planshetyi/index.html">
                    Планшеты       
                </div>
                <a href="#" style="display:none;width: 278px;left:-30px;">
                    <span>
                        Все услуги для планшетов и ноутбуков                        
                    </span>
                </a>
            </div>
            <div class="rumiservice3_button_container">
                <div class="rumiservice3_button colortexthover " button_id="3" href="gadjetyi/index.html">
                    Гаджеты        
                </div>
                <a href="#" style="display:none;">
                    <span>
                        Все услуги для гаджетов          
                    </span>
                </a>
            </div>
        </div>
        <div class="rumiservice3_blocks rumiservice3_block1" style="">
            <div class="rumiservice3_left_block">
                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>image/cache/data/rumiservice3-259x440.jpg" />
            </div>
            <div class="rumiservice3_chart">
                <div class="rumiservice3_chart_bg"></div>
                <div class="rumiservice3_chart_tooltip">
                    <span>7846</span> устройств за 3 года           
                </div>
                <div id="chart1"></div>
            </div>
        </div>
        <div class="rumiservice3_blocks rumiservice3_block2" style="display:none;">
            <div class="rumiservice3_left_block">
                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>image/cache/data/rumiservice3_image2-259x440.png" />
            </div>
            <div class="rumiservice3_chart">
                <div class="rumiservice3_chart_bg"></div>
                <div class="rumiservice3_chart_tooltip">
                    <span>1084</span> устройств за 3 года           
                </div>
                <div id="chart2"></div>
            </div>
        </div>
        <div class="rumiservice3_blocks rumiservice3_block3" style="display:none;">
            <div class="rumiservice3_left_block">
                <img src="<?= $assets . $siteConfig['theme'] . '/'; ?>image/cache/data/action-camera-xiaomi-yi-travel-edition-259x440.jpg" />
            </div>
            <div class="rumiservice3_chart">
                <div class="rumiservice3_chart_bg"></div>
                <div class="rumiservice3_chart_tooltip">
                    <span>280</span> устройств за 3 года            
                </div>
                <div id="chart3"></div>
            </div>
        </div>
    </div>
</div>