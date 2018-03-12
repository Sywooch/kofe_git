<?php
   $assets = Yii::getAlias('@web');
   ?>
<section id="number-8">
   <div class="container">
      <div class="tabs tabs-style-linemove">
         <?php 
            $bitta = false;
            if(count($rows) == 1)
                $bitta = true;
            ?>
         
         <nav class="<?php if($bitta): ?> bittekan <?php endif; ?>">
            <ul>
               <?php foreach ($rows as $key => $row): ?>
                   <?php if($key > 4) break; ?>
                  <li><a href="tabs-<?= $row['id']; ?>" class="icon icon-home"><?= $row['icon']; ?><span><?= $row['full_title']; ?></span></a></li>
               <?php endforeach; ?>
            </ul>
         </nav>
         <?php foreach ($rows as $key => $row): ?>
            <?php if($key > 4) break; ?>
         <div class="content-wrap">
            <section id="tabs-<?= $row['id']; ?>">
               <?php if (isset($row['children']) && !empty($row['children'])): ?>
                  <div class="owl-carousel owl-theme">
                     <?php foreach ($row['children'] as $key => $model): ?>
                        <?php if($key > 9) break; ?>
                     <a class="item colorborder" href="/<?= $model['url']; ?>">
                        <div class="img"><img src="/uploads/images/<?= $model['image']; ?>"></div>
                        <div class="text"><span>Ремонт</span><?= $model['title']; ?></div>
                     </a>
                     <?php endforeach; ?>
                  </div>
               <?php endif; ?>
            </section>
         </div>
         <?php endforeach; ?>
      </div>
   </div>
</section>