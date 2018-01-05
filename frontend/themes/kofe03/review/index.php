<?php
$this->title = !empty($pageInfo['meta_title']) ? $pageInfo['meta_title'] : $pageInfo['title'];
?>
<main class="layout__content" role="main">
    <header class="layout__head">
        <div class="layout__inner">
            <nav class="breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" itemprop="url" rel="Главная" href="/"><span itemprop="title">Главная</span></a></li>
                </ul>
                <span class="breadcrumbs__current">Отзывы</span>
            </nav>
            <h1 class="layout__title">Отзывы</h1>
        </div>
    </header>
    <section class="reviews reviews_context">
        <div class="reviews__inner">
            <div class="reviews__list">
                <?php foreach ($rows as $row): ?>
                    <article class="reviews__item">
                        <div class="reviews__box">
                            <h4 class="reviews__name"><?= $row['username']; ?></h4>
                            <div class="reviews__rating reviews__rating_<?= $row['rating']; ?>"></div>
                            <?= $row['message']; ?>
                            <div class="reviews__more">
                                <a class="reviews__full js-popup" data-popup="review_<?= $row['id']; ?>" href="#">Еще</a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
                <?=
                \yii\widgets\LinkPager::widget([
                    'pagination' => $pagination,
                ]);
                ?>
            </div>
            <?php foreach ($rows as $row): ?>
            <div class="popup popup_reviews popup_review_<?= $row['id']; ?>">
               <div class="popup__bg"></div>
               <div class="popup__main">
                  <div class="popup__review">
                     <div class="reviews">
                        <div class="reviews__single reviews__single_zoon">
                           <div class="reviews__container">
                              <h4 class="reviews__name"><?= $row['username']; ?></h4>
                              <div class="reviews__rating reviews__rating_5"></div>
                              <div class="reviews__text_popup">
                                 <?= $row['message']; ?>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="popup__close"></div>
               </div>
            </div>
            <?php endforeach; ?>
            <div class="post__content">
              <br>
              <h2>Оставит отзыв</h2>
               <form class="form form_feedback ajax_form" id="feedBack" method="post" action="form/" novalidate="novalidate">
                  <input type="hidden" name="nospam:blank" value="">
                  <div class="form__row">
                     <label class="form__element form__element_input">
                     <input class="form__input form__input_big" name="name" placeholder="Ваше имя">
                     </label>
                     <label class="form__element form__element_input">
                        <input class="form__input form__input_big" type="text" name="order" placeholder="Номер договора">
                        <span class="form__help">
                           <svg class="form__help-ico" xmlns="http://www.w3.org/2000/svg" width="9" height="18" viewBox="0 0 9 18">
                              <path class="form__help-path" d="M1976.82,1413a2.23,2.23,0,1,1,2.25-2.23A2.145,2.145,0,0,1,1976.82,1413Zm3.03-10.07a4.3,4.3,0,0,0-1.28,3.06v0.44h-3.32l-0.03-.63a5.252,5.252,0,0,1,1.48-3.82,4.7,4.7,0,0,0,1.45-2.57c0-.86-0.58-1.45-1.83-1.47a4.791,4.791,0,0,0-2.47.73l-0.85-2.66a8.7,8.7,0,0,1,4.17-1.01c3.3,0,4.83,1.79,4.83,3.82C1982,1400.68,1980.8,1401.91,1979.85,1402.93Z" transform="translate(-1973 -1395)"></path>
                           </svg>
                           <span class="form__example">
                           <img class="form__order" src="images/example.png" alt="">
                           </span>
                        </span>
                     </label>
                     <label class="form__element form__element_input form__element_valid">
                     <input class="form__input form__input_big form__input_phone-mask" name="phone" placeholder="Достоинства" required="" aria-required="true">
                     </label>
                  </div>
                  <div class="form__row">
                     <label class="form__element form__element_textarea">
                     <textarea class="form__textarea form__textarea_big" name="message" placeholder="Содержание отзыва"></textarea>
                     </label>
                  </div>
                  <div class="clear"></div>
                  <div class="personalData">
                     <label class="form__element form__element_input form__element_valid">
                     <input type="checkbox" name="personalData" checked="checked">
                     <span class="f14" style="font-size: 10px;">Согласен с условиями <a href="#" target="_blank">обработки персональных данных</a></span></label>
                  </div>
                  <label class="form__element form__element_input form__element_valid">
                     <div class="form__row form__row_submit">
                        <input type="submit" class="button button_success button_text button_big" name="submit4" value="Отправить">
                     </div>
                  </label>
                  <input type="hidden" name="af_action" value="e7cdd32bc687446376388437b383983f">
               </form>
            </div>
        </div>
    </section>
    <?= kofe03\widgets\other\Feedback::widget(); ?>
    <?= kofe03\widgets\lists\PopularBrands::widget(); ?>
</main>