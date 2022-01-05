<?php require_once  './mvc/views/includes/header.php';?>

<div class="container center">
    <h2>
        Create
    </h2>

    <form action="<?= URL ?>/Home/create" method="POST">
        <div class="form-item">
            <label for="">Name:</label>
            <input type="text" name="Name"  required placeholder="Name">
        </div>
        <div class="form-item">
            <label for="">Email:</label>
            <input type="Email" name="Email" required placeholder="Email">
        </div>
        <div class="form-item">
            <label for="">Address:</label>
            <input type="text" name="Address" required placeholder="Address">
        </div>
        <button class="btn green" name="submit" type="submit">Create</button>
    </form>
</div>