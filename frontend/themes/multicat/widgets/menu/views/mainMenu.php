<?php
$assets = Yii::getAlias('@web');
$siteConfig = app\components\CController::getSiteConfig();
?>
<nav class="<?= isset($siteConfig['spb']) && $siteConfig['spb'] ? 'colorborder' : 'colorbg ' ?>">
    <div class="container">
        <ul>
            <?php foreach ($rows as $row): ?>
                <li>
                    <a href="/<?= $row['url']; ?>"><?= $row['icon']; ?><?= $row['title']; ?></a>
                    <?php if (isset($row['children']) && !empty($row['children'])): ?>
                        <!--<ul>
                            <div class="container">
                                <?php foreach ($row['children'] as $model): ?>
                                    <li><a class="colorborder" href="/<?= $model['url']; ?>"><img src="<?= $assets ?>/multicat/uploads/images/<?= $model['image']; ?>"><span>Ремонт</span><?= $model['title']; ?></a></li>
                                <?php endforeach; ?>
                            </div>
                        </ul>-->
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
            <li class="yeshsho">
                <a onclick="return false;" href="#"><svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" viewBox="0 0 5111 5088" xmlns:xlink="http://www.w3.org/1999/xlink"><path class="colorsvg" d="M2666 3124l-140 -309c133,-97 247,-218 336,-356l317 120c61,23 128,-8 151,-69l117 -307c11,-29 10,-61 -3,-90 -13,-28 -36,-50 -65,-61l-317 -120c25,-163 20,-329 -15,-490l309 -139c28,-13 50,-37 61,-66 11,-29 10,-61 -2,-90l-135 -299c-27,-59 -97,-86 -156,-59l-309 139c-97,-133 -218,-247 -357,-336l121 -317c23,-60 -8,-128 -69,-151l-307 -116c-29,-11 -61,-10 -90,2 -28,13 -50,37 -61,66l-120 317c-163,-25 -330,-20 -490,15l-139 -309c-13,-29 -37,-51 -66,-62 -29,-11 -61,-10 -90,3l-299 135c-59,27 -86,96 -59,155l139 309c-133,97 -247,219 -336,357l-317 -120c-29,-11 -61,-10 -89,3 -29,12 -51,36 -62,65l-116 308c-23,60 7,128 68,151l317 120c-25,162 -20,329 15,490l-309 139c-29,13 -51,36 -62,65 -11,29 -10,62 3,90l135 300c13,28 36,50 65,61 29,11 62,10 90,-2l309 -140c97,133 219,247 357,336l-120 317c-23,61 7,128 68,151l308 117c13,5 27,7 41,7 17,0 33,-3 48,-10 29,-13 51,-36 62,-65l120 -317c163,25 329,20 490,-15l139 309c13,28 36,50 65,61 29,11 62,10 90,-2l300 -135c59,-27 85,-96 59,-156zm-195 -1115c-116,308 -415,514 -744,514 -96,0 -191,-17 -282,-52 -198,-75 -356,-223 -443,-417 -87,-194 -94,-410 -19,-609 117,-307 416,-514 744,-514 97,0 191,18 282,52 199,76 356,224 444,417 87,194 93,410 18,609zm2609 1602c-21,-23 -50,-36 -81,-38l-221 -9c-21,-104 -58,-205 -109,-298l163 -150c48,-43 51,-118 7,-165l-162 -177c-21,-23 -50,-36 -81,-38 -31,-1 -62,10 -85,31l-163 150c-88,-60 -185,-105 -287,-134l9 -221c3,-65 -47,-120 -112,-122l-239 -11c-65,-2 -120,48 -122,113l-10 221c-104,20 -205,57 -298,108l-149 -163c-21,-23 -51,-36 -82,-38 -31,-1 -61,10 -84,31l-176 162c-48,44 -51,118 -8,166l150 163c-59,88 -105,185 -134,287l-221 -9c-64,-3 -119,47 -122,112l-10 239c-2,31 9,62 31,85 21,22 50,36 81,37l221 10c20,104 57,205 109,298l-163 149c-23,22 -37,51 -38,82 -2,31 10,61 31,84l161 177c21,22 51,36 82,37 31,2 61,-9 84,-30l163 -150c88,60 186,105 288,134l-10 221c-3,65 48,119 112,122l240 10c1,0 3,1 5,1 29,0 57,-11 79,-31 23,-21 36,-51 38,-82l9 -221c105,-20 205,-57 298,-108l150 162c21,23 50,37 81,38 31,2 62,-9 85,-30l176 -162c48,-44 51,-118 7,-166l-150 -163c60,-88 105,-185 134,-288l221 10c65,2 120,-47 122,-112l11 -239c1,-31 -10,-62 -31,-85zm-1322 694c-301,-13 -536,-269 -523,-570 13,-294 253,-524 546,-524 8,0 16,0 24,1 302,13 536,268 523,570 -13,301 -266,536 -570,523z"></path></svg>Все <br>категории<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <ul>
                    <div class="container">
                        <?php foreach ($rows as $row): ?>
                            <li class="colorborder"><a href="/<?= $row['url']; ?>"><?= $row['icon']; ?><?= $row['title']; ?></a></li>
                        <?php endforeach; ?>
                    </div>
                </ul>
            </li>
        </ul>
    </div>
</nav>