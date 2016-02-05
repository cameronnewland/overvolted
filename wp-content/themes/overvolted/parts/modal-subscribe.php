<?php /* Pop-up Modal Dialog Box to entice users to subscribe to Overvolted via RSS: */?>
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
<?php /*
	<p>
		<h4>Subscribe to Overvolted's Monthly Recap Email:</h4>
		<script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
		<script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us8.list-manage.com","uuid":"d97fb91fd43c768b3c5ca39ca","lid":"4de33d9dde"}) })</script>
	</p>
*/ ?>
	<a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<?php /* END Pop-up Modal Dialog Box */?>