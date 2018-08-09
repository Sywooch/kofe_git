<section class="map section-margin">
    <h3><a class="map__link hide-moretablet" href="maps_wm/index.html"><span class="relative">Карта ремонтов</span></a></h3>
    <div class="hide-for-tablet">
        <h3>Карта ремонтов</h3>
        <div class="districts">
            <div class="tab"><a class="tab-link tab-link--active">Москва</a></div>
            <div class="districts__section tabcontent" id="City">
                <?php foreach ($rows as $latter => $cities): ?>
                    <div class="districts__section__item">
                        <span class="districts-list__caps">A</span>
                        <ul class="districts-list">
                            <?php foreach ($cities as $city): ?>
                                <li class="districts-list__item">
                                    <a class="link districts-list__link" href="/<?= $city['url']; ?>"><?= $city['title']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="region-districts__section-list tabcontent" id="Region">
                <p>SomeText</p>
            </div>
            <a class="button button--dark button--small text-transform-upper" href="#">Все районы</a>
        </div>
    </div>
</section>