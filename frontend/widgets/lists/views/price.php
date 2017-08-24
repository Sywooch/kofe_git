<section id="tseni">
    <div class="container">
        <div>
            <div class="left">
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
                                    <td class="price"><?= $usluga['price'] == 0 ? 'Бесплатно*' : 'от ' . round($usluga['price']) . ' р'; ?></td>
                                    <td class="order">
                                        <div class="popup-zakaz">Заказать</div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="right">
                <h3>Цены по неисправностям</h3>
                <table class="pricelist">
                    <tbody>
                        <?php foreach ($neispravnosti as $neispravnost): ?>
                            <tr>
                                <td class="name">
                                    <a href="/<?= !empty($urlPrefix) ? $urlPrefix . '/' : ''; ?><?= $neispravnost['url']; ?>"><?= $neispravnost['title']; ?></a>
                                </td>
                                <td class="price">от <?= round($neispravnost['price']); ?> р</td>
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
        <div>
            <div class="prochi-uslugi">
                <h3>Цены по прочим услугам</h3>
                <table class="pricelist">
                    <tbody>                        
                        <?php foreach ($otherServices as $usluga): ?>
                            <tr>
                                <td class="name">
                                    <span class="price-color"><?= $usluga['title']; ?></span>                                        
                                </td>
                                <td class="price"><?= $usluga['price'] == 0 ? 'Бесплатно*' : 'от ' . round($usluga['price']) . ' р'; ?></td>
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
    </div>
</section>