<?php namespace ProcessWire;

// Optional initialization file, called before rendering any template file.
// This is defined by $config->prependTemplateFile in /site/config.php.
// Use this to define shared variables, functions, classes, includes, etc. 

// include automatic scss compiler
include 'style.php';

// some meta tag variables

$title = "inter aktionen";
$subtitle = "ein blog zu unterschiedlichen kommunikativen themen";
$description = "ein blog zu unterschiedlichen kommunikativen themen";
$author = "Thomas Evers";
$keywords = "ein blog zu unterschiedlichen kommunikativen themen";

/*
fields needed: title, body, blog_intro, blog_body, sidebar
modules usefull: MarkupSimpleNavigation, ProcessFileEdit
*/