<div class="breadcrumb">
    <a href="/">Главная</a>
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