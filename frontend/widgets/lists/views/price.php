<section id="tseni">
    <div class="container">
        <div>
            <div class="<?= $brandPage ? 'prochi-uslugi' : 'left'; ?>">
                <h3>Цены по услугам</h3>
                <table class="pricelist">
                    <tbody>
                        <?php
                        $otherServices = [];
                        ?>
                        <?php foreach ($uslugi as $usluga): ?>
                            <?php
                            if ($usluga['is_popular'] != 1) {
                                $otherServices[] = $usluga;
                            }
                            ?>
                            <?php if ($usluga['is_popular'] == 1): ?>
                                <tr>
                                    <td class="name">
                                        <a href="/<?= !empty($urlPrefix) ? $urlPrefix . '/' : ''; ?><?= $usluga['url']; ?>"><?= $usluga['title']; ?></a>                                       
                                    </td>
                                    <td class="price"><?= $usluga['price'] == 0 ? 'Бесплатно*' : 'от ' . round($usluga['price']) . '&nbsp;р'; ?></td>
                                    <td class="order">
                                        <div class="popup-zakaz">Заказать</div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php
            $neis = [];
            ?>
            <?php if (!$brandPage): ?>
                <div class="right">
                    <h3>Цены по неисправностям</h3>
                    <table class="pricelist">
                        <tbody>
                            <?php foreach ($neispravnosti as $neispravnost): ?>
                                <?php
                                if ($neispravnost['is_popular'] != 1) {
                                    $neis[] = $neispravnost;
                                }
                                ?>
                                <?php if ($neispravnost['is_popular'] == 1): ?>
                                    <tr>
                                        <td class="name">
                                            <a href="/<?= !empty($urlPrefix) ? $urlPrefix . '/' : ''; ?><?= $neispravnost['url']; ?>"><?= $neispravnost['title']; ?></a>
                                        </td>
                                        <td class="price">от <?= round($neispravnost['price']); ?>&nbsp;р</td>
                                        <td class="order">
                                            <div class="popup-zakaz">Заказать</div>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
            <div class="clear"></div>
        </div>
        <div>
            <div class="prochi-uslugi">
                <h3 id="show-services"><?= $brandPage ? 'Показать цены по прочим услугам' : 'Цены по прочим услугам'; ?></h3>
                <table id="services-table" class="pricelist"<?= $brandPage ? ' style="display: none;"' : ''; ?>>
                    <tbody>                        
                        <?php foreach ($otherServices as $usluga): ?>
                            <tr>
                                <td class="name">
                                    <span class="price-color"><?= $usluga['title']; ?></span>                                        
                                </td>
                                <td class="price"><?= $usluga['price'] == 0 ? 'Бесплатно*' : 'от ' . round($usluga['price']) . '&nbsp;р'; ?></td>
                                <td class="order">
                                    <div class="popup-zakaz">Заказать</div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="clear"></div>
        </div>
        <?php if (!empty($neis)): ?>
            <div>
                <div class="prochi-uslugi">
                    <h3 id="show-services2"><?= $brandPage ? 'Показать цены по прочим неисправностям' : 'Цены по прочим неисправностям'; ?></h3>
                    <table id="services-table2" class="pricelist"<?= $brandPage ? ' style="display: none;"' : ''; ?>>
                        <tbody>                        
                            <?php foreach ($neis as $nei): ?>
                                <tr>
                                    <td class="name">
                                        <span class="price-color"><?= $nei['title']; ?></span>                                        
                                    </td>
                                    <td class="price"><?= $nei['price'] == 0 ? 'Бесплатно*' : 'от ' . round($nei['price']) . '&nbsp;р'; ?></td>
                                    <td class="order">
                                        <div class="popup-zakaz">Заказать</div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="clear"></div>
            </div>
        <?php endif; ?>
    </div>
</section>