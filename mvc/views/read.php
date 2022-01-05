<?php require_once  './mvc/views/includes/header.php';?>

<div class="container center">
    <h2>
        Read
    </h1>
    <?php foreach ($data['user'] as $user){ ?>
    <form>
        <div class="form-item">
            <label for="">Name:</label>
            <input type="text" value="<?=$user['name']?>" readonly>
        </div>
        <div class="form-item">
            <label for="">Email:</label>
            <input type="Email" value="<?=$user['email']?>" readonly>
        </div>
        <div class="form-item">
            <label for="">Address:</label>
            <input type="text" value="<?=$user['address']?>" readonly>
        </div>
    </form>
    <?php } ?>
</div>