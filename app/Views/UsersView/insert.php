<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="cart_insert">
    <div class="d-flex add1">
        <img src="../icon/notebook.png" alt="add" width="5%" height="60%">
        <h1>Add Recite</h1>
    </div>

    <div class="form_insert">

        <form class="insertR" action="" method="post" enctype="multipart/form-data">

            <div>
                <label for="title">Title: </label>
                <input type="text" name="Title" placeholder="title">
            </div>
            
            <div>
                <label for="desc">Description: </label>
                <textarea type="text" name="Descp" ></textarea>
            </div>

            <div>
                <label for="img">Img: </label>
                <input type="file" name="Img">
            </div>

            <div>
                <label for="appt">Select a time:</label>
                <input type="time" id="appt" name="time">
            </div>

            <div>
                <label for="nomp">Nompre de stape: </label>
                <input type="number" name="nStep" placeholder="numpTime">
            </div>

            <div>
                <input type="submit" name="submit" value="Add">
            </div>
            
        </form>
    </div>

</div>