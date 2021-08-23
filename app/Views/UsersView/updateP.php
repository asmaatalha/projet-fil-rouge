<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="update">
    <!-- <div>
       
    </div> -->

    <div class="forms2 pt-5">

        <h1>Update Profil</h1>

        <form action="" method="post" class="pt-3 upd">

            <div class="form-row">
                <div class="form-group col">
                    <!-- <label>First Name :</label> -->
                    <input class="form-control" type="text" name="fname" value="<?= $data->First_name ?>" placeholder="First Name">
                </div>
                <div class="form-group col">
                    <!-- <label>Last Name :</label> -->
                    <input class="form-control" type="text" name="lname" value="<?= $data->Last_name ?>" placeholder="Last Name">
                </div>
            </div>

            <div class="form-group">
                <!-- <label>username :</label> -->
                <input class="form-control" type="text" name="name" value="<?= $data->username ?>" placeholder="Username">
            </div>

            <div class="form-group">
                <!-- <label>Email :</label> -->
                <input class="form-control" type="email" name="email" value="<?= $data->email ?>" placeholder="Email">
            </div>

            <div class="form-group">
                <!-- <label>Password :</label> -->
                <input class="form-control" type="password" name="password" value="<?= $data->password ?>" placeholder="Password">
            </div>

            <div class="">
                <input type="submit" class="button" name="submit" value="modifier">
            </div>

        </form>
    </div>
    
</div>
