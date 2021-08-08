<?php echo "Hello"; ?>
<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="">
    <form class="insertR-form" action="" method="post" enctype="multipart/form-data">
        <label for="title">Title: </label>
        <input type="text" name="Title" placeholder="title" value="<?= $data->title; ?>">

        <label for="desc">Description: </label>
        <textarea type="text" name="Descp"><?= $data->description; ?></textarea>

        <label for="img">Img: </label>
        <input type="file" name="Img" <?= $data->imge_url; ?>>

        <label for="appt">Select a time:</label>
        <input type="time" id="appt" name="time" <?= $data->preparation_time; ?>>

        <label for="nomp">Nompre de stape: </label>
        <input type="number" name="nStep" placeholder="numpTime"<?= $data->numbr_step; ?>>

        <input type="submit" name="submit" value="Submit">

    </form>

</div>