<section id="content">
    <div class="wrap-content zerogrid">
        <div class="row block">
            <div id="main-content" class="col-2-3">
                <div class="row">
                    <div class="col-full">
                        <div class="wrap-col">
                            <article>
                                <div class="heading"><h2 class="title"><a href="#"><?= $article->title; ?></a></h2></div>
                                <img src="<?= $article->getImage(); ?>"/>
                                <div class="content">
                                    <?= $article->content; ?>
                                </div>
                                <div class="extra">
                                    <div class="info">By Admin on <?= $article->getDate(); ?> - <a href="#">01 Commnets</a> <a href="#"><?= $article->category->title; ?></a> prosmotri <?= (int )$article->viewed; ?> Tags:<?php foreach ($tags as $tag):?><?= $tag?>#<?php endforeach;?></div>
                                    <div class="clear"></div>
                                </div>

                                <div id="comment">
                                    <h3>Leave a Comment</h3>

                                    <form id="contact-form" method="post">
                                        <fieldset>
                                            <label><input name="email" value="Email" onBlur="if(this.value=='') this.value='Email'" onFocus="if(this.value =='Email' ) this.value=''" /></label>
                                            <label><input name="subject" value="Subject" onBlur="if(this.value=='') this.value='Subject'" onFocus="if(this.value =='Subject' ) this.value=''" /></label>
                                            <textarea onBlur="if(this.value=='') this.value='Message'" onFocus="if(this.value =='Message' ) this.value=''">Message</textarea>
                                            <div class="buttons">
                                                <a href="#" onClick="document.getElementById('contact-form').reset()">Clear</a>
                                                <a href="#" onClick="document.getElementById('contact-form').submit()">Send</a>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>

                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar" class="col-1-3">
                <div class="wrap-col">
                    <div class="box">
                        <div class="heading"><h4 class="title">Connect Us</h4></div>
                        <div class="content">
                            <div class="connect">
                                <a href="#"><img src="/public/images/socials/facebook-icon.png" title="facebook"/></a><a href="#"><img src="/public/images/socials/google-plus-icon.png" title="google plus"/></a><a href="#"><img src="/public/images/socials/twitter-icon.png" title="twitter" /></a><a href="#"><img src="/public/images/socials/pinterest-icon.png" title="pin"/></a><a href="#"><img src="/public/images/socials/rss-icon.png" title="rss"/></a>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="heading"><h4 class="title">Popular Post</h4></div>
                        <div class="content">
                            <?php foreach ($popular as $article):?>
                                <div class="post">
                                    <img src="<?= $article->getImage(); ?>"/>
                                    <h5 class="title"><a href="#"><?= $article->title; ?></a></h5>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <div class="box">
                        <div class="heading"><h4 class="title">Categories</h4></div>
                        <div class="content">
                            <ul>
                                <?php foreach ($categories as $category):?>
                                    <li><a href="https://www.zerotheme.com"><?= $category->title; ?></a> <span style="text-align: right;float: right">(<?= $category->getArticlesCount();?>)</span></li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                    <div class="box">
                        <div class="heading"><h4 class="title">Last Post</h4></div>
                        <div class="content">
                            <?php foreach ($lastpost as $article)?>
                            <div class="post">
                                <img src="<?= $article->getImage(); ?>"/>
                                <h5 class="title"><a href="#"><?= $article->title; ?></a></h5>
                                <p><?= $article->getDate(); ?></p>
                            </div>
                            <?endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>