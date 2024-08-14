<?php

$title = "post";

$id = $_GET["id"];
$query = "SELECT * FROM `posts` WHERE id=?";
$posts = fetchOne($query, [$id]);




// $post = mysqli_fetch_assoc($results);

// $resual = mysqli_query($connection, $query);

// dd($post);
require "views/post.view.php";
