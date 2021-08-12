<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbarP.php'; ?>

<div>
    <form action="">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="<?= $data->email ?>" placeholder="Email">
        
    </form>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>