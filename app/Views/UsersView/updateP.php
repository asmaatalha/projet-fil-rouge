<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbarP.php'; ?>

<div>
    <form action="">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="<?= $data->email ?>" placeholder="Email">

        <label for="email">Password :</label>
        <input type="email" id="email" name="email" value="<?= $data->password ?>" placeholder="Pass">

        <label for="email">username :</label>
        <input type="email" id="email" name="email" value="<?= $data->username ?>" placeholder="Email">

        <label for="email">Last Name :</label>
        <input type="email" id="email" name="email" value="<?= $data->Last_name ?>" placeholder="Email">

        <label for="email">First Name :</label>
        <input type="email" id="email" name="email" value="<?= $data->First_name ?>" placeholder="Email">
        
    </form>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>