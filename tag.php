<?php namespace ProcessWire; 

// Template file for pages using the “blog posts page” template

?>

<div id="header" class="blog-post-header">
	<h1><?php echo $title; ?></h1>
	<p><?php echo $subtitle; ?></p>
</div>

    <article id="content">
         <?php
            $tag = $page->title;
            echo "<h3>Artikel aus der Kategorie $tag</h3>";
            
            $hr = $pages->find("template=blog-post, tags=$tag");
            
            ?><ul><?php
            
            foreach ($hr as $h) {
                
                echo "<li><a href='$h->url'>$h->title</a></li>";
                
            }
            
            ?></ul>
        
    </article>	
    	
    <div id="sidebar">
        <h3>Neueste Beiträge</h3>
        <?php
    	    foreach($pages(1)->children() as $child) {
                echo "<li><a href='$child->url'>$child->title</a></li>";
            }
        ?>
    </div>
