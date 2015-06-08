<?php /* Pop-up Modal Dialog Box to entive users to subscribe to Overvolted via RSS: */?>
<div id="subscribeModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
	<h2 id="modalTitle">Subscribe to OverVolted</h2>
	<p class="lead">Use an RSS reader or your favorite blog reading site.</p>
	<p>
		<a href='http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp%3A%2F%2Fovervolted.com%2Ffeed%2F' target='blank'>
			<h4>Subscribe to Overvolted on Feedly<img style="display:inline;margin-left:10px;" id='feedlyFollow' src='http://s3.feedly.com/img/follows/feedly-follow-rectangle-volume-medium_2x.png' alt='follow us in feedly' width='71' height='28'></h4>
		</a>
	</p>
	<p>
		<a href="<?php bloginfo('rss2_url'); ?>">
			<h4>Subscribe to Overvolted using RSS <i class="fa icon-rss-sign"></i></h4>
		</a>
	</p>
	<a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<?php /* END Pop-up Modal Dialog Box */?>