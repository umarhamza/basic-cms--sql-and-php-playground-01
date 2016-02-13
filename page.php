<?php
// call start and db
require 'app/start.php';

// getting url query string ?page=slug
if (empty($_GET['page'])) {
  $page = false;
} else {
  // create a dump of the query // var_dump($_GET);

  // set the slug
  $slug = $_GET['page'];

  // create a database prepared statement to protect our url query
  $page = $db->prepare("
    SELECT *
    FROM pages
    WHERE slug = :slug
    LIMIT 1
  ");

  $page->execute(['slug' => $slug]);

  $page = $page->fetch(PDO::FETCH_ASSOC);

  // modify original array so we can update the date format
  if ($page) {

    // update created variable as a date time method
    $page['created'] = new DateTime($page['created']);

    // check the updated date is not null
    if ($page['updated']) {
      $page['updated'] = new DateTime($page['updated']);
    } // if updated

  } // if page


} // else statement

require VIEW_ROOT . '/page/show.php';

?>
