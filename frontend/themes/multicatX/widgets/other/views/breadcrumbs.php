<div class="breadcrumb">
    <a href="/">Сервисный центр <?= \app\components\CController::$monoBrand['title']; ?></a>
    <?php $a = 1; ?>
    <?php foreach ($data as $url => $title): ?>               
        <?php if (end($data) == $title): ?>
            <a href="#"><?= $title; ?></a>
        <?php else: ?>
            <a href="<?= $url; ?>"><?= $title; ?></a>      
            <?php $a++; ?>                    
        <?php endif; ?>                
    <?php endforeach; ?>
</div>