<?php

require '../app/start.php';

$pages = $db->query("
  SELECT id, label, title, slug
  FROM pages
  ORDER BY created DESC
")->fetchAll(PDO::FETCH_ASSOC);

// var_dump($pages);

require VIEW_ROOT . '/admin/list.php';

?>
