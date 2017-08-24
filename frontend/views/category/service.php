<?php $assets = Yii::getAlias('@web');$this->title = $page['meta_title']; ?>
<div class="container">
    <div class="page__in">
        <aside class="sidebar">
            <div class="links__list indent-bt-big">
                <ul>
                    <!--<li>
                        <i class="fa fa-file-text-o"></i>
                        <span>
                            <a href="#">Образец договора<br> на оказание услуг</a>
                        </span>    
                    </li>
                    <li>
                        <i class="fa fa-credit-card"></i>
                        <span>
                            <a href="#">Порядок оплаты<br> наших услуг</a>
                        </span>    
                    </li>-->
                    <li>
                        <i class="fa fa-money"></i>
                        <span>
                            <a href="#">Политика<br /> ценнообразования</a>
                        </span>
                    </li>
                </ul>
            </div>   
            <div class="widget">
                <div class="widget__in">
                    <span>Важно знать</span>
                    <p>Стоимость услуг юриста приблизительная, может изменяться в зависимости от обстоятельств дела</p>
                </div>
            </div>
        </aside>     
        <section class="main-content">
            <div class="content">
                <?= $page['full_description']; ?>
            </div>  
            <?= app\widgets\forms\Feedback::widget(); ?>            
            <?= app\widgets\lists\Price::widget(['title' => 'Стоимость наших услуг', 'page_id' => $page['id']]); ?>
            <?= app\widgets\lists\OtherServices::widget(['parent' => $page['parent'], 'id' => $page['id']]); ?>   
        </section>
    </div>
</div> 