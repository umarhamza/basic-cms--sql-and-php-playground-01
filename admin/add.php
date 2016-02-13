<?php

require '../app/start.php';

// check for post data
if (!empty($_POST)) {

  // store post data in local variable
  $label  = $_POST['label'];
  $title  = $_POST['title'];
  $slug   = $_POST['slug'];
  $body   = $_POST['body'];

  // create prepared statement to insert into value placeholder
  $inserPage = $db->prepare("
    INSERT INTO pages(label, title, slug, body, created)
    VALUES (:label, :title, :slug, :body, NOW())
  "); // insert page variable

  // execute
  $inserPage->execute([
    'label' => $label,
    'title' => $title,
    'slug'  => $slug,
    'body'  => $body,
  ]); // execute function

  // redirect the user to list php
  header('Location: ' . BASE_URL . '/admin/list.php');

} // if empty statment

require VIEW_ROOT . '/admin/add.php';

?>
