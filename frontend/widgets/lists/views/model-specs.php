<section id="tseni" class="options">
    <div class="container">
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
        </div>
    </div>
</section>