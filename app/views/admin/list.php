<?php require VIEW_ROOT . '/templates/header.php' ?>

  <?php if (empty($pages)): ?>
    <p>No pages listed</p>
  <?php else: ?>

    <table>
      <thead>
        <tr>
          <th>Label</th>
          <th>Title</th>
          <th>Slug</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($pages as $page): ?>
          <tr>
            <td><?php echo escapechar($page['label']); ?></td>
            <td><?php echo escapechar($page['title']); ?></td>
            <td><a href="<?php echo BASE_URL . '/page.php?page=' . escapechar($page['slug']); ?>"><?php echo escapechar($page['slug']); ?></a></td>
            <td><a href="<?php echo BASE_URL . '/admin/edit.php?id=' . escapechar($page['id']);?>">Edit</a></td>
            <td><a href="<?php echo BASE_URL . '/admin/delete.php?id=' . escapechar($page['id']);?>">Delete</a></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>

  <?php endif ?>

  <a href="<?php echo BASE_URL . '/admin/add.php' ?>">Add new page</a>

<?php require VIEW_ROOT . '/templates/footer.php' ?>
