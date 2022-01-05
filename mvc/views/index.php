<?php require_once  './mvc/views/includes/header.php';?>
<div class="container">
    <a class="btn btn-primary" href="<?= URL ?>/Home/create">
    <i class="fas fa-plus"></i>
    </a>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    foreach ($data['user'] as $user) { ?>
    <tr>
      <th scope="row"><?= $user['id'] ?></th>
      <td><?= $user['name'] ?></td>
      <td><?= $user['email'] ?></td>
      <td><?= $user['address'] ?></td>
      <td>
      <a class="btn btn-warning" href="<?= URL ?>/Home/read/<?= $user['id'] ?>"><i class="far fa-eye"></i></a>
      <a class="btn btn-danger" href="<?= URL ?>/Home/delete/<?= $user['id'] ?>"><i class="fas fa-trash-alt"></i></a>
      <a class="btn btn-warning" href="<?= URL ?>/Home/update/<?= $user['id'] ?>"><i class="fas fa-pen-alt"></i></a>
      </td>
    </tr>
    <?php }?>

  </tbody>
</table>

</div>