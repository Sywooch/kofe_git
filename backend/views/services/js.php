<form method="post">
    <?php

    use kartik\select2\Select2;

    echo Select2::widget([
        'id' => 'select-site',
        'name' => 'site',
        'value' => '',
        'data' => $sites,
        'options' => ['multiple' => false, 'placeholder' => 'Сайт']
    ]);
    ?>
    <div class="form-group field-pages-meta_desc">
        <label class="control-label" for="pages-meta_desc">JS</label>
        <textarea  id="site-js" class="form-control" name="js" maxlength="10000" aria-invalid="false"></textarea>
        <div class="help-block"></div>
    </div>
    <div class="form-group field-pages-meta_desc">
        <label class="control-label" for="pages-meta_desc">robots.txt</label>
        <textarea  id="site-robots" class="form-control" name="robots" maxlength="10000" aria-invalid="false"></textarea>
        <div class="help-block"></div>
    </div>
    <div class="form-group field-pages-meta_desc">
        <label class="control-label" for="pages-meta_desc">yandex-verification content</label>
        <input type="text" id="yandex-verification" class="form-control" name="yandex-verification" maxlength="2000" aria-required="true" aria-invalid="true">
        <div class="help-block"></div>
    </div>
    <div class="form-group">
        <button type="button" id="site-save" class="btn btn-success">Сохранить</button>    
    </div>
</form>