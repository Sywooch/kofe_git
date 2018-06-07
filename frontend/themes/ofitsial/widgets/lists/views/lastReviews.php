<?php
$siteConfig = app\components\CController::getSiteConfig();
?>
<div class="revmain">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="rm_heading linecenter">Что говорят о нас?</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="revcarousel_container">
                    <div class="owl-carousel rev-carousel">
                        <?php foreach ($rows as $row): ?>
                            <div class="revcar_block">
                                <div class="col-md-3 p-left-reset text-center">
                                    <div class="rm_image" style="background-image: url(<?= $assets . $siteConfig['theme']; ?>/images/user.svg);"></div>
                                </div>
                                <div class="col-md-9 p-left-reset">
                                    <div class="revcartext_container">
                                        <div class="revname">
                                            <?= $row['username']; ?>
                                        </div>
                                        <div class="revtext"><?= $row['message']; ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>