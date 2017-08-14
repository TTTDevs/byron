<?php 

/*
  Title: Simple Blog (codename: Byron)
  Author: Ann D. <ann@tttdevs.com>
  Description: This is a simple markdown blog-  

  Byron, markdown blogging platform.
  Copyright (C) 2017  Ann Diehl

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

// include  the library markdown parsing
include('libs/parsedown/Parsedown.php');

// split request uri and discard arguments. we need the path only.
$request = explode( '?', $_SERVER['REQUEST_URI'])[0];
$pd = new Parsedown();

if ($request == '/') {
  // creamos el menu
  $menu=[];
  foreach (glob("posts/*.md") as $coso) {
    $filename = basename($coso, '.md');
    $name = date ("F d Y H:i", filemtime($coso));
    array_push($menu, "<li><a href='/$filename' onclick='loadEntry()'>$name</a></li>");
  }
  $menu_count=count($menu);
  
  // render the content inside the view
  require_once("view.php");
} else {
  // convert path to filename
  $post = array_pop(explode("/", $request));
  $post_path = "posts/$post.md";

  // create 
  if (file_exists($post_path)) {
    // render the post content
    echo $pd->text(file_get_contents($post_path));
  } else {
    echo "<h1>Four Oh Four!! No such File</h1>";
  }
}
?>