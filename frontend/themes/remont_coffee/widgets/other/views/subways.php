<div class="contact-infos">
    <div class="map-gl">
        <div class="text">
            <div class="name">
                <a href="/kontakty">Наш адрес в <span>Москве</span></a>
            </div>
            <p>г. Москва, м. Китай-город, Охотный ряд, ул. Ильинка 4.</p>
            <p><a href="tel:84953239009">8 (495) 323-90-09</a></p>
            <p>Работаем ежедневно c 09:00 до 20:00 без выходных и праздничных дней</p>
        </div>
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A0ff8bd3ce233081eb21bc5385e1162d99deb9e5cf7531729f8b38d4a44e5b1f0&amp;source=constructor" frameborder="0"></iframe>
    </div>
    <div class="metro">
        <h2 class="gl-text">Ремонт кофемашин в <br>Москве, <span>рядом с метро</span></h2>

        <div class="owl-carousel metro-c owl-theme">
            <?php foreach ($pages as $key => $page): ?>
                <?php if (($key % 5) === 0): ?><div class="item"><?php endif; ?>                    
                    <a href="/<?= $page['url']; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 153 153" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Слой_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                <path class="<?= $page['icon']; ?>" d="M76 0c42,0 77,34 77,76 0,42 -35,77 -77,77 -42,0 -76,-35 -76,-77 0,-42 34,-76 76,-76zm8 68c-4,10 -8,18 -8,18 0,0 -3,-8 -7,-18 -4,-10 -7,-18 -7,-18 0,0 -5,12 -10,26l-10 27 4 0c2,0 4,0 4,0 0,0 3,-8 6,-17 4,-10 7,-17 7,-17 0,0 2,7 6,15 7,21 7,19 7,19 1,0 0,2 8,-19 3,-8 6,-15 6,-15 0,0 3,7 6,17 4,9 7,17 7,17 0,0 1,0 4,0l4 0 -10 -26c-5,-15 -10,-27 -10,-27 0,0 -3,8 -7,18zm-14 -60c-13,2 -25,6 -36,14 -3,2 -10,9 -12,12 -4,6 -8,14 -10,20 -2,3 -3,9 -3,13 -1,4 -1,14 0,19 1,12 6,23 14,33 2,2 8,9 11,11 9,7 21,12 33,14 4,1 14,1 19,0 12,-2 22,-6 32,-14 3,-2 10,-9 12,-12 5,-6 9,-13 11,-19 1,-4 2,-9 3,-13 1,-5 1,-15 0,-19 -2,-12 -7,-24 -14,-33 -2,-3 -9,-9 -11,-11 -10,-8 -21,-13 -33,-14 -4,-1 -13,-1 -16,-1zm13 10c23,3 42,18 49,39 10,29 -3,60 -30,73 -32,15 -70,-1 -82,-34 -9,-28 4,-60 30,-72 11,-5 22,-7 33,-6z"></path>
                            </g>
                        </svg>
                        <?= $page['title']; ?>
                    </a>                    
                <?php if (($key % 5) === 4 || ($key + 1) == count($pages)): ?></div><?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="clear"></div>
</div>