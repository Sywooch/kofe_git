<div class="bl-faults">
    <div class="bl-text">
        <div class="heading">
            <h2>Популярные модели </h2>
        </div>
    </div>
    <div class="list frame" id="my-modelas">
        <ul class="clearfix">
            <?php foreach ($rows as $row): ?>
                <li>
                    <div class="img"><img src="/uploads/images/<?= $row['image']; ?>" alt=""></div>
                    <div class="name"><a href="/<?= $row['url']; ?>"><?= $row['brand_title'] . ' ' . $row['title']; ?></a></div>                
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="scrollbar">
        <div class="handle">
            <div class="mousearea"></div>
        </div>
    </div>
    <div class="controls center">
        <button class="prevPage"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
        <button class="nextPage"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
    </div>
</div>