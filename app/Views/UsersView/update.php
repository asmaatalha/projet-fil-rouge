<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="">
    <form class="insertR-form" action="<?php echo URLROOT;?>/ProfilController/update" method="post" enctype="multipart/form-data">
        <label for="title">Title: </label>
        <input type="text" name="Title" placeholder="title" value="<?= $data->title; ?>">

        <label for="desc">Description: </label>
        <textarea type="text" name="Descp"><?= $data->description; ?></textarea>

        <label for="img">Img: </label>
        <input type="file" name="Img">
        <input type="text" name="old_image" value="<?= $data->imge_url; ?>">

        <label for="appt">Select a time:</label>
        <input type="time" id="appt" name="time" value="<?= $data->preparation_time; ?>">

        <label for="nomp">Nompre de stape: </label>
        <input type="number" name="nStep" placeholder="numpTime" value="<?= $data->numbr_step; ?>">

        <input type="text" name="id" value="<?php echo $data->reciteId; ?>">

        <input type="submit" name="update" value="Submit">

    </form>

</div>


<!-- <div class="row justify-contet-center">
<form class="container" action="<?php echo URLROOT; ?>/ControllerCompte/updatePhoto" method="POST" enctype="multipart/form-data">

  <div class="form-group">
      <input type="text" class="form-control" name="name-pharma" placeholder="name_pharma"   value="<?php echo $data->name_pharma; ?>">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="localisation" placeholder="name_pharma"   value="<?php echo $data->localisation; ?>">
    </div>
      <div class="form-group">
    <input type="text" class="form-control" name="phone" placeholder="localisation"  value="<?php echo $data->phone; ?>">
      </div>
    <div class="form-group">
              <label for="">Image</label>
              <input type="file"  name="image" >
              <input type="hidden" name="old_image"  value="<?php echo $data->image; ?>" >
      </div>
      <div class="form-group">
      <input type="hidden" class="form-control" name="id" value="<?php echo $data->id_pharmacy; ?>">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="enter" name="submit">
        </div>
  </div>
  </div>
</form> -->