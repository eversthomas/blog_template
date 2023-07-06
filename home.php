<?php namespace ProcessWire;

// Template file for “home” template used by the homepage

?>

<div id="header" class="home-header">
	<h1><?php echo $title; ?></h1>
	<p><?php echo $subtitle; ?></p>
	<p>HomeHeader</p>
</div>

<article id="content">
	<h2><?=$page->title?></h2>
	<?=$page->body?>
</article>	
	
<div id="sidebar">
	<?=$page->sidebar?>
</div>
