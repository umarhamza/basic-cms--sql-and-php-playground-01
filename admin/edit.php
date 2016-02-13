<?php
require '../app/start.php';

// read the id sent back from the edit form
if (!empty($_POST)) {
  $id = $_POST['id'];
  $label = $_POST['label'];
  $title = $_POST['title'];
  $slug  = $_POST['slug'];
  $body  = $_POST['body'];

  // Update the page
  $updatePage = $db->prepare("
    UPDATE pages
    SET
      label   = :label,
      title   = :title,
      slug    = :slug,
      body    = :body,
      updated = NOW()
    WHERE id = :id
  "); // prepare func

  // execute form data
  $updatePage->execute([
    'id' => $id,
    'label' => $label,
    'title' => $title,
    'body' => $body,
    'slug' => $slug
  ]); // exceute func

  header('Location: ' . BASE_URL . '/admin/list.php');

} // if statement

// if there isnt an id in the url
if (!isset($_GET['id'])) {
  // redirect the user to list php
  header('Location: ' . BASE_URL . '/admin/list.php');

  // kill page
  die();
} // if statement

// prepare database
$page = $db->prepare("
  SELECT *
  FROM pages
  WHERE id = :id
");

$page->execute(['id' => $_GET['id']]);

$page = $page->fetch(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/edit.php';

?>
