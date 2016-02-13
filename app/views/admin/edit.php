<?php require VIEW_ROOT . '/templates/header.php' ?>

<h2>Edit page</h2>

<form action="<?php echo BASE_URL . '/admin/edit.php' ?>" method="POST" autocomplete="off">
  <label for="title">
    Title
    <input type="text" name="title" id="title" value="<?php echo escapechar($page['title']);?>">
  </label>
  <label for="label">
    Label
    <input type="text" name="label" id="label" value="<?php echo escapechar($page['label']);?>">
  </label>
  <label for="slug">
    Slug
    <input type="text" name="slug" id="slug" value="<?php echo escapechar($page['title']);?>">
  </label>
  <label for="body">
    Body
    <textarea name="body" id="body" rows="8" cols="40">
      <?php echo escapechar($page['body']);?>
    </textarea>
  </label>

  <input type="hidden" name="id" value="<?php echo escapechar($page['id']);?>">

  <input type="submit" name="submit" value="Edit page">
</form>

<?php require VIEW_ROOT . '/templates/footer.php' ?>
