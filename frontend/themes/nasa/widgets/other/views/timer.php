<div class=promo>
    <div class=container>
        <div class="align-items-center promo__wrapper row">
            <div class="col-md-5 text-center text-md-right">
                <div class="h3 promo__heading">Сегодня скидка!</div>
                <div class=promo__description> Сегодня весь день мы дарим 25% скидку на<br class="d-lg-inline d-none"> все услуги по ремонту кофемашин <?= app\components\CController::$monoBrand['title']; ?> </div><a class="btn btn-primary" data-target=#modalPromo data-toggle=modal href=#>Получить 25% скидку</a></div>
            <div class="col-md-4 text-center">
                <div class=promo__countdown>
                    <div class=promo__countdown-circle>
                        <svg xmlns=http://www.w3.org/2000/svg height=220px viewbox="0 0 220 220" width=220px>
                            <g transform=translate(110,110)>
                                <circle class=e-c-base r=100></circle> 
                                <g transform=rotate(-90)>
                                    <circle class=e-c-progress r=100></circle> 
                                    <g id=e-pointer>
                                        <circle class=e-c-pointer cx=100 cy=0 r=8></circle>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class=promo__countdown-time>
                        <div class=text>До конца акции осталось:</div>
                        <div class=value>00:00:00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>