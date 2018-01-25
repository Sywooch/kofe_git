<div class="pages-create">
    <form method="post">
        <?php

        use kartik\select2\Select2;

$domain = str_replace('admin.', '', $_SERVER['SERVER_NAME']);
        $siteConfig = backend\controllers\SeoController::getSiteConfig($domain);

        echo Select2::widget([
            'id' => 'select-site',
            'name' => 'site',
            'value' => $siteConfig['id'],
            'data' => $sites,
            'options' => ['multiple' => false, 'placeholder' => 'Сайт']
        ]);
        ?><br>
        <div class="form-group field-pages-meta_desc">
            <label class="control-label">Откуда</label>
            <input type="text" class="form-control" name="from" maxlength="2000">
            <div class="help-block"></div>
        </div>
        <div class="form-group field-pages-meta_desc">
            <label class="control-label">Куда</label>
            <input type="text" class="form-control" name="to" maxlength="2000">
            <div class="help-block"></div>
        </div>
        <div class="form-group">
            <button type="submit" name="save" class="btn btn-success">Добавить</button>    
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>Откуда</th>
                <th>Куда</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($redirects as $key => $redirect): ?>
                <tr>
                    <td><?= $redirect['from']; ?></td>
                    <td><?= $redirect['to']; ?></td>
                    <td><a href="/seo/delete-redirect?f=<?= $key; ?>">Уд.</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
</div>