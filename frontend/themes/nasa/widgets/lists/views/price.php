<div class="col-md-6">
    <h5>Цены по услугам</h5>                
    <table class="content__pricelist table table-hover">
        <tbody>
            <?php foreach ($uslugi as $usluga): ?>
                <tr>
                    <td class="content__pricelist-name">
                        <?php if ($usluga['is_popular'] == 1): ?>
                            <a class="text-dark" href="/<?= $usluga['url']; ?>"><?= $usluga['title']; ?></a>
                        <?php else: ?>    
                            <span class="text-dark"><?= $usluga['title']; ?></span>
                        <?php endif; ?>
                    </td>
                    <td class="content__pricelist-value text-nowrap"><?= round($usluga['price']); ?> р.</td>
                    <td><a class="btn btn-sm btn-success" data-target="#modalOrder" data-toggle="modal" href="#">Заказать</a> </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="col-md-6">
    <h5>Цены по неисправностям</h5>
    <table class="content__pricelist table table-hover">
        <tbody>
            <?php foreach ($neispravnosti as $neispravnost): ?>
                <tr>
                    <td class="content__pricelist-name">
                        <?php if ($neispravnost['is_popular'] == 1): ?>
                            <a class="text-dark" href="/<?= $neispravnost['url']; ?>"><?= $neispravnost['title']; ?></a>                        
                        <?php endif; ?>
                    </td>
                    <td class="content__pricelist-value text-nowrap"><?= round($neispravnost['price']); ?> р.</td>
                    <td><a class="btn btn-sm btn-success" data-target="#modalOrder" data-toggle="modal" href="#">Заказать</a> </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>