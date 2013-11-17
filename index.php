<?php get_header(); ?>

      <!-- Main hero unit for a primary marketing message or call to action -->

      <div id="output" class="bgContainer">
        </div>
        <div id="vignette" class="overlay vignette">
        </div>
        <div id="noise" class="overlay noise">
        </div>
        <div id="ui" class="container slide">
            <div class="row-fluid">
                <div class="span12">
                    <div class="logo">
                        <canvas id="canvas_seconds" width="180" height="180"></canvas>
                        <div class="logoWrap">
                            <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="Logo" />
                            <div class="timer">
                                <p>
                                    <span class="days">234</span>days<span class="hrs">15</span>hours<br />
                                    <span class="mins">9</span>minutes<span class="secs">0</span>seconds</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="carousel" class="carousel slide row-fluid">
                <div class="span2">
                </div>
                <div class="carousel-inner span8">
                    <div class="item active row-fluid">
                        <h1 class="cTitle">
                            COMING SOON</h1>
                        <div class="cContent">
                            <p>
                                We are currently working on an awesome new site, won't be long. Please don't forget
                                to check out our tweets and to subscribe to be notified!
                            </p>
                        </div>
                    </div>
                    <div class="item row-fluid">
                        <h1 class="cTitle span12">
                            SOCIAL MEDIA</h1>
                        <ul class="social">
                            <li><a class="facebook" href="javascript:;">Facebook</a></li>
                            <li><a class="twitter" href="javascript:;">Twitter</a></li>
                            <li><a class="linkedin" href="javascript:;">Linkedin</a></li>
                            <li><a class="flickr" href="javascript:;">Flickr</a></li>
                        </ul>
                    </div>
                    <div class="item row-fluid">
                        <h1 class="cTitle span12">
                            SUBSCRIBE</h1>
                        <div class="row-fluid">
                            <div class="span3">
                            </div>
                            <div class="subscribe span6">
                                <div class="row-fluid">
                                    <p>
                                        <label for="subscribe">
                                            your e-mail address</label>
                                        <input type="text" id="subscribe" name="subscribe" class="" maxlength="150" />
                                    </p>
                                    <input type="button" value="Subscribe" />
                                </div>
                            </div>
                            <div class="span3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span2">
                </div>
            </div>
			<div class="row-fluid hidden-phone">
				<div class="span3">
				</div>
				<div class="twitArea span6">
					<span class="twitSep left"></span>
					<div class="row-fluid">
						<img src="<?php echo get_template_directory_uri() ?>/img/twitterArea.png" class="tickerImage" alt="TwitterTickerImage" />
						<div id="tweetTicker">
						</div>
					</div>
					<span class="twitSep right"></span>
				</div>
				<div class="span3">
				</div>
			</div>
        </div>
        <a data-slide="prev" class="arrow prev hidden-phone" href="#carousel"></a><a data-slide="next"
            class=" arrow next hidden-phone" href="#carousel"></a>
    </div>
<?php get_footer(); ?>
