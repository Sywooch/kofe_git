<?php $this->title = $model['meta_title']; ?>
<div class="container">
    <div class="page__in">
        <aside class="sidebar">
            <div class="widget">
                <div class="widget__in">
                    <span><?= date('d.m.Y', strtotime($model['title'])); ?></span>
                    <p>
                        <a href="/<?= $model['url']; ?>"><?= $model['title']; ?></a>
                    </p>
                </div>
            </div>
        </aside>     
        <section class="main-content">
            <div class="content">
                <?= $model['full_description']; ?>
            </div>  
            <?= app\widgets\forms\Feedback::widget(); ?>
            <div class="comments">
                <div id="disqus_thread"></div>
<script>
/**
* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
*/

var disqus_config = function () {
this.page.url = window.location.href; // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = window.location.href; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');

s.src = '//uyurista.disqus.com/embed.js';

s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
            </div>
        </section>
    </div>
</div> 