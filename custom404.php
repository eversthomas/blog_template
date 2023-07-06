<?php namespace ProcessWire; 

// Template file for pages using the “blog posts page” template

?>

<div id="header" class="blog-post-header">
	<h1><?php echo $title; ?></h1>
	<p><?php echo $subtitle; ?></p>
</div>

    <article id="content">
            <h3>Seite nicht gefunden ;)</h3>
            <?php
                $image = $page->image;
                if($image) {
                  $thumb = $image->size(100, 100);
                  echo "<a href='https://de.freepik.com/vektoren-kostenlos/konzept-des-zielseiten-illustrationsfehlers-404_5603796.htm#page=7&query=seite%20nicht%20gefunden&position=6&from_view=keyword&track=ais'>Bild von pikisuperstar</a> auf Freepik<img src='$image->url' alt='$image->description'></a>";
                }
            ?>
            <p>Vielleicht finden Sie etwas in den neuesten Artikeln, oder in den Kategorien.</p>
            <P>Oder Sie gehen einfach zur Startseite zurück: https://interaktionen.org</P>
    </article>	
    	
    <div id="sidebar">
        <h3>Neueste Beiträge</h3>
        <?php
    	    foreach($pages(1026)->children('limit=7') as $child) {
                echo "<li><a href='$child->url'>$child->title</a></li>";
            }
        ?>
        <h3>Kategorien</h3>
            <ul class="cloud" aria-label="Webdev word cloud">
                <?php
                    $zufall = rand(1,9);
                    foreach($pages(1018)->children() as $item) {
                        $zufall = rand(1,9);
                        echo "<li><a href='$item->url' data-weight='$zufall'>$item->title</a></li>";
                    }
                ?>
            </ul>
    </div>
