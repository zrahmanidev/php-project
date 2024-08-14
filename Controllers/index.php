<?php

require("./database.php");
$title = "Home";

$posts = fetchAll("SELECT * From `posts`");


// dd($posts);
require "views/index.view.php";
