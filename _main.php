<?php namespace ProcessWire;

// Optional main output file, called after rendering page’s template file. 
// This is defined by $config->appendTemplateFile in /site/config.php, and
// is typically used to define and output markup common among most pages.
// 	
// When the Markup Regions feature is used, template files can prepend, append,
// replace or delete any element defined here that has an "id" attribute. 
// https://processwire.com/docs/front-end/output/markup-regions/
	
/** @var Page $page */
/** @var Pages $pages */
/** @var Config $config */

$home = $pages->get('/'); // homepage

?><!DOCTYPE html>
<html lang="de">
	<head id="html-head">
		<meta charset="utf-8"/>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo $title; ?></title>
		<meta name="description" content="<?php echo $description; ?>"/>
		<meta name="keywords" content="<?php echo $keywords; ?>"/>
		<meta name="author" content="<?php echo $author; ?>" />

		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $config->urls->templates; ?>favicon.ico">

		<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates; ?>style.css" />
	</head>
	<body id="html-body">

		<header class="site-header">

			<div id="header" class="wrapper">

			</div>

			<!-- navigation bar -->
			<?php include 'inc/navigation.php'; ?>

		</header>

    <div class="main-content">
		<main class="content">
		    <article id="content">
					Default content
			</article>
		</main>

		<aside class="sidebar">
			<div id="sidebar">
				sidebar content
			</div>
		</aside>
	</div>

		<footer class="site-footer">
			<div class="wrapper">
		
				<p>Copyright 2023 | <?php echo $author; ?></p>

			</div>
		</footer>
	
	<!-- scripts -->
	<script src="<?php echo $config->urls->templates; ?>scripts/main.js"></script>
	<script>
		window.cookieconsent.initialise({
		  "palette": {
			"popup": {
			  "background": "#eb6c44",
			  "text": "#ffffff"
			},
			"button": {
			  "background": "#f5d948"
			}
		  },
		  "type": "opt-in",
		  "content": {
			"href": "https://www.kybernethik.org/datenschutz/"
		  }
		});
	</script>

	</body>
</html>
