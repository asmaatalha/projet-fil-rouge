<?php require APPROOT . '/views/inc/header.php'; ?>

<div>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="title">Title: </label>
        <input type="text" name="Title" placeholder="title">

        <label for="">Description: </label>
        <input type="text" name="Descp" placeholder="description">

        <label for="">Img: </label>
        <input type="file" name="Img" value="fileupload">
        
        <label for="">Preparation Time: </label>
        <input type="text" name="time" placeholder="prepTiime">

        <label for="">Numpre de stape: </label>
        <input type="number" name="nStep" placeholder="numpTime">

        <input type="submit" name="submit" value="Submit">

    </form>

<!-- ***********************
    <label for="appt">Select a time:</label>
    <input type="time" id="appt" name="appt">
*********************** -->
    



</div>