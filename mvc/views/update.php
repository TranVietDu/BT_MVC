<?php require_once  './mvc/views/includes/header.php';?>

<div class="container center">
    <h2>
        Update
    </h2>
    <?php foreach ($data['findUser'] as $user){ ?>
        <form action="<?= URL ?>/Home/update/<?= $user['id'] ?>" method="POST">

            <div class="form-item">
                <label for="">Name</label>
                <input type="text" name="Name" value="<?= $user['name'] ?>" required placeholder="Name...">
            </div>
            <div class="form-item">
                <label for="">Email</label>
                <input type="Email" name="Email" value="<?=$user['email']?>" required placeholder="Email...">
            </div>
            <div class="form-item">
                <label for="">Address</label>
                <input type="text" name="Address" value="<?= $user['address'] ?>" required placeholder="Address...">
            </div>

            <button class="btn green" name="submit" type="submit">Update</button>
        </form>
    <?php } ?>
</div>