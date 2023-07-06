<section class="navigation-bar">
    <input type="checkbox" id="hamburger">
    <label for="hamburger" class="hamburger">
        <span class="line"></span>
		<span class="line"></span>
		<span class="line"></span>
	</label>
	<nav class="wrapper"><?php
		$treeMenu = $modules->get("MarkupSimpleNavigation"); // load the module
		$options = array(
			'parent_class' => 'parent',
			'current_class' => 'current',
			'has_children_class' => 'has_children',
			'levels' => true,
			'levels_prefix' => 'level-',
			'max_levels' => null,
			'firstlast' => false,
			'show_root' => true,
			'selector' => '',
			'selector_field' => 'nav_selector',
			'outer_tpl' => '<ul>||</ul>',
			'inner_tpl' => '<ul>||</ul>',
			'list_tpl' => '<li%s>||</li>',
			'list_field_class' => '',
			'item_tpl' => '<a href="{url}">{title}</a>',
			'item_current_tpl' => '<a href="{url}">{title}</a>',
			'xtemplates' => '',
			'xitem_tpl' => '<a href="{url}">{title}</a>',
			'xitem_current_tpl' => '<span>{title}</span>',
			'date_format' => 'Y/m/d',
			'code_formatting' => false,
			'debug' => false
		);
		echo $treeMenu->render($options);
	?></nav>
	
	<form class='search' action='<?php echo $pages->get('template=search')->url; ?>' method='get'>
		<input type='text' name='q' placeholder='Search' value='<?php echo $sanitizer->entities($input->whitelist('q')); ?>' />
		<button type='submit' name='submit'>Search</button>
	</form>
	
</section>