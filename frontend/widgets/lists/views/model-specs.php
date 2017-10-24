<section id="tseni" class="options harakteristika">
    <div class="container" id="openinfo">
        <div>
            <div class="rochi-uslugi">
                <?php foreach ($specs as $gr => $features): ?>
                    <div class="harakteristiki">
                        <h3><?= $gr; ?></h3>
                            <table class="pricelist">
                            <tbody>
                            <?php foreach ($features as $feature): ?>
                                <tr>
                                    <td class="name"><?= $feature['spec_name']; ?></td>
                                    <td class="op"><?= $feature['spec_value']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endforeach; ?>
                <div class="clear"></div>
            </div>
            <span id="bt-open" class="more"><div>Полные характеристики</div></span>
        </div>
    </div>
</section>
