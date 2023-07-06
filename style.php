<?php
	// header('Content-Type: text/css');
	require_once 'scssphp/scss.inc.php';
	use ScssPhp\ScssPhp\Compiler;
	$compiler = new Compiler();
	$compiler->setImportPaths('styles');
	// $compiler->setOutputStyle(\ScssPhp\ScssPhp\OutputStyle::COMPRESSED);
	$stylecss = $compiler->compileString('@import "main.scss";')->getCss();
	file_put_contents("style.css", $stylecss);
?>