<link rel="stylesheet" href="/uploads/flipclock/css/flipclock.css">
<script type="text/javascript" src="/uploads/flipclock/js/flipclock.js"></script>
<div id="aksiya-popup" class="popup-aksiya-coffee">
	<div class="inner-aksiya">
		<div class="img">
			<p>Только сегодня!</p>
			<p>Скидка на первые 5 заказов оформленных через сайт - 30%. </p>
		</div>
		<div class="info">
			<div class="close-aksiya"><i class="fa fa-times" aria-hidden="true"></i></div>
			<p>Чтобы воспользоваться специальной премиумной акцией - введите Ваш номер телефона и нажмиться "Хочу скидку!".</p>
			<div id="aksiya-clock"></div>
			<?php

			use yii\helpers\Html;
			use yii\widgets\ActiveForm;
			use yii\widgets\MaskedInput;

			$form = ActiveForm::begin([
						'id' => 'ask2-formm',
						'options' => ['class' => 'global-form'],
						'enableClientValidation' => true,
						'fieldConfig' => [
							'template' => '{input}',
						],
			]);
			?>
				<?=
				$form->field($model, 'phone')->widget(MaskedInput::className(), [
					'name' => 'phone',
					'mask' => '+7 (999) 999-99-99',
					'options' => [
						'placeholder' => 'Ваш телефон',
						'class' => 'phone', 'type' => 'tel'
					],
				])->label('')
				?>
				<?= Html::submitButton('Оставить онлайн заявку', ['class' => 'btn', 'type' => 'button']) ?>
			<?php ActiveForm::end() ?>
		</div>
	</div>
	<div class="bg-c"></div>
</div>
<style>
	.popup-aksiya-coffee {
		position: fixed;
		top: 0px;
		left: 0px;
		display: none;
		width: 100%;
		height: 100%;
		background: rgba(0, 0, 0, 0.75);
		z-index: 99999;
	}
	.popup-aksiya-coffee.active {
		display: none ! important;
	}
	.popup-aksiya-coffee .bg-c {
		width: 100%;
		height: 100%;
		display: block;
		position: absolute;
		z-index: 999999;
	}
	.popup-aksiya-coffee .inner-aksiya {
		width: 900px;
		position: absolute;
		left: 50%;
		margin-left: -450px;
		background: #fff;
		top: 50%;
		margin-top: -250px;
		height: 500px;
		display: block;
		z-index: 9999999;
	}
	.popup-aksiya-coffee .inner-aksiya .img {
		width: 650px;
		float: left;
		height: 500px;
		display: block;
		background-image: url(/uploads/images/aksiya-coffee.jpg) ! important;
		padding: 20px 25px;
		box-sizing: border-box;
	}
	.popup-aksiya-coffee .inner-aksiya .img p {
		background-color: rgba(255, 0, 0, 0.78);
		color: rgb(255, 255, 255);
		font-size: 35px;
		line-height: 1;
		display: inline-block;
		font-family: "NeuronExtraBold",cursive;
		text-transform: uppercase;
		text-align: left;
		margin: 0px;
		width: 70%;
		margin-bottom: 15px;
	}
	.popup-aksiya-coffee .inner-aksiya .info {
		font-size: 14px;
		line-height: 22px;
		padding: 20px 15px;
		box-sizing: border-box;
		width: 250px;
		height: 100%;
		float: right;
	}
	.popup-aksiya-coffee .inner-aksiya .info p {
		font-size: 14px;
		line-height: 22px;
		margin: 0px;
	}
	.popup-aksiya-coffee .inner-aksiya .info form input {
		width: 100%;
		margin-right: 0px;
		max-width: 100%;
	}
	.popup-aksiya-coffee .inner-aksiya .info form button {
		width: auto;
		width: 100%;
		height: 36px;
		border: 1px solid #673b14;
		background: #673b14;
		border-radius: 3px;
		color: #fff;
		font-size: 16px;
		cursor: pointer;
		outline: none;
		box-sizing: border-box;
	}
	.popup-aksiya-coffee .inner-aksiya .info .close-aksiya {
		background-color: #673b14;
		color: white;
		font-size: 17px;
		font-weight: 500;
		-webkit-border-radius: 50%;
		border-radius: 50%;
		text-align: center;
		display: block;
		width: 40px;
		height: 40px;
		cursor: pointer;
		line-height: 40px;
		position: absolute;
		right: 0px;
		top: 0px;
		margin-top: -20px;
		margin-right: -20px;
	}
	.popup-aksiya-coffee .inner-aksiya .info .close-aksiya:hover {
		background-color: #333;
	}
</style>
<script type="text/javascript">
	$(window).scroll(function () {
		if ($(this).scrollTop() > 700 && localStorage.getItem('closed') === null) {
			$('#aksiya-popup').fadeIn();
		}
	});
	$(".close-aksiya, .bg-c").click(function () {
		$(".popup-aksiya-coffee").addClass("active");
		localStorage.setItem('closed', 1);
	});	
	var clock = $('#aksiya-clock').FlipClock(3600, {countdown: true});
</script>   