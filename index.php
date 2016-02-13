<?php

// inclue start php
require 'app/start.php';

// create query to pull in all the pages from the database
$pages = $db->query("
  SELECT id, label, slug
  FROM pages
")->fetchAll(PDO::FETCH_ASSOC);

// call in view root homepage
require VIEW_ROOT . '/home.php';

//dump database data
// var_dump($pages);

// show the app root variable from start.php
// echo APP_ROOT
?>
