<?php namespace ProcessWire; 

// Template file for pages using the “basic-page” template

?>

<div id="header" class="page-header">
	<h1><?php echo $title; ?></h1>
	<p><?php echo $subtitle; ?></p>
	<p>PageHeader</p>
</div>

<article id="content">
	<h2><?=$page->title?></h2>
	<?=$page->body?>
</article>	
	
<div id="sidebar">
	<?=$page->sidebar?>
</div>
