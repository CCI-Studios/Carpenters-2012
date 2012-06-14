<!DOCTYPE html>
<html lang="en">
$analytics = "UA-XXXXX-X"; // FIXME Update to client ID
<head>
	<jdoc:include type="head" />
	
	<style>
	body {
		margin: 0;
		color: #333;
		font-family: Helvetica, Arial, sans-serif;
		font-size: 12px;
	}
	
	#wrapper {
		width: 940px;
		margin: 20px auto 10px;
		padding: 0 10px;
	}
	</style>
	
	<link rel="stylesheet" href="/templates/<?= $this->template ?>/css/offline.css" />
</head>

<body>
	
	<div class="wrapper">
		<jdoc:include type="message" />
		
		<p class="text-center">
			<img src="/images/default/logo-large.png" />
		</p>
		<p>
			<?php echo $app->getCfg('offline_message'); ?>
		</p>
	</div>


	<?php if ($testing): ?>

	<?php else: ?>
		<?php if ($analytics): ?>
			<script>
				var _gaq=[["_setAccount","<?php echo $analytics?>"],["_trackPageview"]];
				(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
					g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
					s.parentNode.insertBefore(g,s)}(document,"script"));
		  	</script>
		<?php endif; ?>
	<?php endif; ?>
	
</body>
</html>
	