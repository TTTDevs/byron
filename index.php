<?php 

/*
Title: Simple Blog (codename: Byron)
Author: Ann D.
Description: This is a simple markdown blog-  
*/

// include  the library markdown parsing
include('libs/parsedown/Parsedown.php');

if ($_SERVER['PATH_INFO']) {
  $post = array_pop(explode("/", $_SERVER['PATH_INFO']));
  $post_path = "posts/$post.md";
}

// creamos el menu
$menu=[];
foreach (glob("posts/*.md") as $coso) {
  $filename = basename($coso, '.md');
  $name = date ("F d Y H:i", filemtime($coso));
  array_push($menu, "<a href='/$filename'>$name</a><br>");
}

// create 
$pd = new Parsedown();

if (isset($post_path)) {
  // render the post content
  $content = $pd->text(file_get_contents($post_path));
} else {
  // render landing page
  $content = $pd->text(file_get_contents('welcome.md'));
}

// render the content inside the view
require_once("view.php");
?>