<div class="subheading">Варианты устранения неисправности, стоимость работ</div>
<table class="pricelist">  
    <tbody>
        <?php foreach ($rows as $key => $row): ?>
            <tr>
                <td class="imya" style="width: 70%"><?= $row['title']; ?></td>
                <td class="imya" style="width: 10%"></td>
                <td class="narx" style="width: 20%"><?= number_format($row['price'], 0, ' ', ' '); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>