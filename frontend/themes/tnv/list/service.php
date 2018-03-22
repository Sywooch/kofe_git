<?= tnv\widgets\other\Breadcrumbs::widget(['data' => $breadcrumbs]); ?>
<div class="aside-layout container mb166">
    <div class="row sticky-parent">
        <aside class="aside float--left col-xs-12 col-md-4" data-stick="true">
            <div class="aside--inner sm-reverse lg-pr">
                <div class="mb">
                    <?= tnv\widgets\other\LeftMenu::widget(); ?>
                </div>
            </div>
        </aside>
        <div class="page float--right col-xs-12 col-md-8">
            <div data-flatr="webpage 46">
                <h1 class="page--title"><?= (!empty($h1) ? ' ' . $h1 . ' ' : $pageInfo['title']); ?></h1>
                <div class="richtext ">
                    <?= str_replace(['#brand_en#', '#model_en#'], $page['title'], $seoText); ?>
                </div>
            </div>
            <div class="con-equipment--tools">
                  <div class="row">
                     <div class="col-xs-5 col-sm-3">
                        <div class="con-equipment--label">Цена </div>
                        <div class="counter">
                           <div class="counter--digits">
                              <span><?= number_format($pageInfo['price'], 0, ' ', ' '); ?></span>
                              <div class="counter--label">руб</div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-7 col-sm-5 col-md-4 col-lg-5">
                        <div class="con-equipment--installment hidden-md">или в рассрочку<br> на год за 300 р/мес<i data-toggle="tooltip" data-placement="top" title="" class="helper icon-help" data-original-title="Приобретайте оборудование в рассрочку. Первый платеж составляет 0 руб. Ежемесячный платеж со второго месяца составит всего 300 руб/мес. Срок предоставления рассрочки 20 месяцев."></i></div>
                        <div class="con-equipment--installment visible-md">Рассрочка<i data-toggle="tooltip" data-placement="top" title="" class="helper icon-help" data-original-title="Подсказка"></i></div>
                     </div>
                     <div class="col-xs-12 col-sm-4 col-md-5 col-lg-4">
                        <div class="con-equipment--btn"><a href="#" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#online-zayavkamy">Заказать</a></div>
                     </div>
                  </div>
               </div>
        </div>
    </div>
</div>
