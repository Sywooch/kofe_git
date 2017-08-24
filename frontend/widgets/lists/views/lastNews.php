<div class="widget__in">
    <span><?= date('d.m.Y', strtotime($model['date'])); ?></span>
    <p>
        <a href="/<?= $model['url']; ?>"><?= $model['title']; ?></a>
    </p>
</div>