<?php $assets = Yii::getAlias('@web');
$this->title = $page['meta_title'];
 ?>
<div class="container">
    <div class="page__top-panel modified">
        <dl>
            <dt class="pos-top <?= $page['icon']; ?>"><?= $page['title']; ?></dt>
            <dd>
                <div class="links__list three-col icon-white">
                    <?= app\widgets\lists\Services::widget(['parent' => $page['id'], 'type' => 'category']); ?>
                </div> 
            </dd>
        </dl>
    </div>
    <div class="page__in">
        <aside class="sidebar">
            <div class="links__list">
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
                            <a href="#">Политика<br> ценнообразования</a>
                        </span>
                    </li>
                </ul>
            </div> 
        </aside>     
        <section class="main-content">
            <div class="content">
                <?= $page['full_description']; ?>
            </div>  
            <?= app\widgets\forms\Feedback::widget(['class' => 'call-widget indent-bt-none']); ?>            
        </section>
    </div>
</div> 