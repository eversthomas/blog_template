<?php namespace ProcessWire; 

// Template file for pages using the “blog posts page” template

?>

<div id="header" class="blog-post-header">
	<h1><?php echo $title; ?></h1>
	<p><?php echo $subtitle; ?></p>
</div>

    <article id="content">
        
            <?php
                $pageNumber = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
                $perPage = 8;
                
                $children = $pages(1026)->children("limit=$perPage, start=" . ($pageNumber - 1) * $perPage . ", sort=-erstellt");
                $totalChildren = $pages(1026)->children()->count();
                
                $totalPages = ceil($totalChildren / $perPage);
                
                foreach ($children as $child) {
                    echo "<h2><a href='{$child->url}'>{$child->title}</a></h2>";
                    
                    echo "<div class='article-meta'>veröffentlicht {$child->erstellt} | Tags:";
                    foreach ($child->tags as $item) {
                        echo " <a href='{$item->url}'>{$item->title}</a> ";
                    }
                    echo "</div>";
                    
                    echo "<p>{$child->blog_intro}</p>";
                    
                    echo "<a class='readmore' href='{$child->url}'>weiter lesen</a>";
                }
                
                if ($totalPages > 1) {
                    echo "<div class='pagination'><hr>";
                    
                    if ($pageNumber > 1) {
                        echo "<a href='?page=" . ($pageNumber - 1) . "'> &laquo; Vorherige </a>&nbsp;";
                    }
                    
                    for ($i = 1; $i <= $totalPages; $i++) {
                        $activeClass = ($i == $pageNumber) ? "active" : "";
                        echo "<a href='?page=$i' class='$activeClass'> $i </a>&nbsp;";
                    }
                    
                    if ($pageNumber < $totalPages) {
                        echo "<a href='?page=" . ($pageNumber + 1) . "'> Nächste </a>&nbsp;";
                    }
                    
                    echo "<hr></div>";
                }
?>
        
        
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
