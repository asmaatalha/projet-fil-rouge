<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="">
  <form class="insertR" action="<?php echo URLROOT;?>/ProfilController/update" method="post" enctype="multipart/form-data">
    
    <div>
      <label for="title">Title: </label>
      <input type="text" name="Title" placeholder="title" value="<?= $data->title; ?>">
    </div>

    <div>
      <label for="desc">Description: </label>
      <textarea type="text" name="Descp"><?= $data->description; ?></textarea>
    </div>

    <div>
      <label for="img">Img: </label>
      <input type="file" name="Img">
      <input type="hidden" name="old_image" value="<?= $data->imge_url; ?>">
    </div>

    <div>
      <label for="appt">Select time:</label>
      <input type="time" id="appt" name="time" value="<?= $data->preparation_time; ?>">
    </div>

    <div>
      <label for="nomp">Nompre de stape: </label>
      <input type="number" name="nStep" placeholder="Select" value="<?= $data->numbr_step; ?>">
    </div>

    <input type="hidden" name="id" value="<?= $data->reciteId; ?>">
    
    <input type="submit" name="update" value="update">

  </form>

</div>