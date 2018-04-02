

<div class="random-services">
	<div class="container">
		<p class="gl-text">Возможно у вас <span>что-то другое?</span></p>
		<ul class="list" style="list-style-type: none; padding: 0; margin: 15px 0 0 0;">
		    <?php foreach ($rows as $key => $row): ?>
		        <li class="works">
		            <a href="/<?= $row['url']; ?>" style="color:#333;">
		                <div class="img">
		                	<img src="/uploads/images/services/<?= $row['image']; ?>" alt="<?= $row['title']; ?>" style="border-radius: 3px; margin-bottom: 5px">
		                </div>
		                <br>
		                <span style="border-bottom: dashed 1px #333;"><?= $row['title']; ?></span>
		            </a>
		        </li>
		    <?php endforeach; ?>
		</ul>
	</div>
</div>