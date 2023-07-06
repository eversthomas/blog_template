<?php namespace ProcessWire; 

// Template file for pages using the “single blog post page” template

?>

<div id="header" class="blog-post-header">
	<h1><?php echo $title; ?></h1>
	<p><?php echo $subtitle; ?></p>
</div>

    <article id="content">
    	<h2><?=$page->title?></h2>
    	<div class="article-meta">
    	      veröffentlicht <?=$page->erstellt?> | Tags:
    	            <?php foreach($page->tags as $item) {
                        echo " <a href='$item->url'>$item->title</a> ";
                     } ?>
    	</div>
    	<?=$page->blog_intro?>
        <?=$page->blog_body?>
        
        <div class="pagination">
            <hr><div class="next"><?php 
                if($page->prev->id) {echo "<span>vorheriger Artikel: <a href='{$page->prev->url}'>{$page->prev->title}</a></span>";}
                if($page->next->id) {echo "<span>nächster Artikel: <a href='{$page->next->url}'>{$page->next->title}</a></span>";}
            ?></div><hr>
        </div>
        
    </article>	
    	
    <div id="sidebar">
        <h3>Neueste Beiträge</h3>
        <?php
    	    foreach($pages(1026)->children('limit=6') as $child) {
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
