<?php
   $assets = Yii::getAlias('@web');
   ?>
<section id="number-8">
   <div class="container">
      <?php 
         $bitta = false;
         if(count($rows) == 1)
             $bitta = true;
         ?>
      <?php if($bitta): ?>
      <div class="left">
         <?php foreach ($rows as $row): ?>
         <div data-tab="tabs-<?= $row['id']; ?>" class="colorborder"><a href="<?= $row['url']; ?>"><?= $row['full_title']; ?></a></div>
         <?php endforeach; ?>
      </div>
      <?php else: ?>
      <div class="left tab-gl">
         <?php foreach ($rows as $row): ?>
         <div data-tab="tabs-<?= $row['id']; ?>" class="colorborder colortexthover"><?= $row['full_title']; ?></div>
         <?php endforeach; ?>
      </div>
      <?php endif; ?>
      <?php foreach ($rows as $key => $row): ?>
      <div id="tabs-<?= $row['id']; ?>" class="item<?= $key == 0 ? ' active' : ''; ?>">
         <?php if (isset($row['children']) && !empty($row['children'])): ?>
         <div class="right">
            <div class="frames">
               <div>
                  <?php foreach ($row['children'] as $model): ?>
                  <a class="colorborder" href="/<?= $model['url']; ?>">
                     <div class="img"><img src="/uploads/images/<?= $model['image']; ?>"></div>
                     <span>Ремонт</span><?= $model['title']; ?>
                  </a>
                  <?php endforeach; ?>
               </div>
            </div>
         </div>
         <div class="clear"></div>
         <?php endif; ?>
      </div>
      <?php endforeach; ?>
   </div>
</section>